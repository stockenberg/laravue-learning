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


Route::get('/todo-object', function () {
	return view('todo-object');
})->name("todo.object");

Route::get('/one-way', function () {
	return view('one-way');
})->name("one.way");

Route::get('/two-way', function () {
	return view('two-way');
})->name("two.way");

Route::get('/listen', function () {
	return view('listen');
})->name("listen");


Route::get('/form-data', function () {
	return view('form-data');
})->name("form-data");

Route::get('/tabs', function () {
	return view('tabs');
})->name("tabs");

Route::get('/conditions', function () {
	return view('conditions');
})->name("conditions");


Route::get('/register-components', function () {
	return view('register-components');
})->name("register.components");


Route::get('/attr-class-binding', function () {
	return view('attr-class-binding');
})->name("attr.class.binding");


Route::get('/filter', function () {
	return view('filter');
})->name("filter");


Route::get('/computed', function () {
	return view('computed');
})->name("computed");

Route::get('/transitions', function () {
	return view('transitions');
})->name("transitions");

Route::get('/events', function () {
	return view('events');
})->name("events");

Route::get('/component', function () {
	return view('component');
})->name("component");

Route::get('/custom-component', function () {
	return view('custom-component');
})->name("custom-component");


Route::get('/nesting', function () {
	return view('nesting');
})->name("nesting");


Route::get("/api/users", function () {
	return \App\User::orderBy("id", "DESC")->get();
})->name("users");

Route::post('/api/user/save', [
	"uses" => "Controller@store",
	"as" => "post"
]);

Route::delete('/api/users/delete', function () {
	\App\User::truncate();
})->name("get");

Route::get('/get', function () {
	return view('get');
})->name("get");

Route::get('/post', function () {
	return view('post');
})->name("post");

Route::get('/patch', function () {
	return view('patch');
})->name("patch");

Route::get('/single-page', function () {
	return view('single-page');
})->name("single-page");

Route::get('/put', function () {
	return view('put');
})->name("put");

Route::patch('/api/patch/user/{id}', function ($id, \Illuminate\Http\Request $request) {
	$user = \App\User::find($id);
	$user->{$request->input("key")} = $request->input("value");
	$user->update();
})->name("patch.user.by.id");

Route::put('/api/put/user/', function (\Illuminate\Http\Request $request) {
	$user = \App\User::find($request->input("id"));
	$user->update($request->all());
	// TODO : implement me!
})->name("put.user.by.id");

Route::get('/communication', function () {
	return view('communication');
})->name("communication");
