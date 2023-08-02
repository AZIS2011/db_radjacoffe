<h1> LIST PRODUCTS </h1>
<table>
    <thead>
          <tr>
            <th>Name</th>
            <th>Description</th>
            <td>Gambar</td>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)

        <tr>
            <td>{{ $product->name }} </td>
            <td>{{ $product->description }}</td>
            <td> {{ $product->image_url }}</td>
            <td> {{ $product->price }}</td>
            
            <td>
                <a href="/products/{{ $product->id }}/edit">Edit</a>
                <form action="/products/{{ $product->id }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Delete">
                </form>

            </td>



        </tr>
        @endforeach
    </tbody>
    <a href="/products/create" > Create</a>
</table>
