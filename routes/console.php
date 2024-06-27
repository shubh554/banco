<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();
//verify commands
Schedule::command('app:verify-premium')->everyMinute();
Schedule::command('app:verify-staff')->everyMinute();
Schedule::command('app:verify-dealer')->everyMinute();
Schedule::command('app:verify-distributor')->everyMinute();
Schedule::command('app:send-message')->everyMinute();
Schedule::command('app:verify-mechanic')->everyMinute();