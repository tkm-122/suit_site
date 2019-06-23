@extends('layouts.sub_layout')
@section('title', 'signin')
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
@elseif(session('error'))
<div class="container alert bg-danger text-white fade show mt-1" role="alert">
  <div class="d-flex">
    <div class="alert__icon mr-3">
      <i class="fas fa-exclamation-triangle"></i>
    </div>

    <div class="align-self-center mr-3">{{ session('error') }}</div>

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
    <header class="text-center mx-auto mb-8">
      <h2 class="h1">Signin</h2>
      <p class="h6">メールアドレス・パスワードからログインできます。</p>
    </header>

    <form class="text-center w-md-75 mx-auto" action="{{route('user.signin')}}" method="post">
      <div class="form-row">
        <div class="form-group col-md-6 text-left">
          <label >メールアドレス</label>
          <input class="form-control form-control-xs" placeholder="メールアドレスをご記入ください" name="email" value="{{old('email')}}" type="email">
          @if($errors->has('email'))<br><span class="help-block text-danger">{{$errors->first('email')}}</span>@endif
        </div>
        <div class="form-group col-md-6 text-left">
          <label >パスワード<span class="small pb-0">（半角英数字４文字以上）</span></label>
          <input class="form-control form-control-xs" placeholder="Passwordをご記入ください" name="password" value="{{old('password')}}" type="password">
          @if($errors->has('password'))<br><span class="help-block text-danger">{{$errors->first('password')}}</span>@endif
        </div>
      </div>
      <div class="text-center">
        <button class="btn btn-lg btn-secondary py-2 px-4" type="submit">ログイン</button>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      </div>
    </form>
  </div>
</section>
@endsection
