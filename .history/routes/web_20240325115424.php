<?php

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\announcement;
use App\Http\Controllers\AlumniPageController;
use App\Http\Controllers\MainPageContrller;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TrackingSystemContraoller;
use App\Http\Controller\
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StaffmanageController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\NewsController;
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

Route::get('/', [MainPageContrller::class , 'main']);
Route::get('/m', [announcement::class , 'index']);

Route::get('/manage', [AdminPageController::class , 'main'])->name('manage');

Route::get('/managealumni', [AlumniPageController::class , 'main'])->name('managealumni');


Route::get('/manageStaff', [StaffmanageController::class, 'manage'])->name('manageStaff');
Route::get('/AddStaff', [StaffmanageController::class, 'create'])->name('AddStaff');
Route::post('/storeStaff', [StaffmanageController::class, 'store'])->name('storeStaff');



// The beginning of Faculty routes
Route::get('/ManageFaculty', [FacultyController::class, 'manage'])->name('ManageFaculty');
Route::get('/AddFaculty', [FacultyController::class, 'create'])->name('AddFaculty');
Route::post('AddFaculty',[FacultyController::class,'store']);
Route::get('Faculty/{id}/edit',[FacultyController::class,'edit']);
Route::get('Faculty/{id}/delete',[FacultyController::class,'destroy']);
Route::get('Faculty/{id}/show',[FacultyController::class,'show']);
Route::put('Faculty/{id}/edit',[FacultyController::class,'update']);
// The end of Faculty routes

//The Beginning of News Routes
Route::get('/ManageNews', [NewsController::class, 'manage'])->name('ManageNews');
Route::get('/addNews', [NewsController::class, 'create'])->name('addNews');
Route::post('/storeNews', [NewsController::class, 'store'])->name('storeNews');
Route::get('/news/{id}/edit', [NewsController::class, 'edit'])->name('editNews');
Route::put('/news/{id}', [NewsController::class, 'update'])->name('updateNews');
Route::delete('/news/{id}', [NewsController::class, 'delete'])->name('deleteNews');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('newsDetails');
//The End of News Routes


Route::get('/uni', function(){
    return view('website.university');
}


);


Route::get('/main', [MainController::class , 'index']);

Route::get('/tracking-system', [TrackingSystemContraoller::class, 'index']);
