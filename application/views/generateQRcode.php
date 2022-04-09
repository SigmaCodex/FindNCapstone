<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate QR code</title>
</head>
<body>
<h1>Generate Find QR Code</h1>
    <?php if(isset($qr_image)){?>
        <img src="../assets/QrCodes/<?php echo $qr_image?>" alt="qrcode">
   <?php }?>
</body>
</html>