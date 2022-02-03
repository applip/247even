<?php

use App\Actions\Admin\Auth\Login;
use App\Http\Livewire\Admin\Admin\UpdateAdmin;
use App\Http\Livewire\Admin\Agent\UpdateAgent;
use App\Http\Livewire\Admin\Department\UpdateDepartment;
use App\Http\Livewire\Admin\Topic\UpdateTopic;

Route::view('login', 'admin.auth.login')->name('login');
Route::post('login', Login::class);
Route::group(['middleware' => ['web', 'auth:admin']], function(){
    Route::view('dashboard', 'admin.dashboard')->name('dashboard');
    Route::view('agents', 'admin.agents.index')->name('agents');
    Route::view('agents/create', 'admin.agents.create')->name('agents.create');
    Route::get('agents/{agent}/edit', UpdateAgent::class)->name('agents.edit');
    Route::view('admins', 'admin.admins.index')->name('admins');
    Route::view('admins/create', 'admin.admins.create')->name('admins.create');
    Route::get('admins/{admin}/edit', UpdateAdmin::class)->name('admins.edit');
    Route::view('departments', 'admin.departments.index')->name('departments');
    Route::view('departments/create', 'admin.departments.create')->name('departments.create');
    Route::get('departments/{department}/edit', UpdateDepartment::class)->name('departments.edit');
    Route::view('topics', 'admin.topics.index')->name('topics');
    Route::view('topics/create', 'admin.topics.create')->name('topics.create');
    Route::get('topics/{topic}/edit', UpdateTopic::class)->name('topics.edit');
});
