<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getSlasticas(Request $request) {

        $slasticas = [
            'slastica1' , 'slastica2'
        ];
    }

}
