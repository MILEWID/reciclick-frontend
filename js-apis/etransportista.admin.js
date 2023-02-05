async function registrarManifiestoP2(event) {
    event.preventDefault();
    const man2 = document.getElementById("addMani");
    try {
        const data = {
            punto_salida: man2.inputDirección.value,
            punto_llegada: man2.puntoLlegada.value,
            autorizacion: man2.autorizacion.value,
            fecha_embarque: man2.fechaEmbarque.value,
            ruta_transporte: man2.rutaTransporte.value,
            carreteras: man2.carretera.value,
            id_transportista: man2.idUsuario.value,
            id_manifiesto: man2.idManifiesto.value,
        }
        await instanceService3.post("/manifiesto-p2", data);
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

async function registrarUsuarioTransportista(event) {
    try {
        event.preventDefault();

        const body = {
            usuario: this.usuario.value,
            contrasenia: this.password.value,
            correo: this.correo.value,
            identificacion: this.identificacion.value,
            telefono: this.telefono.value,
            domicilio: this.domicilio.value,
            licencia_ambiental: this.licencia_ambiental.value,
            cargo: this.cargo.value,
            tipo_auto: this.tipo_auto.value,
            placa: this.placa.value,
        }
        const { data: usuario } = await instanceService1.post("/usuario-transportista", body);
        this.reset();
        await Swal.fire({
            icon: 'success',
            title: 'Usuario creado',
            text: 'El usuario transportista se creo correctamente',
            timer: 2500
        });
        const btnCancelar = document.getElementById("btnCancelar");
        return location.href = btnCancelar.dataset.urlHome


    } catch (error) {
        console.log(error);
        Swal.fire({
            icon: 'error',
            title: 'Usuario no creado',
            text: 'Hubo un error al crear el usuario transportista',
        })
    }

}


async function obtenerUsuarioTransportista(id) {
    try {
        const form = document.getElementById("formTransportista");
        const { data: [usuario] } = await instanceService1.get(`/usuario-transportista/campo/id_transportista/${id}`);

        if(!usuario){
            await Swal.fire({
                icon: 'error',
                title: 'Usuario no encontrado',
                text: 'No se encontro el usuario transportista a editar',
            });
            
            const btnCancelar = document.getElementById("btnCancelar");
            return location.href = btnCancelar.dataset.urlHome
        }

        form.usuario.value = usuario.Usuario.usuario;
        form.password.placeholder = "***************";
        form.identificacion.value = usuario.Usuario.identificacion;
        form.correo.value = usuario.Usuario.correo;
        form.telefono.value = usuario.Usuario.telefono || "";
        form.domicilio.value = usuario.Usuario.domicilio || "";
        form.licencia_ambiental.value = usuario.Usuario.licencia_ambiental || "";
        form.cargo.value = usuario.cargo || "";
        form.tipo_auto.value = usuario.tipo_auto || "";
        form.placa.value = usuario.placa || "";
        form.id_usuario.value = usuario.Usuario.id_usuario;
    }
    catch (error) {
        console.log(error);
    }
}

async function actualizarUsuarioTransportista(form) {
    try {
        const body = {
            telefono: form.telefono.value,
            domicilio: form.domicilio.value,
            licencia_ambiental: form.licencia_ambiental.value,
            cargo: form.cargo.value,
            tipo_auto: form.tipo_auto.value,
            placa: form.placa.value,
            id_usuario: form.id_usuario.value,
            id_transportista: form.id_utransportista.value,

        }

        const { data: usuario } = await instanceService1.put("/usuario-transportista", body);
        console.log(usuario);
        form.reset();
        await Swal.fire({
            icon: 'success',
            title: 'Usuario actualizado',
            text: 'El usuario transportista se actualizo correctamente',
            timer: 2500
        });

        const btnCancelar = document.getElementById("btnCancelar");
        return location.href = btnCancelar.dataset.urlHome;

    } catch (error) {
        console.log(error);
        Swal.fire({
            icon: 'error',
            title: 'Usuario no se pudo actualizar',
            text: 'Hubo un error al actualizar el usuario transportista',
        })
    }

}

async function eliminarUsuarioTransportista(id) {
    try{
        await instanceService1.delete(`/usuario-transportista/${id}`);
        await Swal.fire({
            icon: 'success',
            title: 'Usuario eliminado',
            text: 'El usuario transportista se elimino correctamente',
        });
        location.reload();
    }catch(error){
        console.log(error);
        Swal.fire({
            icon: 'error',
            title: 'Usuario no se pudo eliminar',
            text: 'Hubo un error al eliminar el usuario transportista',
        });
    }
}

