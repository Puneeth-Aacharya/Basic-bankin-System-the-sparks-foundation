<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
<div class="head">  
    <h1>BASIC BANKING SYSTEM</h1>
</div><br>
	<div class="container" style=" padding-top:5%;">
        <h2 class="pt-4">TRANSACTION HISTORY</h2><br>
            
                <center>
                    <fieldset>
                        <table class="table table-hover table-striped ">
                            <tr>
                                <th>S.No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                <th>Sender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                <th>Receiver&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                <th>Amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                <th>Date & Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                            </tr>       
                            <tbody> 
                            <?php
                                include 'connection.php';
                                $sql ="select * from transaction";
                                $query =mysqli_query($conn, $sql);
                                while($rows = mysqli_fetch_assoc($query))
                                {
                            ?>
                            <tr style="color : black;">
                            <td class="py-2"><?php echo $rows['uid']; ?></td>
                            <td class="py-2"><?php echo $rows['SENDER']; ?></td>
                            <td class="py-2"><?php echo $rows['RECEIVER']; ?></td>
                            <td class="py-2"><?php echo $rows['BALENCE']; ?> </td>
                            <td class="py-2"><?php echo $rows['DATE']; ?> </td>                
                            <?php
                                }
                            ?>
                            </tbody>
                        </table>
                    </fieldset>
                <center>
           
        </div><br><br><br>

    <style type="text/css">
        body{
            background-image:url(./img/history_1.jpg);
            background-size:cover;
        }
        html,body{
            width:100%;
            height:100%;
            margin:0px;
            padding:0px;
            overflow-x:hidden;
        }
        th{
            font-size:20px;
            padding:2%;
            color:orange;
        }
        td{
            font-size:20px;
            padding:2%;
            color:black;
            font-weight:bold;
            
        }
        fieldset{
            width:100%;  
            backdrop-filter:blur(100px);
            box-shadow:10px 10px 20px black;
            border:none;
        }
        h2{
            text-align:center;
            padding:2%;
            font-size:30px;
            color:yellow;
        }
        footer.py-2{
            font-size:20px;
            font-weight:bold;
            color:white;
            background-color:black;
            opacity:0.8;           
        }
        div.head{
            width:100%;
            position:fixed;
            background-color:black;
            color:white;
            opacity:0.8;
            padding:1%;
            text-align:center;
        }
    </style>

    <div>
        <footer class="text-center mt-5 py-2">
            <p>&copy;&nbsp;&nbsp;Designed by Puneeth K S<br>2021</p>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>