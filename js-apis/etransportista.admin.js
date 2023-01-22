async function registrarManifiestoP2(event) {
    event.preventDefault();
    const man2 =document.getElementById("addMani");
    try {
        const data = {
            punto_salida: man2.inputDirección.value,
            punto_llegada: man2.puntoLlegada.value,
            autorizacion: man2.autorizacion.value,
            fecha_embarque: man2.fechaEmbarque.value,
            ruta_transporte: man2.rutaTransporte.value,
            carreteras: man2.carretera.value,
            id_transportista: man2.idUsuario.value,
            id_manifiesto: 1, 
        }
        await instanceService2.post("/manifiesto-p2", data);
        await Swal.fire({
            icon: 'success',
            title: 'AEE Actualizado',
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





