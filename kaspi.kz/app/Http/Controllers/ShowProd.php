<?php

namespace App\Http\Controllers;
use App\products;
use App\picture;
use App\feedback;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ShowProd extends Controller
{
	/* public function store(Request $request)
    {
        $products=new laravel();
        $products-> name = Input::get("name"); 
        $products->value=Input::get("value"); 
        $products ->save();
    }*/
      public function index() {
        
    }
    public function showProducts()
    {
    	$product = products::paginate(4);

        return view ('index')->with('product',$product);
    	
    }
     public function showPagination()
    {
        $product = products::paginate(4);
        return view ('product',['product'=> $product]);
        
    }
  
     public function show($id_prod)
    {
    	$items=products::find($id_prod);
    	return view('items',['items' => $items]);
    }	
   public function sort(Request $request) {
        $order = $request->get('order');
        $prodct = products::orderBy('cost_product', $order)->get();
        return view('include.sort', ['prodct' => $prodct])->render();
//        
      }

      
      
}
