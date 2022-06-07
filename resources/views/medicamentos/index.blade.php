@extends('adminlte::page')

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" >
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
@section('content')
<style>


</style>
<div class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <div class="card ">
                            <br>
                            <div class="card-header " style="background-color:rgb(50, 173, 211);">
                                <h4 class="" style="font-weight: 900; font-size:24px">Medicamentos</h4>
                                <p class="" style="font-size:17px">Medicamentos Registrados</p>
                            </div>
                            <div class="card-body">
                                @if (session('success'))
                                <div id="mensaj" class="alert alert-success alert-dismissible" role="success">
                                    {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                        <span aria-hiddzen="true">&times;</span>
                                    </button>
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col-4 text-left mb-3">
                                    </div>
                                    </form>
                                    </div>
                                    <div class="">
                                        <a href="{{route('medicamentos.create')}}" class="btn btn-sm btn-danger">Agregar productos</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table  id="medicamentos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
                                        <thead class="text-black" id="fondo">

                                            <th>Código</th>
                                            <th>Nombre</th>
                                            <th>Categorías</th>


                                            <th class="text-right">Funciones</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($medicamentos as $Medicamento)
                                            <tr>


                                                <td>{{ $Medicamento->id}}</td>
                                                <td>{{ $Medicamento->Nombre }}</td>
								                <td>{{ $Medicamento->nombrecat}}</td>



                                               <td class="td-actions text-right">

                                                 <a href="{{ route('medicamentos.edit', $Medicamento->id) }}"
                                                    class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>

                                               </td>

                                            </tr>
                                            <!-- javascript init -->

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
    @section('script')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>


    </script>
    @endsection

@endsection
