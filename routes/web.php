<?php

use App\Models\Catogery;
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

Route::get('/filter', function () {
    return view('index');
});


Route::get('test',function (){
$catogery_ids=[1,2];


  $catogery=Catogery::wherein('id',$catogery_ids)->get();


 foreach($catogery as $cat){
    foreach($cat->products as $cat2){
echo $cat2->name;
echo '<BR>';
    }
 }

 //    return $product=\App\Models\Catogery::find(1)->products;



});
Route::get('crud',function (){

return view('product');
});
