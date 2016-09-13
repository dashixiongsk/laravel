<html>
<head>
    @section('style')
        <style></style>
    @show

    <link rel="stylesheet" href="{{asset('static/bootstrap/css/bootstrap.min.css')}}" type="text/css" />
<style>
    .con{
        margin: 0 auto;
        width: 90%;
        height:400px;

    }
    .con_1{
        float: left;
        width: 20%;
        height:400px;

    }
    .con_2{
        float: left;
        margin-left: 15px;
        width: 65%;
        height:400px;
        border:1px solid #0a001f;
    }
    .header{
        margin: 0 auto;
        width: 90%;
        height:100px;
        text-align: center;
        padding-top: 20px;
    }
    ul { list-style: none; }
</style>
</head>
<body>


<div class="header">
    <h1>larvel学习</h1>
</div>

<div class="con">
    @section('content_l')
    <div class="con_1">

    </div>
    @show
    @section('content')
    <div class="con_2">

    </div>
    @show
</div>


<div class="foot">
    3
</div>



</body>
<script src="{{asset('static/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('static/bootstrap/js/bootstrap.min.js')}}"></script>

@section('javascript')
    <script></script>
@show



</html>