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
        @foreach ($product1s as $product1)

        <tr>
            <td>{{ $product1s->name }} </td>
            <td>{{ $product1s->description }}</td>
            <td> {{ $product1s->price }}</td>
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
