@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/product/create" class="btn btn-primary">Create new</a>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price / 100 }} $</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/product/{{$product->id}}/edit">edit</a>
                        <form method="POST" action="/product/{{$product->id}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" href="/product/{{$product->id}}/edit">delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{ $products->links() }}
    </div>
@endsection