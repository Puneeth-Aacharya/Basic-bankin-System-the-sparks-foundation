<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <?php
        include 'connection.php';
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn,$sql);
    ?>
    <center>
        <div class="container">  
            <h1>BASIC BANKING SYSTEM</h1>
        </div><br>
            <h2 class="text-center pt-4">USER DETAILS</h2><br>
            <fieldset>
                <table class="table table-hover table-striped table-condensed table-borderless">                       
                    <tr>
                        <th>Ac.no&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Name</th>
                        <th>E-Mail&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Balance&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Operation</th>
                    </tr>                      
                    <tbody>
                        <?php 
                            while($rows=mysqli_fetch_assoc($result)){ //fetch the user details
                        ?> 
                        <tr style="color : black;">
                            <td><?php echo $rows['acno'] ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><?php echo $rows['name']?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><?php echo $rows['email']?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><?php echo $rows['balance']?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><a href="selecteduserdetail.php?acno= <?php echo $rows['acno'] ;?>"> <button type="button" class="btn">Transfer</button></a></td> 
                        </tr>
                        <?php
                            }
                        ?>            
                    </tbody>
                </table>
            </fieldset>   
        </div>
    </center><br><br>

    <style type="text/css">
        body{
            background-image:url(./img/user.jpg);
            background-size:cover;
        }
        html,body{
            width:100%;
            height:100%;
            margin:0px;
            padding:0px;
            overflow-x:hidden;
        }
        fieldset{
            width:60%;
            border-radius:20px;
            background-color:wheat;
            box-shadow:10px 10px 30px black;
        }
        .table{
            padding-top:3%;
            padding-bottom:3%;
        }
        button{
            background-color:green;
            color:white;
            transition: 1.0s;
            font-size:25px;
            border-radius:20px;
            padding:5px;
            width:150px;
            border:2px solid black;
        }
        button:hover{
            background-color:blue;
            color: yellow;    
        }
        th,td{
            font-size:20px;
            padding:2%;
        }
        .pt-4{
            color : yellow;
            font-size:30px;
            padding-top:5%;
        }
        .fixed-footer{
            width:100%;          
            font-size:20px;
            font-weight:bold;
            color:white;
            background-color:black;
            padding:1%;  
                
        }
        div.container{
            width:100%;
            position:fixed;            
            background-color:black;
            color:white;
            opacity:0.8;
            padding:1%;
        }
    </style>
    <div>
        <footer class="fixed-footer mt-5 py-2">
            <center><p>&copy;&nbsp;&nbsp;Designed by Puneeth K S<br>2021</p></center>
        </footer>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>