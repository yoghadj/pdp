<?php

Route::view('/', 'welcome');
Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Ropa
    Route::delete('ropas/destroy', 'RopaController@massDestroy')->name('ropas.massDestroy');
    Route::resource('ropas', 'RopaController');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // Organization
    Route::delete('organizations/destroy', 'OrganizationController@massDestroy')->name('organizations.massDestroy');
    Route::resource('organizations', 'OrganizationController');

    // Cenderung
    Route::delete('cenderungs/destroy', 'CenderungController@massDestroy')->name('cenderungs.massDestroy');
    Route::resource('cenderungs', 'CenderungController');

    // Dampak
    Route::delete('dampaks/destroy', 'DampakController@massDestroy')->name('dampaks.massDestroy');
    Route::resource('dampaks', 'DampakController');

    // Cenderung Dampak
    Route::delete('cenderung-dampaks/destroy', 'CenderungDampakController@massDestroy')->name('cenderung-dampaks.massDestroy');
    Route::resource('cenderung-dampaks', 'CenderungDampakController');

    // Penanganan
    Route::delete('penanganans/destroy', 'PenangananController@massDestroy')->name('penanganans.massDestroy');
    Route::resource('penanganans', 'PenangananController');

    // Kategori
    Route::delete('kategoris/destroy', 'KategoriController@massDestroy')->name('kategoris.massDestroy');
    Route::resource('kategoris', 'KategoriController');

    // Assess
    Route::delete('assesses/destroy', 'AssessController@massDestroy')->name('assesses.massDestroy');
    Route::resource('assesses', 'AssessController');

    // Content Category
    Route::delete('content-categories/destroy', 'ContentCategoryController@massDestroy')->name('content-categories.massDestroy');
    Route::resource('content-categories', 'ContentCategoryController');

    // Content Tag
    Route::delete('content-tags/destroy', 'ContentTagController@massDestroy')->name('content-tags.massDestroy');
    Route::resource('content-tags', 'ContentTagController');

    // Content Page
    Route::delete('content-pages/destroy', 'ContentPageController@massDestroy')->name('content-pages.massDestroy');
    Route::post('content-pages/media', 'ContentPageController@storeMedia')->name('content-pages.storeMedia');
    Route::post('content-pages/ckmedia', 'ContentPageController@storeCKEditorImages')->name('content-pages.storeCKEditorImages');
    Route::resource('content-pages', 'ContentPageController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
Route::group(['as' => 'frontend.', 'namespace' => 'Frontend', 'middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Ropa
    Route::delete('ropas/destroy', 'RopaController@massDestroy')->name('ropas.massDestroy');
    Route::resource('ropas', 'RopaController');

    // Organization
    Route::delete('organizations/destroy', 'OrganizationController@massDestroy')->name('organizations.massDestroy');
    Route::resource('organizations', 'OrganizationController');

    // Cenderung
    Route::delete('cenderungs/destroy', 'CenderungController@massDestroy')->name('cenderungs.massDestroy');
    Route::resource('cenderungs', 'CenderungController');

    // Dampak
    Route::delete('dampaks/destroy', 'DampakController@massDestroy')->name('dampaks.massDestroy');
    Route::resource('dampaks', 'DampakController');

    // Cenderung Dampak
    Route::delete('cenderung-dampaks/destroy', 'CenderungDampakController@massDestroy')->name('cenderung-dampaks.massDestroy');
    Route::resource('cenderung-dampaks', 'CenderungDampakController');

    // Penanganan
    Route::delete('penanganans/destroy', 'PenangananController@massDestroy')->name('penanganans.massDestroy');
    Route::resource('penanganans', 'PenangananController');

    // Kategori
    Route::delete('kategoris/destroy', 'KategoriController@massDestroy')->name('kategoris.massDestroy');
    Route::resource('kategoris', 'KategoriController');

    // Assess
    Route::delete('assesses/destroy', 'AssessController@massDestroy')->name('assesses.massDestroy');
    Route::resource('assesses', 'AssessController');

    // Content Category
    Route::delete('content-categories/destroy', 'ContentCategoryController@massDestroy')->name('content-categories.massDestroy');
    Route::resource('content-categories', 'ContentCategoryController');

    // Content Tag
    Route::delete('content-tags/destroy', 'ContentTagController@massDestroy')->name('content-tags.massDestroy');
    Route::resource('content-tags', 'ContentTagController');

    // Content Page
    Route::delete('content-pages/destroy', 'ContentPageController@massDestroy')->name('content-pages.massDestroy');
    Route::post('content-pages/media', 'ContentPageController@storeMedia')->name('content-pages.storeMedia');
    Route::post('content-pages/ckmedia', 'ContentPageController@storeCKEditorImages')->name('content-pages.storeCKEditorImages');
    Route::resource('content-pages', 'ContentPageController');

    Route::get('frontend/profile', 'ProfileController@index')->name('profile.index');
    Route::post('frontend/profile', 'ProfileController@update')->name('profile.update');
    Route::post('frontend/profile/destroy', 'ProfileController@destroy')->name('profile.destroy');
    Route::post('frontend/profile/password', 'ProfileController@password')->name('profile.password');
});
