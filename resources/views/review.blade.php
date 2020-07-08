@extends('layout.master')
@section('title')
    Contact
@endsection
@section('content')
    <link rel="stylesheet" href="css/reviewStyle.css">

    <div class="fluid-container" style="height: 100%">
        <div class="reviewParalax text-center" style="padding: 25%">
            <blockquote class="textStyle2 my-auto">
                <h2 class="font-weight-bold">WEST MIDLANDS PHOTOGRAPHER OF THE YEAR</h2>
                <footer>-ENGLISH WEDDING AWARDS</footer>
            </blockquote>
        </div>
    </div>
    <div class="container mt-5" >
        <div id="textSlide" class="carousel slide "  data-aos="fade-up" data-ride="carousel">
            <div class="carousel-inner h-100">
                <div class="carousel-item active px-5" style="text-align: center">
                    <p style="background-color: #fffdf5; height: 110px">

                    </p>
                </div>
                @foreach($con as $item)
                    <div class="carousel-item   px-5" style="text-align: center">
                        <p style="background-color: #fffdf5; height: 110px ;padding-top: 3%">
                            {{$item->content}}
                        </p>
                    </div>
                @endforeach


                {{--<div class="carousel-item px-5">--}}
                    {{--<p style="background-color: #fffdf5; height: 110px">--}}
                        {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis quam, quidem? Autem debitis--}}
                        {{--deleniti dolor eligendi, facilis necessitatibus neque numquam quibusdam voluptatem voluptatibus.--}}
                        {{--Cum deserunt, enim exercitationem id maxime praesentium?--}}
                    {{--</p>--}}
                {{--</div>--}}
            </div>
            <a class="carousel-control-prev" href="#textSlide" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#textSlide" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
        <div class="row justify-content-center mt-3"  data-aos="fade-up">
            <h1 class="textStyle">Write a review</h1>
        </div>
        <div class="col-md py-5"  data-aos="fade-up">
            <form action="/add" method="post">
                @csrf
                <div class="form-row">
                    <div class="col mb-3">
                        <input required type="email" class="form-control textStyle" placeholder="E-mail" for="email" name="email">
                        <p style="color: red;font-family: Calibri;font-size: 14px">{{$message}}</p>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col mb-3">
                        <textarea required class="form-control textStyle" placeholder="Review" rows="8" for="data" name="data"
                                  style="resize: none"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-dark textStyle" style="border-color: #584009">Submit
                </button>
                <a data-toggle="modal"
                   data-target="#createAccountForm"> | Make New Account</a>
            </form>
        </div>
    </div>


    {{--Create account modal--}}
    <div class="modal" id="createAccountForm" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title textStyle">Creat account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="fluid-container">
                        <div class="row">
                            <div class="col-md">
                                <form action="/addmember" method="post">
                                    @csrf
                                    <div class="form-row mb-3">
                                        <div class="col">
                                            <input required type="text" class="form-control textStyle"
                                                   placeholder="Full name" for="name" name="name">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col mb-3">
                                            <input required type="email" class="form-control textStyle"
                                                   placeholder="E-mail" for="email" name="email">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col mb-3">
                                            <input required type="password" class="form-control textStyle"
                                                   placeholder="Password" for="password" name="password">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col mb-3">
                                            <input required type="text" class="form-control textStyle"
                                                   placeholder="Phone number" for="phone" name="phone">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col mb-3">
                                            <input required type="text" class="form-control textStyle"
                                                   placeholder="Address" for="address" name="address">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <button type="submit" class="btn btn-outline-dark w-50 mx-auto textStyle"
                                                 style="border-color: #584009">
                                            Sign up
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
@endsection
