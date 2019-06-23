<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\SampleNotification;
use App\Mail\OrderMail;

class PagesController extends Controller
{
  public function index(){

    $items = \App\Item::orderBy('created_at', 'desc')->paginate(4);

    return view('index',[
      "items" => $items
    ]);
  }

  /**
  * 指定商品の詳細ページ表示
  *
  * @param  int  $id
  * @return Response
  */
  public function show(Request $request,$id)
  {
    $item = \App\Item::find($id);
    $datas = \App\Item::orderBy('created_at', 'desc')->paginate(4);
    $inseams = \App\Inseam::all();
    $hems = \App\Hem::all();
    $waists = \App\Waist::all();
    $skidproofs = \App\Skidproof::all();

    return view('select', [
      'item' => $item,
      'datas' => $datas,
      'inseams'=> $inseams,
      'hems'=> $hems,
      'waists'=> $waists,
      'skidproofs'=> $skidproofs,
    ]);
  }

  public function getConfirm(){
    return view('confirm');
  }

  /**
  * 選択商品の確認画面
  *
  * @param  array  $datas
  * @param array $item
  * @param array $inseam
  * @param array $hem
  * @param array $waist
  * @param array $skidproof
  * @param array $size
  * @param int $totalprice
  * @return オプションの選択と生地の確認
  */
  public function postConfirm(Request $request){
    // バリデーション
    $validateRules =[
      'inseam' => 'required',
      'hem' => 'required',
      'waist' => 'required',
      'skidproof' => 'required',
      'size' => 'required',
    ];

    $validateMessages = [
      "required" => "必須項目です。",
    ];

    $this->validate($request, $validateRules, $validateMessages);

    $datas = \App\Item::orderBy('created_at', 'desc')->paginate(4);

    $inseam = \App\Inseam::find($request->input('inseam'));
    $hem = \App\Hem::find($request->input('hem'));
    $waist = \App\Waist::find($request->input('waist'));
    $skidproof = \App\Skidproof::find($request->input('skidproof'));
    $size = \App\Size::find($request->input('size'));
    $item = \App\Item::find($request->input('suit'));

    $totalprice = 0;
    $totalprice += $item->price;
    $totalprice += $inseam->price;
    $totalprice += $hem->price;
    $totalprice += $waist->price;
    $totalprice += $skidproof->price;

    return view('confirm', [
      'datas' => $datas,
      'item' => $item,
      'inseam'=> $inseam,
      'hem'=> $hem,
      'waist'=> $waist,
      'skidproof'=> $skidproof,
      'size' => $size,
      'totalprice'=>$totalprice,
    ]);
  }





  // public function about(){
  //   return view('about');
  // }

  // public function product(){
  //   return view('product');
  // }

  public function business(){
    return view('business');
  }

  //  public function getConfirm(){
  //    return view('contact_confirm');
  //  }


  /**
  *確認後のお問い合わせを表示するファンクション
  *バリデーション後に確認画面へ
  *@param array $data
  *
  */
  public function postContact(Request $request){

    // バリデーション
    $validateRules =[
      'name' => 'required',
      'email' => 'email|required',
      'subject' => 'required',
      'tel' => 'required',
      'message' => 'required',
    ];

    $validateMessages = [
      "required" => "必須項目です。",
      "email" => "メールアドレスの形式で入力してください。",
    ];

    $this->validate($request, $validateRules, $validateMessages);


    $data = array(
      'name' => $request->input('name'),
      'email' => $request->input('email'),
      'subject' => $request->input('subject'),
      'tel' => $request->input('tel'),
      'message' => $request->input('message')
    );

    return view('contact_confirm')->with($data);
  }


  /**
  *確認後のお問い合わせをDBにインサートするファンクション
  *バリデーション後に確認画面へ
  *@param array $contact
  *
  */
  public function finish(Request $request)
  {
    $contact = new \App\Contact([
      'name' => $request->input('name'),
      'email' => $request->input('email'),
      'subject' => $request->input('subject'),
      'tel' => $request->input('tel'),
      'message' => $request->input('message')
    ]);

    $contact->save();
    //問い合わせ内容をメールで送信
    Mail::to($contact->email)
          ->cc('SQULABO@test.com')
          ->send(new SampleNotification($contact));

    session()->flash('message', '問い合わせメッセージを送信しました。');

    return redirect()->route('business');
  }


  /**
  *注文をDBにインサートするファンクション
  *@param integer user_id
  *@param string status
  *@param integer item_id
  *@param integer inseam_id
  *@param integer hem_id
  *@param integer waist_id
  *@param integer skidproof_id
  *@param integer size_id
  *@param integer price
  *ご注文後、完了画面へ
  */
 /**
  * [postComplete  description]
  * @param  Request $request [description]
  * @return [type]           [description]
  */
  public function postComplete(Request $request)
  {
    // // バリデーション
    // $validateRules =[
    //   'use_id' => 'required',
    // ];
    //
    // $validateMessages = [
    //   "required" => "ログインしてください。",
    // ];
    //
    // $this->validate($request, $validateRules, $validateMessages);

    // DBインサート
    $order = new \App\Order([
      'user_id' => $request->input('user_id'),
      'status' => $request->input('status'),
      'item_id' => $request->input('item'),
      'inseam_id' => $request->input('inseam'),
      'hem_id' => $request->input('hem'),
      'waist_id' => $request->input('waist'),
      'skidproof_id' => $request->input('skidproof'),
      'size_id' => $request->input('size'),
      'price' => $request->input('price'),
    ]);

    // 保存
    $order->save();
    //注文・依頼内容をメールで送信
    Mail::to($order->user->email)
          ->cc('SQULABO@test.com')
          ->send(new OrderMail($order));

    $status = $request->input('status');

    // 注文か採寸依頼かをデータで渡す
    return view('complete',[
      "status"=> $status
    ]);
  }

  /**
  *注文完了画面
  * @return [type] [description]
  */
  public function getComplete(){
    return view('complete');
  }
}
