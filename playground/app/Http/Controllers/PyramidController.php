<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PyramidController extends Controller
{
    public function display($count = null)
    {
        $result = "";

        for ($x = 1; $x <= $count; $x++) {
            for ($y = 1; $y <= $x; $y++) {
                $result = $result . "* ";
            }
            $result = $result . "<br>";
        }

        // for ($x = 1; $x <= $count; $x++) {
        //     $result = $result . str_repeat("* ", $x) . "\n";
        // }

        return view('pyramid', ['data' => $result]);
    }
}
