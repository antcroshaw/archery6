<h1>categories</h1>
@foreach($categories as $category)
    <p><a href="/categories/{{$category->id}}">{{$category->name }}</a></p>
@endforeach
