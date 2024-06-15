<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\JsonLdMulti;
use Artesaos\SEOTools\Facades\SEOTools;

class SEOToolsController extends Controller
{
    public function index()
    {
        SEOMeta::setTitle('Home');
        SEOMeta::setDescription('This is my page descriptionzzz');
        SEOMeta::setCanonical('https://magencymyanmar.com');

        // OpenGraph::setDescription('This is my page description');
        // OpenGraph::setTitle('Home');
        // OpenGraph::setUrl('http://current.url.com');
        // OpenGraph::addProperty('type', 'articles');

        // TwitterCard::setTitle('Homepage');
        // TwitterCard::setSite('@LuizVinicius73');

        // JsonLd::setTitle('Homepage');
        // JsonLd::setDescription('This is my page description');
        // JsonLd::addImage('https://codecasts.com.br/img/logo.jpg');

        // OR

        SEOTools::setTitle('Home');
        SEOTools::setDescription('This is my page descriptionzzzf asdf asdf');
        SEOTools::opengraph()->setUrl('https://www.magencymyanmar.com/');
        SEOTools::setCanonical('https://codecasts.com.br/lesson');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');


        return view('seoTools');
    }
}
