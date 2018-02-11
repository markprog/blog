<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.02.2018
 * Time: 18:36
 */

use App\Task;
use Illuminate\Http\Request;


/**
 * Вывести панель с задачами
 */
Route::get('/', function () {
    return view('tasks');
});

/**
 * Добавить новую задачу
 */
Route::post('/task', function (Request $request) {
    //
});

/**
 * Удалить задачу
 */
Route::delete('/task/{task}', function (Task $task) {
    //
});