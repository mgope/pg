{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Room list</title>
</head> --}}

@extends('layouts.app')

@section('content')

<body>
    <div class="container">
        <div class="row">
            <div class="search mx-auto">
                <form action="/search_result" method="get">
                    <input type="text" name="filter[address]" id="address">
                    <input type="submit" value="Search" name="search">
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($rooms as $room)
            <div class="card m-2 d-flex justify-content-center" style="width:22%">
                <div class="thumbnail_index">
                    <?php
                        $imageString = "{$room->image}";
                        $images = (explode(" ",$imageString));
                    ?>
                    <img class="card-img-top" src="/storage/images/{{$images[0]}} " alt="Card image">
                </div>
                <div class="card-body">
                    <p class="card-text text-center">{{$room->contact}}</p>
                    <p class="card-text text-center">Number of seat: {{$room->total_vacancy}}</p>
                    <div class="row d-flex justify-content-center">
                        <div class="all">
                            <h3 class="card-text">₹ {{$room->room_rent}}</h3>
                        </div>
                        &nbsp
                        <div class="all2">
                            <a href="rooms/room/{{$room->id}}" class="btn btn-primary stretched-link">See Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>

    @endsection

    {{-- </body>

</html> --}}