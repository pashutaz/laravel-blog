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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task_id}', 'TasksController@show');


//Route::get('/tasks', function () {
////	$tasks = DB::table('tasks')->get(); //query builder
////    return $tasks;
//
//    $tasks = \App\Task::all();
//	return view('tasks.index', compact('tasks'));
//});
//
//Route::get('/tasks/{task_id}', function ($id) {
//	// dd($id); //debug
////	$task = DB::table('tasks')->find($id);
////	return $task;
//
//    $task = \App\Task::find($id);
//	return view('tasks.show', compact('task'));
//});