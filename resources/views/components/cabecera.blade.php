    <!-- Navbar -->
    <nav class="navbar navbar-light">
        <div class="container-fluid">
          <div class="hidder">
            <a
              href="https://wa.me/+573173077666?text=Hola,%20estoy%20interesad@%20en%20hacer%20una%20reservación"
              target="_blank"
            >
              <img
                width="45px"
                src="https://img.icons8.com/color/48/000000/whatsapp--v4.png"
              />
            </a>
            <a href="">
              <img
                width="45px"
                src="https://img.icons8.com/fluency/48/000000/facebook-circled.png"
              />
            </a>
            <a href="">
              <img
                src="https://img.icons8.com/fluency/48/000000/instagram-new.png"
              />
            </a>
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