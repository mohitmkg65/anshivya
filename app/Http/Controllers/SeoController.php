<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SeoController extends Controller
{
    public function sitemap(): Response
    {
        $baseUrl = config('app.url', 'https://anshivya.com');
        $routes = [
            '/',
            '/about',
            '/services/recruitment',
            '/services/payroll',
            '/services/compliance',
            '/services/hr-consulting',
            '/services/employee-relations',
            '/industries',
            '/jobs',
            '/contact',
            '/privacy',
            '/terms',
        ];

        $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
        $xml .= '<urlset xmlns="http://www.sitemap.org/schemas/sitemap/0.9">'."\n";

        foreach ($routes as $route) {
            $xml .= '  <url>'."\n";
            $xml .= '    <loc>'.htmlspecialchars($baseUrl.$route).'</loc>'."\n";
            $xml .= '    <lastmod>'.date('Y-m-d').'</lastmod>'."\n";
            $xml .= '    <changefreq>weekly</changefreq>'."\n";
            $xml .= '    <priority>'.($route === '/' ? '1.0' : '0.8').'</priority>'."\n";
            $xml .= '  </url>'."\n";
        }

        $xml .= '</urlset>';

        return response($xml, 200, [
            'Content-Type' => 'application/xml',
        ]);
    }

    public function robots(): Response
    {
        $baseUrl = config('app.url', 'https://anshivya.com');

        $content = "User-agent: *\n";
        $content .= "Allow: /\n\n";
        $content .= 'Sitemap: '.$baseUrl."/sitemap.xml\n";

        return response($content, 200, [
            'Content-Type' => 'text/plain',
        ]);
    }
}
