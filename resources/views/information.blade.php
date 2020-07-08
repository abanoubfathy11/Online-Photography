@extends('layout.master')
@section('title')
    Information
    @endsection

@section('content')
    <link rel="stylesheet" href="css/infoStyle.css">
    <div class="hamada">
        <table>
            <tr>
                <td colspan="3">
                    <div>
                        <video width="100%" height="520" autoplay controls >
                            <source src="images/10000000_1117227698472260_1226480284179904740_n.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </td>
            </tr>
            <tr>
                {{--“Thank you again so much for bringing your enormous talent, your calming presence and your sharp eye for a laughing crowd or--}}
                {{--a sweet tender moment to our wedding!--}}
                {{--We are beyond delighted with all of our photos! They are more beautiful than we dreamed! You’re amazing Andy!”--}}
                <td colspan="3">
                    <div class="info">
                        <p data-aos="fade-up" style="font-size: 30px">
                            {{$content[0]->banner1}}
                            </p>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <a href="/WeddingPortfolio"><button type="button" class="btn btn-secondary btn-lg">Wedding</button></a> |
                    <a href="/SessionsPortfolio"><button type="button" class="btn btn-secondary btn-lg">Sessions</button></a> |
                    <a href="/OtherPortfolio"><button type="button" class="btn btn-secondary btn-lg">Others</button></a>
                    <br>
                    <br>
                    <img src="images/CaptureLine.PNG" style="width: 40%">
                    <br>
                    <br>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <img src="images/41087746_2167493683466688_2965327712731791360_o.jpg" width="40%" height="400"data-aos="zoom-in">
                    <img src="images/32072914_2070845666464824_5640252526004535296_o.jpg" width="40%" height="400"data-aos="zoom-in">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="pack" data-aos="fade-up">
                        <p>WEDDINGS, CELEBRATIONS & ELOPEMENTS</p>
                        {{--Prices from 350LE - 950LE--}}
                        {{$content[0]->price1}}
                    </div>
                    <div class="pack" data-aos="fade-up">
                        <p>COUPLES, BABIES, FAMILIES & CHRISTENINGS</p>
                        {{--Prices from 250LE--}}
                        {{$content[0]->price2}}
                    </div>
                    <img src="images/CaptureLine.PNG" style="width: 40%">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="advice" data-aos="zoom-in">
                        {{--“Oh my goodness!! Thank you so so much for our beautiful photographs of our wedding! Words can’t describe how perfectly you captured our day, they are wonderfully composed and pure happiness just jumps out of the photos! We love them so much!--}}
                        {{--You were a complete professional and extremely discrete and honestly we have the best wedding photos we could have wished for. They are full of life and tell our story perfectly! Thank you so so much again! We can’t stop looking at them now :)”--}}
                        {{$content[0]->banner2}}
                    </div>
                    <img src="images/CaptureLine.PNG" style="width: 40%">
                </td>
            </tr>
        </table>

    </div>
    @endsection
