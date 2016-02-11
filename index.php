<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script type="text/javascript" src="pkgVista/js/send_request.js"></script>
                <script type="text/javascript" src="pkgVista/js/jquery/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="pkgVista/js/gestionEstudiante.js"></script>

    </head>
    <body>
        <table border="0">
            <tr>
                <td>
                    <label>Codigo</label>                        
                </td>
                <td>
                    <input type="text" id="txtCodigo">
                </td>

                <td rowspan="10" style="width: 600px">
                    <table id="listadoEstudiantes" border="1">
                        
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Nombre</label>                        
                </td>
                <td>
                    <input type="text" id="txtNombre">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Apellido</label>                        
                </td>
                <td>
                    <input type="text" id="txtApellido">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Cedula</label>                        
                </td>
                <td>
                    <input type="text" id="txtCedula">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Edad</label>                        
                </td>
                <td>
                    <input type="text" id="txtEdad">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Semestre</label>                        
                </td>
                <td>
                    <input type="text" id="txtSemestre">
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    <input type="button" value="Guardar" id="btnGuardar" onclick="guardarEstudiante();">
                    <input type="button" value="Buscar" id="btnBuscar" onclick="buscarEstudiante();">                    
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    <input type="button" value="Modificar" id="btnModificar" onclick="modificarEstudiante();">
                    <input type="button" value="Eliminar" id="btnEliminar" onclick="eliminarEstudiante();">
                </td>
            </tr>

        </table>
    </body>
</html>
