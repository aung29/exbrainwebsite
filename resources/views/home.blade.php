@extends('layouts.app')


@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@section('content')


    <section>
        <div class="container-fluid">
            <div class="row blogs">
                {{-- <div class="col-lg-7 col-md-7"> --}}
                {{-- <div class="image-container">
                        <img src="{{ url('image/Blob Shape.png') }}" alt="" class="vectors">
                    </div> --}}
                <div class="text-content">
                    <div class="art-log">
                        <p class="title1">PROGRAMMING is an <span class="art">ART.....</span>
                        </p>
                    </div>
                    <div class="artist-log">
                        <p class="title2">WE are <span class="artist"> ARTIST...</span></p>
                    </div>
                </div>
                <div class="dialogue-log ">
                    <p class="dialogue">“You might not think that programmers are artists, but programming is an extremely
                        creative profession. It’s logic-based creativity.”
                    </p>
                    <p class="dialo">– John Romero</p>
                </div>

            </div>
            {{-- <div class="col-lg-5 col-md-5">
                  
                    {{-- <div class="image-container2"> --}}
            {{-- <img src="{{ url('image/earth.png') }}" alt="" class="image-fluid vector"> --}}
            {{-- </div> --}}
            {{-- </div> --}}
        </div>
        </div>
    </section>


    <section>

        <div class="container-fluid">
            <h1 class="text-center mt-3 service">Services</h1>


            <div class="container mb-2">
                <div class="card cards">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-md-10 mt-5 text-center p-5 mx-auto">
                            <h1 class="text-light"> <i class="fas fa-chalkboard-teacher"></i></h1>
                            <span class="header-span text-light">Japanese & IT Professional </span>
                            <span class="text-light">Training Center</span>
                            <p class="text-light">(Online & In-Class)</p>
                            <button class="btn service-btn mt-2">See Courses</button>
                        </div>
                        <div class="col-lg-4 col-md-4 col-md-10 mt-5 text-center p-5 mx-auto">
                            <h1 class="text-light"> <i class="fa-solid fa-display"></i></h1>
                            <span class="header-span text-light">Software Development</span>
                            <span class="text-light">&</span>
                            <p class="text-light">Services</p>
                            <button class="btn service-btn2 mt-2">Our Services</button>
                        </div>
                        <div class="col-lg-4 col-md-4 col-md-10 mt-5 text-center p-5 mx-auto">
                            <h1 class="text-light"> <i class="fas fa-chalkboard-teacher"></i></h1>
                            <span class="header-span text-light">Japanese & IT Professional </span>
                            <span class="text-light">Training Center</span>
                            <p class="text-light">(Online & In-Class)</p>
                            <button class="btn service-btn mt-2">See Courses</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>



    <section>
        <div class="container-fluid">
            <h1 class="text-center mt-5 service">About Us</h1>



            <div class="card bgs">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-5 mx-auto text-center">
                        <div class="about-image">
                            <img src="{{ asset('image/aboutus.png') }}" class="images-about" alt="">
                        </div>
                    </div>
                    <div
                        class="col-lg-5 col-md-5 col-sm-4 mx-auto text-center d-flex justify-content-center align-items-center">
                        <div class="about-image2">
                            <img src="{{ asset('image/undraw.png') }}" class="image-undraw" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section >

        
        <h1 class="text-center mt-5 service ">Student Mini Project</h1>

        <div class="container-fluid covers-mini">
            <div class="container col-4 mx-auto margint">
                <p class="text-light fonts"> Let's Play</p>

                <div class="box"></div>
                <div class="arrow">
                    <img src="{{ asset('image/arrow.png') }}" alt="">
                </div>
                
                {{-- <img src="{{ asset('image/minipj.png') }}" alt="" class="cover-mini"> --}}
            </div>

            <div class="container col-10  mt-5 mb-5">
                <div class="oval col-10">

                    <div class="progress-curve col-10 mt-5">
                        <div>
                            <div class="game1">
                                <span>Monopoli</span>
                                <strong>Game</strong>
                            </div>
                            <div class="circle1"></div>
                        </div>
                        <div>
                            <div class="game2">
                                <span>Underwater</span>
                                <strong>Animation</strong>
                            </div>
                            <div class="circle2"></div>
                        </div>
                       
                        <div>

                            <div class="game3">
                                <span>Bingo</span>
                                <strong>Game</strong>
                            </div>
                            <div class="circle3"></div>
                        </div>


                        <div>
                            <div class="game4">
                                <span>Shopping Cart</span>
                                <strong>Online Shop</strong>
                            </div>
                            <div class="circle4"></div>
                        </div>
                       

                       
                    </div>
                
                    </div>
                   
                </div>
               
                
    
    
            </div>







    </section>

    
    <section>
        
       
                <h1 class="text-center mt-3 service">Contact Us</h1>
               
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-5 col-sm-4">
                            <div class="progress-down"></div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-5">
                            <div class="form-container">
                                <form action="" >
                                   <div class="form-group col-auto mt-3 ">
                                       <input type="text" name=""  id="" class="form-control mt-2 inputs">
                                   </div>

                                   <div class="form-group col-auto mt-3">
                                    <input type="text" name="" id="" class="form-control inputs">
                                </div>

                                <div class="form-group col-auto mt-3">
                                    <input type="text" name="" id="" class="form-control inputs">
                                </div>

                                <div class="form-group col-auto mt-3">
                                  <textarea name=""  id="" class="form-control inputs" cols="30" rows="10"></textarea>
                                </div>

                                <button type="submit"  class="btn ">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="contacts">
                </div>

            

            

    </section>

    <section>
        <div class="container-fluid">
            <h1 class="text-center mt-5 service">About Us</h1>
        </div>
    </section>
@endsection
