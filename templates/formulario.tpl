        <form id="form-tarea" action="{$BASE_URL}agregar" method="post">
                            
            <label>Título: <input type="text" name="titulo"></label></p>
            <label>Descripcion: <textarea name="descripcion" cols="50" rows="10"></textarea></label></p>
            <label>Prioridad:   
                <select name="prioridad">
                    <option value="5">5 - Mas alta</option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1 - Mas Baja</option>
                </select></label></p>

            <input type="submit">
                            
        </form>