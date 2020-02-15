{{-- layouts/top.blade.phpを読み込む --}}
@extends('layouts.top')


{{-- top.blade.phpの@yield('title')に'マチこみ'を埋め込む --}}
@section('title', 'マチこみ管理')

{{-- top.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <h2>プレイスポット一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form action="{{ action('Admin\MachiController@test') }}" method="get">
                    <div class="form-group row">
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-test col-md-12 mx-auto">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="10%">No</th>
                                <th width="20%">件名</th>
                                <th width="10%">名前</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $inquiries)
                                <tr>
                                    <th>{{ $inquiries->id }}</th>
                                    <td>{{ \Str::limit($inquiries->subject, 100) }}</td>
                                    <td>{{ \Str::limit($inquiries->name, 100) }}</td>
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