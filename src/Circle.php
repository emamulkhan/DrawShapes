<?php
    namespace EmamulKhan\DrawShapes;
   /**
    * Class for drawing a circle
    * @category   Shapes
    * @package    drawShapes
    * @author     Emamul Khan <emamul.khan@gmail.com>
    * @version    Release: 1.0.0
    * @since      Class available since Release 1.0.0
    */
   class Circle extends Drawing {
         var $radius;

         // constructor
         function __construct($x, $y, $r) {
            $this->Drawing($x, $y);
            $this->setRadius($r);
         }

         // accessors for radius
         function getRadius() {
            return $this->radius;
         }
         function setRadius($newR) {
            $this->radius = $newR;
         }

         // overriding abstract method to print the drawing details of circle
         function draw() {
            echo "Circle(" . $this->getX() . "," . $this->getY() .
               ") size=" . $this->getRadius() ."\n";
         }
   }
?>