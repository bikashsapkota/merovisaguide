<style type="text/css">
    
/*======================
    404 page
=======================*/


.page_404{ padding:40px 0; background:#fff; font-family: 'Arvo', serif;
}

.page_404  img{ width:100%;}

.four_zero_four_bg{
 
 background-image: url(/img/funny.gif);
    height: 400px;
    background-repeat: no-repeat;
    background-position: center;
 }
 
 
 .four_zero_four_bg h1{
 font-size:80px;
 }
 
  .four_zero_four_bg h3{
             font-size:80px;
             }
             
             .link_404{          
    color: #fff!important;
    padding: 10px 20px;
    background: #39ac31;
    margin: 20px 0;
    display: inline-block;}
    .contant_box_404{ margin-top:-50px;}
</style>
@extends('layouts.post.app')
@section('content')
<div class="wrapper wrapper-content  animated fadeInRight article" style="margin-top: 10%">
<section class="page_404">
    <div class="container">
        <div class="row">   
        <div class="col-sm-12 ">
        <div class="col-sm-10 col-sm-offset-1  text-center">
        <div class="four_zero_four_bg" align="center">
            <h1 class="text-center ">404</h1>
    
        </div>
        
        <div class="contant_box_404" align="center">
        <h3 class="h2">
        Look like you're lost
        </h3>
        
        <p>the page you are looking for not avaible!</p>
        <p>Only Rajesh Dai can find it, we can't</p>
        
        <a href="/" class="link_404">Go to Home</a>
    </div>
        </div>
        </div>
        </div>
    </div>
</section>
</div>
@endsection
