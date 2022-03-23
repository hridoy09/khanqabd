@extends('admin.master.main')
@section('content')
<div class="page-header card">
	<div class="row align-items-end">
		<div class="col-lg-8">
			<div class="page-header-title">
				<i class="feather icon-home bg-c-blue"></i>
				<div class="d-inline">
					<h5>contact</h5>
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
						<a href="{{route('contact.index')}}">contact</a>
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
					<div class="card col-sm-8">
						<div class="card-block">
							<h4 class="sub-title">contact List</h4>
							<table class="table">
								<thead>
									<tr>
										<th scope="col">Sl</th>
										<th scope="col">Whatsapp No</th>
										<th scope="col">Telegram Link</th>
										<th scope="col">Gmail</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($all_contact as $contact)
									<tr>
										<th scope="row">1</th>
										<td>{{$contact->whatsapp_no}}</td>
										<td>{{$contact->telegram_link}}</td>
										<td>{{$contact->gmail}}</td>
										<td>
											<form action="{{ route('contact.destroy',$contact->id) }}" method="POST">
							                 
							                    @csrf
							                    @method('DELETE')
							      
							                    <button type="submit" class="text-danger" style="border: none; background: inherit; cursor: pointer;"><i class="fas fa-trash-alt"></i></button>
							                </form>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
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