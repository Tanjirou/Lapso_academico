<?php

//home

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

Breadcrumbs::for('sections', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Secciones', route('teacher.assigned_sections'));
});


//estudiante

//profesor

//administrador

