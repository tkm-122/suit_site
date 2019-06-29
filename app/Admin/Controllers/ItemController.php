<?php

namespace App\Admin\Controllers;

use App\Item;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ItemController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Item';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Item);

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'))->limit(30);
        $grid->column('code', __('商品番号'));
        // $grid->column('image_top', __('トップ画像'));
        // $grid->column('image_cloth', __('生地'));
        // $grid->column('image_sub1', __('Image sub1'));
        // $grid->column('image_sub2', __('Image sub2'));
        // $grid->column('image_sub3', __('Image sub3'));
        // $grid->column('image_sub4', __('Image sub4'));
        // $grid->column('image_sub5', __('Image sub5'));
        // $grid->column('image_sub6', __('Image sub6'));
        $grid->column('description', __('特徴'))->limit(15);
        $grid->column('comment', __('説明'))->limit(15);
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
        $show = new Show(Item::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('code', __('Code'));
        // $show->field('image_top', __('Image top'));
        // $show->field('image_cloth', __('Image cloth'));
        // $show->field('image_sub1', __('Image sub1'));
        // $show->field('image_sub2', __('Image sub2'));
        // $show->field('image_sub3', __('Image sub3'));
        // $show->field('image_sub4', __('Image sub4'));
        // $show->field('image_sub5', __('Image sub5'));
        // $show->field('image_sub6', __('Image sub6'));
        $show->field('description', __('Description'));
        $show->field('comment', __('Comment'));
        $show->field('price', __('Price'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Item);

        $form->text('name', __('Name'));
        $form->text('code', __('Code'));
        $form->text('image_top', __('Image top'));
        $form->text('image_cloth', __('Image cloth'));
        $form->text('image_sub1', __('Image sub1'));
        $form->text('image_sub2', __('Image sub2'));
        $form->text('image_sub3', __('Image sub3'));
        $form->text('image_sub4', __('Image sub4'));
        $form->text('image_sub5', __('Image sub5'));
        $form->text('image_sub6', __('Image sub6'));
        $form->textarea('description', __('Description'));
        $form->textarea('comment', __('Comment'));
        $form->number('price', __('Price'));

        return $form;
    }
}
