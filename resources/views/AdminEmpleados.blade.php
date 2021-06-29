@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">Administrador de Empleados</div>
                <div class="card-body">
                    <form>
                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nombre</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Apellidos</label>
                            <div class="col-sm-10">
                            <input type="apellidos" class="form-control form-control-sm" id="" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                            <div class="col-sm-10">
                            <input type="correo" class="form-control form-control-sm" id="" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Salario diario</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control form-control-sm" id="" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Puesto</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control form-control-sm" id="" >
                            </div>
                        </div>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="activo" value="option1" checked>
                                        <label class="form-check-label" for="activo">
                                            Activo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="inactivo" value="option2">
                                        <label class="form-check-label" for="inactivo">
                                            Inactivo
                                        </label>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <button class="btn btn-primary m-4 " type="submit">Guardar empleado</button>
                    </form>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-4">
        
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Salario / día</th>
                    <th scope="col">Salario / semana</th>
                    <th scope="col">Salario / quincena</th>
                    <th scope="col">Salario / mensual</th>
                    <th scope="col">Puesto</th>
                    <!-- <th scope="col">Estatus</th> -->
                    </tr>
                </thead>
              
                <tbody>
                @foreach($empleados AS $e)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $e['name'] }}</td>
                        <td>{{ $e['apellidos'] }}</td>
                        <td>{{ $e['email'] }}</td>
                        <td>$ {{  number_format($e['salarioDia'], 2, '.', ','); }}</td>
                        <td>$ {{  number_format($e['SalarioSemana'], 2, '.', ','); }}</td>
                        <td>$ {{  number_format($e['SalarioQuincena'], 2, '.', ','); }}</td>
                        <td>$ {{  number_format($e['SalarioMes'], 2, '.', ','); }}</td>
                        <td>{{ $e['puesto'] }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
