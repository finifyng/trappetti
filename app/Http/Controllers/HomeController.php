<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   //
   public function index(){
    return view('home.index');
    }

    public function about(){
        return view('home.about');
    }

    public function services(){
        return view('home.services');
    }

    public function industries(){
        return view('home.industries');
    }

    public function partnerships(){
        return view('home.partnerships');
    }

    public function sustainability(){
        return view('home.sustainability');
    }

    public function downloads(){
        // Drop the PDF into public/homeassets/docs/ and the card becomes a live download link.
        // Kept out of public/downloads/ so the directory does not shadow the /downloads route.
        $profilePath = 'homeassets/docs/trappetti-company-profile.pdf';

        return view('home.downloads', [
            'profilePath'      => $profilePath,
            'profileAvailable' => file_exists(public_path($profilePath)),
        ]);
    }

    public function contact(){
        return view('home.contact');
    }

}
