<?php
require_once ('lib/Smarty.class.php');
class TareasView {

    function renderTareas($tareas){
        $plantilla = new Smarty();

        $plantilla->assign('BASE_URL', BASE_URL);
        $plantilla->assign('tareas', $tareas);
        
        $plantilla->display('templates/tareas.tpl');

    }
}