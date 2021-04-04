@extends('admin.admin')

@section('body')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1><i class="fa fa-book"> Product details </i></h1>
                <div class="readableColor">
                    <strong>Name</strong>
                    <p> {{ $product->name }} </p>

                    <strong>Duration</strong>
                    <p> {{ $product->type }}</p>

                    <strong>Description</strong>
                    <p>  {{ $product->description }}</p>
                </div>
                <div>
                    @hasanyrole('super_admin|admin')
                    <a class="btn btn-dark pull-left" href="/food/{{ $product->id }}/edit">Edit</a>

                    <form action="/food/{{ $product->id }}" method="post">
                    @method('DELETE')

                    @csrf
                    {{--        <button class="btn btn-danger">DELETE</button>--}}
                    <!-- Button trigger modal -->
                        <button type="button" data-form-link="{{ route('product.destroy', $product->id) }}"  class="btn btn-danger delete-course-btn">
                            DELETE
                        </button>
                        @endhasanyrole
                    </form>
                </div>
                <div>
                    <a  class="btn btn-twitter pull-right" href="/products"> Back </a>
                </div>
            </div>
        </div>
    </div>

@endsection
