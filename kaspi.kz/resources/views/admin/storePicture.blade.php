@extends('layouts.admin_layouts.admin_design')
@section('content')
<!--main-container-part-->
<div id="content">
<div class="container-fluid">
  <div class="row-fluid">
       <div class="col-md-6">
    <h1>Add Picture</h1>
    </div>
<div class="row-fluid"> 
  <div class="col-md-12">
     <form role="form" method="POST" action="addpicture" enctype="multipart/form-data">
      {{ csrf_field() }}
       <select class="form-control" name="productSelect" id="productSelect"><option>Please Select a Product Category</option>
        @foreach($product_items as $prod)
        <option value="{{$prod->id_prod}}" id="option">{{$prod->name_product}}</option>
        @endforeach
       </select>   
      <div class="form-group">
        <label class="control-label">Product Image</label>
        <input class="filestyle" name="picture" data-icon="false" type="file">
      </div>
       <div class="form-group">      
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