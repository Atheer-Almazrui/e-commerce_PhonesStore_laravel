<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PhonesController extends Controller
{
   

    public function GetPhoneData()
    {
        $phones = DB::table('products')
            ->get();
        
        //dd($phones);
        return view('welcome',["phones_array"=>$phones]);   
    }


    public function GetPhoneID($id)
    {
     
        $phone = DB::table('products')
        ->where('id','=',$id) 
        ->first(); 
        //dd($phone);

        return view('checkout',["phone_data"=>$phone]);
    }

    public function GetInvoice(Request $request){

        $user=auth()->user();
        if($user==null)
        return redirect()-> route('login');

        
        $inv_id =
        DB::table('invoice')->insertGetId([
            'cust_name'=> $request->name,
            'address'=> $request->address,
            'phone_num'=> $request->phone,
            'product_name'=> $request->productName,
            'total'=> $request->productPrice,
            'inv_date'=> date('Y-m-d')]);  
       
            //after invoice data inserted successfully
            //display the invoice to user
        
            $inv_info = DB::table('invoice')
            ->where('id','=',$inv_id) 
            ->first(); 
            
            //dd($inv_info);
    
            return view('invoice',["invoice_data"=>$inv_info]);
    }



} 
