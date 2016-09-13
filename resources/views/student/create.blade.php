@extends('common.layouts')
@section('content')
    <div class="con_2">
            <form class="form-horizontal" role="form" action="{{url('student/save')}}" method="post">
                <table class="table">
                    <tr>
                        <td>姓名</td>
                        <td><input type="text" name="Student[name]"/></td>
                    </tr>
                    <tr>
                        <td>年龄</td>
                        <td><input type="text" name="Student[age]"/></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="提交"/></td>
                    </tr>
                </table>
            </form>
    </div>
@stop

@section('content_l')
    <div class="con_1">
        <ul>
            <li>
                <a  class="btn btn-info btn-block" href="{{url('student/create')}}">添加学生信息</a>
            </li>
            <li>
                <a  class="btn btn-info btn-block">修改学生信息</a>
            </li>
            <li>
                <a class="btn btn-info btn-block">删除学生信息</a>
            </li>
        </ul>

    </div>
@stop