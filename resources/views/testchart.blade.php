<!-- geochart.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel Chart Example</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">  
  </head>
  <body>
    <div class="Card">
    
      <h2>Laravel Chart Example</h2><br/>
      <div id="barr"></div>
      <?= $lava->render('ColumnChart', 'target', 'barr') ?>
    
   </div>
  </body>
</html>