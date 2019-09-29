<?php

namespace App\Http\Controllers;

use App\models\BusModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function index()
    {
        return view('pages._home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function volgabus($id = null)
    {
        $bus = [];
        $pics = [];
        if($id != null){
            $buses = BusModel::where('id',$id);
            if($buses->count()){
                $bus = $buses->get()[0];
                foreach($bus->pictures as $pic){
                    $pics[] = Storage::disk('public')->url($pic->picture);
                }
            }
        }
        return view('pages.volgabus',compact('bus','pics'));
    }

    public function bonluck()
    {
        return view('pages.bonluck');
    }

    public function kamaz()
    {
        return view('pages.kamaz');
    }

    public function buses(){
        if(isset($_GET['type'])){
        }
    }

    public function electrical()
    {
        return view('pages.electrical');
    }
}
