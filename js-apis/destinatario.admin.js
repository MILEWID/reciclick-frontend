async function obtenerDestinatarioAlterno(idSelect = '') {
    const selectDestinatario = document.getElementById(idSelect);
    if (!selectDestinatario) return;
    const fragment = document.createDocumentFragment();
    try {
        const { data } = await instanceService1.get("/empresa-destinatario")
        data.forEach(dest => {
            const op = document.createElement("OPTION");
            op.value = dest.id_edestinataria;
            op.textContent = dest.Usuario.nombre;
            fragment.appendChild(op);
        })
        selectDestinatario.appendChild(fragment);
    }
    catch (error) {
        console.log(error);
    }
}



async function registrarManifiestoP3(event) {
    event.preventDefault();
    const man2 =document.getElementById("addMani");
    try {
        const data = {
            diferencias_entregas: man2.diferencias.value,
            id_destinatario_alterno: man2.destAlt.value,
            fecha_destinatario_alterno: man2.fechaDestAlt.value,
            manejo: man2.manejo.value,
            observaciones: man2.observa.value,
            nombre_encargado: man2.nombreEncargado.value,
            cargo_encargado: man2.cargoEncargado.value,
            fecha_encargado: man2.fechaEncargado.value,
            id_manifiesto: man2.idManifiesto.value, 
        }
        await instanceService4.post("/manifiesto-p3", data);
        await Swal.fire({
            icon: 'success',
            title: 'Manifiesto Actualizado',
            text: 'Los datos del Manifiesto se actualizaron correctamente',
            showConfirmButton: false,
            timer: 1500
        }) 
    } catch (error) {
        console.log(error);
        Swal.fire({
            icon: 'error',
            title: 'Manifiesto  no creado ',
            text: 'Hubo un error al actualizar  el Manifiesto ',
            showConfirmButton: false,
            timer: 1500
        })
    }
}

