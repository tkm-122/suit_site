@extends('layouts.layout')
@section('title', 'Product')
@section('header')
<!-- Promo Block -->
<section>
  <div class="jumbotron jumbotron-extend js-parallax u-promo-block u-overlay u-overlay--dark text-white img-responsive" style="background-image: url({{ url('/') }}/img/pages/business1.jpg);">
    <div class="container-fluid jumbotron-container u-overlay__inner u-ver-center">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="text-center">
            <h1 class="display-sm-4 display-lg-3">Business Partnership</h1>
            <!-- <p class="h6 text-uppercase u-letter-spacing-sm mb-0">広告や記事を転載してくださる企業様募集中。</p> -->
          </div>
        </div>
      </div>
    </div><!-- /.container -->
  </div><!-- /.jumbotron -->
</section>
@endsection

@section('content')
<section class="py-5">
  <div class="container">
    <header class="text-center mx-auto mb-8">
      <h2 class="h3">お客様　<i class="far fa-handshake"></i>　SQULABO</h2>
    </header>

    <!-- Row -->
    <div class="row text-center">
      <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="display-4 text-dark mb-2">
          <i class="far fa-file-word"></i>
        </div>
        <h4 class="h5">コラム記事の掲載</h4>
        <!-- <p>スーツやオフィスカジュアルについての記事の掲載しませんか？</p> -->
      </div>

      <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="display-4 text-dark mb-2">
          <i class="far fa-images"></i>
        </div>
        <h4 class="h5">広告の掲載</h4>
        <!-- <p>ホームページに広告を掲載しませんか？</p> -->
      </div>

      <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="display-4 text-dark mb-2">
          <i class="fas fa-people-carry"></i>
        </div>
        <h4 class="h5">福利厚生</h4>
        <!-- <p>従業員様の福利厚生にいかがでしょうか？</p> -->
      </div>
    </div>
    <footer class="text-center mx-auto">
      <p class="small ">記事・広告・福利厚生などをご用意しています。<br>お気軽にお問い合わせくださいませ。</p>
    </footer>
    <!-- End Row -->
    <!-- <div class="row text-center">
      <div class="col-12 mb-5">
        <h4 class="h6">全て下記のフォーマットよりご相談くださいませ。</h4>
      </div>
    </div> -->
  </div>
</section>


<section class="pt-5 py-2 bg-light">
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
    <header class="text-center mx-auto mb-3">
      <h2 class="">お問い合わせフォーム</h2>
      <p class="h6">こちらからご連絡ください。</p>
    </header>

    <form class="text-center w-md-75 mx-auto" action="{{route('contact_confirm')}}" method="post">
      <div class="form-row">
        <div class="form-group col-md-6 text-left">
          <label for="">氏名</label>
          <input class="form-control form-control-xs" placeholder="お名前をご記入ください" name="name" value="{{old('name')}}" type="text">
          @if($errors->has('name'))<br><span class="help-block text-danger">{{$errors->first('name')}}</span>@endif
        </div>
        <div class="form-group col-md-6 text-left">
          <label for="">メールアドレス</label>
          <input class="form-control form-control-xs" placeholder="Email" type="email" name="email">
          @if($errors->has('email'))<br><span class="help-block text-danger">{{$errors->first('email')}}</span>@endif
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6 text-left">
          <label >電話番号</label>
          <input class="form-control form-control-xs" placeholder="電話番号をご記入ください" name="tel" value="{{old('tel')}}" type="tel">
          @if($errors->has('tel'))<br><span class="help-block text-danger">{{$errors->first('tel')}}</span>@endif
        </div>
        <div class="form-group col-md-6 text-left">
          <label for="">項目</label>
          <select name="subject" data-toggle="select" class="form-control form-control-xs">
            <option value="">項目をお選び下さい</option>
            <option value="コラム記事について">コラム記事について</option>
            <option value="広告掲載について">広告掲載について</option>
            <option value="福利厚生について">福利厚生について</option>
            <option value="オーダースーツ（商品）について">オーダースーツ（商品）について</option>
            <option value="その他">その他</option>
          </select>
          @if($errors->has('subject'))<br><span class="help-block text-danger">{{$errors->first('subject')}}</span>@endif
        </div>

      </div>
      <div class="form-row">
        <div class="form-group text-left col-12">
          <label >お問い合わせ内容</label>
          <textarea class="form-control form-control-xs" rows="7" placeholder="お問い合わせ内容をご記入くださいませ。" name="message"></textarea>
          @if($errors->has('message'))<br><span class="help-block text-danger">{{$errors->first('message')}}</span>@endif
        </div>

      </div>
      <div class="text-center">
        <button class="btn btn-lg btn-dark px-4" type="submit">確認する</button>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      </div>
    </form>

  </div>
</section>
@endsection
