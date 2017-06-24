<?php
   namespace EmamulKhan\DrawShapes;
   /**
    * Class for drawing a square
    * @category   Shapes
    * @package    drawShapes
    * @author     Emamul Khan <emamul.khan@gmail.com>
    * @version    Release: 1.0.0
    * @since      Class available since Release 1.0.0
    */
   class Square extends Drawing {
         var $width;

         // constructor
         function __construct($x, $y, $w) {
            $this->Drawing($x, $y);
            $this->setWidth($w);
         }

         // accessors for square attribute
         function getWidth() {
            return $this->width;
         }
         function setWidth($newWidth) {
            $this->width = $newWidth;
         }

         // overriding abstract method to print the drawing details of square
         function draw() {
            echo "Square(" . $this->getX() . "," . $this->getY() .
               ") size=" . $this->getWidth() ."\n";
         }
   }
?>