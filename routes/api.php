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


Route::prefix('user')->group(function () {
    Route::get('/', 'UserController@getUser');
    Route::post('/login', 'UserController@login');
    Route::get('/logout', 'UserController@logout');
});


Route::prefix('interview')->group(function () {
    // interview/
    // In:  null
    // Out: [{
    //         id:
    //          title:
    //          location:
    //          date:
    //      },....]
    Route::get('/', 'InterviewController@getList');


    // interview/create
    // In: null
    // Out: id:new_id
    //      success (true/false)
    Route::get('/create', 'InterviewController@testme');


    // interview/{interview_id}/edit
    // In: field_name: value
    // Out: success (true/false)
    Route::get('/{interview_id}/edit', 'InterviewController@testme');

    // interview/{interview_id}/interview_criteria/create
    // In: null
    // Out: Success (true/false)
    // id
    Route::get('/{interview_id}/interview_criteria/create', 'InterviewController@testme');

    // interview/{interview_id}/interview_criteria/edit
    // In: id
    // field_name: value
    // Out: success (true/false)
    Route::get('/{interview_id}/interview_criteria/edit', 'InterviewController@testme');

    // interview/{interview_id}/interviewer/add/
    // In:
    // idOut:
    // Success (true/false)
    Route::get('/{interview_id}/interviewer/add', 'InterviewController@testme');

    // interview/{interview_id}/interviewer/evaluation_criteria
    // In: interviewer_id
    // evaluation_id
    // Out: Success (true/false)
    Route::get('/{interview_id}/interviewer/evaluation_criteria', 'InterviewController@testme');

    // interview/{interview_id}/interviewee/create
    // In: name
    // Out: Success (true/false)
    //      Id
    Route::get('/{interview_id}/interviewee/create', 'InterviewController@testme');
});


/*
* [Routes list for interviewee]
* Contains all routes that are to be included in interviewee section
* The creation of interviewee assigns it to a interview. so we need not implicitly give the interview id parameter.
*/
Route::prefix('interviewee')->group(function () {

    // interview/{interview_id}/interviewee/{id}/edit
    // In: field_name: value
    // Out: Success (true/false)
    Route::get('/{interviewee_id}/edit', 'InterviewController@testme');

    // interview/{interview_id}/interviewee/{id}/qualification/create
    // In: null
    // Out: Success (true/false)
    // Id
    Route::get('/{interviewee_id}/qualification/create', 'InterviewController@testme');

    // interview/{interview_id}/interviewee/{id}/qualification/edit
    // In: id
    // field_name: value
    // Out: Success (true/false)
    Route::get('/{interviewee_id}/qualification/edit', 'InterviewController@testme');

    // interview/{interview_id}/interviewee/{id}/documents/create
    // In: document_type
    // Out: Success (true/false)
    // id
    Route::get('/{interviewee_id}/documents/create', 'InterviewController@testme');

    //   interview/{id}/interviewee/{id}/documents/{id}/edit
    // In: File
    // Out: Success (true/false)
    Route::get('/{interviewee_id}/documents/edit', 'InterviewController@testme');
});


Route::get('/', function () {
    return "home";
});
