
			@extends('frontend.master.main')
			@section('content')
			<div class="row" style="padding:30px  0px; margin: 0px;">
				
				<div class="col-12 col-lg-4 col-md-4" style="text-align: center;" >
					<h4 style="padding:20px  0px; margin: 0px;">Live Broadcasting</h4>
					
					<audio style="padding:20px  0px;" class="audio-div" controls preload="metadata">
						<source src="https://www.w3schools.com/html/horse.ogg" type="audio/ogg">
					</audio>
					<h1 class="jamat" >Jamat Times</h1>
					<div class="row " style="justify-content: center;">
						{{-- <div class="col-4 col-md-3 col-lg-2 text-center border" >
							<h5>FAJR</h5>
							<h3>04:40</h3>
						</div>
						<div class="col-4 col-md-3 col-lg-2 text-center border" >
							<h5>ZUHR</h5>
							<h3>04:40</h3>
						</div>
						<div class="col-4 col-md-3 col-lg-2 text-center border" >
							<h5>ASR</h5>
							<h3>04:40</h3>
						</div>
						<div class="col-6 col-md-3 col-lg-3 text-center border " >
							<h5>MAGHRIB</h5>
							<h3>04:40</h3>
						</div>
						<div class="col-6 col-md-3 col-lg-2 text-center border" >
							<h5>ISHA</h5>
							<h3>04:40</h3>
						</div> --}}
						<iframe id="iframe" title="prayerWidget" class="widget-m-top" style=" height: 300px; " scrolling="no" src="https://www.islamicfinder.org/prayer-widget/1205733/shafi/3/0/18.0/18.0"> </iframe>
					</div>
					<!-- mobile app div -->
					<!-- 	<h4 style="padding:0px 0px 20px 0px;">Get Mobile App</h4>
					<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
													<a href=""><img style="width: 65%"  src="google-play.png"></a>
							</div>
							<div class="col-12 col-md-6 col-lg-6">
														<a href=""><img style="width: 65%" src="appstore.png" ></a>
							</div>
							
					</div> -->
					
				</div>
				<div class="col-12 col-lg-4 col-md-4"  style="text-align: center;    display: flex;
				flex-direction: column;
				justify-content: center;"  >
				<div><h2 style="margin-bottom: 10px;">Next Majlis </h2>
					
					<div class="after"> After</div>
					<div class="timeleft">
						<div>
							<div>hours</div>
							<div><strong>10</strong></div>
						</div>
						<div>
							<div>minutes</div>
							<div><strong>10</strong></div>
						</div>
					</div>
					<p>Friday Bayan ➤ At Baitul Haq Jame Masjid</p>
					<a class="btn btn-md" data-bs-toggle="modal" href="#exampleModalToggle" role="button"><i class="fa-solid fa-calendar-days"></i> SCHEDULE & MAP</a></div>
					
				</div>
				<div class="col-12 col-lg-4 col-md-4"  style="    display: flex;
				flex-direction: column;
				justify-content: center;">
					<h2 style="margin-bottom: 15px;text-align: center;">Contact Us </h2>
					<table style="margin-left: auto; margin-right: auto;">
						<tbody>
							<tr class="contact-tr">
								<td class="con_icon"><i style="color: green;" class="fa-brands fa-whatsapp"></i></td>
								<td style= "text-align left"><a class="contact" href="https://wa.me/{{$contacts->whatsapp_no}}">{{$contacts->whatsapp_no}}</a></td>
							</tr>
							<tr class="contact-tr">
								<td  class="con_icon"><i style="color:skyblue" class="fa-brands fa-telegram"></i></td>
								<td style= "text-align left"><a  class="contact" href="">{{$contacts->telegram_link}}</a></td>
							</tr>
							<tr class="contact-tr">
								<td  class="con_icon"><i style="color: #d54537;" class="fa-solid fa-envelope"></i></td>
								<td style= "text-align left"><a  class="contact" href="mailto:{{$contacts->gmail}}">{{$contacts->gmail}}</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row round-div" style="padding: 0px; margin: 0px;">
				
				<div class="col-12 col-lg-4 col-md-4 text-center"  >
					
					<ul class="round-icon">
						<li><i class="fa-solid fa-wifi"></i></li>
					</ul>
					
				</div>
				<div class="col-12 col-lg-4 col-md-4 text-center" >
					
					<ul  class="round-icon">
						<li><i class="fa-solid fa-clock"></i></li>
					</ul>
				</div>
				<div class="col-12 col-lg-4 col-md-4 text-center" >
					
					<ul class="round-icon" >
						<li><i class="fa-brands fa-whatsapp"></i></li>
					</ul>
				</div>
			</div>
			<div class="search-div" >
				<label class="visually-hidden" for="inlineFormInputGroupUsername">Search</label>
				<div class="input-group" style="width: 50%;">
					<div class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></div>
					<input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Search">
					<div class="input-group-text" style="background-color:#0F5A5A; "><a style="color: white; text-decoration: none;" href="">Search</a></div>
				</div>
			</div>
			<div class="row" style="margin: 0px; padding: 0px;">
				@php
					$subcategoriesFirst = $subcategories->take(6);
				@endphp
				@foreach ($subcategoriesFirst as $subcategory )
				<div class="col-12 col-md-6 col-lg-4 audio_list"  >
					<h5>{{$subcategory->subcat_name}}</h5>
					<p>(Before J0  uma Bayan and After Juma Majlis)</p>
					@foreach ($subcategory->audios as $audio)
					<a href="" style="border-bottom:1px solid grey; padding-bottom: 5px;">{{$audio->audio_file}}</a><a style="float: right;" href="{{asset('admin/audio/'.$audio->audio_file)}}" download="{{asset('admin/audio/'.$audio->audio_file)}}"><i class="fa-solid fa-download"></i></a>
					@endforeach
					
					<div style="margin: 30px;">
						<a class="btn btn-success" href="{{route('audio_by_subcat', $subcategory->id)}}">view More</a>
					</div>
					
				</div>
				@endforeach
				
			
				
			</div>
			<div class="parent">
				<div class="short_clips zoom" >
					<a href="">
						<img src="{{asset('frontend')}}/images/clips.png">
					</a>
				</div>
				<div class="short_clips zoom" >
					<a href="">
						<img src="{{asset('frontend')}}/images/clips.png">
					</a>
				</div>
				<div class="short_clips zoom" >
					<a href="">
						<img src="{{asset('frontend')}}/images/clips.png">
					</a>
				</div>
				<div class="short_clips zoom" >
					<a href="">
						<img src="{{asset('frontend')}}/images/clips.png">
					</a>
				</div>
				<div class="short_clips zoom" >
					<a href="">
						<img src="{{asset('frontend')}}/images/clips.png">
					</a>
				</div>
				<div class="short_clips zoom" >
					<a href="">
						<img src="{{asset('frontend')}}/images/clips.png">
					</a>
				</div>
				<div class="short_clips zoom" >
					<a href="">
						<img src="{{asset('frontend')}}/images/clips.png">
					</a>
				</div>
				<div class="short_clips zoom" >
					<a href="">
						<img src="{{asset('frontend')}}/images/clips.png">
					</a>
				</div>
				<div class="short_clips zoom" >
					<a href="">
						<img src="{{asset('frontend')}}/images/clips.png">
					</a>
				</div>
				<div class="short_clips zoom" >
					<a href="">
						<img src="{{asset('frontend')}}/images/clips.png">
					</a>
				</div>
			</div>
			
			<div class="row" style="margin: 60px 0px; padding: 10px 0px;   background: beige;">
				@php
				$subcategoriesMiddle = App\Models\Subcategory::with('audios')->whereHas('audios')->latest()->take(4)->get();
				
			@endphp
				@foreach ($subcategoriesMiddle as $subcategory )
				@if (!$subcategoriesFirst->contains($subcategory->id))
				
				<div class="col-12 col-md-6 col-lg-3 audio_list"  >
					<h5>{{$subcategory->subcat_name}}</h5>
					<p>(Before J0  uma Bayan and After Juma Majlis)</p>
					@foreach ($subcategory->audios as $audio)
					<a href="" style="border-bottom:1px solid grey; padding-bottom: 5px;">{{$audio->audio_file}}</a>
					@endforeach
				
					<div style="margin: 30px;">
						<a class="btn btn-success" href="{{route('audio_by_subcat', $subcategory->id)}}">view More</a>
					</div>
					
				</div>
				@endif
				
				@endforeach
			
		
				
			</div>
			<div>
				<h3 style="text-align:center;">Book's</h3>
			</div>
			<div class="wrapper">
			
				<div class="slider">
				
					@foreach ($books as $book )
					<a href="{{asset('admin/book/'.$book->pdf_file)}}" type="application/pdf">
						<div class="slider__item">
							<img src="{{asset('admin/book_feature_img/'.$book->feature_img)}}"
							alt="">
						</div>
					</a>
					
					@endforeach
				
				

				</div>
			</div>
			<div style="text-align: center;">
				<a class="btn btn-success" href="{{route('book')}}">MORE BOOKS (BANGLA, URDU, ENGLISH)</a>
			</div>
			<div class="row" style="margin: 20px 0px;box-shadow: 0px 0px 10px;
				padding: 30px 0px;">
				<div class="col-12 col-md-6 col-lg-3 audio_list"  >
					<h5><i class="fa-solid fa-microphone"></i> Juma Lectures</h5>
					
					<a href="" style="border-bottom:1px solid grey; padding-bottom: 5px;">18-2-2022 After Juma Mou Rizwan Sb .mp3</a><a style="float: right;" href=""><i class="fa-solid fa-download"></i></a>
					<div style="margin: 30px;">
						<a class="btn btn-success" href="">view More</a>
					</div>
					
				</div>
				<div class="col-12 col-md-6 col-lg-3 audio_list"  >
					<h5><i class="fa-solid fa-microphone"></i> Juma Lectures</h5>
					
					<a href="" style="border-bottom:1px solid grey; padding-bottom: 5px;">18-2-2022 After Juma Mou Rizwan Sb .mp3</a><a style="float: right;" href=""><i class="fa-solid fa-download"></i></a>
					<div style="margin: 30px;">
						<a class="btn btn-success" href="">view More</a>
					</div>
					
				</div>
				<div class="col-12 col-md-6 col-lg-3 audio_list"  >
					<h5><i class="fa-solid fa-pen-to-square"></i>  Juma Lectures</h5>
					
					<a href="" style="border-bottom:1px solid grey; padding-bottom: 5px;">18-2-2022 After Juma Mou Rizwan Sb .mp3</a><a style="float: right;" href=""><i class="fa-solid fa-download"></i></a>
					<div style="margin: 30px;">
						<a class="btn btn-success" href="">view More</a>
					</div>
					
				</div>
				<div class="col-12 col-md-6 col-lg-3 audio_list"  >
					<img src="{{asset('frontend')}}/images/bayan-schedule.jpeg" width="100%">
					
				</div>
				
			</div>
			
			
		</div>
		<!-- model -->
		<div class="modal fade" id="exampleModalToggle" aria-hidden="true" 		aria-labelledby="exampleModalToggleLabel" tabindex="-1">
			<div class="modal-dialog modal-dialog-centered" >
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalToggleLabel">Schedule & Map</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div style="border-bottom:1px solid grey; padding-bottom: 5px;">
							<div style="border-bottom: 1px solid grey;margin: 10px;">
								<h5>{{$modals->first_bayan}}</h5>
								<ul class="list_style">
									<li>{{$modals->first_bayan_1st_time}}</li>
									<li>{{$modals->first_bayan_2nd_time}}</li>
								</ul>
							</div>
							<div style="border-bottom: 1px solid grey;margin: 10px;">
								<h5>{{$modals->second_bayan}}</h5>
								<ul class="list_style">
									<li>{{$modals->second_bayan_time}}</li>
								</ul>
							</div>
							<div style="margin: 10px;">
								<h5>{{$modals->thied_bayan}}</h5>
								<ul class="list_style">
									<li>{{$modals->third_bayan_time}}</li>
								</ul>
								<iframe src="{{$modals->iframe_link}}" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</div>
							
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
@endsection