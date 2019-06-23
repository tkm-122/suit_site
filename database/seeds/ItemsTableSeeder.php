<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $table = new \App\Item([
      'name'=> '【CLASSICO TAPERED】2釦シングルスーツ 1タック/ネイビー＆ブラック×グレンチックオーバーペン/super120s CANONICO fabric made in italy',
      'code'=> 'SQULABOcode01',
      'image_top' =>'img/product/items/item1/top.jpg',
      'image_cloth' =>'img/product/items/item1/cloth.jpg',
      'image_sub1' =>'img/product/items/item1/sub1.jpg',
      'image_sub2' =>'img/product/items/item1/sub2.jpg',
      'image_sub3' =>'img/product/items/item1/sub3.jpg',
      'image_sub4' =>'img/product/items/item1/sub4.jpg',
      'image_sub5' =>'img/product/items/item1/sub5.jpg',
      'image_sub6' =>'img/product/items/item1/sub6.jpg',
      'description'=>'（商品特徴）素材（表地）ウール100%/（裏地）ポリエステル100%/（袖裏）キュプラ100%・サイドベンツ・【着用シーズン：春夏】',
      'comment'=>'2釦シングル1タックパンツスーツです。1663年創業、イタリアCANONICO（カノニコ）の生地を使いました。「CLASSICO TAPERED」は、（1）ベーシックラペル、フルピックステッチ。（2）肩を内側に入れノーパットでつくるAラインシルエット。（3）表地だけで袖付けしたマニカマッピーナ。（4）二の腕から袖口にかけて細くなるテーパードアーム。（5）芯地を省いたアンコン仕立て。（6）チビプリーツの1タックスリムで膝から裾口にかけて細くなるテーパードパンツ。SILVER LINEは、ウール本来の風合い、柔らかさがありシワ回復性が高い丈夫な素材を用いて、丁寧な仕立てで縫製致しました。エレガント・曲線・コンフォートをキーワードに全体の美しいシルエットに仕立てながら着やすさを追求しました。スーツセレクトは生産からデザイン、流通まで徹底し高品質なスーツを明快な価格設定とバリエーションから選ぶ事が出来ます。',
      'price'=> 48000 ,
    ]);
    $table->save();

    $table = new \App\Item([
      'name'=> '【CLASSICO TAPERED】2釦シングルスーツ 1タック/ブラウン/CANONICO fabric made in italy',
      'code'=> 'SQULABOcode02',
      'image_top' =>'img/product/items/item2/top.jpg',
      'image_cloth' =>'img/product/items/item2/cloth.jpg',
      'image_sub1' =>'img/product/items/item2/sub1.jpg',
      'image_sub2' =>'img/product/items/item2/sub2.jpg',
      'image_sub3' =>'img/product/items/item2/sub3.jpg',
      'image_sub4' =>'img/product/items/item2/sub4.jpg',
      'image_sub5' =>'img/product/items/item2/sub5.jpg',
      'image_sub6' =>'img/product/items/item2/sub6.jpg',
      'description'=>'（商品特徴）素材（表地）ウール100%/（裏地）ポリエステル100%/（袖裏）キュプラ100%・サイドベンツ・【着用シーズン：春夏】',
      'comment'=>'2釦シングル1タックパンツスーツです。1663年創業、イタリアCANONICO（カノニコ）の生地を使いました。「CLASSICO TAPERED」は、（1）ベーシックラペル、フルピックステッチ。（2）肩を内側に入れノーパットでつくるAラインシルエット。（3）表地だけで袖付けしたマニカマッピーナ。（4）二の腕から袖口にかけて細くなるテーパードアーム。（5）芯地を省いたアンコン仕立て。（6）チビプリーツの1タックスリムで膝から裾口にかけて細くなるテーパードパンツ。SILVER LINEは、ウール本来の風合い、柔らかさがありシワ回復性が高い丈夫な素材を用いて、丁寧な仕立てで縫製致しました。エレガント・曲線・コンフォートをキーワードに全体の美しいシルエットに仕立てながら着やすさを追求しました。スーツセレクトは生産からデザイン、流通まで徹底し高品質なスーツを明快な価格設定とバリエーションから選ぶ事が出来ます。 ',
      'price'=> 58000 ,
    ]);
    $table->save();

    $table = new \App\Item([
      'name'=> '【CLASSICO TAPERED】6釦2掛けダブルスーツ 1タック/ブラウン×チェック/MARZOTTO',
      'code'=> 'SQULABOcode03',
      'image_top' =>'img/product/items/item3/top.jpg',
      'image_cloth' =>'img/product/items/item3/cloth.jpg',
      'image_sub1' =>'img/product/items/item3/sub1.jpg',
      'image_sub2' =>'img/product/items/item3/sub2.jpg',
      'image_sub3' =>'img/product/items/item3/sub3.jpg',
      'image_sub4' =>'img/product/items/item3/sub4.jpg',
      'image_sub5' =>'img/product/items/item3/sub5.jpg',
      'image_sub6' =>'img/product/items/item3/sub6.jpg',
      'description'=>'（商品特徴）約10cmラペル・素材（表地）ウール100%/（裏地）ポリエステル100%/（袖裏）キュプラ100%・サイドベンツ・【着用シーズン：春夏】',
      'comment'=>'6釦2掛けダブル1タックパンツスーツです。イタリア「MARZOTTO」の生地を使いました。「CLASSICO TAPERED」は、（1）ベーシックラペル、フルピックステッチ。（2）肩を内側に入れノーパットでつくるAラインシルエット。（3）表地だけで袖付けしたマニカマッピーナ。（4）二の腕から袖口にかけて細くなるテーパードアーム。（5）芯地を省いたアンコン仕立て。（6）チビプリーツの1タックスリムで膝から裾口にかけて細くなるテーパードパンツ。SILVER LINEは、ウール本来の風合い、柔らかさがありシワ回復性が高い丈夫な素材を用いて、丁寧な仕立てで縫製致しました。エレガント・曲線・コンフォートをキーワードに全体の美しいシルエットに仕立てながら着やすさを追求しました。スーツセレクトは生産からデザイン、流通まで徹底し高品質なスーツを明快な価格設定とバリエーションから選ぶ事が出来ます。',
      'price'=> 38000 ,
    ]);
    $table->save();

    $table = new \App\Item([
      'name'=> '【CLASSICO TAPERED】2釦シングルスーツ 1タック/グレー＆ブラック×グレンチックオーバーペン/super120s CANONICO fabric made in italy',
      'code'=> 'SQULABOcode04',
      'image_top' =>'img/product/items/item4/top.jpg',
      'image_cloth' =>'img/product/items/item4/cloth.jpg',
      'image_sub1' =>'img/product/items/item4/sub1.jpg',
      'image_sub2' =>'img/product/items/item4/sub2.jpg',
      'image_sub3' =>'img/product/items/item4/sub3.jpg',
      'image_sub4' =>'img/product/items/item4/sub4.jpg',
      'image_sub5' =>'img/product/items/item4/sub5.jpg',
      'image_sub6' =>'img/product/items/item4/sub6.jpg',
      'description'=>'（商品特徴）素材（表地）ウール100%/（裏地）ポリエステル100%/（袖裏）キュプラ100%・サイドベンツ・【着用シーズン：春夏】',
      'comment'=>'2釦シングル1タックパンツスーツです。1663年創業、イタリアCANONICO（カノニコ）の生地を使いました。「CLASSICO TAPERED」は、（1）ベーシックラペル、フルピックステッチ。（2）肩を内側に入れノーパットでつくるAラインシルエット。（3）表地だけで袖付けしたマニカマッピーナ。（4）二の腕から袖口にかけて細くなるテーパードアーム。（5）芯地を省いたアンコン仕立て。（6）チビプリーツの1タックスリムで膝から裾口にかけて細くなるテーパードパンツ。SILVER LINEは、ウール本来の風合い、柔らかさがありシワ回復性が高い丈夫な素材を用いて、丁寧な仕立てで縫製致しました。エレガント・曲線・コンフォートをキーワードに全体の美しいシルエットに仕立てながら着やすさを追求しました。スーツセレクトは生産からデザイン、流通まで徹底し高品質なスーツを明快な価格設定とバリエーションから選ぶ事が出来ます。',
      'price'=> 68000 ,
    ]);
    $table->save();
  }
}
