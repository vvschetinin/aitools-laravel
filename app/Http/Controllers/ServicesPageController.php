<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesPageController extends Controller
{
  public function show($page)
  {
    // Защита от несуществующих страниц
    $allowedPages = ['content', 'aibots', 'mailmarket', 'castom'];

    if (!in_array($page, $allowedPages)) {
      abort(404);
    }
    // Передаем название страницы в вьюху, если нужно
    return view("pages.services.{$page}", compact('page'));
  }
}