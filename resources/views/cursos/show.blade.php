@extends('layout')

@section('content')
  <div class="row">
      <div class="col-md-6">
        <h4>{{ $curso }}</h4>
      </div>
  </div>
 @endsection

{{--
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Curso</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
  </head>
  <body>
    <div class="container">

      <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <h1>{{ $curso }}</h1>
          </div>
      </div>
    </div>

    <script type="text/javascript" src="/js/app.js">
  </body>
</html>
--}}

<!-- comentario html(aparece no fonte da pagina) -->
{{-- comentario blade(não aparece na pagina) --}}
