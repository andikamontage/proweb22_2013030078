<?php 
session_start();

if(!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}
require 'functions.php';

$id = $_GET["id"];
$item = query("SELECT * FROM item WHERE id=$id");
?>

<!--  <!DOCTYPE html>
 <html>
 <head>
 	<title>Halaman Admin</title>
 </head>
 <body>
 <h1>Daftar Item</h1>
 <button onclick="window.print()">Print</button><br>

 <?php foreach ( $item as $itm ) : ?>

		<?= $itm['id']; ?>
		<?= $itm['barcode']; ?>
		<?= $itm['nama']; ?>
		<?= $itm['satuan']; ?>
	<?= $itm['harga']; ?>
	<?php endforeach; ?>

 </body>
 </html> -->

 <html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>Toko Andika Firmansyah</title>

  <style>

    .card1:hover {
      background:#00ffb6;
      border:1px solid #00ffb6;
    }

    .card1:hover .list-group-item{
      background:#00ffb6 !important
    }


    


    .card2:hover {
      background:#00C9FF;
      border:1px solid #00C9FF;
    }

    .card2:hover .list-group-item{
      background:#00C9FF !important
    }


    .card3:hover {
      background:#ff95e9;
      border:1px solid #ff95e9;
    }

    .card3:hover .list-group-item{
      background:#ff95e9 !important
    }


    .card:hover .btn-outline-dark{
      color:white;
      background:#212529;
    }

  </style>

</head>
<body>
 	
        <div class="col-lg-4" style="margin-left:30%" id="printableArea">
          <div class="card card3 center">
            <div class="card-body">
             
              <h5 class="card-title"><?= $itm['barcode']; ?></h5>
              <small class='text-muted'><?= $itm['id']; ?></small>
              <br><br>
              <span class="h2"><?= $itm['harga']; ?></span>/month
              <br><br>
              <div class="d-grid my-3">
                <button class="btn btn-outline-dark btn-block">Select</button>
              </div>
              <ul>
                <li><?= $itm['nama']; ?></li>
                <li><?= $itm['satuan']; ?></li>
                            
              </ul>
            </div>

            
          </div>
        </div>
      </div>    
    </div>
    <br>
    <!-- <button onclick="window.print()" style="margin-left: 45%">Print</button><br> -->
    <input type="button" onclick="printDiv('printableArea')" value="Print" style="margin-left: 45%"/>
  </body>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>
<script>
	function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>