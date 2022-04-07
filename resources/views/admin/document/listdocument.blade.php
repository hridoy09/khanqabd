@extends('admin.master.main')
@section('content')
{{ 'document List' }}
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
                        <h4 class="card-title">document List</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Serial No </th>
                                        <th>Category Name </th>
                                        <th>document File</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($documents as $document)
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$document->category->name}}</td>
                                    <td>{{$document->document_file}}</td>
                             
                                        <td>
                                           <a   href="{{ URL::to('document/delete/'.$document->id) }}" id="delete"><i
                                                    class="fa fa-trash"></i></a>
                                                    
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!!$documents->render()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</div>
@endsection