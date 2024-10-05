<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pyramid extends Model
{
    use HasFactory;
    public function pyramid($num = null)
    {
        $asterisk = "";
        $count = $num;

        // while ($num > 0) {
        //     $counter = $num;
        //     while ($counter <= $count) {
        //         $asterisk = $asterisk . "* ";
        //         $counter++;
        //     }
        //     $asterisk = $asterisk . "<br>";
        //     $num--;

        // }

        for ($x = 0; $x < $num; $x++) {
            for ($y = 0; $y <= $x; $y++) {
                $asterisk = $asterisk . '* ';
            }
            $asterisk = $asterisk . '<br>';
        }
        return $asterisk;
    }
}
