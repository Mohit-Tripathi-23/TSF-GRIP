
<html>
    <head>
        
        <style>
            .main-div
            {
 
               width: 100%;
               height: 100vh;
               display: flex;
               flex-direction: column;
               justify-content: center;
               align-items: center;
              }
            .center-div
            {
                width: 80%;
                height: 75vh;
                background: -webkit-linear-gradient(left,#5DADE2 , #00c6ff);
                padding: 20px 0 0 0;
                border-radius: 10px;
    
             }
            h1{
                font-size: 18px;
                color: #000;
                text-align: center;
                margin-top:-30px;
                margin-bottom: 10px;
            }

            table
            {
                border-collapse: collapse;
               text-align: center;
               background-color:#fff;
               box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
               border-radius: 10px;
               margin: auto;
               margin-top: 20px;


            }
            th
            {
                text-transform: uppercase;
                font-weight: 500;
                font-size: 23px;
                background-color:lightgoldenrodyellow;

            }
            th,td
            {
                border: 1px solid #f2f2f2;
                padding: 8px 30px;
                text-align: center;
                color:black;
            }

            td
            {
                font-size: 15px;
            }

            tr:hover
            {
                background-color:#f5f5f5;
            }

        </style>
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
        <link rel="stylesheet" href="style4.css">
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
              <h1 style="font-size: 35px;color: red;margin-top: -100px;">Transaction History</h1>
               <div  class="center-div">
                <div class="table-responsive">
                    <table>
                        <thead>
                    <tr>
                   <th>S-NO</th>
                   <th>SENDER</th>
                   <th>RECEIVER</th>
                   <th>AMOUNT</th>
                   <th>DATE & TIME</th>
                    </tr>
                        </thead>
                       
                        <?php
                        
                        

                  $records = mysqli_query($db,"select * from transaction"); 
                  while($data = mysqli_fetch_array($records))
                       {
                      ?>
                         <tr>
                           <td><?php echo $data['s-no']; ?></td>
                          <td><?php echo $data['Sender']; ?></td>
                         <td><?php echo $data['Receiver']; ?></td>
                          <td><?php echo $data['Amount']; ?></td>
                        <td><?php echo $data['Date']; ?></td>
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
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


           
            
            
            
            
            
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
