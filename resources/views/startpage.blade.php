{{-- layouts/top.blade.phpを読み込む --}}
@extends('layouts.top')


{{-- top.blade.phpの@yield('title')に'マチこみ'を埋め込む --}}
@section('title', 'マチこみ')

{{-- top.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="main">
    <div class="main-contents">
    </div>
    <div class="right-contents">
        <div id="ranking">
            <ul>
                <li><a href="#">みんなの行きたいランキング</a></li>
    	        <li><a href="#">1位　○○○</a></li>
    	        <li><a href="#">2位　○○○</a></li>
    	        <li><a href="#">3位　○○○</a></li>
            </ul>
        </div>
    </div>
</div>
    <div class="left-contents">
        <div id="search">
            <ul>
                <li><a href="{{ action('MachicomiController@search') }}">プレイスポットをさがす</a></li>
    	        <li><a href="{{ action('MachicomiController@department') }}">病院をさがす</a></li>
            </ul>
        </div>
    </div>
<!-- Styles -->
<style>
.main-contents, .left-contents, .right-contents {
    height: 300px;
}
.main-contents {
    color: #fff;
    float: left;
    width: 70%;
}
.left-contents {
    color: #fff;
    width: 30%;
    float: right;
}
.right-contents {
    color: #fff;
    float: right;
    width: 30%;
}
.main{
    width: 70%;
    float: right;
}
.footer{
    height: 50px;
    width: 100%;
    color: #000;
    clear: both;
    position: fixed;
    bottom: 0;
}
#ranking ul{ 
    margin: 0;
    padding: 0;
    list-style: none;
}
#ranking li{
    display: inline;
    padding: 0;
}
#ranking li a{
    display: block;
    text-decoration: none;
    color: #333;
    width: 260px;
    margin: 2px 0px;
    text-align: center;
    font-size: 30px;
}
#ranking li a:hover{
    border: 1px solid #8593A9;
    background-color: #9EB7DD;
}
#search ul{ 
    margin: 0;
    padding: 0;
    list-style: none;
}
#search li{
    display: inline;
    padding: 0;
}
#search li a{
    display: block;
    text-decoration: none;
    color: #333;
    width: 350px;
    margin: 2px 0px;
    text-align: center;
    font-size: 30px;
    padding-bottom: 50px;
}
#search li a:hover{
    border: 1px solid #000000;
    background-color: #9EB7DD;
}
</style>
@endsection