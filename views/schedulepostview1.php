<?php 

?>

<style>



</style>

<div class='reusablepopbackground schedulebackground schedulepostview1' style="left: 0; top: 0;">
			
			
			<div class='pickdate' style='display: none; position: absolute; background-color: white; border: 0;  border-radius: 10px; width: 600px; height: 400px; top: 50%; margin-top: -200px; left: 50%; margin-left: -300px; overflow-y: scroll; overflow-x: hidden;'>
				<button class="closebutton"></button>
				<p class='reusablepoptitle'>Schedule Post</p>
				<div class='control-group'>
					<label for='dob-day' class='control-label'>Date of birth</label>
					<input type=hidden value=<?php echo $epochmade ?> name='datemade' form='postform'>
					<div class='controls'>
					    <select name='dob-month' id='dob-month' form='postform'>
					      	<option value=''>Month</option>
					      	<option value=''>-----</option>
					      	<option value='01'>January</option>
					      	<option value='02'>February</option>
					      	<option value='03'>March</option>
					      	<option value='04'>April</option>
					      	<option value='05'>May</option>
					      	<option value='06'>June</option>
					      	<option value='07'>July</option>
					      	<option value='08'>August</option>
					      	<option value='09'>September</option>
					      	<option value='10'>October</option>
					      	<option value='11'>November</option>
					      	<option value='12'>December</option>
    					</select>
    					<select name='dob-day' id='dob-day' form='postform'>
					      	<option value=''>Day</option>
					      	<option value=''>---</option>
					      	<option value='01'>01</option>
					      	<option value='02'>02</option>
					      	<option value='03'>03</option>
					      	<option value='04'>04</option>
					      	<option value='05'>05</option>
							<option value='06'>06</option>
							<option value='07'>07</option>
							<option value='08'>08</option>
							<option value='09'>09</option>
							<option value='10'>10</option>
							<option value='11'>11</option>
							<option value='12'>12</option>
							<option value='13'>13</option>
							<option value='14'>14</option>
							<option value='15'>15</option>
							<option value='16'>16</option>
							<option value='17'>17</option>
							<option value='18'>18</option>
							<option value='19'>19</option>
							<option value='20'>20</option>
							<option value='21'>21</option>
							<option value='22'>22</option>
							<option value='23'>23</option>
							<option value='24'>24</option>
							<option value='25'>25</option>
							<option value='26'>26</option>
							<option value='27'>27</option>
							<option value='28'>28</option>
							<option value='29'>29</option>
							<option value='30'>30</option>
							<option value='31'>31</option>
					    </select>
					    <select name='dob-year' id='dob-year' form='postform'>
							<option value=''>Year</option>
							<option value=''>----</option>
							<option value='2018'>2018</option>
							<option value='2017'>2017</option>
							<option value='2016'>2016</option>
							<option value='2015'>2015</option>
							<option value='2014'>2014</option>
							<option value='2013'>2013</option>
							<option value='2012'>2012</option>
							<option value='2011'>2011</option>
							<option value='2010'>2010</option>
							<option value='2009'>2009</option>
					    </select>
					</div>
				</div>
			</div>
		</div>


<script>
	
$('.closebutton').click(function(e){
	e.preventDefault();
	closethings();
});
function closethings() {
					selectedfeatured = '';
					$('.nametf').val('');
					$('.srctf').val('');
					$('#postid').val('');
					$('#podcastimglabel').css('background-image', 'url()');
					$('.addimagep').text('Edit Image');

					$('.backgroundoverlay input').val('');
					
					$('.darkoverlay').css('display', 'none');
					$('.imageorvideodiv').css('display', 'none');
					$('.authorpopview').css('display', 'none');
					$('.reusablepopview').css('display', 'none');
					$('.categoriespopview').css('display', 'none');
					$('.articlespopview').css('display', 'none');
					$('.schedulepostview1').css('display', 'none');

					$('.backgroundoverlay').css('display', 'none');
			}

</script>