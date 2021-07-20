
<html>
    <head>
                <title>GRIP banking</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <link rel="preconnect" href="https://fonts.gstatic.com">
               <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;500&display=swap" rel="stylesheet">
               <link rel="preconnect" href="https://fonts.gstatic.com">
               <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
               <link rel="preconnect" href="https://fonts.gstatic.com">
               <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
               <link rel="preconnect" href="https://fonts.gstatic.com">
               <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
               <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
               <link rel="preconnect" href="https://fonts.gstatic.com">
               <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
               <link rel="preconnect" href="https://fonts.gstatic.com">
               <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
               <link rel="stylesheet" href="style3.css">
    </head>
    <body>
        
             <?php
           $db = mysqli_connect("localhost","root","","bank");
             if(!$db)
              {
             die("Connection failed: " . mysqli_connect_error());
               }
               ?>
        
        <section class="header">
            
           <nav>
               
               <div class="nav-links">
                   
               <ul>
               <a href="https://www.thesparksfoundationsingapore.org" class="logo" target="_blank"><img src="image\logo.png" alt=""width="40%"  ></a>
                   <a href="https://www.thesparksfoundationsingapore.org" class="logo" target="_blank"><b>TSF BANK</b></a>
                   <li><a href="index.php"><b>HOME</b></a></li>
                   <li><a href="users.php"><b>USERS</b></a></li>
                   <li><a href="transfer.php"><b>TRANSFER</b></a></li>
                   <li><a href="history.php"><b>TRANSACTION HISTORY</b></a></li>
               </ul>
               </div>
           </nav>
            
            
            <div class="trans">
                <h1 style="color:red;"><b>Send Money</b></h1>
                
                <form action="" method="POST">
                
                <div class="row">
                    <label style="font-size: 23px;font-family: 'Nunito Sans', sans-serif;">Transfer From</label><br>
                    <select name="sender" id="sender" required  style=" height: 30px; width:190px; "><br>
                        <option value="0" disabled selected>Choose Sender</option><br>
                        <?php
                          
                           $records = mysqli_query($db, "SELECT Name From users");  // Use select query here 
                           while($data = mysqli_fetch_array($records))
                           {
                           echo "<option value='".$data['Name']."'>" .$data['Name'] ."</option>";  // displaying data in option menu
                            }	
                         ?>  
                    </select>
                </div>
                
                
                
                    
                 <div class="row">
                    <label style="font-size: 23px;font-family: 'Nunito Sans', sans-serif;">Transfer To</label><br>
                    <select name="receiver" id="receiver" class="ip box" required style=" height: 30px; width:190px; "><br>
                        <option value="0" disabled selected>Choose receiver</option><br>
                        <?php
                        
                    
                      $records = mysqli_query($db, "SELECT Name From users");  // Use select query here 
                       while($data = mysqli_fetch_array($records))
                         {
                         echo "<option value='".$data['Name']."'". $data[''] ."'>" .$data['Name'] ."</option>";  
                          }	
                          ?>  
                    </select>
                   </div>
                
                
                    
                    <div class="row">
                        <label  required style="font-size: 23px;font-family: 'Nunito Sans', sans-serif; ">Amount</label><br>
                        <input type="number"  name="amount"  style=" height: 30px; width:190px ;padding-left: 5px; "><br>
                        
                    </div>
                
                <div class="button">
                    <button class="hero-button" name="submit" type="submit" id="myBtn" ><b>Transfer</b></button>
                </div>
                    
                 
               
             </div>
               
          </form>
            
            <div class="phrase">
                <p>SIMPLE AND EASY WAY TO </p>
                <h1>Transfer Money Across<br>
                    World In Real Time <br>
                    With No Change</h1>
                <p>TSF provides easy way to transfer money all over the world.</p>
            </div>
                 
        </section>    
          
            <?php
            

         $db = mysqli_connect("localhost","root","","bank");

       if(!$db)
    {
    die("Connection failed: " . mysqli_connect_error());
    }

              
            if(isset($_POST['submit']))
            {
              $from= $_POST['sender'];
               $to = $_POST['receiver'];
               $amount = $_POST['amount'];
               $balance = 0;
               $check = 1;
               $flag = "false";
               $records = mysqli_query($db, "SELECT balance From users where name ='".$from."'"); 
                           while($data = mysqli_fetch_array($records))
                           {
                            $balance = $balance + $data['balance'];   // displaying data in option menu
                            }
                if(empty($from)||empty($to)){
                    ?>
                    
                    <script>
                 alert("Select Customer");
                  </script>
                 <?php
                }
                
                else if($from==$to){
                    ?>
                    
                    <script>
                 alert("Sender and Receiver cant be same");
                  </script>
                 <?php
                }
                
                
                    
               else if(($amount<$check)){
                    ?>
                    
                    <script>
                
                    alert("Enter a valid amount");
                
                    </script>
               
                <?php
               }
               
               
                else if(($balance<$amount)){
                    ?>
                    
                    <script>
                
                    alert("Insufficient Balance");
                
                    </script>
               
                <?php
                
                }
                
               else{
               $insertquery = "INSERT INTO transaction(Sender,Receiver, Amount) VALUES ('$from','$to','$amount')";
              $res= mysqli_query($db, $insertquery);
              $insertquery = "update users set Balance = Balance -".$amount." where Name ='".$from."'";
              $res1= mysqli_query($db, $insertquery);
              $insertquery = "update users set Balance = Balance +".$amount." where Name ='".$to."'";
              $res2= mysqli_query($db, $insertquery);
              if($res&&$res1&&$res2){
                  ?>
            <script>
                
                alert("Money transfered successfully");
                window.location='history.php';
                
            </script>
           
                   <?php
              }else{
                  ?>
            <script>
                alert("Something went wrong");
            </script>
                   <?php
              
         }
               }
            }
            
            ?>   
              
    </section>
       
      <!---------------------- socail media icon------------>
        
        <div class="socail">
            <a href="https://www.facebook.com/thesparksfoundation.info" class="fa fa-facebook"></a>
            <a href="https://twitter.com/tsfsingapore?lang=en" class="fa fa-twitter"></a>
            <a href="https://www.linkedin.com/company/the-sparks-foundation/" class="fa fa-linkedin"></a>
        </div>
        
   <!-------------------------------------Footer---------------------->
   <footer>
       <p>copyright © 2021<br> Made by:Mohit Tripathi</p>
  <p><a href="mailto:mohitty143@gmail.com">Contact me</a></p>
</footer>
       
</body>
</html>
   
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
  
    </body>
    
</html>
