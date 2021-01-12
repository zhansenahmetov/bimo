<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use App\Model\User;
use App\Model\Manufactor;
use App\Model\Product;

class AdminController extends Controller
{
    
    public function show_main(){

        return view('admin.main');

    }

    public function show_users(){

        return view('admin.users');

    }

    public function show_products(){
        $products = Product::all();
        $manufactors = Manufactor::all();
        return view('admin.products',compact('products','manufactors'));

    }

    public function update_product(Request $request){

        $product = Product::where('name',$request->name)->first();
        
        if ($product) {

            $product->brand = $request->brand;
            $product->manufac_price = $request->manufac_price;
            $product->kaspi_price = $request->kaspi_price;
            $product->manufactorId = $request->manufactorId;

            $product->update();
        
        }else{
            $product = new Product();
            $product->name = $request->name;
            $product->brand = $request->brand;
            $product->manufac_price = $request->manufac_price;
            $product->kaspi_price = $request->kaspi_price;
            $product->manufactorId = $request->manufactorId;
            $product->id=$request->kaspi_price+$request->manufactorId;
            $product->sku=$request->kaspi_price+$request->manufactorId;

            $product->save();

        }

    }

    public function delete_product(Request $request) 
    {
        $product = Product::where('name',$request->name)->first(); 
        $product->delete(); //delete the client
    }


    public function show_manufactors(){

        $manufactors = Manufactor::all();
        return view('admin.manufactors',compact('manufactors'));

    }

    public function update_manufactor(Request $request){

        $manufactor = Manufactor::where('name',$request->name)->first();
        if ($manufactor) {

            $manufactor->info = $request->info;
            $manufactor->rrc = $request->rrc;
            $manufactor->nds = $request->nds;
            $manufactor->bonus = $request->bonus;

            $manufactor->update();
        
        }else{
            $manufactor = new Manufactor();
            $manufactor->name = $request->name;
            $manufactor->info = $request->info;
            $manufactor->rrc = $request->rrc;
            $manufactor->nds = $request->nds;
            // $manufactor->bonus = $request->bonus;

            $manufactor->save();

        }

    }
    public function delete_manufactor(Request $request) 
    {
        $manufactor = Manufactor::where('name',$request->name)->first(); 
        $manufactor->delete(); //delete the client
    }



    public function show_orders(){

        $cURLConnection = curl_init();

        curl_setopt($cURLConnection, CURLOPT_URL, 'https://kaspi.kz/shop/api/v2/orderentries/MjAwMTMwMDMjIzA=/product');
            curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, array(
            'ContentType: application/vnd.api+json',
            'X-Auth-Token: qXijdzwqsupucCJTZ9Gl/Tfma0LtAyRXI9JpsnI8QBU='
        ));
        $result = curl_exec($cURLConnection);
        curl_close($cURLConnection);

        // $jsonArrayResponse - json_decode($phoneList);
        
    
      
        dd($result);
       
        // $response = Http::withHeaders([
        // 'X-Auth-Token' => 'qXijdzwqsupucCJTZ9Gl/Tfma0LtAyRXI9JpsnI8QBU='
        // ])->get('https://kaspi.kz/shop/api/v2/orders?filter[orders][code]=149813153')->headers('');
      

     
        

    }




}
