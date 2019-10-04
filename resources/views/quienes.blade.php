@extends('maestra')

@section('seccion')
<form>
    <br><br>
        <div class="form-group">
          <label for="exampleInputEmail1">direccion de correo electronico</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
                <label for="exampleFormControlSelect1">eliga opcion</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>...</option>  
                  <option>Felicitaciones</option>
                  <option>Reclamos</option>
                  <option>Publicidad</option>
                  <option>Trabaja con nosotros</option>
                  <option>Otros</option>
                </select>
              </div>
                    <div class="form-group">
                    <label for="exampleFormControlTextarea1">Ingrese su Consulta</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div> 
             <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
      <br><br>
    
@endsection