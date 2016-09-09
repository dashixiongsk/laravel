<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2016/9/8
 * Time: 16:17
 */
namespace App\Http\Controllers;
use App\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller{

    public function getMessage(){


//        $res = DB::insert('insert into student(name,age) VALUES(?,?)',
//            ['bajie',132]);
//       var_dump($res);

//        $num = DB::update('update student set age=? where name=?',[
//            25,'sk'
//        ]);
//        var_dump($num);

               $stm = DB::select('select * from student');

                var_dump($stm);
                dd($stm);

    }

    public function query1(){
       $id= DB::table('student')->insertGetId(
            ['name'=>'dashixiong','age'=>23]
        );
        var_dump($id);
    }
    public function query2(){

//       $res= DB::table('student')->where('id',3)->update(
//            ['name'=>'sanzang','age'=>100]
//        );
//        var_dump($res);
        $num = DB::table('student')->increment('age',3);
        var_dump($num);

    }
    public function query4(){
        echo '<pre>';
        //$name=DB::table('student')->pluck('name');   //pluck 返回数据库中的指定字段
        //$name=DB::table('student')->lists('name','id');   //pluck 返回数据库中的指定字段
        DB::table('student')->chunk(2,function($name){      //每次返回两条记录
        var_dump($name);
        });


    }

    //orm
    public function orm1(){
        //$students = Student::all();
        //$students = Student::find('32');
        //$students = Student::findOrFail('32');//根据主键查找，没有会报错
        $students = Student::get();
        dd($students);
    }

}