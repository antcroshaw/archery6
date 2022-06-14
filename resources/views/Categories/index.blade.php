<h1>categories</h1>
@foreach($categories as $category)
    <p><a href="/handicaps/{{$category->id}}">{{$category->name }}</a></p>
@endforeach
