<?php
    include_once 'controller/index.ctrl.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <form action="" method = "POST">

        <div class="container my-5">

            <label class = "my-2">Start date:</label>
                <input class = "form-control" type="date" name="start_date" min="<?php echo $lastTenDays; ?>" required>

            <label class = 'my-2'>End date:</label>
                <input class = 'form-control' type='date' name='end_date' min='<?php echo $lastTenDays; ?>' required>

            <button type="submit" name = "submit" class="btn btn-outline-primary form-control my-4">Submit</button>

        </div>
    </form>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>