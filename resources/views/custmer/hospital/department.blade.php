{{-- layouts/top.blade.phpを読み込む --}}
@extends('layouts.top')


{{-- top.blade.phpの@yield('title')に'マチこみ'を埋め込む --}}
@section('title', 'マチこみ')

{{-- top.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="main">
    <h1>病院をさがす</h1>
    <div class="main-contents">
        <div id="type">
            <ul>
                <li><a href="#">小児科</a></li>
    	        <li><a href="#">内科</a></li>
    	        <li><a href="#">耳鼻咽喉科</a></li>
    	        <li><a href="#">皮膚科</a></li>
    	        <li><a href="#">婦人科</a></li>
    	        <li><a href="#">眼科</a></li>
    	        <li><a href="#">整形外科</a></li>
    	        <li><a href="#">泌尿器科</a></li>
    	        <li><a href="#">心療内科</a></li>
    	        <li><a href="#">インフルエンザワクチン</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Styles -->
<style>
.main {
    text-align: center;
    margin-top: 50px;
}
.main-contents {
    color: #fff;
    float: left;
    width: 100%;
    margin-top: 50px;
}
.footer{
    height: 50px;
    width: 100%;
    color: #000;
    clear: both;
    position: fixed;
    bottom: 0;
}
#type ul{ 
    margin: 0;
    padding: 0;
    list-style: none;
}
#type li{
    display: inline;
    padding: 0;
}
#type li a{
    display: inline-block;
    text-decoration: none;
    color: #333;
    width: 260px;
    margin: 2px 0px;
    text-align: center;
    font-size: 30px;
}
#type li a:hover{
    border: 1px solid #8593A9;
    background-color: #9EB7DD;
}
</style>
@endsection