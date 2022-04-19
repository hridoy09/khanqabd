


  @extends('frontend.master.main')
@section('content')

  <!-- Start  styles_main -->

  <div class="styles_main">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="audio_text">
            <h1>{{asset('admin/video/'.$videos->video_file)}}</h1>
          </div>

          <div class="audio">
          
<video width="100%" height="auto" controls loop autoplay>
    <source src="{{asset('admin/video/'.$videos->video_file)}}" type="video/mp4">
  
  </video>
          </div>

          <div class="table-section2">
            <div class="table-responsive" id="no-more-tables">
              <table class="table table-striped">
                <thead>
                  <tr></tr>
                </thead>

                <tbody>
                  <tr>
                    <th data-title="Id">Date</th>
                    <td data-title="Date">{{$videos->created_at->format('d-m-Y')}}</td>

                    
                  </tr>
                  <tr>
                    <th data-title="Id">Size</th>
                    @php
                      $fileSize = filesize_formatted(public_path('admin/video/'.$videos->video_file));
                      function filesize_formatted($path)
                      {
                          $size = filesize($path);
                          $units = array( 'B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
                          $power = $size > 0 ? floor(log($size, 1024)) : 0;
                          return number_format($size / pow(1024, $power), 2, '.', ',') . ' ' . $units[$power];
                      }
                    @endphp
                    <td data-title="Date">{{$fileSize}}</td>
                  </tr>
                
                  
                  <tr>
                    <th data-title="Id">Details</th>
                    <td data-title="Date">	
                        25.2.2021 Khatme Bukhari, Jamea Quraania, bokchar, Jessore <br> <br>
                        
                        তরজুমানে আকাবির লেসানে আখতার আখতারে ছানী আরেফবিল্লাহ শায়খুল হাদীস শায়খুল উলামা হযরত মাওলানা শাহ আবদুল মতীন বিন হুসাইন সাহেব দামাত বারাকাতুহুম এর আযীমুশশান বয়ান</td>
                  </tr>


                </tbody>
              </table>
            </div>
          </div>

          <div class="audio_btn">
            <a class="btn btn-success btn-mid" href="{{asset('admin/video/'.$videos->video_file)}}" type="button" data-title="Download">Download</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection