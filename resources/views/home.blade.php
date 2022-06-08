@extends('adminlte::page')

@section('title', 'MEDICODE')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
@section('content_header')
    <h2 class="text-center">Categorías</h2>
@stop


@section('content')
<hr class="second">
<div class="content">
    <div class="container-fluid  text-center">
   
      <div class="row">
  <div class="col-md-4 ">
            <div class="card text-center">
                <br>
                <h4>Analgésicos</h4>
                <img src="https://www.redaccionmedica.com/images/destacados/cada-espanol-toma-de-media-casi-14-antiinflamatorios-al-ano-5417.jpg" style="margin-left:10%;  margin-bottom:5%;"  width="350 px" height="250 px" alt="Analgésicos">
            </div>
        </div>

        <div class="col-md-4 ">
            <div class="card text-center">
                <br>
                <h4>Antialérgicos</h4>
                <img src="https://storage.googleapis.com/www-saludiario-com/wp-content/uploads/2022/03/f24b56e9-medicamentos-dolor.jpg" style="margin-left:10%;  margin-bottom:5%;"  width="350 px" height="250 px" alt="Antialérgicos">
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center">
                <br>
                <h4>Antiinfecciosos</h4>
                <img src="https://coooaoptometria.files.wordpress.com/2021/06/efectos-medicamentos.jpg"  style="margin-left:10%;  margin-bottom:5%;"  width="350 px" height="250 px" alt="Antiinfecciosos">
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <br>
                <h4>Antiinflamatorios</h4>
                <img src="https://www.farmaceuticonline.com/wp-content/uploads/2019/07/antiinflamatoris.jpg" style="margin-left:10%;  margin-bottom:5%;"  width="350 px" height="250 px" alt="Antiinflamatorios">
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <br>
                <h4>Antiácidos</h4>
                <img src="https://www.ecured.cu/images/2/2f/Antiacidos.jpg" style="margin-left:10%;  margin-bottom:5%;"  width="350 px" height="250 px" alt="Antiácidos">
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <br>
                <h4>Laxantes</h4>
                <img src="https://www.ororadio.com.mx/noticias/wp-content/uploads/2018/11/Abuso-medicamentos-laxantes-causas-hemorroides.jpg" style="margin-left:10%;  margin-bottom:5%;"  width="350 px" height="250 px" alt="Laxantes">
            </div>
        </div>
        </div>
    </div>
  </div>
  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
