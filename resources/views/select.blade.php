@extends('layouts.sub_layout')
@section('title', 'select')
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
  <div class="container pt-5">
    <div class="row pb-5">
      <div class="col-12 col-md-6">
        <div class="mb-2">
          <img src="{{ url('/') }}/{{$item->image_top}}" id="MainImage" alt=""  style="height:auto; width:100%;">
          <!--        <span id="prev">△</span>
          <span id="next">△</span> -->
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="w-auto pt-5" >
          <ul id="SubImage">
            <li class="p-1 mb-3 d-inline-block align-top h-auto" style="width:24%;"><img src="{{ url('/') }}/{{$item->image_top}}" alt=""  style="width:100%;" class="ChangeImage"></li>
            <li class="p-1 mb-3 d-inline-block align-top h-auto" style="width:24%;"><img src="{{ url('/') }}/{{$item->image_cloth}}" alt=""  style="width:100%;" class="ChangeImage"></li>
            <li class="p-1 mb-3 d-inline-block align-top h-auto" style="width:24%;"><img src="{{ url('/') }}/{{$item->image_sub1}}" alt=""  style="width:100%;" class="ChangeImage"></li>
            <li class="p-1 mb-3 d-inline-block align-top h-auto" style="width:24%;"><img src="{{ url('/') }}/{{$item->image_sub2}}" alt=""  style="width:100%;" class="ChangeImage"></li>
            <li class="p-1 mb-3 d-inline-block align-top h-auto" style="width:24%;"><img src="{{ url('/') }}/{{$item->image_sub3}}" alt=""  style="width:100%;" class="ChangeImage"></li>
            <li class="p-1 mb-3 d-inline-block align-top h-auto" style="width:24%;"><img src="{{ url('/') }}/{{$item->image_sub4}}" alt=""  style="width:100%;" class="ChangeImage"></li>
            <li class="p-1 mb-3 d-inline-block align-top h-auto" style="width:24%;"><img src="{{ url('/') }}/{{$item->image_sub5}}" alt=""  style="width:100%;" class="ChangeImage"></li>
            <li class="p-1 mb-3 d-inline-block align-top h-auto" style="width:24%;"><img src="{{ url('/') }}/{{$item->image_sub6}}" alt=""  style="width:100%;" class="ChangeImage"></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-6 order-md-last">
        <div class="mb-5 text-center">
          <p class="h6">{{$item->name}}</p>
          <p class="h6 pt-3">商品番号 : {{$item->code}}</p>
          <span class="h3 pt-2">￥{{number_format($item->price)}} </span><span class="h6">＋税</span>
        </div>

        <div class="text-center　pt-5">
          <form class="" action="{{route('confirm')}}" method="post">
            <table class="table ">
              <thead class="text-left small pb-0">
                <tr>
                  <th nowrop="nowrap" style="background: #F6F6F6;">股下サイズ直し<br>（無料）</th>
                  <th>
                    <span style="color: #7e7e7e;">※裾デザイン指定も選択</span>
                    <br>
                    <select name="inseam" class="form-control-xs" style="height:auto; width:150px;">
                      @foreach($inseams as $inseam)
                      <option value="{{$inseam->id}}">{{$inseam->name}}</option>
                      @endforeach
                    </select>
                  </th>
                </tr>
                <tr>
                  <th nowrop="nowrap" style="background: #F6F6F6;">裾デザイン指定<br>（無料）</th>
                  <th>
                    <span style="color: #7e7e7e;">※指定がない場合は(シングル)</span>
                    <br>
                    <select name="hem" class="form-control-xs" style="width:150px;">
                      @foreach($hems as $hem)
                      <option value="{{$hem->id}}">{{$hem->name}}</option>
                      @endforeach
                    </select>
                  </th>
                </tr>
                <tr>
                  <th nowrop="nowrap" style="background: #F6F6F6;" >ウエスト直し<br>（1,200円 + 税）</th>
                  <th>
                    <select name="waist" class="form-control-xs" style="width:150px;">
                      @foreach($waists as $waist)
                      <option value="{{$waist->id}}">{{$waist->name}}</option>
                      @endforeach
                    </select>
                  </th>
                </tr>
                <tr>
                  <th nowrop="nowrap" style="background: #F6F6F6;">スベリ止め加工<br>（700円 + 税）</th>
                  <th>
                    <select name="skidproof" class="form-control-xs" style="width:150px;">
                      @foreach($skidproofs as $skidproof)
                      <option value="{{$skidproof->id}}">{{$skidproof->name}}</option>
                      @endforeach
                    </select>
                  </th>
                </tr>
              </thead>
            </table>
            <table class="table">
              <thead class="text-center small pb-0">
                <tr>
                  <th style="background: #F6F6F6;">サイズ（身長cm）＼体型</th>
                  <th style="background: #F6F6F6;">Y体</th>
                  <th style="background: #F6F6F6;">A体</th>
                  <th style="background: #F6F6F6;">AB体</th>
                  <th style="background: #F6F6F6;">BB体</th>
                </tr>
                <tr>
                  <th style="background: #F6F6F6;">4号(165cm)</th>
                  <th><label><input type="radio" name="size" value="1"></label></th>
                  <th><label><input type="radio" name="size" value="2"></label></th>
                  <th><label><input type="radio" name="size" value="3"></label></th>
                  <th><label><input type="radio" name="size" value="4"></label></th>
                </tr>
                <tr>
                  <th style="background: #F6F6F6;">5号(170cm)	</th>
                  <th><label><input type="radio" name="size" value="5"></label></th>
                  <th><label><input type="radio" name="size" value="6"></label></th>
                  <th><label><input type="radio" name="size" value="7"></label></th>
                  <th><label><input type="radio" name="size" value="8"></label></th>
                </tr>
                <tr>
                  <th style="background: #F6F6F6;">6号(175cm)</th>
                  <th><label><input type="radio" name="size" value="9"></label></th>
                  <th><label><input type="radio" name="size" value="10"></label></th>
                  <th><label><input type="radio" name="size" value="11"></label></th>
                  <th><label><input type="radio" name="size" value="12"></label></th>
                </tr>
                <tr>
                  <th style="background: #F6F6F6;">7号(180cm)</th>
                  <th><label><input type="radio" name="size" value="13"></label></th>
                  <th><label><input type="radio" name="size" value="14"></label></th>
                  <th><label><input type="radio" name="size" value="15"></label></th>
                  <th><label><input type="radio" name="size" value="16"></label></th>
                </tr>
              </tead>
            </table>
            <div class="text-center pt-5">
              <button class="btn btn-lg btn-info text-center mx-auto" type="submit" style="height:60px;width:150px;">
                <span>確認画面へ</span>
              </button>
              <input type="hidden" name="suit" value="{{$item->id}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
          </form>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="mb-2 pt-5">
          <p class="h6">{{$item->description}}</p>
          <small>{{$item->comment}}</small>
        </div>
        <div class="mb-2 text-center">
          <h6 class="h6 mb-5" style="background-color:#e2e2e2;">サイズ早見表</h6>
          <img src="{{ url('/') }}/img/pages/suitsizebody.jpg" alt=""  class="text-center" style="height:auto; width:90%;">
          <div class="text-left small">
            <p class="mb-0">「身長」と「ウエスト」が分かれば、サイズを選べます。 採寸依頼も受け付けておりますので、ご検討くださいませ。</p>
            <p class="mb-0">例えば：「身長」170㎝　「ウエスト」76㎝  の場合はＹ5をお選びください。</p>
          </div>
          <div class="pt-3 text-center">
            <img src="{{ url('/') }}/img/pages/bodysize.png" alt=""  class="text-center" style="height:auto; width:100%;">
          </div>
          <div class="pt-3 text-left">
            <p class="small mb-0">身長とウエストで想定されるヌードサイズ表（体の寸法）です。あくまでも目安としてご利用ください。スーツの場合は、ヌードサイズ表（体の寸法）と製品の出来上がり寸法（ウエストサイズ）は商品のデザイン（パンツの股上が浅い・深い）により、異なります。他社の商品含め、同じサイズ表示や同じモデルでも着用感や各部位の寸法はそれぞれ異なります。</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pt-5">
  <div class="container">
    <header class="text-center">
      <h4 class="h4 mb-5" style="background-color:#e2e2e2;">メンズスーツ一覧</h4>
    </header>
    <div class="row">
      @foreach($datas as $data)
      <div class="col-6 col-sm-6 col-md-3 mb-5">
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
    <div class="pagination justify-content-center">
      {{$datas->links()}}
    </div>
  </div>
</section>


@endsection

@section('script')
<script>
$(function(){
  $("img.ChangeImage").click(function(){
    var ImgSrc = $(this).attr("src");
    var ImgAlt = $(this).attr("alt");
    $("img#MainImage").attr({src:ImgSrc,alt:ImgAlt});
    $("img#MainImage").hide();
    $("img#MainImage").fadeIn();
    return false;
  });
});
</script>
@endsection
