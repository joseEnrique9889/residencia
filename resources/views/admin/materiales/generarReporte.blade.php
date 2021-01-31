<div class="modal fade" id="create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        <center><h2>Generar Reporte</h2></center>
            </div>
            <div class="modal-body">
    <form  action="{{route('generar')}}" method ="POST">
                @csrf
                <br>

                            
                                <h5 for="date">Fecha inicio:</h5>
                                
                                    <input type="date" class="form-control input-sm" id="fromDate" name="fromDate" required/>
                             
                                     <br>
                                <h5 for="date">Fecha Termino: </h5>
                            
                                    <input type="date" class="form-control input-sm" id="toDate" name="toDate" required/>
                                <hr>
                            
                          
                                    <center><button type="submit" class="btn " name="generar" target="_blank" title="Generar"><img src="{{ url('static/images/pdf.png') }}" class='img-fluid'></button></center>
                                
                              </div>
                            </div>
                          </form>

</div>
</div>
</div>
</div>
