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



						<tr>
							<td data-title="Id">19</td>
							<td data-title="Date">08-03-2022</td>
							<td data-title="Age"><a href="#">4-3-2022 Jindagisaz Ilhami Bayan After Esha Ghurfa Karachi udtyensb fhasdjfl</a></td>
							
              <td class="baya__download__size"  data-title="Size">20.25 MB</td>
							<td class="baya__download__size" data-title="Download"><a href="3"><i class="fa fa-download" aria-hidden="true"></i>
							</a>
            </td>	
						</tr>

						
          
            
					</tbody>
				</table>
			</div>
	 
	
	
      </div>

      <!-- End Bayan Table Section -->

      <!-- Start Bayan Table Pagination -->

      <div class="pagination">

          <nav aria-label="Page navigation example m-t-10">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>

        </div>    

       <!-- End Bayan Table Pagination -->
<!-- End Bayan Section -->


@endsection