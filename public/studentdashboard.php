
<?php 
include ('../model/student.php');

?>
<!DOCTYPE html>
<html>

<head>
	<title>Student Dashboard</title>

	<link href="./dist/css/bootstrap.css" rel="stylesheet">
	<link href="./dist/css/slider.css" rel="stylesheet">
	<link href="./dist/css/custom.css" rel="stylesheet" type='text/css'>
	

	<style>
	@font-face{
      font-family:'KGSecondChancesSketch'; 
      src:url('fonts/KGSecondChancesSketch.ttf');

     /* font-family: 'CabinSketch';
      src: url('fonts/CabinSketch-Regular.otf');*/
         }
		#bg{
    	background:url('./images/chalkboard2.jpg');
    	border: 3 solid /*#33cc33*/#6E8B3D;
		color: #FFFFe0;
		text-align: center;
		}
		body{
		
	
		padding-top: 80px;

		}
		.sponsor_data{
		font-family:'Cabin Sketch' cursive;
		font-size: 27px;
		}
	</style>
</head>

<body>

	

	

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
    
      <div class="navbar-header" style="height: 50px;">
    

        <a class="navbar-brand" href="index.php">
        <h1 style="font-family:'KGSecondChancesSketch' cursive; margin-top: -9px;">LearnEm<h1></a>
      </div>


      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
              <li><a href="listofstudents.php">Sponsor</a></li>
              <li><a href= "#hiw">How it Works</a></li>
        </ul>

        <div class="navbar-collapse collapse">
          <div class="navbar-form navbar-right">
                <button type="button" class="btn btn-danger">Sign Up</button>
                <button class="btn btn-success" data-toggle="modal" data-target="#appEdit">Sign in</button> 
          </div>              
        </div>
      </div>
    </div>
</div>

<div class="container" >

		<div class="row">
			<div class="col-lg-3" align="left"  >
			

					<img src="./images/facebook-icon.png" width="25px"/>
					<img src="./images/Twitter_logo.png" width="25px"/>
					<img src="./images/linked-in.jpg" width="25px"/>
					&nbsp

	
			</div>
<?php 

$S_id=$_GET['id'];

$student= getStudent($S_id);
$Donors=getDonors($S_id);
$total=count($Donors);
$totalAmount=getFundedAmount($S_id); //try to omit if page is not working. gets total funded amount
//$totalDonors=0;
//foreach($Donors as $totalDonors){ 
//$totalDonors=count($listdonors);
//	$total = count($totalDonors);}
 ?>

			<div class="col-lg-6">

			<h1 align="center" style="font-family:'Cabin Sketch' cursive; font-size: 60px; margin-top: -30px " >
			<?php echo $student['fname']; ?>
			</h1>
			</div>
    		

			<div class="col-lg-3" align="right" >
   					
       			<form action="application.php">

       			<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#appEdit">
  Edit Application
</button><!-- button for pop up to edit the contents of the page -->
    				
    			</form>
    		</div>	
    	</div>

    	<br>
    

    
    	<div class="row">

        	<div class="col-md-7"  text-align="justify">
        		

				<img src="<?php echo $student['image_path']; ?>" width="100%" height="400px">
				<input type="file" id="profile_pic" name="upload" style="visibility: hidden; width: 1px; height: 1px" multiple />

				<a href="" onclick="document.getElementBglyphiconyId('profile_pic').click(); return false">

          		<span class="glyphicon glyphicon-camera" style="font-size:20px;"></span>

        		</a>
		 		<br>
		 		
		 		<div class="well" width="100%">
        			<a class="edit"href="#">

              	<span class="glyphicon glyphicon-edit" style="font-size:24px;"></span>
        
        		</a>

        			<h2>My Story</h2>

        			<br>

        			<p style="text-align:justify">Hey Guys! Please sponsor me for my new adventure with Jaaga. </b>Currently, I have learnt HTML, CSS and Javascript on my own through Codecademy.
 					Through this program I am hoping to get a better understanding of programming languages and make great websites for a living!<br><br>
 
        			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. 
					Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
					<br> <br>
					Aenean lacinia bibendum nulla sed consectetur.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. 
					Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
					Aenean lacinia bibendum nulla sed consectetur.
					</p>
    			</div>
			</div>

		
			<div class="col-md-5"> 

				<div class="well" style="background-color:#33cc66; height:400px" id="bg" >
					<div class="sponsor_data">
						<h2 class="sponsor_data"> <b><?php echo $total; ?></b> donors backed </h2><br>
						<h2 class="sponsor_data"> <b><?php echo $totalAmount; ?></b> pledged<br> out of<b> Rs.<?php echo $student['scholar_AMT']; ?></b></h2>
						<h2 class="sponsor_data"> <b><?php echo $student['date']; ?></b> days to go!</h2>
					
						<br>
					
						<!--<div class="input-group" style="border: 3px solid #33cc66 ; border-radius: 7px;position:absolute;">
							<input type="text" class="form-control" placeholder="enter amount" style="height: 50px; ">
                    	</div> -->
						
						<!--<button type="button" class="btn btn-lg btn-success" style="width:150px; height: 50px; float: right;border: 3px solid #33cc66 ;">Donate
						</button>-->
						
					</div>

					<br><br><br>			
				</div>

				<br>

				<div class="well" style="background-color:#; height:450px; margin-top: -20px; text-align: justify;">

				<a class="edit"href="#">

              	<span class="glyphicon glyphicon-edit" style="font-size:24px;"></span>
        
        		</a>

					<h3>So here's why I need your help</h3><br><p><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</b> Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. 
						Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
					</p>
					<p>Aenean lacinia bibendum nulla sed consectetur.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. </p>
				</div>
			</div>

		</div>
	

    	<div class="row">
      
        	<div class="col-md-7"  text-align="justify">

				<div class="workstatus">
					<h3>PreWork Status</h3>

					<p>CodeAcademy</p>

					<div class="progress">
        				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" 		style="width: 40%">
							<span class="sr-only">40% Complete (success)</span>
						</div>
    				</div>

	 				<p>Codeschool</p>
	 				<div class="progress">
        					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
							<span class="sr-only">20% Complete</span>
							</div>
					</div>	
				</div>
			</div>


			<div class="col-md-5">

				<div class="well" width="100%">

				This is where the badges will be placed
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>

				</div>
			</div>
	


    	<div class="row" style="padding: 100px 50px 0 50px" align="center">
    	
    	<br><br>

      		<div class="col-lg-4">

          		<img src="./images/Donation.jpg" alt="donate" class="img-circle" align="center" style="Height:100px"></img> 
          		<br><h3>MAKE A DONATION</h3>
         		<!-- <p style="text-align: justify; padding:1em 1em;">Our system is simple. We select candidates for a scholarship based on certain criteria preset by our team.We consider economic background, academic performance and extra curricular skills while making our selections, but also look for that x-factor while making our choices.</p>

          		<br>-->
      		</div>

      		<div class="col-lg-4">
        		<img src="./images/Student_benefit.jpg" alt="donate" class="img-circle" style="height:100px"></img> 
        		<br><h3>STUDENT BENEFITS FROM LOAN</h3>
        		<!--<p style="text-align: justify; padding:1em 1em;">You as a donor choose the candidate you would like to sponsor. The student utilizes the loan for paying his/her academic fee and to cover basic necessities during the course.</p>
          		<br><br>-->
      		</div>

      		<div class="col-lg-4">
          		<img src="./images/Pay_it.jpg" alt="donate" class="img-circle" style="height:100px"></img> 
          		<br><h3>STUDENT PAYS IT FORWARD</h3>
          		<!--<p style="text-align: justify; padding:1em 1em;">The student who has been sponsored through our system gets inducted into an honour-based pay-it-forward process wherein once the student graduates and begins to earn, he/she is encouraged to sponsor another student.</p>
      		-->
      		</div>
    	</div>

</div>

	<hr>
	<footer class="footer" style="text-align:center">
  		<nav>
    		<ul>
    			<a href="index.php">Home </a> |
    			<a href= "#about">About Us</a> |
      			<a href= "#hiw">How It Works</a> |
      			<a href="#faq">FAQ</a> |
      			<a href="#contact">Contact</a>  

    		</ul>
  		</nav> 
	</footer>
	<div class="modal fade" id="appEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit your Information</h4>
      </div>
      <div class="modal-body">
      <label> Basic Information </label>
      <div class="input-group">
  <input type="text area" class="form-control" style="height:200px;width:300px" name="para"><br>
  	<label>Why you need help</label>
  	<div class="input-group">
  <input type="text area" class="form-control" style="height:200px;width:300px">
  
</div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" type="submit">Save changes</button>
      </div>
    </div>
  </div>
</div>
	<script type="text/javascript" src="./dist/js/jquery-2.1.0.min.js"></script>
  <script type="text/javascript" src="./dist/js/bootstrap.min.js"></script>
</body>

</html>
