@extends('adminlte::page')

@section('title', 'MEDICODE')

@section('content_header')
    <h1>MEDICODE</h1>
@stop


@section('content')
  <div class="col-xs-12 text-center">
    <h2 class="text-orange">Nuestros Servicios</h2>
    <hr class="second">
  </div>

  <div class="col-md-12 text-center">
      <div class="caption">
        <h3>Analgésicos</h3>
        <img src="https://www.redaccionmedica.com/images/destacados/cada-espanol-toma-de-media-casi-14-antiinflamatorios-al-ano-5417.jpg"  width="500 px" height="500 px" alt="Analgésicos">
        <p class="text-center">
        En este grupo de tipos de medicamentos se encuentran todos los fármacos que tienen como finalidad aliviar el dolor físico.
       </p>
        <button class="btn btn-danger">Saber más.</button>
    </div>
  </div>
<br>
  <div class="col-md-12 text-center">
      <div class="caption">
        <h3>Antialérgicos</h3>
        <img src="https://storage.googleapis.com/www-saludiario-com/wp-content/uploads/2022/03/f24b56e9-medicamentos-dolor.jpg" width="500" height="500" alt="Antialérgicos">
        <p class="text-center">
        En esta categoría se agrupan fármacos que tienen la finalidad de combatir los efectos negativos de las reacciones alérgicas o la hipersensibilidad.
        </p>
        <button class="btn btn-danger">Saber más.</button>
      </div>
    </div>
  </div>


  <div class="col-md-12 text-center">
      <div class="caption">
        <h3>Antiinfecciosos</h3>
        <img src="https://coooaoptometria.files.wordpress.com/2021/06/efectos-medicamentos.jpg" width="500" height="500" alt="Antiinfecciosos">
        <p class="text-center">
        Este tipo de medicamentos están recetados para hacer frente a infecciones.
        </p>
        <button onclick="alr()" class="btn btn-danger">Saber más.</button>
        <div id="ntf"></div>
      </div>
    </div>
<br>
  <div class="col-md-12 text-center">
      <div class="caption">
        <h3>Antiinflamatorios</h3>
        <img src="https://www.farmaceuticonline.com/wp-content/uploads/2019/07/antiinflamatoris.jpg" width="500" height="500" alt="Antiinflamatorios">
        <p class="text-center">
        son fármacos que tienen como finalidad reducir los efecto de la inflamación.
        </p>
        <button class="btn btn-danger">Saber más.</button>
    </div>
  </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
