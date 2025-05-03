<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Search;
use App\Livewire\CategoryEvents;
use App\Livewire\Events ;
use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\CreateEvent;
use App\Livewire\Event;

Route::get('/', Home::class)->name('home');
Route::get('/search', Search::class)->name('search');
Route::get('/category/{categoryId}', CategoryEvents::class)->name('category');
Route::get('/events',Events::class)->name('events');
Route::get('/create_event', CreateEvent::class)->name('create_event');;
Route::get('/about', About::class)->name('about');
Route::get('/contact',Contact::class)->name('contact');

Route::get('/event/{id}',Event::class)->name('event');
