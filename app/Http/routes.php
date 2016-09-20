<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('basic1',function(){
    return 'hello world';
});

Route::match(['get','post'],'muty1',function(){
    return 'mty1';
});

Route::any('mty2',function(){    //http://localhost/laravel/public/mty2
    return 'mty2';
});
//Route::get('user/{id}',function($id){ //http://localhost/laravel/public/user/5
//    return 'User--'.$id;
//});
Route::get('user/{name?}',function($name ='sk'){ //http://localhost/laravel/public/user/
    return 'User--name-'.$name;
})->where('name','[A-Za-z]+');
*/

//Route::get('user/{id}/{name?}',function($id,$name ='sk'){  //http://localhost/laravel/public/user/1/sj
//    return 'User--id-'.$id.'name-----'.$name;
//})->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);

//路由别名



//路由群组
Route::group(['prefix'=>'member'],function(){

    Route::get('user/m-centor',['as'=>'centor',function(){ //http://localhost/laravel/public/member/user/m-centor
        return route('centor');
    }]);

    Route::match(['get','post'],'muty1',function(){ //http://localhost/laravel/public/member/muty1
        return 'mty1';
    });

});

//路由中输出视图、
Route::get('view', function () {
    return view('welcome');
});


//路由跟控制器关联
//Route::get('member/info','MemberController@info');

Route::any('member/{id}',['uses'=>'MemberController@info']); //http://localhost/laravel/public/member/info
//起别名
//Route::any('member/info',[
//    'uses'=>'MemberController@info',
//    'as'=> 'memberinfo'
//    ]);


Route::any('test',['uses'=>'StudentController@getMessage']);
Route::any('query',['uses'=>'StudentController@query1']);
Route::any('query2',['uses'=>'StudentController@query2']);
Route::any('query4',['uses'=>'StudentController@query4']);

Route::any('request',['uses'=>'StudentController@request']);


/****************学生信息管理理由---start*********************/
Route::any('student/index',['uses'=>'StudentController@orm1']);
Route::any('common',['uses'=>'StudentController@common']);
Route::any('student/create',['uses'=>'StudentController@create']);
Route::any('student/save',['uses'=>'StudentController@save']);
Route::any('student/delete/{id}',['uses'=>'StudentController@delete']);
/****************学生信息管理理由---stop*********************/



Route::group(['middleware'=>['web']],function(){
    Route::any('session1',['uses'=>'StudentController@session1']);
    Route::any('session2',['uses'=>'StudentController@session2']);
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
