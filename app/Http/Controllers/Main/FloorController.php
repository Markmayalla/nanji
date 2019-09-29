<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Helpers\ApiWebHelper;
use App\Http\Helpers\SearchQuery;
use App\models\FloorModel;
use Illuminate\Http\Request;

class FloorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $floors = SearchQuery::filter(FloorModel::orderBy('id','asc'),['name'],'like')->paginate(SearchQuery::per_page());
        return ApiWebHelper::response(compact('floors'),'floor.index','floors');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $model = new FloorModel();
        $fields = $model->att();
        return ApiWebHelper::response(compact('fields'),'floor.create');
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
        $floors = function() use ($request){
            return FloorModel::create([
                'name' => $request->name,
            ]);
        };
        $floors = $floors();
        return ApiWebHelper::response([compact('floors'),'Successfull!!'],['floor.index','Created'],['','success'],true);
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
        $floors = [];
        if($id != null){
            $floors = FloorModel::where('id',$id)->get();
        }
        return ApiWebHelper::response(compact('floors'),'floor.show');
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
        $floors = FloorModel::where('id',$id);
        if(!$floors->count()){
            return ApiWebHelper::response([[],'Not found ' . $id],['floor.index','not found'],['','warning'],true);
        }
        $floor = $floors->get()[0];
        $model = new FloorModel();
        $fields = $model->att();
        return ApiWebHelper::response(compact('fields','floor'),'floor.edit');
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
        $floors = FloorModel::where('id',$id);
        if(!$floors->count()){
            return ApiWebHelper::response([],'floor.index');
        }
        $floors = function() use ($request,$floors){
            return $floors->update([
                'name' => $request->name,
            ]);
        };
        $floors = $floors();
        return ApiWebHelper::response([compact('floors'),'Successfull Updated!!'],['floor.index','Updated Successfull'],['','success'],true);
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
