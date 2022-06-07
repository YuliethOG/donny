@extends('adminlte::page')

@section('content')
<br>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <br>
                    <div class="card">
                        <div class="card-header " style="background-color:rgb(50, 173, 211);">
                            <h4 class="" style="font-weight: 900; font-size:24px">Formula</h4>
                            <p class="" style="font-size:17px">ver detalle Formula </p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach ( $formulas as $formula )
                                <label for="Categorias" class="col-sm-1 col-form-label control-label asterisco">Paciente: </label>
                                <div class="col-sm-4">
                                <input type="text" class="form-control"  value="{{$formula->nombre}} {{$formula->apellido}}" disabled>
                                </div>
                                @endforeach
                            </div>
                            <br>
                            <div class="table-responsive">
                                <table   class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
                                    <thead >
                                        <th>Medicamento</th>
                                        <th>Cantidad</th>
                                        <th>Cada/Hora</th>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($medicamentos as $row)
                                            <td>{{ $row->Nombre}}</td>
                                            <td>{{ $row->cantidad_c}}</td>
                                            <td>{{ $row->horas}}</td>
                                            @endforeach
                                        </tr>
                                   

                                    </tbody>
                                </table>
                                <div class=" ml-auto mr-auto col-md-1">
                                        <a href="{{route('formula.index')}}" class="btn btn-primary">Regresar</a>
                                </div>

                            </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection
