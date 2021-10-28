<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Decora | Home</title>

    <!-- Favicon  -->
    @include('binary/includes/icon')

    <!-- Core Style CSS -->
    @include('binary/includes/stylesheet')

</head>

<body>
    <!-- Search Wrapper Area Start -->
    @include('binary/includes/search_wrapper_area')
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        @include('binary/includes/mobile_nav_home')

        <!-- Header Area Start -->
        @include('binary/includes/header_area_first')
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li class="active"><a href="{{url('binary/home')}}">Home</a></li>
                    <li><a href="{{url('binary/shop')}}">Shop</a></li>
                    <li><a href="{{url('binary/product-details')}}">Product</a></li>
                    <li><a href="{{url('binary/cart')}}">Cart</a></li>
                    <li><a href="{{url('binary/checkout')}}">Checkout</a></li>
                </ul>
            </nav>
        @include('binary/includes/header_area_last')
        <!-- Header Area End -->

        <!-- Product Catagories Area Start -->
        <div class="products-catagories-area clearfix">
            <div class="amado-pro-catagory clearfix">

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="{{url('binary/shop')}}">
                        <img src="{{asset('binary/img/bg-img/1.jpg')}}" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $180</p>
                            <h4>Modern Chair</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="{{url('binary/shop')}}">
                        <img src="{{asset('binary/img/bg-img/2.jpg')}}" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $180</p>
                            <h4>Minimalistic Plant Pot</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="{{url('binary/shop')}}">
                        <img src="{{asset('binary/img/bg-img/3.jpg')}}" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $180</p>
                            <h4>Modern Chair</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="{{url('binary/shop')}}">
                        <img src="{{asset('binary/img/bg-img/4.jpg')}}" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $180</p>
                            <h4>Night Stand</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="{{url('binary/shop')}}">
                        <img src="{{asset('binary/img/bg-img/5.jpg')}}" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $18</p>
                            <h4>Plant Pot</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="{{url('binary/shop')}}">
                        <img src="{{asset('binary/img/bg-img/6.jpg')}}" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $320</p>
                            <h4>Small Table</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="{{url('binary/shop')}}">
                        <img src="{{asset('binary/img/bg-img/7.jpg')}}" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $318</p>
                            <h4>Metallic Chair</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="{{url('binary/shop')}}">
                        <img src="{{asset('binary/img/bg-img/8.jpg')}}" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $318</p>
                            <h4>Modern Rocking Chair</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="{{url('binary/shop')}}">
                        <img src="{{asset('binary/img/bg-img/9.jpg')}}" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $318</p>
                            <h4>Home Deco</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Product Catagories Area End -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Newsletter Area Start ##### -->
    @include('binary/includes/newsletter_area')
    <!-- ##### Newsletter Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('binary/includes/footer_area')
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    @include('binary/includes/jquery')

</body>

</html>