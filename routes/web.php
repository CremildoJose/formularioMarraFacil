<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/insert', function (\Illuminate\Http\Request $request) {
    //dd($request);
    //$stuRef = app('firebase.firestore')->database()->collection('Students')->newDocument();
    $stuRef1 = app('firebase.firestore')->database()->collection('Students','2019')->newDocument();
    $stuRef1->set([
        'firstname' => 'seven2',
        'lastname'  => 'Stac2',
        'age'       => 1911
    ]);

    return view('welcome');
});
