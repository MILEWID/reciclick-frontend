
// Probado y funcionando
async function obtenerAee() {

    const formAee = document.getElementById("formAee");
    const id = formAee?.idAee.value;
    try {
        const { data: [aee] } = await axios.get("/aee/campo/id_aee/" + id);
        $('aInstalacion').val(aee.Instalacione.id_instalacion);
        formAee.aName.value = aee.nombre;
        formAee.aCod.value = aee.codigo;
        formAee.aCapCon.value = aee.capacidad_contenedor;
        formAee.aTipo.value = aee.tipo_contenedor;
        formAee.aCant.value = aee.cantidad;
        formAee.aUni.value = aee.unidades;
        // formAee.aInstalacion.value = aee.Instalacione.nombre_instalacion;
    }
    catch (error) {
        console.log(error);
    }
}

// Probado y funcionando
async function agregarAee(event) {
    try {
        event.preventDefault();
        const data = {
            nombre: formAee.aName.value,
            codigo: formAee.aCod.value,
            capacidad_contenedor: formAee.aCapCon.value,
            tipo_contenedor: formAee.aTipo.value,
            cantidad: formAee.aCant.value,
            unidades: formAee.aUni.value,
            estado: 1,
            id_instalacion: formAee.aInstalacion.value,
        }
        await axios.post("/aee", data);
        Swal.fire({
            icon: 'success',
            title: 'AEE Agregado',
            text: 'Los datos del AEE se actualizaron correctamente',
            showConfirmButton: false,
            timer: 1500
        })
        formAee.reset();
    } catch (error) {
        Swal.fire({
            icon: 'error',
            title: 'AEE no Agregado',
            text: 'Hubo un error al Agregar el AEE',
            showConfirmButton: false,
            timer: 1500
        })
    }
}

// Probado y funcionaodo
async function actualizarAee(event) {
    try {
        event.preventDefault();
        const formAee = document.getElementById("formAee");

        const data = {
            nombre: formAee.aName.value,
            codigo: formAee.aCod.value,
            capacidad_contenedor: formAee.aCapCon.value,
            tipo_contenedor: formAee.aTipo.value,
            cantidad: formAee.aCant.value,
            unidades: formAee.aUni.value,
            estado: 1,
            id_instalacion: formAee.aInstalacion.value,
            id_aee: formAee.idAee.value
        }
        await axios.put("/aee", data);
        await Swal.fire({
            icon: 'success',
            title: 'AEE Actualizado',
            text: 'Los datos del AEE se actualizaron correctamente',
            showConfirmButton: false,
            timer: 1500
        })
        location.reload();
    } catch (error) {
        console.log(error)
        Swal.fire({
            icon: 'error',
            title: 'AEE no Aactualizado',
            text: 'Hubo un error al actualizar el AEE',
            showConfirmButton: false,
            timer: 1500
        })
    }
}

// Probado y funcionado
async function eliminarAee(id) {
    try {
        await axios.delete('/aee/' + id)
        await Swal.fire({
            icon: 'success',
            title: 'AEE eliminado',
            text: 'Los datos del AEE se han eliminado correctamente',
            showConfirmButton: false,
            timer: 1500
        });
        location.reload();
    }
    catch (error) {
        console.log(error)
        Swal.fire({
            icon: 'error',
            title: 'AEE no eliminado',
            text: 'Hubo un error al eliminar el AEE',
            showConfirmButton: false,
            timer: 1500
        })
    }

}

// Probado y funcionado
async function registrarManifiesto(event) {
    event.preventDefault();
    try {
        const data = {
            n_registro: this.numRegistro.value,
            n_manifiesto: this.numManifiesto.value,
            pagina: this.numPagina.value,
            instrucciones_especiales: this.numIntrucciones.value,
            nombre_productor: this.nombreProductor.value,
            cargo_productor: this.cargoProductor.value,
            correo_productor: this.correoProductor.value,
            telefono_productor: this.telefonoProductor.value,
            numero_resolutivo: this.numResolutivo.value,
            fecha_salida: this.fechaSalida.value,
            id_instalacion: this.idInstalacion.value,
            id_edestinataria: this.idDestinatario.value,
            id_etrasportista: this.idTransportista.value
        }
        await axios.post("/manifiesto-p1", data);
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
            text: 'Hubo un error al crear  el Manifiesto ',
            showConfirmButton: false,
            timer: 1500
        })
    }
}


async function mostrarManifiesto(id){

}
