@extends('common.layouts')

@section('content')
    <div class="con_2">
        <div>
            <table class="table table-hover" >
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>date</th>
                </tr>
                @foreach($students as $student)
                    <tr>
                        <th>{{$student->id}}</th>
                        <th>{{$student->name}}</th>
                        <th>{{$student->create_time}}</th>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="pagination pull-right ">
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
    </style>
    @stop