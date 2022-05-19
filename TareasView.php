<?php
require_once ('lib/Smarty.class.php');

class TareasView {
    function renderHeader(){
        $header = '<html>
                        <head>
                        </head>
                        <body>
                        <h1>Listado de Tareas</h1>';
        echo $header;
    }
    
    function renderFormulario(){
        $formulario = '<form action="'.BASE_URL.'agregar" method="post">
                            
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
                            
                        </form>';
        echo $formulario;
        
    }
    function renderTablaTareas($tareas){
        echo ('<table border="1">');
        echo ('<tr><th>Título</th>');
        echo ('<th>Descripción</th><th>Prioridad</th>');
        echo ('<th>Borrar</th><th>Finalizar</th></tr>');
        foreach ($tareas as $tarea) {
            echo('<tr>');
            
            $id = $tarea['id'];
            $titulo = $tarea['titulo'];
            $descripcion = $tarea['descripcion'];
            $prioridad = $tarea['prioridad'];
            $finalizada = $tarea['finalizada'];
    
            echo("<td>$titulo</td>");
            echo("<td>$descripcion</td>");
            echo("<td>$prioridad</td>");
            
            echo('<td><a href="'.BASE_URL.'eliminar/'.$id.'">Borrar</a></td>');
            if ($finalizada) {
                echo('<td></td>');
            } else {
                echo('<td><a href="'.BASE_URL.'terminar/'.$id.'">Finalizar</a></td>');
            }
            
            echo('</tr>');
        }
    }
    function renderFooter(){
        $footer = '</body></html>';
        echo $footer;
    }    

    function renderTareas($tareas){
        $this->renderHeader();
        $this->renderFormulario();
        $this->renderTablaTareas($tareas);
        $this->renderFooter();
    }
}