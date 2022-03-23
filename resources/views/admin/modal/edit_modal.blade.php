@extends('admin.master.main')
@section('content')
<div class="page-header card">
	<div class="row align-items-end">
		<div class="col-lg-8">
			<div class="page-header-title">
				<i class="feather icon-home bg-c-blue"></i>
				<div class="d-inline">
					<h5>Modal Info.</h5>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="page-header-breadcrumb">
				<ul class=" breadcrumb breadcrumb-title">
					<li class="breadcrumb-item">
						<a href="index.html">
							<i class="feather icon-home"></i>
						</a>
					</li>
					<li class="breadcrumb-item">
						<a href="{{route('modal.index')}}">Modal Info</a>
					</li>
					<li class="breadcrumb-item">
						<a href="{{route('modal.edit',$modal->id)}}">Edit modal info.</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="pcoded-inner-content">
	<div class="main-body">
		<div class="page-wrapper">
			<div class="page-body">
				<div class="row justify-content-center">
				<div class="card col-sm-6">
					<div class="card-block">
						<h4 class="sub-title">Edit Modal Info.</h4>
						<form action="{{route('modal.update',$modal->id)}}" method="post">
							@csrf
							@method('PATCH')
							<div class="form-group">
								<label>First Bayan</label>
								<div>
									<input type="text" name="first_bayan"  class="form-control" value="{{$modal->first_bayan}}">
								</div>
							</div>
							<div class="form-group">
								<label>First Bayan Time one</label>
								<div>
									<input type="text" name="first_bayan_1st_time"  class="form-control" value="{{$modal->first_bayan_1st_time}}">
								</div>
							</div>
							<div class="form-group">
								<label>First Bayan Time two</label>
								<div>
									<input type="text" name="first_bayan_2nd_time"  class="form-control" value="{{$modal->first_bayan_2nd_time}}">
								</div>
							</div>
							<div class="form-group">
								<label>Second Bayan</label>
								<div>
									<input type="text" name="second_bayan"  class="form-control" value="{{$modal->second_bayan}}">
								</div>
							</div>
							<div class="form-group">
								<label>Second Bayan Time</label>
								<div>
									<input type="text" name="second_bayan_time"  class="form-control" value="{{$modal->second_bayan_time}}">
								</div>
							</div>
							<div class="form-group">
								<label>Third Bayan</label>
								<div>
									<input type="text" name="thied_bayan"  class="form-control" value="{{$modal->thied_bayan}}">
								</div>
							</div>
							<div class="form-group">
								<label>Third Bayan time</label>
								<div>
									<input type="text" name="third_bayan_time"  class="form-control" value="{{$modal->third_bayan_time}}">
								</div>
							</div>
							<div class="form-group">
								<label>Location Iframe Link</label>
								<div>
									<input type="text" name="iframe_link"  class="form-control" value="{{$modal->iframe_link}}">
								</div>
							</div>
							<div class="form-group">
								<label></label>
								<div>
									<button class="btn btn-primary">Save</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
@foreach ($errors->all() as $error)
<script type="text/javascript">
    Toast.fire({
        icon: 'error',
        title: '{!! $error !!}',
    })
</script>
@endforeach
@if(Session::has('success'))
<script type="text/javascript">
    Toast.fire({
        icon: 'success',
        title: '{!! Session::get('success') !!}',
    })
</script>
@php Session::forget('success') @endphp
@endif
@endsection