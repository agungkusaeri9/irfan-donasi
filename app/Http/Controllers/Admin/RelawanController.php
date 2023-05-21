<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Relawan;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class RelawanController extends Controller
{
    public function index()
    {
        return view('admin.pages.relawan.index', [
            'title' => 'Data Relawan'
        ]);
    }

    public function data()
    {
        if (request()->ajax()) {
            $data = Relawan::query();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($model) {
                    // if (auth()->user()->getRoleNames()->first() === 'Admin' || auth()->user()->getPermissions('Relawan Edit')) {
                    //     $edit = "<button class='btn btn-sm btn-info btnEdit mx-1' data-id='$model->id' data-name='$model->name' data-number='$model->number' data-description='$model->description'><i class='fas fa fa-edit'></i> Edit</button>";
                    // } else {
                    //     $edit = "";
                    // }
                    if (auth()->user()->getRoleNames()->first() === 'Admin' || auth()->user()->getPermissions('Relawan Delete')) {
                        $delete = "<button class='btn btn-sm btn-danger btnDelete mx-1' data-id='$model->id' data-name='$model->name'><i class='fas fa fa-trash'></i> Hapus</button>";
                    } else {
                        $delete = "";
                    }

                    $action =  $delete;
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
        Relawan::find($id)->delete();
        return response()->json(['status' => 'succcess', 'message' => 'Metode Pembayaran berhasil dihapus.']);
    }
}
