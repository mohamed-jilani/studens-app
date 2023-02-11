<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
/*
Route::get('/students',[StudentController::class,'displayform']);
Route::get('/student',function () {
    return view('studentform');
});
*/

Route::get('/student','App\Http\Controllers\StudentController@displayform');
Route::post('/add_data','App\Http\Controllers\StudentController@save');


Route::get('/studentlist','App\Http\Controllers\StudentController@studentslist');

Route::get('/studentlist','App\Http\Controllers\StudentController@index');

Route::get('/studentadd','App\Http\Controllers\StudentController@displayform');

Route::get('/student_edit/{id}', 'App\Http\Controllers\StudentController@edit');
Route::post('/update_data/{id}', 'App\Http\Controllers\StudentController@update_data');

Route::get('/student_delete/{id}', 'App\Http\Controllers\StudentController@delete');

Route::get('/','App\Http\Controllers\StudentController@index');

Route::get('/fcm','App\Http\Controllers\StudentController@firebaseCM');
