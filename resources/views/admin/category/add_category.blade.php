@extends('admin.master.main')
@section('content')
<div class="page-header card">
	<div class="row align-items-end">
		<div class="col-lg-8">
			<div class="page-header-title">
				<i class="feather icon-home bg-c-blue"></i>
				<div class="d-inline">
					<h5>Category</h5>
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
						<a href="{{route('category.index')}}">Category</a>
					</li>
					<li class="breadcrumb-item">
						<a href="{{route('category.create')}}">Add Category</a>
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
						<h4 class="sub-title">Add Category</h4>
						<form action="{{route('category.store')}}" method="post">
							@csrf
							<div class="form-group">
								<label>Category Name</label>
								<div>
									<input type="text" name="name" id="name" class="form-control">
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