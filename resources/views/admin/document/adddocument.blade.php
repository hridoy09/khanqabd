@extends('admin.master.main')
@section('content')
{{ 'Admin Banner Settings' }}

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
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form action="{{ route('document.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf

                             
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-category">Category Name<span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                     <select class="form-control" name="cat_id" id="">
                                         @foreach ($categories as $category)
                                         <option value="{{$category->id}}">{{$category->name}}</option>
                                         @endforeach
                                         
                                     </select>

                                    </div>
                                </div>
                     
                                    
                           
                           
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-category">File<span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="file" name="document_file" class="form-control" >

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>


@endsection