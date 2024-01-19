<?php
namespace Bss\HelloWorld\Model;

use Bss\HelloWorld\Api\CustomApiInterface;

class CustomApi implements CustomApiInterface
{
    // sample data
    private $data = [
        1 => ['ID' => 1, 'Name' => 'Item 1', 'Class' => 'Class A'],
        2 => ['ID' => 2, 'Name' => 'Item 2', 'Class' => 'Class B'],
        3 => ['ID' => 3, 'Name' => 'Item 3', 'Class' => 'Class C'],
        4 => ['ID' => 4, 'Name' => 'Item 4', 'Class' => 'Class D'],
        5 => ['ID' => 5, 'Name' => 'Item 5', 'Class' => 'Class E'],
    ];

    // lay data
    public function getData($id)
    {
        return isset($this->data[$id]) ? $this->data[$id] : [];
    }
}