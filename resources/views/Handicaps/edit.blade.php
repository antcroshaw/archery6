<h1>Add new handicap</h1>
<form action="/handicaps/{{$handicap->id}}" method="POST"  enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $handicap->name }}"/>
    @error('name')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
    <select name="categoryId" id="category" >
        <option value="1" {{($handicap->categoryId ==='1') ? 'selected' : ''}}>Outdoor GNAS</option>
        <option value="2" {{($handicap->categoryId ==='2') ? 'selected' : ''}}>Indoor GNAS</option>
    </select>
    @error('categoryId')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
    <button type="submit">Submit changes</button>
</form>


