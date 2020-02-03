<link rel="stylesheet" type="text/css" href="stylep.css">
<style>
	ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
  <div>
        <ul class="nav navbar-nav">
          <li><a href="index.php">HOME</a></li>
          <li><a href="about.php">ABOUT US</a></li>
          <li><a href="contactus.php">CONTACT US</a></li>
               
        </ul>
    </div>

<div id="form">

<div class="fish" id="fish"></div>
<div class="fish" id="fish2"></div>
<h1>web development team</h1>

</div>


  	<script>
  		$('document').ready(function(){
	$('input[type="text"], input[type="email"], textarea').focus(function(){
		var background = $(this).attr('id');
		$('#' + background + '-form').addClass('formgroup-active');
		$('#' + background + '-form').removeClass('formgroup-error');
	});
	$('input[type="text"], input[type="email"], textarea').blur(function(){
		var background = $(this).attr('id');
		$('#' + background + '-form').removeClass('formgroup-active');
	});

function errorfield(field){
	$(field).addClass('formgroup-error');
	console.log(field);	
}

$("#waterform").submit(function() {
	var stopsubmit = false;

if($('#name').val() == "") {
	errorfield('#name-form');
	stopsubmit=true;
}
if($('#email').val() == "") {
	errorfield('#email-form');
	stopsubmit=true;
}
  if(stopsubmit) return false;
});
		
});
  	</script>