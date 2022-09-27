<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\WelcomeController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;

use App\Http\Controllers\CustomSearchController;

use App\Http\Controllers\EmployeeformController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\DeptController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\TimesheetController;
use App\Http\Controllers\WeekDataController;
use App\Http\Controllers\CompanyEmployesController;
use App\Http\Controllers\EmpController;

use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\PaySlipController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\VacanciesController;
use App\Http\Controllers\CandidatesController;
use App\Http\Controllers\CompanyDetailsController;
use App\Http\Controllers\EmployeLoginsController;


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



Route::get('demo', function () {
    return view('demo');
});

Route::get('sample', function () {
    return view('sample');
});


Route::get('hello', function () {
    return view('hello');
});


Route::get('dashboard', function () {
    return view('dashboard');
});


Route::get('employee', function () {
    return view('employee');
});


Route::get('onboard', function () {
    return view('onboard');
});

Route::get('details', function () {
    return view('details');
});

Route::get('contract', function () {
    return view('contract');
});

Route::get('contract_form', function () {
    return view('contract_form');
});

Route::get('personal', function () {
    return view('personal');
});

Route::get('permission', function () {
    return view('permission');
});



Route::get('vendor.index', function () {
    return view('vendor.index');
});



Route::get('/employee', [EmployeController::class, 'index']);



Route::get('login',[AdminController::class, 'index']);




Route::post('/logout', [LogoutController::class, 'store']) ->name('logout');


Route::get('/', [LoginController::class, 'index']) ->name('login');
Route::post('/', [LoginController::class, 'redirectTo']);


Route::get('/register', [RegisterController::class, 'index']) ->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/employe.register', [EmployeLoginsController::class, 'index']);
Route::post('/registration', [EmployeLoginsController::class, 'store']);


Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('auth');

Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user')->middleware('auth');
Route::get('/superadmin', [App\Http\Controllers\SuperAdminController::class, 'index'])->name('superadmin')->middleware('auth');


Route::resource('/form', EmployeeformController::class);

Route::resource('/companydetails', CompanyDetailsController::class);

Route::resource('/depts', DeptController::class);

Route::resource('/attendances', AttendanceController::class);
Route::post('/attendances', [WeekDataController::class, 'search']);

Route::get('/sample', [TimesheetController::class, 'index']);
Route::post('/sample', [TimesheetController::class, 'store']);

Route::get('filter', [CompanyEmployesController::class, 'filterProduct'])->name('filter');

Route::get('/hello', [ProdController::class, 'index']);
Route::post('/hello', [ProdController::class, 'search']);


Route::resource('/employe', EmpController::class);


Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


Route::get('/home',[HomeController::class, 'index']);
Route::post('/home',[HomeController::class, 'upload']);

Route::get('/change-password', [PasswordController::class, 'changepassword']) ->name('change-password');
Route::post('/change-password', [PasswordController::class, 'updatepassword']) ->name('update-password');

Route::get('/payslip', [PaySlipController::class, 'index']);


Route::get('/demos', [DemoController::class, 'index']);
Route::get('/status/update', [DemoController::class, 'updateStatus'])->name('update.status');

Route::resource('/jobs', JobController::class);
Route::get('/active/update', [JobController::class, 'updateActive'])->name('update.active');

Route::get('/vacancies', [VacanciesController::class, 'index']);

Route::get('/emp', [CandidatesController::class, 'index']);

Route::post('/auth/store', [EmpController::class, 'check']) ->name('auth.store');