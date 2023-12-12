<?php

interface Shape {
    public function drawings();

class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function draw() {
        echo "Drawing a circle with radius {$this->radius}\n";
        // Additional logic for drawing a circle
    }
}

class Square implements Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function draw() {
        echo "Drawing a square with side length {$this->side}\n";
        // Additional logic for drawing a square
    }
}

}

class Triangle implements Shape {
    private $base;
    private $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function draw() {
        echo "Drawing a triangle with base {$this->base} and height {$this->height}\n";
        // Additional logic for drawing a triangle
    }
}

class Rectangle implements Shape {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function draw() {
        echo "Drawing a rectangle with length {$this->length} and width {$this->width}\n";
        // Additional logic for drawing a rectangle
    }
}

// Example usage:

$shapes = [
    new Square(5),
    new Circle(3),
    new Triangle(4, 6),
    new Rectangle(5, 8),
];

foreach ($shapes as $shape) {
    $shape->draw();
}

?>
