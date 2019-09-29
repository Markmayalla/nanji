<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Helpers\ApiWebHelper;
use App\Http\Helpers\DatabaseHelper;
use App\Http\Helpers\FileUploadHelper;
use App\Http\Helpers\ResponseHelper;
use App\Http\Helpers\SearchQuery;
use App\Http\Redirect\RedirectHelper;
use App\models\BusModel;
use App\models\BusPictureModel;
use App\models\FloorModel;
use App\models\Make_model;
use App\models\Model_model;
use App\models\TypeModel;
use App\User;
use Illuminate\Http\Request;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $buses = SearchQuery::filter(BusModel::orderBy('id','asc'),['name','email'],'like')->paginate(SearchQuery::per_page());
        return ApiWebHelper::response(compact('buses'),'bus.index','buses');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $brands = Make_model::all();
        $models = Model_model::all();
        $types = TypeModel::all();
        $floors = FloorModel::all();
        $model = new BusModel();
        $fields = $model->att();
        return ApiWebHelper::response(compact('brands','models','types','floors','fields'),'bus.create');
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
        $buses = function() use ($request){
            return BusModel::create([
                'brand_id' => $request->brand,
                'model_id' => $request->model,
                'type_id' => $request->type,
                'floor_id' => $request->floor,
                'title' => $request->title,
                'description' => $request->description,
                'passanger_from' => $request->passanger_from,
                'passanger_to' => $request->passanger_to,
                'seat_from' => $request->seat_from,
                'seat_to' => $request->seat_to,
                'no_of_door' => $request->no_of_door,
                'big_descriptioin' => $request->big_descriptioin,
                'body_type' => $request->body_type,
                'wheel_formular' => $request->wheel_formular,
                'drive_wheel' => $request->drive_wheel,
                'dimensions' => $request->dimensions,
                'curb' => $request->curb,
                'weight' => $request->weight,
                'front_axle' => $request->front_axle,
                'main_bridge' => $request->main_bridge,
                'front_suspension' => $request->front_suspension,
                'rear_suspension' => $request->rear_suspension,
                'steering' => $request->steering,
                'brake_system' => $request->brake_system,
                'climate' => $request->climate,
                'engine' => $request->engine,
                'transmission' => $request->transmission,
                'tires' => $request->tires,
            ]);
        };
        $buses = $buses();
        if($buses->wasRecentlyCreated){
            $bus_pictures = FileUploadHelper::upload_many($request->file('picture'),'buses/'.$buses->id);
            $array = [];
            foreach($bus_pictures as $pic){
                $array[] = new BusPictureModel([
                    'picture' => $pic,
                    'bus_id' => $buses->id
                ]);
            }
            if(count($array)){
                $buses->pictures()->saveMany($array);
            }
        }
        return ApiWebHelper::response([compact('buses'),'Successfull!!'],['bus.index','Created'],['','success'],true);
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
        $buses = [];
        if($id != null){
            $buses = BusModel::where('id',$id)->get();
        }
        return ApiWebHelper::response(compact('buses'),'bus.show');
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
        $buses = BusModel::where('id',$id);
        if(!$buses->count()){
            return ApiWebHelper::response([[],'Not found ' . $id],['bus.index','not found'],['','warning'],true);
        }
        $bus = $buses->get()[0];
        $brands = Make_model::all();
        $models = Model_model::all();
        $types = TypeModel::all();
        $floors = FloorModel::all();
        $model = new BusModel();
        $fields = $model->att();
        return ApiWebHelper::response(compact('fields','brands','models','types','floors','bus'),'bus.edit');
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
        $buses = BusModel::where('id',$id);
        if(!$buses->count()){
            return ApiWebHelper::response([],'bus.index');
        }
        $buses = function() use ($request,$buses){
            return $buses->update([
                'brand_id' => $request->brand,
                'model_id' => $request->model,
                'type_id' => $request->type,
                'floor_id' => $request->floor,
                'title' => $request->title,
                'description' => $request->description,
                'passanger_from' => $request->passanger_from,
                'passanger_to' => $request->passanger_to,
                'seat_from' => $request->seat_from,
                'seat_to' => $request->seat_to,
                'no_of_door' => $request->no_of_door,
                'big_descriptioin' => $request->big_descriptioin,
                'body_type' => $request->body_type,
                'wheel_formular' => $request->wheel_formular,
                'drive_wheel' => $request->drive_wheel,
                'dimensions' => $request->dimensions,
                'curb' => $request->curb,
                'weight' => $request->weight,
                'front_axle' => $request->front_axle,
                'main_bridge' => $request->main_bridge,
                'front_suspension' => $request->front_suspension,
                'rear_suspension' => $request->rear_suspension,
                'steering' => $request->steering,
                'brake_system' => $request->brake_system,
                'climate' => $request->climate,
                'engine' => $request->engine,
                'transmission' => $request->transmission,
                'tires' => $request->tires,
            ]);
        };
        $buses = $buses();
        return ApiWebHelper::response([compact('buses'),'Successfull Updated!!'],['bus.index','Updated Successfull'],['','success'],true);
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

    public function listing(){
        $buses = SearchQuery::filter(BusModel::orderBy('id','asc'),['name','email'],'like')->paginate(SearchQuery::per_page());
        return view('bus.list',compact('buses')); 
    }
}
