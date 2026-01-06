<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Gallery;
use App\Models\CompanySetting;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home', [
            // 1 BERITA UTAMA
            'homeFeaturedNews' => News::latest()->first(),

            // 4 BERITA KANAN
            'homeLatestNews' => News::latest()->skip(1)->take(4)->get(),

            // GALERI HOME (6 FOTO)
            'homeGalleries' => Gallery::latest()->take(6)->get(),
        ]);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function news()
{
    return view('pages.news', [
        // 1 berita utama
        'featuredNews' => News::latest()->first(),

        // list berita (seluruh / paginate)
        'newsPageNews' => News::latest()->skip(1)->paginate(6),
    ]);
}
public function show($slug)
{
    $news = News::where('slug', $slug)->firstOrFail();
    return view('news.show', compact('news'));
}

    public function gallery()
{
    return view('pages.gallery', [
        'galleries' => Gallery::latest()->paginate(20),
    ]);
}

    public function contact()
{
    return view('pages.contact', [
        'mapQuery' => CompanySetting::value('map_query') ?? 'Bandung'
    ]);
}

}
