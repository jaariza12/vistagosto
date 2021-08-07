@extends('layouts.plantilla')
@section('contenido')
   <h1>Hola desde Contacto</h1>
   <!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
   </head>
   <body >
      <h1>registrate</h1>
      <form>
  <div class="mb-3" >
  
<div class="progress">
  <div  role="progressbar" class="btn btn-warning"  style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar" class="btn btn-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>


</div>>
    <label for="exampleInputEmail1" class="btn btn-warning" class="form-label">correo</label>
    <input type="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">trabaja con alex ariza desde casa.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="btn btn-warning"  class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox"  class="btn btn-warning" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

   </body>
   </html>
@endsection

<div class="container">
  <!-- Content here -->
</div>