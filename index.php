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

    <!-- ======= About Section ======= -->
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
    </section><!-- End About Section -->

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

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center" data-aos="zoom-in">
          <h3 style="font-size: 36px;">Sistem Informasi Geografis</h3>
          <p style="font-size: 24px;">Detail sekolah menengah negeri di Kota Makassar</p>
          <a class="cta-btn" href="#portfolio" style="font-size: 20px; padding: 10px 20px;">Lihat Detail</a>
        </div>


      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">
        <div class="text-center" data-aos="zoom-in">
          <h3 style="font-weight: bold; text-transform: uppercase;">Peta</h3>
        </div>
        <div class="panel-body" style="align-content: center;">
          <div id="map" style="width:100%;height:480px;"></div>
        </div>
        <div class="zone-descriptions" style="margin-top: 20px;">
          <h4 style="font-weight: bold;">Keterangan</h4>
          <ul style="list-style-type: none; padding-left: 0;">
            <li><strong>Zona I / Merah:</strong> Biringkanaya, Tamalanrea, Panakkukang, dan Manggala</li>
            <li><strong>Zona II / Kuning:</strong> Bontoala, Tallo, Ujung Pandang, Wajo, dan Panakkukang</li>
            <li><strong>Zona III / Hitam:</strong> Makassar, Mamajang, Ujung Pandang, Mariso, Rappocini, dan Wajo</li>
            <li><strong>Zona IV / Hijau:</strong> Manggala, Panakkukang, dan Rappocini</li>
            <li><strong>Zona V / Biru:</strong> Tamalate, Mamajang, Mariso, Panakkukang, dan Rappocini</li>
            <li><strong>Zona VI / Putih:</strong> Ujung Tanah, Tallo, Ujung Pandang, dan Sangkarrang</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Google Maps API -->
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

        // Mengambil data dan menetapkan marker
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
          'Group 1': ['Kecamatan Biringkanaya', 'Kecamatan Tamalanrea', 'Kecamatan Panakkukang', 'Kecamatan Manggala'],
          'Group 2': ['Kecamatan Bontoala', 'Kecamatan Tallo', 'Kecamatan Ujung Pandang', 'Kecamatan Wajo', 'Kecamatan Panakkukang'],
          'Group 3': ['Kecamatan Makassar', 'Kecamatan Mamajang', 'Kecamatan Ujung Pandang', 'Kecamatan Mariso', 'Kecamatan Wajo', 'Kecamatan Rappocini'],
          'Group 4': ['Kecamatan Manggala', 'Kecamatan Panakkukang', 'Kecamatan Rappocini'],
          'Group 5': ['Kecamatan Tamalate', 'Kecamatan Mamajang', 'Kecamatan Mariso', 'Kecamatan Panakkukang', 'Kecamatan Rappocini'],
          'Group 6': ['Kecamatan Ujung Tanah', 'Kecamatan Tallo', 'Kecamatan Ujung Pandang', 'Kecamatan Sangkarrang']

          // 'Group 1': ['Kecamatan Biringkanaya', 'Kecamatan Tamalanrea'],
          // 'Group 2': ['Kecamatan Bontoala', 'Kecamatan Tallo', 'Kecamatan Wajo'],
          // 'Group 3': ['Kecamatan Makassar', 'Kecamatan Mariso'],
          // 'Group 4': ['Kecamatan Manggala', 'Kecamatan Panakkukang', 'Kecamatan Rappocini'],
          // 'Group 5': ['Kecamatan Tamalate', 'Kecamatan Mamajang'],
          // 'Group 6': ['Kecamatan Ujung Tanah', 'Kecamatan Ujung Pandang', 'Kecamatan Sangkarrang']
        };

        var groupedLocations = {};

        for (var group in groups) {
          groupedLocations[group] = locations.filter(function(location) {
            return groups[group].includes(location.kecamatan);
          });
        }

        return groupedLocations;
      }

      function setMarkers(map, locations) {
        console.log("Menetapkan marker:", locations);
        var globalPin = 'img/marker.png';
        var markers = [];
        var circles = [];

        // Kelompokkan lokasi berdasarkan grup kustom
        var locationsByGroup = groupLocationsByCustomGroups(locations);
        console.log("Lokasi berdasarkan grup:", locationsByGroup);

        // Untuk setiap grup, buat marker dan lingkaran
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
                title: location.kecamatan,
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
      }

      function getColorForGroup(group) {
        var colors = {
          'Group 1': '#FF0000',
          'Group 2': '#EAFF00',
          'Group 3': '#000000',
          'Group 4': '#00FF00',
          'Group 5': '#00FFFF',
          'Group 6': '#FFFFFF'
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

<?php
// $output = shell_exec("python ahc.py 2>&1");

// if ($output) {
//     echo "<pre>$output</pre>";
// } else {
//     // echo "Python script executed successfully. Dendrogram has been generated.";
// }

// if (file_exists('img/dendogram_output.png')) {
//     echo "<img src='img/dendogram_output.png' alt='Dendrogram'>";
// } else {
//     echo "Dendrogram image not found.";
// }
?> 

    <!-- ======= Contact Section ======= -->
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
    </section><!-- End Contact Section -->

    <!-- ======= Cek Radius Section ======= -->
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
    <!-- End Cek Radius Section -->

    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfVs4seygQa2FZiHc8-JBPw4AyaADVzNA&libraries=geometry"></script>

    <script type="text/javascript">
      let map;
      let marker;
      let radiusCircle;
      let selectedLocation;

      function initialize() {
        map = new google.maps.Map(document.getElementById('map-radius'), {
          zoom: 12,
          center: {
            lat: -5.1113133,
            lng: 119.3202267
          }
        });

        radiusCircle = new google.maps.Circle({
          map: map,
          radius: 0,
          fillColor: '#FF0000',
          fillOpacity: 0.35,
          strokeColor: '#FF0000',
          strokeOpacity: 0.8,
          strokeWeight: 2,
        });

        map.addListener('click', (event) => {
          placeMarker(event.latLng);
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

      function searchSchools() {
        const radiusKm = parseFloat(document.getElementById('radius').value);

        if (!radiusKm || !selectedLocation) {
          alert('Harap pilih lokasi di peta dan masukkan radius.');
          return;
        }

        const radiusMeters = radiusKm * 1000; // Convert km to meters

        radiusCircle.setCenter(selectedLocation);
        radiusCircle.setRadius(radiusMeters);

        // Panggil fetchSchools dan lakukan perhitungan AHC setelah data sekolah diambil
        fetchSchools(selectedLocation, radiusMeters)
          .then(schools => {
            if (schools && schools.length > 0) {
              ahcClustering(schools); // Lakukan perhitungan AHC dengan data sekolah yang ditemukan
            } else {
              console.error("Tidak ada sekolah dalam radius yang ditentukan.");
            }
          });
      }

      function fetchSchools(center, radius) {
        const url = 'http://localhost/sig-sma/ambildata.php';
        return fetch(url)
          .then(response => response.json())
          .then(data => {
            const schools = data.results;
            const tableBody = document.getElementById('result-table').getElementsByTagName('tbody')[0];
            tableBody.innerHTML = '';

            // Array untuk menyimpan sekolah dan jaraknya
            const schoolsWithinRadius = [];

            schools.forEach(school => {
              const schoolLocation = new google.maps.LatLng(school.latitude, school.longitude);
              const distance = google.maps.geometry.spherical.computeDistanceBetween(center, schoolLocation);

              if (distance <= radius) {
                schoolsWithinRadius.push({
                  id: school.id,
                  nama_instansi: school.nama_instansi,
                  latitude: school.latitude,
                  longitude: school.longitude,
                  distance: distance,
                });
              }
            });

            // Urutkan sekolah berdasarkan jarak
            schoolsWithinRadius.sort((a, b) => a.distance - b.distance);

            // Tambahkan sekolah ke tabel hasil
            schoolsWithinRadius.forEach(school => {
              // Tambahkan marker ke peta
              new google.maps.Marker({
                position: new google.maps.LatLng(school.latitude, school.longitude),
                map: map,
                title: school.nama_instansi,
                icon: 'img/marker.png'
              });

              // Tambahkan baris ke tabel
              const row = tableBody.insertRow();
              row.insertCell(0).innerText = school.nama_instansi;
              row.insertCell(1).innerText = school.distance.toFixed(2) + ' meters';
            });

            return schoolsWithinRadius;
          });
      }

      // Fungsi Haversine untuk menghitung jarak antara dua titik geografis
      function haversine(lat1, lon1, lat2, lon2) {
        const R = 6371e3; // Radius bumi dalam meter
        const φ1 = lat1 * Math.PI / 180; // Lintang pertama dalam radian
        const φ2 = lat2 * Math.PI / 180; // Lintang kedua dalam radian
        const Δφ = (lat2 - lat1) * Math.PI / 180;
        const Δλ = (lon2 - lon1) * Math.PI / 180;

        const a = Math.sin(Δφ / 2) * Math.sin(Δφ / 2) +
          Math.cos(φ1) * Math.cos(φ2) *
          Math.sin(Δλ / 2) * Math.sin(Δλ / 2);
        const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));

        const distance = R * c; // Jarak dalam meter
        return distance;
      }

      // Fungsi untuk melakukan Single Linkage Clustering (klasterisasi dengan jarak terdekat)
      function single_linkage_clustering(schools, threshold) {
        let clusters = schools.map(school => [school]);

        while (clusters.length > 1) {
          let minDistance = Infinity;
          let clusterA = null;
          let clusterB = null;

          for (let i = 0; i < clusters.length; i++) {
            for (let j = i + 1; j < clusters.length; j++) {
              const distance = calculate_min_distance_between_clusters(clusters[i], clusters[j]);
              if (distance < minDistance) {
                minDistance = distance;
                clusterA = i;
                clusterB = j;
              }
            }
          }

          if (minDistance > threshold) {
            break; // Berhenti jika jarak minimum di atas threshold
          }

          // Gabungkan dua kluster terdekat
          clusters[clusterA] = clusters[clusterA].concat(clusters[clusterB]);
          clusters.splice(clusterB, 1); // Hapus kluster B yang sudah digabung
        }

        return clusters;
      }

      // Fungsi untuk menghitung jarak minimum antara dua kluster
      function calculate_min_distance_between_clusters(clusterA, clusterB) {
        let minDistance = Infinity;

        clusterA.forEach(schoolA => {
          clusterB.forEach(schoolB => {
            const distance = haversine(schoolA.latitude, schoolA.longitude, schoolB.latitude, schoolB.longitude);
            if (distance < minDistance) {
              minDistance = distance;
            }
          });
        });

        return minDistance;
      }

      // Fungsi untuk melakukan AHC (Agglomerative Hierarchical Clustering) dengan Single Linkage
      function ahcClustering(schools) {
        const threshold = 5000; // Threshold untuk jarak dalam meter
        const clusters = single_linkage_clustering(schools, threshold);

        console.log('Clusters:', clusters);
        // Anda bisa menambahkan logika untuk menampilkan hasil clustering di peta atau tabel
      }

      function enableUserLocation() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(
            (position) => {
              const userLatLng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
              placeMarker(userLatLng); // Tempatkan marker di lokasi pengguna
              map.setCenter(userLatLng); // Pusatkan peta di lokasi pengguna
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
        } else if (mapElement.mozRequestFullScreen) { // Firefox
          mapElement.mozRequestFullScreen();
        } else if (mapElement.webkitRequestFullscreen) { // Chrome, Safari, and Opera
          mapElement.webkitRequestFullscreen();
        } else if (mapElement.msRequestFullscreen) { // Edge
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


    <!-- ======= Contact Section ======= -->
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
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
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
  </footer><!-- End Footer -->

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