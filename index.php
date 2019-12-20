<?php

	// Creating variables to store temporary data
	$first_name ='Peter';
	$age = 20;

	//create constant, name convention is always captal letter
	define('NAME','Yoshi');

	//combine strings using dot
	$first_name.$age;

	//using "" to output variables inside it
	// echo "hey my name is $first_name ";

	//single quotes does not allow that
	//string functions strlen($variable) strtoupper($variable) str_repalce($variable,'replace with', $returned variable)

	//order of operation (B I D M A S) brackets, Indecies, Division, Addition, subtraction

	//increment & decrement operators. 
	$age++;

	//shorthand operators value += new value  

	//arrays
	$peopleOne = ['Shaun', 'Crystal','Peter'];
	$peopleTwo = array('value1','value2','value3');
	// echo $peopleOne[1];
	// echo $peopleTwo[0];

	// print a readable version of the values
	// print_r($peopleTwo);

	//passing a new value to an existing array
	$peopleOne[] = 'new character';
	//or 
	array_push($peopleTwo,'value4');

	// print_r($peopleTwo); 

	//merge arrays
	$peopleThree = array_merge($peopleOne,$peopleTwo);

	// print_r($peopleThree);
?>

<!DOCTYPE html>
<html>
<head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
<body>
	<!-- php statment inside html -->
	<!-- Dropdown Structure -->
		<ul id="dropdown1" class="dropdown-content">
			<li><a href="#!">one</a></li>
			<li><a href="#!">two</a></li>
			<li class="divider"></li>
			<li><a href="#!">three</a></li>
		</ul>
	<!-- Navigation Bar -->
		<nav>
			<div class="nav-wrapper green lighten-1">
				<a href="#!" class="brand-logo">Logo</a>
					<ul class="right hide-on-med-and-down">
						<li><a href="sass.html">Sass</a></li>
						<li><a href="badges.html">Components</a></li>
						<!-- Dropdown Trigger -->
						<li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
					</ul>
			</div>
		</nav>
	<!-- Main Page -->
		<!-- <div class="parallax-container">
			<div class="parallax"><img src="./images/road.jpg" style="opacity: 1; transform: translate3d(-50%, 179.9px, 0px);"></div>
		</div> -->
		
		<div class="container">
			
			<div class="row" style=" height:50px; padding: 50px; margin-top:100px;">
			
				<div class="col s6"  style="padding: 10px;">
					<div class="container">
					<div class="row" style="margin-top: 50px;"><h3>Title<h3></div>
					<p>
					Lorem ipsum dolor sit amet. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
					commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
					Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
					<p>
					</div>
					
				<div class="col s6" >
				<div class="row">

	<!-- If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php". -->
					<form class="col s12" action="/action_page.php" style="padding: 50px;">
						<div class="row">
							<div class="input-field col s6">
							<input placeholder="First Name" id="first_name" type="text" class="validate">
							</div>
							<div class="input-field col s6">
							<input id="last_name"  placeholder="Last Name"type="text" class="validate">
							</div>
						</div>

						
						<div class="row">

							<div class="input-field col s12">
								<input placeholder="Company Name" id="first_name" type="text" class="validate">
							</div>

							<div class="input-field col s12">
								<input id="email" type="email" class="validate">
								<label for="email">Email</label>
							</div>
						</div>

						<div class="row">
							<div class="input-field col s12">
								<input id="password" type="password" class="validate">
								<label for="password">Password</label>
							</div>
							
						</div>
						<div class="input-field col s12">
							<i class="material-icons prefix">phone</i>
							<input id="icon_telephone" type="tel" class="validate">
							<label for="icon_telephone">Phone</label>
						</div>
					</form>
				</div>
			</div>
		</div>
		
	</div>
	
</div>



























	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <!--JavaScript at end of body for optimized loading-->
	 <script type="text/javascript" src="index.js"></script>
</body>
</html>