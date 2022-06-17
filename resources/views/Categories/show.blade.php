<h2>Handicaps in Category </h2>
@foreach($handicaps as $handicap)
    <p><a href="/handicaps/{{$handicap->id}}">{{ $handicap->name }}</a></p>
@endforeach
