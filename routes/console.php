<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    /*generate inspiring quote*/
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();
