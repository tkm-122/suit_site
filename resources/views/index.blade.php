@extends('layouts.layout')
@section('title', 'Home')
@section('header')
<!-- Promo Block -->
<section>
  <div class="jumbotron-extend js-parallax u-promo-block u-overlay u-overlay--dark text-white img-fluid" style="background-image: url({{ url('/') }}/img/pages/toppage3.jpg);">
    <div class="container-fluid jumbotron-container u-overlay__inner u-ver-center">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="text-center">
            <p class="text-uppercase u-letter-spacing-sm mb-0">Cool and Comfortable Suit Creator</p>
            <h2 class="display-sm-4 display-lg-3 mb-3">We are <span class="js-display-typing"></span></h2>
          </div>
        </div>
        <div class="col-md-4 align-self-center mb-5">
          <ul class="list-inline text-center text-md-center mb-0">
            <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Facebook">
              <a class="text-white" target="_blank" href="#">
                <i class="fab fa-facebook"></i>
              </a>
            </li>
            <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Instagram">
              <a class="text-white" target="_blank" href="#">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Twitter">
              <a class="text-white" target="_blank" href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Dribbble">
              <a class="text-white" target="_blank" href="#">
                <i class="fab fa-dribbble"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div><!-- /.container -->
  </div><!-- /.jumbotron -->
</section>
@endsection

@section('content')
<section class="pt-3">
  <div class="container">
    <div class="row">
      <div class="alert bg-warning text-black" style="width:100%">
        <div class="text-center ">
          <div class=" font-weight-bold">ECでのご購入者様限定、¥10,000値引キャンペーン中！</div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="">
  <div class="container">
    <header class="text-center">
      <h4 class=" mb-5">メンズスーツ一覧</h4>
    </header>
    <div class="row">
      @foreach($items as $item)
      <div class="col-6 col-sm-6 col-md-3 mb-5">
        <div class="text-center" style="height:380px;">
          <div class="mb-2">
            <a href="{{ url('select/'.$item->id) }}" class="text-left small" style="font-size:10.5px;">
              <img src="{{ url('/') }}/{{$item->image_top}}" alt=""  style="height:auto; width:100%;">
            </a>
          </div>
          <div class="">
            <h6 class="small mb-0">{{$item->code}}</h6>
          </div>
          <div class="">
            <a href="{{ url('select/'.$item->id) }}" class="text-left small" style="font-size:10.5px;">{{$item->name}}</a>
          </div>
          <div class="">
            <span class="h4">￥{{number_format($item->price)}} </span><span class="h6">＋税</span>
          </div>
        </div>
      </div>
      @endforeach
      @foreach($items as $item)
      <div class="col-6 col-sm-6 col-md-3 mb-5">
        <div class="text-center" style="height:380px;">
          <div class="mb-2">
            <a href="#"></a>
            <img src="{{ url('/') }}/{{$item->image_top}}" alt=""  style="height:auto; width:100%;">
          </a>
        </div>
        <div class="">
          <h6 class="small mb-0">{{$item->code}}</h6>
        </div>
        <div class="">
          <a href="#" class="text-left small" style="font-size:10.5px;">{{$item->name}}</a>
        </div>
        <div class="">
          <span class="h4">￥{{number_format($item->price)}} </span><span class="h6">＋税</span>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="pagination justify-content-center">
    {{$items->links()}}
  </div>
</div>
</section>
<section class="pt-3">
  <div class="container">
    <div class="row">
      <div class="alert bg-warning text-black" style="width:100%">
        <div class="text-center ">
          <div class=" font-weight-bold">ECでのご購入者様限定、¥10,000値引キャンペーン中！</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--
<section class="u-content-space">
<div class="container">
<div class="row">
<header class="text-center w-md-50 mx-auto mb-8">
<h2 class="h1">Our Pruduct <i class="fas fa-user-tie "></i></h2>
<p class="h5">厳選した生地・確かな技術をもっと多くの人に届けたい･･･</p>
</header>
</div>
<div class="row text-center">
<div class="col-lg-4 mb-5 mb-lg-0">
<div class="display-4 text-primary mb-2">
<i class="fas fa-tshirt"></i>
</div>
<a href="#!">
生地で選ぶ <i class="fas fa-arrow-right ml-1"></i>
</a>
<p>全5種類の生地からお好みの生地を選べます。</p>
</div>

<div class="col-lg-4 mb-5 mb-lg-0">
<div class="display-4 text-primary mb-2">
<i class="fas fa-diagnoses"></i>
</div>
<a href="#!">
作り手で選ぶ <i class="fas fa-arrow-right ml-1"></i>
</a>
<p>お好みの作り手に依頼することができます。</p>
</div>

<div class="col-lg-4 mb-5 mb-lg-0">
<div class="display-4 text-primary mb-2">
<i class="fas fa-hand-holding-usd"></i>
</div>
<a href="#!">
価格で選ぶ<i class="fas fa-arrow-right ml-1"></i>
</a>
<p>ご予算に応じて、自分だけの１枚に選べます。</p>
</div>
</div>
</div>
</section>
-->
<!--
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
<figure>
<img class="w-100 rounded-top" src="assets/img-temp/400x550/img1.jpg" alt="Image Description">
<div class="u-box-shadow-sm bg-white text-center rounded p-4">
<h4 class="mb-2">ブランド名</h4>
<p class="h5 mb-1">00000円</p>
<p class="h6 mb-2">00人から受注ok！</p>
<a href="#!">
こちらを選ぶ <i class="fas fa-arrow-right ml-1"></i>
</a>
</div>
</figure>
</div>
<div class="col-lg-4 mb-5 mb-lg-0">
<div class="display-5 mb-4 text-center">
<h4>人気No.2</h4>
</div>
<figure>
<img class="w-100 rounded-top" src="assets/img-temp/400x550/img2.jpg" alt="Image Description">
<div class="u-box-shadow-sm bg-white text-center rounded p-4">
<h4 class="mb-2">ブランド名</h4>
<p class="h5 mb-1">00000円</p>
<p class="h6 mb-2">00人から受注ok！</p>
<a href="#!">
こちらを選ぶ <i class="fas fa-arrow-right ml-1"></i>
</a>
</div>
</figure>
</div>
<div class="col-lg-4 mb-5 mb-lg-0">
<div class="display-5 mb-4 text-center">
<h4>人気No.3</h4>
</div>
<figure>
<img class="w-100 rounded-top" src="assets/img-temp/400x550/img3.jpg" alt="Image Description">
<div class="u-box-shadow-sm bg-white text-center rounded p-4">
<h4 class="mb-2">ブランド名</h4>
<p class="h5 mb-1">00000円</p>
<p class="h6 mb-2">00人から受注ok！</p>
<a href="#!">
こちらを選ぶ <i class="fas fa-arrow-right ml-1"></i>
</a>
</figure>
</div>
</div>
</div>
</section>
<section class="u-content-space">
<div class="container">
<header class="text-center w-md-50 mx-auto mb-8">
<h2 class="h1">Our Partner <i class="fas fa-hands-helping "></i></h2>
<p class="h5">素敵な生地と技術をもったテーラーさんをご紹介！</p>
</header>
<div class="row">
<div class="col-lg-4 mb-2 mb-lg-0">
<div class="u-box-shadow-sm bg-light text-center rounded p-4">
<h4>A社</h4>
<h6>イタリア生地に強い</h6>
</div>
<div class="u-box-shadow-sm bg-light text-center rounded p-2">
<img class="u-box-shadow-lg img-fluid rounded-circle m-1" src="assets/img-temp/intro/img1.jpg" alt="Htmlstream">
<h5 class="ml-3">作り手の紹介</h5>
<a href="#!">
商品を選ぶ <i class="fas fa-arrow-right ml-1"></i>
</a>
</div>
</div>
<div class="col-lg-4 mb-2 mb-lg-0">
<div class="u-box-shadow-sm bg-light text-center rounded p-4">
<h4>B社</h4>
<h6>イギリス生地に強い</h6>
</div>
<div class="u-box-shadow-sm bg-light text-center rounded p-2">
<img class="u-box-shadow-lg img-fluid rounded-circle m-1" src="assets/img-temp/intro/img1.jpg" alt="Htmlstream">
<h5 class="ml-3">作り手の紹介</h5>
<a href="#!">
商品を選ぶ <i class="fas fa-arrow-right ml-1"></i>
</a>
</div>
</div>
<div class="col-lg-4 mb-2 mb-lg-0">
<div class="u-box-shadow-sm bg-light text-center rounded p-4">
<h4>C社</h4>
<h6>日本生地に強い</h6>
</div>
<div class="u-box-shadow-sm bg-light text-center rounded p-2">
<img class="u-box-shadow-lg img-fluid rounded-circle m-1" src="assets/img-temp/intro/img1.jpg" alt="Htmlstream">
<h5 class="ml-3">作り手の紹介</h5>
<a href="#!">
商品を選ぶ <i class="fas fa-arrow-right ml-1"></i>
</a>
</div>
</div>
</div>
</div>
</section>
-->

@endsection

@section('script')
<script>
$(document).on('ready', function () {
  // initialization of text animation (typing)
  $(".js-display-typing").typed({
    strings: [
      "SQULABO",
      "Creative",
      "Supporter"
    ],
    typeSpeed: 60,
    loop: true,
    backDelay: 2500
  });
});
</script>
@endsection
