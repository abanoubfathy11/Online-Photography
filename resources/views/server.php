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
                <form>
                    <div class="form-row">
                        <div class="col">
                            <input required type="text" class="form-control textStyle" placeholder="First name">
                        </div>
                        <div class="col mb-3">
                            <input required type="text" class="form-control textStyle" placeholder="Last name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col mb-3">
                            <input  required type="email" class="form-control textStyle" placeholder="E-mail">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col mb-3">
                            <select required class="form-control textStyle">
                                <option disabled selected>Select your package</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col mb-3">
                            <textarea class="form-control textStyle" placeholder="Message" rows="5" style="resize: none"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-dark textStyle" style="border-color: #584009">Submit</button>
                </form>
            </div>
            <div class="col-md-4 py-5">
                <div class="rounded textStyle" style="background-color: #fffdf5; height: 100%">
                    <h1 class="text-center">Contact info</h1>
                    <h3 class="text-center">Address</h3>
                    <p class="text-center">Cairo, Egypt</p>
                    <h3 class="text-center">E-mail</h3>
                    <p class="text-center">project@project.com</p>
                    <h3 class="text-center">Phone number</h3>
                    <p class="text-center">0100 000 0000</p>
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
