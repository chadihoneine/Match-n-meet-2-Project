
<!DOCTYPE html>
<html lang="en">
<head>
<title>Match-N-Meet</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travello template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">




</head>
<body>



<div class="super_container">

	<!-- Header -->

		<header class="header">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
								<div class="logo"><a href="index.html">Match-N-Meet</a></div>
								<nav class="main_nav">
									<ul class="d-flex flex-row align-items-start justify-content-start">
										<li><a href="index.html">Home</a></li>
										<li><a href="about.html">About us</a></li>
										<li><a href="events.html">Events</a></li>
										<li class="active"><a href="statistics.php">Statistics</a></li>
										<li><a href="questions.php">Questions</a></li>
										<li><a href="login.php">Login</a></li>
										<li><a href="profileproc.php">Profile page</a></li>
										<li><a href="Admin.html">Admin page</a></li>
									</ul>
								</nav>

								<!-- Hamburger -->

								<div class="hamburger ml-auto">
									<i class="fa fa-bars" aria-hidden="true"></i>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header_social d-flex flex-row align-items-center justify-content-start">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</header>

	<!-- Menu -->

	<div class="menu">
		<div class="menu_header d-flex flex-row align-items-center justify-content-start">
			<div class="menu_logo"><a href="index.html">Travello</a></div>
			<div class="menu_close_container ml-auto"><div class="menu_close"><div></div><div></div></div></div>
		</div>
		<div class="menu_content">
			<ul>
				<li><a href="inex.html">Home</a></li>
				<li><a href="about.html">About us</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="news.html">News</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
		<div class="menu_social">
			<div class="menu_phone ml-auto">Call us: 00-56 445 678 33</div>
			<ul class="d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(images/aboutusimage.jpg)"></div>
	</div>

	<!-- Search -->


	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title"><h2>Statistics</h2></div>
				</div>
			</div>

						<div class="text_highlight">Purpose:</div>
						<div class="about_text">
							<p>Our application collects alot of information from the user thanks to the questionnaire that is asked to them. We then use theses information and transform then into statistics
								that we then use to create better events that would satisfies more users.
</p>
<div class="row about_row">
	<div class="col-lg-6">
		<div class="about_content">
						</div>
				</div>
		</div>
	</div>





			<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	<div id="chartContainer1" style="width: 45%; height: 300px;display: inline-block;"></div>

	<div id="chartContainer3" style="width: 45%; height: 300px;display: inline-block;"></div>

<?php include("stats.php");  ?>

<script type="text/javascript">
	var chart = new CanvasJS.Chart("chartContainer1",
		{
				animationEnabled: true,
				title: {
						text: "Number of events since 2012(from Lebtivity)"
				},
				axisX: {
						interval: 10,
				},
				data: [
				{
						type: "splineArea",
						color: "rgba(255,12,32,.3)",
						dataPoints: [
								{ x: new Date(2012, 0), y: 0 },
								{ x: new Date(2013, 0), y: 191 },
								{ x: new Date(2014, 0), y: 224 },
								{ x: new Date(2015, 0), y: 186 },
								{ x: new Date(2016, 0), y: 223 },
								{ x: new Date(2017, 0), y: 190 },
								{ x: new Date(2018, 0), y: 165 },
								{ x: new Date(2019, 0), y: 99 },
								{ x: new Date(2020, 0), y: 19 },

						]
				},
				]
		});
chart.render();



var chart = new CanvasJS.Chart("chartContainer3",
		{
				animationEnabled: true,
				title: {
						text: "Events dropping due to the coronavirus outbreak"
				},
				axisX: {
						valueFormatString: "MMM",
						interval: 1,
						intervalType: "month"
				},
				axisY: {
						includeZero: false
				},
				data: [
				{
					type: "line",
					dataPoints: [
							{ x: new Date(2012, 00, 1), y: 33,  indexLabel: "highest", markerColor: "red", markerType: "triangle"  },
							{ x: new Date(2012, 01, 1), y: 28 },
							{ x: new Date(2012, 02, 1), y: 6},
							{ x: new Date(2012, 03, 1), y: 0 , indexLabel: "lowest", markerColor: "DarkSlateGrey", markerType: "cross" },
							{ x: new Date(2012, 04, 1), y: 0 , indexLabel: "lowest", markerColor: "DarkSlateGrey", markerType: "cross" },
							{ x: new Date(2012, 05, 1), y: 0 , indexLabel: "lowest", markerColor: "DarkSlateGrey", markerType: "cross" },
							{ x: new Date(2012, 06, 1), y: 7 },
							{ x: new Date(2012, 07, 1), y: 18 },
							{ x: new Date(2012, 08, 1), y: 24},
							{ x: new Date(2012, 09, 1), y: 27 },
							{ x: new Date(2012, 10, 1), y: 28 },
							{ x: new Date(2012, 11, 1), y: 32 }
						]
				}
				]
		});
chart.render();





			</script>

<div id="piechart" style="width: 900px; height: 500px;"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Strongly agree',<?php print $countcooperationstronglyagree ?>],
          ['Strongly disagree',<?php print $countcooperationstronglydisagree ?>],
          ['Agree',<?php print $countcooperationagree ?>],
          ['Disagree',<?php print $countcooperationdisagree ?>],

        ]);

        var options = {
          title: 'I value cooperation over competition'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		  <script type="text/javascript">
		    google.charts.load("current", {packages:['corechart']});
		    google.charts.setOnLoadCallback(drawChart);
		    function drawChart() {
		      var data = google.visualization.arrayToDataTable([
		        ["Element", "Number in %", { role: "style" } ],
		        ["Females that likes TV", <?php print $counttvfemale/$row_num2*100 ?>, "#b87333"],
		        ["Males that likes TV", <?php print $counttvmale/$row_num2*100  ?>, "#b87333"],
		        ["Females that likes android", <?php print $countandroidfemale/$row_num2*100  ?>, "gold"],
		        ["Males that likes android", <?php print $countandroidmale/$row_num2*100  ?>, "gold"]
		      ]);

		      var view = new google.visualization.DataView(data);
		      view.setColumns([0, 1,
		                       { calc: "stringify",
		                         sourceColumn: 1,
		                         type: "string",
		                         role: "annotation" },
		                       2]);

		      var options = {
		        title: "Some information about boys and girls",
		        width: 600,
		        height: 400,
		        bar: {groupWidth: "95%"},
		        legend: { position: "none" },
		      };
		      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
		      chart.draw(view, options);
		  }
		  </script>

<div id="piechart_3d" style="width: 900px; height: 500px;"></div>
			<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
			    <script type="text/javascript">
			      google.charts.load("current", {packages:["corechart"]});
			      google.charts.setOnLoadCallback(drawChart);
			      function drawChart() {
			        var data = google.visualization.arrayToDataTable([
			          ['Task', 'Hours per Day'],
			          ['Strongly agree', <?php print $countmusicstronglyagree ?>],
			          ['Strongly disagree',<?php print $countmusicstronglydisagree ?>],
			          ['Agree',  <?php print $countmusicdisagree ?>],
			          ['Disagree', <?php print $countmusicagree ?>]
			        ]);

			        var options = {
			          title: 'Who likes music?',
			          is3D: true,
			        };

			        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
			        chart.draw(data, options);
			      }
			    </script>
<!--
					['Task', 'Hours per Day'],
					['Strongly agree',<?php print $countpartiesstronglyagree ?>],
					['Strongly disagree', <?php print $countpartiesstronglydisagree ?>],
					['Agree', <?php print $countpartiesagree ?>],
					['Disagree',<?php print $countpartiesdisagree ?>]
-->



<p><br></p><p><br></p><p><br></p>
<div id="top_x_div" style="width: 800px; height: 600px;"></div>
			<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
			    <script type="text/javascript">
			      google.charts.load('current', {'packages':['bar']});
			      google.charts.setOnLoadCallback(drawStuff);

			      function drawStuff() {
			        var data = new google.visualization.arrayToDataTable([
			          ['Unit', 'Percentage'],
			          ["Likes Harry Potter", <?php print $countharry/$num_rows2*100 ?>],
			          ["Likes Lord of the rings", <?php print $countlord/$num_rows2*100 ?>],
			          ["Likes Netflix", <?php print $countnetflix/$num_rows2*100 ?>],
			          ["Likes Youtube", <?php print $countyoutube/$num_rows2*100 ?>],
			          ['Prefer day over night', <?php print $countday/$num_rows2*100 ?>]
			        ]);

			        var options = {
			          width: 800,
			          legend: { position: 'none' },
			          chart: {
			            title: 'Some facts from this or that questions',
			            subtitle: 'popularity by percentage' },
			          axes: {
			            x: {
			              0: { side: 'top', label: ''} // Top x-axis.
			            }
			          },
			          bar: { groupWidth: "90%" }
			        };

			        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
			        // Convert the Classic options to Material options.
			        chart.draw(data, google.charts.Bar.convertOptions(options));
			      };
			    </script>
<!--
			<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	animationEnabled: true,
	zoomEnabled: true,
	title: {
		text: "Try Zooming and Panning"
	},
	data: [{
		type: "area",
		dataPoints: []
	}]
});

addDataPoints(1000);
chart.render();

function addDataPoints(noOfDps) {
	var xVal = chart.options.data[0].dataPoints.length + 1, yVal = 100;
	for(var i = 0; i < noOfDps; i++) {
		yVal = yVal +  Math.round(5 + Math.random() *(-5-5));
		chart.options.data[0].dataPoints.push({x: xVal,y: yVal});
		xVal++;
	}
}

}
</script>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
-->


	<!-- Milestones -->

		<?php include("stats.php");  ?>

	<div class="milestones">
		<div class="container">
			<div class="row">

				<!-- Milestone -->

				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/mountain.svg" alt=""></div>
						<div class="milestone_counter" data-end-value=<?php print $countsports/$row_num*100 ?>>0</div>
						<div class="milestone_text">% that likes sports</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/island.svg" alt=""></div>
						<div class="milestone_counter" data-end-value=<?php print $countsocial/$row_num*100 ?>>0</div>
						<div class="milestone_text">% are social persons</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/camera.svg" alt=""></div>
						<div class="milestone_counter" data-end-value=<?php print $countgaming/$row_num*100 ?>>0</div>
						<div class="milestone_text">% like gaming</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/boat.svg" alt=""></div>
						<div class="milestone_counter" data-end-value=<?php print $countheight/$row_num*100 ?>>0</div>
						<div class="milestone_text">% are afraid of height</div>
					</div>
				</div>


				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/island.svg" alt=""></div>
						<div class="milestone_counter" data-end-value=<?php print $countgender/$num_rows2*100 ?>>0</div>
						<div class="milestone_text">% are males</div>
					</div>
				</div>

				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/camera.svg" alt=""></div>
						<div class="milestone_counter" data-end-value=<?php print $countharry/$row_num2*100 ?>>0</div>
						<div class="milestone_text">% like Harry Potter</div>
					</div>
				</div>

				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/island.svg" alt=""></div>
						<div class="milestone_counter" data-end-value=<?php print $countfriendstronglydisagree/$row_num3*100 ?>>0</div>
						<div class="milestone_text">% Dont make friends easily</div>
					</div>
				</div>
        <div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/mountain.svg" alt=""></div>
						<div class="milestone_counter" data-end-value=<?php print $countmusicstronglyagree/$row_num3*100 ?>>0</div>
						<div class="milestone_text">% Love music</div>
					</div>
				</div>


			</div>
			</div>
			</div>

	<!-- Why Choose Us -->


	<!-- Team -->

	<!-- Footer -->

	<footer>
	<div class="footer">
	<div class="row align-items-center justify-content-center text-center">

	  <li><a href="contactus.html">Contact us | </a></li>
	<li><a href="termsandconditions.html">Terms and conditions | </a></li>
	<li><a href="privacypolicy.html">Privacy Policy | </a></li></a>
	<li><a href="FAQ.html">FAQ</a></li></a><b>
	</div>
	</div>
	</footer>
	</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/about.js"></script>
<script src="js/main.js"></script>
</body>
</html>
