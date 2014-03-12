
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
<style> 
   hr {
    border: none;
    height: 1px;
    /* Set the hr color */
    
    background-color: #333; //Modern Browsers
}
</style>

    <title>Crowd Funding Scholarships</title>

    <!-- Bootstrap core CSS -->
    <link href="./dist/css/bootstrap.css" rel="stylesheet">
    

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>	
	<link href='http://fonts.googleapis.com/css?family=Stint+Ultra+Expanded' rel='stylesheet' type='text/css'>
  </head>

  <body>
<?php
?>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          
          <a class="navbar-brand" href="#"></a> <!--INSERT LOGO HERE -->

		<a class="navbar-brand" href="#" style="font-family: 'Audiowide', cursive;">LearnEmp</a>	
		<a class="navbar-brand" href="how.html" style="font-family: verdana;">&nbsp &nbsp How it works!</a>
                


        </div>
        <div class="navbar-collapse collapse">
          <form name="form1" method="post" action="../src/checklogin.php" class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input name="email" type="text" placeholder="Email" id="email" class="form-control">
            </div>
            <div class="form-group">
              <input name="pass"type="password" placeholder="Password" id="pass"class="form-control">
            </div>

            <!--<button type="submit" class="btn btn-success" style="font-family: verdana;">Sign in</button>-->
<input type="submit" name="submit" value="login"> 
          &nbsp <a href="Donor_signup.php" button class="btn btn-primary" style="font-family: verdana;">Sign-up Now!!</button></a>

          </form>
            
             
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style="background color : blue" > <!-- style="background:url(./images/crowdfunding-1.jpeg) no-repeat center center;background-size:1200px 400px;" -->
      <div class="container">
        <h1 style="font-family: 'Audiowide', cursive;">LearnEmp</h1>
        <p>Directly fund and help aspiring learners and students from all over the world with a click of a button. Donate now and help a chain of good deeds.

</p>
        <p><a href="Students_list.php" class="btn btn-warning btn-lg" style="font-family: verdana;">Donate Now &raquo;</a>
           <a href="application_main.php" class="btn btn-success btn-lg" style="font-family: verdana;">Student ? apply-here</a>
</p>
        
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Fund</h2>
          <p>Donate and fund student's education to help empower learning and a better tomorrow.</p><br>
          <p><a class="btn btn-success" href="./Students_list.htm" role="button" style="font-family: verdana;">Learn More &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Pay Forward</h2>
          <p>Once student's are done with their education, FundEmp encourages them to help and fund other aspiring students.</p>
          
       </div>
       
     <div class="col-md-4 inline">
        <form action="#" method="post">
     <h5> &nbsp &nbsp Give Feedback!!:</h5>
     <div class="form-group">
  <div class="col-md-8">                     
    <p><textarea class="form-control" id="textarea" name="textarea" rows="3">Hi..Say Something!!</textarea></p><br/>
    <button id="singlebutton" type="submit" name="singlebutton" class="btn btn-success" style="margin-bottom: 10px" >Post-feedback</button>
  </div>
</div>

    </form>
 
    </div>
 
 </div>

      

     </div> <!-- /container -->
<hr>
<footer class="footer" align= "center">
  <nav>
    <ul>

    <a href="index.php">Home </a>&nbsp | &nbsp 
    <a href= "About.html">About </a>&nbsp | &nbsp 
      <a href= "Contact.html">Contact </a>&nbsp | &nbsp
      <a href="FAQ.html">Faq </a>&nbsp | &nbsp 
      <a href="donors.html">Donors </a>&nbsp | &nbsp 

    </ul>
  </nav> &nbsp &nbsp  Site Designed by |<a href="http://www.jaaga.in"> Jaaga Crowd-funding Group</a>
</footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="./dist/js/bootstrap.min.js"></script>
  </body>
</html>

