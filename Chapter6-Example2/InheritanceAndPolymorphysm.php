<?php

class Shape
{
    protected string $name;
    protected float $area;
    protected float $circumference;
    function __construct(string $name){
        $this->name = $name;
    }

    function calculateArea(): float
    {
        $this->area = 0;
        return $this->area;
    }

    function calculateCircumference(): float
    {
        $this->circumference = 0;
        return $this->circumference;
    }
}

class Circle extends Shape{
    private float $radius;
    function __construct ($radius){
        parent::__construct(name: "Circle");
        $this->radius = $radius;
    }
    function calculateArea(): float{
        $this->area = 3.14 * $this->radius*$this->radius;
        return $this->area;
    }
    function calculateCircumference(): float{
        //pi*2*r
        $this->circumference = 3.14 * 2* $this->radius;
        return $this->circumference;
    }
}
    class Rectangle extends Shape{
        private float $side;
        function __construct ($side){
            parent::__construct(name: "Rectangle");
            $this->side = $side;
        }
        function calculateArea(): float{
            $this->area = $this->side*$this->side;
            return $this->area;
        }
        function calculateCircumference(): float{
            $this->circumference = 4 * $this->side;
            return $this->circumference;
        }
};

$circle = new Circle(10);
$rectangle = new Rectangle(5);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</head>

<body>
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom"> <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none"> <svg class="bi me-2" width="40" height="32" aria-hidden="true">
                <use xlink:href="#bootstrap"></use>
            </svg> <span class="fs-4">Area and Circumference Calculator</span> </a>
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        </ul>
    </header>
    <main>
        <h3 class="m-5">Circle with Radius of 10: <br> Area : <?= $circle->calculateArea()?> <br> Circumference :<?= $circle->calculateCircumference()?></h3>
        <h3 class="m-5">Rectangle with Side of 5: <br> Area : <?= $rectangle->calculateArea()?> <br> Circumference :<?= $rectangle->calculateCircumference()?></h3>
        <form>
            <!-- <select id="shape">
                <option value="">-- Select Shape --</option>
                <option value="rectangle">Rectangle</option>
                <option value="circle">Circle</option>
            </select>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button> -->
        </form>
    </main>

</body>

</html>