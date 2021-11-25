<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- favicon -->
    <link rel="shortcut icon" href="../image/icon.JPG">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">

    <title>RHY Amerta Development</title>

    <style>

        body{
            font-family: 'Josefin Sans', sans-serif;
            background-image:url(../image/bg.jpg);
            background-size:cover;
        }

        .row{
            padding-top: 50px;
        }
        .kotak1{
            padding-top:20px;
            margin:auto;
            
        }

        .kotak2{
            padding-top:20px;
            padding-bottom:20px;
            background-color: #74EBD5;
            background-image: linear-gradient(90deg, #74EBD5 0%, #9FACE6 100%);
            margin:auto;
            width : 80%;
            text-align:center;
            border-radius:10px;
        }

        .kotak2 , hr{
            width:80%;            
        }

        .textwelcome{
            text-align:center;
            font-size: 20px;
        }

        .textwelcome > span{
            font-weight:bold;
        }

        .textwelcome > .please{
            font-size:17px;
        }


        .kotak3{
            /* height:300px;
            background-color: #FF9A8B;
            background-image: linear-gradient(90deg, #FF9A8B 0%, #FF6A88 55%, #FF99AC 100%); */
            margin: auto;
            width:80%;
            
        }

        #pass, #btn-login, #btn-cancel{
            margin-top:15px;
        }

        #btn-login, #btn-cancel{
            width:100%;
        }

        #btn-cancel{
            margin-top:5px;
        }

        #link-register{
            font-size:15px;
            color:blue;
        }
    </style>

  </head>
  <body>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="kotak1">
                <!-- <h4>kotak1</h4> -->
                <div class="kotak2">
                    <br>
                    <!-- <h4>kotak2</h4> -->
                        <div class="textwelcome">
                            Welcome To 
                            <br>
                            <span>RHY Amerta Development</span>
                            <hr>
                            <div class="please">
                                please login to continue..
                            </div>
                        </div>

                    <div class="kotak3">
                        <!-- <h4>kotak3 </h4> -->
                        <br>
                        <form action="">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="username">
                                    <input type="password" class="form-control" placeholder="password" id="pass">
                                    <a class="btn btn-primary" href="#" role="button" id="btn-login">Login</a>
                                    <a class="btn btn-danger" href="#" role="button" id="btn-cancel">Cancel</a>
                                    <br><br>
                                    <a href="" id="link-register">Sign Up</a>
                                    
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
