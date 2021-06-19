<html>
    <head>
        <title>Transaction</title>
        <?php
        include 'link.php';
        ?>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
       <?php
       include 'header.php';
       ?><br>

       <div class="container column-style">
            <div class="row" id="bg2">
                <div class="col-md-6 column-style">
                
                    <img src="https://i.postimg.cc/T13jKfvP/Frame-4-removebg-preview.png" id="logocus">
                    <div id="heading1"><h1><b>Transaction History</b></h1></div>
                
                </div>
            </div>
        </div><br><br>
        <div class="container">
        <div class="table-responsive-sm">
            <table class="table table-hover table-striped table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">S.No.</th>
                        <th class="text-center">Sender</th>
                        <th class="text-center">Receiver</th>
                        <th class="text-center">Amount</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Date & Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                       include 'config.php';
                       $sql="SELECT * FROM transactions";
                       $query=mysqli_query($con,$sql);
                       while($rows = mysqli_fetch_assoc($query))
                       {
                    ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['tid']; ?></td> 
                        <td class="py-2"><?php echo $rows['sender']; ?></td>
                        <td class="py-2"><?php echo $rows['receiver']; ?></td>
                        <td class="py-2"><?php echo $rows['amount']; ?></td>
                        <td class="py-2"><?php echo $rows['status']; ?></td>
                        <td class="py-2"><?php echo $rows['datetime']; ?></td>
                    <?php
                       }
                    ?>
                </tbody>
            </table>
        </div>
        </div><br>
        <div class="col-md-5">
        </div> 
        <div>
            <a href="home.php"><button class="btn btn-primary"> Back to Home </button></a>
        </div>  <br><br>
        <div class="row">
          <footer>
              <div class="container">
                  
                      
        Copyright © Srijita Mandal , 
        Internship project of The Sparks Foundation.        
              </div>
          </footer>
        </div>  

    </body>
</html>