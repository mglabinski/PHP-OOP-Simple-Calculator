<?php
class Calculator
{
  private $num1, $num2, $operator, $output;
  public function setNumber($num1, $num2) {
    $this -> num1 = $num1;
    $this -> num2 = $num2;
  }
  public function setOperator($operator) {
    $this -> operator = $operator;
  }
  public function calculate() {
    switch ($this->operator) {
      case '+':
        $this ->output = $this-> num1 + $this -> num2;
        break;
      case '-':
        $this ->output = $this-> num1 - $this -> num2;
        break;
      case '*':
        $this ->output = $this-> num1 * $this -> num2;
        break;
      case '/':
        $this ->output = $this-> num1 / $this -> num2;
        break;
      default:
        $this ->output = "Error!";
    }
    // if($this->operator == "+")
    //   $this ->output = $this-> num1 + $this -> num2;
    // elseif($this ->operator == "-")
    //   $this ->output = $this-> num1 - $this -> num2;
    // elseif($this ->operator == "*")
    //   $this ->output = $this-> num1 * $this -> num2;
    // elseif($this ->operator == "/")
    //   $this ->output = $this-> num1 / $this -> num2;
    // else
    //   $this ->output = "Error!";
  }
  public function getOutput() {
    return $this->output; //output is the result
  }
}

 ?>
