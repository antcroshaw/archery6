<h2>Handicap Name: {{ $handicap->name }} </h2>
Id: {{ $handicap->id }}
Scores:<ul> @foreach($scores as $score) <li>{{ $score->score }}</li>@endforeach</ul>

<a href=" {{ route('handicaps.create') }}" >Create handicap </a>
