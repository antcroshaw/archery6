<h2>Handicaps in Category </h2>
@foreach($handicaps as $handicap)
    <p><a href="/handicaps/{{$handicap->id}}">{{ $handicap->name }}</a>
    <form method="POST" action="/handicaps/{{$handicap->id}}">
        @csrf
        @method('DELETE')
        <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
    </form>
@endforeach
