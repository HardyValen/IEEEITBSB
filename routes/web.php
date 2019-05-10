<?php

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
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

Route::get('/', 'PageController@index');
Route::get('/about-itbsb','PageController@about');
Route::get('/credits','PageController@credits');
Route::get('/disaster-hack', 'PageController@disaster');

Route::get('/register', 'RegistController@index');
Route::get('/login', 'LoginController@index');
Route::post('/register', 'RegistController@process');
Route::post('/login', 'LoginController@process');
Route::get('/logout', 'LoginController@logout');
Route::get('/success', 'RegistController@success');

Route::get('/dashboard', 'DashboardController@index');
Route::get('/dashboard/guidebook-disasterhack', 'DashboardController@guidebookdisasterhack');
Route::get('/dashboard/team-info', 'DashboardController@teaminfo');
Route::get('/dashboard/file-upload', 'DashboardController@fileupload');

Route::get('/change','DashboardController@showChangePasswordForm');
Route::post('/change','DashboardController@changePassword');

Route::get('/form','BlogController@form');
Route::post('/submit', 'BlogController@submit');
Route::get('/blog/{id}','BlogController@post');
Route::Get('/blog', 'BlogController@list');


Route::post('/upload', function() {
    $CKEditor = Input::get('CKEditor');
    $funcNum = Input::get('CKEditorFuncNum');
    $message = $url = '';
    if (Input::hasFile('upload')) {
        $file = Input::file('upload');
        if ($file->isValid()) {
            $filename = $file->getClientOriginalName();
            $file->move(public_path().'/images/', $filename);
            $url = 'images/' . $filename;
        } else {
            $message = 'An error occured while uploading the file.';
        }
    } else {
        $message = 'No file uploaded.';
    }
    return '<script>window.parent.CKEDITOR.tools.callFunction('.$funcNum.', "'.$url.'", "'.$message.'")</script>';
})->name('upload');

Route::get('/edit/images/{filename}', function($filename){
    $path = public_path('images/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});
Route::get('/blog/images/{filename}', function($filename){
    $path = public_path('images/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

Route::get('/blog/edit/{id}', 'BlogController@edit');

Route::get('/blog/delete/{id}', 'BlogController@delete');

Route::post('/update/{id}', 'BlogController@update');

Route::get('/confirm/{id}', 'TransactionController@form');

Route::post('/proof', 'TransactionController@post');

Route::get('/essay', 'TransactionController@essay');
Route::post('/submit-essay','TransactionController@submit');


Route::get('/addteam', 'RegistController@update');
Route::post('/addteam', 'RegistController@update');
Route::get('/forget', 'RegistController@forget');
Route::post('/forget', 'RegistController@forget');