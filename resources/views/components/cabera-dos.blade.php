<nav class="navbar navbar-light">
        <div class="container-fluid">
          <div class="hidder">
            
          </div>
          <a {{ $attributes }}>
            <div class="row div-central-nav">
              <div class="col-4">
                <img width="75%" src="./img/palmera.png" />
              </div>
              <p class="col-8 mt-4" id="slog">Dale un respiro a tu vida</p>
            </div>
          </a>
          {{ $slot }}
        </div>
      </nav>