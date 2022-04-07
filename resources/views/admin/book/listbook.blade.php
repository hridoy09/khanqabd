@extends('admin.master.main')
@section('content')
{{ 'book List' }}
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
                        <h4 class="card-title">book List</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Serial No </th>
                                        <th>Category Name </th>
                                        <th>Subcategory name</th>
                                        <th>Book category</th>
                                        <th>Feature Image</th>
                                        <th>book File</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($books as $book)
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$book->category->name}}</td>
                                    <td>{{$book->subcategory->subcat_name}}</td>
                                    <td>{{$book->book_cat}}</td>
                                    <td>{{$book->feature_img}}</td>
                                    <td>{{$book->pdf_file}}</td>
                             
                                        <td>
                                           <a     href="{{ URL::to('book/delete/'.$book->id) }}" id="delete"><i
                                                    class="fa fa-trash"></i></a>
                                                    
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!!$books->render()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</div>
@endsection