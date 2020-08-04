<footer>
	<div class="footer">
		<div class="container" style="width: 870px;">
			<div class="row">
				<div class="col-sm-5">
					<h4>Contact Us</h4>
					<p>info@mysite.com</p>
					<p>Tel: 123-456-7890</p>
					<ul>
						<li><i class='fab fa-facebook-f'></i></li>
						<li><i class='fab fa-twitter'></i></li>
						<li><i class='fab fa-pinterest-p'></i></li>
						<li><i class='fab fa-linkedin-in'></i></li>
					</ul>
				</div>
				<div class="col-sm-4">
					<h4>Address</h4>
					<p>500 Terry Francois Street<br>San Francisco, CA  94158</p>
				</div>
				<div class="col-sm-3">
					<h4>We Accept</h4>
					<span class="cards">
						<img src="/php-project/img/34.png">
						<img src="/php-project/img/33.png">
						<img src="/php-project/img/32.png">
						<img src="/php-project/img/31.png">
					</span>
				</div>
			</div>
		</div>
	</div>
	<div class="copy-footer" style="padding-bottom: 10px;" >
		<div class="container" style="width: 780px;">
			<div class="copy-write">
				<nav class="navbar navbar-expand-lg">
					<div class="navbar-collapse" id="navbarNav">
					    <ul class="navbar-nav">
					        <li class="nav-item active" style="border:none;">
					        	<a class="nav-link" href="/php-project/index.php">Home <span class="sr-only">(current)</span></a>
					        </li>
					        <li class="nav-item">
					        	<a class="nav-link" href="/php-project/apart-suites.php">Apartments & Suites</a>
					        </li>
					        <li class="nav-item">
					       		<a class="nav-link" href="php-project/nearby.php">Nearby Attractions</a>
					        </li>
					        <li class="nav-item">
					       		<a class="nav-link" href="php-project/about.php">About</a>
					        </li>
					        <li class="nav-item">
					       		<a class="nav-link" href="php-project/contact.php">Contact</a>
					        </li>
					    </ul>
					</div>
				</nav>
				<p class="text-center" style="color: #AAA8A8;">© 2023 by Loft City. Proudly created with Wix.com</p>
				<sub style="color: #AAA8A8; margin-bottom: 10px;">Image by Lexe-I has not been altered and is used in compliance with CC License. If you retain this image, please do not alter it.</sub>
			</div>
		</div>
	</div>
</footer>
<script type="text/javascript">
// 	$( document ).ready(function() {
//   $( function() {
//     var dateToday = new Date();
//     var dates = $("#in, #out").datepicker({
//       defaultDate: "+2d",
//       changeMonth: true,
//       numberOfMonths: 1,
//       minDate: dateToday,
//       onSelect: function(selectedDate) {
//           var option = this.id == "in" ? "minDate" : "maxDate",
//           instance = $(this).data("datepicker"),
//           date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
//           dates.not(this).datepicker("option", option, date);
//       }
//     });
//   });
// });
</script>
<script>
$(document).ready(function() {
var startDate;
var endDate;
var minDate = new Date();
 $( "#in" ).datepicker({
dateFormat: 'dd-mm-yy'
})
 $( "#out" ).datepicker({
dateFormat: 'dd-mm-yy'
});
$('#in').change(function() {
startDate = $(this).datepicker('getDate');
$("#out").datepicker("option", "minDate", startDate );
})

$('#out').change(function() {
endDate = $(this).datepicker('getDate');
$("#in").datepicker("option", "maxDate", endDate );
var t1=$('#in').val();
t1=t1.split('-');
dt_t1=new Date(t1[2],t1[1]-1,t1[0]); 
dt_t1_tm=dt_t1.getTime(); 

var t2=$('#out').val();
t2=t2.split('-');
dt_t2=new Date(t2[2],t2[1]-1,t2[0]); 
dt_t2_tm=dt_t2.getTime(); 

var one_day = 24*60*60*1000; 
var diff_days=Math.abs((dt_t2_tm-dt_t1_tm)/one_day) 
$("#result").html(t1 + " - " + t2 + " / " +diff_days + " night(s)");

$("#result").show();
})
})
</script>
