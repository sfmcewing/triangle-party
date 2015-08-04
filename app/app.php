<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/triangle.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "
        <!DOCTYPE html>
        <html>
        <head>
        <title>Triangle Land</title>
        </head>
        <body>
          <div class='container'>
            <h1>Enter the dimensions of your triangle:</h1>
              <form action='/view_triangle'>
              <div class='form-group'>
              <label for='side1'>Side 1</label>
              <input id='side1' name='side1' class='form-control' type='number'>
              </div>
              <div class='form-group'>
                  <label for='side2'>Side 2</label>
                  <input id='side2' name='side2' class='form-control' type='number'>
              </div>
              <div class='form-group'>
                  <label for='side3'>Side 3</label>
                  <input id='side3' name='side3' class='form-control' type='number'>
              </div>

              <button type='submit' class='btn-success'>Check it</button>

            </form>
          </div>
        </body>
        </html>
        ";

    });
    $app->get("/view_triangle", function(){
      $my_triangle = new Triangle($_GET['side1'], $_GET['side2'], $_GET['side3']);
      if ($my_triangle->isEquilateral()) {
            return "<h1>Congrats! That shit is equilateral! ;)</h1>";
      } else {
            return "<h1>That shit is whack :(</h1>";
      }

    });

    return $app;

?>
