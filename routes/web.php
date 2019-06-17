<?php

Route::get('/', 'SiteController@abrir_pagina_ver');
Route::get('/cadastro', 'SiteController@abrir_pagina_cadastrar');
Route::get('/editar/{url}', 'SiteController@abrir_pagina_editar');

Route::post('/cadastrar', 'SiteController@cadastrar_incidente');
Route::post('/editar', 'SiteController@editar_incidente');
Route::post('/excluir', 'SiteController@excluir_incidente');

