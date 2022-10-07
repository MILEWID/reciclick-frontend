//hafin95138@edxplus.com => correo temporal para las cuentas

/**
 * Funcion que devuelve la url de la api GeoApify
 * @param {string} lat Valor de la latitud
 * @param {string} lon Valor de la longitud
 * @returns {string}
 */
const urlGeoApify = (lat, lon) => {
   const API_KEY = '3a5031b0a0a048c38208abda953858aa';

   return `https://api.geoapify.com/v1/geocode/reverse?lat=${lat}&lon=${lon}&apiKey=${API_KEY}`
}

/**
 * Funcion que devuelve la url de la api LocationIQ
 * @param {string} lat Valor de la latitud
 * @param {string} lon Valor de la longitud
 * @returns {string}
 */
const urlLocationIQ = (lat, lon) => {
   const API_KEY = 'pk.9f700a59961a2f9b1d5765494e2bd982';

   return `https://us1.locationiq.com/v1/reverse?key=${API_KEY}&lat=${lat}&lon=${lon}&format=json`
}

const $inputDireccion = document.querySelector('#inputDirección');
const map = L.map('myMaps').fitWorld();
let marker = undefined;

L.tileLayer(`https://maps.wikimedia.org/osm-intl/{z}/{x}/{y}.png`, {
   maxZoom: 18,
   attribution: '© OpenStreetMap'
}).addTo(map);

map.locate({ setView: true, maxZoom: 12 });

map.on('click', ({ latlng }) => {
   if (marker) {
      map.removeLayer(marker);
   }
   marker = new L.marker(latlng, { draggable: true }).addTo(map);
   marker.on("dragend", handleChangeMarker);
   handleChangeMarker();
})

map.on('locationfound', onLocationFound);

map.on('locationerror', (e) => {
   alert(e.message);
});



function onLocationFound(e) {
   var radius = e.accuracy;

   marker = L.marker(e.latlng, { draggable: true }).addTo(map);

   marker.on("dragend", handleChangeMarker);

   handleChangeMarker();
}

async function handleChangeMarker() {
   try {
      const { lat, lng } = marker.getLatLng();
      const request = await fetch(urlGeoApify(lat, lng));
      const { features } = await request.json();
      const { properties } = features[0];
      $inputDireccion.value = properties?.formatted;
   } catch (error) {
      console.error(error)
   }
}
