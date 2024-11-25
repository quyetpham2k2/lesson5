<?php
class Stack
{
    private $stack;

    public function __construct()
    {
        $this->stack = [];
    }


    public function push($item)
    {
        array_unshift($this->stack, $item);
    }


    public function pop()
    {
        if (!$this->isEmpty()) {
            return array_shift($this->stack);
        } else {
            throw new UnderflowException("Stack is empty");
        }
    }


    public function isEmpty()
    {
        return empty($this->stack);
    }
}
?>