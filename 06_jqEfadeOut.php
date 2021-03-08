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
    
    <script src="jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Jquery Tutorial</title>
  </head>
  <body>
   
   <div class="container">
    
    <div class="puppies">
      <img id="one" src="img/cute-puppies-79.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="" width="100">
      <img id="two" src="img/d0869d30c552fd97e672b74f76d1c045.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="" width="100">
      <img id="three" src="img/e63d2c80d0603f41f9455a5389694fae.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="" width="100">
    </div>

    <button class="btn btn-primary btn-md" id="hide">BYEE</button>
    
    
    <script>
        $(document).ready(function(){
            $("button").click(function() {
                $('#one').fadeIn('slow');
                $('#two').fadeOut('slow');
                $('#three').fadeOut('slow');
            });

            // $("button").click(function() {
            //     $('#one').fadeIn('slow');
            //     $('#two').fadeIn('slow');
            //     $('#three').fadeIn('slow');
            // });
        });
    </script>
   </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  </body>
</html>