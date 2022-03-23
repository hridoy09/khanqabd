@extends('admin.master.main')
@section('content')
{{ 'Audio List' }}
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
                        <h4 class="card-title">Audio List</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Serial No </th>
                                        <th>Category Name </th>
                                        <th>Subcategory name</th>
                                        <th>Feature Image</th>
                                        <th>Audio File</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($audios as $audio)
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$audio->category->name}}</td>
                                    <td>{{$audio->subcategory->subcat_name}}</td>
                                    <td>{{$audio->feature_img}}</td>
                                    <td>{{$audio->audio_file}}</td>
                             
                                        <td>
                                           <a     href="{{ URL::to('audio/delete/'.$audio->id) }}" id="delete"><i
                                                    class="fa fa-trash"></i></a>
                                                    
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!!$audios->render()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</div>
@endsection