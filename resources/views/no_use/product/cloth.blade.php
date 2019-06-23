@extends('layouts.layout')
@section('title', 'cloth')
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
<section>
  <div class="container pt-3 pb-3">
    <header class="text-center mx-auto mb-4">
      <h2 class="h2">生地一覧</h2>
      <h6><span class="badge badge-secondary">生地選択</span> -> デザイン選択 -> 確認画面</h6>
    </header>
    <div class="row text-center d-flex align-items-end">
      @foreach($items as $item)
      <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
        <figure>
          <img class="w-50 h-20 rounded-top" src="{{$item->image}}" alt="" >
          <!-- Figure Info -->
          <div class="u-box-shadow-sm bg-white text-center rounded p-4">
            <h4 class="mb-2">ブランド名:{{$item->name}}</h4>
            <p class="h6 mb-1">生地デザイン : {{$item->design}}</p>
            <p class="h6 mb-1">カラー : {{$item->color}}</p>
            <p class="h6 mb-1">作り手 : {{$item->maker}}</p>
            <p class="h6 mb-1">価格 : {{$item->price}}円</p>
            <p class="h6 mb-2">00人から受注ok！</p>
            <form class="" action="{{route('product.design')}}" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="cloth_id" value="{{$item->cloth_id}}">
              <button class="btn btn-primary mt-1" type="submit">こちらを選ぶ</button>
            </form>
          </div>
          <!-- End Figure Info-->
        </figure>
        <!-- End Figure -->
      </div>


      @endforeach
    </div>
    <footer class="text-center mx-auto mb-4">
      {{$items->links()}}
    </footer>
  </div>
</section>
@endsection
