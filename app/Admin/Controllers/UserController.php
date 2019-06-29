<?php

namespace App\Admin\Controllers;

use App\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\User';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User);

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        // $grid->column('password', __('Password'));
        // $grid->column('remember_token', __('Remember token'));
        $grid->column('age', __('Age'));
        $grid->column('tel', __('Tel'));
        $grid->column('zip01', __('郵便番号'));
        $grid->column('pref01', __('都道府県'));
        $grid->column('addr01', __('住所'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        // $show->field('password', __('Password'));
        // $show->field('remember_token', __('Remember token'));
        $show->field('age', __('Age'));
        $show->field('tel', __('Tel'));
        $show->field('zip01', __('郵便番号'));
        $show->field('pref01', __('都道府県'));
        $show->field('addr01', __('住所'));
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
        $form = new Form(new User);

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        // $form->password('password', __('Password'));
        // $form->text('remember_token', __('Remember token'));
        $form->select('age', __('Age'))->options(['20歳未満'=>'20歳未満','20~29歳'=>'20~29歳','30~39歳'=>'30~39歳','40~49歳'=>'40~49歳','50歳以上'=>'50歳以上']);
        $form->number('tel', __('Tel'));
        $form->number('zip01', __('郵便番号'));
        $form->text('pref01', __('都道府県'));
        $form->text('addr01', __('住所'));

        return $form;
    }
}
