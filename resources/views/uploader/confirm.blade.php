@extends('layouts.sub_layout')
@section('title', 'uploader')
@section('content')
<section class="text-center pt-3 pb-3">
  <div class="container bg-light pt-3 pb-3">
    <header class="text-center mx-auto mb-8">
      <h2 class="h1">確認画面</h2>
      <p class="h6">生地情報をアップロード・確認ページ。</p>
    </header>

    <form class="text-center w-md-75 mx-auto" action="{{route('uploader.finish')}}" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="name" value="{{$name}}">
      <input type="hidden" name="design" value="{{$design}}">
      <input type="hidden" name="color" value="{{$color}}">
      <input type="hidden" name="maker" value="{{$maker}}">
      <input type="hidden" name="price" value="{{$price}}">
      <input type="hidden" name="image" value="{{$image}}">


      <div class="row">
        <div class="col-12 form-group mb-3">
          <h4 class="text-center pl-1">商品名 : {{$name}}</h4>
        </div>

        <div class="col-12 form-group mb-3">
          <h4 class="text-center pl-1">生地デザイン : {{$design}}</h4>
        </div>

        <div class="col-12 form-group mb-3">
          <h4 class="text-center pl-1">カラー : {{$color}}</h4>
        </div>

        <div class="col-12 form-group mb-3">
          <h4 class="text-center pl-1">作り手 : {{$maker}}</h4>
        </div>

        <div class="col-12 form-group mb-3">
          <h4 class="text-center pl-1">価格 : {{$price}}</h4>
        </div>

        <div class="col-12 form-group mb-3">
          <h4 class="text-center pl-1">画像 :</h4>
          <img src="{{$image}}" alt="">
        </div>

      </div>
      <div class="text-center">
        <button class="btn btn-lg btn-primary py-3 px-4" type="submit">登録する</button>
      </div>
    </form>
  </div>
</section>
@endsection
