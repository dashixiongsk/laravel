<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2016/9/8
 * Time: 14:57
 */
namespace App\Http\Controllers;
//use Symfony\Component\HttpKernel\Tests\Controller;

class Membercontroller extends Controller{

    public function info($id){

        //return '121dsg------'.$id;

       // return route('memberinfo');
        return view('member/info',[
            'name'=>'大师兄',
            'age'=>123,
        ]);
    }

}