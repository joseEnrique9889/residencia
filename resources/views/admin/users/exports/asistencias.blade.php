<table>
    <thead>
    <tr>
        <br>
        <th></th>
        <th><center>Matricula</center></th>
        <th><center>Nombre</center></th>
        <th><center>grupo</center></th>
        <th><center>Asistencia</center></th>
        
    </tr>
    </thead>
    <tbody>
    @foreach($asistencias as $asistencia)
        <tr>
            <td></td>
            <td>{{ $asistencia->usuario->control }}</td>
            <td>{{ $asistencia->usuario->name }}</td>
            <td>{{ $asistencia->grupo }}</td>
            <td>{{ $asistencia->rol }}</td>
            
        </tr>
    @endforeach
    </tbody>
</table>