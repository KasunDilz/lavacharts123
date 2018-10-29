<!-- geochart.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel BarChart Example</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">  
  </head>
  <body>
    <div class="Card">
    
      <h2>Laravel BarChart Example</h2><br/>
      <div id="bar"></div>
      <?= $lava->render('BarChart', 'expense', 'bar') ?>
    
   </div>
  </body>
</html>