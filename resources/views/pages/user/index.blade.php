@extends('layouts.user.main')
@section('content')
    <!-- Start Banner Area -->
     <section class="banner-area">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-start">
                <div class="col-lg-12">
                    <div class="">
                        <!-- single slide -->
                         <div class="row">
                            <div class="col-lg-5 col-md-6">
                                <div class="banner-content">
                                    <h1>Nike New <br>Collection!</h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, hic?</p>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="banner-img">
                                    <img src="{{ asset('assets/templates/user/img/banner/banner-img.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
     <!-- End Banner Area -->

     <!-- Start Product Area -->
      <section class="section_gap">
        <!-- single Product slide -->
         <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Latest Products</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem praesentium eligendi sint nulla sed eveniet!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single Product -->
                 <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img src="{{asset('assets/templates/user/img/product/p1.jpg')}}" alt="" class="img-fluid">
                        <div class="product-details">
                            <h6>Adidas New Hammer sole for Sports Person</h6>
                            <div class="price">
                                <h6>$150.00</h6>
                                <h6 class="l-through">$210.00</h6>
                            </div>
                            <div class="prd-bottom">
                                <a href="" class="social-info">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">add to bag</p>
                                </a>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
         </div>
      </section>
      <!-- end product Area -->

@endsection