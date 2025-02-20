<!-- resources/views/itemList.blade.php -->
@extends('base')

@section('title', 'Item Lists')

@section('content')
    <div class="container">
        <h2>Item Lists</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $key => $data)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->quantity }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection