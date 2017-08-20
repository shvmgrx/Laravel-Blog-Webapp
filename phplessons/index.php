<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<form>
  <input type="text" name="num1" placeholder="Number 1">
  <input type="text" name="num2" placeholder="Number 2">
  <select name="Operator">
    <option>None</option>
    <option>Add</option>
    <option>Subtract</option>
    <option>Multiply</option>
    <option>Divide</option>
  </select>
  <br>
<button name="submit" value="submit" type="submit" name="button">Calculate</button>
</form>
The answer is:

<?php

if (isset($_GET['submit'])) {
  $result1=$_GET['num1'];
  $result2=$_GET['num2'];
  $operator=$_GET['Operator'];

  switch ($operator) {
    case 'Add':
      echo $result1+$result2;
      break;
      case 'Subtract':
        echo $result1-$result2;
        break;
        case 'Multiply':
          echo $result1*$result2;
          break;
          case 'Divide':
            echo $result1/$result2;
            break;
            case 'None':
              echo "Nothing";
              break;

    default:
      echo "Invalid entry";
      break;
  }


}






 ?>

  </body>
</html>
