<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script src="jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="jqueryui/jquery-ui.theme.css">
    <link rel="stylesheet" href="jqueryui/jquery-ui.structure.min.css">
    <link rel="stylesheet" href="jqueryui/jquery-ui.min.css">
    

    <title>Jquery Tutorial</title>    

    <style>
        #drop{
            width: 300px;
            height:300px;
            float: right;
            background-color: aquamarine;
        }
    </style>

  </head>
  <!--Didn't work-->
  <body> 
    
    <div class="container">
        <h1>jQuery Tutorial</h1>
       <div id="drag">
            <img src="img/cute-puppies-79.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="" width="100">
            </div>
        <div id="drop">
            <p>My home</p>
        </div>
    </div>

    

    <!--script-->
   <script>
        $(function() {
             
            $("#drop").droppable();
            $("#drag").draggable();
        }) ;

        
    </script>

    <script src="jqueryui/jquery-ui.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  </body>
</html>