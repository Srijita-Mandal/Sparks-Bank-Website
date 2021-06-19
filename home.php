<html>
    <head>
        <meta charset="UTF-8">
        <title>Sparks Bank</title>
        <?php
        include 'link.php';
        ?>
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
           <div class="container">
              <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                    <span class="iconbar"></span>
                    <span class="iconbar"></span>
                    <span class="iconbar"></span>
                 </button>
                 <a href="home.php" class="navbar-brand"> Sparks Bank</a>
              </div>
              <div class="collapse navbar-collapse" id="mynavbar">
                 <ul class="nav navbar-nav navbar-right">
                    <li><a href="about.php"><span class="glyphicon glyphicon-user"></span>  About Us</a></li>
                    <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                 </ul>
              </div>
           </div>
        </nav><br><br>
        <div class="container column-style">
          <div class="row" id="hero"><br><br> 
           <div class="col-md-6 column-style" id="logo">
              <img src="https://i.postimg.cc/T13jKfvP/Frame-4-removebg-preview.png"><br>
              <div id="name"> Sparks Bank</div>
              <h3><b>Be a member of our sparks family!!</b></h3>
           </div>
           <div class="col-md-6 column-style" id="image1">
              <img src="https://i.postimg.cc/NjPtWMLs/pic-5.jpg"><br><br><br><br><br>
             <a href="xd.php"> <img src="https://i.postimg.cc/sxD3Z02m/get-in-on-google-play.png" id="gplay"></a><br>
           </div>
          </div> 
        </div><br><br>
        
        <div class="container column-style">
           <div class="row">
            <h3 id="name2"><b>Enjoy Our Special Facilities:</b></h3><br>
              <div class="col-md-4">
                 <a href="#">
                    <div class="thumbnail"><img src="https://i.postimg.cc/ZnFJ9zZC/onboarding-3.png"></div>
                 </a>
              </div>
              <div class="col-md-4">
                 <a href="#">
                    <div class="thumbnail"><img src="https://i.postimg.cc/zvfxhnYK/onboarding-4.png"></div>
                 </a>
              </div>
              <div class="col-md-4">
                 <a href="#">
                    <div class="thumbnail"><img src="https://i.postimg.cc/JhcxdT1j/onboarding-5.png"></div>
                 </a>
              </div>
           </div>       
        </div>
        <div class="container">
           <div class="row row-style">
           <h3 id="name3"><b>Go to Actions:</b></h3><br>
              <div class="col-md-4">
                 <div class="panel panel-success">
                    <div class="panel-body">
                       <a href="customers.php"><img src="https://i.postimg.cc/hG166kT0/customers.jpg"></a>
                    </div>
                    <div class="panel-footer">
                       <a href="customers.php"><p><h3> View Customers</h3></p></a>
                    </div>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="panel panel-success">
                    <div class="panel-body">
                       <a href="transactions.php"><img src="https://i.postimg.cc/tgkv2hGS/transactions.jpg"></a>
                    </div>
                    <div class="panel-footer">
                       <a href="transaction.php"><p><h3> Make Transactions</h3></p></a>
                    </div>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="panel panel-success">
                    <div class="panel-body">
                       <a href="transactionhistory.php"><img src="https://i.postimg.cc/X7mdPm77/pic-12-2.jpg"></a>
                    </div>
                    <div class="panel-footer">
                       <a href="transactionhistory.php"><p><h3> Transaction History</h3></p></a>
                    </div>
                 </div>
              </div>
           </div>
        </div><br><br><br>
        <?php
          include 'footer.php';
        ?>


    </body>
</html>
