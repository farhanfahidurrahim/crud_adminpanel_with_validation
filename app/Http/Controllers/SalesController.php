<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SalesController extends Controller
{
     /**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AddSale()
    {	
    	return view('add_sale');
    }

    public function InsertSale(Request $request)
    {
    	$data=array();
    	$data['customer_name']= $request->customer_name;
    	$data['product']= $request->product;
    	$data['quantity']= $request->quantity;


        $sale=DB::table('sales')->insert($data);

        if ($sale) {
                 $notification=array(
                 'messege'=>'Successfully Sale Inserted ',
                 'alert-type'=>'success'
                  );
                return Redirect()->route('add.sale')->with($notification);                      
             }else{
              $notification=array(
                 'messege'=>'error ',
                 'alert-type'=>'success'
                  );
                 return Redirect()->back()->with($notification);
             }  
              
    }

    public function AllSale()
    {
    	$allsale=DB::table('sales')
    		->join('userdetails','sales.customer_name','userdetails.id')
    		->get();
    	return view('all_sale')->with('asl',$allsale);
    }
}
