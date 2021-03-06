<?php
use Illuminate\Support\Facades\Route;
use Ixudra\Curl\Facades\Curl;
use Illuminate\Support\Facades\Log;
use App\Product;
use App\SubProduct;

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


// Auth::routes();
require_once "Auth.php";

// backend's route
Route::group(['prefix' => 'cyberholic-system', 'middleware' => 'auth', 'middleware' => 'role'], function()
{
    require_once "backend/view.php";
});

// Route::group(['middleware' => 'auth', 'middleware' => 'role'], function()
// {
    require_once "backend/api.php";
// });


// frontend's route
require_once "frontend/view.php";
require_once "frontend/api.php";

Route::get('/test_prod', function ()
{
    $products = Product::inRandomOrder()->take(10);

    foreach ($products as $key => $value) {
        Product::where('id', $value->id)
                ->update([
                    'price' => rand(8000, 20000)
                ]);
    }

    // return $products->update([
        
    // ]);

    return $products->get();
    // foreach ($products as $key => $value) {
    //     Product::where('id', $value->id)->update([
    //         'productGuid' => str_random(6)
    //     ]);
    // }
});
Route::get('/create_admin', 'HomeController@createAdmin');
Route::get('/test_session/{id}', 'HomeController@testSession');
// Route::get('/esun', 'Backend\OrderController@esun');
Route::get('/esun', function ()
{
    // $products = Product::all();

    // foreach ($products as $key => $value) {
    //     $idCache = str_random(6);
    //     $sub = SubProduct::where('productParent', $value->productGuid)->get();
    //     foreach ($sub as $index => $item) {
    //         SubProduct::where('id', $item->id)->update([
    //             'productParent' => $idCache
    //         ]);
    //     }
    //     Product::where('id', $value->id)->update([
    //         'productGuid' => $idCache
    //     ]);
    // }
    // $ONO = (string)rand(5000000, 9000000);
    // $ONO = array('ONO' => (string)rand(5000000, 9000000));
    // $PostData = array(
    //     'MID' => '8089024715',
    //     'CID' => '',
    //     'ONO' => $ONO['ONO'],
    //     'TA' => '10',
    //     'TT' => '01',
    //     'U' => 'https://owa.yigeng.com.tw/esun_callback',
    //     'TXNNO' => '',
    //     'M' => md5('8089024715&&'.$ONO['ONO'].'&10&01&https://owa.yigeng.com.tw/esun_callback&&B88BM8GZW8HZ5PW21OJVFICNDXMSI3QR')
    // );
    // echo $ONO['ONO'];
    // echo $ONO['ONO'];
    // $response = Curl::to('https://acqtest.esunbank.com.tw/ACQTrans/online/sale61.htm')
    //                 ->withData( $PostData )
    //                 ->withResponseHeaders()
    //                 ->returnResponseObject()
    //                 ->post();

    // $content = $response->content;
    // $headers = $response->headers;          
    // Log::info($headers);
    // return $response;
    // return view('payment.esun', [
    //     'str' => rand(5000000, 9000000)
    // ]);
});
// Route::get('/esun_callback', 'HomeController@esunec');