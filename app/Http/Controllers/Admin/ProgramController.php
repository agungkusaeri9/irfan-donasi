<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Program;
use App\Models\ProgramBudget;
use App\Models\ProgramCategory;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class ProgramController extends Controller
{
    public function __construct()
    {

        $this->middleware('can:Program View', ['only' => ['index']]);
        $this->middleware('can:Program Create', ['only' => ['create','store']]);
        $this->middleware('can:Program Edit', ['only' => ['edit','update ']]);
        $this->middleware('can:Program Delete', ['only' => ['destroy ']]);
        $this->middleware('can:Program Change Status', ['only' => ['changeStatus ']]);
        $this->middleware('can:Program Detail', ['only' => ['show ']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.program.index', [
            'title' => 'Data Program'
        ]);
    }

    public function data()
    {
        if (request()->ajax()) {
            $data = Program::withCount('transactions_success')->with('category')->latest();
            return DataTables::eloquent($data)
                ->addIndexColumn()
                ->addColumn('category', function ($model) {
                    return $model->category->name ?? '-';
                })
                ->addColumn('user', function ($model) {
                    return $model->user->name ?? '-';
                })
                ->editColumn('donation_target', function ($model) {
                    return 'Rp. ' . number_format($model->donation_target);
                })
                ->editColumn('donation_collacted', function ($model) {
                    return 'Rp. ' . number_format($model->transactions_success->sum('nominal'));
                })
                ->addColumn('action', function ($model) {

                    $route = route('admin.program.edit', $model->id);
                    $routeDetail = route('admin.program.show', $model->id);
                    if(auth()->user()->getRoleNames()->first() === 'Admin' ||auth()->user()->getPermissions('Program Detail')){
                        $detail = "<a href='$routeDetail' class='btn btn-sm btn-warning btnDetail mx-1' data-id='$model->id' data-title='$model->title'><i class='fas fa fa-eye'></i> Detail</a>";
                    }else{
                        $detail = "";
                    }

                    if(auth()->user()->getRoleNames()->first() === 'Admin' ||auth()->user()->getPermissions('Program Edit')){
                        $edit = "<a href='$route' class='btn btn-sm btn-info btnEdit mx-1' data-id='$model->id' data-title='$model->title'><i class='fas fa fa-edit'></i> Edit</a>";
                    }else{
                        $edit = "";
                    }

                    if(auth()->user()->getRoleNames()->first() === 'Admin' ||auth()->user()->getPermissions('Program Delete')){
                        $delete = "<button class='btn btn-sm btn-danger btnDelete mx-1' data-id='$model->id' data-title='$model->title'><i class='fas fa fa-trash'></i> Hapus</button>";
                    }else{
                        $delete = "";
                    }
                    $action = $detail . $edit . $delete;
                    return $action;
                })
                ->editColumn('status', function ($model) {
                    if(auth()->user()->getRoleNames()->first() === 'Admin' ||auth()->user()->getPermissions('Program Change Status')){
                        if ($model->status == 1) {
                            $status = '<div class="custom-control custom-switch">
                                    <input type="checkbox" value=' . $model->status . ' class="custom-control-input btnStatus" checked id=' . $model->id . ' data-id="' . $model->id . '">
                                    <label class="custom-control-label" for=' . $model->id . '></label>
                                </div>';
                        } else {
                            $status = '<div class="custom-control custom-switch">
                                        <input type="checkbox"  value=' . $model->status . ' class="custom-control-input btnStatus" id=' . $model->id . ' data-id="' . $model->id . '">
                                        <label class="custom-control-label" for=' . $model->id . '></label>
                                    </div>';
                        }
                    }else{
                        $status = "";
                    }


                    return $status;
                })
                ->addColumn('created', function ($model) {
                    return $model->created_at->translatedFormat('d F Y');
                })
                ->rawColumns(['action', 'image', 'status'])
                ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.program.create', [
            'title' => 'Tambah Data',
            'post_categories' => ProgramCategory::orderBy('name')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => ['required', Rule::unique('programs')->ignore(request('id'))],
            'program_category_id' => ['required'],
            'description' => ['required'],
            'image' => ['image', 'mimes:jpg,png,jpeg', 'max:2048'],
            'budget_name' => ['required']
        ]);

        DB::beginTransaction();

        try {
            $data = request()->except(['budget_name', 'budget_icon', 'budget_nominal']);
            $budget_name = request('budget_name');
            $budget_icon = request('budget_icon');
            $budget_nominal = request('budget_nominal');

            // donasi target
            $budnom = 0;
            foreach ($budget_name as $key => $bn) {
                if ($budget_name[$key] && $budget_nominal[$key] && $budget_name[$key] !== 'Biaya Admin') {
                    $budnom = $budnom + $budget_nominal[$key];
                }
            }

            // biaya admin
            $fee = Setting::first()->admin_fee;
            $feeAdmin = $budnom * ($fee / 100);
            $budnom = $budnom + $feeAdmin;

            $data['donation_target'] = $budnom;
            if (request()->file('image')) {
                $data['image'] = request()->file('image')->store('programs', 'public');
            } else {
                $data['image'] = NULL;
            }
            $data['slug'] = Str::slug(request('name'));
            $data['user_id'] = auth()->id();
            $program = Program::create($data);

            // insert program budget
            foreach ($budget_name as $key => $bn) {
                if ($budget_name[$key] && $budget_nominal[$key] && $budget_name[$key] !== 'Biaya Admin') {
                    $program->budgets()->create([
                        'name' => $budget_name[$key],
                        'nominal' => $budget_nominal[$key]
                    ]);
                }
            }

            // insert biaya admin
            $program->budgets()->create([
                'name' => 'Biaya Admin',
                'nominal' => $feeAdmin
            ]);

            DB::commit();

            return redirect()->route('admin.program.index')->with('success', 'Data Program berhasil ditambahkan.');
        } catch (\Throwable $th) {
           dd($th);
            DB::rollback();
            return redirect()->route('admin.program.index')->with('error', 'Data Gagal berhasil ditambahkan.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Program::with('category', 'user')->findOrFail($id);
        return view('admin.pages.program.show', [
            'title' => 'Detail Program ' . $item->name,
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Program::with('category')->findOrFail($id);
        return view('admin.pages.program.edit', [
            'title' => 'Edit Data',
            'item' => $item,
            'program_categories' => ProgramCategory::orderBy('name')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Program::findOrFail($id);
        request()->validate([
            'name' => ['required', Rule::unique('programs')->ignore($item->id)],
            'program_category_id' => ['required'],
            'status' => ['required'],
            'description' => ['required'],
            'image' => ['image', 'mimes:jpg,png,jpeg', 'max:2048']
        ]);
        DB::beginTransaction();
        try {
            $data = request()->except(['budget_name', 'budget_nominal']);
            $budget_name = request('budget_name');
            $budget_nominal = request('budget_nominal');

            // donasi target
            $budnom = 0;
            foreach ($budget_name as $key => $bn) {
                if ($budget_name[$key] && $budget_nominal[$key] && $budget_name[$key] !== 'Biaya Admin') {
                    $budnom = $budnom + $budget_nominal[$key];
                }
            }

            // biaya admin
            $fee = Setting::first()->admin_fee;
            $feeAdmin = $budnom * ($fee / 100);
            $budnom = $budnom + $feeAdmin;

            $data['donation_target'] = $budnom;
            if (request()->file('image')) {
                if ($item->image) {
                    Storage::disk('public')->delete($item->image);
                }
                $data['image'] = request()->file('image')->store('programs', 'public');
            } else {
                $data['image'] = $item->image;
            }
            $data['slug'] = Str::slug(request('name'));
            $data['user_id'] = auth()->id();
            $item->update($data);

            // delete budgets
            ProgramBudget::where('program_id', $item->id)->delete();
            // insert program budget
            foreach ($budget_name as $key => $bn) {
                if ($budget_name[$key] && $budget_nominal[$key] && $budget_name[$key] !== 'Biaya Admin') {
                    $item->budgets()->create([
                        'name' => $budget_name[$key],
                        'nominal' => $budget_nominal[$key]
                    ]);
                }
            }

            // insert biaya admin
            $item->budgets()->create([
                'name' => 'Biaya Admin',
                'nominal' => $feeAdmin
            ]);

            DB::commit();

            return redirect()->route('admin.program.index')->with('success', 'Data Program berhasil disimpan.');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->route('admin.program.index')->with('error', 'Data Gagal berhasil disimpan.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Program::find($id)->delete();
        return response()->json(['status' => 'succcess', 'message' => 'Data Program berhasil dihapus.']);
    }

    public function changeStatus()
    {
        $status = request('status');
        $item = Program::findOrFail(request('id'));
        if ($status == 1) {
            $item->status = 0;
        } elseif ($status == 0) {
            $item->status = 1;
        }
        $item->save();

        return response()->json(['status' => 'succcess', 'message' => 'Status Program berhasil diubah.']);
    }


    public function budgets()
    {
        if (request()->ajax()) {
            $program_id = request('program_id');
            $budgets = ProgramBudget::where('program_id', $program_id)->get();
            return response()->json($budgets);
        }
    }
}
