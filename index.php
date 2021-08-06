

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>login</title>
    <div class="container"><br><br><br><br><br><br><br><br><br>
    
  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <div class="row justify-content-center">
  <div class="col-6 md-12 p-6 mb-6 border border-success border border-3 bg-warning text-dark">

<div class="container">
  <div class="row">
    <div class="col-md-12">
    <h3 align="center"> Please sign in</h3><br><br>
     <form  name="formlogin" action="login.php" method="POST" id="login">
              <div class="row">
              <label class="col-md-5" style="text-align:right"> User name </label>
                <div class="col-md-5">
                <input type="Username"  name="Username" class="form-control" required placeholder="Username" />
                </div>
                </div>
 
 
              <div class="row">
              <br>
              <label class="col-md-5" style="text-align:right"> Password </label>
                <div class="col-md-5">
                     <input type="password" name="Password" class="form-control" required placeholder="Password" />
            </div>
              </div>
 
 
 
              
                <div class="col-md-4"> </div>
              &nbsp; &nbsp; &nbsp; <br /> 
              <div class="col-md-12">
              <p align="center">
              
              
              <button type="submit" class="btn btn-outline-secondary" id="btn" value="Signin"> เข้าสู่ระบบ </button> 
        
              </p>
              </div>
              <br>
              
            </form>
      </div>
    </div>
  </div>
      
<!--start footer-->      
<p align="center"> Saichon Chimbanrai Bc.62 5011</p>
<!--end footer-->
 
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  </body>
</html>