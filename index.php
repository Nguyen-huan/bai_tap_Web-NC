<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method = "POST">
  <label for="a">
      Nhập a: 
    </label>
    <input type="text" name = "a" id = "a" >
    <br> <br>
    <label for="b">
      Nhập b: 
    </label>
    <input type="text" name = "b" id = "b">
    <input type="submit" value = "Submit">
  </form>
  <h3>Giải phương trình ax + b = 0</h3>
 
</body>
</html>


<?php 

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    function getValue($value, $method, $dataType, $defaultVal)
    {
      $returnVal = $defaultVal;
      switch ($method) {
          case "POST":
              if (isset($_POST[$value])) {
                  $returnVal = $_POST[$value];
              }
              break;
          default: // GET / khac
              if (isset($_GET[$value])) {
                  $returnVal = $_GET[$value];
              }
              break;
      }
      switch ($dataType) {
        case "int":
            $returnVal = intval($returnVal);
            break;
        case "double":
            $returnVal = doubleval($returnVal);
            break;
        case "str":
            $returnVal = trim($returnVal);
            break;
        default:
            $returnVal = intval($returnVal);
            break;
      }
      return $returnVal;
    }
    
   
    $a = getValue("a", "POST", "double", "");
    $b = getValue("b", "POST", "double", "");
    var_dump($a, $b);
    if($a==0){
      if($b == 0){
        echo"<h2>Phương trình vô số nghiệm</h2>";
      }
      else{
        echo"<h2>Phương trình vô nghiệm</h2>";
      }
    }
    else{
      $c = round(-$b/$a, 3); 
      echo"<h2>Ngiệm của phương trình là    " .$c. "</h2>";
    }
  }
    
  echo"<h2>Hello Nguyễn Hữu Huân</h2>";

?>