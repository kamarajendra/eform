<?php

use App\Http\Controllers\FormulirController;
use App\Support\Formulir\Box;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Support\Formulir\Text;
use App\Support\Formulir\TextInput;
use App\Support\Formulir\SelectInput;
use App\Support\Formulir\DateInput;
use App\Support\Formulir\DayInput;
use App\Support\Formulir\ClockInput;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [FormulirController::class, 'index']);
Route::post('submit', [FormulirController::class, 'store']);
