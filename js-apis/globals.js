async function obtenerInstalacionesGlobal(idSelect = '') {
    const selectInstalacion = document.getElementById(idSelect);
    if (!selectInstalacion) return;
    const fragment = document.createDocumentFragment();
    try {
        const { data } = await instanceService2.get("/instalaciones")
        data.forEach(instalacion => {
            const op = document.createElement("OPTION");
            op.value = instalacion.id_instalacion;
            op.textContent = instalacion.nombre_instalacion;
            fragment.appendChild(op);
        })
        selectInstalacion.appendChild(fragment);
    }
    catch (error) {
        console.log(error);
    }
}


async function obtenerDestinatarioGlobal(idSelect = '') {
    const selectDestinatario  = document.getElementById(idSelect);
    if (!selectDestinatario) return;
    const fragment = document.createDocumentFragment();
    try {
        const { data } = await instanceService1.get("/empresa-destinatario")
        data.forEach(empresa => {
            const op = document.createElement("OPTION");
            op.value = empresa.id_edestinataria;
            op.textContent = empresa.Usuario.nombre;
            fragment.appendChild(op);
        })
        selectDestinatario.appendChild(fragment);
    }
    catch (error) {
        console.log(error);
    }
}


async function obtenerTransportistaGlobal(idSelect = '') {
    const selectTransportista  = document.getElementById(idSelect);
    if (!selectTransportista) return;
    const fragment = document.createDocumentFragment();
    try {
        const { data } = await instanceService1.get("/empresa-transportista")
        data.forEach(empresa => {
            const op = document.createElement("OPTION");
            op.value = empresa.id_etrasportista;
            op.textContent = empresa.Usuario.nombre;
            fragment.appendChild(op);
   
        })
        selectTransportista.appendChild(fragment);
    }
    catch (error) {
        console.log(error);
    }
}


async function obtenerTransportistasUsuarios(idSelect = '') {
    const selectTransportista = document.getElementById(idSelect);
    if (!selectTransportista) return;
    const fragment = document.createDocumentFragment();
    try {
        const { data } = await instanceService3.get("/usuario-transportista")
        data.forEach(trans => {
            const op = document.createElement("OPTION");
            op.value = trans.id_trasportista;
            op.textContent = trans.Usuario.nombre;
            fragment.appendChild(op);
        })
        selectTransportista.appendChild(fragment);
    }
    catch (error) {
        console.log(error);
    }
}

