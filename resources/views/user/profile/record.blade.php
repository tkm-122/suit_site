@extends('layouts.sub_layout')
@section('title', 'record')
@section('content')
<section class="">
  <div class="container py-5">
    <div class="row ">
      <div class="col-12 text-center align-center">
        <h4 class="">ご注文商品の履歴をご確認いただけます。</h4>
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
              <th scope="col" class="text-nowrap">ステータス</th>
              <th scope="col" colspan="2" class="text-nowrap">商品名</th>
              <th scope="col" class="text-nowrap">単価</th>
              <th scope="col" class="text-nowrap">小計</th>
            </tr>
          </thead>
          @foreach($orders as $order)
          <tbody class="small pb-0">
            <tr>
              <td class="table-secondary text-nowrap text-center align-middle" rowspan="4">
                @if ($order->status === 'purchase')
                <span class="">依頼内容</span><br>
                <span class="h6">購入</span>
                @else
                <span class="">依頼内容</span><br>
                <span class="h6">採寸</span>
                @endif
              </td>
            </tr>

            <tr>
              <td class="" rowspan="7">
                <a href="{{ url('select/'.$order->item->id) }}" ><img src="{{ url('/') }}/{{$order->item->image_top}}"  width="60" border="0"></a>&nbsp;
              </td>
              <td class="">
                <a href="{{ url('select/'.$order->item->id) }}" class="">{{$order->item->name}}</a>
                <br><span>（ {{$order->size->body}} / {{$order->size->size}}）</span>
              </td>
              <td class="text-nowrap text-center align-middle">
                <span class="">￥{{number_format(($order->item->price)*1.08)}}</span><br><span class="">(税￥{{number_format(($order->item->price)*0.08)}})</span>
              </td>
              <td class="text-nowrap text-center align-middle" rowspan="7">
                <span class="">￥{{number_format((($order->price)*1.08))}}</span><br><span class="">(税￥{{number_format(($order->price)*0.08)}})</span>
              </td>
            </tr>


            <tr class="text-nowrap">
              <td class="">
                <span class="">└ </span>股下サイズ直し（無料）：{{$order->inseam->name}}
              </td>
              <td class="text-center">
                @if($order->inseam->price == 0)
                <span class="">-</span>
                @else
                <span class="">+￥{{number_format(($order->inseam->price)*1.08)}}</span><span class="">(税￥{{number_format(($order->inseam->price)*0.08)}})</span>
                @endif
              </td>
            </tr>

            <tr class="text-nowrap">
              <td class="">
                <span class="">└ </span>裾デザイン指定（無料）：{{$order->hem->name}}
              </td>
              <td class="text-center">
                @if($order->hem->price == 0)
                <span class="">-</span>
                @else
                <span class="">+￥{{number_format(($order->hem->price)*1.08)}}</span><span class="">(税￥{{number_format(($order->hem->price)*0.08)}})</span>
                @endif
              </td>
            </tr>

            <tr>
              <td class="text-nowrap text-center align-middle" rowspan="4">
                <span class="">依頼日</span><br>
                <span> {{date('Y年m月d日',  strtotime($order->created_at))}}</span>
              </td>
            </tr>

            <tr class="text-nowrap">
              <td class="">
                <span class="">└ </span>ウエスト直し(1,200円 + 税)：{{$order->waist->name}}
              </td>
              <td class="text-center">
                @if($order->waist->price == 0)
                <span class="">-</span>
                @else
                <span class="">+￥{{number_format(($order->waist->price)*1.08)}}</span><span class="">(税￥{{number_format(($order->waist->price)*0.08)}})</span>
                @endif
              </td>
            </tr>

            <tr class="text-nowrap">
              <td class="">
                <span class="">└ </span>スベリ止め加工(700円 + 税)：{{$order->skidproof->name}}
              </td>
              <td class="text-center">
                @if($order->skidproof->price == 0)
                <span class="">-</span>
                @else
                <span class="">+￥{{number_format(($order->skidproof->price)*1.08)}}</span><span class="">(税￥{{number_format(($order->skidproof->price)*0.08)}})</span>
                @endif
              </td>
            </tr>
            <tr class="text-nowrap">
              @if ($order->status === 'purchase')
              <td class="">
                <span class="">インターネットでのご注文 </span>
              </td>
              <td class="text-center">
                <span class="">-￥{{number_format(10000)}}</span><span class="small pb-0">(税抜き)</span>
              </td>
              @else
              <td class="">
                <span class="">-</span>
              </td>
              <td class="text-center">
                <span class="">-</span>
              </td>
              @endif
            </tr>

          </tbody>
          @endforeach
        </table>
        <div class="pagination justify-content-center">
          {{$orders->links()}}
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
