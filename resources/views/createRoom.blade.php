{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create room</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body> --}}

@extends('layouts.app')

@section('content')

<div class="box">
    <div class="container d-flex justify-content-center">
        <div class="form border p-3 m-5 shadow" style="width: 50%">
            <form action="/home/rooms" method="post" enctype="multipart/form-data">
                @csrf
                {{-- facilities################ --}}
                <input type="checkbox" id="food" name="food" value="food">
                <label for="food">Food (Cook avialable)</label> <br>
                <input type="checkbox" id="water" name="water" value="water">
                <label for="water">Water (24*7)</label> <br>
                <input type="checkbox" id="wifi" name="wifi" value="wifi">
                <label for="wifi">Wifi (24*7)</label><br>
                <input type="checkbox" id="electricity" name="electricity" value="electricity">
                <label for="electricity">Electricity (24*7)</label><br>
                <input type="checkbox" id="free_bed" name="free_bed" value="free_bed">
                <label for="free_bed">Free bed</label><br>
                {{-- end facilities################ --}}

                {{-- info############# --}}
                <label for="room_rent">Room rent</label>
                <input type="text" name="room_rent" id="room_rent" placeholder="₹"><br>
                <label for="distance">Distance from nearest Railway Station</label>
                <input type="text" name="distance" id="distance"><br>
                <label for="total_capacity">Number of candidates of the Hostel</label>
                <input type="text" name="total_capacity" id="total_capacity" placeholder="8 person"><br>
                <label for="room_capacity">Number of candidates in that room</label>
                <input type="text" name="room_capacity" id="room_capacity" placeholder="3 person"><br>
                <label for="total_vacancy">Number of bed vacant in that room</label>
                <input type="text" name="total_vacancy" id="total_vacancy" placeholder="1 person"><br>
                <label for="contact">Contact phone number</label>
                <input type="text" name="contact" id="contact" placeholder="9800111222"><br>
                <p>Address</p>
                <textarea name="address" id="address" cols="40" rows="5" maxlength="100"
                    placeholder="Belgharia, Kolkata, 9/223"></textarea>
                <input type="file" name="image[]" id="image" multiple>
                <br>
                <br>
                {{-- end info############# --}}
                <div class="container d-flex justify-content-center">
                    <div class="submit">
                        <input type="submit" value="Submit" class="btn btn-primary" name="submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

{{-- </body>

</html> --}}