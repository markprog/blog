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
 * ������� ������ � ��������
 */
Route::get('/', function () {
    return view('tasks');
});

/**
 * �������� ����� ������
 */
Route::post('/task', function (Request $request) {
    //
});

/**
 * ������� ������
 */
Route::delete('/task/{task}', function (Task $task) {
    //
});