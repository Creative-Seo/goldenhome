// http://api.yandex.ru/maps/doc/intro/concepts/intro.xml

$(document).ready(function() {
  if ($('.ymap').length) {
    ymaps.ready(yinit);
  }
});


function yinit () {
  $('.ymap').each(function(index) {

    var myMap = new ymaps.Map(this, {
      center: [$(this).data('c1'), $(this).data('c2')],
      zoom: $(this).data('zoom')
//    type: 'yandex#satellite'
    });

    myMap.controls.add('typeSelector');
    myMap.controls.add('zoomControl');

    if ($(this).data('type')) {
      myMap.setType($(this).data('type'));
    }

    var myPlacemark = new ymaps.Placemark([$(this).data('c1'), $(this).data('c2')], {}, {
      iconImageHref: '/_template/img/map2.png',
      iconImageSize: [72, 73],
      iconImageOffset: [-22, -73]
    });

    myMap.geoObjects.add(myPlacemark);

  });
}
