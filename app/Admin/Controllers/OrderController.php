<?php

namespace App\Admin\Controllers;

use App\Order;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\User;
use App\Item;
use App\Inseam;
use App\Hem;
use App\Waist;
use App\Skidproof;
use App\Size;

class OrderController extends AdminController
{
  /**
  * Title for current resource.
  *
  * @var string
  */
  protected $title = 'App\Order';

  /**
  * Make a grid builder.
  *
  * @return Grid
  */
  protected function grid()
  {

    $grid = new Grid(new Order);

    $grid->column('id', __('Id'));
    // $grid->column('user_id', __('User id'));
    $grid->user()->name('名前');
    $grid->column('status', __('Status'));
    // $grid->column('item_id', __('Item id'));
    $grid->item()->name('商品名')->limit(30);
    // $grid->column('inseam_id', __('Inseam id'));
    // $grid->column('hem_id', __('Hem id'));
    // $grid->column('waist_id', __('Waist id'));
    // $grid->column('skidproof_id', __('Skidproof id'));
    // $grid->column('size_id', __('Size id'));
    $grid->inseam()->name('股下');
    $grid->hem()->name('裾');
    $grid->waist()->name('ウエスト');
    $grid->skidproof()->name('滑り止め');
    $grid->size()->size('サイズ');
    $grid->size()->body('体型');
    $grid->column('price', __('Price'));
    $grid->column('created_at', __('Created at'));
    // $grid->column('updated_at', __('Updated at'));

    return $grid;
  }

  /**
  * Make a show builder.
  *
  * @param mixed $id
  * @return Show
  */
  protected function detail($id)
  {
    $users = User::pluck('name', 'id');

    $show = new Show(Order::findOrFail($id));

    $show->field('id', __('Id'));
    $show->field('user_id');
    $show->field('status', __('Status'));
    $show->field('item_id', __('Item id'));
    $show->field('inseam_id', __('Inseam id'));
    $show->field('hem_id', __('Hem id'));
    $show->field('waist_id', __('Waist id'));
    $show->field('skidproof_id', __('Skidproof id'));
    $show->field('size_id', __('Size id'));
    $show->field('price', __('Price'));
    $show->field('created_at', __('Created at'));
    // $show->field('updated_at', __('Updated at'));

    return $show;



  }

  /**
  * Make a form builder.
  *
  * @return Form
  */
  protected function form()
  {
    $users = User::pluck('name', 'id');
    $items = Item::pluck('name', 'id');
    $inseams = Inseam::pluck('name', 'id');
    $hems = Hem::pluck('name', 'id');
    $waists = Waist::pluck('name', 'id');
    $skidproofs = Skidproof::pluck('name', 'id');
    $sizes = Size::orderby('id')->get(['id','size','body']);

    $sizes_id_options = [];
    if ($sizes->isNotEmpty()) {
      $list = $sizes->all();
      foreach ($list as $v) {
        $sizes_id_options[$v->id] = $v->body.'/'.$v->size;
      }
    }

    $form = new Form(new Order);

    $form->select('user')->options($users);
    $form->select('status', __('Status'))->options(['purchase'=>'purchase','request'=>'request']);
    $form->select('item')->options($items);
    $form->select('inseam')->options($inseams);
    $form->select('hem')->options($hems);
    $form->select('waist')->options($waists);
    $form->select('skidproof')->options($skidproofs);
    // $form->select('sizes_id_options','size')->options($sizes_id_options);
    // $form->number('price', __('Price'));

    return $form;
  }
}
