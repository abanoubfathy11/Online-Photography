<?php
//
//namespace App\Http\Middleware;
//
//use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
//
//class VerifyCsrfToken extends Middleware
//{
//    /**
//     * The URIs that should be excluded from CSRF verification.
//     *
//     * @var array
//     */
//    protected $except = [
//        'stripe/*',
//        'http://example.com/foo/bar',
//        'http://example.com/foo/*',
//    ];
//}
//?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        Admin
    </title>
    <link rel="stylesheet" href="css/controlPanel.css">


</head>
<body>
{{--<i class="fas fa-chevron-up"></i>--}}
<div class="header">
    <p class="t">Welcome andy,<br>
    </p>
    <p class="tt">You can edit your website and control it.</p>
    <a href="/uploadfile"><input class="insert" type="button" value="Add Photos"></a>
    <a href="/applications"><input class="insert" type="button" value="Show Appllications"></a>
</div>
<div class="home">
    <br>
    <h1>Home Page</h1>
    <form action="/update" method="post" accept-charset="UTF-8">
        @csrf
        <input type="hidden" for="id" name="id" value="{{$contenth->id}}"><br>

        <label for="banner1" name="banner1">banner 1 :</label>
        <input type="text" for="banner1" name="banner1" value="{{$contenth->banner1}}" required><br>

        <label for="banner2" name="banner2">banner 2 :</label>
        <input type="text" for="banner2" name="banner2" value="{{$contenth->banner2}}" required><br>

        <label for="banner3" name="banner3">banner 3 :</label>
        <input type="text" for="banner3" name="banner3" value="{{$contenth->banner3}}" required><br>

        <label for="banner4" name="banner4">banner 4 :</label>
        <input type="text" for="banner4" name="banner4" value="{{$contenth->banner4}}" required><br>

        <label for="banner5" name="banner5">banner 5 :</label>
        <input type="text" for="banner5" name="banner5" value="{{$contenth->banner5}}" required><br>

        <label for="banner6" name="banner6">banner 6 :</label>
        <input type="text" for="banner6" name="banner6" value="{{$contenth->banner6}}" required><br>
        <input type="submit" class="btn">
        <a href="/"><input type="button" class="btnveiw" value="View"></a>

    </form>
</div>
<div class="information">
    <h1>Information Page</h1>
    <form action="/updateInfo" method="post" accept-charset="UTF-8">
        @csrf
        <input type="hidden" for="id" name="id" value="{{$contenti->id}}"><br>

        <label for="banner1" name="banner1">banner 1 :</label>
        <input type="text" for="banner1" name="banner1" value="{{$contenti->banner1}}" required><br>

        <label for="price1" name="price1">price &nbsp;&nbsp;&nbsp; 1 :</label>
        <input type="text" for="price1" name="price1" value="{{$contenti->price1}}" required><br>

        <label for="price2" name="price2">price &nbsp;&nbsp;&nbsp; 2 :</label>
        <input type="text" for="price2" name="price2" value="{{$contenti->price2}}" required><br>

        <label for="banner2" name="banner2">banner 2 :</label>
        <input type="text" for="banner2" name="banner2" value="{{$contenti->banner2}}" required><br>


        <input type="submit" class="btn">
        <a href="/Information"><input type="button" class="btnveiw" value="View"></a>

    </form>
</div>
<div class="contact">
    <h1>Contact Home</h1>
    <form action="/updatecontact" method="post" accept-charset="UTF-8">
        @csrf
        <input type="hidden" for="id" name="id" value="{{$contentc->id}}"><br>

        <label for="email" name="email">Email :</label>
        <input type="email" for="email" name="email" value="{{$contentc->email}}" required><br>

        <label for="address" name="address" >Address :</label>
        <input type="text" for="address" name="address" value="{{$contentc->address}}" required><br>

        <label for="phone" name="phone">phone :</label>
        <input type="text" for="phone" name="phone" value="{{$contentc->phone}}" required><br>


        <input type="submit" class="btn">
        <a href="/Contact"><input type="button" class="btnveiw" value="View"></a>

    </form>
</div>

</body>
</html>