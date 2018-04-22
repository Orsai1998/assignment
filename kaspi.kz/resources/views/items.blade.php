@extends('layouts.app')
@section('title')
@section('header')
 @parent
@endsection
@section('slider')
@endsection
@section('content')
  <section class="main_content">
       <div class="container">
            <div class="row">
               <div class="col-xs-4 item-photo">
                    <img style="max-width:50%;" src="storage/img/{{$items->picture->path_pic}}" />
                </div>
                <div class="col-xs-5" style="border:0px solid gray">
                    <!-- Datos del vendedor y titulo del producto -->
                    <h3>{{$items->name_product}}</h3>    
                    <h6 class="title-price"><small>Цена:</small></h6>
                    <h3 style="margin-top:0px;">{{$items->cost_product}}тг</h3>
                    <div class="section">
                        <h6 class="title-attr" style="margin-top:15px;" ><small>Цвет</small></h6>                    
                        <div>
                            <div class="attr" style="width:25px;background:#5a5a5a;"></div>
                            <div class="attr" style="width:25px;background:white;"></div>
                        </div>
                    </div>  
                    <div class="section" style="padding-bottom:20px;">              
                        <div>
                            <div class="btn-minus"><span class="glyphicon glyphicon-minus"></span></div>
                            <input value="1" />
                            <div class="btn-plus"><span class="glyphicon glyphicon-plus"></span></div>
                        </div>
                    </div>                
        
                    <!-- Botones de compra -->
                    <div class="section" style="padding-bottom:20px;">
                        <button class="btn btn-success"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>В корзину</button>
                    </div>                                        
                </div>                              
        
<div class="col-xs-9">
   <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Характеристика</a></li>
    <li><a data-toggle="tab" href="#menu1">Отзывы</a></li>
   </ul>
  <div class="tab-content">
   <div id="home" class="tab-pane fade in active">
    <p>{{$items->characteristic}}</p>
   </div>
  <div id="menu1" class="tab-pane fade">
    <div class="feedback">
         @foreach($items->feedbacks as $commen)
        <div class="show-feed">
        <div class="container">
            <div class="row">                
                <div class="col-md-3">
                    <div class="name">
                     <span class="name_user"><b>{{$commen->name}}</b></span> 
                   </div>

                </div>                
                <div class="col-md-6">
                   <div class="feedbackOfUser">
                          {{$commen->message}}
                   </div>
                   
                </div>                
            </div>
        </div>
        </div>
        @endforeach
  </div>
  </div>
</div>
<form class="form-horizontal" id="ajax"  method="post">
     {{ csrf_field() }}
          <fieldset>
            <legend class="text-center">Оставить отзыв</legend>
            <div class="form-group">

              <label class="col-md-3 control-label" for="name">Ваше имя:</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Ваше имя" class="form-control">
              </div>
            </div>
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Ваш отзыв:</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Введите ваш отзыва о этом продукте" rows="5"></textarea>
              </div>
            </div> 
            {{ Form::hidden('id_for', $items->id_prod) }}
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg feedback_submit">Отправить</button>
              </div>
            </div>
          </fieldset>
          </form>
</div>      
            </div>
        </div> 
  </section>
@endsection