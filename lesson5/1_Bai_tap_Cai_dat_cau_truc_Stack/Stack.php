<?php
class Stack
{
    private $stack;
    private $limit;

    public function __construct($limit = 10)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($item)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            throw new OverflowException("Stack is full");
        }

        return "Pushed: $item";
    }

    public function pop()
    {
        if (!$this->isEmpty()) {
            return array_shift($this->stack);
        } else {
            throw new UnderflowException("Stack is empty");
        }
    }

    public function top()
    {
        if (!$this->isEmpty()) {
            return $this->stack[0];
        } else {
            return null;
        }
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }
}

?>