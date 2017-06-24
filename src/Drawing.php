<?php
    namespace EmamulKhan\DrawShapes;

    /**
    * Class for getting and setting attributes of various drawing widgets
    * @category   Shapes
    * @package    drawShapes
    * @author     Emamul Khan <emamul.khan@gmail.com>
    * @version    Release: 1.0.0
    * @since      Class available since Release 1.0.0
    */
    class Drawing {
        var $x;
        var $y;

        // constructor
        function Drawing($drawX, $drawY) {
           $this->setX($drawX);
           $this->setY($drawY);
        }

        // accessors for x & y coordinates
        function getX() {
           return $this->x;
        }
        function getY() {
           return $this->y;
        }
        function setX($newx) {
           $this->x = $newx;
        }
        function setY($newy) {
           $this->y = $newy;
        }


        // abstract method to override
        function draw() {
        }
    }
?>