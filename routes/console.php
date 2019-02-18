<?php

use Illuminate\Foundation\Inspiring;
use App\Http\Controllers\ProjectsController;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('nombre', function () {
    //se crea una instancia del controlador
    $this->comment(app(ProjectsController::class)->name());
})->describe('Display this consoles name');
