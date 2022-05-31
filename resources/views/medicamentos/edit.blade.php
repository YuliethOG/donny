@extends('adminlte::page')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('medicamentos.update', $medicamentos->id)}}" method="post" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title text-dark" style="font-weight: 900; font-size:24px">medicamentos</h4>
                            <p class="card-category text-dark" style="font-size:17px">Editar datos</p>
                        </div>
                        
                            <div class="row">
                                <label for="Nombre" class="col-sm-2 col-form-label control-label asterisco">Nombre</label>
                                <div class="col-sm-7">
                                <input type="text" class="form-control" name="Nombre" placeholder="Ingrese su Nombre" value="{{old('Nombre',$medicamentos-> Nombre)}}">
                                @if ($errors->has('Nombre'))
                                <span class="error text-danger" for="input-Nombre">{{ $errors->first('Nombre') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <label for="Categorias" class="col-sm-2 col-form-label control-label asterisco">Categorías</label>
                            <div class="col-sm-7">
                                <select class="form-control js-example-basic-single" name="Categorias" id="Categorias">
                                   <option  value="{{old('Categorias',$medicamentos->Categorias)}}">Seleccione solo para modificar</option>
                                    @foreach ( $categorias as $row )
                                       

                                        <option @if ($row->id==$medicamentos->Categorias)
                                            selected="true"
                                        @endif

                                         value="{{$row->id}}">{{$row->nombre}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('Categorias'))
                                <span class="error text-danger" for="input-Categorias">{{ $errors->first('Categorias') }}</span>
                                @endif
                            
                        </div>
                    </div>
                    
    <div class="card-footer ml-auto mr-auto col-md-4">
        <button type="submit" class="btn btn-facebook">Actualizar</button>
        <div class="">
        <a href="{{route('medicamentos.index')}}" class="btn btn-danger">Cancelar</a>
    </div>
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
