<div class="col s12 m6 l4 center">
      <div class="card white">

          <div class="card-content">
              <span class="card-title"><b>Nuevo Producto</b></span>
              
              <form #userForm="ngForm">
                  
                  <div class="row">

                      <div class="input-field col s12">
                          <input id="code" type="text" name="code" placeholder="Ingrese codigo de producto">
                          <label for="code">codigo del producto:</label>
                      </div>

                      <div class="input-field col s12">
                          <input id="name" type="text" name="name" placeholder="Ingrese nombre">
                          <label for="name">nombre:</label>
                      </div>
                      <div class="input-field col s12">
                          <input id="descrip" type="text" name="descrip" placeholder="Ingrese descripcion">
                          <label for="descrip">descripcion:</label>
                      </div>
                      <div class="input-field col s12">
                          <input id="precio" type="text" name="precio" placeholder="Ingrese precio">
                          <label for="precio">precio:</label>
                      </div>

                  </div>

              </form>
          </div>

          <div class="card-action">
              <div class="row">
                  <div class="col">
                      <button id="enviarP" style="width: 100%;" class="btn left blue darken-3 white-text">Guardar usuario</button>
                  </div>
              </div>
          </div>

      </div>
  </div>

  <script type="text/javascript" src="./scripts/newproduct.js?v1.0.0"></script>