<?php
    class triangle
    {
      private $side1;
      private $side2;
      private $side3;

      function __construct($side1, $side2, $side3)
      {
            $this->side1 = $side1;
            $this->side2 = $side2;
            $this->side3 = $side3;
      }

      function isEquilateral()
      {
          if (($this->side1 === $this->side2) && ($this->side2 === $this->side3)) {
            return true;
          } else {
              return false;
          }
      }
    function setSide1($new_side1)
    {
      $this->side1 = $new_side1;
    }

    function getSide1()
    {
        return $this->side1;
    }

    function setSide2($new_side2)
    {
        $this->side2 = $new_side2;
    }

    function getSide2()
    {
        return $this->side2;
    }

    function setSide3($new_side3)
    {
        $this->side3 = $new_side3;
    }
    function getSide3()
    {
        return $this->side3;
    }

    }
?>
