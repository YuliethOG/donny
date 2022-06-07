@extends('adminlte::page')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('medicamentos.update', $medicamento->id)}}" method="post" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <br>
                    <div class="card">
                        <div class="card-header " style="background-color:rgb(50, 173, 211);">
                                <h4 class="" style="font-weight: 900; font-size:24px">Medicamentos</h4>
                                <p class="" style="font-size:17px">Editar Medicamentos </p>
                            </div>
                            <div class="card-body">
                                {{-- <div class="row">
                                <label for="Código" class="col-sm-2 col-form-label control-label asterisco">Código</label>
                                    <div class="col-sm-7">
                                    <input type="number" class="form-control" name="Código" placeholder="Ingrese su Código" value="{{old('Código',$producto-> Código)}}" autofocus>
                                    @if ($errors->has('Código'))
                                    <span class="error text-danger" for="input-Código">{{ $errors->first('Código') }}</span>
                                    @endif
                                </div>
                            </div> --}}
                            <div class="row">
                                <label for="Nombre" class="col-sm-2 col-form-label control-label asterisco">Nombre</label>
                                <div class="col-sm-7">
                                <input type="text" class="form-control" name="Nombre" placeholder="Ingrese su Nombre" value="{{old('Nombre',$medicamento-> Nombre)}}">
                                @if ($errors->has('Nombre'))
                                <span class="error text-danger" for="input-Nombre">{{ $errors->first('Nombre') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <label for="Categorías" class="col-sm-2 col-form-label control-label asterisco">Categorías</label>
                            <div class="col-sm-7">
                                <select class="form-control js-example-basic-single" name="Categorías" id="Categorías">
                                   <option >Seleccione solo para modificar</option>
                                    @foreach ( $categorias as $row )
                                        <option @if ($row->id==$medicamento->estado)
                                            selected="true"
                                        @endif
                                        value="{{$row->id}}">{{$row->nombre}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('Categorías'))
                                <span class="error text-danger" for="input-Categorías">{{ $errors->first('Categorías') }}</span>
                                @endif
                        </div>
                    </div>

        <div class="row">
    <div class="card-footer ml-auto mr-auto col-md-4">
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{route('medicamentos.index')}}" class="btn btn-danger">Cancelar</a>
    </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@section('script')
<script>
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
});

</script>
@endsection
@endsection
