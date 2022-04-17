


    <div class="container-fuild" >
        <div class="head-logo" >
            <div  class="left" style="padding: 0px 20px;">
           <a href="{{route('index')}}"><img src="{{asset($logos[0]->logo??'')}}" ></a> 
            </div>
            <div class="side-left" style="padding: 0px 20px;">
                <img src="{{asset($logos[1]->logo??'')}}" width="100%">
            </div>
            <div class="right" style="padding: 0px 20px;">
                <img src="{{asset($logos[2]->logo??'')}}"  width="100%">
            </div>
            <div class="right" style="padding: 0px 20px;">
                <img src="{{asset($logos[3]->logo??'')}}"  width="100%">
            </div>
        </div>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-lights" style=" padding-bottom: 0px!important;">
            <div class="container-fluid m-nav " style="/*background-color: #0D4F4F!important;*/ padding-bottom: 0px!important;">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span   class="" ><i style="color: white;" class="fa-solid fa-bars-staggered"></i></span>
                </button>
                <div class="collapse navbar-collapse"  style="justify-content: center;border:none!important;" id="navbarScroll">
                    <ul class="navbar-nav  my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 240px;">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="{{route('index')}}">Home</a>
                        </li>
                        @foreach ($categories as $category)
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{$category->name}}
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown" style="margin-top: 0px;">
                                        @foreach ($category->subcategories as $subcategory)
                                            <li><a class="dropdown-item" href="{{route('audio_by_subcat', $subcategory->id)}}">{{$subcategory->subcat_name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                        @endforeach
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('book')}}">Book</a>
                                </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div>
            <div id="slider">
                    @foreach ($banners as $banner)
                        
             

                <div class="slides">
                    <img src="{{asset($banner->banner_img)}}" width="100%" />
                </div>
                @endforeach
               
                
                
            </div>
        </div>