<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/user/{name}', function ($name) {
    return view('user', ['name' => $name]);
});

Route:: get('/calcul/{nombre1}/{nombre2}', function ($nombre1, $nombre2) {
    return view('calcul', ['nombre1' => $nombre1, 'nombre2' => $nombre2]);
});

Route::get('/bienvenue/{langue?}', function ($langue = null) {
    return view('bienvenue', ['langue' => $langue]);
});

Route::redirect('/ici', '/hello');

Route::get('/accueil', function () {
   return view('accueil');
});

Route::get('/a-propos', function () {
    $informations = ['nov inicium','2025','UI/UX design'];
    return view('a-propos')->with(compact('informations'));
});

Route::get('/membres', function () {
    $membres = [
        ['prenom' => 'Alice', 'age' => 29],
        ['prenom' => 'Bob', 'age' => 34],
        ['prenom' => 'Chloé', 'age' => 17],
        ['prenom' => 'Damien', 'age' => 42],
    ];
    return view('membres')->with(compact('membres'));
});

Route::get('/services', function () {
    $services = [
        ['title' => 'Design', 'description' => '29 trois cartes différentes présentant des services fictifs'],
        ['title' => 'Développement', 'description' => '34 trois cartes différentes présentant des services fictifs'],
        ['title' => 'Marketing', 'description' => '17 trois cartes différentes présentant des services fictifs'],
    ];
    return view('services')->with(compact('services'));
});

Route::get('/produits', function () {
    $produits = [
        ['id' => 1, 'nom' => 'PC Portable', 'prix' => 1200, 'en_promo' => true],
        ['id' => 2, 'nom' => 'Souris Gaming', 'prix' => 80, 'en_promo' => false],
        ['id' => 3, 'nom' => 'Clavier Mécanique', 'prix' => 150, 'en_promo' => true],
        ['id' => 4, 'nom' => 'Casque Audio', 'prix' => 100, 'en_promo' => false],
    ];
    return view('produits')->with(compact('produits'));
});

Route::get('/produit/{id}', function ($id) {
    $produits = [
        ['id' => 1, 'nom' => 'PC Portable', 'prix' => 1200, 'en_promo' => true],
        ['id' => 2, 'nom' => 'Souris Gaming', 'prix' => 80, 'en_promo' => false],
        ['id' => 3, 'nom' => 'Clavier Mécanique', 'prix' => 150, 'en_promo' => true],
        ['id' => 4, 'nom' => 'Casque Audio', 'prix' => 100, 'en_promo' => false],
    ];

    $produit = collect($produits)->firstWhere('id', $id);

    if (!$produit) {
        abort(404);
    }

    return view('produit', ['produit' => $produit]);
});

Route::get('/tasks', [TaskController::class, 'index']);
