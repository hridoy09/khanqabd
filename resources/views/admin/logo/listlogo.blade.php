@extends('admin.master.main')
@section('content')
{{ 'Category List' }}
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">logo List</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Serial No </th>
                                        <th>logo Image </th>
                                        <th>logo Title</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                    
                                    @php
                                    $i = 1;
                                    @endphp
                                    @foreach($logos as $logo)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td><img src="{{ asset($logo->logo) }}"
                                                style="width: 350px; height: 150px;"></td>
                                        <td>{{ $logo->logo_name }}</td>
                                        @if($logo->status == 1)
                                        <td><span class="badge badge-success">Active</span></td>
                                        @else
                                        <td><span class="badge badge-danger">Inactive</span></td>
                                        @endif
                                        <td>
                                            @if($logo->status == 1) <a
                                                href="{{ URL::to('logo/change_status/'.$logo->id) }}"><i
                                                    class="fa fa-arrow-circle-down"></i></a>@else<a
                                                href="{{ URL::to('logo/change_status/'.$logo->id) }}"><i
                                                    class="fa fa-arrow-circle-up"></i></a>@endif <a
                                                href="{{ URL::to('logo/delete/'.$logo->id) }}" id="delete"><i
                                                    class="fa fa-trash"></i></a>
                                                    <a href="{{ URL::to('logo/edit/'.$logo->id) }}"><i class="fas fa-edit"></i></a>
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
@endsection