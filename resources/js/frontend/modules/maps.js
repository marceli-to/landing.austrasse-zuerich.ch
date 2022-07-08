mapboxgl.accessToken = 'pk.eyJ1IjoibWFyY2VsaXRvb29vIiwiYSI6ImNrMHNsdmhwdjAzcjIzZ3BldTlqdWhnaWEifQ.EWZE383Tn4xBt0E5pSXh6Q';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/marcelitoooo/ck55dr00808kn1cnxip8mz459',
    center: [8.518925326777016,47.364031287388606],
    zoom: 13
});
map.addControl(new mapboxgl.NavigationControl());
map.scrollZoom.disable();

var geojson = {
  type: 'FeatureCollection',
  features: [{
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [8.518925326777016,47.364031287388606],
    },
    properties: {
      title: 'Billroth Minerva',
      description: 'Zürich'
    }
  }]
};

// add markers to map
geojson.features.forEach(function(marker) {

// create a HTML element for each feature
var el = document.createElement('div');
el.className = 'marker';

// make a marker for each feature and add to the map
new mapboxgl.Marker(el)
  .setLngLat(marker.geometry.coordinates)
  .addTo(map);
});