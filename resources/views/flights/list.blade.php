<html>
<head>
</head>
<body>
<h1>Flights</h1>
@foreach($flights as $flight)
    <p>{{$flight->flight_number}}</p>
    <p>{{$flight->airline}}</p>

    <p>{{$flight->seats_available}} 
    <a href="{{route('flight',['id'=>$flight->id])}}">View Flight Details</a></p>
@endforeach
</body>
</html>