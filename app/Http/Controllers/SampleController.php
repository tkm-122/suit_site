<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreatePost;

use Illuminate\Support\Facades\Mail;
use App\Mail\SampleNotification;

class SampleController extends Controller
{
  public function SampleNotification()
  {
    $name = 'ララベル太郎';
    $text = 'これからもよろしくお願いいたします。';
    $to = 'sanko.agu@gmail.com';
    $cc = 'tkm.m122@gmail.com';

    return Mail::to($to)
            ->cc($cc)
            ->send(new SampleNotification($name, $text));
  }
}
