<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<?php include './header.php'; ?>
    <?php 
      $sql='SELECT * FROM feedback';
      $result=mysqli_query($connection,$sql);
      $feed=mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>
      <h1>FEEDBACK</h1>
      <?php if(empty($feed)): ?>
          <p class="lead mt3"> There is no feedback</p>
      <?php endif; ?>

      <?php foreach($feed as $item): ?>

        <div class="card my-3">
          <div class="card my-3">

            <?php echo $item['content']; ?>
            <div>
              <?php echo 'by, ' . $item['name']?> 
            </div>

            <div>
              <?php echo 'email: ' . $item['email']?>
              <br/>
            </div>
            <br/>
          </div>
        </div>
      <?php endforeach;?>
    </body>
</html>