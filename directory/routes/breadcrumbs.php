<?php // routes/breadcrumbs.php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('admin.dashboard'));
});

// Home > Dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Dashboard', route('admin.dashboard'));
});

// Home > Dashboard > Location
Breadcrumbs::for('location.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Location', route('location.divisions.index'));
});

// Home > Dashboard > Location > Division
Breadcrumbs::for('location.divisions.index', function (BreadcrumbTrail $trail) {
    $trail->parent('location.index');
    $trail->push('Division', route('location.divisions.index'));
});
