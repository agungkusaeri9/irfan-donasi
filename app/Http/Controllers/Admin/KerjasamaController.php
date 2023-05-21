<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kerjasama;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class KerjasamaController extends Controller
{
    public function index()
    {
        return view('admin.pages.kerjasama.index', [
            'title' => 'Data Kerjasama'
        ]);
    }

    public function data()
    {
        if (request()->ajax()) {
            $data = Kerjasama::query();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($model) {
                    if (auth()->user()->getRoleNames()->first() === 'Super Admin' || auth()->user()->getPermissions('Kerjasama Delete')) {
                        $delete = "<button class='btn btn-sm btn-danger btnDelete mx-1' data-id='$model->id' data-name='$model->name'><i class='fas fa fa-trash'></i> Hapus</button>";
                    } else {
                        $delete = "";
                    }

                    $action = $delete;
                    return $action;
                })
                ->rawColumns(['action'])
                ->make(true);
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
        Kerjasama::find($id)->delete();
        return response()->json(['status' => 'succcess', 'message' => 'Metode Pembayaran berhasil dihapus.']);
    }
}
