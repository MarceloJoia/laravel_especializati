<?php
Route::get("/painel/produtos", "Painel\ProdutoController@index");
Route::resource("/painel/produtos", "Painel\ProdutoController");


Route::group(["namespace" => "Site"], function(){
    Route::get("/", "SiteController@index");
    
    Route::get("/contato", "SiteController@contato");
});
