<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('About');
});

Route::get('Memdoc','ViewController@Doc');

Route::post('/DocSpec',['uses'=>'ViewController@FindDoc','as'=>'DocSpec']);

Route::get('Memhos','ViewController@Hos');

Route::get('Memlabs','ViewController@Lab');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::post('registerdoc', 'Auth\RegisterController@createdoc');

Route::get('/Docregister', function () {
    return view('Users.DocRegister');
});

Route::get('/Hospitalregister', function () {
    return view('Users.HospitalRegister');
});

Route::get('/Labregister', function () {
    return view('Users.LabRegister');
});

Route::get('/Patientregister', function () {
    return view('Users.PatientRegister');
});

//submit doc form
Route::post('/submitdoc',['uses'=>'Auth\RegisterController@createdoc','as'=>'submitdoc']);

//submit hospital form
Route::post('/submithospital',['uses'=>'Auth\RegisterController@createhospital','as'=>'submithospital']);

//submit lab form
Route::post('/submitlab',['uses'=>'Auth\RegisterController@createlab','as'=>'submitlab']);

//submit patient form
Route::post('/submitpatient',['uses'=>'Auth\RegisterController@createpatient','as'=>'submitpatient']);

Route::get('/Doctor','DoctorController@show');

Route::get('/Patient','PatientController@show');

Route::get('/Hospital','HospitalController@show');

Route::get('/Lab','LabController@show');

Route::post('/AddDocHos',['uses'=>'HospitalController@add','as'=>'AddDocHos']);

Route::post('/AddRecord',['uses'=>'DoctorController@access','as'=>'AddRecord']);

Route::get('/Doctor/addrecord', function () {
    return view('Doctor/addrecord');
});

Route::get('/Doctor/profile', 'DoctorController@index');

Route::get('/Doctor/PatientRecords', 'DoctorController@all');

Route::get('/Doctor/HiddenRecords', 'DoctorController@hidden');

Route::get('/Doctor/SpecialRecords', 'DoctorController@special');

Route::post('/Doctor/EditDoctor',['uses'=>'DoctorController@edit','as'=>'EditDoctor']);

Route::get('/Patient/profile', 'PatientController@index');

Route::post('/Patient/EditPatient',['uses'=>'PatientController@edit','as'=>'EditPatient']);

Route::get('/Hospital/profile', 'HospitalController@index');

Route::post('/Hospital/EditHospital',['uses'=>'HospitalController@edit','as'=>'EditHospital']);

Route::post('/Lab/EditLab',['uses'=>'LabController@edit','as'=>'EditLab']);

Route::get('/Lab/profile', 'LabController@index');

Route::post('/sumbitrecord',['uses'=>'RecordController@store','as'=>'/sumbitrecord']);

Route::get('/patienthide/{id}', 'RecordController@patienthide');

Route::get('/patientunhide/{id}', 'RecordController@patientunhide');

Route::get('/special/{id}', 'RecordController@special');

Route::get('/unspecial/{id}', 'RecordController@unspecial');

Route::get('/dochide/{id}', 'RecordController@hide');

Route::get('/docunhide/{id}', 'RecordController@unhide');

Route::get('/sspecial/{id}', 'RecordController@sspecial');

Route::get('/sunspecial/{id}', 'RecordController@sunspecial');

Route::get('/viewrecord/{id}', 'RecordController@view');

Route::get('/viewreportp/{id}', 'ReportController@view');

Route::get('/viewrecordPDF/{id}', 'RecordController@pdf');

Route::get('RecordPDF/{id}', 'RecordController@pdfview');

Route::get('/all', function () {
    return view('Doctor.allrecordsgrid');
});

Route::post('/AddReportH',['uses'=>'ReportController@storeH','as'=>'AddReportH']);

Route::post('/AddReportL',['uses'=>'ReportController@storeL','as'=>'AddReportL']);

Route::get('/doctorapproval/{id}', 'ApprovalController@doctor');

Route::get('/hospitalapproval/{id}', 'ApprovalController@hospital');

Route::get('/labapproval/{id}', 'ApprovalController@lab');

Route::get('/viewreport/{id}', 'ReportController@viewreport');

Route::get('/patientrephide/{id}', 'ReportController@patientrephide');

Route::get('/patientrepunhide/{id}', 'ReportController@patientrepunhide');

Route::get('/Doctor/AllPatientRecords/{patientid}', 'DoctorController@allpatient');

Route::get('/Doctor/AllPatientReports/{patientid}', 'DoctorController@allpatientrep');

Route::get('/viewreportdoc/{id}', 'ReportController@viewreportdoc');