
// axios.get("/empresa-transportista/id_etrasportista/1")
// .then(function (response) {
//   console.log("resp"+JSON.stringify(response.data));
// })
// .catch(function (error) {
//   console.log(error);
// });


const actualizar_perfil = async (nuevoPerfil) => {
    try {
        const { data: result } = await axios.put('/auth/actualizar-usuario-base', nuevoPerfil);
        delete result.usuario.foto_url;
        Cookies.set('jwt2', JSON.stringify(result));
        await Swal.fire({
            icon: 'success',
            title: 'Perfil actualizado',
            text: 'Los datos del perfil se actualizaron correctamente',
            showConfirmButton: false,
            timer: 1500
        })
        location.reload();
    } catch (error) {
        Swal.fire({
            icon: 'error',
            title: 'Perfil no actualizado',
            text: 'Hubo un error al actualizar el perfil',
            showConfirmButton: false,
            timer: 1500
        })
        console.log(error);
    }
}
