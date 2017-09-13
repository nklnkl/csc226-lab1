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
  $inventory = [];
  array_push($inventory, new Item("KONG Plush Rosie the Rhino Squeaker Dog Toy",
  7.50, 0, null, 0));
  array_push($inventory, new Item("KONG Squirrel Cat Nip Toy",
  7.50, 0, null, 0));
  array_push($inventory, new Item("Blue Buffalo, Blue Wilderness Indoor Adult Cat Food",
  33.99, 1, "Chicken", 1));
  array_push($inventory, new Item("Nutro Max Kitten Food",
  24.50, 1, "Roasted Chicken", 1));
  array_push($inventory, new Item("Blue Buffalo, Blue Life Protection Formula Puppy Food",
  45.99, 1, "Chicken & Brown Rice", 1));
  array_push($inventory, new Item("Eukanuba Adult Maintenance Dog Food",
  33.99, 1, "Lamb & Rice", 1));
  array_push($inventory, new Item("Cesar Savory Delights Adult Dog Food",
  0.75, 2, null, 2));
  array_push($inventory, new Item("Fancy Feast Classic Adult Cat Food",
  0.59, 2, null, 2));
?>
