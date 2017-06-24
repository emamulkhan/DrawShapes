<?php
   namespace EmamulKhan\DrawShapes;

   /**
    * Class for drawing a rectangle
    * @category   Shapes
    * @package    drawShapes
    * @author     Emamul Khan <emamul.khan@gmail.com>
    * @version    Release: 1.0.0
    * @since      Class available since Release 1.0.0
    */
   class Rectangle extends Drawing {
         var $rectangleWidth;
         var $rectangleHeight;

         // constructor of class
         function __construct($x, $y, $width, $height) {
            $this->Drawing($x, $y);
            $this->setWidth($width);
            $this->setHeight($height);
         }

         // accessors for rectangle attributes
         function getWidth() {
            return $this->rectangleWidth;
         }
         function getHeight() {
            return $this->rectangleHeight;
         }
         function setWidth($w) {
            $this->rectangleWidth = $w;
         }
         function setHeight($h) {
            $this->rectangleHeight = $h;
         }

         // overriding abstract method to print the drawing details of rectangle
         function draw() {
            echo "Rectangle(" . $this->getX() . "," . $this->getY() .
               ") width=" . $this->getWidth() . " height=" . $this->getHeight() . "\n";
         }
   }
?>