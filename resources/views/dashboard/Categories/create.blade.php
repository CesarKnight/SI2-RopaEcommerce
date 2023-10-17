@extends('layouts.sidebarpage')
@section('page_title','Crear')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Categorias/</span> Registrar Categoria</h4>

    <!-- Basic Layout  -->
    <div class="row">

        <!-- Basic with Icons -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Categoria</h5>
                    <small class="text-muted float-end">Crear categoria</small>
                </div>
                <div class="card-body">
                    <form action="{{route('category.store')}}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="create-category-button">Nombre</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="create-category-name" class="input-group-text"><i
                                            class="bx bx-tag"></i></span>
                                    <input type="text" class="form-control" id="create-category-button" value="{{old('name')}}"
                                        name="name"
                                        placeholder="categoria#" aria-label="categoria#"
                                        aria-describedby="create-category-name" />
                                        @error('name')
                                        <br>
                                            <span>  {{$message}}*   </span>
                                        <br>    
                                        @enderror
                                </div>
                            </div>
                        </div>
                    
                        <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="basic-icon-default-message">Descripción</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge"> 
                                    <span id="description" class="input-group-text"><i
                                            class="bx bx-comment"></i></span>
                                    <textarea name="description" id="basic-icon-default-message" class="form-control"
                                        placeholder="Muy bomnito"
                                        aria-label="Muy bomnito"
                                        aria-describedby="description"
                                        value="{{old('name')}}"
                                    ></textarea>
                                        @error('description')   
                                            <span>  
                                                {{$message}}*   
                                            </span>
                                           
                                        @enderror

                                </div>
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
    </div>
</div>
<!-- / Content -->

@endsection