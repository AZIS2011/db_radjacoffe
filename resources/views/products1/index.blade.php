<h1> LIST PRODUCTS </h1>
<table>
    <thead>
          <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products1 as $product1)

        <tr>
            <td>{{ $products1->name }} </td>
            <td>{{ $products1->description }}</td>
            <td> {{ $products1->price }}</td>
            <td>
                <a href="/products1/{{ $product1->id }}/edit">Edit</a>
                <form action="/products1/{{ $product1->id }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Delete">
                </form>

            </td>



        </tr>
        @endforeach
    </tbody>
    <a href="/products1/create" > Create</a>
</table>
