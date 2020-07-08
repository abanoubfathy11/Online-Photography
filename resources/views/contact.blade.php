@extends('layout.master')
@section('title')
    Contact
@endsection
@section('content')
    <link rel="stylesheet" href="css/contactStyle.css">

    <div class="fluid-container" style="height: 100%">
        <div class="contactParalax"></div>
        <div class="row no-gutters mt-5 justify-content-center textStyle" data-aos="fade-up">
            <div>
                <h1>Contact us</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" data-aos="fade-up">
            <div class="col-md-8 py-5">
                <form action="/addnew" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="col mb-3">
                            <input  required type="email" class="form-control textStyle" placeholder="E-mail" for="email" name="email">
                            <p style="color: red;font-family: Calibri;font-size: 14px">{{$message}}</p>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col mb-3">
                            <input  required type="password" class="form-control textStyle" placeholder="Password" for="password" name="password">
                            <p style="color: red;font-family: Calibri;font-size: 14px">{{$messagep}}</p>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col mb-3">
                            <input  required type="text" class="form-control textStyle" placeholder="Phone Number" for="phone" name="phone">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col mb-3">
                            <input  required type="text" class="form-control textStyle" placeholder="Location" for="location" name="location">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col mb-3">
                            <select required class="form-control textStyle" for="package_id" name="package_id">
                                <option disabled selected value="">Select package</option>
                                <option value="1" >1- Wedding</option>
                                <option value="2">2- Sessions</option>
                                <option value="3">3- Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col mb-3">
                        <textarea required class="form-control textStyle" placeholder="Message" rows="8" for="status" name="status"
                                  style="resize: none"></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-outline-dark textStyle" id="btnStyle" style="border-color: #584009">Submit</button>
                    <a data-toggle="modal"
                       data-target="#createAccountForm"> | Make New Account</a>
                </form>
            </div>
            <div class="col-md-4 py-5">
                <div class="rounded textStyle" style="background-color: white; height: 100%">
                    <h1 class="text-center">Contact info</h1>
                    <h3 class="text-center">Address</h3>
                    <p class="text-center">{{$content->address}}</p>
                    <h3 class="text-center">E-mail</h3>
                    <p class="text-center">{{$content->email}}</p>
                    <h3 class="text-center">Phone number</h3>
                    <p class="text-center">{{$content->phone}}</p>
                </div>
            </div>
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
