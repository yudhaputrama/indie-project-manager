<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PublicController@index');
Route::get('/gallery', 'PublicController@gallery');
Route::get('/post/{post}', 'PublicController@post')->name('post-public');
Route::get('/about', 'PublicController@about');

Auth::routes();

Route::group(['middleware'=>['auth']], function (){
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::get('/notifications', 'HomeController@notifications')->name('notifications');

    Route::group(['prefix'=>'profile'], function (){
        Route::get('/', 'UserController@showProfile')->name('profile');
        Route::post('/', 'UserController@updateProfile');
    });

    Route::group(['prefix'=>'projects'], function (){
        Route::get('/', 'ProjectController@showProject')->name('project');
        Route::post('/', 'ProjectController@newProject')->name('project-add');
        Route::get('/{project}', 'ProjectController@showProjectDetail')->name('project-detail');
        Route::post('/{project}', 'ProjectController@updateProject');
        Route::get('/{project}/remove', 'ProjectController@removeProject');

        Route::post('/{project}/event', 'ScheduleController@postSchedule')->name('postEvent');
        Route::post('/{project}/event/{event}/approve', 'ScheduleController@accept');
        Route::post('/{project}/event/{event}/done', 'ScheduleController@done');
        Route::post('/{project}/event/{event}/edit', 'ScheduleController@edit');
        Route::post('/{project}/event/{event}/remove', 'ScheduleController@remove');
        Route::get('/{project}/calendar','ScheduleController@projectSchedule')->name('projectCalendar');
        Route::get('/{project}/calendar/data','ScheduleController@dataSchedule');

        Route::get('/{project}/upload', 'ProjectController@showUpload')->name('project-upload');
        Route::post('/{project}/upload', 'ProjectController@uploadPhotos');

        //Route::post('/projects/{project}/schedule','ScheduleController@postSchedule');
        Route::get('/{project}/members','ProjectController@listMember')->name('project-members');
        Route::post('/{project}/members','ProjectController@addMember');
        Route::get('/{project}/members/{user}/remove','ProjectController@removeMember');

        Route::get('/{project}/{photo}', 'PhotoController@showPhoto')->name('photo');
        Route::post('/{project}/{photo}', 'PhotoController@update');
        Route::get('/{project}/{photo}/remove', 'PhotoController@deletePhoto');
        Route::get('/{project}/{photo}/accept', 'PhotoController@acceptPhoto')->name('accept-photo');
        Route::get('/{project}/{photo}/comments', 'PhotoController@listComments');
        Route::post('/{project}/{photo}/comments', 'PhotoController@postComment');
    });

    Route::get('/schedule', 'ScheduleController@listSchedule');
    Route::get('/users', 'UserController@listUsers')->name('users');
    Route::post('/users','UserController@newUser');
    Route::get('/users/deleteAll','UserController@deleteAll')->name('user-delete-all');
    Route::get('/users/restoreAll','UserController@restoreAll')->name('user-restore-all');
    Route::get('/users/{user}/','UserController@viewUser')->name('view-user');
    Route::post('/users/{user}/remove','UserController@removeUser');
    Route::get('/users/{user}/forceRemove','UserController@removeForce')->name('user-remove-force');
    Route::get('/users/{removedUser}/restore','UserController@restore')->name('user-restore');
    Route::post('/users/{removedUser}/resetPassword','UserController@resetPassword');

    Route::post('/users/check', 'UserController@checkUsername')->name('checkUsername');

    Route::get('/blog','BlogController@index')->name('blogs');
    Route::get('/blog/manage','BlogController@managePosts')->name('manage-post');
    Route::get('/blog/tags','BlogController@listTags');
    Route::get('/blog/categories', 'BlogController@listCategories');
    Route::get('/blog/tags/{tag}', 'BlogController@showTag')->name('blog-tag-item');
    Route::put('/blog/tags/{tag}', 'BlogController@showTag')->name('blog-tag-edit');
    Route::get('/blog/tags/{tag}/remove', 'BlogController@deleteTag')->name('blog-tag-remove');
    Route::get('/blog/categories/{category}', 'BlogController@showCategory')->name('blog-category-item');
    Route::put('/blog/categories/{category}', 'BlogController@showCategory')->name('blog-category-edit');
    Route::get('/blog/categories/{category}/remove', 'BlogController@deleteCategory')->name('blog-category-remove');

    Route::post('blog/manage','BlogController@store')->name('newPost');
    Route::get('/blog/{post}','BlogController@show')->name('blog-view');
    Route::post('/blog/{post}','BlogController@update')->name('update-post');
    Route::get('/blog/{post}/remove','BlogController@destroy')->name('remove-post');
});
