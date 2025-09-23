<?php include 'services/database_connection.php'; 
   $query = "SELECT * FROM users WHERE UserID = 'Admin' AND Password = 'Admin';";
   $statement = $connect->prepare($query);
   $statement->execute();
   $result = $statement->fetchAll();

   $name = $_POST['username'];
   $password  = $_POST['password'];

   foreach($result as $row){
      // if($name === $row["UserID"] && $password === $row["Password"]){
      //    header("location: /slmd/pages");
      // }

      header("location: /slmd/pages");
   }
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Service Level Management Data</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
      <meta name="description" content="codedthemes">
      <meta name="keywords" content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
      <meta name="author" content="codedthemes">
      <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
      <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">
      <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
      <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/plugins/Waves/waves.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/main.css">
      <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
      <link rel="stylesheet" type="text/css" href="assets/css/color/color-1.min.css" id="color"/>
   </head>
   <body>
      <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <div class="login-card card-block">
                     <form action="#" method="POST" class="md-float-material">
                        <h3 class="text-center txt-primary">
                           Sign In to your account
                        </h3>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="md-input-wrapper">
                                 <input type="text" name="username" class="md-form-control" required="required"/>
                                 <label>Username</label>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="md-input-wrapper">
                                 <input type="password" name="password" class="md-form-control" required="required"/>
                                 <label>Password</label>
                              </div>
                           </div>
                        </div>

                        <div class="row">
                           <div class="col-xs-10 offset-xs-1">
                              <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
      <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
      <script src="assets/plugins/tether/dist/js/tether.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/plugins/Waves/waves.min.js"></script>
      <script type="text/javascript" src="assets/pages/elements.js"></script>
   </body>
</html>
