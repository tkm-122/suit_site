@extends('layouts.sub_layout')
@section('title', 'confirm')
@section('content')
<section class="text-center pt-3 pb-3">
  <div class="container pt-3 pb-3">
    <header class="text-center mx-auto mb-8">
      <h2 class="h1">確認画面</h2>
      <p class="h6">問い合わせ内容の確認ページ</p>
    </header>

    <form class="text-center w-md-75 mx-auto" action="{{route('finish')}}" method="post">
      @csrf
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="name" value="{{$name}}">
      <input type="hidden" name="email" value="{{$email}}">
      <input type="hidden" name="subject" value="{{$subject}}">
      <input type="hidden" name="tel" value="{{$tel}}">
      <input type="hidden" name="message" value="{{$message}}">

      <div class="form-row">
        <div class="form-group col-lg-6 text-left px-8">
          <label for="">氏名</label>
          <h5 class="text-center border">{{$name}}</h5>
        </div>
        <div class="form-group col-lg-6 text-left px-8">
          <label for="">メールアドレス</label>
          <h5 class="text-center border">{{$email}}</h5>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-lg-6 text-left px-8">
          <label >電話番号</label>
          <h5 class="text-center border">{{$tel}}</h5>
        </div>
        <div class="form-group col-lg-6 text-left px-8">
          <label for="">項目</label>
          <h5 class="text-center border">{{$subject}}</h5>
        </div>

      </div>
      <div class="form-row">
        <div class="form-group text-left  col-12 px-8">
          <label >お問い合わせ内容</label>
          <h5 class="border px-3">{{$message}}</h5>
        </div>
      </div>

      <div class="text-center">
        <button class="btn btn-lg btn-dark px-4" type="submit">問い合わせる</button>
      </div>
    </form>
  </div>
</section>
@endsection
