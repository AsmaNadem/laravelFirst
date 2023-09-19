<?php

namespace App\Http\Controllers;

use http\Env\Response;
use http\Params;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\view\view;
use App\Models\Test;

class exampleController extends Controller

{
private $columns = ['name' , 'cont'];
    /**
     * Display a listing of the resource.
     */
    public function index() :view
    {
//        return dd(55);
        $test=Test::get();

       return view('example.index',compact('test'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() :view
    {
        return view('example.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data= $request->validate([
            'name'=>'required|string',
            'cont'=>'required|string',
           'show'=>'required|in:1,0',
           'status'=>'required|in:enable,disable'],
           [
               'name'=>'Title',
               'cont'=>'Content Data',
               'show'=>'Show Data',
               'status'=>'Status'


        ]);
//        dd($request->name,$request->cont);
//        $test=new Test();
//        $test->name=$request->name;
//        $test->cont=$request->cont;
//        $test->save();
        Test::create($data);
        return redirect('example');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) :view
    {
        $test=Test::find($id);
        return view('example.show',compact('test'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) :view
    {
        $test=Test::find($id);
        return view('example.edit',compact('test'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) :RedirectResponse
    {
        $data= $request->validate([
            'name'=>'required|string',
            'cont'=>'required|string',

        ]);
        Test::updated($data);
        Test::where('id',$id)->update($request->only($this->columns));
         return redirect('example');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) :RedirectResponse
    {
       Test::where('id',$id)->delete();
        return redirect('example');
    }


    public function forceDelete(string $id) :RedirectResponse
    {
        Test::where('id',$id)->forceDelete();
        return redirect('example');
    }

}
