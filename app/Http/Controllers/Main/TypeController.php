<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Helpers\ApiWebHelper;
use App\Http\Helpers\SearchQuery;
use App\models\TypeModel;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $types = SearchQuery::filter(TypeModel::orderBy('id','asc'),['name'],'like')->paginate(SearchQuery::per_page());
        return ApiWebHelper::response(compact('types'),'type.index','types');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $model = new TypeModel();
        $fields = $model->att();
        return ApiWebHelper::response(compact('fields'),'type.create');
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
        $types = function() use ($request){
            return TypeModel::create([
                'name' => $request->name,
            ]);
        };
        $types = $types();
        return ApiWebHelper::response([compact('types'),'Successfull!!'],['type.index','Created'],['','success'],true);
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
        $types = [];
        if($id != null){
            $types = TypeModel::where('id',$id)->get();
        }
        return ApiWebHelper::response(compact('types'),'type.show');
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
        $types = TypeModel::where('id',$id);
        if(!$types->count()){
            return ApiWebHelper::response([[],'Not found ' . $id],['type.index','not found'],['','warning'],true);
        }
        $type = $types->get()[0];
        $model = new TypeModel();
        $fields = $model->att();
        return ApiWebHelper::response(compact('fields','type'),'type.edit');
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
        $types = TypeModel::where('id',$id);
        if(!$types->count()){
            return ApiWebHelper::response([],'type.index');
        }
        $types = function() use ($request,$types){
            return $types->update([
                'name' => $request->name,
            ]);
        };
        $types = $types();
        return ApiWebHelper::response([compact('types'),'Successfull Updated!!'],['type.index','Updated Successfull'],['','success'],true);
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
