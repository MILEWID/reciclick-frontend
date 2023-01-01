alert("holi")


var config = {
  method: 'get',
  url: 'https://microservicios-p49tw.ondigitalocean.app/api/v1/aee',
  headers: { 
    'Authorization': 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZF9lcHJvZHVjdG9yIjoyLCJydWMiOiIyMzAwMzY4NjY1MDAxIiwiaWRfdXN1YXJpbyI6NiwidXN1YXJpbyI6eyJ1c3VhcmlvIjoiYW5nZWxvano3IiwiY29ycmVvIjoiYW5nZWxsby5vcmRvbmV6QGhvdG1haWwuY29tIiwibm9tYnJlIjoiUEVSU0VPIiwiZm90b191cmwiOiJodHRwczovL2ltZy5mcmVlcGlrLmNvbS92ZWN0b3ItcHJlbWl1bS9wZXJmaWwtYXZhdGFyLWhvbWJyZS1pY29uby1yZWRvbmRvXzI0NjQwLTE0MDQ0LmpwZz93PTc0MCIsInRlbGVmb25vIjoiMDk5NjkyMTg3MyIsImRvbWljaWxpbyI6IkF2LiBUc2FmaXF1aSB5IFTDumxjYW4iLCJsaWNlbmNpYV9hbWJpZW50YWwiOiIxMjM0NTYiLCJlc3RhZG8iOjEsImlkX3RpcG8iOjJ9LCJpYXQiOjE2NzExNTUyMjR9.I5W0ktmSGomB6vTrn4_e3zoDfRzNCUNpZAjGWzXsgDE'
  }
};

axios(config)
.then(function (response) {
  console.log(JSON.stringify(response.data));
})
.catch(function (error) {
  console.log(error);
});