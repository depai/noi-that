<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Spatie\Sitemap\Sitemap;
use Illuminate\Http\Request;
use Spatie\Sitemap\Tags\Url;
use Carbon\Carbon;


class SitemapController extends Controller
{
    //
    // public function index(Request $request)
    // {
    //     $sitemap = Sitemap::create();
    //     $sitemap->add(Url::create('/')
    //         ->setLastModificationDate($yesterday)
    //         ->setPriority(1));

    //     return $sitemap->render();
    // }
}
