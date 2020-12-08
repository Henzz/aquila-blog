<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Arr;

class DashboardController extends Controller
{
	public function dashboard(){
        $post = Arr::where(Http::get('http://127.0.0.1:8000/api/listposts')['data'],
            function($val, $key){
            return $val["category"] == "Services Website Development";
        });
        return view('posts')->with('post',$post);
    }

    public function index(){

        return view('pages.index');
    }

    public function about(){

    	return view('pages.about');
    }

    public function contact(){

    	return view('pages.contact-2');
    }

    public function portfolioIOT(){

        return view('pages.portfolio-IOT');
    }

    public function portfoliomobileapp(){

        return view('pages.portfolio-mobile-app');
    }

    public function portfolioWebsite(){

        return view('pages.portfolio-Website');
    }

    public function serviceApp(){

        return view('pages.service-app');
    }

    public function serviceDemoDigitalSeo(){

        return view('pages.service-demo-digital-seo');
    }

    public function serviceErpIot(){
        $post = Arr::where(Http::get('http://127.0.0.1:8000/api/listposts')['data'],
            function($val, $key){
            return $val["category"] == "Services Website Development";
        });

        return view('pages.service-erp-iot');
    }

    public function serviceErp(){
        $post = Arr::where(Http::get('http://127.0.0.1:8000/api/listposts')['data'],
            function($val, $key){
            return $val["category"] == "Services Website Development";
        });

        return view('pages.service-erp');
    }

    public function serviceWeb(){
        $post = Arr::where(Http::get('http://127.0.0.1:8000/api/listposts')['data'],
            function($val, $key){
            return $val["category"] == "Services Website Development";
        });

        return view('pages.service-web')->with('post',$post);
    }


}
