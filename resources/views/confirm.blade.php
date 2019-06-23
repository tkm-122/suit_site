@extends('layouts.sub_layout')
@section('title', 'confirm')
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
<section>
  <div class="container">
    <div class="pb-1 h5" style="border-bottom: 1px dotted #333;">ご注文内容</div>
    <div class="row">
      <div class="table-responsive">
        <table class="table table-bordered table-sm">
          <thead class="text-center pb-0 thead-light">
            <tr>
              <th scope="col" colspan="2" class="text-nowrap">商品名</th>
              <th scope="col" class="text-nowrap">単価</th>
              <th scope="col" class="text-nowrap">小計</th>
            </tr>
          </thead>
          <tbody class="small pb-0">
            <tr>
              <td class="" rowspan="5">
                <a href="{{ url('select/'.$item->id) }}" ><img src="{{ url('/') }}/{{$item->image_top}}"  width="60" border="0"></a>&nbsp;
              </td>
              <td class="">
                <a href="{{ url('select/'.$item->id) }}" class="">{{$item->name}}</a>
                <br><span>（ {{$size->body}} / {{$size->size}}）</span>
              </td>
              <td class="text-nowrap text-center align-middle">
                <span class="">￥{{number_format(($item->price)*1.08)}}</span><br><span class="">(税￥{{number_format(($item->price)*0.08)}})</span>
              </td>
              <td class="text-nowrap text-center align-middle" rowspan="5">
                <span class="">￥{{number_format(($totalprice*1.08))}}</span><br><span class="">(税￥{{number_format(($totalprice)*0.08)}})</span>
              </td>
            </tr>


            <tr class="text-nowrap">
              <td class="">
                <span class="">└ </span>股下サイズ直し（無料）：{{$inseam->name}}
              </td>
              <td class="text-center">
                @if($inseam->price == 0)
                <span class="">-</span>
                @else
                <span class="">+￥{{number_format(($inseam->price)*1.08)}}</span><span class="">(税￥{{number_format(($inseam->price)*0.08)}})</span>
                @endif
              </td>
            </tr>

            <tr class="text-nowrap">
              <td class="">
                <span class="">└ </span>裾デザイン指定（無料）：{{$hem->name}}
              </td>
              <td class="text-center">
                @if($hem->price == 0)
                <span class="">-</span>
                @else
                <span class="">+￥{{number_format(($hem->price)*1.08)}}</span><span class="">(税￥{{number_format(($hem->price)*0.08)}})</span>
                @endif
              </td>
            </tr>

            <tr class="text-nowrap">
              <td class="">
                <span class="">└ </span>ウエスト直し(1,200円 + 税)：{{$waist->name}}
              </td>
              <td class="text-center">
                @if($waist->price == 0)
                <span class="">-</span>
                @else
                <span class="">+￥{{number_format(($waist->price)*1.08)}}</span><span class="">(税￥{{number_format(($waist->price)*0.08)}})</span>
                @endif
              </td>
            </tr>

            <tr class="text-nowrap">
              <td class="">
                <span class="">└ </span>スベリ止め加工(700円 + 税)：{{$skidproof->name}}
              </td>
              <td class="text-center">
                @if($skidproof->price == 0)
                <span class="">-</span>
                @else
                <span class="">+￥{{number_format(($skidproof->price)*1.08)}}</span><span class="">(税￥{{number_format(($skidproof->price)*0.08)}})</span>
                @endif
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="clearfix">
      <div class="float-right">
        <a href="{{ url('select/'.$item->id) }}" class="small btn btn-light">選択し直す</a>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container pt-5">
    <div class="row mb-3">
      <div class="col-12 col-md-6">
        <table border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-sm mb-0">
          <thead class="text-center pb-0 thead-light">
            <tr>
              <th scope="col" class="text-nowrap ">商品価格</th>
              <th scope="col" class="text-nowrap bg-warning">キャンペーン価格</th>
            </tr>
          </thead>
          <tbody class="h5">
            <tr class="text-right">
              <td nowrap="nowrap" class="">￥{{number_format(($totalprice*1.08))}}</td>
              <td nowrap="nowrap" class=" text-danger font-weight-bold">￥{{number_format((($totalprice-10000)*1.08))}}</td>
            </tr>
          </tbody>
        </table>
        <p class="small text-right pr-1">※税込価格</p>
      </div>
      <div class="col-12 col-md-6 mb-5">
        <div class="px-lg-5 my-lg-0 pr-2 text-center mx-auto d-block pt-3 d-flex justify-content-around">
          <button href=".bd-request-modal-lg" data-toggle="modal" class="btn btn-lg btn-light text-center mx-auto" style="height:60px;width:150px;">
            <span>採寸依頼</span>
          </button>
          @if(Auth::check())
          <div class="modal fade bd-request-modal-lg" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="ModalLabel">採寸依頼画面</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-group mb-4">
                    <table border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-sm mb-0">
                      <thead class="text-center pb-0 thead-light">
                        <tr>
                          <th scope="col" class="text-nowrap">商品価格</th>
                        </tr>
                        <tbody>
                          <tr>
                            <td scope="col" class="">￥{{number_format(($totalprice*1.08))}}</td>
                          </tr>
                        </tbody>
                      </thead>
                    </table>
                    <p class="small text-right pr-1">※税込価格</p>
                    <p class="mb-0 text-left">依頼をいただき次第、こちらからご連絡させて頂きます。<br>連絡方法をお選び下さい。</p>
                    <form class="text-center w-md-75 mx-auto" action="{{route('complete')}}" method="post">
                      <fieldset class="form-group">
                        <div class="row py-3">
                          <legend class="col-form-label col-sm-3 pt-0">ご連絡方法</legend>
                          <div class="col-sm-9">
                            <div class="form-check-inline">
                              <input type="radio" name="status" id="status1" value="request-both" checked>
                              <label class="form-check-label ml-1" for="status1">
                                どちらでも
                              </label>
                            </div>
                            <div class="form-check-inline">
                              <input type="radio" name="status" id="status2" value="request-tel">
                              <label class="form-check-label ml-1" for="status2">
                                電話
                              </label>
                            </div>
                            <div class="form-check-inline">
                              <input type="radio" name="status" id="status3" value="request-mail">
                              <label class="form-check-label ml-1" for="status3">
                                メール
                              </label>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <p class="small pb-0">※ご指定の方法で繋がらなかった際は、もう一方の方法でご連絡させていただきますので、予めご了承ください。</p>
                      <div class="modal-footer">
                        @csrf
                        <input type="hidden"  name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden"  name="status" value="request">
                        <input type="hidden"  name="item" value="{{$item->id}}">
                        <input type="hidden"  name="inseam" value="{{$inseam->id}}">
                        <input type="hidden"  name="hem" value="{{$hem->id}}">
                        <input type="hidden"  name="waist" value="{{$waist->id}}">
                        <input type="hidden" name="skidproof" value="{{$skidproof->id}}">
                        <input type="hidden"  name="size" value="{{$size->id}}">
                        <input type="hidden"  name="price" value="{{(($totalprice-10000)*1.08)}}">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning" name="order">採寸依頼</button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @else
          <div class="modal fade bd-buy-modal-lg" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="ModalLabel">ログイン状態の確認</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-group mb-4">
                    <h6 class="text-left pl-1">会員登録もしくはログインしてください</h6>
                    <div class="my-2 my-lg-0 pr-2 text-center mx-auto d-block">
                      <a class="btn btn-secondary mr-5" href="{{route('user.signin')}}">ログイン</a>
                      <a class="btn btn-info ml-5" href="{{route('user.signup')}}">新規登録</a>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endif

          <button href=".bd-buy-modal-lg" data-toggle="modal" class="btn btn-lg btn-warning text-center mx-auto" style="height:60px;width:150px;">
            <span>購入する</span>
          </button>
          @if(Auth::check())
          <div class="modal fade bd-buy-modal-lg" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="ModalLabel">購入画面</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-group mb-4">
                    <h6 class="text-left pl-1">このまま購入する</h6>
                    <table border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-sm mb-0">
                      <thead class="text-center pb-0 thead-light">
                        <tr>
                          <th scope="col" class="text-nowrap bg-warning">キャンペーン価格</th>
                        </tr>
                        <tbody>
                          <tr>
                            <td scope="col" class="text-nowrap text-danger font-weight-bold">￥{{number_format((($totalprice-10000)*1.08))}}</td>
                          </tr>
                        </tbody>
                      </thead>
                    </table>
                    <p class="small text-right pr-1">※税込価格</p>
                  </div>
                  <div class="modal-footer">
                    <form class="text-center w-md-75 mx-auto" action="{{route('complete')}}" method="post">
                      @csrf
                      <input type="hidden"  name="user_id" value="{{ Auth::user()->id }}">
                      <input type="hidden"  name="status" value="purchase">
                      <input type="hidden"  name="item" value="{{$item->id}}">
                      <input type="hidden"  name="inseam" value="{{$inseam->id}}">
                      <input type="hidden"  name="hem" value="{{$hem->id}}">
                      <input type="hidden"  name="waist" value="{{$waist->id}}">
                      <input type="hidden" name="skidproof" value="{{$skidproof->id}}">
                      <input type="hidden"  name="size" value="{{$size->id}}">
                      <input type="hidden"  name="price" value="{{(($totalprice-10000)*1.08)}}">
                      <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-warning" name="order">購入する</button>
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @else
          <div class="modal fade bd-buy-modal-lg" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="ModalLabel">ログイン状態の確認</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-group mb-4">
                    <h6 class="text-left pl-1">会員登録もしくはログインしてください</h6>
                    <div class="my-2 my-lg-0 pr-2 text-center mx-auto d-block">
                      <a class="btn btn-secondary mr-5" href="{{route('user.signin')}}">ログイン</a>
                      <a class="btn btn-info ml-5" href="{{route('user.signup')}}">新規登録</a>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endif
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-12">
        <p class="small">※採寸依頼をご希望のお客様は、改めて弊社の方から場所・日時についてご連絡いたします。ご希望の連絡方法（電話・メール）をご選択下さいませ。</p>
      </div>
    </div>
  </div>

</section>



<section class="pt-5 pb-5">
  <div class="container">
    <header class="text-center">
      <h4 class="h4 mb-5" style="background-color:#e2e2e2;">メンズスーツ一覧</h4>
    </header>
    <div class="row">
      @foreach($datas as $data)
      <div class="col-6 col-sm-6 col-md-3 mb-3">
        <div class="text-center" >
          <div class="mb-2">
            <a href="{{ url('select/'.$data->id) }}" class="text-left small" style="font-size:10.5px;">
              <img src="{{ url('/') }}/{{$data->image_top}}" alt=""  style="height:auto; width:100%;">
            </a>
          </div>
          <div class="">
            <a href="{{ url('select/'.$data->id) }}" class="text-left small" style="font-size:10.5px;">{{mb_substr($data->name,0,30)}}...</a>
          </div>
          <div class="">
            <span class="h5">￥{{number_format($data->price)}} </span><span class="h6">＋税</span>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="text-right">
      <a href="#">他の商品を見る</a>
    </div>
  </div>
</section>


@endsection
