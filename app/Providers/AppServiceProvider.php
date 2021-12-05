<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\City;
use App\Models\Content;
use App\Models\Footer;
use App\Models\Kala;
use App\Models\link;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Video;
use App\Models\Videocat;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('client.*',function ($view){
            $view->with([
                'user'=>auth()->user(),
                'categories' => Category::all(),
                'contents' => Content::query()->take('3')->get(),
                'firstcontent' => Content::query()->first(),
                'tags' => Tag::all(),
                'post' => Post::query()->first(),
                'city' => City::query()->first(),
                'videocats' => Videocat::all(),
                'video' => Video::query()->first(),
                'footer1' => Footer::query()->where('id', 1)->firstOrFail(),
                'footer2' => Footer::query()->where('id', 2)->firstOrFail(),
                'instagram' => link::query()->where('title', 'instagram')->firstOrFail(),
                'telegram' => link::query()->where('title', 'telegram')->firstOrFail(),
                'twitter' => link::query()->where('title', 'whatsapp')->firstOrFail(),
                'kalas' => Kala::all(),
            ]);
        });
        view()->composer('client.*',function ($view){
            $view->with([
                'user'=>auth()->user(),
                'categories' => Category::all(),
                'footer1' => Footer::query()->where('id', 1)->firstOrFail(),
                'footer2' => Footer::query()->where('id', 2)->firstOrFail(),
                'instagram' => link::query()->where('title', 'instagram')->firstOrFail(),
                'telegram' => link::query()->where('title', 'telegram')->firstOrFail(),
                'twitter' => link::query()->where('title', 'whatsapp')->firstOrFail(),
            ]);
        });
        view()->composer('Panel.*',function ($view){
            $view->with([
                'user'=>auth()->user()
            ]);
        });
    }
}
