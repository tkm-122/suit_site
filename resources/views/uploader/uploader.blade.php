@extends('layouts.sub_layout')
@section('title', 'uploader')
@section('content')
@if (session('message'))
<div class="container alert bg-secondary text-white fade show mt-1" role="alert">
  <div class="d-flex">
    <div class="alert__icon mr-3">
      <i class="fas fa-thumbs-up"></i>
    </div>

    <div class="align-self-center mr-3">{{ session('message') }}</div>

    <div class="ml-auto">
      <button type="button" class="alert__close alert__close--light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
  </div>
</div>
@endif
<section class="text-center pt-3 pb-3">
  <div class="container bg-light pt-3 pb-3">
    <header class="text-center mx-auto mb-4">
      <h2 class="h1">Uploader</h2>
      <p class="h6">生地情報をアップロード・確認ページ。</p>
    </header>

    <form class="text-center w-md-75 mx-auto" action="{{route('uploader.confirm')}}" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-6 form-group mb-4 @if(!empty($errors->first('name'))) has-error @endif">
          <h6 class="text-left pl-1">商品名</h6>
          <input class="form-control form-control-lg" placeholder="商品名をご記入ください" name="name" value="{{old('name')}}" type="text">
          <span class="help-block">{{$errors->first('name')}}</span>
        </div>

        <div class="col-6 form-group mb-4 @if(!empty($errors->first('design'))) has-error @endif">
          <h6 class="text-left pl-1">生地デザイン</h6>
          <select name="design" data-toggle="select" class="form-control form-control-lg">
            <option value="">生地デザイン名をお選びください</option>
            <option value="無地">無地</option>
            <option value="ストライプ">ストライプ</option>
            <option value="チェック">チェック</option>
            <option value="その他">その他</option>
          </select>
          <span class="help-block">{{$errors->first('design')}}</span>
        </div>

        <div class="col-6 form-group mb-4 @if(!empty($errors->first('color'))) has-error @endif">
          <h6 class="text-left pl-1">カラー</h6>
          <select name="color" data-toggle="select" class="form-control form-control-lg">
            <option value="">カラーをお選びください</option>
            <option value="ネイビー">ネイビー</option>
            <option value="グレー">グレー</option>
            <option value="ブラック">ブラック</option>
            <option value="ブラウン">ブラウン</option>
            <option value="その他">その他</option>
          </select>
          <span class="help-block">{{$errors->first('color')}}</span>
        </div>

        <div class="col-6 form-group mb-4 @if(!empty($errors->first('maker'))) has-error @endif">
          <h6 class="text-left pl-1">作り手</h6>
          <select name="maker" data-toggle="select" class="form-control form-control-lg">
            <option value="">作り手をお選びください</option>
            <option value="メーカーA">メーカーA</option>
            <option value="メーカーB">メーカーB</option>
            <option value="メーカーC">メーカーC</option>
            <option value="メーカーD">メーカーD</option>
            <option value="その他">その他</option>
          </select>
          <span class="help-block">{{$errors->first('maker')}}</span>
        </div>

        <div class="col-6 form-group mb-4 @if(!empty($errors->first('price'))) has-error @endif">
          <h6 class="text-left pl-1">価格</h6>
          <input class="form-control form-control-lg" placeholder="価格をご記入ください" name="price" value="{{old('price')}}" type="text">
          <span class="help-block">{{$errors->first('price')}}</span>
        </div>

        <div class="col-6 form-group mb-4 @if(!empty($errors->first('image'))) has-error @endif">
          <h6 class="text-left pl-1">image</h6>
          <input class="form-control form-control-lg"  name="image" value="{{old('image')}}" type="file" size="100" >
          <span class="help-block">{{$errors->first('image')}}</span>
        </div>

      </div>
      <div class="text-center">
        <button class="btn btn-lg btn-primary py-3 px-4" type="submit">確認画面へ</button>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      </div>
    </form>
  </div>
</section>
<section>
  <div class="container pt-3 pb-3">
    <header class="text-center mx-auto mb-4">
      <h2 class="h1">生地一覧</h2>
    </header>
    <div class="row text-center">
      @foreach($items as $item)
      <div class="col-lg-4 col-sm-6 mb-5" >
        <div class="p-2" style="border: 2px solid #e6e7e9; height:300px">
          <h5>商品名 : {{$item->name}}</h5>
          <img src="{{$item->image}}" alt="" height="120" >
          <div class=""></div>
          <h6>デザイン : {{$item->design}}</h6>
          <h6>カラー : {{$item->color}}</h6>
          <h6>作り手 : {{$item->maker}}</h6>
          <h6>価格 : {{$item->price}}</h6>
        </div>
      </div>
      @endforeach
    </div>
    <footer class="text-center mx-auto mb-4">
      {{$items->links()}}
    </footer>
  </div>
</section>

@endsection
