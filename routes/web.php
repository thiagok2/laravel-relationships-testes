<?php

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

$this->get('one-to-one','OneToOneController@oneToOne');
$this->get('one-to-one-inverse','OneToOneController@oneToOneInverse');
$this->get('one-to-one-insert','OneToOneController@oneToOneInsert');

$this->get('one-to-many','OneToManyController@oneToMany');

$this->get('many-to-one','OneToManyController@manyToOne');

$this->get('one-to-many-2','OneToManyController@oneToManyTwo');

$this->get('one-to-many-insert','OneToManyController@oneToManyInsert');

$this->get('one-to-many-insert-2','OneToManyController@oneToManyInsertTwo');

$this->get('has-many-through','OneToManyController@hasManyThrough');


$this->get('many-to-many', 'ManyToManyController@manyToMany');

$this->get('many-to-many-inverse', 'ManyToManyController@manyToManyInverse');

$this->get('many-to-many-insert', 'ManyToManyController@manyToManyInsert');



Route::get('/', function () {
    return view('welcome');
});
