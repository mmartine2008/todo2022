<table class="table">
        <tr>
            <th>Título</th>
            <th>Descripción</th>
            <th>Prioridad</th>
            <th>Borrar</th>
            <th>Finalizar</th>
        </tr>
        {foreach $tareas item=tarea}
        <tr>
            <td>{$tarea.titulo}</td>
            <td>{$tarea.descripcion}</td>
            <td>{$tarea.prioridad}</td>
            <td><a href="{$BASE_URL}eliminar/{$tarea.id}">Borrar</a></td>
            {if $tarea.finalizada == 0}
                <td><a href="{$BASE_URL}terminar/{$tarea.id}">Finalizar</a></td>
            {else}
                <td></td>
            {/if}
        </tr>
        {/foreach}
        </table>