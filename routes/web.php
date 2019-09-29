<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\models\Roles\UserRoleModel;

Route::get('/','PageController@index')->name('home_page');
Route::get('/about','PageController@about')->name('about');
Route::get('/volgabus/{id?}','PageController@volgabus')->name('volgabus');
Route::get('/bonluck','PageController@bonluck')->name('bonluck');
Route::get('/kamaz','PageController@kamaz')->name('kamaz');
Route::get('/electrical','PageController@electrical')->name('electrical');
Route::get('/bus/list','Main\BusController@listing')->name('bus.list');

Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::get('/show_model', 'HomeController@index')->name('show_model');
    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::get('/show_model', 'Roles\RolesController@display_roles')->name('show_model');

    //Bus Resource
    Route::get('/bus','Main\BusController@index')->name('bus.index');
    Route::get('/bus/{id}/edit','Main\BusController@edit')->name('bus.edit');
    Route::get('/bus/{id}/show','Main\BusController@edit')->name('bus.show');
    Route::put('/bus/{id}','Main\BusController@update')->name('bus.update');
    Route::get('/bus/create','Main\BusController@create')->name('bus.create');
    Route::post('/bus/store','Main\BusController@store')->name('bus.store');

    //Floor Resource
    Route::get('/floor','Main\FloorController@index')->name('floor.index');
    Route::get('/floor/{id}/edit','Main\FloorController@edit')->name('floor.edit');
    Route::get('/floor/{id}/show','Main\FloorController@edit')->name('floor.show');
    Route::put('/floor/{id}','Main\FloorController@update')->name('floor.update');
    Route::get('/floor/create','Main\FloorController@create')->name('floor.create');
    Route::post('/floor/store','Main\FloorController@store')->name('floor.store');

    //brand Resource
    Route::get('/brand','Main\MakeController@index')->name('brand.index');
    Route::get('/brand/{id}/edit','Main\MakeController@edit')->name('brand.edit');
    Route::get('/brand/{id}/show','Main\MakeController@edit')->name('brand.show');
    Route::put('/brand/{id}','Main\MakeController@update')->name('brand.update');
    Route::get('/brand/create','Main\MakeController@create')->name('brand.create');
    Route::post('/brand/store','Main\MakeController@store')->name('brand.store');

    //model Resource
    Route::get('/model','Main\ModelController@index')->name('model.index');
    Route::get('/model/{id}/edit','Main\ModelController@edit')->name('model.edit');
    Route::get('/model/{id}/show','Main\ModelController@edit')->name('model.show');
    Route::put('/model/{id}','Main\ModelController@update')->name('model.update');
    Route::get('/model/create','Main\ModelController@create')->name('model.create');
    Route::post('/model/store','Main\ModelController@store')->name('model.store');

    //types Resource
    Route::get('/type','Main\TypeController@index')->name('type.index');
    Route::get('/type/{id}/edit','Main\TypeController@edit')->name('type.edit');
    Route::get('/type/{id}/show','Main\TypeController@edit')->name('type.show');
    Route::put('/type/{id}','Main\TypeController@update')->name('type.update');
    Route::get('/type/create','Main\TypeController@create')->name('type.create');
    Route::post('/type/store','Main\TypeController@store')->name('type.store');

    ///Roles
    Route::get('/roles_settings', 'Roles\RolesController@display_roles')->name('roles_settings');
    Route::get('/populate_roles', 'Roles\RolesController@populate_roles')->name('populate_roles');
    Route::post('/change_roles', 'Roles\RolesController@change_roles')->name('change_roles');
});

View::composer(["*"], function($view){
    $roles = UserRoleModel::roles();
    ////Notifications
    $months = array(
                    1 => "January",
                    2 => "February",
                    3 => "March",
                    4 => "April",
                    5 => "May",
                    6 => "June",
                    7 => "July",
                    8 => "August",
                    9 => "September",
                    10 => "October",
                    11 => "November",
                    12 => "December"
                );

    $months_short = array(
                    1 => "Jan",
                    2 => "Feb",
                    3 => "Mar",
                    4 => "Apr",
                    5 => "May",
                    6 => "Jun",
                    7 => "Jul",
                    8 => "Aug",
                    9 => "Sep",
                    10 => "Oct",
                    11 => "Nov",
                    12 => "Dec"
                );         

    $call_model_sms = function($header,$body,$type){
        ?>
            <script type="text/javascript">
                $(document).ready(function(){
                    call_model("<?=$header;?>", "<?=$body;?>", "<?=$type;?>");

                    function call_model(title, body, type){
                        $("#errorModelButton").click();
                        $("#largeModalLabel").html(title);
                        $("#body_sms").html(body);
                        $("#body_sms").addClass('alert alert-'+type);
                    }
                });
            </script>
        <?php
    };

    $name = Route::currentRouteName();
    $validation = false;
    if(array_key_exists($name,$roles)){
        if(!$roles[$name] == 1){
            $validation = true;
        }
    }else{
        $validation = true;
    }
    if($name == "home"){
        $validation = false;
        $name = "dashboard";
    }
    $view->with([
                'view_months' => $months, 
                'view_months_short' => $months_short, 
                'call_model_sms' => $call_model_sms,
                'navigation' => $roles, 
                'authorization' => $validation, 
                'page_name' => $name, 
                'date_viewer' => function($date){
                                    $date = date_create($date);
                                    return date_format($date ,'d/m/Y');
                                },
                'date_picker' => function($date){
                                    $date = date_create($date);
                                    return date_format($date ,'Y-m-d');
                                },
                'roles_button' => function($key) use($roles){
                            if(array_key_exists($key,$roles)){
                                if($roles[$key] == 1){
                                    return true;
                                }else{
                                    return false;
                                }
                            }else{
                                return false;
                            }
                        }
                ]);
});
