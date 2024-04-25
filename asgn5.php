<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Shape Area Calculator</title>
<style>
  body {
    text-align: center;
  }
  form {
    display: inline-block;
    text-align: left;
  }
</style>
</head>
<body>
<h2>Select a Shape to Calculate Area:</h2>
<form method="post" action="">
  <input type="radio" name="shape" value="triangle"> Triangle<br>
  <input type="radio" name="shape" value="square"> Square<br>
  <input type="radio" name="shape" value="circle"> Circle<br><br>
  Enter dimensions:<br>
  Base/Width: <input type="text" name="base"><br>
  Height/Radius: <input type="text" name="height"><br>
  <input type="submit" name="submit" value="Calculate Area">
</form>

<?php
// Define the Shape class with a method to calculate area
class Shape {
  public function calculateArea() {
    return "Area calculation not implemented for generic shape.";
  }
}

// Define the Triangle class inheriting from Shape
class Triangle extends Shape {
  private $base;
  private $height;

  public function __construct($base, $height) {
    $this->base = $base;
    $this->height = $height;
  }

  public function calculateArea() {
    return 0.5 * $this->base * $this->height;
  }
}

// Define the Square class inheriting from Shape
class Square extends Shape {
  private $side;

  public function __construct($side) {
    $this->side = $side;
  }

  public function calculateArea() {
    return $this->side * $this->side;
  }
}

// Define the Circle class inheriting from Shape
class Circle extends Shape {
  private $radius;

  public function __construct($radius) {
    $this->radius = $radius;
  }

  public function calculateArea() {
    return pi() * $this->radius * $this->radius;
  }
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
  $shapeType = $_POST['shape'];
  $area = '';

  switch ($shapeType) {
    case 'triangle':
      $base = $_POST['base'];
      $height = $_POST['height'];
      $triangle = new Triangle($base, $height);
      $area = $triangle->calculateArea();
      break;
    case 'square':
      $side = $_POST['base']; // For a square, base and height are the same (side length)
      $square = new Square($side);
      $area = $square->calculateArea();
      break;
    case 'circle':
      $radius = $_POST['base']; // For a circle, base is the radius
      $circle = new Circle($radius);
      $area = $circle->calculateArea();
      break;
    default:
      $area = 'Please select a shape.';
  }

  echo "<br><strong>Area of selected shape:</strong> $area square units";
}
?>
</body>
</html>
