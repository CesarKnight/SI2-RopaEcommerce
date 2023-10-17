@extends('layouts.sidebarpage')

@section('page_title','Categorias')

@section('content')

<div class="row mt-3">
    <div class="d-grid gap-2 col-lg-6 mx-auto">
        <a href="{{route('category.create')}}" class="btn btn-primary btn-lgy">Crear Categoria</a>
    </div>
  </div>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card" >
        <h5 class="card-header">Categorias</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ( $categories as $category)
                        <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$category->id}}</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$category->name}}</strong></td>
                        <td>{{$category->description}}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{route('category.edit',$category->id)}}"><i class="bx bx-edit-alt me-1"></i>
                                        Editar</a>
                                    <a class="dropdown-item" href="{{route('category.destroy',$category->id)}}"><i class="bx bx-trash me-1" data-confirm-delete="true" ></i>
                                        Eliminar</a>
                                </div>
                            </div>
                        </td>
                    </tr>    
                    @endforeach  
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection