<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2016/9/8
 * Time: 16:17
 */
namespace App\Http\Controllers;
use App\Http\Requests\Request;
use App\Student;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller{

    public function orm1(){
        $students = Student::paginate(3);
        return view('student.index',['students'=>$students]);
    }

    public function create(){

        return view('student.create');
    }
    public function save(\Illuminate\Http\Request $request){
        $data = $request->input('Student');
        $Student = new Student();
        //print_r($Student);die;
        $Student->name = $data['name'];
        $Student->age = $data['age'];
        $Student->create_time=date("Y-m-d H:i:s");



        if($Student->save()){
            return redirect('student/index');
        }else{
            return redirect()->back();
        }

    }


    /*
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
        $students = Student::paginate(3);
        return view('student.index',['students'=>$students]);
       // dd($students);
    }
    public function request(\Illuminate\Http\Request $request){
        echo $request->input('name');
        //echo 122;

    }
    public function session1(\Illuminate\Http\Request $request){
        //http->request session()
        session()->put('key2','das');

    }
    public function session2(\Illuminate\Http\Request $request){
        echo session()->get('key2');
    }

    public function common(){
        return view('common.layouts');
    }
    */

}