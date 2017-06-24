<?php
    namespace EmamulKhan\DrawShapes;
   /**
    * Class for drawing a TextBox with a Text inside
    * @category   Shapes
    * @package    drawShapes
    * @author     Emamul Khan <emamul.khan@gmail.com>
    * @version    Release: 1.0.0
    * @since      Class available since Release 1.0.0
    */
   class TextBox extends Drawing {
         var $boxWidth;
         var $boxHeight;
         var $boxText;

         // constructor of class
         function __construct($x, $y, $width, $height, $text) {
            $this->Drawing($x, $y);
            $this->setWidth($width);
            $this->setHeight($height);
            $this->setText($text);
         }

         // accessors for width & height attributes
         function getWidth() {
            return $this->boxWidth;
         }
         function getHeight() {
            return $this->boxHeight;
         }
         function getText() {
            return $this->boxText;
         }
         function setWidth($w) {
            $this->boxWidth = $w;
         }
         function setHeight($h) {
            $this->boxHeight = $h;
         }
         function setText($txt) {
            $this->boxText = $txt;
         }

         // overriding abstract method to print the drawing details of TextBox
         function draw() {
            echo "TextBox(" . $this->getX() . "," . $this->getY() .
               ") width=" . $this->getWidth() . " height=" . $this->getHeight() . " Text=" . $this->getText() . "\n\n";
         }
   }
?>