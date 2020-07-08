@extends('layout.master')
@section('title')
    Sessions Gallery
@endsection

@section('content')

        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1, maximum-scale=1.0, user-scalable=no">
        <script src="js/spotlight.bundle.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/theme.css">



        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1, maximum-scale=1.0, user-scalable=no">
        <script src="js/spotlight.bundle.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/theme.css">
        {{--    <link rel="stylesheet" href="css/weddingPortfolio.css">--}}
        {{--    <div class="container">--}}
        {{--        <div class="row">--}}
        <div style="margin-top: 5%">  <span style="color: #ba8b00;font-size: 40px;font-family: Forte;margin-left:0%">Sessions Gallery</span></div>
        {{--        </div>--}}
        <p style="padding-right: 5%;padding-left: 5%;; text-align: center;font-family: Tw Cen MT;font-style: normal;color: #584009;">Hello, I’m Omarr and I am a Photographer. I specialise in natural, beautiful story telling ~ I love to capture events as they happen, creatively and artistically documenting real memories whilst staying as invisible as possible. You’ll find no cheese or gimmicks here, no awkward poses or hours of stuffy formals; but simply heartfelt, organic, authentic Wedding and Family Photography, full of light, love, laughter and happiness.

        </p>

        <div style="margin-top: 3%; width: 100%">
            <p class="spotlight-group" >
                {{--        <b>Anchors &amp; Images</b>--}}
                @foreach($contentt as $item)
                    @if($item->package_id==2)
                        <a class="spotlight"  data-aos="zoom-in-right" href="{{$item->path}}" data-description="{{$item->description}}">
                            <img src="{{$item->path}}" alt="{{$item->title}}" class="image">
                        </a>
                    @endif
                @endforeach
                {{--<a class="spotlight"  data-aos="zoom-in-right" href="images/41331775_2167493540133369_5297874045453205504_n.jpg" data-description="Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.">--}}
                    {{--<img src="images/41331775_2167493540133369_5297874045453205504_n.jpg" alt="Lorem ipsum dolor sit amet">--}}
                {{--</a>--}}
                {{--<a class="spotlight" data-aos="zoom-out" href="images/41331775_2167493540133369_5297874045453205504_n.jpg">--}}
                    {{--<img src="images/41331775_2167493540133369_5297874045453205504_n.jpg">--}}
                {{--</a>--}}
                {{--<a class="spotlight" data-aos="zoom-out" href="images/41331775_2167493540133369_5297874045453205504_n.jpg">--}}
                    {{--<img src="images/41331775_2167493540133369_5297874045453205504_n.jpg">--}}
                {{--</a>--}}
                {{--<a class="spotlight" data-aos="zoom-in-left" href="images/41331775_2167493540133369_5297874045453205504_n.jpg">--}}
                    {{--<img src="images/41331775_2167493540133369_5297874045453205504_n.jpg">--}}
                {{--</a>--}}
                {{--<a class="spotlight" data-aos="zoom-in-right" href="images/41331775_2167493540133369_5297874045453205504_n.jpg">--}}
                    {{--<img src="images/41331775_2167493540133369_5297874045453205504_n.jpg">--}}
                {{--</a>--}}
                {{--<a class="spotlight" data-aos="zoom-out" href="images/41331775_2167493540133369_5297874045453205504_n.jpg">--}}
                    {{--<img src="images/41331775_2167493540133369_5297874045453205504_n.jpg">--}}
                {{--</a>--}}
                {{--<a class="spotlight" data-aos="zoom-out" href="images/41331775_2167493540133369_5297874045453205504_n.jpg">--}}
                    {{--<img src="images/41331775_2167493540133369_5297874045453205504_n.jpg">--}}
                {{--</a>--}}
                {{--<a class="spotlight" data-aos="zoom-in-left" href="images/41331775_2167493540133369_5297874045453205504_n.jpg">--}}
                    {{--<img src="images/41331775_2167493540133369_5297874045453205504_n.jpg">--}}
                {{--</a>--}}
            </p>
        </div>

        </div>
        <script>

            const checkboxes = document.getElementsByTagName("input");

            const gallery = [{

                title: "Image 1",
                description: "This is a description.",
                src: "gallery/london-1758181.jpg"
            },{
                title: "Image 2",
                description: "This is a description.",
                src: "gallery/sea-1975403.jpg"
            },{
                title: "Image 3",
                description: "This is a description.",
                src: "gallery/newport-beach-2089906.jpg"
            }];

            window.showGallery = function(index){

                Spotlight.show(gallery, {

                    index: index,
                    theme: "dark",
                    animation:  [
                        checkboxes[0].checked && checkboxes[0].value,
                        checkboxes[1].checked && checkboxes[1].value,
                        checkboxes[2].checked && checkboxes[2].value,
                        checkboxes[3].checked && checkboxes[3].value
                    ]
                });
            };

        </script>
@endsection
