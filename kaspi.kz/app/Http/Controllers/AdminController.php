<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use App\picture;
use App\categories;
use Illuminate\Support\Facades\Input;
use Auth;
use Session;
class AdminController extends Controller
{
    public function login(Request $request){
    	if($request->isMethod('post')){
    		$data=$request->input();
    		if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'1'])){
    			return redirect('adminpanel/dashboard	');
    		}else{
    			return redirect('adminpanel/admin')->with('message_error','Invalid email or password');
    		}
    	}
    	return view('admin.adminLogin');
    }

    public function dashboard(){
     return view('admin.dashboard');	
    }

     public function logout(){
     Session::flush();
     return redirect('adminpanel/admin')->with('message_success','You logged out');	   
   }
    public function create(){
     $categories=categories::all(['id_cat','name_cat']);   
     return view('admin.create', compact('categories',$categories));
     $product_items=products::all(['id_prod','name_product']);   
     return view('admin.storePicture', compact('product_items',$product_items));	   
   }
    public function store(){
     $store_cat=new categories();
     $store_prod=new products();
     $store_prod-> id_prod = Input::get("productid"); 
     $store_prod  -> co_cat_id = Input::get("productSelect");
     $store_prod -> name_product = Input::get("productname");
     $store_prod -> cost_product = Input::get("productprice"); 
     $store_prod -> characteristic = Input::get("comment"); 
     $store_prod ->save();  
      return redirect('adminpanel/storepicture');
     	   
   }
       public function storePicture(){
       	$product_items=products::all(['id_prod','name_product']);   
        return view('admin.storePicture', compact('product_items',$product_items));	   
   } 
    public function addPicture(Request $request){
    	if ($request->hasFile('picture')) {
    		$filename=$request->file('picture')->getClientOriginalName();
    		 $request->file('picture')->storeAs('public/img',$filename);

    		 $picture=new picture;
    		 $picture->path_pic=$filename;
    		 $picture->name_pic=$filename;
    		 $picture->id_prod=Input::get("productSelect");
    		 $picture->save();
    		 return redirect('adminpanel/storepicture');
    		# code...
    	}
       	 
   }
}
