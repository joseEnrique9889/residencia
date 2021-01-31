<div class="modal fade" id="create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                
              <h2> <CENTER>RESERVAR MATERIAL</CENTER> </h2>
            </div>
            <div class="modal-body">
               <form action="{{ url('/reservar') }}" method="POST" enctype="multipart/form-data">
      @csrf
       
      <div class="fomr-group">
            <label>Fecha:</label>
            <input type="date" class="form-control" name="fecha">
          </div>
      <div class="fomr-group">
            <label>Hora:</label>
            <input type="time" class="form-control" name="hora">
          </div>
              
              <div>
                <hr>
       <center><input class="btn btn-success" type="submit" value="Reservar"></center> 
       </div>
     </form>

<button type="button" class="btn btn-danger" data-dismiss="modal">cerrar</button>
</div>
</div>
</div>

</div>