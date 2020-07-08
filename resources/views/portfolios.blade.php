@extends('layout.master')
@section('title')
    Portfolios
@endsection

@section('content')

    <style>
        .btnStyle
        {
            font-family: Arial;
            color: white;
            border: 1px solid white !important;
        }
        .btnStyle:hover
        {
            background-color: #2f4e27;
            color:white !important;
        }
    </style>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


    <div style="text-align: center;"> <h1 style="font-family: Forte; color: #ba8b00">Portfolios</h1></div>

    <p style="color: #584009;text-align: center;padding-left:7%;padding-right:7%">Hello, I’m Omarr and I am a Photographer. I specialise in natural, beautiful story telling ~ I love to capture events as they happen, creatively and artistically documenting real memories whilst staying as invisible as possible. You’ll find no cheese or gimmicks here, no awkward poses or hours of stuffy formals; but simply heartfelt, organic, authentic Wedding and Family Photography, full of light, love, laughter and happiness.</p>
    </div>
    <br>
    <br>
    <div style="width: 100%;">
        <div class="col" style="
    padding-left: 0px;
    padding-right: 0px;">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" STYLE="">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" style="height: 700px">
                    <div class="item active" style="height: 700px">
                        <a href="/WeddingPortfolio"><img src="images/LRM_EXPORT_259131123405526_20190825_154202212.jpeg" alt="First slide"></a>
                        <div class="carousel-caption">
                            <h3><a class="btn btn-outline btnStyle" role="button" href="/WeddingPortfolio">Wedding Gallery</a></h3>
                            <p>
                                Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="item" style="height: 700px">
                        <a href="/SessionsPortfolio"><img src="images/LRM_EXPORT_406213129402360_20190804_031740612-1.jpeg" alt="Second slide"></a>
                        <div class="carousel-caption">
                            <h3><a class="btn btn-outline btnStyle" role="button" href="/SessionsPortfolio" >Sessions Gallery</a></h3>
                            <p>
                                Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="item" style="height: 700px">
                        <a href="/OtherPortfolio">  <img src="images/35652130_2093797597502964_3029159744318210048_o.jpg"  alt="Third slide"></a>
                        <div class="carousel-caption">
                            <h3><a class="btn btn-outline btnStyle" role="button" href="/OtherPortfolio">Others Gallery</a></h3>
                            <p>
                                Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
                                                                                 href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                        </span></a>
            </div>

        </div>
    </div>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    {{--    <div class="container-fluid">--}}
    {{--        <br><br><br>--}}
    {{--        <div class="row">--}}
    {{--        <div class="col">--}}
    {{--           <div style="text-align: center"> <h1 style="font-family: Forte; color: #ba8b00">Portfolios</h1></div>--}}

    {{--            <p style="color: #584009;text-align: center">Hello, I’m Omarr and I am a Photographer. I specialise in natural, beautiful story telling ~ I love to capture events as they happen, creatively and artistically documenting real memories whilst staying as invisible as possible. You’ll find no cheese or gimmicks here, no awkward poses or hours of stuffy formals; but simply heartfelt, organic, authentic Wedding and Family Photography, full of light, love, laughter and happiness.</p>--}}
    {{--        </div>--}}
    {{--        </div>--}}
    {{--        <br>--}}
    {{--        <div class="row" style="">--}}
    {{--             </div>--}}
    {{--    </div>--}}
    </div>

@endsection
