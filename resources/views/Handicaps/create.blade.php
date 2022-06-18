<h1>Add new handicap</h1>
<form action="/handicaps/store" method="POST">
    @csrf

    <input type="text" name="name" />
    @error('name')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
    <select name="categoryId" id="category">
        <option value="1">Outdoor GNAS</option>
        <option value="2">Indoor GNAS</option>
    </select>
    @error('categoryId')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
    <button type="submit">Submit</button>
</form>


