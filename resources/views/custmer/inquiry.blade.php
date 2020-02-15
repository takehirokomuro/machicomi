{{-- layouts/top.blade.phpを読み込む --}}
@extends('layouts.top')


{{-- top.blade.phpの@yield('title')に'マチこみ'を埋め込む --}}
@section('title', 'マチこみ')

{{-- top.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>お問合せ</h2>
            <form action="{{ action('MachicomiController@inquiry') }}" method="post" enctype="multipart/form-data">
                @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
                    @endif
                <div class="main">
                    <div class="form-group row">
                        <label class="col-md-2">件名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="subject">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">お問合せ内容</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="content" rows="20"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">名前(ニックネーム可)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">返信用メールアドレス</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="address">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="送信">
                </form>
            </div>
            </div>
        </div>
    </div>
    <!-- Styles -->
<style>
.main {
     padding-bottom: 150px;
}
</style>
@endsection