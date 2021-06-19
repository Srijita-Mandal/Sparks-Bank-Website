<html lang="en">
<head>
    <meta charset="UTF-8">
        <title>Contact</title>
        <?php
        include 'link.php';
        ?>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        include 'header.php';
        ?><br><br>

    <!-- Main -->
        <div class="content">
          <div class="container">
            
          <div class="row">
              <div class="col-md-8">
                  <h2 class="p-bold" style="color:#0000ff">Live Support</h2>
                  <div class="box-padding-10" style="color:800080">
                <h4>24 Hours | 7 Days a Week | 365 Days a Year - Live Technical Support</h4>
                <hr>
                <p class="text-muted">We are with you always.Contact us if you face any types of issue or any queries.We will provide you all the necessary support.Stay connected.stay safe. </p>
              </div>
              </div>

              <div class="col-md-4">
                  <img src="https://i.postimg.cc/Gm7RmVW5/images-10.jpg" class="img-responsive live-support-img" alt="Live Support">
              </div>
            </div>

            <div class="row">
              <div class="col-md-7">
                  <h2 class="p-bold" style="color:#0000ff">Contact Us</h2>
              <div class="box-padding-10">
              <form action="#" method="POST">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$"  required>
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                  <input type="email" name="email" class="form-control"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="message" cols="85" class="form-control" rows="7"></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
              </form>
              </div>
              </div>

              <div class="col-md-5">
                <div class="box-padding-rl">
                    <h2 class="p-bold" style="color:#0000ff">Contact Information</h2>
                  <p class="text-muted">500, Kanchan Park, Kolkata-700009</p>
                  <p class="text-muted">12-568-875, 3rd flore, Manthouse building</p>
                  <p class="text-muted">INDIA</p>
                  <p class="text-muted">Phone : +91-123-0000000</p>
                  <p class="text-muted">Email : sparks@bank.com</p>
                  <p class="text-muted">Follow On: <a href="#" class="fa fa-google" style="color:#ff0000"></a>  <a href="#" class="fa fa-facebook"></a>  <a href="#" class="fa fa-instagram" style="color:#800080"></a>  <a href="#" class="fa fa-twitter"></a>  <a href="#" class="fa fa-linkedin" style="color:#041412"></a></p>                  
                </div>
              </div>
            </div>
          </div>
        </div><br><br><br>
    <!-- Main End -->

    <!-- Footer -->
    <?php
        include 'footer.php';
    ?>
    <!-- Footer End -->  
</body>
</html>

