
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
        <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style2.css">
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
            <div class="main-div">
                <h1 style="margin-top: -160px;"><b>Customer's Details</b></h1>
            
            <div  class="center-div">
                
          
                <div class="table-responsive">
                    <table>
                        <thead>
                    <tr>
                   <th>Account Number</th>
                   <th>Name</th>
                   <th>E-Mail</th>
                   <th>Phone</th>
                   <th>Balance</th>
                    </tr>
                        </thead>
                       
                        <?php



                $records = mysqli_query($db,"select * from users");

                while($data = mysqli_fetch_array($records))
                {
                ?>
                  <tr>
                    <td><?php echo $data['Account Number']; ?></td>
                    <td><?php echo $data['Name']; ?></td>
                    <td><?php echo $data['E-Mail']; ?></td>
                    <td><?php echo $data['Phone']; ?></td>
                    <td><?php echo $data['Balance']; ?></td>
                  </tr>	
                <?php
                }
                ?>
                </table>

                <?php mysqli_close($db);?>

                        
                     </table>
                </div>
            </div>
            </div>
         
            
            
           
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
