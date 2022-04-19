@extends('frontend.master.main')
@section('content')

   
   <!-- Start Bayan Section -->

      <div class="all-bayan">
        <h3>All Bayan</h3>
      </div>

    <!-- Start  Bayan Table Section -->

      <div class="table-section">
	
		
			<div class="table-responsive" id="no-more-tables">
				<table class="table table-striped">
					<thead >
						<tr>
							<th>Id</th>
							<th>Date</th>
							<th>Tittle</th>
							<th class="baya__download__size" >Size</th>
							<th class="baya__download__size" >Download</th>
						</tr>
					</thead>
					<tbody>

            {{-- @dd($subcategory->videos) --}}

            @foreach ($videos  as $video )
            <tr>
							<td data-title="Id">{{$loop->iteration}}</td>
							<td data-title="Date">{{$video->created_at}}</td>
							<td data-title="Age"><a href="{{route('singlevideo',$video->id)}}">{{$video->video_file}}</a></td>
							
              <td class="baya__download__size"  data-title="Size">20.25 MB</td>
							<td class="baya__download__size" data-title="Download"><a href="{{asset('admin/video/'.$video->video_file)}}" download="{{asset('admin/video/'.$video->video_file)}}"><i class="fa fa-download" aria-hidden="true"></i>
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
     @if( count($videos) > 0 )
     {!! $videos->links() !!}
 @endif 
       <!-- End Bayan Table Pagination -->
<!-- End Bayan Section -->


@endsection