<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PrincipalController@principal')->name('site.index');
// Route::get('/', [\APP\Http\Controllers\PrincipalController::class, 'principal']) // Versao Laravel 8 +

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
// Route::get('/', [\APP\Http\Controllers\SobreNosController::class, 'sobreNos']) // Versao Laravel 8 +

Route::get('/contato', 'ContatoController@contato')->name('site.contato');
// Route::get('/', [\APP\Http\Controllers\ContatoController::class, 'contato']) // Versao Laravel 8 +

Route::get('/login', function(){ return 'Login';})->name('site.login');


//Agrupando rotas dentro do prefixo /app
Route::prefix('/app')->group(function() {
    Route::get('/clientes', function(){ return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', function(){ return 'Fornecedores';})->name('app.fornecedores');
    Route::get('/produtos', function(){ return 'Produtos';})->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');





//Redirect
// Ao acessar rota2, sera redirecionado a rota1
// Route::redirect('/rota2', '/rota1');

//Redirect no controlador da declaração da route
// Route::get('/rota2', function() {
//     return redirect()->route('site.rota1');
// })->name('site.rota2');


// Retorno de Route fallback
Route::fallback(function() {
    echo "A Rota acessada não existe. <a href=".route('site.index').">Clique aqui </a> para ir para página inicial";
});



// nome,categoria, assunto, mensagem Via GET
// Route::get(
//     '/contato/{nome}/{id_categoria}',
//     function(
//         string $nome = "Desconhecido",
//         int $id_categoria = 1 // 1- 'Informação';
//     ) {
//         echo "estamos aqui $nome -  $id_categoria";
//     }
// )->where('nome', '[A-Za-z]+')->where('id_categoria', '[0-9]+');
 // Informando que nome precisa ser caractereza de A-Z/a-z e id_categoria tem que ser de [0-9] e pelo menos 1 caracter exista


// Sempre infromado o caminho e a ação, que é o callback
// Route::get($uri, $callback);

// Route::get('/minhaPagina', function () {
//     return 'Retornando minha pagina';
// });

/* Verbos Http
    get
    post
    put
    patch
    delete
    options
*/