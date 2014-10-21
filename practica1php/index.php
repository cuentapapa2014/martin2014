<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css" />
        <meta charset="UTF-8">
        <title>Formmulario de Ficheros</title>
    </head>
    <body>
        <div>
            <div id="divformulario">
                <h2>Formulario de Subida</h2>
                
                <form method="post" action="procesa.php" id="formulario" enctype="multipart/form-data">
                    <ul>
                        <li>
                            <label>Nombre: <input type="text" name="nombre"/></label>
                        </li>
                    <li>
                    <label>Fichero:</label><br/> <input type="file" multiple name="fichero[]" />
                    </li>
                    <li>
                        <br />
                    <label>Politica de nombres:</label>
                    </li>
                    <li>
                        <table>
                            <tr>
                                <td>Reemplazar</td>
                                <td><input type="radio" name="opcion" value="1" /></td>
                            </tr>
                            
                            <tr>
                                <td>Renombrar</td>
                                <td><input type="radio" name="opcion" value="0" /></td>
                            </tr>
                            
                            <tr>
                                <td>Ignorar</td>
                                <td><input type="radio" name="opcion" value="2" checked /></td>
                            </tr>
                        </table>
                    </li>
                    <li>
                        <table>
                            <th colspan="3">Extensiones</th>
                            <tr>
                                <td>.pdf</td>
                                <td>.jpg</td>
                                <td>.txt</td>
                                
                            </tr>
                            
                            <tr>
                                <td><input type="checkbox" name="check[]" value="pdf" /></td>
                                <td><input type="checkbox" name="check[]" value="jpg" /></td>
                                <td><input type="checkbox" name="check[]" value="txt" /></td>
                            </tr>
                           
                        </table>
                    </li>
                    <center><a href="./archivos/">Ver archivos</a></center>
                    <li>
                        <br/>
                    <label><input type="submit" value="aceptar" name="aceptar"></label>
                    </li>
                    </ul>
                </form>
                
            </div>
        </div>
    </body>
</html>
