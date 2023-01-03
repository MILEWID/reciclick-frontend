
// cargarAee();

async function cargarAee() {
    try {
        const tablaBodyAee = document.getElementById("tablaBodyAee");
        const fragment = document.createDocumentFragment()
        const { data } = await axios.get("/aee")
        data.forEach(aee => {
            const tr = document.createElement("TR");
            let cu = cuerpoAEE(aee);
            tr.innerHTML = cu;
            fragment.appendChild(tr)
        });
        tablaBodyAee.appendChild(fragment);
    } catch (error) {
        console.log(error);
    }
}

// todo 
function cuerpoAEE(aee) {
    return ` <td>${aee.nombre}</td>
    <td>${aee.Instalacione.nombre_instalacion}</td>
    <td>${aee.codigo}</td>
    <td>${aee.capacidad_contenedor}</td>
    <td>${aee.tipo_contenedor}</td>
    <td>${aee.cantidad}</td>
    <td>${aee.unidades}</td>
    <td><div class="badge ${aee.estado === 1 ? "badge-success" : "badge-danger"}  badge-pill">${aee.estado == 1 ? "Activo" : "Inactivo"}</div></td>
    <td>
        <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon p-0"><i class="fas fa-trash text-danger"></i></button>
        <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon p-0"><i class="fas fa-edit text-warning"></i></button>
    </td>`
}