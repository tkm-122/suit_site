@extends('layouts.layout')
@section('title', 'About')
@section('header')
<!-- Promo Block -->
<section class="js-parallax u-promo-block u-promo-block--mheight-500 u-overlay u-overlay--dark text-white" style="background-image: url(assets/img-temp/1920x1080/img3.jpg);">
  <!-- Promo Content -->
  <div class="container u-overlay__inner u-ver-center u-content-space">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="text-center">
          <h1 class="display-sm-4 display-lg-3">About us</h1>
          <p class="h6 text-uppercase u-letter-spacing-sm mb-0">Our Philosophy and wish</p>
        </div>
      </div>
    </div>
  </div>
  <!-- End Promo Content -->
</section>
<!-- End Promo Block -->
@endsection

@section('content')
<section class="text-center bg-light u-content-space">
  <div class="container">
    <div class="row">
      <header class="text-center w-md-50 mx-auto mb-8">
        <p class="h5">個性溢れる時代に、新しいスーツの選び方。<br>こだわりのオーダーメイドスーツで。 </p>
      </header>
    </div>
    <div class="row">
      <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="display-4 text-primary mb-2">
          <i class="fas fa-tshirt"></i>
        </div>
        <h4 class="h5">こだわりの生地</h4>
        <p class="mb-0">こだわりポイント</p>
      </div>

      <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="display-4 text-primary mb-2">
          <i class="fas fa-diagnoses"></i>
        </div>
        <h4 class="h5">優秀なテーラー</h4>
        <p class="mb-0">こだわりポイント</p>
      </div>

      <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="display-4 text-primary mb-2">
          <i class="fas fa-chalkboard-teacher"></i>
        </div>
        <h4 class="h5">魅力的なサービス</h4>
        <p class="mb-0">サービスについて</p>
      </div>
    </div>
  </div>
</section>

<section class="u-content-space">
  <div class="container">
    <header class="text-center w-md-50 mx-auto mb-8">
      <h2 class="h1">会社概要 </h2>
    </header>
    <div class="row">
      <table class="table tables-bordered　text-center w-md-50 mx-auto mb-8 h5">
      	<tbody>
          <tr>
        		<th>会社名</th>
        		<td>SQULABO</td>
        	</tr>
        	<tr>
        		<th>本社所在地</th>
        		<td>〒000-0000<br>東京都xxxxx</td>
        	</tr>
        	<tr>
        		<th>設立</th>
        		<td>0000年00月00日 </td>
        	</tr>
        	<tr>
        		<th>資本金</th>
        		<td>0,000万円</td>
        	</tr>
        	<tr>
        		<th>代表者</th>
        		<td>代表取締役社長　xxxx</td>
        	</tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<section class="u-content-space bg-light">
  <div class="container">
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
    <header class="text-center w-md-50 mx-auto mb-8">
      <h2 class="h1">Contacts us </h2>
      <p class="h5">お問い合わせ・ご依頼はこちらからご連絡ください。</p>
    </header>
    <form class="text-center w-md-75 mx-auto" action="{{route('contact_confirm')}}" method="post">
      @csrf
      <div class="row">
        <div class="col-lg-6 form-group mb-4 @if(!empty($errors->first('name'))) has-error @endif">
          <input class="form-control form-control-lg" name="name" placeholder="Name" type="text">
          <span class="help-block">{{$errors->first('name')}}</span>
        </div>

        <div class="col-lg-6 form-group mb-4 @if(!empty($errors->first('email'))) has-error @endif">
          <input class="form-control form-control-lg" placeholder="Email" type="email" name="email">
          <span class="help-block">{{$errors->first('email')}}</span>
        </div>

        <div class="col-lg-6 form-group mb-4 @if(!empty($errors->first('subject'))) has-error @endif">
          <select name="subject" data-toggle="select" class="form-control form-control-lg">
            <option value="">問い合わせ内容をお選び下さい</option>
            <option value="オーダースーツ（商品）について">オーダースーツ（商品）について</option>
            <option value="会社情報について">会社情報について</option>
            <option value="企業取引について">企業取引について</option>
            <option value="その他">その他</option>
          </select>
          <span class="help-block">{{$errors->first('subject')}}</span>
        </div>

        <div class="col-lg-6 form-group mb-4">
          <input class="form-control form-control-lg @if(!empty($errors->first('tel'))) has-error @endif" placeholder="Phone number" type="tel" name="tel">
          <span class="help-block">{{$errors->first('tel')}}</span>
        </div>

        <div class="col-lg-12 form-group mb-6 @if(!empty($errors->first('message'))) has-error @endif">
          <textarea class="form-control form-control-lg" rows="7" placeholder="Message" name="message"></textarea>
          <span class="help-block">{{$errors->first('message')}}</span>
        </div>
      </div>

      <div class="text-center">
        <button class="btn btn-lg btn-primary py-3 px-4" type="submit">確認する</button>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      </div>
    </form>

  </div>
</section>
@endsection
