<?php

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

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



Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home');

// Route::get('/questionnaires/create', 'QuestionaireController@create');
// Route::post('/questionnaires', 'QuestionaireController@store');
// Route::get('/questionnaires/{questionnaire}', 'QuestionaireController@show');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'UserController@profile')->name('profile');
Route::get('/profile/edit', 'UserController@edit')->name('edit-profile');
Route::post('/profile/edit', 'UserController@update')->name('update-profile');

Route::post('/profile/change-password', 'UserController@changePassword')->name('password_update');

Route::get('/profile/photo', 'UserController@photoEdit')->name('edit-profile-photo');
Route::post('/profile/photo', 'UserController@updatePhoto')->name('update-profile-photo');

// Route::get('/questionnaires/{questionnaire}/questions/create', 'QuestionController@create');
// Route::post('/questionnaires/{questionnaire}/questions', 'QuestionController@store');
// Route::delete('/questionnaires/{questionnaire}/questions/{question}', 'QuestionController@destroy');

// Route::get('/surveys/{questionnaire}-{slug}', 'SurveyController@show');
// Route::post('/surveys/{questionnaire}-{slug}', 'SurveyController@store');

//Admin Group&NameSpace
Route::group(['prefix' => 'admin/', 'middleware' => ['auth', 'admin', 'verified']], function(){
    
    Route::get('/', function() {
        return view('admin.home');
    });

    Route::get('/users', function() {
        return view('admin.home');
    });
    
    Route::get('/toadmin/{user}', 'UserController@changeToAdmin');

    Route::get('/active-toggle/{user}', 'UserController@activeToggle');
    
});