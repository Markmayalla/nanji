<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Helpers\ApiWebHelper;
use App\Http\Helpers\SearchQuery;
use App\models\Make_model;
use App\models\Model_model;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $models = SearchQuery::filter(Model_model::orderBy('id','asc'),['name'],'like')->paginate(SearchQuery::per_page());
        return ApiWebHelper::response(compact('models'),'model.index','models');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $model = new Model_model();
        $fields = $model->att();
        $brands = Make_model::all();
        return ApiWebHelper::response(compact('fields','brands'),'model.create');
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
        $this->validate($request,[]);
        $models = function() use ($request){
            return Model_model::create([
                'name' => $request->name,
                'brand_id' => $request->brand,
            ]);
        };
        $models = $models();
        return ApiWebHelper::response([compact('models'),'Successfull!!'],['model.index','Created'],['','success'],true);
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
        $models = [];
        if($id != null){
            $models = Model_model::where('id',$id)->get();
        }
        return ApiWebHelper::response(compact('models'),'model.show');
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
        $models = Model_model::where('id',$id);
        if(!$models->count()){
            return ApiWebHelper::response([[],'Not found ' . $id],['model.index','not found'],['','warning'],true);
        }
        $model = $models->get()[0];
        $brands = Make_model::all();
        $modeled = new Model_model();
        $fields = $modeled->att();
        return ApiWebHelper::response(compact('fields','model','brands'),'model.edit');
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
        $this->validate($request,[]);
        $models = Model_model::where('id',$id);
        if(!$models->count()){
            return ApiWebHelper::response([],'model.index');
        }
        $models = function() use ($request,$models){
            return $models->update([
                'name' => $request->name,
                'brand_id' => $request->brand,
            ]);
        };
        $models = $models();
        return ApiWebHelper::response([compact('models'),'Successfull Updated!!'],['model.index','Updated Successfull'],['','success'],true);
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
    }
}
