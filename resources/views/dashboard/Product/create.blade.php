@extends('layouts.sidebarpage')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Producto/</span> Registrar Producto</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Registro de producto</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('product.store')}}"   method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="name">Nombre</label>
                            <div class="col-sm-10">
                                <input name="name" type="text" class="form-control" id="name"
                                    placeholder="pato" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="price">Precio</label>
                            <div class="col-sm-10">
                                <input name="price" type="text" class="form-control" id="price"
                                    placeholder="500" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="stockl">Stock</label>
                            <div class="col-sm-10">
                                <div class="col-sm-10">
                                    <input name="stock" type="text" class="form-control" id="pstock"
                                        placeholder="1000" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="size">Talla</label>
                            <div class="col-sm-10">
                                <input name="size" type="text" id="size" class="form-control phone-mask"
                                    placeholder="Xl" aria-label="Xl
                                    aria-describedby="talla" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="color">Color</label>
                            <div class="col-sm-10">
                                <input name="color" type="text" id="color" class="form-control phone-mask"
                                    placeholder="rojo" aria-label="rojo"
                                    aria-describedby="color" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="description">Descripción</label>
                            <div class="col-sm-10">
                                <textarea name="description" id="description" class="form-control"
                                    placeholder="muy bomnito"
                                    aria-label="muy bomnito"
                                    aria-describedby="basic-icon-default-message2"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="category"> Categoria </label>
                            <div class="col-sm-10">
                                <select name="category" class="form-select" id="category" aria-label="Seleccione una categoria">
                                    <option selected> Selecciona una categoria </option>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}">
                                    {{$category->name}}</option>      
                                    @endforeach
                                </select>
                               
                            </div>
                        </div>
                        

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Basic with Icons -->

    </div>
</div>
</div>
@endsection