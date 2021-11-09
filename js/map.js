mapboxgl.accessToken =
    "pk.eyJ1IjoibGlzZS1tYXkiLCJhIjoiY2tuOGwxbGZvMHl3czJubzZiY3hocGRhMSJ9.9LF6VFo4i6iI801z96g7fQ";
var map = new mapboxgl.Map({
    container: "map", // container ID
    style: "mapbox://styles/mapbox/streets-v11", // style URL

    center: [10.197145952225775, 56.15970376676803], // starting position [lng, lat]
    zoom: 6, // starting zoom
});

//Markøre popup
var draupnir_popup = new mapboxgl.Popup({
    offset: 35,
    closeButton: false,
}).setHTML(
    '<h5 class="white_text map_h5">Debelmose Rideudstyr</h5>' +
        "<p><br>Debelmosevej 3<br>6900 Skjern</p>" +
        "<p><br>Tlf. +45 5194 9561</p>" +
        '<br><a href="mailto:sales@draupnir.com">Mail: sales@draupnir.com</a><br>'
);

var troldkaer_popup = new mapboxgl.Popup({
    offset: 35,
    closeButton: false,
}).setHTML(
    '<h5 class="white_text map_h5">Stutteri Troldkær</h5>' +
        "<p><br>Troldkærvej 2<br>9982 Ålbæk</p>" +
        "<p><br>Tlf. +45 2989 9753<br> tlf. +47 97533197 </p><br>" +
        '<a href="mailto:stutteri.troldkaer@gmail.com">Mail: stutteri.troldkaer@gmail.com</a>'
);

var rytterstuen_popup = new mapboxgl.Popup({
    offset: 35,
    closeButton: false,
}).setHTML(
    '<h5 class="white_text map_h5">Rytterstuen</h5>' +
        "<p><br>Ordrupvej 100A<br>2920 Charlottenlund</p>" +
        "<p><br>Tlf. butik +45 3094 7730</p>" +
        "<p><br>Tlf. +45 2877 7441</p>" +
        '<br><a href="mailto:info@rytterstuen.com">Mail: info@rytterstuen.com</a><br>' +
        '<br><a href="https://www.rytterstuen.com/" target="_blank">www.rytterstuen.com</a>'
);

var draumur_popup = new mapboxgl.Popup({
    offset: 35,
    closeButton: false,
}).setHTML(
    '<h5 class="white_text map_h5">DRAUMUR ApS</h5>' +
        "<p><br>Hesselrødvej 9<br>2980 Kokkedal</p>" +
        "<p><br>Tlf. +45 2924 9914</p>" +
        '<br><a href="mailto:bodil@draumur.dk">Mail: bodil@draumur.dk</a><br>' +
        '<br><a href="https://draumur.dk/" target="_blank">www.draumur.dk</a>'
);

var hreppur_popup = new mapboxgl.Popup({
    offset: 35,
    closeButton: false,
}).setHTML(
    '<h5 class="white_text map_h5">Hreppur</h5>' +
        "<p><br>Gamle Aalborgvej 2<br>9632 Møldrup</p>" +
        "<p><br>Tlf. +45 4248 4443</p>" +
        '<br><a href="mailto:hreppur@hreppur.dk">Mail: hreppur@hreppur.dk</a><br>' +
        '<br><a href="https://www.hreppur.dk/" target="_blank">www.hreppur.dk</a>'
);

//start draupnir
var draupnir = new mapboxgl.Marker({
    color: "#af0404",
})
    .setLngLat([8.613359338915485, 55.96450041298367])
    .setPopup(draupnir_popup)
    .addTo(map);
//slut draupnir

//start troldkaer
var troldkaer = new mapboxgl.Marker({
    color: "#af0404",
})
    .setLngLat([10.349543887250162, 57.60627075919865])
    .setPopup(troldkaer_popup)
    .addTo(map);
//sluttroldkaer

//start rytterstuen
var rytterstuen = new mapboxgl.Marker({
    color: "#af0404",
})
    .setLngLat([12.570825698424981, 55.76017594427974])
    .setPopup(rytterstuen_popup)
    .addTo(map);
//slut rytterstuen

//start draumur
var draumur = new mapboxgl.Marker({
    color: "#af0404",
})
    .setLngLat([12.417597727694396, 55.92373029802915])
    .setPopup(draumur_popup)
    .addTo(map);
//slut draumur

//start hreppur
var hreppur = new mapboxgl.Marker({
    color: "#af0404",
})
    .setLngLat([9.495954098910858, 56.578007251125705])
    .setPopup(hreppur_popup)
    .addTo(map);
//slut hreppur
