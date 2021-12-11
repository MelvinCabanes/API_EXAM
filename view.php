<?php 
 include_once 'controller/view.ctrl.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
    <table class="table">
    <thead>
      <tr>
        <th scope="col">Place</th>
        <th scope="col">Magnitude</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
      </tr>
    </thead>
    <tbody>

      <?php

        if(isset($_GET['start']) && isset($_GET['end'])) {
          foreach ($show->features as $val) {
            if(strpos($val->properties->place, "Philippines") !== false) {
              $time = $val->properties->time;
      ?>
              <tr>
                <th scope="row"><?php echo $val->properties->place; ?></th>
                <td><?php echo $val->properties->mag; ?></td>
                <td><?php echo date("Y-m-d" , $time/1000); ?></td>
                <td><?php echo date("H:i s" , $time/1000); ?></td>
              </tr>
      <?php }
          }  
        } ?>
    </tbody>
  </table>

    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>