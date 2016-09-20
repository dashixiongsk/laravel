@extends('common.layouts')

@section('content')
    <div class="con_2">
        <div class="con_3">
            <div class="alert alert-success" role="alert">更新成功</div>
            <div class="alert alert-danger" role="alert">更新失败！</div>
            <table class="table table-hover">
                <tr>
                    <th>学号</th>
                    <th>姓名</th>
                    <th>时间</th>
                    <th>操作</th>
                </tr>
                @foreach($students as $student)
                    <tr class="">
                        <td text-align="center" >{{$student->id}}</td>
                        <td text-align="center" >{{$student->name}}</td>
                        <td text-align="center" >{{$student->create_time}}</td>
                        <td text-align="center" ><a class="" href="">修改&nbsp;&nbsp;</a><a class="" href="{{ url('student/delete',['id'=>$student->id ] )}}">删除</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="pagination pull-right" >
            {{$students->render()}}
        </div>
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

@section('style')
    <style>
        ul { list-style: none; }
        .con_2 a{
            font-size: 12px;
        }

        .active span{
           background-color:#f9eab4;
        }

    </style>
    @stop