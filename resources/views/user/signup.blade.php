@extends('layouts.sub_layout')
@section('title', 'signup')
@section('content')
<section class="text-center pt-3 pb-3">
  <div class="container bg-light pt-3 pb-3">
    <header class="text-center mx-auto mb-8">
      <h2 class="h1">Signup</h2>
      <p class="h6">基本情報をご記入ください。</p>
    </header>

    <form class="text-center w-md-75 mx-auto" action="{{route('user.signup')}}" method="post">

      <div class="form-row">
        <div class="form-group col-md-6 text-left">
          <label for="">氏名</label>
          <input class="form-control form-control-xs" placeholder="名前をご記入ください" name="name" value="{{old('name')}}" type="text">
          @if($errors->has('name'))<br><span class="help-block text-danger">{{$errors->first('name')}}</span>@endif
        </div>
        <div class="form-group col-md-6 text-left">
          <label for="">年齢</label>
          <select name="age" data-toggle="select" class="form-control form-control-xs">
            <option value="">年齢をお選びください</option>
            <option value="20歳未満">20歳未満</option>
            <option value="20~29歳">20~29歳</option>
            <option value="30~39歳">30~39歳</option>
            <option value="40~49歳">40~49歳</option>
            <option value="50歳以上">50歳以上</option>
          </select>
          @if($errors->has('age'))<br><span class="help-block text-danger">{{$errors->first('age')}}</span>@endif
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6 text-left">
          <label for="inputZip">郵便番号 <span class="small pb-0">（郵便番号で自動住所記入）</span> </label>
          <!-- ▼郵便番号入力フィールド(3桁+4桁) -->
          <input class="form-control form-control-xs" placeholder="郵便番号をご記入ください" type="text" name="zip01" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','pref01','addr01');" value="{{old('zip01')}}">
        </div>
        <div class="form-group col-md-6 text-left">
          <label for="inputState">都道府県</label>
          <!-- ▼住所入力フィールド(都道府県) -->
          <input class="form-control form-control-xs" placeholder="都道府県をご記入ください" type="text" name="pref01" size="20" value="{{old('pref01')}}">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group text-left col-12">
          <label for="inputCity">住所</label>
          <!-- ▼住所入力フィールド(都道府県以降の住所) -->
          <input class="form-control form-control-xs" placeholder="住所をご記入ください" type="text" name="addr01" size="60" value="{{old('addr01')}}">
          @if($errors->has('zip01'))<br><span class="help-block text-danger">{{$errors->first('zip01')}}</span>
          @elseif($errors->has('pref01'))<br><span class="help-block text-danger">{{$errors->first('pref01')}}</span>
          @elseif($errors->has('addr01'))<br><span class="help-block text-danger">{{$errors->first('addr01')}}</span>@endif
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6 text-left">
          <label >電話番号</label>
          <input class="form-control form-control-xs" placeholder="電話番号をご記入ください" name="tel" value="{{old('tel')}}" type="tel">
          @if($errors->has('tel'))<br><span class="help-block text-danger">{{$errors->first('tel')}}</span>@endif
        </div>
        <div class="form-group col-md-6 text-left">
          <label >メールアドレス</label>
          <input class="form-control form-control-xs" placeholder="メールアドレスをご記入ください" name="email" value="{{old('email')}}" type="email">
          @if($errors->has('email'))<br><span class="help-block text-danger">{{$errors->first('email')}}</span>@endif
        </div>
      </div>
      <div class="form-row">
        <div class="form-group text-left col-12">
          <label >パスワード（半角英数字４文字以上）</label>
          <input class="form-control form-control-xs" placeholder="Passwordをご記入ください" name="password" value="{{old('password')}}" type="password">
          @if($errors->has('password'))<br><span class="help-block text-danger">{{$errors->first('password')}}</span>@endif
        </div>
      </div>
      <div class="text-center">
        <button class="btn btn-lg btn-info py-2 px-4" type="submit">新規登録</button>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      </div>
    </form>
  </div>
</section>
@endsection
