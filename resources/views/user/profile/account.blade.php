@extends('layouts.sub_layout')
@section('title', 'account')
@section('content')
<!-- フラッシュメッセージ -->
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
@if ($errors->any())
<div class="container alert bg-danger text-white fade show mt-1" role="alert">
  <div class="d-flex">
    <div class="alert__icon mr-3">
      <i class="fas fa-exclamation-triangle"></i>
    </div>

    <div class="align-self-center mr-3">
      @foreach ($errors->all() as $error)
      {{ $error }}
      @endforeach
    </div>

    <div class="ml-auto">
      <button type="button" class="alert__close alert__close--light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
  </div>
</div>
@endif


<section class="text-center pt-3 pb-3">
  <div class="container pt-3 pb-3">
    <header class="text-center mx-auto mb-8">
      <h2 class="h1">アカウント</h2>
      <p class="h6">確認および変更ができます</p>
    </header>
    <div class="row">
      <div class="table-responsive px-5">

        <table class="table table-bordered table-sm align-middle">
          <thead class="text-center pb-0 thead-light">
            <tr>
              <th scope="col" class="text-nowrap">項目</th>
              <th scope="col" class="text-nowrap">現情報</th>
              <th scope="col" class="text-nowrap">編集</th>
            </tr>
          </thead>
          <tbody class="text-center align-middle">
            <tr>
              <td class="text-nowrap align-middle">氏名</td>
              <td class="text-nowrap align-middle">{{ Auth::user()->name }}</td>
              <td class="text-nowrap small align-middle">変更不可</td>
            </tr>
            <tr>
              <td class="text-nowrap align-middle">年齢</td>
              <td class="text-nowrap align-middle">{{ Auth::user()->age }}</td>
              <td class="text-nowrap align-middle">
                <a href=".bd-age-modal-lg" data-toggle="modal" class="btn btn-outline-dark btn-sm">編集</a>
                <div class="modal fade bd-age-modal-lg" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" style="display: none;" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel">年齢変更</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form class="text-center w-md-75 mx-auto" action="{{route('user.profile.age')}}" method="post">
                          <div class="col-12 form-group mb-4">
                            <h6 class="text-left pl-1">年齢</h6>
                            <select name="age" data-toggle="select" class="form-control form-control-lg">
                              <option value="">年齢をお選びください</option>
                              <option value="20歳未満">20歳未満</option>
                              <option value="20~29歳">20~29歳</option>
                              <option value="30~39歳">30~39歳</option>
                              <option value="40~49歳">40~49歳</option>
                              <option value="50歳以上">50歳以上</option>
                            </select>
                            <input type="hidden" class="form" name="id" value="{{ Auth::user()->id }}">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-dark" name="edit">Save changes</button>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td class="text-nowrap align-middle">住所</td>
              <td class="text-nowrap align-middle">
                〒{{ Auth::user()->zip01 }}<br>
                {{ Auth::user()->pref01 }}
                {{ Auth::user()->addr01 }}
              </td>
              <td class="text-nowrap align-middle">
                <a href=".bd-address-modal-lg" data-toggle="modal" class="btn btn-outline-dark btn-sm">編集</a>
                <div class="modal fade bd-address-modal-lg" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" style="display: none;" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel">住所変更</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form class="text-center w-md-75 mx-auto" action="{{route('user.profile.address')}}" method="post">
                          <div class="col-12 form-group mb-4">
                            <h6 class="text-left pl-1">住所</h6>
                            <!-- ▼郵便番号入力フィールド(3桁+4桁) -->
                            <input class="form-control form-control-lg" type="text" name="zip01" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','pref01','addr01');" value="{{old('zip01')}}">
                            <!-- ▼住所入力フィールド(都道府県) -->
                            <input class="form-control form-control-lg" type="text" name="pref01" size="20" value="{{old('pref01')}}">
                            <!-- ▼住所入力フィールド(都道府県以降の住所) -->
                            <input class="form-control form-control-lg" type="text" name="addr01" size="60" value="{{old('addr01')}}">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-dark" name="edit">Save changes</button>
                            <input type="hidden" class="form" name="id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
            </tr>


            <tr>
              <td class="text-nowrap align-middle">電話番号</td>
              <td class="text-nowrap align-middle">{{ Auth::user()->tel }}</td>
              <td class="text-nowrap align-middle">
                <a href=".bd-tel-modal-lg" data-toggle="modal" class="btn btn-outline-dark btn-sm">編集</a>
                <div class="modal fade bd-tel-modal-lg" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" style="display: none;" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel">電話番号変更</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form class="text-center w-md-75 mx-auto" action="{{route('user.profile.tel')}}" method="post">
                          <div class="col-12 form-group mb-4">
                            <h6 class="text-left pl-1">電話番号</h6>
                            <input class="form-control form-control-lg" placeholder="電話番号をご記入ください" name="tel" value="{{old('tel')}}" type="tel">

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-dark" name="edit">Save changes</button>
                            <input type="hidden" class="form" name="id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td class="text-nowrap align-middle">メールアドレス</td>
              <td class="text-nowrap align-middle">{{ Auth::user()->email }}</td>
              <td class="text-nowrap align-middle">
                <a href=".bd-email-modal-lg" data-toggle="modal" class="btn btn-outline-dark btn-sm">編集</a>
                <div class="modal fade bd-email-modal-lg" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" style="display: none;" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel">メールアドレス変更</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form class="text-center w-md-75 mx-auto" action="{{route('user.profile.email')}}" method="post">
                          <div class="col-12 form-group mb-4">
                            <h6 class="text-left pl-1">メールアドレス</h6>
                            <input class="form-control form-control-lg" placeholder="メールアドレスをご記入ください" name="email" value="{{old('email')}}" type="email">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-dark" name="edit">Save changes</button>
                            <input type="hidden" class="form" name="id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td class="text-nowrap align-middle">パスワード</td>
              <td class="text-nowrap align-middle">********</td>
              <td class="text-nowrap align-middle">
                <a href=".bd-password-modal-lg" data-toggle="modal" class="btn btn-outline-dark btn-sm">編集</a>
                <div class="modal fade bd-password-modal-lg" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" style="display: none;" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel">パスワードの変更（半角英数字４文字以上）</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form class="text-center w-md-75 mx-auto" action="{{route('user.profile.password')}}" method="post">
                          <div class="col-12 form-group mb-4">
                            <h6 class="text-left pl-1">現在のパスワード</h6>
                            <input class="form-control form-control-lg" placeholder="現在のパスワードをご記入ください" name="password" value="{{old('password')}}" type="password">
                          </div>
                          <div class="col-12 form-group mb-4">
                            <h6 class="text-left pl-1">新しいパスワード</h6>
                            <input class="form-control form-control-lg mb-3" placeholder="新しいパスワードをご記入ください" name="passwordNew" value="{{old('passwordNew')}}" type="password">
                            <input class="form-control form-control-lg" placeholder="確認のため再度パスワードをご記入ください" name="passwordConfirm" value="{{old('passwordConfirm')}}" type="password">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-dark" name="edit">Save changes</button>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" class="form" name="id" value="{{ Auth::user()->id }}">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <footer class="justify-content-center">
      <a href="{{route('user.profile')}}" class="btn btn-dark">profileに戻る</a>
    </footer>
  </div>
</section>
@endsection
