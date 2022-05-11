<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentProfileController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TimetableController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\Motivationalquote;
use App\Http\Controllers\SubjectNotesController;
use App\Http\Controllers\TeacherProfile;
use App\Http\Controllers\ChatController;
use App\Models\StudentProfile;
use App\Models\TeacherSubject;
use GuzzleHttp\Middleware;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registration',[LoginController::class,'Register']);
Route::post('/register',[LoginController::class,'registerfoam']);
Route::get('login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'logines']);

Route::middleware(['auth', 'detail','teacher'])->group(function () {
   /// Route::get('/studentdeshboard',[StudentController::class,'studentdeshboard']);
    Route::get('/teacherdashboard',[TeacherController::class,'teacherdashboard'])->name('teacherdashboard');
    Route::get('/teacher_profile',[TeacherProfile::class,'profile']);
    Route::get('/TeacherAttendance',[AttendanceController::class,'TeacherAttendance'])->name('TeacherAttendance');
    Route::post('/attendanceAction',[AttendanceController::class,'attendanceAction'])->name('attendanceAction');
    Route::post('/teacherchangeprofile',[TeacherProfile::class,'teacherchangeprofile']);
    Route::get('TeacherAddNotes',[TeacherController::class,'TeacherAddNotes']);
    Route::post('addteachersubject',[TeacherController::class,'addteachersubject']);
    Route::any('subnotes/{name}',[SubjectNotesController::class,'index'])->name('subnotes');
    Route::any('uploadnotes',[SubjectNotesController::class,'store'])->name('uploadnotes');

    Route::get('/addStudy',[TimetableController::class,'addStudy'])->name('addStudy');
    Route::post('/addEvent',[TimetableController::class,'addEvent'])->name('addEvent');
    Route::get('/allEvent',[TimetableController::class,'allEvent'])->name('allEvent');
});
Route::middleware(['auth', 'detail','student'])->group(function () {
    Route::get('/studentdeshboard',[StudentController::class,'studentdeshboard']);
    Route::get('/teacherdeshboard',[TeacherController::class,'teacherdeshboard']);
    Route::get('/profile',[StudentProfileController::class,'profile']);
    Route::get('/subject',[SubjectController::class,'subject']);
    Route::post('/SendAttendance',[AttendanceController::class,'SendAttendance'])->name('SendAttendance');
    Route::get('/timetable',[TimetableController::class,'timetable']);
    Route::get('/attendance',[AttendanceController::class,'attendance'])->name('attendance');
    Route::post('/changeprofile',[StudentProfileController::class,'changeprofile']);
    Route::post('addstudentsubject',[SubjectController::class,'addstudentsubject']);
    Route::any('studentsubnotes/{name}',[SubjectController::class,'studentsubnotes'])->name('studentsubnotes');
    Route::get('motivationalquote',[Motivationalquote::class,'index']);
    Route::get('chatroom',[ChatController::class,'index']);
    Route::get('chat/{id}',[ChatController::class,'chat'])->name('chat');
    Route::post('sendMessage',[ChatController::class,'sendMessage'])->name('sendMessage');
    Route::get('getMessage',[ChatController::class,'getMessage'])->name('getMessages');
});

Route::middleware(['auth'])->group(function () {
Route::get('/addstudentdetail',[StudentController::class,'addstudentdetail']);
Route::get('/addteacherdetail',[TeacherController::class,'addteacherdetail']);
Route::post('teacherdetail',[TeacherController::class,'teacherdetail']);
Route::post('studentdetail',[StudentController::class,'studentdetail']);
Route::get('logout',[LoginController::class,'logout']);
Route::get('admin',[LoginController::class,'admin']);
Route::get('Adminsubject',[AdminController::class,'Adminsubject']);
Route::post('addsubject',[AdminController::class,'addsubject']);
Route::post('del',[AdminController::class,'delsubject']);
Route::post('addcourseAdmin',[AdminController::class,'addcourseAdmin']);
Route::get('Admincourse',[AdminController::class,'Admincourse']);
Route::get('Adminbranch',[AdminController::class,'Adminbranch']);
Route::post('addbranchAdmin',[AdminController::class,'addbranchAdmin']);
Route::get('delbranch/{id}',[AdminController::class,'delbranch']);


});
