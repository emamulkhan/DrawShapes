<?php
   namespace EmamulKhan\DrawShapes;
   
   /**
    * Class for displaying the details of various drawing widgets
    * @category   Shapes
    * @package    drawShapes
    * @author     Emamul Khan <emamul.khan@gmail.com>
    * @version    Release: 1.0.0
    * @since      Class available since Release 1.0.0
    */
   class DrawShapes
   {
      
      public static function printData() {
         // set up an array with some shape instances
         $arrDrawing = array(
            new Rectangle(10, 20, 10, 4),
            new Square(15, 30, 35),
            new Ellipse(100, 150, 300, 200),
            new Circle(5, 5, 300),
            new TextBox(5, 5, 200, 100, '"sample text"'),
         );

         $heading = "\n----------------------------------------------------------------\n";
         $heading .= "Current Drawing\n";
         $heading .= "----------------------------------------------------------------\n";
         echo $heading;

         // iterating through drawing array
         for ($i = 0; $i < count($arrDrawing); $i++) {
            $arrDrawing[$i]->draw();
         }

         echo "----------------------------------------------------------------\n\n";
      }
   }
?>