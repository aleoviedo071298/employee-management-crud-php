var url = "http://localhost/empleados/index.php";
var modalEditar = new bootstrap.Modal(document.getElementById('editarModal'), {
    keyboard: false
});
var aplicacion = new function () {
    //variables
    this.idEditar = document.getElementById('idEditar');
    this.nombreEditar = document.getElementById('nombreEditar');
    this.correoEditar = document.getElementById('correoEditar');
    this.empleados = document.getElementById('empleados');
    this.nombre = document.getElementById('nombre');
    this.correo = document.getElementById('correo');
    this.id = document.getElementById('id');

    //funcion para leer empleados
    this.Leer = function () {
        //variables
        var datos = "";
        //consultar
        fetch(url + "?consultar")
            .then(response => response.json())
            .then((data) => {
                console.log(data);
                if (Array.isArray(data)) {
                    data.map(
                        function (empleado, index, array) {
                            datos += `<tr>
                                        <td>${empleado.id}</td>
                                        <td>${empleado.nombre}</td>
                                        <td>${empleado.correo}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-primary" onclick="aplicacion.Editar(${empleado.id})">Editar</button>
                                                <button class="btn btn-danger" onclick="aplicacion.Borrar(${empleado.id})">Borrar</button>
                                            </div>
                                        </td>
                                    </tr>`;
                        }
                    );
                }
                this.empleados.innerHTML = datos;
            })
            .catch(console.log);
    };
    //funcion para agregar empleados
    this.Agregar = function () {
        //variables
        var datosEnviar = { nombre: this.nombre.value, correo: this.correo.value };
        //consultar
        fetch(url + "?agregar", { method: "POST", body: JSON.stringify(datosEnviar) })
            .then(response => response.json())
            .then((data) => {
                console.log(data);
                this.Leer();
            })
            .catch(console.log);
    };
    //funcion para borrar empleados
    this.Borrar = function (id) {
        console.log(id);
        fetch(url + "?borrar&id=" + id)
            .then(response => response.json())
            .then((data) => {
                this.Leer();
            })
            .catch(console.log);

    };
    //funcion para editar empleados
    this.Editar = function (id) {
        console.log(id);
        fetch(url + "?consultarId&id=" + id)
            .then(response => response.json())
            .then((data) => {
                console.log(data);
                this.idEditar.value = data[0]['id'];
                this.nombreEditar.value = data[0]['nombre'];
                this.correoEditar.value = data[0]['correo'];
            })
            .catch(console.log);
        modalEditar.show();

    };
    //funcion para actualizar empleados
    this.Actualizar = function () {
        var datosEnviar = { id: this.idEditar.value, nombre: this.nombreEditar.value, correo: this.correoEditar.value };
        fetch(url + "?actualizar", { method: "POST", body: JSON.stringify(datosEnviar) })
            .then(response => response.json())
            .then((data) => {
                console.log(data);
                this.Leer();
            })
            .catch(console.log);
        modalEditar.hide();

    };
}
aplicacion.Leer();