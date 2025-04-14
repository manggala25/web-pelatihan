<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\KategoriTema;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Carbon::setLocale('id');

        View::composer('components.sidebarfront', function ($view) {
            $kategori_tema = KategoriTema::select('id', 'nama_kategori', 'slug')
                ->withCount(['pelatihan as jumlah'])
                ->get();

            $view->with('kategoriTema', $kategori_tema);
        });
    }
}
