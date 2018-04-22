 <div class="container">
 	<div class="row">
 		{!! Form::open(['route' => 'sort']) !!}
 		<div class="col-md-4">
 	     <p>Cортировать:</p>
 		  <div class="radio">
 		   <form action="name ">
             <label><input type="radio" name="optradio" value="cheap" checked>С начала дешевые
             </label>
         </div>
         <div class="radio">
           <label><input type="radio" name="optradio" value="expen">С начала дорогие</label>
          </div>
         {{Form::submit('Сортировать')}}
         {!! Form::close() !!}  
 		 </form>	 	
    </div>
 			