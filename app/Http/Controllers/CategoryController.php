<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
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

    public function AddCategory()
    {
    	return view('add_category');
    }

    public function InsertCategory(Request $request)
    {
    	$data=array();
        $data['category_name']=$request->category_name;
        $data['category_description']=$request->category_description;
        $data['publication_status']=$request->publication_status;

        $category=DB::table('categories')->insert($data);
        return view('add_category');
    }

    public function AllCategory()
    {
    	$allctgry=DB::table('categories')->get();
    	return view('all_category')->with('actgr',$allctgry);
    }
    public function getCategory(){
        $cat = DB::table('categories')->where('id','6');
        return view('all_products')->with('cat',$cat);

    }
}
