<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="csrf-token" content=@yield('token_ajax')>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('judul')</title>

	<!-- plugins:css -->
	<link rel="stylesheet" href="{{asset('skydash/vendors/feather/feather.css')}}">
	<link rel="stylesheet" href="{{asset('skydash/vendors/ti-icons/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{asset('skydash/vendors/css/vendor.bundle.base.css')}}">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="{{asset('skydash/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
	<link rel="stylesheet" href="{{asset('skydash/vendors/ti-icons/css/themify-icons.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('skydash/js/select.dataTables.min.css')}}">
	<link rel="stylesheet" href="{{asset('skydash/vendors/select2/select2.min.css')}}">
	<link rel="stylesheet" href="{{asset('skydash/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="{{asset('skydash/css/vertical-layout-light/style.css')}}">
	<!-- endinject -->

	<link rel="shortcut icon" href="{{asset('paradisely/assets/img/favicon/favicon.ico')}}" />

	{{-- Leaflet --}}
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
	integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
	crossorigin=""/>
	<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
	integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
	crossorigin=""></script>

	<link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
	<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
</head>

<body>
	<div class="container-scroller">
		<!-- partial:partials/_navbar.html -->
		@include('template-dashboard.navbar')
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial:partials/_settings-panel.html -->
			@include('template-dashboard.setting')
			<!-- partial -->
			<!-- partial:partials/_sidebar.html -->
			@include('template-dashboard.sidebar')
			<!-- partial -->
			<div class="main-panel">
				<div class="content-wrapper">
					<div class="row">
						<div class="col-md-12 grid-margin">
							<div class="row">
								<div class="col-12 col-xl-8 mb-4 mb-xl-0">
									<h3 class="font-weight-bold">@yield('judul')</h3>
									<h6 class="font-weight-normal mb-0">All systems are running smoothly! Hopefuly you have <span
											class="text-primary">a great day!</span></h6>
								</div>
							</div>
						</div>
					</div>
					@yield('content') 
				</div>
				<!-- content-wrapper ends -->
				<!-- partial:partials/_footer.html -->
				@include('template-dashboard.footer')
				<!-- partial -->
				@include('sweetalert::alert')
			</div>
			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->

	<!-- plugins:js -->
	<script src="{{asset('skydash/vendors/js/vendor.bundle.base.js')}}"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	<script src="{{asset('skydash/vendors/chart.js/Chart.min.js')}}"></script>
	<script src="{{asset('skydash/vendors/datatables.net/jquery.dataTables.js')}}"></script>
	<script src="{{asset('skydash/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
	<script src="{{asset('skydash/js/dataTables.select.min.js')}}"></script>
	
	<!-- End plugin js for this page -->
	<!-- inject:js -->
	<script src="{{asset('skydash/js/off-canvas.js')}}"></script>
	<script src="{{asset('skydash/js/hoverable-collapse.js')}}"></script>
	<script src="{{asset('skydash/js/template.js')}}"></script>
	<script src="{{asset('skydash/js/settings.js')}}"></script>
	<script src="{{asset('skydash/js/todolist.js')}}"></script>
	<!-- endinject -->
	<!-- Custom js for this page-->
	<script src="{{asset('skydash/js/dashboard.js')}}"></script>
	<script src="{{asset('skydash/js/Chart.roundedBarCharts.js')}}"></script>
	<script src="{{asset('skydash/vendors/select2/select2.min.js')}}"></script>
	<script src="{{asset('skydash/js/select2.js')}}"></script>
	<script src="{{asset('skydash/js/file-upload.js')}}"></script>
	<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
	@yield('ckeditor')

	<script>
		var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
				'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			id: 'mapbox/streets-v11'
		});

		var peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
				'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			id: 'mapbox/satellite-v9'
		});

		var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
		});

		var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
				'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			id: 'mapbox/dark-v10'
		});
		
		var map = L.map('map', {
			center: [-6.209263756705975, 106.84187539582412],
			zoom: 13,
			layers: [peta1],
		});

		var baseMaps = {
			"Grayscale": peta1,
			"Satelite": peta2,
			"Streets": peta3,
			"Dark": peta4
		};

		var geocoder = L.Control.geocoder({
			defaultMarkGeocode: false
			}).on('markgeocode', function(e) {
				var bbox = e.geocode.bbox;
				var poly = L.polygon([
				bbox.getSouthEast(),
				bbox.getNorthEast(),
				bbox.getNorthWest(),
				bbox.getSouthWest()
			]).addTo(map);
			map.fitBounds(poly.getBounds());
		}).addTo(map);

		var theMarker = {};

		map.on('click',function(e){
			lat = e.latlng.lat;
			lon = e.latlng.lng;

			// alert(lat + " and " + lon);
			document.getElementById("lati").value = lat;
			document.getElementById("long").value = lon;

			console.log("You clicked the map at LAT: "+ lat+" and LONG: "+lon );
		
				//Clear existing marker, 

				if (theMarker != undefined) {
					map.removeLayer(theMarker);
				};
			

			//Add a marker to show where you clicked.
			theMarker = L.marker([lat,lon]).addTo(map);  
		});
	</script>
	
	<!-- End custom js for this page-->
	@yield('script')
</body>

</html>