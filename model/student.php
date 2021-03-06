
<?php
    
    if(!function_exists('dbopen')){
        include ('dbcon.php');
    }
  
    function getStudentList()
    {   

        $db= dbopen();
        $sql=$db->prepare('SELECT * FROM student');
        $sql->execute();
        $sql->bind_result($S_id,$U_id,$sname,$gender,$email,$Phone_Number,$address,
            $pincode,$country,$course,$scholar_AMT,$para,$image_path,$date);
        while($sql->fetch()){
               
        $students[]=array('S_id'=>$S_id,'U_id'=>$U_id,'sname'=>$sname,'gender'=>$gender,'email'=>$email,
            'Phone_Number'=>$Phone_Number,'address'=>$address,'pincode'=>$pincode,'country'=>$country,
            'course'=>$course,'scholar_AMT'=>$scholar_AMT,'para'=>$para,'image_path'=>$image_path,'date'=>$date);
        }

        
        $sql->close();
        return ($students);    
    }

    function studentLogin($email,$password){
        $db= dbopen();
        $sql="SELECT * from student where email='$email' && password='$password'";
        $result= $db->query($sql);

        $row=mysqli_fetch_array($result); 

        $S_id = $row['S_id'];

        $count = mysqli_num_rows($result);
        // If result matched $myusername and $mypassword, table row must be 1 row
        $result->close();

        if($count==1){

            session_start();
            $_SESSION['email']= $email;
            $_SESSION['password']= $password;
        // Register $myusername, $mypassword and redirect to file "Students_list.php"
            header("location:../public/studentdashboard.php?id=$S_id");
        }
        else{
            
            $Isnotuser= "wrong username or password";
            return $Isnotuser;
            header("Refresh: 2;url='../public/index.php'");
        }
    }

    function createStudent($U_id,$sname,$gender,$email,$Phone_Number,
        $address,$pincode,$country,$course,$scholar_AMT,$para,$image_path){
    	
        $db= dbopen(); 
        $sql ="INSERT INTO student(U_id,sname,gender,email,Phone_Number,address,
            pincode,country,course,scholar_AMT,para,image_path) VALUES ('$U_id','$sname','$gender',
            '$email','$Phone_Number','$address','$pincode','$country','$course','$scholar_AMT','$para','$image_path')";
        if(!$db->query($sql)){

            return ($db->error);
        } 

        $sql1="SELECT * from student where U_id='$U_id'";
        $result1= $db->query($sql1);
        $row=mysqli_fetch_array($result1);       
        if(!$result1)
        {
            return ($db->error);
        } 
        else{
            
            $db->close();
            return ($row);
        }

    }

    function removeStudent(){
        $db=dbopen();
        $sql="DELETE FROM user WHERE U_id='$U_id'";
        if(!$db->query($sql)){
            return false;
        }
        return true;
    }
    
    function featuredStudents(){

        $db=dbopen();
          $sql=$db->prepare('SELECT S_id,sname,para,image_path FROM student');
        $sql->execute();
        $sql->bind_result($S_id,$sname,$para,$image_path);
        while($sql->fetch()){
               
        $students[]=array('S_id'=>$S_id,'sname'=>$sname,'para'=>$para,'image_path'=>$image_path);
        }
        
        $sql->close();
        return ($students);  

    }

    function studentStory($S_id,$story,$reason,$CS_id,$Git_id,$CA_id){
        
         $db= dbopen();  
         $updates = array();
         if (!empty($story)){
         $updates[] = 'story="'.$db->real_escape_string($story).'"';}
         if (!empty($reason)){
         $updates[] = 'reason="'.$db->real_escape_string($reason).'"';}
         if (!empty($CS_id)){
         $updates[] = 'CS_id="'.$db->real_escape_string($CS_id).'"';}
         if (!empty($Git_id)){
         $updates[] = 'Git_id="'.$db->real_escape_string($Git_id).'"';}
         if (!empty($CA_id)){
         $updates[] = 'CA_id="'.$db->real_escape_string($CA_id).'"';}
         $updates = implode(', ', $updates);
        
        $sql= "SELECT S_id from studstory where S_id='$S_id'";
        $result = $db->query($sql);
        $count=mysqli_num_rows($result);
        if($count==1){
            $sql1="UPDATE studstory SET $updates where S_id='$S_id'";
            if(!$db->query($sql1)){
                die('Error'.$db->error);
            }
           return true; 
        }
        else{
            $sql1="INSERT INTO studstory (S_id,story,reason,CS_id,Git_id,CA_id)
            values('$S_id','$story','$reason','$CS_id','$Git_id','$CA_id')";
            if(!$db->query($sql1)){
                die('Error'.$db->error);
            }
            return true;
        }

    } 

    function getStudent($studentId){

        $db=dbopen();
        $sql= "select * from student where S_id=$studentId";
        $result= $db->query($sql);

        if (!$result){
            die('Error' .$db->error);
        }
        else{
        $row= mysqli_fetch_array($result);

        $result->close();

        return $row;
        }

    }

    function getFundedAmount($S_id) {
        $db=dbopen();
        //$Student_id=$_GET['id2'];
        $sql = "select sum(amount) from donation where S_id=$S_id";
        $result = $db->query($sql);
        $sum = mysqli_fetch_array($result);
        
        return $sum['sum(amount)'];
    }


    function updateStudent($S_id,$Phone_Number,$address,$para,$pic){
      
        $db=dbopen();

        $updates = array();
         if (!empty($Phone_Number)){
         $updates[] = 'Phone_Number="'.$db->real_escape_string($Phone_Number).'"';}
         if (!empty($address)){
         $updates[] = 'address="'.$db->real_escape_string($address).'"';}
         if (!empty($para)){
         $updates[] = 'para="'.$db->real_escape_string($para).'"';}
         if(!empty($pic)){
            $updates[] = 'image_path="'.$db->real_escape_string($pic).'"';
         }
         
         $updates = implode(', ', $updates);
        $sql="UPDATE student SET $updates where S_id='$S_id'";

        if(!$db->query($sql))
            {
                die('Error' .$db->error);
            }

        return $S_id;    

    }


    function getStory($S_id){

        $db=dbopen();
        $sql="SELECT * from studstory where S_id='$S_id'";
        $result=$db->query($sql);
        if(!$result){
            die('Error'.$db->error);
        }
        $story=mysqli_fetch_array($result);
        return $story;
    }


    function getDonors($studentId){

        $db=dbopen();
        $query="SELECT * from donation inner join user on donation.S_id='$studentId' && donation.U_id=user.U_id";
        $sql=$db->prepare($query);
        $sql->execute();
        $sql->bind_result($U_id,$S_id,$date,$amount,$name,$email);
         while($sql->fetch()){
               
        $Donors[]=array('U_id'=>$U_id,'S_id'=>$S_id,'date'=>$date,'amount'=>$amount,'name'=>$name,'email'=>$email);

        }
        //$sql->store_result();
        //$count= $sql->num_rows;
        //$list = $db->query($sql);
        $sql->close();
        return ($Donors);
    }

    function studentPrework($CS_id,$Git_id,$CA_id){

        $CS_url ='https://www.codeschool.com/users/'.$CS_id.'.json';
        $CS_content = file_get_contents($CS_url,0,null,null);
        $CS_output =json_decode($CS_content,true);

        $Git_url = 'http://osrc.dfm.io/'.$Git_id.'.json';
        $Git_content= file_get_contents($Git_url,0,null,null);
        $Git_output=json_decode($Git_content,true);

        

        $CA_url = 'https://codeacademy-json.herokuapp.com/'.$CA_id.'';
        $CA_content= file_get_contents($CA_url,0,null,null);
        $CA_output=json_decode($CA_content,true);

        return [$CS_output,$Git_output,$CA_output];

    }
        
 ?>
