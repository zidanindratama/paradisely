// Mapbox
mapboxgl.accessToken =
    "pk.eyJ1IjoiemlkYW5pbmRyYXRhbWEiLCJhIjoiY2tudHBvYjRrMDRtYjJ1cWE0dGV2ZWg5MSJ9.0XrRhmUxaAbEusrIyC1VyQ";

var lat = document.querySelector("#eksplorasi_lati").value;
var lon = document.querySelector("#eksplorasi_long").value;

var map = new mapboxgl.Map({
    container: "map", // container id
    style: "mapbox://styles/mapbox/streets-v11", // style URL
    center: [lon, lat], // starting position [lng, lat]
    zoom: 14 // starting zoom
});

const nav = new mapboxgl.NavigationControl();
map.addControl(nav);

var directions = new MapboxDirections({
    accessToken: mapboxgl.accessToken
});

map.addControl(directions, "top-left");
var marker = new mapboxgl.Marker().setLngLat([lon, lat]).addTo(map);
