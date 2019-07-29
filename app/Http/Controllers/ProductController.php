<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
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


    public function AddProduct()
    {
    	return view('add_product');
    }

    public function InsertProduct(Request $request)
    {
    	$validatedData = $request->validate([
        'product_name' => 'required|max:255',
        'category_id' => 'required',
    ]);
    	$data=array();
    	$data['product_name']=$request->product_name;
    	$data['category_id']=$request->category_id;
    	$data['product_description']=$request->product_description;
    	$data['product_price']=$request->product_price;

    	$image = $request->file('photo');

        if ($image) {
            $image_name= str_random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/product/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['photo']=$image_url;

                $product=DB::table('products')
                         ->insert($data);
              
              if ($product) {
                 $notification=array(
                 'messege'=>'Successfully Product Inserted ',
                 'alert-type'=>'success'
                  );
                return Redirect()->route('add.product')->with($notification);                      
             }else{
              $notification=array(
                 'messege'=>'error ',
                 'alert-type'=>'success'
                  );
                 return Redirect()->back()->with($notification);
             }      
                
            }else{
              return Redirect()->back();
            	
            }
        }else{
        	  return Redirect()->back();
        }
    }

    public function AllProduct()
    {
    	$allprdct=DB::table('products')
    		->join('categories','products.category_id','categories.id')
    		->select('products.*','categories.category_name')
    		->get();
    	return view('all_product')->with('aprdct',$allprdct);
    }

    public function ViewProduct($id)
    {
    	$viewprdct=DB::table('products')->where('id',$id)->first();
    	return view('view_product')->with('vprdct',$viewprdct);
    }

    public function EditProduct($id)
    {
    	$editprdct=DB::table('products')->where('id',$id)->first();
    	return view('edit_product')->with('eprdct',$editprdct);
    }

    public function UpdateProduct(Request $request,$id)
    {

    	$data=array();
    	$data['product_name']=$request->product_name;
    	$data['category_id']=$request->category_id;
    	$data['product_description']=$request->product_description;
    	$data['product_price']=$request->product_price;

    	$image = $request->photo;

        if ($image) {
            $image_name= str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/product/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['photo']=$image_url;
                $img=DB::table('products')->where('id',$id)->first();
                $image_path=$img->photo;
                $done=unlink($image_path);
                $user=DB::table('products')->where('id',$id)->update($data);
              if ($user) {
                 $notification=array(
                 'messege'=>'Successfully product Updated ',
                 'alert-type'=>'success'
                  );
                return Redirect()->route('all.product')->with($notification);                      
             }else{
                 return Redirect()->back();
             }      
                
            }
            else{
              return Redirect()->back();
            	
            }
        }

    }

    public function DeleteProduct($id)
    {
    	$dlt=DB::table('products')->where('id',$id)->first();
    	$img=$dlt->photo;
    	unlink($img);
    	$dltusr=DB::table('products')->where('id',$id)->delete();

    	if ($dltusr) {
             $notification=array(
             'messege'=>'Successfully Product Deleted ',
             'alert-type'=>'success'
              );
            return Redirect()->route('all.product')->with($notification);                      
         }else{
          $notification=array(
             'messege'=>'error ',
             'alert-type'=>'success'
              );
             return Redirect()->back()->with($notification);
         }   
    }

}
