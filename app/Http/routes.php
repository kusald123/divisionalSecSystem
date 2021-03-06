
<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::group(['middleware' => 'web'], function () {
     Route::auth();
     Route::get('/', 'HomeController@index');


     Route::group(['middleware'=>'userfilter'],function(){

          Route::post('/regi','UserRegisterController@registeruser');
          Route::get('/Usr_register/updateUser', 'UserRegisterController@update');
          Route::get('/Usr_register/deleteUser', 'UserRegisterController@delete');
          Route::get('/Usr_register/resetPwd', 'UserRegisterController@resetPW');
          Route::get('/Usr_register',array('as'=>'viewEmployees','uses'=>'UserRegisterController@index'));





     Route::get('AddEmployees','HRController@addEmployee');
     Route::get('SearchEmployee',array('as'=>'ViewEmployee','uses'=>'HRController@searchEmployee'));
     Route::post('AddEmployeeDetails','HRController@addEmployeeDetails');
     Route::get('LoadEmployeeDetails','HRController@loadUpdateEmployees');
     Route::post('UpdateEmpDetail','HRController@UpdateEmployeeDetail');
     Route::get('LoadEmployeeSalDetails','HRController@loadEmpSalary');
     Route::post('AddSalary','HRController@addSalaryDetails');
     Route::get('/generatePDF_Emp','HRController@generatePDF');
     Route::get('Delete/{id}','HRController@deleteEmployee');
     //Route::post('UpdateEmpDetail','HRController@UpdateEmployeeDetail');

     route::get('AddBCDetail','DetailController@loadAddDetail');
     route::post('add','DetailController@add');
     route::get('LoadBCDetails','DetailController@loadBCDetails');
     route::get('validateNic','DetailController@isNicUsed');
     route::get('validateNicForBC','DetailController@isBcNicUsed');
     route::get('viewSalary','HRController@searchSalaryDetails');
     route::get('/generateSalaryPDF','HRController@generateSalaryPDF');
     route::get('DeleteBC/{id}','DetailController@deleteBCDetail');
          
          





     Route::get('yearlyIncrements','PageController@yearly_Increment_Calculator');

          Route::get('LeaveMgt/applyleave',array('as'=>'viewLeaves','uses'=>'LeaveController@index'));
          Route::post('LeaveMgt/addleave','LeaveController@addleave');
          Route::get('/LeaveMgt/update','LeaveController@updateleave');
          Route::get('LeaveMgt/deleteleave', 'LeaveController@deleteleave');
          Route::get('/LeaveStatus','LeaveController@indexforHead');
          Route::get('/LeaveStatus/Reject','LeaveController@Reject');
          Route::get('/LeaveStatus/Approve','LeaveController@Approve');
          Route::get('/view_remaining','LeaveController@remaining');

          Route::post('/generatePDF_Leaves','LeaveController@generatePDF');

          Route::get('/postion','LeaveController@showdata');


          


     });

               Route::get('/view_ldo_permits','LDOPermitController@index');
               Route::post('LDOPermit/add','LDOPermitController@store');
               Route::get('LDOPermit/update','LDOPermitController@update');
               Route::get('LDOPermit/delete','LDOPermitController@delete');

               Route::get('/view_deeds','DeedController@index');
               Route::post('Deed/add','DeedController@store');
               Route::get('Deed/update','DeedController@update');
               Route::get('Deed/delete','DeedController@delete');
               Route::get('Deed/get_ldo_permit','DeedController@getldo');
               Route::get('Deed/get_ldo_permit_details','DeedController@getldo_details');


               Route::get('/view_middleclass','MiddleClassController@index');
               Route::post('Middleclass/add','MiddleClassController@store');
               Route::get('Middleclass/update','MiddleClassController@update');
               Route::get('Middleclass/delete','MiddleClassController@delete');







     Route::group(['middleware'=>'HR'],function() {

     //Route::get('AddEmployees','HRController@addEmployee');

     Route::get('yearlyIncrements','PageController@yearly_Increment_Calculator');

     Route::get('/page2','PageController@Page2');

     Route::get('/profile','PageController@profileIndex');

     Route::get('/page3','PageController@Page3');



     Route::get('ApplyLeave','LeavePagesController@ApplyMyLeave');
     Route::get('currentleaves','LeavePagesController@CurrentLeaves');


//              //Matenarity Leaves
//     Route::get('ViewMateneryLeaves','MleavesController@viewMleaves');
//     Route::get('DownloadMateneryLeavesReport','MleavesController@generatePDF');
//     Route::get('AddMateneryLeaves','MleavesController@addMleaves');
//     Route::get('LoadMleaves','MleavesController@loadUpdateMleaves');
//     Route::post('updateMleaves','MleavesController@UpdateMleavesDetails');
//     Route::post('addMleavesDetails','MleavesController@addMleavesDetails');
//     Route::get('DeleteM','MleavesController@deleteMleaves');




//         //LoanRequests
//     Route::get('ViewLoans','LoanPagesController@viewLoans');
//     Route::get('DownloadLoanReport','LoanPagesController@generatePDF');
//     Route::get('AddLoanRequest','LoanPagesController@addLoan');
//     Route::get('LoadLoans','LoanPagesController@loadUpdateLoan');
//     Route::post('UpdateLoans','LoanPagesController@UpdateLoanDetails');
//     Route::post('AddLoanDetails','LoanPagesController@addLoanDetails');
//     Route::get('loadLoadDetails','LoanPagesController@fillLoanDetails');
//     Route::get('Delete','LoanPagesController@deleteLoan');
//
//
//
//
//     Route::get('ADDNOTE','EditorController@addNote');







     Route::get('insert','AdvanceController@InsertInfo');

     Route::get('addDetails',['uses'=>'AdvanceController@add_Programs','as' => 'addPrograms']);

     Route::get('deleteData',['uses'=>'AdvanceController@Delete_Data','as' => 'deleteData']);

     Route::get('/show','AdvanceController@show');

     Route::get('ad_pro/{ad_pro}/delete','AdvanceController@Delete_Data');

     Route::get('ad_pro/{ad_pro}/edit','AdvanceController@edit_data');

     Route::get('ad_pro/{ad_pro}/update','AdvanceController@update_data');





     /**
      * User Profile edit route
      * UserRegisterController -> editProfile function
      */
//     Route::get('/EditProfile','UserRegisterController@editProfile');
     /**
      * User Profile Edit Save
      * UserRegisterController -> editProfileSave function
      */
     Route::resource('/EditProfileSave','UserRegisterController@editProfileSave');


     Route::get('insert','AdvanceController@InsertInfo');

     Route::post('addDetails',['uses'=>'AdvanceController@add_Programs','as' => 'addPrograms']);

     Route::get('deleteData',['uses'=>'AdvanceController@Delete_Data','as' => 'deleteData']);

     Route::get('/show','AdvanceController@show');

     Route::get('ad_pro/{ad_pro}/delete','AdvanceController@Delete_Data');

     Route::get('ad_pro/{ad_pro}/edit','AdvanceController@edit_data');

     Route::get('ad_pro/{ad_pro}/update','AdvanceController@update_data');


     /**
      * Generate PDF
      */
     Route::get('/generatePDF','AdvanceController@generatePDF');







     });

     Route::group(['middleware'=>'LR'],function(){


     });




     Route::get('/EditProfile','UserRegisterController@editProfile');

     //LoanRequests
     Route::get('ViewLoans','LoanPagesController@viewLoans');
     Route::get('DownloadLoanReport','LoanPagesController@generatePDF');
     Route::get('AddLoanRequest','LoanPagesController@addLoan');
     Route::get('LoadLoans','LoanPagesController@loadUpdateLoan');
     Route::post('UpdateLoans','LoanPagesController@UpdateLoanDetails');
     Route::post('AddLoanDetails','LoanPagesController@addLoanDetails');
     Route::get('loadLoadDetails','LoanPagesController@fillLoanDetails');
     Route::get('Delete','LoanPagesController@deleteLoan');




     Route::get('ADDNOTE','EditorController@addNote');


     //Matenarity Leaves
     Route::get('ViewMateneryLeaves','MleavesController@viewMleaves');
     Route::get('DownloadMateneryLeavesReport','MleavesController@generatePDF');
     Route::get('AddMateneryLeaves','MleavesController@addMleaves');
     Route::get('LoadMleaves','MleavesController@loadUpdateMleaves');
     Route::post('updateMleaves','MleavesController@UpdateMleavesDetails');
     Route::post('addMleavesDetails','MleavesController@addMleavesDetails');
     Route::get('DeleteM','MleavesController@deleteMleaves');




});



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/





