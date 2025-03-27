<?php

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// Xóa list Task




Route::get('/', function () {
    $tasks = Task::orderBy('id','desc')->paginate(10);//hiện thị mỗi trang
    return view('index', ['tasks' => $tasks]);
}) ->name('tasks.index');;

Route::get('/tasks/create', function () {
    return view('create');
})->name('tasks.create');


Route::get('/tasks/{id}', function ($id) {
    $task = Task::findOrFail($id);
    return view('detail', ['task' => $task]);
})->name('tasks.detail');

Route::post('/tasks', function (TaskRequest $request) {

    // $data= $request->validate([
    //     'title' => 'required|max:255',
    //     'description' => 'required|min:3|max:255',
    //     'long_description' => 'required|min:3|max:255',
    // ]);
    // $task = new Task();
    // $task->title = $data['title'];
    // $task->description = $data['description'];
    // $task->long_description = $data['long_description'];
    // $task->completed = false;// set default value = false
    // $task->save();
    $task = Task::create($request->all());
    return redirect()->route('tasks.index')->with('success', 'Task created successfully');
})->name('tasks.store');


Route::get('/tasks/{id}/edit', function ($id) {
    $task = Task::findOrFail($id);
    return view('edit', ['task' => $task]);
})->name('tasks.edit');



Route::put('/tasks/{id}', function (TaskRequest $request, $id) {
    // $data= $request->validate([
    //     'title' => 'required|max:255',
    //     'description' => 'required|min:3|max:255',
    //     'long_description' => 'required|min:3|max:255',
    // ]);
    //
    // $task->title = $data['title'];
    // $task->description = $data['description'];
    // $task->long_description = $data['long_description'];
    // $task->save();
    $task = Task::findOrFail($id)->update($request->all());
    return redirect()->route('tasks.index')->with('success', 'Task updated successfully');
})->name('tasks.update');



Route::delete('/tasks/{id}', function ($id) {
    $task = Task::findOrFail($id);
    $task->delete();
    return redirect()->route('tasks.index')->with('success', 'Task deleted successfully');
})->name('tasks.delete');

Route::put('/tasks/{id}/completed', function ($id) {
    $task = Task::findOrFail($id);
    $task->completed = !$task->completed; // Đảo ngược trạng thái completed
    $task->save(); // Lưu lại thay đổi
    return redirect()->route('tasks.index')->with('success', 'Task completed status updated successfully');
})->name('tasks.completed');

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
