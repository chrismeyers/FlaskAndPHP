<?php
class FlaskRequests {
  public function __construct() {
    $this->port = 5000;
  }

  public function getRequest($endpoint) {
    $url = sprintf("http://localhost:%d/%s", $this->port, $endpoint);
    return file_get_contents($url);
  }

  public function postRequest($endpoint, $data) {
    $fieldsString = json_encode($data);
    
    $url = sprintf("http://localhost:%d/%s", $this->port, $endpoint);
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fieldsString);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      "Content-Type: application/json",
      "Content-Length: " . strlen($fieldsString))
    );

    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
  }
}
