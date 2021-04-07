@extends('admin.admin')

@section('body')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 ><i class="fa fa-file">Edit Product details</i></h1>

            <form action="/products/{{ $product->id }}" method="post" enctype="multipart/form-data">

                @method('PATCH')

                @include('product.form')

                <button class="btn btn-primary">Save</button>

            </form>
        </div>
    </div>
</div>

@endsection
