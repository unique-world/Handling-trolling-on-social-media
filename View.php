
<!Doctype>
<html>
<head>

		<link rel="stylesheet" type="text/css" href="CSS1/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="CSS/all.css">
		<link rel="stylesheet" type="text/css" href="CSS1/custom2.css">

<title> Twitter</title>

</head>

<body>


	<i class="fa-solid fa-magnifying-glass"></i>
	<div class="container-fluid">
			<center> <h3> Welcom to Twittter </h3></center>



	<div class="row"> 

		<div class="col-3" id="col_2"> 

								<div class="side-header">

								<div class="img"> 

										<img src="images/twitter_bird.png" class="img-fluid" alt="...">

								</div>
												  <ul>
												    <li> <a href="#"> <i class="fa-solid  fa-house"></i> Home</a></li>
												    <li> <a href="#"> <i class="fa-solid  fa-hashtag"></i>Explore</a></li>
												    <li><a href="#"><i class="fa-solid fa-bell"></i>Notifications</a></li>
												    <li><a href="#"><i class="fa-solid fa-message"></i>Messages</a></li>
												    <li><a href="#"><i class="fa-solid fa-list"></i>Lists</a></li>
												    <li><a href="#"><i class="fa-solid fa-user"></i>Profile</a></li>
												    <li><a href="#"><i class="fa-solid fa-circle"></i>More</a></li>
												   <button type="button" class="btn btn-primary" id="btn-tweet">Tweet</button> <br> <br> <br>
												   <div class="user_id">

												   	<img src="images/ali.jpeg" id="user_image"> </img>


												    <p> <b> Dr. Malik Daler Ali Awan </b><br>idalerali@gmail.com ...</p> <div>



												  </ul>

										</div>

		</div>



		<div class="col-5"> 
			

					<h3 class="Home"><a href="#"> Home </a></h3><br>

	
										<div class="row"> 
											
												<div class="col-6" id="main_Nav"> <a href="#"><center> For You</center> </a> </div>
										  		<div class="col-6" id="main_Nav"> <a href="#"> <center>Follow </center></a></div>
										</div> 
											<hr>

										<div class="row"> 

										
											<div class="col-1">
													<img src="images/ali.jpeg" id="user_image"> </img> </div>
										<div class="col-11">



												<div class="form-outline">
												  <textarea class="form-control" id="post" rows="4" placeholder="Whats' Happening?" onkeyup="myFunction()"></textarea>
												 
												</div>
													<script type="text/javascript">


													document.getElementById("name").addEventListener("keyup", function() {
												    var nameInput = document.getElementById('name').value;
												    if (nameInput != "") {
												        document.getElementById('btn-tweet2').removeAttribute("disabled");
												    } else {
												        document.getElementById('btn-tweet2').setAttribute("disabled", null);
												    }
												});
											</script>

														 <button type="button" class="btn btn-primary" id="btn-tweet2" disabled>Tweet</button> <br> <br> 	

										</div><hr>
										<h3> here will be the posted comment </h3>
										<div ><p>  </p></div>
												
										</div>
									
								

			</div>

		
	
		






		<div class="col-4" id="col_3"> 

			<div class="right-bar">








										<div class="input-group">
													  <div class="form-outline">
													   <div class="row">
													  	
													  	<div class="col-1">
													    <i class="fas fa-2x fa-search"></i> </div>


													   <div class="col-3">
													    <input type="search" id="form1" class="form-control" placeholder="Search Twitter" /></div>
													</div>

<!-- label for="quantity">Quantity:</label>
//<input type="number" id="quantity" name="quantity" min="-999999" max="999999" step="1" value=" "> -->


													    

													    
													  </div>
													  
													</div>

			 </div>




		</div>



</div>
</div>
</body>
</html>
