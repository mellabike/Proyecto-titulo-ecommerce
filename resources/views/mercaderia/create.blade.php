<h1>Aqui creare la tabla Productos</h1>
<br>

<form action="{{url('mercaderia')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

<label for="Nombre">{{'Nombre'}}</label>    
<input type="text" name="Nombre" id="Nombre" value="">
<br/>

<label for="Estado">{{'Estado'}}</label>    
<input type="text" name="Estado" id="Estado" value="">
<br/>

<label for="Descripcion">{{'Descripcion'}}</label>    
<input type="text" name="Descripcion" id="Descripcion" value="">
<br/>

<label for="Correo">{{'Correo'}}</label>    
<input type="email" name="Correo" id="Correo" value="">
<br/>

<label for="Foto">{{'Foto'}}</label>    
<input type="file" name="Foto" id="Foto" value="">
<br/>

<input type="submit" value="Agregar">
</form>
