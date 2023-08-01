@extends('layouts.main')

@section('bgfooter')

    <style>
        a:link {
            color: #fae100;
            background-color: transparent;
            text-decoration: none;
        }
        a:hover {
            color: rgb(66, 66, 66);
            background-color: transparent;
            text-decoration: none;
        }

        a:active {
            color: #fae100;
            background-color: transparent;
            text-decoration: none;
        }
    </style>

    
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4 col-sm-12 mt-5" style="font-family: Open Sans, sans-serif">
                    <h1 style="color:#fae100">ABOUT US</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit, maxime blanditiis! Similique voluptate dolorum eum?</p>
                     <a href="/about">Read more →</a>
                </div>
                <div class="col-md-4  col-sm-6">                     
                </div>
                 <div class="col-md-4  col-sm-6 mt-5" style="font-family: Open Sans, sans-serif">
                    <h1 style="color:#fae100">REACH US</h1>
                     <div class="footer-address">
                        <p>Jl. Raya Mulyosari, Surabaya</p>
                        <p>Phone: 085291567789</p>
                        <p>support@depotbratasena.com</p>
                     </div>
                 </div>
            </div>
        </div>     
   
@endsection

@section('container')

    <style class="about">
        a:link {
            color: #fae100;
            background-color: transparent;
            text-decoration: none;
        }
        a:hover {
            color: rgb(66, 66, 66);
            background-color: transparent;
            text-decoration: none;
        }

        a:active {
            color: #fae100;
            background-color: transparent;
            text-decoration: none;
        }
    </style>

    <section class="about">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-5">
                    <img src="../image/soto.jpg" class="img-responsive" alt="logo" style="width: 95%">
                </div>
                <div class="col-md-7 text-left">
                    <h2 class="text-left">Our Story</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passage</p>
                    <button type="button" class="btn" onclick="location.href='/menu'"><strong>See Our Menu</strong></button>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('background-image1')

    <style>

        .dfg{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, 90%);
            color:rgba(243, 243, 243, 0.582);
        }

    </style>

    <div class="centered">
        <p style="font-size: 70px ">
          <strong>ABOUT US</strong>
        </p>
    </div>
    <div class="dfg">
        <h1 style="font-size: 33px ">
            Read our story. How we started
        </h1>
    </div>
@endsection