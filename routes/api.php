<?php

use Illuminate\Http\Request;
// use App\Http\Controllers\InterviewController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/username/{id}',function ($id){
  return $id;
} );

Route::post('/login','LoginController@login');

Route::prefix('admin')->group(function(){
  //GET LIST OF interview
  Route::get('/interview','InterviewController@testme');

  Route::get('/interview/create','InterviewController@testme');



  // interview/{interview_id}/edit
  // In: field_name: value
  // Out: success (true/false)
    Route::get('interview/{interview_id}/edit','InterviewController@testme');
  //
  // interview/{interview_id}/edit/interview_criteria/create
  // In: null
  // Out: Success (true/false)
  // id
    Route::get('interview/{interview_id}/edit/interview_criteria/create','InterviewController@testme');
  // interview/{interview_id}/edit/interview_criteria/edit
  // In: id
  // field_name: value
  // Out: success (true/false)
    Route::get('interview/{interview_id}/edit/interview_criteria/edit','InterviewController@testme');
  // interview/{interview_id}/edit/interviewer/add/
  // In:
  // idOut:
  // Success (true/false)
    Route::get('interview/{interview_id}/edit/interviewer/add','InterviewController@testme');
  // interview/{interview_id}/edit/interviewer/evaluation_criteria
  // In: interviewer_id
  // evaluation_id
  // Out: Success (true/false)
    Route::get('interview/{interview_id}/edit/interviewer/evaluation_criteria','InterviewController@testme');
  // interview/{interview_id}/edit/interviewee/create
  // In: name
  // Out: Success (true/false)
  // Id
    Route::get('interview/{interview_id}/edit/interviewee/create','InterviewController@testme');
  // interview/{interview_id}/edit/interviewee/{id}/edit
  // In: field_name: value
  // Out: Success (true/false)
    Route::get('interview/{interview_id}/edit/interviewee/{interviewee_id}/edit','InterviewController@testme');
  // interview/{interview_id}/edit/interviewee/{id}/edit/qualification/create
  // In: null
  // Out: Success (true/false)
  // Id
    Route::get('interview/{interview_id}/edit/interviewee/{interviewee_id}/edit/qualification/create','InterviewController@testme');
  // interview/{interview_id}/edit/interviewee/{id}/edit/qualification/edit
  // In: id
  // field_name: value
  // Out: Success (true/false)
    Route::get('interview/{interview_id}/edit/interviewee/{interviewee_id}/edit/qualification/edit','InterviewController@testme');
  // interview/{interview_id}/edit/interviewee/{id}/edit/documents/create
  // In: document_type
  // Out: Success (true/false)
  // id
  Route::get('interview/{interview_id}/edit/interviewee/{interviewee_id}/edit/documents/create','InterviewController@testme');

  //   interview/{id}/edit/interviewee/{id}/edit/documents/{id}/edit
  // In: File
  // Out: Success (true/false)
  Route::get('interview/{interview_id}/edit/interviewee/{interviewee_id}/edit/documents/edit','InterviewController@testme');

});

  /*
 * [Routes list for interviewer]
 * Contains all routes that are to be included in interviewer section
 */
Route::prefix('interviewer')->group(function(){

});



Route::get('/',function (){
  return "home";
});
