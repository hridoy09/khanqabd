<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title></title>
		<link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	</head>


    <style>
        .m-nav{
        background-image: url({{asset('frontend')}}/images/nav.png)!important;
            background-size: 100% 100%;
            background-repeat: no-repeat;
        }
    </style>

    
    <body style="background-color: white;">
    @include('frontend.master.header')

    @yield('content')

    @include('frontend.master.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script type="text/javascript">
    var index = 0;
var slides = document.querySelectorAll(".slides");

function changeSlide(){
if(index<0){
index = slides.length-1;
}

if(index>slides.length-1){
index = 0;
}

for(let i=0;i<slides.length;i++){
slides[i].style.display = "none";

}

slides[index].style.display= "block";


index++;

setTimeout(changeSlide,2000);

}
changeSlide();

</script>
<script>
$(document).ready(function() {
$(".slider").slick({
arrows: true,
dots: false,
slidesToShow: 4,
autoplay: true,
speed: 900,
autoplaySpeed: 700,
responsive: [
{
breakpoint: 1300,
settings: {
slidesToShow: 5,
}
},
{
breakpoint: 768,
settings: {
slidesToShow: 2
}
},
{
breakpoint: 550,
settings: {
slidesToShow: 1
}
}
]
});
});
</script>
<script>
     $(function () {
  // this will get the full URL at the address bar
  var url = window.location.href;
  // passes on every "a" tag
  $(".navbar-nav .nav-link").each(function () {
    // checks if its the same on the address bar
    if (url == (this.href)) {
      $(this).closest("li").addClass("activ");
      //for making parent of submenu active
      $(this).closest("li").parent().parent().addClass("activ");
    }
  });
});
</script>
<script>
    document.addEventListener('DOMContentLoaded', function(event) {

if (window.DeviceOrientationEvent) {
  document.getElementById('notice').innerHTML = 'Working API detected';
  window.addEventListener('deviceorientation', (eventData) => {
    // gamma: Tilting the device from left to right. Tilting the device to the right will result in a positive value.
    const tiltLR = eventData.gamma;
    // beta: Tilting the device from the front to the back. Tilting the device to the front will result in a positive value.
    const tiltFB = eventData.beta;
    // alpha: The direction the compass of the device aims to in degrees.
    const dir = eventData.alpha
    // Call the function to use the data on the page.
    deviceOrientationHandler(tiltLR, tiltFB, dir);
  }, false);
} else {
  document.getElementById('notice').innerHTML = 'No API detected'
};



});
</script>

<script>
$(document).ready(function(){
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
  var x = document.getElementById("demo");

function showPosition(position) {
  var latitude = position.coords.latitude;
  var longtitude =  position.coords.longitude;
  $.get('{{url('qibla-direction')}}', { latitude : latitude, longtitude: longtitude}, function(data){
    document.getElementById('tiltLR').innerHTML = Math.ceil(tiltLR);
  document.getElementById('tiltFB').innerHTML = Math.ceil(tiltFB);
  document.getElementById('direction').innerHTML = Math.ceil(data);
  // Rotate the disc of the compass. - CSS transform
  const compassDisc = document.getElementById('compassDiscImg');
  compassDisc.style.transform = `rotate(${data}deg)`;
  compassDisc.style.webkitTransform = `rotate(${data}deg)`;
  compassDisc.style.MozTransform = `rotate(${data}deg)`;
});
  
}

})
</script>

</body>
</html>