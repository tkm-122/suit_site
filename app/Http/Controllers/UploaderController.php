<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\UploaderRequest;

class UploaderController extends Controller
{
  public function getUploader()
  {
    $items = \App\Uploader::orderBy('created_at', 'desc')->paginate(6);

    return view('uploader.uploader',[
      "items" => $items
    ]);
  }

  public function getConfirm()
  {
    return view('uploader.confirm');
  }

  public function postConfirm(Request $request)
  {

    if ($request->hasFile('image')) {

      $image_name = uniqid("image_") . "." . $request->file('image')->guessExtension(); // TMPファイル名
      $request->file('image')->move(public_path() . "/img/tmp", $image_name);
      $image = "/img/tmp/".$image_name;

      $hash = array(
        'image' => $image,
        'name' => $request->input('name'),
        'design' => $request->input('design'),
        'color' => $request->input('color'),
        'maker' => $request->input('maker'),
        'price' => $request->input('price')
      );


      return view('uploader.confirm')->with($hash);
    }

  }
  public function finish(Request $request)
  {
    $uploader = new \App\Uploader([
      'name' => $request->input('name'),
      'design' => $request->input('design'),
      'color' => $request->input('color'),
      'maker' => $request->input('maker'),
      'price' => $request->input('price'),
      'image' => $request->input('image')
    ]);

    // 保存
    $uploader->save();

    $id = $uploader->cloth_id;

    // 一時保存から本番の格納場所へ移動
    rename(public_path() . $request->input('image'), public_path() . "/img/cloth/".$id.".".pathinfo($request->input('image'), PATHINFO_EXTENSION));
    $image = "/img/cloth/".$id.".".pathinfo($request->input('image'), PATHINFO_EXTENSION);


    \App\Uploader::where('cloth_id',$id)
    ->update(['image' => $image]);

    // リダイレクト
    session()->flash('message', '生地情報を追加しました。');
    return redirect()->route('uploader.uploader');
  }



}
