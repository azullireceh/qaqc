<?php

use Illuminate\Support\Facades\Route;

use App\http\Controllers\MRSController;
use App\http\Controllers\MaterialMRSController;
use App\http\Controllers\HistoryMRSController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//index qaqc
Route::get('/', function () {
    return view('layout/master');
    //return view('layout/masterviewuser');

});

//index mrs
Route::get("/mrs",[MRSController::class,'IndexMrs']);
//input data mrs
route::get('/mrs/forminputmrs',[MRSController::class,'FormInputMrs']);

Route::post("/mrs/createmrs",[MRSController::class,'CreateMrs']);


//edit mrs
route::get('/mrs/{id}/editmrs',[MRSController::class,'ShowMrs']);
route::post('/mrs/updatemrs',[MRSController::class,'UpdateMrs']);

//delete mrs
route::get('/mrs/{id}/deletemrs',[MRSController::class,'DeleteMrs']);

//route::get('/mrs/{id}/materialmrs',[MRSController::class,'showMaterialMrs']);



//index material mrs
Route::get("/materialmrs/{id}/materialmrs",[MaterialMRSController::class,'IndexMaterialMrs']);

//input data material mrs
route::get('/materialmrs/{id}/forminputmaterialmrs',[MaterialMRSController::class,'FormInputMaterialMrs']);

Route::post("/materialmrs/creatematerialmrs",[MaterialMRSController::class,'CreateMaterialMrs']);

//delete material mrs
route::get('/materialmrs/{id}/deletematerialmrs',[MaterialMRSController::class,'DeleteMaterialMrs']);

//edit mrs
route::get('/materialmrs/{id}/showmaterialmrs',[MaterialMRSController::class,'ShowMaterialMrs']);
route::post('/materialmrs/updatematerialmrs',[MaterialMRSController::class,'UpdateMaterialMrs']);

//index history mrs
Route::get("/historymrs/{id}/historymrs",[HistoryMRSController::class,'IndexHistoryMrs']);

//input data history mrs
route::get('/historymrs/{id}/forminputhistorymrs',[HistoryMRSController::class,'FormInputHistoryMrs']);

Route::post("/historymrs/createhistorymrs",[HistoryMRSController::class,'CreateHistoryMrs']);

//delete history mrs
route::get('/historymrs/{id}/deletehistorymrs',[HistoryMRSController::class,'DeleteHistoryMrs']);

//edit history mrs
route::get('/historymrs/{id}/showhistorymrs',[HistoryMRSController::class,'ShowHistoryMrs']);
route::post('/historymrs/updatehistorymrs',[HistoryMRSController::class,'UpdateHistoryMrs']);

//View MRS
route::get('/mrs/{id}/viewmrs',[MRSController::class,'ViewMRS']);