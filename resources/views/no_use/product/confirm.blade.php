@extends('layouts.layout')
@section('title', 'design')
@section('header')
<!-- Promo Block -->
<section class="js-parallax u-overlay u-overlay--dark text-white" style="height:150px; background-image: url({{ url('/') }}/assets/img-temp/1920x1080/img6.jpg);">
  <!-- Promo Content -->
  <div class="container u-overlay__inner u-ver-center pt-5">
    <div class="row">
      <div class="col-12 text-center pt-3">
        <h4 class="display-sm-4">Order Made Suit</h4>
      </div>
    </div>
  </div>
  <!-- End Promo Content -->
</section>
<!-- End Promo Block -->
@endsection
@section('content')
<section class="">
  <div class="container pt-3 pb-3">
    <header class="text-center mx-auto mb-4">
      <h2 class="h2">確認画面</h2>
      <h6>生地選択 -> デザイン選択 -> <span class="badge badge-secondary">確認画面</span></h6>
    </header>
    <div class="row text-center d-flex align-items-end">
      <div class="col-12 mb-5 u-box-shadow-sm bg-light text-center rounded">
        <h3 class="">お見積価格：{{$price}}円</h3>
      </div>
    </div>
    <div class="row text-center">
        <div class="col-md-6 mb-5 ">
          <div class="u-box-shadow-sm bg-white text-center rounded d-flex align-items-center" style="height:295px;">
            <img class="img-fluid rounded-top mx-auto" src="{{$cloth->image}}" alt="" >
          </div>
        </div>
        <div class="col-md-6 mb-5">
          <div class="u-box-shadow-sm bg-white text-center rounded p-4">
            <h3 class="mb-2">選択中の生地</h3>
            <h4 class="mb-2">ブランド名:{{$cloth->name}}</h4>
            <p class="h6 mb-1">生地デザイン : {{$cloth->design}}</p>
            <p class="h6 mb-1">カラー : {{$cloth->color}}</p>
            <p class="h6 mb-1">作り手 : {{$cloth->maker}}</p>
            <p class="h6 mb-1">価格 : {{$cloth->price}}円</p>
            <p class="h6 mb-2">00人から受注ok！</p>
          </div>
        </div>
      </div>
      <div class="row text-center d-flex align-items-end">
        <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
          <figure>
            <img class="w-50 h-20 rounded-top" src="{{ url('/') }}/{{$suit->image}}" alt="" >
            <!-- Figure Info -->
            <div class="u-box-shadow-sm bg-white text-center rounded p-4">
              <h4 class="mb-2">ブランド名:{{$suit->name}}</h4>
              <p class="h6 mb-1">追加価格 : +{{$suit->price}}円</p>
            </div>
          </figure>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
          <figure>
            <img class="w-50 h-20 rounded-top" src="{{ url('/') }}/{{$lining->image}}" alt="" >
            <!-- Figure Info -->
            <div class="u-box-shadow-sm bg-white text-center rounded p-4">
              <h4 class="mb-2">ブランド名:{{$lining->name}}</h4>
              <p class="h6 mb-1">追加価格 : +{{$lining->price}}円</p>
            </div>
          </figure>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
          <figure>
            <img class="w-50 h-20 rounded-top" src="{{ url('/') }}/{{$button->image}}" alt="" >
            <!-- Figure Info -->
            <div class="u-box-shadow-sm bg-white text-center rounded p-4">
              <h4 class="mb-2">ブランド名:{{$button->name}}</h4>
              <p class="h6 mb-1">追加価格 : +{{$button->price}}円</p>
            </div>
          </figure>
        </div>
    </div>
</section>
<section>
  @if(Auth::check())
  <div class="row">
    <div class="col-12 text-center">
      <h3>採寸依頼を行う</h3>
      <form class="" action="#" method="post">
        <input type="hidden" name="user" value="{{Auth::user()->id}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="cloth" value="{{$cloth->cloth_id}}">
        <input type="hidden" name="suit" value="{{$suit->suit_id}}">
        <input type="hidden" name="lining" value="{{$lining->lining_id}}">
        <input type="hidden" name="button" value="{{$button->button_id}}">
        <input type="hidden" name="price" value="{{$price}}">
        <div class="container text-center mx-auto">
          <button class="btn btn-lg btn-primary mt-1 mb-5" type="submit">簡単依頼</button>
        </div>
      </form>

    </div>

  </div>


  @else
  <div class="row">
    <div class="col-12 text-center">
      <h4>ログインをして、注文へ手続きへ進む</h4>
    </div>
    <div class="col-12 text-center">
      <div class="pt-5 pb-5">
        <a class="btn btn-secondary mb-2" href="{{route('user.signin')}}">ログイン</a>
        <a class="btn btn-info mb-2" href="{{route('user.signup')}}">新規登録</a>
      </div>
    </div>
  </div>
  @endif
</section>

@endsection
