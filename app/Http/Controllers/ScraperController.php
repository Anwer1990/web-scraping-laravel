<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class ScraperController extends Controller
{
    public function get_data()
    {
        $client = new Client();
        $page = $client->request('GET','http://www.ordre-medecins.org.tn/fr/public/annuaire-medecins');
        // echo '<pre>';
        // print_r($page);
        $doc_name = $page->filter('tr > td')->each(function($name){
            echo $name->text().' <br/>';
        });
        // echo $doc_name;
    }
}
