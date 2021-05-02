@extends('template-dashboard.home')
@section('judul', 'Dashboard Index')
@section('content')
					<div class="row">
						<div class="col-md-6 grid-margin stretch-card">
							<div class="card tale-bg">
								<div class="card-people mt-auto">
									<img src="{{asset('skydash/images/dashboard/people.svg')}}" alt="people">
									<div class="weather-info">
										<div class="d-flex">
											<div class="ml-2">
												<h4 class="location font-weight-normal">{{Auth::user()->role}}</h4>
												<h6 class="font-weight-normal">Indonesia</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 grid-margin transparent">
							<div class="row">
								<div class="col-md-6 mb-4 stretch-card transparent">
									<div class="card card-tale">
										<div class="card-body">
											<h4 class="mb-4">Jumlah User</h4>
											<p class="fs-30 mb-2">{{$user}}</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 mb-4 stretch-card transparent">
									<div class="card card-dark-blue">
										<div class="card-body">
											<h4 class="mb-4">Jumlah Category</h4>
											<p class="fs-30 mb-2">{{$category}}</p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
									<div class="card card-light-blue">
										<div class="card-body">
											<h4 class="mb-4">Jumlah Virtual Tour</h4>
											<p class="fs-30 mb-2">{{$virtual_tour}}</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 stretch-card transparent">
									<div class="card card-light-danger">
										<div class="card-body">
											<h4 class="mb-4">Jumlah Eksplorasi</h4>
											<p class="fs-30 mb-2">{{$eksplorasi}}</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> 
					<div class="row">
						<div class="col-12">
							<h3 class="mb-3">Pemetaan</h3>
							<div class="form-group">
							  <label for="">Lat  : </label>
							  <input type="text" class="form-control latitude" id="lati" value="">
							</div>
							<div class="form-group">
							  <label for="">Lon : </label>
							  <input type="text" class="form-control longitude" id="long" value="">
							</div>
							<div id="map" style="width: `100%; height: 400px;"></div>
						</div>
					</div>
@endsection