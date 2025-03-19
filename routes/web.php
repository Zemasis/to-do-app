<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;
// Xóa list Task
Route::get('/', function () {
    $tasks = Task::orderBy('id','desc')->get();
    return view('index', ['tasks' => $tasks]);
});

Route::get('/tasks/{id}', function ($id) {
    $task = Task::FindOrFail($id);
    return view('detail', ['task' => $task]);
})->name('task.detail');



// Route::get('/greeting', function () {
//     return "Hello World";
// })->name('greeting'); // dăth tên cho route

// Route::get('/greeting/{name}', function ($name) {
//     return "Hello World". $name;
// });

// Route::get('/hto', function () {
//     return redirect('/greeting');
// });
// // redirect trả về 1 response với status code 302 và header location

// Route::get('/hi2', function () {
//     return redirect()->route('greeting');
// });
// //cách này là redirect đến route có tên là greeting

// Route::get('/Home', function () {
//     return redirect('/');
// });
