<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-card-4">
  <div class="w3-container w3-brown">
   
  </div>
  <form class="w3-container" action="UploadProduct" method="POST"  enctype="multipart/form-data">
    @csrf
    <p>      
    <label class="w3-text-brown"><b>Enter Your Product Name</b></label>
    <input class="w3-input w3-border w3-sand" name="Productname" type="text"></p>
    <p>      
    <label class="w3-text-brown"><b>Enter Your Product Image</b></label>
    <input class="w3-input w3-border w3-sand" name="Product_image" type="file"></p>
    <p>      
        <label class="w3-text-brown"><b>Enter Your Product Price</b></label>
        <input class="w3-input w3-border w3-sand" name="Product_price" type="text"></p>
   
    <button class="w3-btn w3-brown">Upload Product</button></p>
  </form>
</div>

</body>
</html> 