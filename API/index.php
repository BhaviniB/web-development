<?php
    
    $weather = "";
    $error = "";
    $city = "";
    
    if (array_key_exists('city', $_GET)) {

       $urlContents=file_get_contents("http://samples.openweathermap.org/data/2.5/weather?q=".urlencode($_GET['city']).",uk&appid=555852f5bfe9f956ad773993f2da986a");

	   //process JSON
	   
	   
	   $weatherArray=json_decode($urlContents,true);
	     if ($weatherArray['cod'] == 200) {
        
            $weather = "The weather in ".$_GET['city']." is currently '".$weatherArray['weather'][0]['description']."'. ";

            $tempInCelcius = intval($weatherArray['main']['temp'] - 273);

            $weather .= " The temperature is ".$tempInCelcius."&deg;C and the wind speed is ".$weatherArray['wind']['speed']."m/s.";
            
        } else {
            
            $error = "Could not find city - please try again.";
            
        }
        
    }
	
	   ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>Weather Scraper -- bcube___</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style type="text/css">
      
      html {
        background: url(bg.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }

      body {
        background: none;
      }

      .container {
        text-align: center;
        margin-top: 150px;
        color: #fff;
        width: 40%;

      }

      input {
        margin: 20px 0;
        text-align: center;
      }
      .btn {
        margin: 20px;
      }



    </style>
  </head>
  <body>
    
    <div class="container">
      <h1 class="text-center">Weather Scraper. <br>What's the damn weather?</h1>
      
        <form class="form-group">
        
        <label for = "city">Enter the name of a city</label>
        <input type="text" class="form-control" name="city" id="city" placeholder = "Eg. Dehradun, Jaipur.." value = "<?php echo $city ?>">

        <button type="submit" class="btn btn-primary">Submit</button>


        </form>

        <div id="weather">
          
          <?php
            if($weather) {
              echo '<div class="alert   alert-success" role="alert">
                
                '. $weather . '

              </div>';
            } else if($error) {
              echo '<div class="alert   alert-danger" role="alert">
                
                '. $error . '

              </div>';
            }

          ?>




        </div>

    </div>











    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>





