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

Route::get('/fusion2019', 'PageController@viewFusion2019');
Route::get('/guidebook/case-study','PageController@viewGuidebookCaseStudy');
Route::get('/guidebook/invest','PageController@viewGuidebookInvest');
Route::get('/guidebook/short-movie', 'PageController@viewGuidebookShortMovie');

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

// ============================================
// The User Settings
// ============================================

    // Show User Profile
    // ------------------
    Route::get('/user-profile','DashboardController@showUserProfile');

    // Change Password
    // ------------------
    Route::get('/user-profile/change-password','DashboardController@showChangePasswordForm');
    Route::post('/user-profile/change-password','DashboardController@changePassword');

    // Edit User Profile
    Route::get('/user-profile/edit-profile','DashboardController@editProfile');
    Route::post('/user-profile/edit-profile','TransactionController@editProfile');

// ============================================
// The External Files
// ============================================
    Route::get('/dashboard/external-files', 'DashboardController@viewExternalFiles');

// ============================================
// Blog Related Route
// ============================================    
    
    // -- Create
    Route::get('/dashboard/admin/blog-create','BlogController@createBlogPost');
    Route::post('/dashboard/admin/blog-create', 'BlogController@createBlogPost');

    // -- Read
        // *- All
        Route::get('/blog', 'BlogController@listBlogPost');

        // *- One
        Route::get('/blog/{id}','BlogController@articleBlogPost');

    // -- Update and Delete
        // *- View All
        Route::get('/dashboard/admin/blog-update','BlogController@viewAllUpdateBlogPost');

        // *- View One 
        Route::get('/dashboard/admin/blog-update/{id}', 'BlogController@updateBlogPost');
        Route::post('/dashboard/admin/blog-update/{id}','BlogController@updateBlogPost');
        Route::get('/blog/delete/{id}', 'BlogController@delete');


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

Route::get('/confirm/{id}', 'TransactionController@form');
Route::post('/proof', 'TransactionController@post');
Route::get('/essay', 'TransactionController@essay');
Route::post('/submit-essay','TransactionController@submit');

Route::get('/addteam', 'RegistController@update');
Route::post('/addteam', 'RegistController@update');
Route::get('/forget', 'RegistController@forget');
Route::post('/forget', 'RegistController@forget');

// ==================================== //
// IEEE FUSION 2019 Competitions ------ //
// ==================================== //

Route::get('/dashboard/case-study', 'DashboardController@caseStudy');
Route::get('/dashboard/invest', 'DashboardController@invest');
Route::get('/dashboard/short-movie', 'DashboardController@shortMovie');

Route::post('/dashboard/case-study', 'Casestudy2019participantController@storeUser');
Route::post('/dashboard/invest', 'Invest2019participantController@storeUser');
Route::post('/dashboard/short-movie', 'Shortmovie2019participantController@storeUser');
Route::get('/dashboard/guidebook', 'DashboardController@viewGuidebook');

// Case Study
    Route::get('/dashboard/case-study/guidebook', 'Casestudy2019participantController@viewGuidebook');
    Route::get('/dashboard/case-study/manage-team', 'Casestudy2019participantController@viewManageTeam');
    //Route::get('/dashboard/faq', 'DashboardController@viewFAQ'); **1.1

    Route::get('/dashboard/case-study/manage-team/add-team-member', 'Casestudy2019participantController@updateTeam');
    Route::post('/dashboard/case-study/manage-team/add-team-member', 'Casestudy2019participantController@updateTeam');

    Route::get('/dashboard/case-study/manage-team/upload-photo/{id}', 'Casestudy2019participantController@viewUploadPhoto');
    Route::post('/dashboard/case-study/manage-team/upload-photo/{id}', 'Casestudy2019participantController@viewUploadPhoto');

    Route::post('/upload-process', 'Casestudy2019participantController@postUploadPhoto');

    Route::get('/dashboard/case-study/upload-files', 'Casestudy2019participantController@viewUploadFiles');
    Route::post('/dashboard/case-study/upload-files', 'Casestudy2019participantController@viewUploadFiles');

// Invest
    Route::get('/dashboard/invest/guidebook', 'Invest2019participantController@viewGuidebook');
    Route::get('/dashboard/invest/manage-team', 'Invest2019participantController@viewManageTeam');
    Route::get('/dashboard/faq', 'DashboardController@viewFAQ');

    Route::get('/dashboard/invest/manage-team/add-team-member', 'Invest2019participantController@updateTeam');
    Route::post('/dashboard/invest/manage-team/add-team-member', 'Invest2019participantController@updateTeam');

    Route::get('/dashboard/invest/manage-team/upload-photo/{id}', 'Invest2019participantController@viewUploadPhoto');
    Route::post('/dashboard/invest/manage-team/upload-photo/{id}', 'Invest2019participantController@viewUploadPhoto');

    Route::post('/upload-process-invest', 'Invest2019participantController@postUploadPhoto');

    Route::get('/dashboard/invest/upload-files', 'Invest2019participantController@viewUploadFiles');
    Route::post('/dashboard/invest/upload-files', 'Invest2019participantController@viewUploadFiles');

// Short Movie
    Route::get('/dashboard/short-movie/guidebook', 'Shortmovie2019participantController@viewGuidebook');
    Route::get('/dashboard/short-movie/manage-team', 'Shortmovie2019participantController@viewManageTeam');
    Route::get('/dashboard/faq', 'DashboardController@viewFAQ');

    Route::get('/dashboard/short-movie/manage-team/add-team-member', 'Shortmovie2019participantController@updateTeam');
    Route::post('/dashboard/short-movie/manage-team/add-team-member', 'Shortmovie2019participantController@updateTeam');

    Route::get('/dashboard/short-movie/manage-team/upload-photo/{id}', 'Shortmovie2019participantController@viewUploadPhoto');
    Route::post('/dashboard/short-movie/manage-team/upload-photo/{id}', 'Shortmovie2019participantController@viewUploadPhoto');

    Route::post('/upload-process-short-movie', 'Shortmovie2019participantController@postUploadPhoto');

    Route::get('/dashboard/short-movie/submit-url', 'Shortmovie2019participantController@viewUploadFiles');
    Route::post('/dashboard/short-movie/submit-url', 'Shortmovie2019participantController@viewUploadFiles');

// ==================================== //
// Admin  ----------------------------- //
// ==================================== //
    
    // --- Dashboard Admin
        Route::get('/dashboard/admin', 'DashboardController@indexAdmin');
        Route::get('/dashboard/admin/view-case-study', 'DashboardController@viewAdminCaseStudy');
        Route::get('/dashboard/admin/view-invest', 'DashboardController@viewAdminInvest');
        Route::get('/dashboard/admin/view-short-movie', 'DashboardController@viewAdminShortMovie');

        Route::get('/dashboard/admin/view-case-study/{id}', 'DashboardController@viewAdminCaseStudyTeam');
        Route::post('/dashboard/admin/view-case-study/{id}', 'DashboardController@updateAdminCaseStudyTeam');

        Route::get('/dashboard/admin/view-invest/{id}', 'DashboardController@viewAdminInvestTeam');
        Route::post('/dashboard/admin/view-invest/{id}', 'DashboardController@updateAdminInvestTeam');

        Route::get('/dashboard/admin/view-short-movie/{id}', 'DashboardController@viewAdminShortMovieTeam');
        Route::post('/dashboard/admin/view-short-movie/{id}', 'DashboardController@updateAdminShortMovieTeam');

// ==================================== //
// Debug Sandbox ---------------------- //
// ==================================== //

Route::get('/debug', 'PageController@debug');