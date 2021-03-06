@extends('layouts.master')

@section('content')
    
    <h1>Create product</h1>

    <form method="POST" action="{{ route('products.store') }}">

        @csrf

        <div class="form-row">
            <label>Title</label>
            <input class="form-control" type="text" name="title" required>
        </div>

        <div class="form-row">
            <label>Description</label>
            <input class="form-control" type="text" name="description" required>
        </div>

        <div class="form-row">
            <label>Price</label>
            <input class="form-control" type="number" min="1.00" step="0.01" name="price" required>
        </div>

        <div class="form-row">
            <label>Stock</label>
            <input class="form-control" type="number" min="0" name="stock" required>
        </div>

        <div class="form-row">
            <label>Status</label>
            <select class="custom-select" name="status" required>
                <option value="" selected>Select...</option>
                <option value="available" >Available</option>
                <option value="unavailable" >Unavailable</option>
            </select>
        </div>

        <div class="form-row">
            <button type="submit" class="btn btn-primary btn-lg">Create product</button>
        </div>

    </form>

@endsection