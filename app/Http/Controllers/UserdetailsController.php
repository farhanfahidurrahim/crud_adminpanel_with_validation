<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserdetailsController extends Controller
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

    public function AddUser()
    {
    	return view('add_user');
    }

    public function InsertUser(Request $request)
    {
    	$validatedData = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required',
        'mobile_number' => 'required|unique:userdetails|max:11',
    ]);
    	$data=array();
    	$data['name']=$request->name;
    	$data['email']=$request->email;
    	$data['mobile_number']=$request->mobile_number;
    	$data['address']=$request->address;

    	$image = $request->file('photo');

        if ($image) {
            $image_name= str_random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/user/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['photo']=$image_url;

                $userdetail=DB::table('userdetails')
                         ->insert($data);
              
              if ($userdetail) {
                 $notification=array(
                 'messege'=>'Successfully User Details Inserted ',
                 'alert-type'=>'success'
                  );
                return Redirect()->route('add.user')->with($notification);                      
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

    public function AllUser()
    {
    	$allusr=DB::table('userdetails')->get();
    	return view('all_user')->with('ausr',$allusr);
    }

    public function ViewUser($id)
    {
    	$viewusr=DB::table('userdetails')->where('id',$id)->first();
    	return view('view_user')->with('vusr',$viewusr);
    }

    public function DeleteUser($id)
    {
    	$dlt=DB::table('userdetails')->where('id',$id)->first();
    	$img=$dlt->photo;
    	unlink($img);
    	$dltusr=DB::table('userdetails')->where('id',$id)->delete();

    	if ($dltusr) {
             $notification=array(
             'messege'=>'Successfully User Details Deleted ',
             'alert-type'=>'success'
              );
            return Redirect()->route('all.user')->with($notification);                      
         }else{
          $notification=array(
             'messege'=>'error ',
             'alert-type'=>'success'
              );
             return Redirect()->back()->with($notification);
         }      	
    }

    public function EditUser($id)
    {
    	$edtusr=DB::table('userdetails')->where('id',$id)->first();
    	return view('edit_user')->with('eusr',$edtusr);
    }

    public function UpdateUser(Request $request, $id)
    {
    	$validatedData = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required',
        'mobile_number' => 'required|unique:userdetails|max:11',
    ]);

    	$data=array();
    	$data['name']=$request->name;
    	$data['email']=$request->email;
    	$data['mobile_number']=$request->mobile_number;
    	$data['address']=$request->address;

    	$image = $request->photo;

        if ($image) {
            $image_name= str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/user/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['photo']=$image_url;
                $img=DB::table('userdetails')->where('id',$id)->first();
                $image_path=$img->photo;
                $done=unlink($image_path);
                $user=DB::table('userdetails')->where('id',$id)->update($data);
              if ($user) {
                 $notification=array(
                 'messege'=>'Successfully User Updated ',
                 'alert-type'=>'success'
                  );
                return Redirect()->route('all.user')->with($notification);                      
             }else{
                 return Redirect()->back();
             }      
                
            }
            else{
              return Redirect()->back();
            	
            }
        }

        $updateuser=DB::table('userdetails')->where('id',$id)->update($data);
    }
}
