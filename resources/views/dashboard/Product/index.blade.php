@extends('layouts.sidebarpage')
@section('page_title','Productos')

@section('content')
<!-- Grid Card -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Productos /</span> Disponibles</h4>

    <h6 class="pb-1 mb-4 text-muted">Productos</h6>
    <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
        @foreach ($products as $product )
            <div class="col">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('dashboard/assets/img/elements/2.jpg') }}"
                        alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">
                            {{$product->description}}
                        </p>
                        <p class="card-text">
                            categoria:  {{$product->category->name}}
                        </p>
                        <a href="javascript:void(0)" class="btn btn-outline-primary">Ver Producto</a>
                        <a href="{{route('product.destroy',$product->id)}}" class="btn btn-danger">Borrar</a>
                    </div>
                </div>
            </div>    
        @endforeach
        
        
    </div>
</div>
@endsection