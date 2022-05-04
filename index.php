<?php
   require_once 'lib/consultas.php';
?>
<html>
    <head>
    </head>
    <body>
    <h1>Listado de Tareas</h1>
    <form action="registrar.php" method="post">
        
        <label>Título: <input type="text" name="titulo"></label></p>
        <label>Descripcion: <textarea name="descripcion" cols="50" rows="10"></textarea></label></p>
        <label>Prioridad:   <select name="prioridad">
                            <option value="5">5 - Mas alta</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1">1 - Mas Baja</option>
                            </select></label></p>

        <input type="submit">
        
    </form>
    <?php
        $tareas = getTareas();
        
        echo ('<table border="1">');
        echo ('<tr><th>Id</th><th>Título</th>');
        echo ('<th>Descripción</th><th>Prioridad</th><th>Finalizado</th></tr>');
        foreach ($tareas as $tarea) {
            echo('<tr>');
            foreach ($tarea as $dato)
            {
                echo ('<td>');
                echo ($dato);
                echo ('</td>');
            }
            echo('</tr>');
        }

    ?>
    </body>

</html>

