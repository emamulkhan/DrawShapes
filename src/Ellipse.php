<?php
    namespace EmamulKhan\DrawShapes;
   /**
    * Class for drawing a ellipse
    * @category   Shapes
    * @package    drawShapes
    * @author     Emamul Khan <emamul.khan@gmail.com>
    * @version    Release: 1.0.0
    * @since      Class available since Release 1.0.0
    */
   class Ellipse extends Drawing {
         var $horDiameter;
         var $verDiameter;

         // constructor
         function __construct($x, $y, $hd, $vd) {
            $this->Drawing($x, $y);
            $this->setHorizontalDiameter($hd);
            $this->setVerticalDiameter($vd);
         }

         // accessors for ellipse attributes
         function getHorizontalDiameter() {
            return $this->horDiameter;
         }
         function getVerticalDiameter() {
            return $this->verDiameter;
         }
         function setHorizontalDiameter($horD) {
            $this->horDiameter = $horD;
         }
         function setVerticalDiameter($verD) {
            $this->verDiameter = $verD;
         }

         // overriding abstract method to print the drawing details of ellipse
         function draw() {
            echo "Ellipse(" . $this->getX() . "," . $this->getY() .
               ") diameterH=" . $this->getHorizontalDiameter() . " diameterV=" . $this->getVerticalDiameter() . "\n";
         }
   }
?>