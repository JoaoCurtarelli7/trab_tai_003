<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('');


Route::group(['middleware' => 'auth'], function () {


    Route::get('/placa', 'PlacaController@listar');
    Route::get('/placa/cadastrar', 'PlacaController@cadastrar');
    Route::post('/placa/salvar/{id}', 'PlacaController@salvar');
    Route::get('/placa/editar/{id}', 'PlacaController@editar');
    Route::get('/placa/deletar/{id}', 'PlacaController@deletar');
    Route::post('/placa/pesquisar','PlacaController@pesquisar');

    Route::get('/carro', 'CarroController@listar');
    Route::get('/carro/cadastrar', 'CarroController@cadastrar');
    Route::post('/carro/salvar/{id}', 'CarroController@salvar');
    Route::get('/carro/editar/{id}', 'CarroController@editar');
    Route::get('/carro/deletar/{id}', 'CarroController@deletar');
    Route::post('/carro/pesquisar','CarroController@pesquisar');

    Route::get('/fabrica', 'FabricaController@listar');
    Route::get('/fabrica/cadastrar', 'FabricaController@cadastrar');
    Route::post('/fabrica/salvar/{id}', 'FabricaController@salvar');
    Route::get('/fabrica/editar/{id}', 'FabricaController@editar');
    Route::get('/fabrica/deletar/{id}', 'FabricaController@deletar');
    Route::post('/fabrica/pesquisar','FabricaController@pesquisar');


    Route::get('placa-pdf/{id}', 'PDF\GeralPDFController@Placa');
    Route::get('carro-pdf/{id}', 'PDF\GeralPDFController@Carro');
    Route::get('fabrica-pdf/{id}', 'PDF\GeralPDFController@Fabrica');


    Route::get('/fabrica-email', "FabricaController@sendEmail");
});