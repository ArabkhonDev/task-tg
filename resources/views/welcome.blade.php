<table>
    <thead>
        <tr>
            <th>product id</th>
            <th>category name</th>
            <th>title</th>
            <th>desc</th>
            <th>price</th>
            <th>image</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->category->title }}</td>
                <td>{{ $product->title }}</td>
                <td>{{ $product->desc }}</td>
                <td>{{ $product->price }}</td>
                <td><img src="{{ $product->image }}" alt="product"></td>
            </tr>
        @endforeach
    </tbody>
</table>

<table>
    <thead>
        <tr>
            <th>category title</th>
            <th>category desc</th>
            <th>category image</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->title }}</td>
                <td>{{ $category->desc }}</td>
                <td><img src="{{ $category->image }}" alt="category"></td>
            </tr>
        @endforeach
    </tbody>
</table>
