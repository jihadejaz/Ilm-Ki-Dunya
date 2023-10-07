<?php

use App\Http\Controllers\dunyacontroller;
use App\Models\dunyamodel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\emailController;
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


// LOGOUT ROUTE 





Route::get('logout', [dunyacontroller::class, 'logout'])->name('logout');

Route::get('/', [dunyacontroller::class, 'index'])->name('indexpage');
Route::get('/Books-library', [dunyacontroller::class, 'bookslab'])->name('bookslab');

Route::get('/Test-Mcqs', [dunyacontroller::class, 'view_mcqs'])->name('view_mcqs');


Route::get('/All-category/{id}', [dunyacontroller::class, 'allcategory'])->name('allcategory');
Route::get('/All-user', [dunyacontroller::class, 'chatpage'])->name('chatpage');
Route::get('upload_books/{id?}',[dunyacontroller::class,'upload_books'])->name('upload_books');
Route::get('viewbook/{id?},',[dunyacontroller::class,'viewbook'])->name('viewbook');


Route::get('login', function () {
    return view('login');
})->name('loginpage');


Route::get('registration', function () {
    return view('registration');
})->name('registrationpage');

Route::get('about', function () {
    return view('about');
})->name('aboutpage');

Route::get('courses', [dunyacontroller::class, 'courses'])->name('coursespage');
Route::get('userdailytask', [dunyacontroller::class, 'userdailytask'])->name('userdailytask');
Route::get('fetchtask/{id?}', [dunyacontroller::class, 'fetchtask'])->name('fetchtask');
Route::get('detail-lecture/{id?}',[dunyacontroller::class,'detaillecture'])->name('detaillecture');


Route::post('push-comment',[dunyacontroller::class,'push_comment'])->name('push_comment');

Route::get('testimonial', function () {
    return view('testimonial');
})->name('testimonialpage');


Route::get('/sign', function () {

    echo 'no access';

    print_r(session()->all());
});



Route::get('contact', function () {
    return view('contact');
})->name('contactpage');


// USER VALIDATION ROUTE 

Route::get('userindex', function () {

    if (session()->has('uemail')) {
        return view('userindex');
    }
    return redirect('login')->with('error', 'Please login yourself first');
})->name('user');

// ADMIN VALIDATION ROUTE 

Route::get('adminindex', function () {

    if (session()->has('adminemail')) {
        return view('admin/adminindex');
    }
    return redirect('login')->with('error', 'Please login yourself first');
})->name('admin');

// USERREGISSTRATION ROUTE 

Route::post('insert', [dunyacontroller::class, 'uregistration'])->name('userregistration');

Route::get('cv/{email?}', [dunyacontroller::class, 'cvgenerator'])->name('cvmakerpage');


// SIGN IN ROUTE 

Route::post('admin-dashboard', [dunyacontroller::class, 'signin'])->name('sign');

// Route::get('userindex', [dunyacontroller::class, 'usersdata'])->name('user');

// FETCH PROFILE THRU URL 

Route::get('userindex/{email?}', [dunyacontroller::class, 'fetchprofile'])->name('profile');

// Route::get('form', [dunyacontroller::class, 'index'])->name('form');
// Route::post('generate', [dunyacontroller::class, 'generate'])->name('cvmakerpage');


/////cv Genrater Routes

Route::post('/onecv', function () {
    return view('input_cv');
})->name('onecv');

Route::post('makecv', [dunyacontroller::class, 'makecv'])->name('makecv');

Route::get('courseEnrol/{id?}/{name?}', [dunyacontroller::class, 'courseEnrol'])->name('courseEnrol');


Route::post('upload_enroll', [dunyacontroller::class, 'upload_enroll'])->name('upload_enroll');

Route::get('fetchData', [DunyaController::class, 'fetchData'])->name('fetchData');
Route::post('check_msqs', [dunyacontroller::class, 'check_msqs'])->name('check_msqs');

Route::post('usersend', [dunyacontroller::class, 'usersend'])->name('usersend');

Route::post('Enroll-Request', [dunyacontroller::class, 'inrollreq'])->name('inrollreq');
Route::get('test_mcqs/{id?}', [dunyacontroller::class, 'test_mcqs'])->name('test_mcqs');
Route::get('cer', [dunyacontroller::class, 'certificate'])->name('certificate');

Route::post('query', [dunyacontroller::class, 'contactUs'])->name('contactus');
Route::get('Chat-Detail/{id?}', [dunyacontroller::class, 'chatdetail'])->name('chatdetail');
Route::post('Send-Message', [dunyacontroller::class, 'sendmsg'])->name('sendmessage');






/////Admin pannel Routes///

///And Check the  verify of Admin Email///

Route::middleware('adminguard')->group(function () {


    // GET ROUTES 

    Route::get('/admin/upload-lecture', [dunyacontroller::class, 'move_upload_lec'])->name('upload_lec');

    Route::get('/admin/show-lecture', [dunyacontroller::class, 'show_lec'])->name('show_lec');

    Route::get('/admin/Video-lecture', [dunyacontroller::class, 'video_lec'])->name('video_lec');

    Route::get('/admin/pdf-lecture', [dunyacontroller::class, 'adminpdf_lecture'])->name('pdf_lecture');

    Route::get('/admin/admincvtemplete', [dunyacontroller::class, 'admincvtemplete'])->name('admincvtemplete');

    Route::get('admin/Mcqs-upload', [dunyacontroller::class, 'go_page_mcqs'])->name('go_page_msqs');

    Route::get('/admin/add-category', [dunyacontroller::class, 'movecategory'])->name('add_category');

    Route::get('/admin/show-user', [dunyacontroller::class, 'showuser'])->name('showuser');

    Route::get('/admin/show-user-category{id?}', [dunyacontroller::class, 'showleccategoryvs'])->name('showleccategoryvs');

    Route::get('/admin/fetch-inroll-stdent', [dunyacontroller::class, 'fetchinrollstdent'])->name('fetchinrollstdent');

    Route::get('admin/removeEnroll{id}', [dunyacontroller::class, 'removeEnroll'])->name('removeEnroll');

    Route::get('admin/Enroll_approve', [dunyacontroller::class, 'Enroll_approve'])->name('Enroll_approve');

    Route::get('admin/Admin-logout', [dunyacontroller::class, 'adminlogout'])->name('adminlogout');

    Route::get('admin/Admin-dailytask', [dunyacontroller::class, 'dailytask'])->name('dailytask');

    Route::get('coursespageAdmin', [dunyacontroller::class, 'coursespageAdmin'])->name('coursespageAdmin');

    Route::get('/admin/inroll_Reject{id?}', [dunyacontroller::class, 'inroll_remove'])->name('inroll_remove');

    Route::get('/admin/accept_inroll{id?}', [dunyacontroller::class, 'accept_inroll'])->name('accept_inroll');

    Route::get('chat-admin-view', [dunyacontroller::class, 'chatadminview'])->name('chatadminview');

    Route::get('/admin/show-Category', [dunyacontroller::class, 'showcategory'])->name('showcategory');


    // POST ROUTES 


    Route::post('/admin/insert-category', [dunyacontroller::class, 'insert_category'])->name('insert_category');

    Route::post('admin/insert-task', [dunyacontroller::class, 'insert_task'])->name('insert_task');

    Route::post('/admin/insert_lecture', [dunyacontroller::class, 'insert_lecture'])->name('insert_lecture');

    Route::post('Admin/upload_mcqs', [dunyacontroller::class, 'upload_mcqs'])->name('upload_mcqs');

    Route::post('model.books', [dunyacontroller::class, 'post_books'])->name('model.books');
});