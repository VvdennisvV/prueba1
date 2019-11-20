<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

   </head>
    <body>
        <h5>
            LISTA DE DOCENTES
        </h5>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">
                        ID   
                    </th>
                    <th scope="col">
                        NOMBRE   
                    </th>
                </tr>
            </thead> 
            <tbody>
                @foreach ($listaDocentes as $undocente)
                    <tr>
                        <td>
                            {{$undocente->id}}
                        </td>
                        <td>
                            {{$undocente->nombre}}
                        </td>
                    </tr>  
                @endforeach                                        
            </tbody>
        </table>
    </body>
</html>
