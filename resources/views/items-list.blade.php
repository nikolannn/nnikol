<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Item Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Description</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($items as $key => $data)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{ $data->name }}</td>
                <td>{{ $data->quantity }}</td>
                <td>{{ $data->description }}</td>
            </tr>
        @endforeach
    </tbody>
</table>