async function obtenerDestinatarioAlterno(idSelect = '') {
    alert("entro a la funcion");
    const selectDestinatario = document.getElementById(idSelect);
    // const nombre = document.getElementById("nombreDestAlt");
    // const tel = document.getElementById("teloDestAlt");
    // const licDestAlt = document.getElementById("licDestAlt");
    if (!selectDestinatario) return;
    const fragment = document.createDocumentFragment();
    try {
        const { data } = await instanceService1.get("/empresa-destinatario")
        data.forEach(dest => {
            const op = document.createElement("OPTION");
            op.value = dest.id_edestinataria;
            op.textContent = dest.Usuario.nombre;
            fragment.appendChild(op);
            // nombre.value  = dest.Usuario.nombre;
            // tel.value = dest.Usuario.telefono;
            // licDestAlt.value= dest.Usuario.licencia_ambiental;
        })
        selectDestinatario.appendChild(fragment);


    }
    catch (error) {
        console.log(error);
    }
}
