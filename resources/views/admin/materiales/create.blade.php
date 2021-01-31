<div class="modal fade" id="create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        <center><h2>MATERIAL NUEVO</h2></center>
            </div>
            <div class="modal-body">
    <form action="{{ url('/materiales') }}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
   <div class="form-group">
    <label for="nombre">Nombre del Material: </label>
    <input type="text" name="nombre" class="form-control" id="nombre" required>
  </div>
  
  
   
  


  
  <center><input class="btn btn-success" type="submit" value="Agregar Material"></center> 
  
</form>
<button type="button" class="btn btn-danger" data-dismiss="modal">cerrar</button>
</form>
</div>
</div>

</div>
</div>
