
async function registrarInstalacion(event) {
    try {
        event.preventDefault();
        const body = {
            nombre_instalacion: this.nombre_instalacion.value,
            domicilio: this.domicilio.value,
            provincia: this.provincia.value,
            canton: this.canton.value,
            parroquia: this.parroquia.value,
            n_onu: this.n_onu.value,
            telefono: this.telefono.value,
            estado: this.estado.value,
        }

        await instanceService2.post('/instalaciones', body);
        await Swal.fire({
            title: 'Instalación registrada',
            text: 'La instalación ha sido registrada con éxito',
            icon: 'success',
        });
        const btnCancelar = document.getElementById("btnCancelar");
        return location.href = btnCancelar.dataset.urlHome
    }
    catch (error) {
        console.error(error);
        await Swal.fire({
            icon: 'error',
            title: 'Error al registrar la instalación',
            text: 'Ha ocurrido un error al registrar la instalación',
        });
    }
}

async function obtenerInstalacion(id) {
    const btnCancelar = document.getElementById("btnCancelar");
    try {
        const form = document.getElementById('formInstalacion');
        const { data: [instalacion] } = await instanceService2.get(`/instalaciones/campo/id_instalacion/${id}`);

        if (!instalacion) {
            await Swal.fire({
                icon: 'error',
                title: 'Error al obtener la instalación',
                text: 'La instalación no existe',
            });
            return location.href = btnCancelar.dataset.urlHome
        }

        form.nombre_instalacion.value = instalacion.nombre_instalacion;
        form.domicilio.value = instalacion.domicilio;
        form.provincia.value = instalacion.provincia;
        cargarCantones(instalacion.provincia);
        form.canton.value = instalacion.canton;
        cargarParroquias(instalacion.canton);
        form.parroquia.value = instalacion.parroquia;
        form.n_onu.value = instalacion.n_onu;
        form.telefono.value = instalacion.telefono;
        form.estado.value = instalacion.estado;

    } catch (error) {
        console.error(error);
        await Swal.fire({
            icon: 'error',
            title: 'Error al obtener la instalación',
            text: 'La instalación no existe',
        });
        return location.href = btnCancelar.dataset.urlHome
    }
}

async function actualizarInstalacion(form) {
    try {
        const body = {
            nombre_instalacion: form.nombre_instalacion.value,
            domicilio: form.domicilio.value,
            provincia: form.provincia.value,
            canton: form.canton.value,
            parroquia: form.parroquia.value,
            n_onu: form.n_onu.value,
            telefono: form.telefono.value,
            estado: form.estado.value,
            id_instalacion: form.id_instalacion.value,
        }

        await instanceService2.put('/instalaciones', body);
        await Swal.fire({
            title: 'Instalación actualizada',
            text: 'La instalación ha sido actualizada con éxito',
            icon: 'success',
        });
        const btnCancelar = document.getElementById("btnCancelar");
        return location.href = btnCancelar.dataset.urlHome
    }
    catch (error) {
        console.error(error);
        await Swal.fire({
            icon: 'error',
            title: 'Error al actualizar la instalación',
            text: 'Ha ocurrido un error al actualizar la instalación',
        });
    }
}