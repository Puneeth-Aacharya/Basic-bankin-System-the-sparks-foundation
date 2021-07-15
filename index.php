<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Home</title>
  </head>
  <body>
      <div class="text-center head">
        <h4>Welcome to</h4>
          <h1>BASIC BANKING SYSTEM</h1>
      </div><br><br><br>
  <div class="table">
    <table class="table">
      <tr class="text-center">
        <td >
          <div class="container ">
            <div class="card" id="dbms" style="background-color:rgb(45, 224, 45)">
              <a href="./transfermoney.php"> <span class="fa fa-user"></span></a><br><br>
                <h4 class="card-title"><b style="color:black;text-shadow: 0 0 15px orange;">View User Account</b></h4>             
            </div>
          </div>
        </td>
        <td >
          <div class="container ">
  					<div class="card" id="sgpa" style="background-color: orange;">
              <a href="transfermoney.php"><span class="fa fa-handshake two"></span></a><br><br>
							<h4 class="card-title"><b style="color:black;text-shadow: 0 0 15px orange;">Make Transaction</b></h4>
						</div>     
          </div>
        </td>
        <td >
          <div class="container ">
            <div class="card" id="dbms" style="background-color:lightblue;">
              <a href="transactionhistory.php"> <span class="fa fa-history"></span></a><br><br>
                <h4 class="card-title"><b style="color:black;text-shadow: 0 0 15px orange;">Transaction History</b></h4>                 
            </div>
          </div>
        </td>
      </tr>
    </table>
  </div><br><br>

      <!--css-->
  <style type="text/css">

    body{
      background-image: url(./img/index_3.png);
      background:cover;
    }
    html,body{
      width:100%;
      height:100%;
      margin:0px;
      padding:0px;
      overflow-x:hidden;
    }

  h1{
    font-size: 50px;
    color:white;
  }
  h4{
  color:green;
  }
  .head{
    padding:1%;
    background-color:black;
    opacity:0.8;
    position:fixed;
    width:100%;
  }
  .fa{
    font-size:500%;
    padding-top: 10%;
  }
  div.text-center{
    padding-top: 2%;
  }
  a{
    text-decoration: none;
    color:black;
  }
  .table{
    padding-top:10%;
  }
  .card{
    height:250px;
    border-radius: 20px;
    box-shadow:8px 8px 15px black; 
    
  }
  footer.py-2{
    font-size:20px;
    font-weight:bold;
    color:white;
    background-color:black;
    opacity:0.8;
  }
</style>
<div>
  <footer class="text-center mt-5 py-2">
      <p>&copy;&nbsp;&nbsp;Designed by Puneeth K S<br>2021</p>
  </footer>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>