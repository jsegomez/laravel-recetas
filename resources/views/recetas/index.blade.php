@extends('layouts.app')

@section('botones')
    <a href="{{ route('recetas.create') }}" class="btn btn-primary mr-2">Crear receta</a>
@endsection

@section('content')
    <h2 class="text-center mt-2">Administra tus recetas</h2>

    <div class="col-10 mx-auto bg-white p-3">
        <table class="table">
            <thead class="bg-primary text-light">
                <tr>
                    <th scope="col">Título</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Pizza</td>
                    <td>Pizzas</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
