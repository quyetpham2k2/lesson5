<?php
class Queue
{
    private $queue;

    public function __construct()
    {
        $this->queue = [];
    }

    public function isEmpty()
    {
        return empty($this->queue);
    }

    public function enqueue($value)
    {
        $this->queue[] = $value;
        return "Enqueued: " . $value;
    }

    public function dequeue()
    {
        if (!$this->isEmpty()) {
            return array_shift($this->queue); // Xóa và trả về phần tử đầu tiên
        } else {
            throw new UnderflowException("Queue is empty");
        }
    }
}
?>