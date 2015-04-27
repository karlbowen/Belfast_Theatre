<?php


Route::get('/', function()
{
	return View::make('home');
});

Route::get('about', function()
{
	return View::make('about');
});

Route::get('contact', function()
{
	return View::make('contact');
});

Route::get('login', function()
{
	return View::make('login');
});