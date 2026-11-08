<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     * Auto-detect device/browser language on first visit, or use session choice.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 1. If user previously selected a language, honor the session choice
        if (session()->has('locale')) {
            $locale = session('locale');
        } else {
            // 2. First visit: Auto-detect from browser Accept-Language header
            $preferred = $request->getPreferredLanguage(['tr', 'ar']);
            $acceptLang = strtolower((string) $request->header('Accept-Language', ''));

            if ($preferred === 'ar' || str_starts_with($acceptLang, 'ar') || str_contains($acceptLang, 'ar-') || str_contains($acceptLang, 'ar_')) {
                $locale = 'ar';
            } else {
                $locale = 'tr';
            }

            // Save detected locale into session
            session(['locale' => $locale]);
        }

        // Safety fallback
        if (!in_array($locale, ['tr', 'ar'], true)) {
            $locale = 'tr';
        }

        app()->setLocale($locale);

        return $next($request);
    }
}
