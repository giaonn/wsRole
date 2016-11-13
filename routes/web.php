<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function (){
   return view('wel');
});

Route::get('getUser',function (){
    $users = DB::table('account')->select(DB::raw('user,pass'))->where('pass','<',40)->get();

foreach($users as $member){


    echo 'name: '.$member->user.', pass: '.$member->pass.'<br>';
}

});

Route::get('insertUser',function (){
   $user =DB::table('account')->insert(['user'=>'phong','pass'=>'54'],['user'=>'lan','pass'=>'ds']);
});

Route::get('delUser',function (){
    DB::table('account')->where('pass','<',50)->delete();
});

Route::get('/addMAccount',function (){
    $account = new \App\MAcount();
    $account->user='quan';
    $account->pass='098';
    $account->save();

    echo 'add';
});

Route::get('getAllAcc',function () {
    $lstAcc = \App\MAcount::all()->where('pass', '>', 100);

    foreach ($lstAcc as $mem) {
        echo $mem->user;
    }
});
//////LOGIN


Route::get('login',function (){
    return view('Login');

});

Route::post('postForm',['as' => 'postForm','uses'=> 'LoginTest@checkUser']);





