<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inquiry;
use App\Test;

class MachiController extends Controller
{
    public function add()
  {
      return view('admin.machicomi.create');
  }
    public function index(Request $request)
  {
    $cond_title = $request->cond_title;
    if ($cond_title != '') {
     // 検索されたら検索結果を取得する
     $posts = Inquiry::where('title', $cond_title)->get();
    } else {
     // それ以外はすべてのニュースを取得する
     $posts = Inquiry::all();
     }
    return view('admin.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
  public function test(Request $request)
  {
      $test = new Test;
    $cond_title = $request->cond_title;
    if ($cond_title != '') {
     // 検索されたら検索結果を取得する
     $posts = Test::where('title', $cond_title)->get();
    } else {
     // それ以外はすべてのニュースを取得する
     $posts = Test::all();
     }
    return view('admin.test', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
}
