<?php
    $con = mysqli_connect('127.0.0.1','root','');

    if(!$con)
    {
        echo 'Not connected to server';
    }

    if(!mysqli_select_db($con,'basic_banking_system'))
    {
        echo 'DAtabase not selected';
    }

    $sender = $_POST['sender'];
    $receiver = $_POST['receiver'];
    $amount = $_POST['amount'];


    $sql= "INSERT INTO transactions (sender,receiver,amount,status) VALUES ('$sender' , '$receiver' , '$amount' , 'Transferred Succesfully')";

    if(!mysqli_query($con,$sql))
    {
        echo 'Not inserted';
    }
    else
    {
        
    

    $sql = "SELECT * FROM customers INNER JOIN transactions ON customers.name=transactions.sender";
    $query = mysqli_query($con,$sql);
    $sql1 = mysqli_fetch_array($query);

    $sql = "SELECT * FROM customers INNER JOIN transactions ON customers.name=transactions.receiver";
    $query = mysqli_query($con,$sql);
    $sql2 = mysqli_fetch_array($query);


    if(($amount)<0)
    {
        echo '<script type="text/javascript">';
        echo ' alart("Oops! Negative values cannot be transferred")';
        echo '</script>';
    }

    else if(($amount) > $sqli['balance'])
    {
        echo '<script type="text/javascript">';
        echo ' alart("Bad Luck! Insufficient Balance")';
        echo '</script>';
    }

    else if(($amount)==0)
    {
        echo '<script type="text.javascript">';
        echo ' alart("Oops! Zero value cannot be transferred")';
        echo '</script>';
    }

    else{
        $newbalance = $sqli1['balance'] - $amount;
        $sql="UPDATE customers INNER JOIN transactions ON customers.name=transactions.sender SET balance = $newbalance";
        mysqli_query($con,$sql);

        $newbalance = $sqli2['balance'] + $amount;
        $sql="UPDATE customers INNER JOIN transactions ON customers.name=transactions.receiver SET balance = $newbalance";
        mysqli_query($con,$sql);

    }

    header('location:success.php');

}

?>