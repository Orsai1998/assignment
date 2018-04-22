@extends('layouts.app')
@section('title')
@section('header')
 @parent
@endsection
@section('slider')
@endsection
@section('content')
 <div class="container">
 	<div class="row">
 		<div class="col-md-4">
 		   <div class="radio">
 		   	  <div>
                Сортировать по :
                <button class="btn btn-outline-warning sort" data-order="asc">Возрастанию</button>
                <button class="btn btn-outline-warning sort" data-order="desc">Убыванию</button>
            </div>
            </div>
 		</div>
 			<div class="container">
 				<div class="col-md-8 sorted">
 					<div class="block">
 							  @foreach($product->chunk(10) as $prodct)
 				<div class="row">
 					<div class="productsblock">
 							@include('include.sort')
 						</div> 						
 					</div>
 				  @endforeach
 				   {{$product->links()}}
 					</div>				
 				</div>
 		</div>
 </div>
 </div>
@endsection
