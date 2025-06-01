<?php 

class Product
{
    public string $name;
    public int $price;
    public int $quantity;

    function __construct(string $name, int $price, int $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    function calculateTotalPrice(): int
    {
        return $this->price * $this->quantity;
    }
    function getName(){
        return $this->name;
    }
    function getPrice(){

    }
    function setName($newName){
        $this->name = $newName;
    }
    function setPrice(){

    }
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $productName = $_POST['productName'] ?? "";
    $price = $_POST["price"] ?? 0;
    $quantity = $_POST["quantity"] ?? 0;
}

$product = new Product($productName, $price, $quantity);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</head>
<body>
<header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        </ul>
    </header>

<table class="table table-bordered w-75 mx-auto">
  <thead>
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">Price (IDR)</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total Price (IDR)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?= $product->name?></th>
      <td><?= number_format($product->price, 0, ",", ".")?></td>
      <td><?= number_format($product->quantity, 0,",", '.')?></td>
      <td><?= number_format($product->calculateTotalPrice(), 0, ',', '.')?></td>
    </tr>
  </tbody>
</table>
    
</body>
</html>