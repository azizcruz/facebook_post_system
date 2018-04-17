<?php 
    include_once("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Facebook Posts System</title>
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="blue darken-4">
    
    <div class="container">
        <div class="row">
            <div class="col s12 m10 offset-m1">
               <h3 class="center white-text">Facebook Post System <span><i class="fa fa-facebook-square white-text" aria-hidden="true"></i></span></h3>
               
                <div class="card-panel">
                    <form action="#">
                       <div class="input-field">
                            <label for="post-text">What Are You Thinking About?</label>
                            <textarea name="post-text" id="post-text" cols="30" rows="10" class="materialize-textarea"></textarea>
                       </div>
                       <button type="submit" class="btn waves-effect blue darken-4 white-text right" id="post-btn" disabled>POST <i class="fa fa-upload" aria-hidden="true"></i></button>
                       <div class="clearfix"></div>
                    </form>
                </div> <!-- /.card-panel -->
                
                <br>
                
                <div id="posts">
                    
                </div>
            </div> <!-- /.col -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
    
    
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>