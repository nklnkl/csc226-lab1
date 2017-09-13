<?php
  require 'objects/customer.php';
  require 'objects/item.php';
  require 'objects/order.php';

  /*
    Generate store inventory.
    0: KONG Plush Rosie the Rhino Squeaker Dog Toy (Retail Price: $7.50)
    1: KONG Squirrel Cat Nip Toy (Retail Price: $7.50)
    2: Blue Buffalo, Blue Wilderness Indoor Adult Cat Food, Dry, Chicken, 11 Pounds (Retail Price: $33.99)
    3: Nutro Max Kitten Food, Dry, Roasted Chicken, 16 Pounds (Retail Price: $24.50)
    4: Blue Buffalo, Blue Life Protection Formula Puppy Food, Dry, Chicken & Brown Rice, 30 Pounds (Retail Price: $45.99)
    5: Eukanuba Adult Maintenance Dog Food, Dry, Lamb & Rice, 30 Pounds (Retail Price: $33.99)
    6: Cesar Savory Delights Adult Dog Food, Wet, 1 Can (Retail Price: $0.75)
    7: Fancy Feast Classic Adult Cat Food, Wet, 1 Can (Retail Price: $0.59)
  */
  $inventory = array();
  array_push($inventory, new Item("KONG Plush Rosie the Rhino Squeaker Dog Toy",
  7.50, 0, null, 0));
  array_push($inventory, new Item("KONG Squirrel Cat Nip Toy",
  7.50, 0, null, 0));
  array_push($inventory, new Item("Blue Buffalo, Blue Wilderness Indoor Adult Cat Food, 11 pounds",
  33.99, 1, "Chicken", 1));
  array_push($inventory, new Item("Nutro Max Kitten Food, 16 pounds",
  24.50, 1, "Roasted Chicken", 1));
  array_push($inventory, new Item("Blue Buffalo, Blue Life Protection Formula Puppy Food, 30 pounds",
  45.99, 1, "Chicken & Brown Rice", 1));
  array_push($inventory, new Item("Eukanuba Adult Maintenance Dog Food, 30 pounds",
  33.99, 1, "Lamb & Rice", 1));
  array_push($inventory, new Item("Cesar Savory Delights Adult Dog Food, 1 can",
  0.75, 2, null, 2));
  array_push($inventory, new Item("Fancy Feast Classic Adult Cat Food, 1 can",
  0.59, 2, null, 2));
?>

<!DOCTYPE html>
<html>
  <head>
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="script.js"></script>
  </head>

  <body class="container-fluid">

    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Price</th>
          <th>Quantity</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($inventory as $item): ?>
          <tr>
            <td><? echo $item->getName();?></td>
            <td><? echo $item->getPriceString();?></td>
            <td>
              <input type="number" value="0" /> unit(s)
            </td>
          </tr>
        <?php endforeach;?>
      </tbody>
    </table>

    <section class="row">
      <form class="col-xs-12 col-md-6 col-lg-4 col-xl-2">
        <div class="radio">
          <label><input type="radio" name="customer">New customer</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="customer">Returning customer</label>
        </div>
        <div class="form-group">
          <label for="email">Email address:</label>
          <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password">
        </div>
        <div class="form-group">
          <label for="address">Address:</label>
          <input type="text" class="form-control" id="address">
        </div>
        <div class="form-group">
          <label for="city">City:</label>
          <input type="text" class="form-control" id="city">
        </div>
        <div class="form-group">
          <label for="state">State:</label>
          <input type="text" class="form-control" id="state">
        </div>
        <div class="form-group">
          <label for="zipcode">Zipcode:</label>
          <input type="text" class="form-control" id="zipcode">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </section>

  </body>
</html>
