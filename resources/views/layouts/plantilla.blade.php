<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="inicio">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="quienes-somos">QUIENES SOMOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="acerca-de">ACERCA DE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto">CONTACTO</a>
                </li> 
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar-->

<div class="container">
    <div class="row">
        <!-- sidebar -->
        <div class="col-md-3" style="background-color:#20c997">
            <br><br>
            <ul class="list-group" class="badge bg-secondary" >
            <li class="nav-item">
                 
                </li> 
                <li class="btn btn-light"aria-current="true">barcelona woman </li>
                <li  class="btn btn-light">paris</li>
                <li  class="btn btn-light" >san andres</li>
                <li  class="btn btn-light">brasilia</li>
                <li class="btn btn-light">rodeo</li>
            </ul>
            <br><br>
        </div>
        <!--End Sidebar -->
        <!-- Content--->
        <div class="col-md-9" style="">
             @yield('contenido')
        </div>
        <!-- end Content-->
    </div>
</div>
<div class="progress">
</div>
<div class="progress">
  <div  role="progressbar" class="btn btn-dangers"  style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar" class="btn btn-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div  class="btn btn-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<br>
<a href="juego">     .......JUEGO GRATIS </a><br><br>
<footer style="background-color": class="btn btn-info" >
El 21 de junio de 1957 naci?? el Servicio Nacional de Aprendizaje (SENA) bajo el Decreto Ley 118 de ese a??o; fue una iniciativa del economista cartagenero Rodolfo Mart??nez Tono (q.e.p.d.), quien le propuso la idea de crear una entidad de ense??anza laboral y t??cnica al entonces ministro del trabajo, Raimundo Emiliani Rom??n.

Entre los acontecimientos m??s destacados de estos 59 a??os de historia se tiene la creaci??n en el mismo a??o de fundaci??n de la Entidad de la primeras seccionales (hoy regionales) de los departamentos de Antioquia, Atl??ntico, Bol??var, Cauca, Cundinamarca, Magdalena, Nari??o y Valle.

En 1960, en solo tres a??os de fundaci??n, la Instituci??n ya contaba con 30 centros de formaci??n en todo el territorio nacional, que llegaron a 50 en 1968.

Al cumplir 15 a??os (1971), el SENA alcanz?? un prestigio internacional sin precedentes, ya que distintos pa??ses llegaron a Colombia para conocer la experiencia de sus procesos de formaci??n y apoyo al emprendimiento. Se destac?? la visita de Charles de Gaulle, presidente de Francia.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias cum dolore explicabo incidunt laborum laudantium nihil qui sapiente. Asperiores excepturi id magni veniam? Consequatur corporis exercitationem fugiat provident sit!
</footer>


<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       mexico tijuana
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        brasil lo mejor
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  
</body>
</html>
