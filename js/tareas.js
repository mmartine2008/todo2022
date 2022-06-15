"use strict"

let app = new Vue({
    el: "#template-vue-tasks",
    data: {
        subtitle: "Estas tareas se renderizan desde el cliente usando Vue.js",
        tasks: [] 
    }
});

function getTasks() {
    fetch("api/tareas")
    .then(response => response.json())
    .then(tasks => {
        app.tasks = tasks; // similar a $this->smarty->assign("tasks", $tasks)
    })
    .catch(error => console.log(error));
}

getTasks();


document.querySelector("#form-tarea").addEventListener('submit', addTask);
function addTask(e) {
    e.preventDefault();
    
    let data = {
        titulo:  document.querySelector("input[name=titulo]").value,
        descripcion:  document.querySelector("textarea[name=descripcion]").value,
        prioridad:  document.querySelector("select[name=prioridad]").value
    }

    fetch('api/tareas', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},       
        body: JSON.stringify(data) 
     })
     .then(response => {
         getTasks();
     })
     .catch(error => console.log(error));
}
