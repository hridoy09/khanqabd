@extends('frontend.master.main')
@section('content')

  <div class="head-logo">
    <div class="left" style="padding: 0px 20px">
      <img src="logo.png" />
    </div>
    <div class="side-left" style="padding: 0px 20px">
      <img src="left.png" width="100%" />
    </div>
    <div class="right" style="padding: 0px 20px">
      <img src="middle.png" width="100%" />
    </div>
    <div class="right" style="padding: 0px 20px">
      <img src="right.png" width="100%" />
    </div>
  </div>

  <nav
    class="navbar navbar-expand-lg navbar-light bg-light"
    style="padding-bottom: 0px !important"
  >
    <div
      class="container-fluid"
      style="
        /*background-color: #0D4F4F!important;*/
        padding-bottom: 0px !important;
      "
    >
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarScroll"
        aria-controls="navbarScroll"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class=""
          ><i style="color: white" class="fa-solid fa-bars-staggered"></i
        ></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul
          class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll"
          style="--bs-scroll-height: 240px; padding-left: 15px !important"
        >
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html"
              >Home</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="books.html">Books</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="audio.html">Audio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarScrollingDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Link
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider" /></li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Link</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Start  styles_main -->

  <div class="styles_main">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="audio_text">
            <h1>9-5-2021 Tashrih Urdu Ashaar Rf 27 Taraweeh Khanqah</h1>
          </div>

          <div class="audio">
            <audio controls class="audio_bck">
              <source src="horse.ogg" type="audio/ogg" />
              <source src="horse.mp3" type="audio/mpeg" />
              Your browser does not support the audio element.
            </audio>
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
                    <td data-title="Date">08-03-2022</td>

                    
                  </tr>
                  <tr>
                    <th data-title="Id">Size</th>
                    <td data-title="Date">08-03-2022</td>
                  </tr>
                  <tr>
                    <th data-title="Id">Voice</th>
                    <td data-title="Date">08-03-2022</td>
                  </tr>

                  <tr>
                    <th data-title="Id">Views</th>
                    <td data-title="Date">08-03-2022</td>
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
            <button type="button" class="btn btn-primary">Download</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection