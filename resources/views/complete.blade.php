@extends('layouts.sub_layout')
@section('title', 'complete')
@section('content')
<section class="py-5">
  <!-- Promo Content -->
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="text-center">
          @if ($status === 'purchase')
          <h3 class="display-sm-6 display-lg-4">ご注文ありがとうございます。</h3>
          <p class="pt-3">お届け日数については別途ご連絡いたします。<br>ご注文履歴はプロフィール画面よりご確認いただけます。</p>
          @else
          <h3 class="display-sm-6 display-lg-4">ご依頼ありがとうございます。</h3>
          <p class="pt-3">採寸については別途ご連絡させていただきます。<br>ご予約履歴はプロフィール画面よりご確認いただけます。</p>
          @endif
        </div>
      </div>
    </div>
    <div class="px-lg-5 my-lg-0 pr-2 text-center mx-auto d-block pt-3">
      <a href="{{action('PagesController@index')}}" class="small btn btn-light">ホーム画面</a>
      <a href="{{route('user.profile')}}" class="small btn btn-light">プロフィール画面</a>
    </div>
  </div>
  <!-- End Promo Content -->
</section>
@endsection
