@extends('layouts.layout')
@section('title', 'Product')
@section('header')
<section class="js-parallax u-promo-block u-overlay u-overlay--dark text-white img-responsive" style="background-image: url({{ url('/') }}/img/pages/product1.jpg); background-position: 50% 0px;">
  <!-- Promo Content -->
  <div class="container u-overlay__inner u-ver-center">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="text-center">
          <h1 class="display-sm-4 display-lg-3">Order Made Suit</h1>
          <p class="h6 text-uppercase u-letter-spacing-sm mb-0">Depends on you!</p>
          <!--  @if(Auth::check())  -->
          <!--@else
          <div class="pt-5">
            <a class="btn btn-secondary mb-2" href="{{route('user.signin')}}">ログイン</a>
            <a class="btn btn-info mb-2" href="{{route('user.signup')}}">新規登録</a>
            <p>ログイン状態であれば生地選択ページに移ります。</p>
          </div>
          @endif  -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Promo Content -->
</section>
<!-- End Promo Block -->
@endsection
@section('content')
<section class="bg-light u-content-space">
  <div class="container">
    <header class="text-center mx-auto mb-8">
      <h2 class="h1">Ranking <i class="fas fa-crown text-warning"></i></h2>
      <p class="h5">多くの人に選ばれているデザインはこちら！</p>
    </header>
    <div class="row">
      <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="display-5 mb-4 text-center">
          <h4>人気No.1</h4>
        </div>
        <!-- Team Block -->
        <figure>
          <img class="w-100 rounded-top" src="assets/img-temp/400x550/img1.jpg" alt="Image Description">
          <!-- Figure Info -->
          <div class="u-box-shadow-sm bg-white text-center rounded p-4">
            <h4 class="mb-2">ブランド名</h4>
            <p class="h5 mb-1">00000円</p>
            <p class="h6 mb-2">00人から受注ok！</p>
            <a href="#!">
              こちらを選ぶ <i class="fas fa-arrow-right ml-1"></i>
            </a>
          </div>
          <!-- End Figure Info-->
        </figure>
        <!-- End Figure -->
      </div>
      <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="display-5 mb-4 text-center">
          <h4>人気No.2</h4>
        </div>
        <!-- Team Block -->
        <figure>
          <img class="w-100 rounded-top" src="assets/img-temp/400x550/img2.jpg" alt="Image Description">
          <!-- Figure Info -->
          <div class="u-box-shadow-sm bg-white text-center rounded p-4">
            <h4 class="mb-2">ブランド名</h4>
            <p class="h5 mb-1">00000円</p>
            <p class="h6 mb-2">00人から受注ok！</p>
            <a href="#!">
              こちらを選ぶ <i class="fas fa-arrow-right ml-1"></i>
            </a>
          </div>
          <!-- End Figure Info-->
        </figure>
        <!-- End Figure -->
      </div>
      <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="display-5 mb-4 text-center">
          <h4>人気No.3</h4>
        </div>
        <!-- Team Block -->
        <figure>
          <img class="w-100 rounded-top" src="assets/img-temp/400x550/img3.jpg" alt="Image Description">
          <!-- Figure Info -->
          <div class="u-box-shadow-sm bg-white text-center rounded p-4">
            <h4 class="mb-2">ブランド名</h4>
            <p class="h5 mb-1">00000円</p>
            <p class="h6 mb-2">00人から受注ok！</p>
            <a href="#!">
              こちらを選ぶ <i class="fas fa-arrow-right ml-1"></i>
            </a>
          <!-- End Figure Info-->
        </figure>
        <!-- End Figure -->
      </div>
    </div>
  </div>
</section>
@endsection
