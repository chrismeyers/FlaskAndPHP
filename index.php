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

    <form action="" method="post">
      <label>Name: <input type="text" name="name"></label>
      <input type="submit" name="submit-name">
    </form>

    <?php
    if(isset($_POST["submit-name"])) {
      $payload = array(
        "name" => $_POST["name"]
      );
      $postResponse = $fr->postRequest("form_post", $payload);
      echo $postResponse;
    }
    else {
      echo "Please enter a name and submit the form.";
    }
    ?>

  </body>
</html>
