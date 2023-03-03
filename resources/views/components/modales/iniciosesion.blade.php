<!-- Modal Inicio sesión  -->
<div
      class="modal fade"
      id="reserveModal"
      tabindex="-1"
      aria-labelledby="reserveModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="reserveModalLabel">
             Inicia Sesión
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form>
                <div class="mt-2">
  

                  </select>
                  <label for="email" class="form-label"
                    >Correo Electrónico</label
                  >
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="email"
                  />
                </div>

                <div class="mt-2">
                  <label for="contraseña" class="form-label"
                    >Contraseña</label
                  >
                  <input
                    type="password"
                    class="form-control"
                    id="contraseña"
                    name="contraseña"
                  />
                </div>
              </div>
            </form>
            <a href="...">¿Olvidaste tu contraseña?</a>
          </div>
          <div class="modal-footer">
            <button
              id="dismissReserve"
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Cerrar
            </button>
            <button
              type="button"
              class="btn btn-primary"
              onclick="saveReserve()"
            >
              Iniciar Sesion
            </button>
          </div>
        </div>
      </div>
    </div>
