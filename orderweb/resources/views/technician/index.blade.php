@extends('templates.base')
@section('title', 'Tecnicos')
@section('header', 'Tecnicos')
@section('content')
    
    <div class="row">
        <div class="col-lg12 mb-4 d-grid-gap-2 d-md-block">
            <a href="{{ route('technician.create') }}" class="btn btn-primary">Crear</a>
        </div>
    </div>

    @include('templates.messages')

    <div class="row">
        <div class="col-lg-12 mb-4">
            <table id="table_data" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Documento</th>
                        <th>Nombre</th>
                        <th>Especialidad</th>
                        <th>Teléfono</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>111222333444000</td>
                        <td>Aitor Tortilla</td>
                        <td>Instalacion de redes</td>
                        <td>1111111111</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-circle btn-sm" title="Editar">
                                <i class="far fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-circle btn-sm" title="Eliminar">
                                <i class="fas fa-trash" onclick="return remove();"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


@endsection

@section('scripts')
 <script src="{{ asset('js/general.js') }}"></script>    
@endsection