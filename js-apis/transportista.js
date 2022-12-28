
axios.get("/empresa-transportista/id_etrasportista/1")
.then(function (response) {
  console.log("resp"+JSON.stringify(response.data));
})
.catch(function (error) {
  console.log(error);
});

