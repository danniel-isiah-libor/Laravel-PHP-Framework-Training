<?php

namespace App\Http\Controllers;

use App\Models\Pyramid;

class PyramidController extends Controller
{
    public function createPyramid($num = null)
    {
        $pyramid = new Pyramid();
        $data = $pyramid->pyramid($num);

        // dd($data);
        return view('pyramid', ['pyramid' => $data]);
    }
}
