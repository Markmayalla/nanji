<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Make_model;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;;

class MakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Make_model::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('make.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //return $request->all();
        // Make_model::create([
        //     'name' => $request->name,
        //     'description' => $request->description,
        // ]);
        try {
            
            Make_model::create($request->only('name','description'));
        
        } catch(QueryException $e) {
            return $e->getMessage();
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
        //
        //Make_model::where('id','=',$id)->get();
        $show = Make_model::ByName($id)->get()[0];
        $show->models;
        return $show;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $brand = Make_model::byName($id);
        
        if (!$brand->count()) {
            return redirect()->route('makes.index');
        }

        $brand = $brand->get()[0];

        return view('make.edit', compact('brand'));
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
        //
        $validation = Validator::make($request->all(),[
            'name' => 'required|string|max:4',
            'description' => 'required',
        ]);
        
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation);
        }

        Make_model::byName($id)->update($request->only('name','description'));
        return redirect()->route('makes.show',['id'=>$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Make_model::where('id',$id)->delete();
    }
}
