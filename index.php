<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
class Rectangle
{
    public $width;
    public $height;
    public function __construct($width,$height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function getArea(){
        return $this->height * $this->width;
    }
    public function getPerimeter(){
        return ($this->width + $this->height) * 2;
    }
    public function display(){
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}
$width  = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);
echo $rectangle->display(). '<br>';
echo 'Area : ' . $rectangle->getArea() . '<br>';
echo 'Perimeter : ' . $rectangle->getPerimeter()
?>
</body>
</html>