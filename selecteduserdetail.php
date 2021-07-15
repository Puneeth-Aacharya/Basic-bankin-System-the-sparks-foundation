<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $from = $_GET['acno'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    // 
    $sql = "SELECT * from users where acno=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query);// returns details of user from which the amount is to be transferred

    $sql = "SELECT * from users where acno=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);// returns details of user for which the amount is to be transferred.

    //check for any negetive amount value
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Please Enter a Valid Amount !.")';  // showing an alert box.
        echo '</script>';
    }
 
    //  to check insufficient balance.
    else if($amount > $sql1['balance']) 
    {       
        echo '<script type="text/javascript">';
        echo ' alert("Insufficient Balance ...!")';  // showing an alert box.
        echo '</script>';
    }
    
    //to check any zero amount transffer
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Invalid Amount ..! ')";
         echo "</script>";
     }

    else {
        
            // deducting amount from sender's account
            $newbalance = $sql1['balance'] - $amount;
            $sql = "UPDATE users set balance=$newbalance where acno=$from";
            mysqli_query($conn,$sql);
            

            // adding amount to reciever's account
            $newbalance = $sql2['balance'] + $amount;
            $sql = "UPDATE users set balance=$newbalance where acno=$to";
            mysqli_query($conn,$sql);
            
            $sender = $sql1['name'];
            $receiver = $sql2['name'];
            $sql = "INSERT INTO transaction(`SENDER`, `RECEIVER`, `BALENCE`) VALUES ('$sender','$receiver','$amount')";
            $query=mysqli_query($conn,$sql);

            //alert message for successfull transaction
            if($query){
                 echo "<script> alert('TRANSACTION SUCCESSFULL');
                                 window.location='transfermoney.php';                             
                       </script>";        
            }
            $newbalance= 0;
            $amount =0;
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<div class="head">  
    <h1>BASIC BANKING SYSTEM</h1>
</div>
	<div class="container">
        <h2 class="text-center pt-4">TRANSACTION</h2>
            <?php
                include 'connection.php';
                $sacno=$_GET['acno'];
                $sql = "SELECT * FROM  users where acno=$sacno";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <center class="center">
            <fieldset>
                <form method="post" name="tcredit" class="tabletext" ><br>
                    <div>           
                        <table class="table table-striped table-condensed table-bordered">
                            <tr style="color : black;">
                                <th class="text-center">AC.no&nbsp;&nbsp;&nbsp;</th>
                                <th class="text-center">Name&nbsp;&nbsp;&nbsp;</th>
                                <th class="text-center">Email&nbsp;&nbsp;&nbsp;</th>
                                <th class="text-center">Balance</th>
                            </tr>
                            <tr style="color : black;">
                                <td class="py-2"><?php echo $rows['acno'] ?>&nbsp;&nbsp;&nbsp;</td>
                                <td class="py-2"><?php echo $rows['name'] ?>&nbsp;&nbsp;&nbsp;</td>
                                <td class="py-2"><?php echo $rows['email'] ?>&nbsp;&nbsp;&nbsp;</td>
                                <td class="py-2"><?php echo $rows['balance'] ?></td>
                            </tr>
                        </table>
                    </div><br><br><br>    
                <label style="color : black;"><b>Transfer To:</b></label>
                <select name="to" class="form-control" required>
                <option value="" disabled selected>Choose</option>
                <?php
                    include 'connection.php';
                    $sacno=$_GET['acno'];
                    $sql = "SELECT * FROM users where acno!=$sacno";
                    $result=mysqli_query($conn,$sql);
                    if(!$result)
                    {
                        echo "Error ".$sql."<br>".mysqli_error($conn);
                    }
                    while($rows = mysqli_fetch_assoc($result)) {
                ?>
                <option class="table" value="<?php echo $rows['acno'];?>" >               
                    <?php echo $rows['name'] ;?> (Balance: 
                    <?php echo $rows['balance'] ;?> )                
                </option>
                <?php 
                    } 
                ?>
        <div>
            </select><br><br>
                <label style="color : black;"><b>Amount:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
                <input type="number" class="form-control" name="amount" required><br><br><br><br>
                <div class="text-center" >
                    <button class="btn mt-3" name="submit" type="submit" acno="myBtn" >Transfer</button>
                </div>
            </form>
        </fieldset>
        </center>
    </div><br><br>

<style type="text/css">
body{
    background-image:url(./img/transfer_11.jpg); 
    background-size:cover;  
}
html,body{
   width:100%;
   height:100%;
   margin:0px;
   padding:0px;
   overflow-x:hidden;
 }
h2{
    text-align:center;
    font-size:40px;
    color:orange;
    text-shadow:5px 3px 2px black;
}	
button{
	border:none;
	background: #d9d9d9;
}
button:hover{
	background-color:green;
	transform: scale(1.1);
	color:white;
}
fieldset{
    width:50%;
    backdrop-filter:blur(100px);
    box-shadow:10px 10px 20px black;
    border:3px solid black;           
}
center.center{
    padding-top:0.8%;
}
th,td,label,select,input,button{
    font-size:25px;           
}
input,select{
    height:40px;
    border:2px solid blue;
}
button{
    padding:2%;
    width:40%;
    font-weight:bold;
    background-color:aqua;
}
label{
    padding-right:5%;
    color:white;
}
footer.py-2{
   font-size:20px;
   font-weight:bold;
   color:white;
   background-color:black;
   opacity:0.8;
   padding:0.8%;
 }

 div.head{
     background-color:black;
     color:white;
     opacity:0.8;
     padding:0.3%;
     text-align:center;
 }
</style>

<div>
  <footer class=" py-2">
      <center><p>&copy;&nbsp;&nbsp;Designed by Puneeth K S<br>2021</p><center>
  </footer>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>