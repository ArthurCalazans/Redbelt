<?php

Route::get('/', 'SiteController@abrir_pagina_ver');
Route::get('/cadastro', 'SiteController@abrir_pagina_cadastrar');
Route::post('/cadastrar', 'SiteController@cadastrar_incidente');
