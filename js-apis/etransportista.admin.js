// async function registrarManifiestoP2(event) {
//     event.preventDefault();
//     try {
//         const data = {
//             n_registro: this.numRegistro.value,
//             n_manifiesto: this.numManifiesto.value,
//             pagina: this.numPagina.value,
//             instrucciones_especiales: this.numIntrucciones.value,
//             nombre_productor: this.nombreProductor.value,
//             cargo_productor: this.cargoProductor.value,
//             correo_productor: this.correoProductor.value,
//             telefono_productor: this.telefonoProductor.value,
//             numero_resolutivo: this.numResolutivo.value,
//             fecha_salida: this.fechaSalida.value,
//             id_instalacion: this.idInstalacion.value,
//             id_edestinataria: this.idDestinatario.value,
//             id_etrasportista: this.idTransportista.value
//         }
//         await instanceService2.post("/manifiesto-p1", data);
//         await Swal.fire({
//             icon: 'success',
//             title: 'AEE Actualizado',
//             text: 'Los datos del Manifiesto se actualizaron correctamente',
//             showConfirmButton: false,
//             timer: 1500
//         }) 
//     } catch (error) {
//         console.log(error);
//         Swal.fire({
//             icon: 'error',
//             title: 'Manifiesto  no creado ',
//             text: 'Hubo un error al crear  el Manifiesto ',
//             showConfirmButton: false,
//             timer: 1500
//         })
//     }
// }





