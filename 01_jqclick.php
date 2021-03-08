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
   <h1>Jquery</h1>
    <p>By Temisan</p>

    <script>
      $(document).ready(function () {
        $("button").click(function () {
          alert("Echo: " + $("#someText").val())
        }) 
      });
    </script>
    
    <form class="col-md-offset-5 my-2" >
          <span class="pull-right">
              <div class="row buttons-block">
                <div class="col-md-10">
                  <input type="text" id="someText" class="form-control name-pull-image w-100" placeholder="Input text..." value="">
                      </div>
                  <div class="col-md-2">
                    <button type="button" class="btn btn-block btn-success pull-image-button w-100"><i class="fa fa-play"></i></button>
                      </div>
              </div>
            </span>
        </form>
   </div>


    <!-- <div class="puppies">
      <img class="img-thumbnail border" src="img/cute-puppies-79.jpg" alt="">
      <img class="img-thumbnail border" src="img/d0869d30c552fd97e672b74f76d1c045.jpg" alt="">
      <img class="img-thumbnail border" src="img/e63d2c80d0603f41f9455a5389694fae.jpg" alt="">
    </div> -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  </body>
</html>