@extends('layout.master')
@section('title')
    Home
    @endsection







@section('content')
    <link rel="stylesheet" href="css/homeStyle.css">
    <!--51124261_2254050274811028_8374284803758882816_o.jpg-->
    <div class="parallax" data-parallax="scroll"
         data-z-index="1" data-image-src="images/LRM_EXPORT_259131123405526_20190825_154202212.jpeg" >
         {{--data-z-index="1" data-image-src="images/LRM_EXPORT_574503112214919_20190714_023050012.jpeg" >--}}
        <center>
            {{--<div id="top">--}}
                {{--Home--}}
            {{--</div>--}}
        </center>
    </div>
    <div class="banner1" data-aos="zoom-in-up">
        <img data-aos="fade-up" src="images/43fa7a37-ee68-4ca1-9949-6473b8e35407.jpg" style="height: 450px;width: 70%">
        <br><br>

        <p data-aos="fade-up">Award-Winning Wedding Photographer and Family Photographer based in Hereford, Herefordshire in Egypt</p>
        <br>
        <em>
            <p data-aos="fade-up">
                {{$content[0]->banner1}}</p>
            <br>
            <p data-aos="fade-up">Please explore my website and if you like what you see, please feel free to get in touch!  </p>
        </em>
    </div>
    <div class="parallax" data-parallax="scroll"
         data-z-index="1" data-image-src="images/35832651_2093797240836333_4004194969223954432_o.jpg"></div>
    <div class="banner2">
        {{--“A photographer with heart, and with a natural talent for creating honest, love-filled imagery.”--}}
        <p data-aos="fade-up" style="font-size: 30px">{{$content[0]->banner2}}</p>

        <img src="images/CaptureLine.PNG" style="width: 90%">
    </div>
    <div class="parallax" data-parallax="scroll"
         data-z-index="1" data-image-src="images/44450424_2189504867932236_9152727474172329984_o.jpg"></div>
    <div class="banner3">
        <div class="container">
            <div class="row"data-aos="fade-up">
                <div class="col-lg-4 col-sm-4 col-md-4" >
                    <img src="images/52478496_2262976060585116_2793425391920873472_n.jpg" style="width: 250px ;height: 250px;border-radius: 50%">
                </div>
                <div class="col-lg-4 col-sm-4 col-md-4" >
                    <img src="images/52591407_2265429073673148_5092215235905847296_o.jpg" style="width: 250px ;height: 250px;border-radius: 50%">
                </div>
                <div class="col-lg-4 col-sm-4 col-md-4" >
                    <img src="images/52765520_2265428863673169_7621301136108027904_n.jpg" style="width: 250px ;height: 250px;border-radius: 50%">
                </div>
            </div>
            <br>
            <div class="row" data-aos="fade-up">
                <div class="col-12">
                    <p align="left">I love to photograph the following: </p>
                </div>
                <ul>
                    <li>
                        <div class="col-12">
                            <p align="left"><b style="color: #ba8b00">Weddings</b> - <b style="color: #584009">part day or half day wedding story</b>-telling is my
                                the ideal choice for <b style="color: #584009">smaller or shorter day weddings,
                                    ceremony only</b>, or for people who want <b style="color: #584009">beautiful professional wedding photographs</b> but only want a photographer for the main part
                                of their wedding day.
                                I also offer the option to upgrade to longer / full day wedding coverage, on a few dates per year.</p>
                        </div>
                    </li>
                    <li>
                        <div class="col-12">
                            <b align="left"><b style="color: #ba8b00">Families</b> - <b style="color: #584009">small family shoots</b>large family gatherings</b> or <b style="color: #584009">smaller or shorter day weddings,
                                ceremony only</b>, whether it be a special occasion or just one for the album, on location at your home, in your holiday house, or out & about in the countryside.</p>
                        </div>
                    </li>
                    <li>
                        <div class="col-12">
                            <p align="left">New Babies - in the comfortable setting of your own home.</p>
                        </div>
                    </li>
                    <li>
                        <div class="col-12">
                            <p align="left">Christenings - just the ceremony or plus the celebrations afterwards too.</p>
                        </div>
                    </li>
                    <li>
                        <div class="col-12">
                            <p align="left">Couples and Engagement Shoots in the countryside.</p>
                        </div>
                    </li>
                    <li>
                        <div class="col-12">
                            <p align="left">Single.</p>
                        </div>
                    </li>
                    <li>
                        <div class="col-12">
                            <p align="left">I also enjoy shooting beautiful website brand images for creative small businesses, as well as stylish homes and property interiors.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-12">
                    <img src="images/CaptureLine.PNG" style="width: 90%">
                </div>
            </div>
        </div>
    </div>
    <div class="parallax" data-parallax="scroll"
         data-z-index="1" data-image-src="images/LRM_EXPORT_574503112214919_20190714_023050012.jpeg"></div>
    <div class="banner4">

        <p data-aos="fade-up">“<b>WEST MIDLANDS PHOTOGRAPHER OF THE YEAR</b>” ~ <em>ENGLISH WEDDING AWARDS</em></p>
        <p data-aos="fade-up">“<b>WEST MIDLANDS BEST WEDDING PHOTOGRAPHER</b>” ~ <em>WEDDING INDUSTRY AWARDS</em></p>

        <img src="images/CaptureLine.PNG" style="width: 90%">
    </div>
    <div class="parallax" data-parallax="scroll"
         data-z-index="1" data-image-src="images/LRM_EXPORT_406213129402360_20190804_031740612-1.jpeg"></div>
    <div class="banner5">

        <p data-aos="fade-up" style="font-size: 30px">{{$content[0]->banner5}}</p>

        <img src="images/CaptureLine.PNG" style="width: 90%">
    </div>
    <div class="parallax" data-parallax="scroll"
         data-z-index="1" data-image-src="images/24291769_1994429180773140_4368179964791707742_o.jpg">

    </div>
    <div class="banner6">

        <p data-aos="fade-up" style="font-size: 30px">{{$content[0]->banner6}}</p>

        <img src="images/CaptureLine.PNG" style="width: 90%">
    </div>
    <div class="parallax" id="footer" data-parallax="scroll"
         data-z-index="1" data-image-src="images/41266478_2167493616800028_8273557057479639040_o.jpg"></div>
    @endsection

