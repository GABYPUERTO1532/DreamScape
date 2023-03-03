@extends('components.layout')

@section('title','contactanos')

@section('content')

  <!--Formulario-->
    <div style="min-height:60vh;" class="container mt-4">
      <h3>Dejanos tus comentarios</h3>
      <form action="">
        <div class="form-group">
          <label for="nombre"><p>Nombre</p></label>
          <input
            type="text"
            name="nombre"
            id="nombre"
            placeholder="Escribe tu nombre"
            class="form-control"
            maxlength="60"
            required
          />
        </div>
        <br />
        <div class="form-group">
          <label for="email"> <p>correo</p></label>
          <input
            class="form-control"
            type="email"
            name="email"
            id="email"
            placeholder="Escribe tu correo"
            required
          />
        </div>
        <br />

        <div class="form-group">
          <label for="comentario">Comentario</label>
          <textarea
            class="form-control"
            id="comentario"
            rows="3"
            placeholder="Escribe tu duda o inquietud"
            style="resize: none"
            maxlength="150"
          ></textarea>
        </div>
        <br />
        <button type="submit" class="btn btn-light buttons">Enviar</button>
      </form>
    </div>


@endsection