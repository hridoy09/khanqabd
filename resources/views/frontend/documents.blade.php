@extends('frontend.master.main')
@section('content')


   <!-- Start Bayan Section -->

      <div class="all-bayan">
        <h3>All Document</h3>
      </div>

    <!-- Start  Bayan Table Section -->

      <div class="table-section">


			<div class="table-responsive" id="no-more-tables">
				<table class="table table-striped">
					<thead >
						<tr>
							<th>Id</th>
							<th>Date</th>
							<th>Title</th>
							<th class="baya__download__size" >Size</th>
							<th class="baya__download__size" >Download</th>
						</tr>
					</thead>
					<tbody>

            {{-- @dd($subcategory->documents) --}}

            @foreach ($documents as $document )
            <tr>
							<td data-title="Id">{{$loop->iteration}}</td>
							<td data-title="Date">{{$document->created_at}}</td>
							<td data-title="Age"><a href="#">{{$document->document_file}}</a></td>

              <td class="baya__download__size"  data-title="Size">20.25 MB</td>
							<td class="baya__download__size" data-title="Download"><a href="{{asset('admin/document/'.$document->document_file)}}" download="{{asset('admin/document/'.$document->document_file)}}"><i class="fa fa-download" aria-hidden="true"></i>
							</a>
            </td>
						</tr>
            @endforeach

					</tbody>
				</table>
			</div>



      </div>

      <!-- End Bayan Table Section -->

      <!-- Start Bayan Table Pagination -->
     @if( count($documents) > 0 )
     {!! $documents->links() !!}
 @endif
       <!-- End Bayan Table Pagination -->
<!-- End Bayan Section -->


@endsection
