  
  <!DOCTYPE html>
  <html>
  <head>
  <style>
   body 
    {
  background: url("./images/wood1.png");
  background-repeat:repeat;
  }
    .well{
    position: relative;
    top: 100px;
    }

    

  </style>
  <link href="./dist/css/bootstrap.css" rel="stylesheet">
  <link href='./dist/css/custom.css" rel="stylesheet" type="text/css'>
 


  </head>
  <body>

  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
      
        <div class="navbar-header" style="height: 50px;">
      
            
              <a class="navbar-brand" href="index.php"><h1 style="font-family:'Cabin Sketch' cursive; margin-top: -9px;">LearnEmp<h1></a>
            </div>
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                  <li><a href="listofstudents.php">Sponsor</a></li>
                  <li><a href="#">Sign Up</a></li>
              </ul>

          <div class="navbar-collapse collapse">
                <form class="navbar-form navbar-right" role="form">
                  <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control">
                  </div>

                  <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control">
                  </div>

                  <button type="submit" class="btn btn-success" style="font-family: verdana;">Sign in</button> 
                  &nbsp 

                </form>
                
                </div><!--/.navbar-collapse -->
          </div>
        </div>
        </div> 
  <!--<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            
            <a class="navbar-brand" href="index.html" style="font-family: 'Audiowide', cursive;">LearnEmp</a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
         
              <li><a href="how.html">How it Works</a></li>
              <li><a href="Students_list.htm">Students</a></li>
              <li><a href="About.html">About</a></li>
        <li><a href="Contact.html">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>

  <div class="container">
  <div class="well" style="background-color:rgba(144,144,144,1);">
  <form class="form-horizontal" action="applicant.php" method="post" autocomplete="on" enctype="multipart/form-data">
  <fieldset>

  <!-- Form Name -->
  <h1 style= "text-align: center; padding: 0 0 50px 0;">Application for Scholarship</h1>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">First Name:</label> 
    <div class="col-md-4">
    <input name="fname" type="text" placeholder="First Name" class="form-control input-md">
    
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">Last Name:</label>  
    <div class="col-md-4">
    <input name="lname" type="text" placeholder="Last Name" class="form-control input-md"> 
    </div>
  </div>

  <!-- Multiple Radios -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="radios">Gender:</label>
    <div class="col-md-4">
    <div class="radio">
      <label for="radios-0">
        <input type="radio" name="gender" id="radios-0" value="F" checked="checked">
        Female
      </label>
    </div>
    <div class="radio">
      <label for="radios-1">
        <input type="radio" name="gender" id="radios-1" value="M">
        Male
      </label>
    </div>
    </div>
  </div>

  
  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">E-mail:</label>  
    <div class="col-md-4">
    <input name="email" type="email" placeholder="e-mail" class="form-control input-md">
      
    </div>
  </div>
  
  
<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password:</label>
  <div class="col-md-4">
    <input name="password" type="password" placeholder="Password" class="form-control input-md">    
  </div>
</div>

 <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">Confirm Password:</label> 
    <div class="col-md-4">
    <input name="fname" type="password" placeholder="Confirm Password" class="form-control input-md">
    
    </div>
  </div>
  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">Contact Number:</label>  
    <div class="col-md-4">
    <input name="Phone_Number" type="text" placeholder="Contact Number" class="form-control input-md">
      
    </div>
  </div>

  <!-- Text area-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="textarea">Address:</label>
    <div class="col-md-4">                     
      <textarea class="form-control" name="address" placeholder="Address"></textarea>
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">Pin Code:</label>  
    <div class="col-md-4">
    <input name="pincode" type="text" placeholder="Pin Code" class="form-control input-md">
    
    </div>
  </div>

  <!-- Select Basic -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="selectbasic">Country:</label>
    <div class="col-md-4">
      <select name="country" class="form-control">
        <option value="#">Select Country</option>
        <option value="Armenia">Armenia</option>
      </select>
    </div>
  </div>

  <!-- Select Basic 
  <div class="form-group">
    <label class="col-md-4 control-label" for="selectbasic">University:</label>
    <div class="col-md-4">
      <select id="selectbasic" name="selectbasic" class="form-control">
        <option value="1">Select University</option>
        <option value="2">Jaaga Study</option>
      </select>
    </div>
  </div> -->

  <!-- Select Basic -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="selectbasic">Course:</label>
    <div class="col-md-4">
      <select name="course" class="form-control">
        <option value="#">Select Course</option>
        <option value="Php">PHP</option>
        <option value="Python">Python</option>
        <option value="html/css">HTML/CSS</option>
      </select>
    </div>
  </div>

  <!-- Textarea -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="textarea" >Introduce yourself!</label>
    <div class="col-md-4">                     
      <textarea class="form-control" name="para" placeholder="Introduce yourself in 120 characters"></textarea>
    </div>
  </div>
  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">Scholarship Amount:</label>  
    <div class="col-md-4">
    <input name="scholar_AMT" type="text" placeholder="enter the amount required" class="form-control input-md">

    </div>
  </div>

  <!-- for uploading anyfile-->
  <div class="form-group">
    <label class="col-md-4 control-label">Upload-Document:</label> 
    <div class="col-md-4">
      <input name="doc_path" type="file" size="60">
    </div>
  </div>
<!--Upload image starts here-->
  <div class="form-group">
    <label class="col-md-4 control-label">Upload-Image:</label> 
    <div class="col-md-6" >
<div class="fileupload fileupload-new" data-provides="fileupload">
  <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
  <div>
    <span class="btn btn-file"><input type="file" name="image_path"></span>
    
  </div>
  </div>
  </div>
</div>

<!--upload image ends here-->


  


  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="singlebutton"></label>
    <div class="col-md-4" align="center">
      <button type="submit" name="singlebutton" class="btn btn-success btn-lg">Submit!</button>
    </div>
  </div>

  </fieldset>
  </form>
  </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <hr>
  <footer class="footer"  align="center">
  <a href="index.php">Home &nbsp |</a>&nbsp &nbsp
  <a href="">FAQ &nbsp |</a>&nbsp &nbsp 
  <a href="aboutus.php">About &nbsp |</a>&nbsp &nbsp 
  <a href="">Contact &nbsp |</a>&nbsp &nbsp
  <a href="">Donor &nbsp |</a>
  <br><br> Site Designed by |<a href="http://www.jaaga.in"> Jaaga Crowd-funding Group</a>
  </footer>
   
  </body>
  </html>

