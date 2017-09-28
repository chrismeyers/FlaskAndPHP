<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <?php
    require_once "src/php/flaskRequests.php";

    $fr = new FlaskRequests();

    $getResponse = $fr->getRequest("hello_world");
    echo $getResponse . "<br>";

    $fields = array(
      "key" => "value"
    );
    $postResponse = $fr->postRequest("post_data", $fields);

    echo "The post_data response is: " . $postResponse . "<br>";
    ?>
  </body>
</html>
