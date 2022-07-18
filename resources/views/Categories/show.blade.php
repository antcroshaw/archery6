<h2>Handicaps in Category </h2>
@foreach($handicaps as $handicap)
    <p><a href="/handicaps/{{$handicap->id}}">{{ $handicap->name }}</a>
        <a href="/handicaps/{{$handicap->id}}/edit">edit</a>
    <form method="POST" action="/handicaps/{{$handicap->id}}">
        @csrf
        @method('DELETE')
        <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
    </form>
@endforeach
