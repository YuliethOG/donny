@extends('adminlte::page')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" >
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
@section('content')
<br>
<div class="is-size-4 content">
        <div class="container is-fluid column is-three-quarters">
            <div >
            <div class="has-background-success-light">
                <div >
                    <div >
                        <div >
                            <div class="card-header " style="background-color:rgb(50, 173, 211);">
                                <h4 class="" style="font-weight: 900; font-size:24px">Formula</h4>
                            <p class="" style="font-size:17px">Formulas registradas </p>

                            </div>
                            <br>
                            <div >
                                @if (session('success'))
                                <div id="mensaj" class="alert alert-success" role="success">
                                     {{ session('success') }}
                                 </div>
                                 @endif
                                <br>
                                <div class="has-text-right">
                                    <div >
                                        <a href="{{route('formula_detalle.create')}}" class="btn btn-primary">Agregar Formula</a>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="table-responsive">
                                    <table   class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
                                        <thead style="background-color: rgb(125, 125, 128)">
                                            <th>No.</th>
                                            <th>Documento</th>
                                            <th>Pacientes</th>
                                            <th>fecha_formula</th>
                                            <th >Función</th>
                                        </thead>
                                        <tbody>

                                            <tr>
                                            @foreach ($formula as $formula)
                                                <td>{{ $formula->id}}</td>
                                                @foreach ($paciente as $row)
                                                @if ($formula->paciente==$row->id)
                                                <td>{{ $row->documento}}</td>
                                                <td>{{ $row->nombre}} {{$row->apellido}}</td>
                                                @endif
                                                @endforeach
                                                <td>{{ $formula->created_at}}</td>



                                               <td class="td-actions text-right">
                                                 <a  href="{{route('formula.show', $formula->id)}}" type="button" class="btn btn-warning"><i class="bi bi-eye-fill"></i></a>

                                                    <form action="{{route('formula.destroy', $formula->id)}}" method="post" style="display: inline-block;" onsubmit="return confirm('¿Está seguro de eliminar la formula?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit" rel="tooltip">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </form>
                                               </td>


                                            </tr>


                                            @endforeach
                                        </tbody>
                                    </table>
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
