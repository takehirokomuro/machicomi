<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquiry;

class MachicomiController extends Controller
{
public function add()
  {
      return view('startpage');
  }
public function search()
  {
      return view('custmer.playspot.search');
  }
public function department()
  {
      return view('custmer.hospital.department');
  }
public function inquiry()
  {
    return view ('custmer/inquiry');
  }
public function save(Request $request)
  {
    $this->validate($request, Inquiry::$rules);
    $inquiries = new Inquiry;
    $form = $request->all();
    // フォームから送信されてきた_tokenを削除する
    unset($form['_token']);
    // データベースに保存する
    $inquiries->fill($form);
    $inquiries->save();
    return view ('startpage');
  }
  public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Playspot::where('title', $cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Playspot::all();
      }
      return view('custmer.playspot.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
}
