
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
       <div class="container">
           <div class="row row-style">
               <div class="col-md-6">
                    <img src="https://i.postimg.cc/q7pym46M/pic-9.jpg" class="img-responsive signup-image" alt="Image" id="image2">
               </div>
               <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <centre><h3><i>Transfer Money</i></h3></centre>
                        </div>
                        
                        <div class="panel-body">
                            <centre>
                               <img src="https://i.postimg.cc/hjwphrGS/user.png" class="img-responsive" id="user"><br>
                               <form method="POST" action="transactionscript.php">
                                  <div class="form-group">
                                  <b>Sender:</b><input type="text" class="form-control" name="sender" required><br>
                                  <b>Transfer to:</b><br><select name="receiver" required>
                                      <option value="Neel">Neel</option>
                                      <option value="Payel">Payel</option>
                                      <option value="Debasish">Debasish</option>
                                      <option value="Arun">Arun</option>
                                      <option value="Rajdeep">Rajdeep</option>
                                      <option value="Arunima">Arunima</option>
                                      <option value="Megha">Megha</option>
                                      <option value="Varun">Varun</option>
                                      <option value="Akash">Akash</option>
                                      <option value="Piyali">Piyali</option>
                                      </select><br><br>
                                   <b>Amount:</b></br><input type="number" name="amount" required>        
                                  </div>
                               
                            </centre>
                        </div>
                        <div class="panel-footer">
                            <centre>
                               <p><i> Are you confirm to make this Transaction? </i></p>
                               <button type="submit" value="submit" class="btn btn-primary"> Transfer</button>       <a href="home.php"><button type="button" class="btn btn-default"> Cancel </button></a>
                            </centre>
                        </div>
                      </form>  
                    </div>
               </div>
           </div>
       </div>
    </body>
</html>