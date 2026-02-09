<?php

namespace App\Providers;

use App\Models\Akadem;
use App\Models\Berita;
use App\Models\KalenderAkademik;
use App\Models\Kemahasiswaan;
use App\Models\SinopsisMatkul;
use App\Models\Tentang;
use App\Models\Unduhan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['admin.layouts.sidebar', 'frontend.layouts.header', 'frontend.layouts.footer'], function ($view) {
            $view->with([
                'tentangSubmenu' => Tentang::all(),
                'akademikSubmenu' => Akadem::all(),
                'beritaSubmenu' => Berita::all(),
                'kemahasiswaanSubmenu' => Kemahasiswaan::all(),
                'unduhanSubmenu' => Unduhan::all(),

                'distribusiMatkul' => SinopsisMatkul::first(),
                'kalenderAkademik' => KalenderAkademik::first(),

                'visitors' => DB::table('visitors')
                    ->select('country', 'country_code', DB::raw('count(*) as total'))
                    ->groupBy('country', 'country_code')
                    ->orderByDesc('total')
                    ->get(),
            ]);
        });
    }
}
