<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Arr;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        $post = Arr::where(
            Http::get('http://127.0.0.1:8000/api/listposts')['data'],
            function ($val, $key) {
                return $val["category"] == "About Us";
            }
        );
        return view('pages.about')->with('post', $post);
    }

    public function contact()
    {

        return view('pages.contact-2');
    }

    public function portfolioIOT()
    {
        $post = Arr::where(
            Http::get('http://127.0.0.1:8000/api/listposts')['data'],
            function ($val, $key) {
                return $val["category"] == "Portfolio Security System Supply and Installation";
            }
        );
        return view('pages.portfolio-IOT')->with('post', $post);
    }

    public function portfoliomobileapp()
    {
        $post = Arr::where(
            Http::get('http://127.0.0.1:8000/api/listposts')['data'],
            function ($val, $key) {
                return $val["category"] == "Portfolio Mobile App Development";
            }
        );

        return view('pages.portfolio-mobile-app')->with('post', $post);
    }

    public function portfolioWebsite()
    {
        $post = Arr::where(
            Http::get('http://127.0.0.1:8000/api/listposts')['data'],
            function ($val, $key) {
                return $val["category"] == "Portfolio Website Development";
            }
        );

        return view('pages.portfolio-Website')->with('post', $post);
    }

    public function serviceApp()
    {
        $post = Arr::where(
            Http::get('http://127.0.0.1:8000/api/listposts')['data'],
            function ($val, $key) {
                return $val["category"] == "Services Mobile App Development";
            }
        );

        return view('pages.service-app')->with('post', $post);
    }

    public function serviceDemoDigitalSeo()
    {
        $post = Arr::where(
            Http::get('http://127.0.0.1:8000/api/listposts')['data'],
            function ($val, $key) {
                return $val["category"] == "Service Digital Marketing and SEO";
            }
        );

        return view('pages.service-demo-digital-seo')->with('post', $post);
    }

    public function serviceErpIot()
    {
        $post = Arr::where(
            Http::get('http://127.0.0.1:8000/api/listposts')['data'],
            function ($val, $key) {
                return $val["category"] == "Services Hardware & Security";
            }
        );

        return view('pages.service-erp-iot')->with('post', $post);
    }

    public function serviceErp()
    {
        $post = Arr::where(
            Http::get('http://127.0.0.1:8000/api/listposts')['data'],
            function ($val, $key) {
                return $val["category"] == "Service Enterprise System Development";
            }
        );

        return view('pages.service-erp')->with('post', $post);
    }

    public function serviceWeb()
    {
        $post = Arr::where(
            Http::get('http://127.0.0.1:8000/api/listposts')['data'],
            function ($val, $key) {
                return $val["category"] == "Services Website Development";
            }
        );

        return view('pages.service-web')->with('post', $post);
    }
}
