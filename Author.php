<?php

class Author
{
    public $name;
    public $description;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }

    public function show($type) {
        return array(
            'type' => $type,
            'name' => $this->name,
            'description' => $this->description
        );
    }
}