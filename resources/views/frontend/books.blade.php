@extends('frontend.master.main')
@section('content')
    

          <!-- Start Book Page -->
          <div class="all-bayan">
            <h3>All Books</h3>
          </div>
          <!-- Start Books-Select-Option -->
          <div class="select-option">
            <div class="select-option-1">
              <div class="language">
                <p>Book Category:</p>
              </div>
        
            </div>
            <div class="select-option-2">
              <div class="select-from">
                <select onchange="bookByCat(this.value)" class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option value="">Select Category</option>
                  @foreach ($books as $book )
                  <option value="{{$book->book_cat}}">{{$book->book_cat}}</option>
                  @endforeach
              
                </select>
              </div>
            </div>
          </div>
          <!-- End Books-Select-Option -->
          <div class="card_section">
            <div class="parent" id="parentBook">
              @foreach ($books as $book )
              <div class="product-card">
                <div class="badge"><a href="{{asset('admin/book/'.$book->pdf_file)}}" type="downlode"><i  class="fa fa-download" aria-hidden="true"></i>
                  </a>&nbsp;<a href="{{asset('admin/book/'.$book->pdf_file)}}" type="application/pdf" ><i class="fa-solid fa-eye"></i></a></div>
                  <a href="">
                    <div class="product-tumb">
                      <img src="{{asset('admin/book_feature_img/'.$book->feature_img)}}" alt="" width="100%">
                    </div>
                  </a>
                </div>
            @endforeach
            
              </div>
              @if( count($books) > 0 )
              {!! $books->links() !!}
          @endif 
         

<script>
function bookByCat(id){
  var html="";
  $.ajax({
    url: '{{ url('book-by-cat') }}'+'/'+id,
    type: 'GET',
    dataType: 'json',
    success: function (data) {
      console.log(data);
      if(data.length == 0){
        $('#parentBook').html("<h1><Data not available/h1>");
      }else{
        $.each(data,function(key, value) {
          console.dir(value)
        html+=`<div class="product-card">
            <div class="badge"><a href="admin/book/"`+value.pdf_file+`" type="downlode"><i class="fa fa-download"
                        aria-hidden="true"></i>
                </a>&nbsp;<a href="admin/book/`+value.pdf_file+`" type="application/pdf"><i
                        class="fa-solid fa-eye"></i></a></div>
            <a href="">
                <div class="product-tumb">
                    <img src="admin/book_feature_img/`+value.feature_img+`" alt="" width="100%">
                </div>
            </a>
        </div>`;
        });
        $('#parentBook').html(html);
      }
    }

  });

}
</script>
    
        @endsection