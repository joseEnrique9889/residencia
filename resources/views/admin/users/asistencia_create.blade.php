<div class="modal fade" id="create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        <center><h2>Registra tu Asistencia</h2></center>
            </div>
            <div class="modal-body">

               <form action="{{ url('/asistir') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="fomr-group">
            <label>Fecha:</label>
            <input type="date" class="form-control" name="fecha" required>
          </div>
          <hr>
      <div class="fomr-group">
            <label>Hora:</label>
            <input type="time" class="form-control" name="hora" required>
          </div>
          <hr>
       <div class="fomr-group">
        <label>Grupo:</label>
            <input  class="form-control" name="grupo" required>
          </div>
<hr>

       <center><input class="btn btn-success" type="submit" value="Asistir"></center> 
  </form>
</div>
</div>
</div>
</div>
</div>