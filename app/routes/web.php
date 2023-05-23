Route::get('/article', 'ArticleController@index');
Route::get('/article/create', 'ArticleController@create');
Route::get('/article/{id}/edit', 'ArticleController@edit');
Route::get('/article/{id}', 'ArticleController@show');
