<?php

namespace App\Http\Controllers;

use App\Models\License;
use App\Models\Management;
use App\Models\OurHistory;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){

        $data['ourhistories'] = OurHistory::get();
        $data['managements'] = Management::get();
        $data['licenses'] = License::get();
        return view('about' ,$data);
    }
}
