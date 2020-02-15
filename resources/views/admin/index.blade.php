{{-- layouts/top.blade.phpを読み込む --}}
@extends('layouts.top')


{{-- top.blade.phpの@yield('title')に'マチこみ'を埋め込む --}}
@section('title', 'マチこみ管理')

{{-- top.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <h2>問合せ一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form action="{{ action('Admin\MachiController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="20%">件名</th>
                                <th width="50%">問合せ内容</th>
                                <th width="10%">名前</th>
                                <th width="20%">アドレス</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $inquiries)
                                <tr>
                                    <th>{{ $inquiries->id }}</th>
                                    <td>{{ \Str::limit($inquiries->subject, 100) }}</td>
                                    <td>{{ \Str::limit($inquiries->content, 250) }}</td>
                                    <td>{{ \Str::limit($inquiries->name, 100) }}</td>
                                    <td>{{ \Str::limit($inquiries->address, 100) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<style>
    .footer{
    height: 50px;
    width: 100%;
    color: #000;
    clear: both;
    position: fixed;
    bottom: 0;
}
</style>
@endsection