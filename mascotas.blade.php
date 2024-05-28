<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mascotas</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mascotas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="npm i bootstrap@5.3.3">
</head>
<body>
    
    <nav class="navegador">
        <ul>
            <li class="nav">
              <a href="file:///D:/PetWebP%C3%A1gina/interfaz/INICIO.html">INICIO</a>
              <br>
              <a href="file:///D:/PetWebP%C3%A1gina/interfaz/MASCOTAS.html">MASCOTAS</a>
              <br>
              <a href="file:///D:/PetWebP%C3%A1gina/interfaz/CITAS.html">CITAS</a>
              <br>
              <a href="file:///D:/PetWebP%C3%A1gina/interfaz/INVENTARIO.html">INVENTARIO</a>
              <br>
              <a href="file:///D:/PetWebP%C3%A1gina/interfaz/p%C3%A1ginaprincipal.html">CERRAR SESIÓN</a>
            </li>
        </ul>
    </nav>

    
       
    <div class="container2">
    <h2>BÚSQUEDA DE MASCOTAS</h2>
    <hr>
    <form action="../../form-result.php" method="post" target="_blank">
    <p>
    Ingrese el nombre de la mascota: <input type="search" name="busquedamusica" placeholder="Lucas">
    <input type="submit" value="BUSCAR">
    </p>
    </form>
    
    </div>
    
</body>
<hr>
<br>
<br>
<br>


<div class="container">
<h2 style="color: aliceblue;">REGISTRO DE MASCOTAS</h2>
<hr>
  <form class="row g-3 needs-validation" novalidate>
    <div class="col-md-4">
  <label for="validationCustom01" class="form-label">Nombres</label>
      <input type="text" class="form-control" id="validationCustom01"  required>
      <div class="valid-feedback">
  ¡válido!
      </div>
      <div class="invalid-feedback">
        Campo obligatorio
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label">Apellidos</label>
      <input type="text" class="form-control" id="validationCustom02" required>
      <div class="valid-feedback">
       ¡Válido!
      </div>
      <div class="invalid-feedback">
      Campo requerido
      </div>
    </div>
    <div class="col-md-4">
  <label for="validationCustomUsername" class="form-label">Correo electrónico</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend">@</span>
        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Ingrese un correo electrónico válido
        </div>
        <div class="valid-feedback">
          Ok!
        </div>
      </div>
    </div>
<div class="col-md-2">
<label for="validationCustom03" class="form-label">Documento de identidad</label>
      <input type="text" class="form-control" id="validationCustom03" required>
      <div class="invalid-feedback">
    Campo obligatorio
      </div>
      <div class="valid-feedback">
¡Válido!
          </div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom04" class="form-label">Ciudad</label>
      <select class="form-select" id="validationCustom04" required>
        <option selected disabled value="">Seleccionar...</option>
<option>Bogotá D.C.</option>
      </select>
      <div class="invalid-feedback">
        Seleccione una ciudad.
      </div>
  <div class="valid-feedback">
    ¡Válido!
  </div>
    </div>
    <div class="col-md-3">
  <label for="validationCustom05" class="form-label">Nombre de la mascota</label>
      <input type="text" class="form-control" id="validationCustom05" required>
      <div class="invalid-feedback">
        ¡Bruto!
      </div>
  <div class="valid-feedback">
    ¡Que bonito!
  </div>
    </div>
    <div class="col-md-3">
  <label for="validationCustom05" class="form-label">Raza de la mascota</label>
          <input type="text" class="form-control" id="validationCustom05" required>
          <div class="invalid-feedback">
            ¡Bruto!
          </div>
      <div class="valid-feedback">
        ¡Okay!
      </div>
        </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
          Aceptar términos y condiciones
        </label>
        <div class="invalid-feedback">
          Debe aceptar
        </div>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Registrar</button>
    </div>
  </form>
</div>

  

<script>
  (() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>

<br>
<br>
<br>
<br>
