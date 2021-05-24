<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{

    public function index()
    {
        $emps = Crud::all();
        return view('CRUD.index',compact('emps'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required|min:3|max:20',
            'username'=>'required|min:5|max:25|unique:cruds',
            'email'=> 'required|unique:cruds'
        ]);
        // return $request->input();
            //طريقة اولى
            // $emps = New Crud;
            // $emps ->name     = $request->name;
            // $emps ->username = $request->username;
            // $emps ->phone    = $request->phone;
            // $emps ->email    = $request->email;
            // $emps -> save();
            // return back()->with('success','Data Has been Successfulu to add inserted');
            //طريقة ثانية
            $query = DB::table('cruds')->insert([
                'name'=>$request->input('name'),
                'username'=>$request->input('username'),
                'phone'=>$request->input('phone'),
                'email'=>$request->input('email'),
            ]);
            if ($query) {
                return back()->with('success','Data Has been Successfulu to add inserted');
            }else{
                return back()->with('faild','Data Has been worning to not add inserted');
            }
    }

    public function show(Crud $crud)
    {
        //
    }


    public function edit(Crud $crud)
    {
        //
    }

    public function update(Request $request, Crud $crud)
    {
        //
    }

    public function destroy(Crud $crud)
    {
        dd($request->id);
        // return " delete th data ?";
    }
}
