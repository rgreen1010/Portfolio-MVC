<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing</title>
</head>
<body>
    <h1>Test page: <?php //echo __FILE__; ?></h1>
</body>
</html> -->


<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="jumbotron jumbotron-flud text-center">
    <div class="container">
    <h1 class="display-3"><?php echo $data['title']; ?></h1>
    <p class="lead"><?php echo $data['description']; ?></p>
    </div>
  </div> 
<?php require APPROOT . '/views/inc/footer.php'; ?>
