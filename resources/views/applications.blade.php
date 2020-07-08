<html>
<head>
    <title>Applications</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.js"></script>
</head>
<body>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Message</th>
        <th scope="col">Package ID</th>
        <th scope="col">Location</th>
    </tr>
    </thead>
    <tbody>
    @foreach($content as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->email}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->status}}</td>
            <td>{{$item->package_id}}</td>
            <td>{{$item->location}}</td>
        </tr>
        @endforeach

    {{--<tr>--}}
        {{--<th scope="row">2</th>--}}
        {{--<td>Jacob</td>--}}
        {{--<td>Thornton</td>--}}
        {{--<td>@fat</td>--}}
    {{--</tr>--}}
    {{--<tr>--}}
        {{--<th scope="row">3</th>--}}
        {{--<td>Larry</td>--}}
        {{--<td>the Bird</td>--}}
        {{--<td>@twitter</td>--}}
    {{--</tr>--}}
    </tbody>
</table>


<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="js/aos.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</body>
</html>