<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<div class="mv-sub">
<img class="d-md-block d-none" src="<?php echo $wp_url; ?>/dist/images/mv_sub_access_pc.png" alt="写真">
<img class="d-md-none" src="<?php echo $wp_url; ?>/dist/images/mv_sub_access_sp.png" alt="写真">
</div>

<section class="">
<div class="container py-5">
  <h2 class="ttl-h2 mb-0">access</h2>
</div>
<div class="access-info">
<div class="container">
<div class="about__inner">
  <div class="mb-md-5 mb-4">
    <p class="text-center text-primary mb-0">電話番号</p>
    <p class="mb-0">052-253-5426</p>
  </div>
  <div class="mb-md-5 mb-4">
    <p class="text-center text-primary mb-0">住所</p>
    <p class="mb-0">愛知県名古屋市中区上前津1-2-34</p>
  </div>
  <div class="mb-md-5 mb-4">
    <p class="text-center text-primary mb-0">営業時間</p>
    <p class="mb-0">火・水・土・日10:00-19:00<br>木・金12:00-21:00</p>
  </div>
  <div class="">
    <p class="text-center text-primary mb-0">定休日</p>
    <p class="mb-0">毎週月曜日/第1・3火曜日</p>
  </div>
</div>
</div>
</div>
</section>

<div class="access__map">
<div class="embed-responsive embed-responsive-1by1">
<div id="map-canvas" class="embed-responsive-item"></div>
</div>

<p class="mb-0 text-center">名城線「上前津駅 7番出口」から直進し、徒歩1分「裏門前町」の交差点を左折、
<br>さらに徒歩1分程度直進してください。
<br>左手、白い建物2階「COMILE」の文字が目印です。</p>

</div>

<script src="//maps.google.com/maps/api/js?key=AIzaSyA5_k_xrwR0k-bvx3iUeIawpfzof2Br1Pg&language=ja"></script>
<script>
var map;
var brooklyn = new google.maps.LatLng(35.156873, 136.903228);
var MY_MAPTYPE_ID = 'Pandy_style';

function initialize() {
  var featureOpts = [{
      "featureType": "administrative",
      "elementType": "all",
      "stylers": [{
        "saturation": "-100"
      }]
    },
    {
      "featureType": "administrative.province",
      "elementType": "all",
      "stylers": [{
        "visibility": "off"
      }]
    },
    {
      "featureType": "landscape",
      "elementType": "all",
      "stylers": [{
          "saturation": -100
        },
        {
          "lightness": 65
        },
        {
          "visibility": "on"
        }
      ]
    },
    {
      "featureType": "poi",
      "elementType": "all",
      "stylers": [{
          "saturation": -100
        },
        {
          "lightness": "50"
        },
        {
          "visibility": "simplified"
        }
      ]
    },
    {
      "featureType": "road",
      "elementType": "all",
      "stylers": [{
        "saturation": "-100"
      }]
    },
    {
      "featureType": "road.highway",
      "elementType": "all",
      "stylers": [{
        "visibility": "simplified"
      }]
    },
    {
      "featureType": "road.arterial",
      "elementType": "all",
      "stylers": [{
        "lightness": "30"
      }]
    },
    {
      "featureType": "road.local",
      "elementType": "all",
      "stylers": [{
        "lightness": "40"
      }]
    },
    {
      "featureType": "transit",
      "elementType": "all",
      "stylers": [{
          "saturation": -100
        },
        {
          "visibility": "simplified"
        }
      ]
    },
    {
      "featureType": "water",
      "elementType": "geometry",
      "stylers": [{
          "hue": "#ffff00"
        },
        {
          "lightness": -25
        },
        {
          "saturation": -97
        }
      ]
    },
    {
      "featureType": "water",
      "elementType": "labels",
      "stylers": [{
          "lightness": -25
        },
        {
          "saturation": -100
        }
      ]
    }
  ]
  var mapOptions = {
    zoom: 15,
    center: brooklyn,
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
    },
    mapTypeId: MY_MAPTYPE_ID
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
    mapOptions);
  var image = '<?php echo $wp_url; ?>/dist/images/mappin.png';
  var marker = new google.maps.Marker({
    position: brooklyn,
    map: map,
    icon: image,
    title: 'COMILE'
  });
  var styledMapOptions = {
    name: 'COMILE'
  };
  var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);
  map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
<?php get_footer();