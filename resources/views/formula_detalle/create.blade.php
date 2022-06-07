@extends('adminlte::page')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <br>
                <form action="{{route('formula.store')}}" method="post" class="form-horizontal">
                    @csrf
                        <div class="card-header " style="background-color:rgb(50, 173, 211);">
                            <h4 class="" style="font-weight: 900; font-size:24px">Formula</h4>
                            <p class="" style="font-size:17px">Crear Formula </p>
                        </div>
                        <br>
                        <div class="row">
                            <label for="Categorias" class="col-sm-2 col-form-label control-label asterisco">Paciente</label>
                            <div class="col-sm-4">
                                <select class="form-control js-example-basic-single" name="Categorias" id="Categorias">
                                    <option value="">Seleccione un paciente</option>
                                    @foreach ( $paciente as $row )
                                    <option value="{{$row->id}}">{{$row->nombre}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('Categorias'))
                                <span class="error text-danger" for="input-Categorias">{{ $errors->first('Categorias') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <label for="cantidad" class=" is-size-3">Cantidad:</label>
                            <div class=" field-body">
                                <input type="number" class="column is-one-quarter input is-info mx-4 mt-2" id="cantidad" name="cantidad" placeholder="Ingrese su cantidad" >
                            </div>
                        </div>
                        <div class="field">
                            <label for="medicamento" class="is-size-3">Medicamentos:</label>
                            <div class="select is-rounded">
                                <select   name="medicamento" id="medicamento">
                                    <option value="">Seleccione el medicamento</option>
                                        @foreach ( $medicamentos as $row )
                                    <option value="{{$row->id}}">{{$row->Nombre}}</option>
                                        @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <label for="hora" class="is-size-3">Hora:</label>
                            <div class="field-body mx-4 mt-2">
                                <input type="text" class="column is-one-quarter input is-info" id="hora" name="hora" placeholder="Ingrese su precio" >
                            </div>
                        </div>
                        <div>
                            <button onClick="agregar()" type="button" >Agregar Producto</button>
                        </div>
                    </div>
                    <br>  
                    <div>
                        <table   class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth" style="width:100%">
                            <thead >
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
                        </div>
                    <div class="">
                        <button type="submit" class="button is-link">Enviar</button>
                        <a href="{{route('formula.index')}}" class="button is-danger">Cancelar</a>
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


