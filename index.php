<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIG SEKOLAH</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/logo1.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body>

  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto">
          <h1 class="text-light"><a href="index.php"><span>SIG</span></a></h1>
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="#header">Home</a></li>
            <li><a href="#about">Tentang Kami</a></li>
            <li><a href="#services">Peta</a></li>
            <li><a href="#portfolio">Data Sekolah</a></li>
            <li><a href="#cek-radius">Cek Radius</a></li>
            <li><a href="#contact">Kontak Kami</a></li>
            </li>
            <li class="get-started"><a href="#about">Mulai</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>Sistem Informasi Geografis</h1>
      <h1>Sekolah Menengah Atas</h1>
      <h2>Di Kota Makassar</h2>
      <a href="#about" class="btn-get-started scrollto">Mulai</a>
    </div>
  </section>

  <main id="main">

    <section id="clients" class="clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-3 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="" style="opacity: 0;">
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="about">
      <div class="container">
        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <h2>SIG SMA KOTA MAKASSAR</h2>
            <h3>Sistem informasi ini merupakan aplikasi pemetaan geografis sekolah menengah di wilayah Kota Makassar. Aplikasi ini memuat informasi dan lokasi dari SMA di Kota Makassar.</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <p>
              Dalam aplikasi pemetaan geografis sekolah menengah ini memuat informasi dan lokasi dari SMA di Kota Makassar. Pemetaan diambil dari data lokasi Google Maps dan data dari website masing" sekolah. Aplikasi ini memuat sejumlah informasi mengenai :
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Sekolah Menengah Atas Negeri</li>
            </ul>
            <p class="font-italic">
              Informasi dapat berubah sewaktu-waktu
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">
          <?php
          include_once "countsma.php";
          $obj = json_decode($data);
          $sman = "";
          foreach ($obj->results as $item) {
            $sman .= $item->sma;
          }
          ?>
          <div class="col-lg-12 col-12 text-center">
            <span data-toggle="counter-up" style="font-size: 50px;"><?php echo $sman; ?></span>
            <p style="font-size: 20px; font-weight: bold;">Sekolah Menengah Atas</p>
          </div>
        </div>
      </div>
    </section>

    <section id="cta" class="cta">
      <div class="container">
        <div class="text-center" data-aos="zoom-in">
          <h3 style="font-size: 36px;">Sistem Informasi Geografis</h3>
          <p style="font-size: 24px;">Detail sekolah menengah negeri di Kota Makassar</p>
          <a class="cta-btn" href="#portfolio" style="font-size: 20px; padding: 10px 20px;">Lihat Detail</a>
        </div>
      </div>
    </section>

    <section id="services" class="services section-bg">
      <div class="container">
        <div class="text-center" data-aos="zoom-in">
          <h3 style="font-weight: bold; text-transform: uppercase;">Peta</h3>
        </div>
        <div class="panel-body" style="align-content: center;">
          <div id="map" style="width:100%;height:480px;"></div>
        </div>
      </div>
    </section>

    <script src="https://maps.googleapis.com/maps/api/js?libraries=places,geometry&key=AIzaSyCfVs4seygQa2FZiHc8-JBPw4AyaADVzNA"></script>
    <script src="https://cdn.jsdelivr.net/npm/@googlemaps/markerclusterer@latest/dist/index.min.js"></script>

    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          zoom: 12.5,
          center: new google.maps.LatLng(-5.1113133, 119.3202267),
          disableDefaultUI: false
        };

        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);

        fetch('http://localhost/sig-sma/ambildata_kec.php')
          .then(response => response.json())
          .then(data => {
            console.log("Data JSON diterima:", data);
            setMarkers(map, data.results);
          })
          .catch(error => console.error("Kesalahan saat mengambil data:", error));
      }

      function groupLocationsByCustomGroups(locations) {
        var groups = {
          'Group 1': ['SMA Negeri 5 Makassar', 'SMA Negeri 9 Makassar', 'SMA Negeri 10 Makassar', 'SMA Negeri 12 Makassar',
            'SMA Negeri 13 Makassar', 'SMA Negeri 19 Makassar', 'SMA Negeri 23 Makassar'],
          'Group 2': ['SMA Negeri 11 Makassar', 'SMA Negeri 14 Makassar', 'SMA Negeri 20 Makassar', 'SMA Negeri 3 Makassar', 'SMA Negeri 8 Makassar'],
          'Group 3': ['SMA Negeri 7 Makassar', 'SMA Negeri 18 Makassar', 'SMA Negeri 21 Makassar', 'SMA Negeri 22 Makassar'],
          'Group 4': ['SMA Negeri 1 Makassar', 'SMA Negeri 4 Makassar', 'SMA Negeri 16 Makassar', 'SMA Negeri 17 Makassar'],
          'Group 5': ['SMA Negeri 6 Makassar', 'SMA Negeri 15 Makassar']
        };

        var groupedLocations = {};

        for (var group in groups) {
          groupedLocations[group] = locations.filter(function(location) {
            return groups[group].includes(location.nama_instansi);
          });
        }
        return groupedLocations;
      }

      function setMarkers(map, locations) {
        console.log("Menetapkan marker:", locations);
        var globalPin = 'img/marker.png';
        var centroidPin = 'img/center.png';
        var markers = [];
        var circles = [];

        var locationsByGroup = groupLocationsByCustomGroups(locations);
        console.log("Lokasi berdasarkan grup:", locationsByGroup);

        for (var group in locationsByGroup) {
          var filteredLocations = locationsByGroup[group];

          if (filteredLocations.length > 0) {
            var bounds = new google.maps.LatLngBounds();

            filteredLocations.forEach(function(location) {
              var myLatLng = new google.maps.LatLng(location.latitude, location.longitude);
              bounds.extend(myLatLng);

              var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: location.nama_instansi,
                icon: globalPin
              });

              google.maps.event.addListener(marker, 'click', getInfoCallback(map, getContentString(location), marker));
              markers.push(marker);
            });

            var circle = new google.maps.Circle({
              map: map,
              center: bounds.getCenter(),
              radius: getRadius(bounds),
              fillColor: getColorForGroup(group),
              fillOpacity: 0.35,
              strokeColor: getColorForGroup(group),
              strokeOpacity: 0.8,
              strokeWeight: 2,
            });
            circles.push(circle);
          }
        }

        var centroids = [{
            group: 'Group 1',
            latitude: -5.165329463435,
            longitude: 119.47856906403571
          },
          {
            group: 'Group 2',
            latitude: -5.174601363954166,
            longitude: 119.41055769815449
          },
          {
            group: 'Group 3',
            latitude: -5.1120975363955,
            longitude: 119.52806116255199
          },
          {
            group: 'Group 4',
            latitude: -5.127520198176001,
            longitude: 119.41956436133525
          },
          {
            group: 'Group 5',
            latitude: -5.084788294249,
            longitude: 119.488404795533
          }
        ];

        centroids.forEach(function(centroid) {
          var centroidLatLng = new google.maps.LatLng(centroid.latitude, centroid.longitude);

          var centroidMarker = new google.maps.Marker({
            position: centroidLatLng,
            map: map,
            title: "Centroid " + centroid.group,
            icon: centroidPin
          });

          var infowindowContent = '<div><strong>Centroid ' + centroid.group + '</strong><br>' +
            'Latitude: ' + centroid.latitude + '<br>' +
            'Longitude: ' + centroid.longitude + '</div>';

          google.maps.event.addListener(centroidMarker, 'click', function() {
            var infowindow = new google.maps.InfoWindow({
              content: infowindowContent
            });
            infowindow.open(map, centroidMarker);
          });

          markers.push(centroidMarker);
        });
      }

      function getColorForGroup(group) {
        var colors = {
          'Group 1': '#FF0000',
          'Group 2': '#0000ff',
          'Group 3': '#3cb371',
          'Group 4': '#00e6ff',
          'Group 5': '#ee82ee'
        };
        return colors[group] || '#FF0000';
      }

      function getRadius(bounds) {
        var ne = bounds.getNorthEast();
        var sw = bounds.getSouthWest();
        var distance = google.maps.geometry.spherical.computeDistanceBetween(ne, sw);
        return distance / 2;
      }

      function getContentString(location) {
        return '<div id="content">' +
          '<div id="siteNotice"></div>' +
          '<h5 id="firstHeading" class="firstHeading">' + location.nama_instansi + '</h5>' +
          '<div id="bodyContent">' +
          '<a href="detail.php?id=' + location.id_instansi + '">Info Detail</a>' +
          '</div>' +
          '</div>';
      }

      function getInfoCallback(map, content, marker) {
        return function() {
          var infowindow = new google.maps.InfoWindow({
            content: content
          });
          infowindow.open(map, marker);
        };
      }

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <section id="portfolio" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-3" data-aos="fade-right">
            <div class="section-title">
              <h2>Data SMA</h2>
              <p>Halaman ini memuat informasi SMA di Kota Makassar. </p>
            </div>
          </div>

          <div class="col-lg-9" data-aos="fade-up" data-aos-delay="100">
            <div class="col-md-12">
              <div class="panel panel-info panel-dashboard">
                <div class="panel-heading centered">
                  <h2 class="panel-title"><strong> - <?php echo 'Informasi Sekolah' ?> - </strong></h2>
                </div>
                <div class="panel-body">
                  <table class="table table-bordered table-striped table-admin">
                    <thead>
                      <tr>
                        <th width="5%">No.</th>
                        <th width="30%">Nama Sekolah</th>
                        <th width="10%">NPSN</th>
                        <th width="30%">Alamat</th>
                        <th width="20%">Website</th>
                        <th width="20%">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $data = file_get_contents('http://localhost/sig-sma/ambildata.php');
                      $no = 1;
                      if (json_decode($data, true)) {
                        $obj = json_decode($data);
                        foreach ($obj->results as $item) {
                      ?>
                          <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $item->nama_instansi; ?></td>
                            <td><?php echo $item->NPSN; ?></td>
                            <td><?php echo $item->alamat; ?></td>
                            <td><a href="https://<?php echo $item->website; ?>" target="_blank"><?php echo $item->website; ?></a></td>
                            <td class="ctr">
                              <div class="btn-group">
                                <a href="detail.php?id=<?php echo $item->id_instansi; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary">
                                  <i class="fa fa-map-marker"> </i> Detail dan Lokasi</a>&nbsp;
                              </div>
                            </td>
                          </tr>
                      <?php $no++;
                        }
                      } else {
                        echo "data tidak ada.";
                      } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
    </section>

    <section id="cek-radius" class="cek-radius">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>Cek Radius</h2>
            <form id="cek-radius-form">
              <div class="form-group">
                <label for="address">Alamat:</label>
                <input type="text" id="address" class="form-control" placeholder="Klik peta untuk memilih alamat" readonly onclick="openMapFullscreen()">
              </div>
              <div class="form-group">
                <label for="radius">Radius (km):</label>
                <input type="number" id="radius" class="form-control" placeholder="Masukkan radius dalam kilometer">
              </div>
              <button type="button" class="btn btn-primary" onclick="searchSchools()">Cari Sekolah</button>
              <button type="button" class="btn btn-secondary" onclick="enableUserLocation()">Aktifkan Lokasi Saya</button>
            </form>
            <br></br>
            <table id="result-table" class="table table-bordered">
              <thead>
                <tr>
                  <th>Nama Sekolah</th>
                  <th>Jarak (m)</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
          <div class="col-lg-6">
            <div id="map-radius" style="width:100%;height:480px;"></div>
          </div>
        </div>
      </div>
    </section>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfVs4seygQa2FZiHc8-JBPw4AyaADVzNA&libraries=geometry"></script>

    <script type="text/javascript">
      let map;
      let marker;
      let radiusCircle;
      let selectedLocation;

      const centroids = [{
          group: 'Group 1',
          latitude: -5.165329463435,
          longitude: 119.47856906403571
        },
        {
          group: 'Group 2',
          latitude: -5.174601363954166,
          longitude: 119.41055769815449
        },
        {
          group: 'Group 3',
          latitude: -5.1120975363955,
          longitude: 119.52806116255199
        },
        {
          group: 'Group 4',
          latitude: -5.127520198176001,
          longitude: 119.41956436133525
        },
        {
          group: 'Group 5',
          latitude: -5.084788294249,
          longitude: 119.488404795533
        }
      ];

      const groups = {
        'Group 1': ['SMA Negeri 5 Makassar', 'SMA Negeri 9 Makassar', 'SMA Negeri 10 Makassar', 'SMA Negeri 12 Makassar',
          'SMA Negeri 13 Makassar', 'SMA Negeri 19 Makassar', 'SMA Negeri 23 Makassar'
        ],
        'Group 2': ['SMA Negeri 11 Makassar', 'SMA Negeri 14 Makassar', 'SMA Negeri 20 Makassar', 'SMA Negeri 3 Makassar', 'SMA Negeri 8 Makassar'],
        'Group 3': ['SMA Negeri 7 Makassar', 'SMA Negeri 18 Makassar', 'SMA Negeri 21 Makassar', 'SMA Negeri 22 Makassar'],
        'Group 4': ['SMA Negeri 1 Makassar', 'SMA Negeri 4 Makassar', 'SMA Negeri 16 Makassar', 'SMA Negeri 17 Makassar'],
        'Group 5': ['SMA Negeri 6 Makassar', 'SMA Negeri 15 Makassar']
      };


      const schoolLocations = {
        'SMA Negeri 1 Makassar': {
          latitude: -5.135020808705,
          longitude: 119.418717593012
        },
        'SMA Negeri 2 Makassar': {
          latitude: -5.169539053142,
          longitude: 119.412733425786
        },
        'SMA Negeri 3 Makassar': {
          latitude: -5.168332560249,
          longitude: 119.412395646756
        },
        'SMA Negeri 4 Makassar': {
          latitude: -5.116731648420,
          longitude: 119.418923706025
        },
        'SMA Negeri 5 Makassar': {
          latitude: -5.149079977979,
          longitude: 119.460825934161
        },
        'SMA Negeri 6 Makassar': {
          latitude: -5.089240691107,
          longitude: 119.481909490260
        },
        'SMA Negeri 7 Makassar': {
          latitude: -5.08159516408417,
          longitude: 119.533885860188
        },
        'SMA Negeri 8 Makassar': {
          latitude: -5.169858811914,
          longitude: 119.41420181546
        },
        'SMA Negeri 9 Makassar': {
          latitude: -5.179416252936,
          longitude: 119.45237087997
        },
        'SMA Negeri 10 Makassar': {
          latitude: -5.18566285202,
          longitude: 119.48830001561
        },
        'SMA Negeri 11 Makassar': {
          latitude: -5.171619906171,
          longitude: 119.416158737848
        },
        'SMA Negeri 12 Makassar': {
          latitude: -5.163083777869,
          longitude: 119.483603148255
        },
        'SMA Negeri 13 Makassar': {
          latitude: -5.175232640651,
          longitude: 119.47784552163
        },
        'SMA Negeri 14 Makassar': {
          latitude: -5.165723509511,
          longitude: 119.40884900007
        },
        'SMA Negeri 15 Makassar': {
          latitude: -5.080335897391,
          longitude: 119.494900100806
        },
        'SMA Negeri 16 Makassar': {
          latitude: -5.137467251929,
          longitude: 119.411406585086
        },
        'SMA Negeri 17 Makassar': {
          latitude: -5.12086108364969,
          longitude: 119.429209561218
        },
        'SMA Negeri 18 Makassar': {
          latitude: -5.125554036926,
          longitude: 119.53175786038
        },
        'SMA Negeri 19 Makassar': {
          latitude: -5.163758086491,
          longitude: 119.51250930322
        },
        'SMA Negeri 20 Makassar': {
          latitude: -5.20254334273788,
          longitude: 119.398144296984
        },
        'SMA Negeri 21 Makassar': {
          latitude: -5.120861083650,
          longitude: 119.515137450068
        },
        'SMA Negeri 22 Makassar': {
          latitude: -5.104416600922,
          longitude: 119.531463479572
        },
        'SMA Negeri 23 Makassar': {
          latitude: -5.141069221117,
          longitude: 119.474527451421
        }
      };

      function initialize() {
        map = new google.maps.Map(document.getElementById('map-radius'), {
          zoom: 12,
          center: {
            lat: -5.1113133,
            lng: 119.3202267
          }
        });

        map.addListener('click', (event) => {
          placeMarker(event.latLng);
        });

        radiusCircle = new google.maps.Circle({
          strokeColor: '#FF0000',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#FF0000',
          fillOpacity: 0.35,
          map: map,
          radius: 0 
        });
      }

      function placeMarker(location) {
        if (marker) {
          marker.setMap(null);
        }

        marker = new google.maps.Marker({
          position: location,
          map: map,
          title: 'Lokasi Terpilih'
        });

        map.setCenter(location);
        document.getElementById('address').value = 'Koordinat: ' + location.lat() + ', ' + location.lng();
        selectedLocation = location;
      }

      function findNearestCentroid() {
        let minDistance = Infinity;
        let nearestCentroid = null;

        centroids.forEach(centroid => {
          const distance = google.maps.geometry.spherical.computeDistanceBetween(
            selectedLocation,
            new google.maps.LatLng(centroid.latitude, centroid.longitude)
          );

          if (distance < minDistance) {
            minDistance = distance;
            nearestCentroid = centroid;
          }
        });
        return nearestCentroid;
      }

      function searchSchools() {
        if (!selectedLocation) {
          alert('Harap pilih lokasi di peta.');
          return;
        }

        const nearestCentroid = findNearestCentroid();
        if (!nearestCentroid) {
          alert('Centroid terdekat tidak ditemukan.');
          return;
        }

        const groupSchools = groups[nearestCentroid.group];
        if (!groupSchools || groupSchools.length === 0) {
          alert('Tidak ada sekolah dalam grup ini.');
          return;
        }

        let maxDistance = 0;
        groupSchools.forEach(school => {
          const schoolData = schoolLocations[school];
          if (schoolData) {
            const schoolLocation = new google.maps.LatLng(schoolData.latitude, schoolData.longitude);
            const distance = google.maps.geometry.spherical.computeDistanceBetween(
              new google.maps.LatLng(nearestCentroid.latitude, nearestCentroid.longitude), schoolLocation
            );
            if (distance > maxDistance) {
              maxDistance = distance;
            }
          }
        });

        const centroidLocation = new google.maps.LatLng(nearestCentroid.latitude, nearestCentroid.longitude);
        const centroidMarker = new google.maps.Marker({
          position: centroidLocation,
          map: map,
          title: 'Centroid: ' + nearestCentroid.group,
          icon: 'img/center.png' 
        });

        if (!radiusCircle) {
          radiusCircle = new google.maps.Circle({
            map: map,
            fillColor: '#AA0000',
            fillOpacity: 0.2,
            strokeOpacity: 0.35,
            strokeWeight: 2,
            clickable: false
          });
        }

        radiusCircle.setCenter(centroidLocation);
        radiusCircle.setRadius(maxDistance); 

        map.setCenter(centroidLocation); 

        displayClusterSchools(nearestCentroid);
      }

      function displayClusterSchools(nearestCentroid) {
        const groupSchools = groups[nearestCentroid.group];

        if (!groupSchools || groupSchools.length === 0) {
          alert('Tidak ada sekolah dalam grup ini.');
          return;
        }

        const tableBody = document.getElementById('result-table').getElementsByTagName('tbody')[0];
        tableBody.innerHTML = ''; 

        const schoolsWithDistance = [];

        groupSchools.forEach(school => {
          const schoolData = schoolLocations[school];

          if (schoolData) {
            const schoolLocation = new google.maps.LatLng(schoolData.latitude, schoolData.longitude);
            const distance = google.maps.geometry.spherical.computeDistanceBetween(selectedLocation, schoolLocation);

            new google.maps.Marker({
              position: schoolLocation,
              map: map,
              title: school,
              icon: 'img/marker.png' 
            });

            schoolsWithDistance.push({
              name: school,
              distance: distance
            });
          }
        });

        schoolsWithDistance.sort((a, b) => a.distance - b.distance);
        schoolsWithDistance.forEach(school => {
          const row = tableBody.insertRow();
          row.insertCell(0).innerText = school.name;
          row.insertCell(1).innerText = school.distance.toFixed(2) + ' meters';
        });
      }

      function enableUserLocation() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(
            (position) => {
              const userLatLng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
              placeMarker(userLatLng);
              map.setCenter(userLatLng);
              document.getElementById('address').value = 'Lokasi Anda: ' + position.coords.latitude + ', ' + position.coords.longitude;
            },
            () => {
              alert('Gagal mendapatkan lokasi Anda.');
            }
          );
        } else {
          alert('Geolocation tidak didukung oleh browser ini.');
        }
      }

      function openMapFullscreen() {
        const mapElement = document.getElementById('map-radius');
        if (mapElement.requestFullscreen) {
          mapElement.requestFullscreen();
        } else if (mapElement.mozRequestFullScreen) {
          mapElement.mozRequestFullScreen();
        } else if (mapElement.webkitRequestFullscreen) {
          mapElement.webkitRequestFullscreen();
        } else if (mapElement.msRequestFullscreen) {
          mapElement.msRequestFullscreen();
        }
        mapElement.focus();
      }

      function closeFullscreen() {
        if (document.exitFullscreen) {
          document.exitFullscreen();
        } else if (document.mozCancelFullScreen) {
          document.mozCancelFullScreen();
        } else if (document.webkitExitFullscreen) {
          document.webkitExitFullscreen();
        } else if (document.msExitFullscreen) {
          document.msExitFullscreen();
        }
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <section id="contact" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="section-title">
              <h2>Kontak Kami</h2>
              <p>Halaman ini memuat informasi pengembang serta masukan kritik dan saran dari pengguna apabila ditemukan masalah. </p>
            </div>
          </div>
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <div class="info mt-4">
              <i class="icofont-google-map"></i>
              <h4>Lokasi:</h4>
              <p>Jl. Anggrek Raya No.2, Paropo, Kec. Panakkukang, Kota Makassar, Sulawesi Selatan 90231</p>
            </div>
            <div class="row">
              <div class="col-lg-6 mt-4">
                <div class="info">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>disdikkotamaks@gmail.com</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="info w-100 mt-4">
                  <i class="icofont-phone"></i>
                  <h4>Telepon:</h4>
                  <p>(0411) 458233</p>
                </div>
              </div>
            </div>
            <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama anda" data-rule="minlen:4" data-msg="Masukkan sedikitnya 4 karakter" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email anda" data-rule="email" data-msg="Masukkan email yang valid" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" data-rule="minlen:4" data-msg="Masukkan setidaknya 8 karakter" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Masukkan pesan untuk kami" placeholder="Pesan"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Memuat</div>
                <div class="error-message"></div>
                <div class="sent-message">Pesan anda telah terkirim. Terimakasih!</div>
              </div>
              <div class="text-center"><button type="submit">Kirim pesan</button></div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>SIG</h3>
            <p>
              Jl. Anggrek Raya No.2, Paropo, <br>
              Kec. Panakkukang, Kota Makassar,<br>
              Sulawesi Selatan 90231 <br><br>
              <strong>Phone:</strong> (0411) 458233<br>
              <strong>Email:</strong> disdikkotamaks@gmail.com<br>
            </p>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Link bantuan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Maps</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Data</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">SMA Negeri</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Ikuti info terbaru</h4>
            <p>Subscribe email</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">
      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>SIG SMA MAKASSAR</span></strong>.
        </div>
        <div class="credits">
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-hover-dropdown.js"></script>
  <script src="js/script.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/datatable-bootstrap.js"></script>
</body>

</html>