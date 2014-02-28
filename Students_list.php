
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
   

    <title> Students List Page</title>

    <!-- Bootstrap core CSS -->
    <link href="./dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="./docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

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
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          
          <a class="navbar-brand" href="index.php" style="font-family: 'Audiowide', cursive;">LearnEmp</a>
        </div>
       
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
		   
            <li><a href="how.html">How it Works</a></li>
            <li><a href="<?php $link_address='donor_profile.php?id='.$_GET['id'].'';

                 echo $link_address;?>"> Donorprofile</a></li>
            <li><a href="About.html">About</a></li>
			<li><a href="Contact.html">Contact</a></li>
      <li><a href=></a></li> 
<li><form class="navbar-form navbar-left" role="search">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search">
  </div>
  <button type="submit" class="btn btn-primary">Search</button>
</form></li>
<!--<a href="logout.php">Click Here to Logout</a> --> 
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


	<a class="navbar-brand" href="./index.php" style="font-family: 'Audiowide', cursive;">LearnEmp</a>
	<a class="navbar-brand" href="how.html">How it works!</a>

    <div class="container">

      <div class="row row-joffcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h2>Applicants at LearnEmp</h2>
                                <?php
                $con=mysqli_connect("localhost","root","123","LearnEmp");
// Check connection
         if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$result = mysqli_query($con,"SELECT * FROM student");

echo "<table border='1'>
<tr>

<th>Read More</th>
<th></th>
<th>Firstname</th>
<th>Lastname</th>
<th>Action</th>
<th>Amount<th>

</tr>";
$link= './studentprofile.php';
while($row = mysqli_fetch_array($result))
  {
  echo '<tr>';
  echo '<td><a class="btn btn-danger" href="studentprofile.php?id='.$row['S_Id'].'">Read more</a></td>';
  echo '<td><img src="'.$row['image_path'].'" ALT="some text" WIDTH=50 HEIGHT=50></td>';  
  echo '<form method="POST" action="donate.php">';
  echo '<input type="hidden" name="D_id" value="' . $_GET['id'] . '">';
  echo '<input type="hidden" name="S_Id" value='.$row['S_Id'].'>';
  echo "<td>" . $row['fname'] . "</td>";
  echo "<td>" . $row['lname'] . "</td>";
  
  echo '<td><input type="text" name="amount"></td>';
  echo '<td><input type="submit" value="Donate" class="btn btn-primary"></td>';
  echo "</form></tr>";

  }
echo "</table>";

mysqli_close($con);
?>
          </div>
          
<hr>
<footer class="footer" align= "center">
  <nav>
    <ul>

    <a href="index.php">Home </a>&nbsp | &nbsp 
    <a href= "About.php">About </a>&nbsp | &nbsp 
      <a href= "Contact.php">Contact </a>&nbsp | &nbsp
      <a href="FAQ.html">Faq </a>&nbsp | &nbsp 
      <a href="Donor_signup.php">Donors </a>&nbsp | &nbsp 

    </ul>
  </nav> &nbsp &nbsp Site Designed by |<a href="http://www.jaaga.in"> Jaaga Crowd-funding Group</a>
</footer>


    <!-- Bootstrap core JavaScript
       <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="./dist/js/bootstrap.min.js"></script>
    <script src="offcanvas.js"></script>
  </body>
</html>
