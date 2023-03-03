@extends('components.layout')

@section('title','Home')

@section('content')
   <!-- carrusel -->
   <div class="container mt-4">
      <div class="col-md-12 col-sm-12 p-3">
        <div
          id="carouselExampleControls"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="./img/carrusel/ext1.jpg"
                height="500px"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                height="500px"
                src="./img/carrusel/ext2.jpg"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="./img/carrusel/food.jpg"
                height="500px"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="./img/carrusel/restaurant.jpg"
                height="500px"
                class="d-block w-100"
                alt="..."
              />
            </div>

            <div class="carousel-item">
              <img
                src="./img/carrusel/ext3.jpg"
                height="500px"
                class="d-block w-100"
                alt="..."
              />
            </div>

            <div class="carousel-item">
              <img
                src="./img/carrusel/ext4.jpg"
                height="500px"
                class="d-block w-100"
                alt="..."
              />
            </div>
            
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="prev"
          >
            <span
              class="carousel-control-prev-icon"
              aria-hidden="true"
            ></span>
            <span class="visually-hidden">Antes</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="next"
          >
            <span
              class="carousel-control-next-icon"
              aria-hidden="true"
            ></span>
            <span class="visually-hidden">Después</span>
          </button>
        </div>
      </div>
    </div>




    
    <!-- Content -->
    <div class="container mt-4">
      <!-- titulo -->
    <div class="col-12 mt-4">
      <div class="row">
        <div class="col-lg-5 col-4">
          <hr />
        </div>
        <div class="col-lg-2 col-4">
          <h1 style="text-align:center;"> Habitaciones</h1>
        </div>
        <div class="col-lg-5 col-4">
          <hr />
        </div>
      </div>
    </div>
      <div class="row">
        <!--First card-->
        <div class="col-lg-6 col-md-6 col-sm-12 p-3">
          <div class="card shadow-card">
            <img
              height="330px"
              src="./img/Habitaciones/Habitación matrimonial/mejor.jpg"
              class="card-img-top"
              alt="matrimonial"
            />
            <div class="card-body">
              <h5 class="card-title">HABITACIÓN MATRIMONIAL</h5>
              <p class="card-text">
                Esta es la habitación más grande de todas, ya que tiene un
                tamaño de 32 metros cuadrados, recomendada para familias de tres
                (3) o cuatro (4) integrantes
              </p>
              <button
                class="btn buttons"
                data-bs-toggle="modal"
                data-bs-target="#reserveModal"
                onclick="changeRoomSelect(5)"
              >
                !Reserve ahora!
              </button>
              <span style="color: #198754">Por solo $350.000</span>
            </div>
          </div>
        </div>
        <!--Second card-->
        <div class="col-lg-6 col-md-6 col-sm-12 p-3">
          <div class="card shadow-card">
            <img
              height="330px"
              src="./img/Habitaciones/Habitación empresarial/Habitación empresarial.jpg"
              class="card-img-top"
              alt="empresarial"
            />
            <div class="card-body">
              <h5 class="card-title">HABITACIÓN EMPRESARIAL</h5>
              <p class="card-text">
                Esta habitación es muy amplia, ya que cuenta con 25 metros
                cuadrados. Recomendado para una (1) persona que necesite un
                lugar tranquilo y agradable para descansar y trabajar .
              </p>
              <button
                class="btn buttons"
                data-bs-toggle="modal"
                data-bs-target="#reserveModal"
                onclick="changeRoomSelect(4)"
              >
                !Reserve ahora!
              </button>
              <span style="color: #198754">Por solo $300.000</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 mt-4">
        <div class="row">
          <div class="col-4">
            <hr />
          </div>
          <div class="col-4">
            <button class="btn btn-outline-dark col-12" id="button-link-rooms">
              <a href="./rooms.html" id="link-rooms"
                >Ver todas las habitaciones</a
              >
            </button>
          </div>
          <div class="col-4">
            <hr />
          </div>
        </div>
      </div>

      <div class="col-12 mt-4">
        <div class="row">
          <div class="card mb-3" style="max-width: col-12">
            <div class="row g-0">
              <div class="col-md-5">
                <!--carrusel servicios -->
                  <div
                    id="carouselservicios"
                    class="carousel slide"
                    data-bs-ride="carousel"
                  >
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img
                          src="./img/carru_serv/gimnasio.jpg"
                          height="500px"
                          class="d-block w-100"
                          alt="..."
                        />
                      </div>
                      <div class="carousel-item">
                        <img
                          height="500px"
                          src="./img/carru_serv/bar.webp"
                          class="d-block w-100"
                          alt="..."
                        />
                      </div>
                      <div class="carousel-item">
                        <img
                          src="./img/carrusel/food.jpg"
                          height="500px"
                          class="d-block w-100"
                          alt="..."
                        />
                      </div>
                      <div class="carousel-item">
                        <img
                          src="./img/carrusel/restaurant.jpg"
                          height="500px"
                          class="d-block w-100"
                          alt="..."
                        />
                      </div>
          
                      <div class="carousel-item">
                        <img
                          src="./img/carrusel/ext3.jpg"
                          height="500px"
                          class="d-block w-100"
                          alt="..."
                        />
                      </div>
          
                      <div class="carousel-item">
                        <img
                          src="./img/carrusel/ext4.jpg"
                          height="500px"
                          class="d-block w-100"
                          alt="..."
                        />
                      </div>
                      
                    </div>
                    <button
                      class="carousel-control-prev"
                      type="button"
                      data-bs-target="#carouselservicios"
                      data-bs-slide="prev"
                    >
                      <span
                        class="carousel-control-prev-icon"
                        aria-hidden="true"
                      ></span>
                      <span class="visually-hidden">Antes</span>
                    </button>
                    <button
                      class="carousel-control-next"
                      type="button"
                      data-bs-target="#carouselservicios"
                      data-bs-slide="next"
                    >
                      <span
                        class="carousel-control-next-icon"
                        aria-hidden="true"
                      ></span>
                      <span class="visually-hidden">Después</span>
                    </button>
                  </div> 
                </div>

              <div class="col-md-7">
                <div class="card-body">
                  <h5 class="card-title mt-0"><b>SERVICIOS QUE OFRECEMOS</b></h5>
              <p class="card-text">
                Si quiere disfrutar de unas vacaciones activas y divertidas, Dream Scape le ofrece ocio, 
                diversión y la posibilidad de practicar sus deportes favoritos. Disfrute de los mejores shows nocturnos, 
                actividades acuáticas, deportes y vida nocturna, entre miles de planes a su disposición.
              </p>
              <ul>
               <li> Actividades diurnas </li>
               <li> Entretenimiento nocturno con shows en directo en los diferentes bares y zonas comunes</li>
               <li> Club infantil</li>
               <li> Actividades y excursiones guiadas (con coste extra – ofrecidas por agencias externas)</li>
               <li> Amplio gimnasio con una completa variedad de maquinaria fitness y musculación</li>
               <li> Pistas de tenis</li>
               <li> Cancha de pickleball, con clases gratuitas en grupo y clases privadas ($) disponibles</li>
               <li> Green Fees</li>
               <li> Sports Bar con proyección de partidos y eventos deportivos de nivel </li>
                <li>Discoteca, abierta todos los días a partir de las 23h.</li>
              </ul>
             
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection