@extends('layouts.layout')
@section('title', 'profile')
@section('header')
<section class="js-parallax u-promo-block u-overlay u-overlay--dark text-white img-responsive" style="background-image: url({{ url('/') }}/img/pages/account2.jpg); background-position: 50% 0px;">
  <!-- Promo Content -->
  <div class="container u-overlay__inner u-ver-center">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="text-center">
          <h1 class="display-sm-5 display-lg-4">  WELCOME!!</h1>
          <h3 class="display-sm-5 display-lg-5">  {{ Auth::user()->name }}  様</h3>
          <p class="h6 text-uppercase u-letter-spacing-sm mb-2">基本情報から過去の履歴までご確認いただけます。</p>
        </div>
      </div>
    </div>
  </div>
  <!-- End Promo Content -->
</section>
@endsection
@section('content')
<section class="container">
  <header class="text-center mx-auto mt-2">
    <h2 class="h1">基本情報</h2>
  </header>
  <div class="row text-center u-icon-block">
    <!-- Icon Block Column -->
    <div class="col-lg-4 col-sm-6 u-icon-block__col">
      <a class="u-icon u-icon-dark u-icon--size--xl rounded-circle mb-4" href="{{route('user.profile.account')}}">
        <span class="fas fa-id-card u-icon__inner text-white"></span>
      </a>
      <h3 class="h5">アカウント</h3>
      <p class="mb-0">登録情報の確認・変更ができます</p>
    </div>
    <!-- End Icon Block Column -->
    <!-- Icon Block Column -->
    <div class="col-lg-4 col-sm-6 u-icon-block__col">
      <a class="u-icon u-icon-dark u-icon--size--xl rounded-circle mb-4"  href="{{route('user.profile.record')}}">
        <span class="fas fa-shopping-cart u-icon__inner text-white"></span>
      </a>
      <h3 class="h5">購入履歴</h3>
      <p class="mb-0">注文・依頼履歴を閲覧できます</p>
    </div>
    <!-- End Icon Block Column -->
    <!-- Icon Block Column -->
    <div class="col-lg-4 col-sm-6 u-icon-block__col">
      <a class="u-icon u-icon-dark u-icon--size--xl rounded-circle mb-4"  href="#">
        <span class="fas fa-child u-icon__inner text-white"></span>
      </a>
      <h3 class="h5">採寸情報（準備中）</h3>
      <p class="mb-0">過去の採寸記録を確認できます</p>
    </div>
    <!-- End Icon Block Column -->

  </div>
</section>


@endsection
