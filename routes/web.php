<?php
use App\UserType;
use App\User;
use App\Establishment;
use App\Company;
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

Route::resource('usuarios','UserController');
Route::resource('companies','CompanyController');

/*
Route::group(['prefix' => 'usuarios'], function(){
    Route::get('',['as' => '','uses' => 'UserController@getIndex']);
});
*/

Route::get('/', function () {

/*    
$model1 = new App\UserType();
$model1->name = "Administrador2";
$model1->save();

$model = new App\User();
$model->name = 'Teste2';
$model->email = "teste2@teste.com";
$model->password = "1234567";
$model->usertype_id = 2;
$model->save();

dd($model);
*/
/*
$model = User::with('usrType')->find(2);
dd($model->type->name);
*/
/*
$company = new App\Company();
$company->name = 'Elmos';
$company->email = 'elmos@elmos.com.br';
$company->save();
*/
/*
$estab = new App\Establishment();
$estab->name = 'Elmos CAV';
$estab->company_id = 1;
$estab->save();
*/
/*
$user = User::find(1);


$emp = Company::find(1);

foreach ($emp->establishments as $estab) {
    print_r($estab->name);
}

$estab = Establishment::find(2);
print_r($estab->company->name);
//dd($estab->company->name);  


//dd($model);
*/
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
