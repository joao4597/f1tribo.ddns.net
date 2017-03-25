<?php
  include ('config/init.php');
  include ('templates/header.php');
  include ('database/drivers.php');

  $drivers = getAllDriversByPoints();

  include ('templates/driver_standings.php');

  $drivers = getAllDrivers();

  include ('templates/list_drivers.php');

  include ('templates/footer.php');
?>
