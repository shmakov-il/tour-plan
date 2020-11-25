ymaps.ready(init);
function init() {
    var myMap = new ymaps.Map("map", {
            center: [21.023376, 105.857749],
            zoom: 17
        }, {
            searchControlProvider: 'yandex#search'
        }),
        myGeoObject = new ymaps.GeoObject({
            // Описание геометрии.
            geometry: {
                type: "Point",
                coordinates: [21.023376, 105.857749]
            },
        },
        );
    myMap.geoObjects
        .add(myGeoObject)
        
}
