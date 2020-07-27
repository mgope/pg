<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Room details</title>

    <style>
        .thumbnail {
            position: relative;
            width: 550px;
            height: 350px;
            overflow: hidden;
        }

        .thumbnail img {
            position: absolute;
            left: 50%;
            top: 50%;
            height: 100%;
            width: auto;
            transform: translate(-50%, -50%);
            /* -webkit-transform: translate(-50%, -50%); */
            /* -ms-transform: translate(-50%, -50%); */
        }

        .thumbnail img.portrait {
            width: 100%;
            height: auto;
        }
    </style>

</head>

<body>
    <div class="margin mt-5">

    </div>
    <br>
    <div class="container pt-4">
        <div class="row">
            <div class="col-lg-7">
                <div class="sticky-top thumbnail">
                    <img class="card-img-top  shadow" src="/storage/images/{{$room->image}} " alt="Card image">
                </div>
            </div>

            <div class="col-lg-1">
            </div>

            <div class="col-lg-4 shadow">
                @if ($room->food)
                <p>{{$room->food}}</p>
                @endif
                @if ($room->water)
                <p>{{$room->water}}</p>
                @endif
                @if ($room->room_rent)
                <p>{{$room->room_rent}}</p>
                @endif
                @if ($room->distance)
                <p>Distance from nearest railway station {{$room->distance}}m</p>
                @endif
                @if ($room->total_capacity)
                <p>Total capacity of the hostel {{$room->total_capacity}} person</p>
                @endif
                @if ($room->room_capacity)
                <p>Total capacity of that room {{$room->room_capacity}} person</p>
                @endif
                @if ($room->total_vacancy)
                <p>Total seat vacant {{$room->total_vacancy}} person</p>
                @endif
                @if ($room->contact)
                <p>phone number <a href="tel:9800111222">{{$room->contact}}</a></p>
                @endif
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>

    <div class="container text-center">
        @if ($room->address)
        <p>Address: {{$room->address}}</p>
        @endif
    </div>
    <br>
    <div class="container text-center">
        <a href="tel:{{$room->contact}}">Click here to call me: {{$room->contact}}</a>
    </div>

    <div class="container">
        <br>
        <hr>
    </div>
</body>

</html>