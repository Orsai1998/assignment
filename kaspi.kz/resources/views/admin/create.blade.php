@extends('layouts.admin_layouts.admin_design')
@section('content')
<!--main-container-part-->
<div id="content">
<div class="container-fluid">
  <div class="row-fluid">
       <div class="col-md-6">
    <h1>Add Product</h1>
    </div>
<div class="row-fluid"> 
  <div class="col-md-12">
     <form role="form" method="POST" action="store">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="productname" class="loginFormElement">ID of product</label>
        <input class="form-control" name="productid" id="productid" type="text">
       </div> 
       <select class="form-control" name="productSelect" id="productSelect"><option>Please Select a Product Category</option>
        @foreach($categories as $cat)
        <option value="{{$cat->id_cat}}" id="option">{{$cat->name_cat}}</option>
        @endforeach
       </select>   
       <div class="form-group">
        <label for="productname" class="loginFormElement">Name of product</label>
        <input class="form-control" name="productname" id="productname" type="text">
       </div>    
       <div class="form-group">
         <label for="productprice" class="loginFormElement">Product Price</label>
         <input class="form-control" name="productprice" id="productprice" type="text">
       </div> 
       <div class="form-group">
        <label class="loginformelement" for="productdescription">Product Description</label>
         <textarea class="form-control" name="comment" rows="10" id="comment"></textarea>
        <div class="container">
    </div>
    <button type="submit" id="loginSubmit" class="btn btn-success loginFormElement">Add Product</button>
    </div>
  </form>
    </div>
  
    </div>

  </div>
</div>
</div>
@endsection

<!--end-main-container-part-->