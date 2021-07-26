
<!DOCTYPE html>
<html>
<head>
<title>Laravel 5.8 Generate QR Code Tutorial with Example - W3Adda</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h2>Laravel 5.8 Generate QR Code Tutorial with Example - W3Adda</h2>
<br>
<br><br><br><br><br><br><br>
{!! QrCode::size(200)->backgroundColor(255,55,0)->generate('W3Adda Laravel Tutorial'); !!}

    <br>
    <br><br><br>
    {!! QrCode::phoneNumber('123-456-7890'); !!}
    <br><br><br>

    {!! QrCode::SMS('01019658033', 'my phone number'); !!}
<br><br><br><br><br><br>

<br>
    <div class="row">
 <div class="col-md-4">
     <h5>Simple Qr Code With String</h5>
    {!! QrCode::size(200)->generate('W3Adda Laravel Tutorial'); !!}
 </div>
 
 <div class="col-md-4">
 <h5>Qr Code With Color</h5>
     {!! QrCode::size(200)->backgroundColor(255,55,0)->generate('W3Adda Laravel Tutorial'); !!}
 
 </div>
   {!! QrCode::geo(15.3544, 75.787980); !!}
 </div>
 <br><br>
 <div>
 {!! QrCode::size(250)->generate('https://www.w3schools.com/html/'); !!}

 <br><br><br><br>
 {!! QrCode::wiFi([
	'encryption' => 'WPA/WEP',
	'ssid' => 'SSID of the network',
	'password' => 'Password of the network',
	'hidden' => 'Whether the network is a hidden SSID or not.'
]); !!}

</div>
 
</body>
 
</html>




