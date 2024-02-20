@extends('layouts.app')

@section('template_title')
{{ __('Update') }} Product
@endsection

@section('content')
<section class="content container-fluid">
    <div class="">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">{{ __('Update') }} Product</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('products.update', $product->id) }}" role="form" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf

                        @include('product.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a class="btn btn-primary" href="{{ route('products.index') }}"> {{ __('Back') }}</a>
    </div>
</section>
@endsection