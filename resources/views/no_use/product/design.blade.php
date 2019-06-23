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
<section class="bg-light">
  <div class="container pt-3 pb-3">
    <header class="text-center mx-auto mb-4">
      <h2 class="h2">デザイン選択</h2>
      <h6>生地選択 -> <span class="badge badge-secondary"> デザイン選択 </span>-> 確認画面</h6>
    </header>
    <div class="row text-center">
        <div class="col-md-6 mb-5 ">
          <div class="u-box-shadow-sm bg-white text-center rounded d-flex align-items-center" style="height:295px;">
            <img class="img-fluid rounded-top mx-auto" src="{{$item->image}}" alt="" >
          </div>
        </div>
        <div class="col-md-6 mb-5">
          <div class="u-box-shadow-sm bg-white text-center rounded p-4">
            <h3 class="mb-2">選択中の生地</h3>
            <h4 class="mb-2">ブランド名:{{$item->name}}</h4>
            <p class="h6 mb-1">生地デザイン : {{$item->design}}</p>
            <p class="h6 mb-1">カラー : {{$item->color}}</p>
            <p class="h6 mb-1">作り手 : {{$item->maker}}</p>
            <p class="h6 mb-1">価格 : {{$item->price}}円</p>
            <p class="h6 mb-2">00人から受注ok！</p>
          </div>
        </div>
      </div>
    </div>
</section>
<form class="" action="{{route('product.confirm')}}" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="cloth_id" value="{{$item->cloth_id}}">


  <section>
    <div class="container pt-3 pb-3">
      <header class="text-center mx-auto mb-4">
        <h2 class="h2">スーツの形</h2>
      </header>
      <div class="row text-center d-flex align-items-end">
        @foreach($suits as $suit)
        <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
          <figure>
            <img class="img-fluid  rounded-top p-3" src="{{ url('/') }}/{{$suit->image}}" alt="" >
            <!-- Figure Info -->
            <div class="u-box-shadow-sm bg-white text-center rounded p-4" style="height:160px;">
              <p class="h6 mb-1">肩 : {{$suit->shoulder}}<br>　</p>
              <p class="h6 mb-1">ウエスト : {{$suit->waist}}</p>
            </div>
            <div class="custom-control custom-radio mb-2 pt-3">
              <input type="radio" class="custom-control-input" name="suit" id="{{$suit->name}}" value="{{$suit->suit_id}}">
              <label class="custom-control-label u-font-size-90" for="{{$suit->name}}">こちらを選択する</label>
            </div>
          </figure>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <section class="bg-light">
    <div class="container pt-3 pb-3">
      <header class="text-center mx-auto mb-4">
        <h2 class="h2">裏地</h2>
      </header>
      <div class="row text-center d-flex align-items-end">
        @foreach($linings as $lining)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
          <figure>
            <img class="img-fluid  rounded-top p-3" style="height:250px;" src="{{ url('/') }}/{{$lining->image}}" alt="" >
            <!-- Figure Info -->
          </figure>
          <div class="custom-control custom-radio mb-2 pt-3">
            <input type="radio" class="custom-control-input" name="lining" id="{{$lining->name}}" value="{{$lining->lining_id}}">
            <label class="custom-control-label u-font-size-90" for="{{$lining->name}}">こちらを選択する</label>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </section>
  <section>
    <div class="container pt-3 pb-3">
      <header class="text-center mx-auto mb-4">
        <h2 class="h2">ボタン</h2>
      </header>
      <div class="row text-center d-flex align-items-end">
        @foreach($buttons as $button)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
          <figure>
            <img class="img-fluid  rounded-top p-3" style="height:250px;" src="{{ url('/') }}/{{$button->image}}" alt="" >
            <!-- Figure Info -->
          </figure>
          <div class="custom-control custom-radio mb-2 pt-3">
            <input type="radio" class="custom-control-input" name="button" id="{{$button->name}}" value="{{$button->button_id}}">
            <label class="custom-control-label u-font-size-90" for="{{$button->name}}">こちらを選択する</label>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </section>
  <section>
    <div class="container text-center mx-auto">
      <button class="btn btn-lg btn-primary mt-1 mb-5" type="submit">お見積もり試算</button>
    </div>
  </section>
</form>

@endsection
