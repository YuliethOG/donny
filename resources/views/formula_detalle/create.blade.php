@extends('adminlte::page')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <br>
                <form action="{{route('formula.store')}}" method="post" class="form-horizontal">
                    @csrf

                        <div class="card-header " style="background-color:rgb(50, 173, 211);">
                            <h4 class="" style="font-weight: 900; font-size:24px">Formula</h4>
                            <p class="" style="font-size:17px">Registrar Formula </p>
                        </div>
                        <div class="card-body" >
                        <br>
                            <div class="row offset-7">
                                 <label for="paciente" >Pacientes: </label>
                                     <div class="col-sm-7">
                                        <select  name="paciente" id="paciente" class="form-control" >
                                            <option value="">Seleccione el paciente</option>
                                            @foreach ( $paciente as $row )
                                            <option value="{{$row->id}}">{{$row->nombre}} {{$row->apellido}}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('paciente'))
                                        <span class="has-text-danger" for=" input-paciente">{{ $errors->first('paciente') }}</span>
                                        @endif
                                     </div>
                            </div>
                            <br>
                                <div class="row">
                                        <label for="cantidad" class="  col-form-label">Cantidad:</label>
                                        <div class=" col-sm-3">
                                        <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Ingrese su cantidad" >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="medicamento" >Medicamentos:</label>
                                    <div class="col-sm-3">
                                        <select  class="form-control"  name="medicamento" id="medicamento">
                                            <option value="">Seleccione el medicamento</option>
                                            @foreach ( $medicamentos as $row )
                                            <option value="{{$row->id}}">{{$row->Nombre}}</option>
                                            @endforeach
                                        </select>

                                </div>
                                </div>
                                <br>
                                <div class="row">
                                        <label for="hora" class="col-form-label">Hora:</label>
                                        <div class=" col-sm-3">
                                        <input type="text" class="form-control" id="hora" name="hora" placeholder="Ingrese la hora" >


                                    </div>
                                 </div>
                                 <br>
                                    <div>
                                        <button onClick="agregar()" type="button" class="btn btn-success" >Agregar Producto</button>
                                    </div>
                            </div>
                          <br>


                          <div class="table-responsive">
                            <table   class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
                            <thead style="background-color: rgb(125, 125, 128)">
                            <tr>
                                <th>medicamento</th>
                                <th>Cantidad</th>
                                <th>hora</th>
                                <th>Funciones</th>

                            </tr>
                                </thead>
                                <tbody id="tmedicamentos">

                                </tbody>
                            </table>
                        </div>
                        <br>
                        <div class="ml-auto mr-auto col-md-4">
                            <button type="submit" class="btn btn-primary">Enviar</button>

                                <a href="{{route('formula.index')}}" class="btn btn-danger">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')
<script>



    function agregar(){

        let medicamento_id = $("#medicamento option:selected").val();
        let medicamento_text = $("#medicamento option:selected").text();
        let cantidad = $("#cantidad").val();
        let hora = $("#hora").val();
        if( cantidad > 0 && hora > 0 ){
            $("#tmedicamentos").append(`
                <tr id="tr-${medicamento_id}">
                    <td>
                        <input type="hidden" name="medicamento_id[]" value="${medicamento_id}" />
                                <input type="hidden" name="cantidades[]" value="${cantidad}" />
                                <input type="hidden" name="horas[]" value="${hora}" />
                        ${medicamento_text}


                    </td>
                    <td >${cantidad}</td>
                    <td>${hora}</td>
                    <td>
                        <a href="{{route('formula_detalle.create')}}" onclick="return confirm('Estás seguro que deseas eliminar el registro?');"></a>

                        <button type="button" class="button is-danger is-hovered" onclick="eliminar_medicamento(${medicamento_id})" >X</button>
                    </td>

                </tr>
            `);
            }
        else {
            alert("Se debe ingresar una cantidad/hora valida");
        }
        $("#medicamento").val('');
        $("#cantidad").val('');
        $("#hora").val('');

    }

    function eliminar_medicamento(id){
        $("#tr-"+id).remove("");


    }
</script>
@endsection


