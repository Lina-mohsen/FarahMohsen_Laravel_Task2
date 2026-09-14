<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});
   Route:: get('/About ',function() {

return view ('About');
   }
   );
    // post بدي ارسل ل السيرفر داتا

 Route :: post("/tasks", [TaskController::class ,"store"]);
 Route :: get ("/", [TaskController::class,"index"]);
 Route :: get ("/tasks/{id}", [TaskController::class,'show']);
 Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);
 Route::get('/tasks/{id}/edit', [TaskController::class, 'edit']);
 Route::put('/tasks/{id}', [TaskController::class, 'update']);





