<html>
    <head>
    <meta charset="UTF-8">
        <title>Customers</title>
        <?php
        include 'link.php';
        ?>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        <div class="container column-style">
            <div class="row" id="bg1">
                <div class="col-md-6 column-style">
                
                    <img src="https://i.postimg.cc/T13jKfvP/Frame-4-removebg-preview.png" id="logocus">
                    <div id="heading1"><h1><b>Customers</b></h1></div>
                
                </div>
            </div>
        </div><br><br>
        
        <div class="container">
          <centre>
           <table class="table table-striped table-bordered table-hover">
              <thead>
                 <tr>
                    <th>customers_id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact No.</th>
                    <th>Balance</th>
                    <th></th> 
                 </tr>
              </thead>
              <tbody>
              <?php
                       include 'config.php';
                       $sql="SELECT * FROM customers";
                       $query=mysqli_query($con,$sql);
                       while($rows = mysqli_fetch_assoc($query))
                       {
                    ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['customers_id']; ?></td> 
                        <td class="py-2"><?php echo $rows['name']; ?></td>
                        <td class="py-2"><?php echo $rows['email']; ?></td>
                        <td class="py-2"><?php echo $rows['phone']; ?></td>
                        <td class="py-2"><?php echo $rows['balance']; ?></td>
                        <td><a href="transaction.php" name="add" value="add" class="btn btn-primary">Make Transaction</td>
                    <?php
                       }
                    ?>
                 
              </tbody>
           </table>
          </centre> 
        </div><br><br><br><br>
        <?php
        include 'footer.php';
        ?>
        
    </body>
</html>