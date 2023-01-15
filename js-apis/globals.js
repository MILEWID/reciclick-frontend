async function obtenerInstalacionesGlobal(idSelect = '') {
    const selectInstalacion = document.getElementById(idSelect);
    if (!selectInstalacion) return;
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