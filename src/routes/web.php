<?php
Route::middleware(['web','setData', 'auth', 'SetSessionData', 'language', 'timezone', 'AdminSidebarMenu', 'CheckUserLogin'])->group(function () {
    Route::get('/suratketerangan/test', 'Idoomblast\SuratKeterangan\Controller\SuratKeteranganController@test')->name('testSuratKeterangan');
    Route::get('/suratketerangan/{transaction_id}/print', 'Idoomblast\SuratKeterangan\Controller\SuratKeteranganController@printSuratKeterangan')->name('printSuratKeterangan');
});
