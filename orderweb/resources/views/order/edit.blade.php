@extends('templates.base')
@section('title', 'Editar órdenes')
@section('header', 'Editar órdenes')
@section('content')

<div class="row">
    <div class="col-lg-12 mb-4">
        <form action="" method="post">
            @csrf
            <div class="row form-group">
                <div class="col-lg-6 mb-4">
                    <label for="addres">Dirección</label>
                    <input type="text" class="form-control" name="addres" id="addres" required>
                </div>
                <div class="col-lg-6 mb-4">
                    <label for="legalization_date">Fecha legalización</label>
                    <input type="date" class="form-control" name="legalization_date" id="legalization_date" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-4 mb-4">
                    <label for="city">Ciudad</label>
                    <select name="city" id="city" class="form-control">
                        <option value="tulua">Tulua</option>
                        <option value="buga">Buga</option>
                        <option value="sanPedro">San Pedro</option>
                        <option value="cali">Cali</option>
                    </select>
                </div>
                <div class="col-lg-4 mb-4">
                    <label for="causal_id">Causales</label>
                    <select name="causal_id" id="causal_id" class="form-control">
                        <option value="">Seleccione</option>
                    </select>
                </div>
                <div class="col-lg-4 mb-4">
                    <label for="observation_id">Observación</label>
                    <select name="observation_id" id="observation_id" class="form-control">
                        <option value="">Seleccione</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                </div>
                <br><br>
                <div class="col-lg-6">
                    <a href="{{ route('order.index') }}" class="btn btn-secondary btn-block">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
</div>
    
@endsection