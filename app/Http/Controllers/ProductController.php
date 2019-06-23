<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getCloth()
    {
      $items = \App\Uploader::orderBy('created_at', 'desc')->paginate(6);

      return view('product.cloth',[
        "items" => $items
      ]);

    }

    public function getDesign()
    {
      return view('product.design');
    }

    public function postDesign(Request $request)
    {

      $item = \App\Uploader::get()->where('cloth_id', $request->cloth_id)->first();

      $suits = \App\Suit::all();
      $linings = \App\Lining::all();
      $buttons = \App\Button::all();

      return view('product.design',[
        "item" => $item,
        "suits" => $suits,
        "linings" => $linings,
        "buttons" => $buttons,
      ]);
    }

    public function postConfirm(Request $request)
    {
      $cloth = \App\Uploader::get()->where('cloth_id', $request->cloth_id)->first();
      $suit = \App\Suit::get()->where('suit_id', $request->suit)->first();
      $lining = \App\Lining::get()->where('lining_id', $request->lining)->first();
      $button = \App\Button::get()->where('button_id', $request->button)->first();

      $totalprice = 0;
      $totalprice += $cloth->price;
      $totalprice += $suit->price;
      $totalprice += $lining->price;
      $totalprice += $button->price;

      return view('product.confirm',[
        "cloth" => $cloth,
        "suit" => $suit,
        "lining" => $lining,
        "button" => $button,
        "price" => $totalprice,
      ]);
    }
}
