<?php

namespace App;

class Calculator
{
  public string $num1;
  public string $num2;
  public string $options;

  public function __construct(string $num1, string $num2, string $options)
  {

    $this->num1 = $num1;
    $this->num2 = $num2;
    $this->options = $options;

  }
    

    public function start()
    {

        switch ($this->options) {

            case '+':
                $result = $this->num1 + $this->num2;
                break;
            case '-':
                $result = $this->num1 - $this->num2;
                break;
            case '*':
                $result = $this->num1 * $this->num2;
                break;
            case '/':
                $result = $this->num1 / $this->num2;
                break;
                
            default:
                return 'error';
                break;

        }

        return $result;

    }

}