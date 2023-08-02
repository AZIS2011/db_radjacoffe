<h1>Edit Produk</h1>
<form action="/products1/{{ $product1->id }}" method="POST">
    @method('PUT')
    @csrf
Name : <input type="text" name="name" value="{{ $product1->name }}"><br>
Description : <input type="text" name="description"value="{{ $product1->description }}"><br>
Price : <input type="number" name="price"value="{{ $product1->price }}"><br>
Image URL : <input type="text" name="image_url"value="{{ $product1->image_url }}"><br>
<input type="submit" value="Save">


</form>

