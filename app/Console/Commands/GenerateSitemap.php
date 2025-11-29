<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Product;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap';

    public function handle()
    {
        $sitemap = Sitemap::create();

        // الصفحة الرئيسية
        $sitemap->add(Url::create(route('web_index')));

        // الخدمات
        Service::all()->each(function ($service) use ($sitemap) {
            $sitemap->add(
                Url::create(route('web_service', $service->slug))
            );
        });

        // المدونة
        Blog::all()->each(function ($blog) use ($sitemap) {
            $sitemap->add(
                Url::create(route('web_blog', $blog->slug))
            );
        });

        // المنتجات (لو عندك)
        Product::all()->each(function ($product) use ($sitemap) {
            $sitemap->add(
                Url::create(route('web_product', $product->slug))
            );
        });

        // حفظ السايت ماب
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap Generated Successfully ❤️');
    }
}
