<?php

use App\Http\Controllers\AboutBController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BackController;
use App\Http\Controllers\BoutonController;
use App\Http\Controllers\ClasseBController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\ClassMailController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactBController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\GalleryBController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TitreController;
use App\Http\Controllers\TrainerController;
use App\Models\Client;
use App\Models\Footer;
use App\Models\Gallery;
use App\Models\Map;
use App\Models\Navbar;
use App\Models\Newsletter;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');



Route::get('/about', [AboutBController::class, 'index'])->name('about');

Route::get('/classe', [ClasseBController::class, 'index'])->name('classe');

Route::get('/contact', [ContactBController::class, 'index'])->name('contact');

Route::get('/gallery', [GalleryBController::class, 'index'])->name('gallery');

Route::resource('/emails', EmailController::class);

Route::get('/emailLu',[EmailController::class,'indexLu'])->name('Lu');

Route::get('/emailNonLu',[EmailController::class,'indexNonLu'])->name('NonLu');

Route::get('/backoffice',[BackController::class, 'index'])->name('hombo');

Route::resource('/navbars', NavbarController::class);
Route::resource('/titres', TitreController::class);
Route::resource('/sliders', SliderController::class);
Route::resource('/abouts', AboutController::class);
Route::resource('/boutons', BoutonController::class);
Route::resource('/classes', ClasseController::class);
Route::resource('/schedules', ScheduleController::class);
Route::resource('/trainers', TrainerController::class);
Route::resource('/galleries', GalleryController::class);
Route::resource('/events', EventController::class);
Route::resource('/pricings', PricingController::class);
Route::resource('/newsletters', NewsletterController::class);
Route::resource('/clients', ClientController::class);
Route::resource('/maps', MapController::class);
Route::resource('/footers', FooterController::class);
Route::resource('/profils', ProfilController::class);

Route::post('/inscription/{id}', [ClasseController::class, 'inscription'])->name('inscription');

Route::post("/send-mail",  [MailController::class,  "sendMail"])->name("sendMail");

Route::post("/classMail",  [ClassMailController::class,  "classMail"])->name("classMail");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
