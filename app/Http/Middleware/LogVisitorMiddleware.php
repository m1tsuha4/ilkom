<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Stevebauman\Location\Facades\Location;
use Symfony\Component\HttpFoundation\Response;

class LogVisitorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $ip = $request->ip();
        // $ip = env('APP_ENV') === 'local' ? '36.73.88.3' : $request->ip();

        // API untuk mendapatkan informasi lokasi berdasarkan IP
        $geoData = Http::get("http://ip-api.com/json/{$ip}")->json();

        $country = $geoData['country'] ?? '?';
        $countryCode = $geoData['countryCode'] ?? '?';
        $city = $geoData['city'] ?? '?';

        // Simpan atau perbarui data di tabel
        DB::table('visitors')->updateOrInsert(
            ['ip' => $ip],
            [
                'country' => $country,
                'country_code' => strtolower($countryCode),
                'city' => $city,
                'updated_at' => now(), // Perbarui waktu terakhir kunjungan
                'created_at' => DB::raw('IFNULL(created_at, NOW())') // Tetap gunakan created_at yang lama jika sudah ada
            ]
        );

        return $next($request);
    }
}
