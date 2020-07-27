@extends('layouts.app')

@section('content')
<div class="margin mt-5">

</div>
<br>
<div class="container pt-4">
    <div class="row">
        <div class="col-lg-7">

            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>






                <!-- The slideshow -->
                <div class="carousel-inner">
                    <?php
                            $imageString = "{$room->image}";
                            $images = (explode(" ",$imageString));
                            for ($i=0; $i < count($images); $i++) { 
                                if($i==0){
                                    ?>
                    <div class="carousel-item active">
                        <img src="/storage/images/<?php echo $images[0]?>">
                    </div>
                    <?php
                                }
                                else {
                                ?>
                    <div class="carousel-item">
                        <img src="/storage/images/<?php echo $images[$i]?>">
                    </div>
                    <?php
                                }
                            }
                        ?>

                    {{-- <div class="carousel-item active">
                                <img src="/storage/images/manoj.jpg">
                            </div> --}}

                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon bg-dark"></span>
                </a>
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
@endsection