
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
								<td style= "text-align left"><a class="contact" href="https://wa.me/+8801752742031">(+880)-1752-74-20-31</a></td>
							</tr>
							<tr class="contact-tr">
								<td  class="con_icon"><i style="color:skyblue" class="fa-brands fa-telegram"></i></td>
								<td style= "text-align left"><a  class="contact" href="https://wa.me/+8801752742031">(+880)-1752-74-20-31</a></td>
							</tr>
							<tr class="contact-tr">
								<td  class="con_icon"><i style="color: #d54537;" class="fa-solid fa-envelope"></i></td>
								<td style= "text-align left"><a  class="contact" href="#">xyz@gmail.com</a></td>
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
				<div class="col-12 col-md-6 col-lg-4 audio_list"  >
					<h5>Juma Lectures</h5>
					<p>(Before J0  uma Bayan and After Juma Majlis)</p>
					<a href="" style="border-bottom:1px solid grey; padding-bottom: 5px;">18-2-2022 After Juma Mou Rizwan Sb .mp3</a><a style="float: right;" href=""><i class="fa-solid fa-download"></i></a>
					<div style="margin: 30px;">
						<a class="btn btn-success" href="">view More</a>
					</div>
					
					
					
				</div>
				<div class="col-12 col-md-6 col-lg-4 audio_list"  >
					<h5>Juma Lectures</h5>
					<p>(Before J0  uma Bayan and After Juma Majlis)</p>
					<a href="" style="border-bottom:1px solid grey; padding-bottom: 5px;">18-2-2022 After Juma Mou Rizwan Sb .mp3</a><a style="float: right;" href=""><i class="fa-solid fa-download"></i></a>
					<div style="margin: 30px;">
						<a class="btn btn-success" href="">view More</a>
					</div>
					
				</div>
				<div class="col-12 col-md-6 col-lg-4 audio_list"  >
					<h5>Juma Lectures</h5>
					<p>(Before J0  uma Bayan and After Juma Majlis)</p>
					<a href="" style="border-bottom:1px solid grey; padding-bottom: 5px;">18-2-2022 After Juma Mou Rizwan Sb .mp3</a><a style="float: right;" href=""><i class="fa-solid fa-download"></i></a>
					<div style="margin: 30px;">
						<a class="btn btn-success" href="">view More</a>
					</div>
					
				</div>
				
			</div>
			
			<div class="row" style="margin: 60px 0px; padding: 0px;">
				<div class="col-12 col-md-6 col-lg-4 audio_list"  >
					<h5>Juma Lectures</h5>
					<p>(Before J0  uma Bayan and After Juma Majlis)</p>
					<a href="" style="border-bottom:1px solid grey; padding-bottom: 5px;">18-2-2022 After Juma Mou Rizwan Sb .mp3</a><a style="float: right;" href=""><i class="fa-solid fa-download"></i></a>
					<div style="margin: 30px;">
						<a class="btn btn-success" href="">view More</a>
					</div>
					
				</div>
				<div class="col-12 col-md-6 col-lg-4 audio_list"  >
					<h5>Juma Lectures</h5>
					<p>(Before J0  uma Bayan and After Juma Majlis)</p>
					<a href="" style="border-bottom:1px solid grey; padding-bottom: 5px;">18-2-2022 After Juma Mou Rizwan Sb .mp3</a><a style="float: right;" href=""><i class="fa-solid fa-download"></i></a>
					<div style="margin: 30px;">
						<a class="btn btn-success" href="">view More</a>
					</div>
					
				</div>
				<div class="col-12 col-md-6 col-lg-4 audio_list"  >
					<h5>Juma Lectures</h5>
					<p>(Before J0  uma Bayan and After Juma Majlis)</p>
					<a href="" style="border-bottom:1px solid grey; padding-bottom: 5px;">18-2-2022 After Juma Mou Rizwan Sb .mp3</a><a style="float: right;" href=""><i class="fa-solid fa-download"></i></a>
					<div style="margin: 30px;">
						<a class="btn btn-success" href="">view More</a>
					</div>
					
				</div>
				
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
			
			<div class="row" style="margin: 60px 0px; padding: 10px 0px;   background: beige;
				">
				<div class="col-12 col-md-6 col-lg-3 audio_list"  >
					<h5>Juma Lectures</h5>
					<p>(Before J0  uma Bayan and After Juma Majlis)</p>
					<a href="" style="border-bottom:1px solid grey; padding-bottom: 5px;">18-2-2022 After Juma Mou Rizwan Sb .mp3</a>
					<div style="margin: 30px;">
						<a class="btn btn-success" href="">view More</a>
					</div>
					
				</div>
				<div class="col-12 col-md-6 col-lg-3 audio_list"  >
					<h5>Juma Lectures</h5>
					<p>(Before J0  uma Bayan and After Juma Majlis)</p>
					<a href="" style="border-bottom:1px solid grey; padding-bottom: 5px;">18-2-2022 After Juma Mou Rizwan Sb .mp3</a>
					<div style="margin: 30px;">
						<a class="btn btn-success" href="">view More</a>
					</div>
					
				</div>
				<div class="col-12 col-md-6 col-lg-3 audio_list"  >
					<h5>Juma Lectures</h5>
					<p>(Before J0  uma Bayan and After Juma Majlis)</p>
					<a href="" style="border-bottom:1px solid grey; padding-bottom: 5px;">18-2-2022 After Juma Mou Rizwan Sb .mp3</a>
					<div style="margin: 30px;">
						<a class="btn btn-success" href="">view More</a>
					</div>
					
				</div>
				<div class="col-12 col-md-6 col-lg-3 audio_list"  >
					<h5>Juma Lectures</h5>
					<p>(Before J0  uma Bayan and After Juma Majlis)</p>
					<a href="" style="border-bottom:1px solid grey; padding-bottom: 5px;">18-2-2022 After Juma Mou Rizwan Sb .mp3</a>
					<div style="margin: 30px;">
						<a class="btn btn-success" href="">view More</a>
					</div>
					
				</div>
				
			</div>
			<div>
				<h3 style="text-align:center;">Book's</h3>
			</div>
			<div class="wrapper">
				<!-- Контент -->
				<div class="slider">
					<a href="">
						<div class="slider__item">
							<img src="https://i.etsystatic.com/9970942/d/il/3eb7fe/1455383965/il_340x270.1455383965_t5ez.jpg?version=0"
							alt="">
						</div>
					</a>
					<a href="">
						<div class="slider__item">
							<img src="https://i.etsystatic.com/9970942/d/il/3eb7fe/1455383965/il_340x270.1455383965_t5ez.jpg?version=0"
							alt="">
						</div>
					</a>
					<a href="">
						<div class="slider__item">
							<img src="https://i.etsystatic.com/9970942/d/il/3eb7fe/1455383965/il_340x270.1455383965_t5ez.jpg?version=0"
							alt="">
						</div>
					</a>
					<a href="">
						<div class="slider__item">
							<img src="https://i.etsystatic.com/9970942/d/il/3eb7fe/1455383965/il_340x270.1455383965_t5ez.jpg?version=0"
							alt="">
						</div>
					</a>
					<a href="">
						<div class="slider__item">
							<img src="https://i.etsystatic.com/9970942/d/il/3eb7fe/1455383965/il_340x270.1455383965_t5ez.jpg?version=0"
							alt="">
						</div>
					</a>
					<a href="">
						<div class="slider__item">
							<img src="https://i.etsystatic.com/9970942/d/il/3eb7fe/1455383965/il_340x270.1455383965_t5ez.jpg?version=0"
							alt="">
						</div>
					</a>
					<a href="">
						<div class="slider__item">
							<img src="https://i.etsystatic.com/9970942/d/il/3eb7fe/1455383965/il_340x270.1455383965_t5ez.jpg?version=0"
							alt="">
						</div>
					</a>
					<a href="">
						<div class="slider__item">
							<img src="https://i.etsystatic.com/9970942/d/il/3eb7fe/1455383965/il_340x270.1455383965_t5ez.jpg?version=0"
							alt="">
						</div>
					</a>
				</div>
			</div>
			<div style="text-align: center;">
				<a class="btn btn-success" href="">MORE BOOKS (BANGLA, URDU, ENGLISH)</a>
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
								<h5>Friday Bayan (Bait ul Haq Jamia Masjid)</h5>
								<ul class="list_style">
									<li>Before Juma Bayan (1pm BST)</li>
									<li>After Juma Majlis (2:15pm BST)</li>
								</ul>
							</div>
							<div style="border-bottom: 1px solid grey;margin: 10px;">
								<h5>Tuesday Bayan</h5>
								<ul class="list_style">
									<li>Before Juma Bayan (1pm BST)</li>
								</ul>
							</div>
							<div style="margin: 10px;">
								<h5>Monthly Ijtima</h5>
								<ul class="list_style">
									<li>Before Juma Bayan (1pm BST)</li>
								</ul>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.6050692633435!2d91.84479151538632!3d22.368536246066117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd9931c81e8c5%3A0xee22258ed120597!2sCoders%20Point!5e0!3m2!1sbn!2sbd!4v1645083948104!5m2!1sbn!2sbd" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</div>
							
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
@endsection