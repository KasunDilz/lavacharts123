<!-- geochart.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel GeoChart Example</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  </head>
  <body>
  <div class="row">
    <div class="col-sm-12">
      <div class="Card">
          <h2>Laravel GeoChart Example</h2>
            <div id="geo"></div>
          <?= $lava2->render('GeoChart', 'count', 'geo') ?>
          <!--  $lava->render('functionname', '2ndvalue', 'geo') -->
      </div>
    </div>
      <div class="col-sm-12">
        <div class="Card">
            <h2>Laravel BarChart Example</h2><br/>
            <div id="bar"></div>
            <?= $lava->render('BarChart', 'expense', 'bar') ?>
          <!--  $lava->render('functionname', '2ndvalue', 'geo') -->
        </div>
    </div>
  </div>
    
  </body>
</html>