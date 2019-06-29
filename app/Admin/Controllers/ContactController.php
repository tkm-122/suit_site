<?php

namespace App\Admin\Controllers;

use App\Contact;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ContactController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Contact';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Contact);

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('subject', __('項目'));
        $grid->column('tel', __('Tel'));
        $grid->column('message', __('Message'))->limit(10);
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
        $show = new Show(Contact::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('subject', __('Subject'));
        $show->field('tel', __('Tel'));
        $show->field('message', __('Message'));
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
        $form = new Form(new Contact);

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->select('subject', __('Subject'))->options(['コラム記事について'=>'コラム記事について','広告掲載について'=>'広告掲載について','福利厚生について'=>'福利厚生について','オーダースーツ（商品）について'=>'オーダースーツ（商品）について','その他'=>'その他']);
        $form->mobile('tel', __('Tel'));
        $form->textarea('message', __('Message'));

        return $form;
    }
}
