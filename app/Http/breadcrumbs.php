<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('home'));
});

// Home > About
Breadcrumbs::register('about', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('About', route('about'));
});

// Home > Blog
Breadcrumbs::register('blog', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Blog', route('blog'));
});

// Home > Blog > [Category]
Breadcrumbs::register('category', function($breadcrumbs, $category)
{
    $breadcrumbs->parent('blog');
    $breadcrumbs->push($category->title, route('category', $category->id));
});

// Home > Blog > [Category] > [Page]
Breadcrumbs::register('page', function($breadcrumbs, $page)
{
    $breadcrumbs->parent('category', $page->category);
    $breadcrumbs->push($page->title, route('page', $page->id));
});

// Admin
Breadcrumbs::register('admin', function($breadcrumbs)
{
    $breadcrumbs->push('控制面板', route('admin'));
});

// Admin > 订单列表
Breadcrumbs::register('admin.order.index', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('订单列表', route('admin.order.index'));
});

Breadcrumbs::register('admin.order.index', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('订单列表', route('admin.order.index'));
});

Breadcrumbs::register('admin.good.index', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('商品列表', route('admin.good.index'));
});

Breadcrumbs::register('admin.good.create', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.good.index');
    $breadcrumbs->push('添加商品', route('admin.order.create'));
});


Breadcrumbs::register('admin.good.edit', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.good.index');
    $breadcrumbs->push('编辑商品', route('admin.good.edit'));
});

Breadcrumbs::register('admin.user.index', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('用户列表', route('admin.user.index'));
});

Breadcrumbs::register('admin.role.index', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('角色列表', route('admin.role.index'));
});

Breadcrumbs::register('admin.action.index', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('菜单管理', route('admin.action.index'));
});

Breadcrumbs::register('admin.action.create', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.action.index');
    $breadcrumbs->push('添加菜单', route('admin.action.create'));
});

Breadcrumbs::register('admin.action.edit', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.action.index');
    $breadcrumbs->push('编辑菜单', route('admin.action.edit'));
});

Breadcrumbs::register('admin.category.index', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('商品分类', route('admin.category.index'));
});

Breadcrumbs::register('admin.category.create', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.category.index');
    $breadcrumbs->push('商品分类', route('admin.category.create'));
});

Breadcrumbs::register('admin.category.edit', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.category.index');
    $breadcrumbs->push('商品分类', route('admin.category.edit'));
});

Breadcrumbs::register('attr', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.category.index');
    $breadcrumbs->push('商品属性', route('attr'));
});

