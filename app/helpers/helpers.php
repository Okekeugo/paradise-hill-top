<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;

function presentRouteName()
{
  $routeName = Route::currentRouteName();

  if (Str::contains($routeName, '.show', true)) {
    return $newString =  Str::replace('.show', ' Details', $routeName, false);
  }
  return $routeName;
}
