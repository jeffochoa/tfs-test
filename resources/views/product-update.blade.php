@extends('layouts.app')

@section('content')

<div class="container">

    <form method="POST" action="/product/{{$product->id}}" class="col-sm-8 col-sm-offset-2">
        @csrf

        @method('PUT')

        <div class="form-group">
            <label for="name" class="col-form-label col-md-12">Name</label>

            <div class="col-md-12">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name', $product->name) }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="description" class="col-form-label col-md-12">Description</label>

            <div class="col-md-12">
                <textarea
                    id="description"
                    type="text"
                    class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                    name="description"
                    required>{{ old('description', $product->description) }}</textarea>

                @if ($errors->has('description'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="price" class="col-form-label col-md-12">Price</label>

            <div class="col-md-12">
                <input
                    id="price"
                    type="text"
                    class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"
                    name="price"
                    value="{{ old('price', $product->price) }}"
                    required>

                @if ($errors->has('price'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('price') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group">
            <label for="image" class="col-form-label col-md-12">Image</label>

            <div class="col-md-12">
                <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image">

                @if ($errors->has('image'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="col-md-12">
            <button type="submit" class="btn btn-success pull-right">Update</button>
        </div>

    </form>

</div>

@endsection