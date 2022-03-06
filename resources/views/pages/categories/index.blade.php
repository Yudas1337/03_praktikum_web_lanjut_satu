@section('title', 'Halaman Kategori')
@extends('layouts.templates.main')
@section('main-content')
<div class="contactus">
    <div class="container-fluid">
             <div class="row">
                <div class="col-md-8 offset-md-2">
                   <div class="title">
                      <h2>Kategori Kami</h2>
                     
                   </div>
                </div>
             </div>
           </div>
 </div>
 <div class="ourproduct">
   <div class="container">
      <div class="row product_style_3" ">
       <!-- product -->
       <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
         <div class="full product">
           <div class="product_img">
             <div class="center"> <img src="{{ asset('assets/icon/p1.png') }}" alt="#"/>
               <div class="overlay_hover"> <a class="add-bt" href="{{ route('eduGames') }}">detail</a> </div>
             </div>
           </div>
           <div class="product_detail text_align_center">
             <p class="product_price">$679.89 <span class="old_price">$679.89</span></p>
             <p class="product_descr">Marbel Edu Games</p>
           </div>
         </div>
       </div>
       <!-- end product -->
       <!-- product -->
       <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
         <div class="full product">
           <div class="product_img">
             <div class="center"> <img src="{{ asset('assets/icon/p2.png') }}" alt="#"/>
               <div class="overlay_hover"> <a class="add-bt" href="{{ route('kidsGames') }}">detail</a> </div>
             </div>
           </div>
           <div class="product_detail text_align_center">
             <p class="product_price">$679.89 <span class="old_price">$679.89</span></p>
             <p class="product_descr">Marbel And Friends Kids Games</p>
           </div>
         </div>
       </div>
       <!-- end product -->
       <!-- product -->
       <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
         <div class="full product">
           <div class="product_img">
             <div class="center"> <img src="{{ asset('assets/icon/p3.png') }}" alt="#"/>
               <div class="overlay_hover"> <a class="add-bt" href="{{ route('storyBooks') }}">detail</a> </div>
             </div>
           </div>
           <div class="product_detail text_align_center">
             <p class="product_price">$679.89 <span class="old_price">$679.89</span></p>
             <p class="product_descr">Riri Story Books</p>
           </div>
         </div>
       </div>
       <!-- end product -->
        <!-- product -->
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
            <div class="full product">
              <div class="product_img">
                <div class="center"> <img src="{{ asset('assets/icon/p3.png') }}" alt="#"/>
                  <div class="overlay_hover"> <a class="add-bt" href="{{ route('kidsSongs') }}">detail</a> </div>
                </div>
              </div>
              <div class="product_detail text_align_center">
                <p class="product_price">$679.89 <span class="old_price">$679.89</span></p>
                <p class="product_descr">Kolak Kids Songs</p>
              </div>
            </div>
          </div>
          <!-- end product -->
     </div>
   </div>
 </div>
 @endsection