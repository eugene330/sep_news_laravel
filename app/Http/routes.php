<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\News;

Route::get('/', function () {
    return view('index');
});

Route::group(['prefix' => 'news'], function () {

    /**
     * Вывести панель с новостями
     */
    Route::get('/', function () {
        $news = \App\News::all();
        return view('news.list', ['news' => $news]);
    })->name('news.list');

    /**
     * Добавить новую задачу
     */
    Route::get('/create', function () {
        return view('news.create');
    })->name('news.create');

    Route::post('/', function (\Illuminate\Http\Request $request) {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            return redirect(route('news.create'))
                ->withInput()
                ->withErrors($validator);
        }
        \App\News::create([
            'title' => $request->title,
            'text' => $request->text
        ]);
        return redirect(route('news.list'));
    })->name('news.store');

    Route::get('/{news}', function (News $news) {
        return view('news.show', ['news' => $news]);
    })->name('news.show');


});
