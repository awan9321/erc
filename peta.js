var mapboxAccessToken = 'pk.eyJ1IjoiYWtyaXN0aWF3YW4iLCJhIjoiY2w4OHp6am90MDJpNzNvbzVubGNtbGtubiJ9.K8_5Bw1k3JPQrhHRfR7Q6g';
var map = L.map('map').setView([-2, 122.81], 5);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=' + mapboxAccessToken, {
    id: 'mapbox/light-v10',
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    tileSize: 512,
    
    zoomOffset: -1
}).addTo(map);

var geojsonMarkerOptions = {
    radius: 8,
    fillColor: "brown",
    color: "brown",
    weight: 1,
    opacity: 1,
    fillOpacity: 1
};

var geojsonFeatures = [{
    "type": "Feature",
    "properties": {
        "name": "Stasiun Klimatologi Aceh",
        "popupContent": "Ini adalah stasiun klimatologi",
        "show_on_map": true
    },
    "geometry": {
        "type": "Point",
        "coordinates": [95.464216, 5.404157]
    }
}, {
    "type": "Feature",
    "properties": {
        "name": "Stasiun Klimatologi Sumatera Utara",
        "popupContent": "Ini adalah stasiun klimatologi",
        "show_on_map": true
    },
    "geometry": {
        "type": "Point",
        "coordinates": [98.714706, 3.620937]

    }
},
{
    "type": "Feature",
    "properties": {
        "name": "Stasiun Klimatologi Banten",
        "popupContent": "Ini adalah stasiun klimatologi",
        "show_on_map": true
    },
    "geometry": {
        "type": "Point",
        "coordinates": [106.751144, -6.261590]
    }
},
{
    "type": "Feature",
    "properties": {
        "name": "Stasiun Klimatologi Bali",
        "popupContent": "Ini adalah stasiun klimatologi",
        "show_on_map": false
    },
    "geometry": {
        "type": "Point",
        "coordinates": [114.617503, -8.340580]
    }
},
{
    "type": "Feature",
    "properties": {
        "name": "Stasiun Klimatologi Kupang",
        "popupContent": "Ini adalah stasiun klimatologi",
        "show_on_map": true
    },
    "geometry": {
        "type": "Point",
        "coordinates": [123.667000, -10.139000]
    }
}];

function onEachFeature(feature, layer) {
    if (feature.properties && feature.properties.popupContent) {
        layer.bindPopup(feature.properties.popupContent);
    }
}

L.geoJSON(geojsonFeatures, {
    filter: function(feature, layer) {
        return feature.properties.show_on_map;
    },
    pointToLayer: function (feature, latlng) {
        return L.circleMarker(latlng, geojsonMarkerOptions);
    },
    onEachFeature: onEachFeature
}).addTo(map);