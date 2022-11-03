<head>
        <title>Groceries</title>
        <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
        
        body{
            background: linear-gradient(
          rgba(0, 0, 0, 0.7), 
          rgba(0, 0, 0, 0.7)
        ),url('image/background.jpg');
        }
        .container {
            color:#35a835;
           
        }
        .brand{
            background: #35a835 !important;
            
        }
        .brand-text{
            color: #35a835 !important;
        }
        form{
            max-width:460px;
            margin:20px auto;
            padding:20px;
        }
        h4{
            color:#35a835;
        }
        .card{
            border-radius:50px;
            background-image:url('image/banner.jpg');
            background-size:cover;
        }
        .card-content {
         color:white;
        }
        .brand-text a{
            border-radius:50px;
        }
        .white{
            background-image:url('image/bg.jpg');
            background-size:cover;
            border-radius:50px;
        }
        .other{
            color:white;
            font-size:15px;
        }
        #detail{
            color:#35a835;
        }
        .grocery {
            width: 100px;
            margin:40px auto -30px;
            display:block;
            position: relative;
            top:-30px;
        }

    </style>
    </head>
    <body class="grey lighten-4">
        <nav class="black z-depth-0">
            <div class="container">
                <a href="index.php" class="brand-logo brand-text">Groceries List</a>
                <ul id="nav-mobile" class="right hide-on-small-and-down">
                    <li><a href="add.php" class="btn brand z-depth-0">Add Groceries</a></li>
                </ul>
            </div> 
        </nav>  