
const formAee = document.getElementById("formAee");


async function obtenerAee() {
    const id= formAee?.idAee.value;
    try {
       const {data:[aee]} = await axios.get("/aee/campo/id_aee/"+id);
       formAee.aName.value = aee.nombre,
       formAee.aCod.value= aee.codigo,
       formAee.aCapCon.value= aee.capacidad_contenedor,
       formAee.aTipo.value= aee.tipo_contenedor,
       formAee.aCant.value= aee.cantidad,
       formAee.aUni.value= aee.unidades,
       formAee.aInstalacion.value= aee.Instalacione.nombre_instalacion
    }
    catch (error) {
        console.log(error);
    }
}


async function obtenerInstalaciones() {
    const selectInstalacion = formAee?.aInstalacion;
    const fragment = document.createDocumentFragment();
    try {
        const { data } = await axios.get("/instalaciones")
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


async function agregarAee() {
    try {
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


async function actualizarAee(){
    try {
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
        await axios.put("/aee", data);
         Swal.fire({
            icon: 'success',
            title: 'AEE Actualizado',
            text: 'Los datos del AEE se actualizaron correctamente',
            showConfirmButton: false,
            timer: 1500
        })
        formAee.reset();
    } catch (error) {
        Swal.fire({
            icon: 'error',
            title: 'AEE no Aactualizado',
            text: 'Hubo un error al actualizar el AEE',
            showConfirmButton: false,
            timer: 1500
        })
    }
}

formAee?.addEventListener('submit', (e) => {
    e.preventDefault();
    agregarAee();
});


async function eliminarAee(id){
    try{
        await axios.delete('/aee/'+id)
        await Swal.fire({
            icon: 'success',
            title: 'AEE eliminado',
            text: 'Los datos del AEE se han eliminado correctamente',
            showConfirmButton: false,
            timer: 1500
        });
        location.reload();
    }
    catch(error){
        Swal.fire({
            icon: 'error',
            title: 'AEE no eliminado',
            text: 'Hubo un error al eliminar el AEE',
            showConfirmButton: false,
            timer: 1500
        })
    }

}

obtenerInstalaciones();
obtenerAee();
