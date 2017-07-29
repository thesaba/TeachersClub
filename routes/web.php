<?php

Route::get('/', ['uses' => 'HomeController@getHome', 'as' => 'getHome']);
Route::get('/home', ['uses' => 'HomeController@getHome', 'as' => 'getHome']);
Route::get('/root', ['uses' => 'HomeController@getHome', 'as' => 'getHome']);

Route::prefix('teacher')->group(function () {
	Route::get('/get/{id}', ['uses' => 'TeacherController@getTeacher', 'as' => 'getTeacher']);
	Route::get('/subjects/foreign', ['uses' => 'SubjectController@getForeign', 'as' => 'getForeign']);
	Route::get('/subjects/physics', ['uses' => 'SubjectController@getPhysics', 'as' => 'getPhysics']);
	Route::get('/subjects/chemistry', ['uses' => 'SubjectController@getChemistry', 'as' => 'getChemistry']);
	Route::get('/subjects/biology', ['uses' => 'SubjectController@getBiology', 'as' => 'getBiology']);
	Route::get('/subjects/georgian', ['uses' => 'SubjectController@getGeorgian', 'as' => 'getGeorgian']);
	Route::get('/subjects/abilities', ['uses' => 'SubjectController@getAbilities', 'as' => 'getAbilities']);
	Route::get('/subjects/geography', ['uses' => 'SubjectController@getGeography', 'as' => 'getGeography']);
	Route::get('/subjects/history', ['uses' => 'SubjectController@getHistory', 'as' => 'getHistory']);
	Route::get('/subjects/math', ['uses' => 'SubjectController@getMath', 'as' => 'getMath']);
	Route::get('/score/set/{id}/{score}', ['uses' => 'TeacherController@setScore', 'as' => 'setScore']);

    Route::middleware(['guest'])->group(function () {
    	Route::get('/register', ['uses' => 'RegisterController@getTeacherRegister', 'as' => 'getTeacherRegister']);
		Route::post('/register', ['uses' => 'RegisterController@postTeacherRegister', 'as' => 'postTeacherRegister']);
		Route::get('/login', ['uses' => 'LoginController@getTeacherLogin', 'as' => 'getTeacherLogin']);
		Route::post('/teacher/login', ['uses' => 'LoginController@postTeacherLogin', 'as' => 'postTeacherLogin']);
	});

	Route::middleware(['auth'])->group(function() {
		Route::get('/logout', ['uses' => 'LoginController@logout', 'as' => 'getLogout']);
		Route::get('/pupil/add', ['uses' => 'PupilController@getAddPupil', 'as' => 'getAddPupil']);
		Route::post('/pupil/add', ['uses' => 'PupilController@postAddPupil', 'as' => 'postAddPupil']);
		Route::get('/profile', ['uses' => 'TeacherController@getProfile', 'as' => 'getProfile']);
		Route::post('/profile', ['uses' => 'TeacherController@postProfile', 'as' => 'postProfile']);
	});
});

Route::prefix('sys')->group(function () {
    Route::get('/', ['uses' => 'SysDashboardController@getDashboard', 'as' => 'getSysDashboard']);
    Route::get('/dashboard', ['uses' => 'SysDashboardController@getDashboard', 'as' => 'getSysDashboard']);
    Route::get('/login', ['uses' => 'SysLoginController@getLogin', 'as' => 'getSysLogin']);
    Route::post('/login', ['uses' => 'SysLoginController@postLogin', 'as' => 'postSysLogin']);
});