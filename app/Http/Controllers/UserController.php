<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;

class UserController extends Controller
{
  public function getSignup(){
    return view('user.signup');
  }

  public function postSignup(Request $request){
    // バリデーション
    $validateRules =[
      'name' => 'required',
      'email' => 'email|required|unique:users',
      'password' => 'required|min:4',
      'age' => 'required',
      'tel' => 'required',
      'zip01' => 'required',
      'pref01' => 'required',
      'addr01' => 'required'
    ];

    $validateMessages = [
      "required" => "必須項目です。",
      "email" => "メールアドレスの形式で入力してください。",
      "min" => "4文字以上で入力してください。",
      "unique"=> "登録済みのメールアドレスです。"
    ];

    $this->validate($request, $validateRules, $validateMessages);

    // DBインサート
    $user = new User([
      'name' => $request->input('name'),
      'email' => $request->input('email'),
      'password' => bcrypt($request->input('password')),
      'age' => $request->input('age'),
      'tel' => $request->input('tel'),
      'zip01' => $request->input('zip01'),
      'pref01' => $request->input('pref01'),
      'addr01' => $request->input('addr01')
    ]);

    // 保存
    $user->save();

    session()->flash('message', '登録が完了しました。');
    // リダイレクト
    return redirect()->route('user.profile');
  }

  public function getProfile(){
    return view('user.profile');
  }

  public function getSignin(){
    return view('user.signin');
  }

  public function postSignin(Request $request){
    // バリデーション
    $validateRules =[
      'email' => 'email|required',
      'password' => 'required|min:4'
    ];

    $validateMessages = [
      "required" => "必須項目です。",
      "email" => "メールアドレスの形式で入力してください。",
      "min" => "4文字以上で入力してください。",
    ];

    $this->validate($request, $validateRules, $validateMessages);

    if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
      return redirect()->route('user.profile');
    }
    session()->flash('error', 'パスワードが間違っています。');
    return redirect()->back();
  }

  public function getLogout(){
    Auth::logout();
    return redirect()->route('user.signin');
  }

  public function getAccount(){
    return view('user.profile.account');
  }

  public function editAge(Request $request){
    // バリデーション
    $validateRules =[
      'age' => 'required',
    ];

    $validateMessages = [
      "required" => "必須項目です。",
    ];

    $this->validate($request, $validateRules, $validateMessages);

    // DBインサート
    User::where('id',$request->input('id'))
    ->update(['age' => $request->input('age')]);


    // リダイレクト
    session()->flash('message', '変更が完了しました');
    return redirect()->route('user.profile.account');
  }

  public function editTel(Request $request){
    // バリデーション
    $validateRules =[
      'tel' => 'required',
    ];

    $validateMessages = [
      "required" => "必須項目です。",
    ];

    $this->validate($request, $validateRules, $validateMessages);

    // DBインサート
    User::where('id',$request->input('id'))
    ->update(['tel' => $request->input('tel')]);


    // リダイレクト
    session()->flash('message', '変更が完了しました');
    return redirect()->route('user.profile.account');
  }

  public function editEmail(Request $request){
    // バリデーション
    $validateRules =[
      'email' => 'email|required|unique:users'
    ];

    $validateMessages = [
      "required" => "必須項目です。",
      "email" => "メールアドレスの形式で入力してください。",
      "unique"=> "登録済みのメールアドレスです。"
    ];

    $this->validate($request, $validateRules, $validateMessages);

    // DBインサート
    User::where('id',$request->input('id'))
    ->update(['email' => $request->input('email')]);


    // リダイレクト
    session()->flash('message', '変更が完了しました');
    return redirect()->route('user.profile.account');
  }

  public function editPassword(Request $request){
    // バリデーション
    $validateRules =[
      'password' => 'required|min:4',
      'passwordNew' => 'required|min:4',
      'passwordConfirm' => 'required|min:4'
    ];

    $validateMessages = [
      "required" => "必須項目です。",
      "min" => "4文字以上で入力してください。",
    ];

    $this->validate($request, $validateRules, $validateMessages);

    if (Hash::check($request->input('password'), Auth::user()->password)) {
      // 一致したときの処理
      if( $request->input('passwordNew') == $request->input('passwordConfirm'))
      {
        // DBインサート
        User::where('id',$request->input('id'))
        ->update(['password' =>  bcrypt($request->input('passwordNew'))]);

        //成功した際のメッセージ
        session()->flash('message', '変更が完了しました');
      }else {
        //確認用パスワードが不一致
        session()->flash('error', '確認用のパスワードが一致しません。');
      }
    }else{
      // 一致しなかったときの処理
      session()->flash('error', 'パスワードが間違っています。');
    }
    return redirect()->route('user.profile.account');
  }


  /**
  *プロフィールでアドレス変更する際のファンクション
  *@param string zip01
  *@param string pref01
  *@param string addr01
  */
  public function editAddress(Request $request){
    // バリデーション
    $validateRules =[
      'zip01' => 'required',
      'pref01' => 'required',
      'addr01' => 'required'
    ];

    $validateMessages = [
      "required" => "必須項目です。",
    ];

    $this->validate($request, $validateRules, $validateMessages);

    // DBインサート
    User::where('id',$request->input('id'))
    ->update([
      'zip01' => $request->input('zip01'),
      'pref01' => $request->input('pref01'),
      'addr01' => $request->input('addr01')
    ]);

    // リダイレクト
    session()->flash('message', '変更が完了しました');
    return redirect()->route('user.profile.account');
  }



  /**
  * 注文履歴の確認画面
  *
  * @param array $orders
  * @return $user->idに基づき履歴を受け渡し
  */
  public function getRecord(){

    $orders= \App\Order::where('user_id',Auth::user()->id)
                        ->orderBy('created_at', 'desc')
                        ->paginate(4);


    return view('user.profile.record',[
      'orders'=>$orders,
    ]);
  }

}
