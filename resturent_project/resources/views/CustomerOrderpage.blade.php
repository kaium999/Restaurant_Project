<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-card-4">
  <div class="w3-container w3-brown">
   
  </div>
  <form class="w3-container" action="OrderConfirm" method="POST"  enctype="multipart/form-data">
    @csrf
    <p>      
    <label class="w3-text-brown"><b>Enter Your  Name</b></label>
    <input class="w3-input w3-border w3-sand" name="customer_name" type="text"></p>
    <p>      
    <label class="w3-text-brown"><b>Enter Your Email</b></label>
    <input class="w3-input w3-border w3-sand" name="customer_email" type="text"></p>
    <p>      
        <label class="w3-text-brown"><b>Enter Your Mobile Number</b></label>
        <input class="w3-input w3-border w3-sand" name="mobile_number" type="text"></p>
    <p>      
        <label class="w3-text-brown"><b>Enter Your Quantity</b></label>
        <input class="w3-input w3-border w3-sand" name="Quantity" type="text"></p>
   
        <p>      
            <label class="w3-text-brown"><b>Enter Your order Date</b></label>
            <input class="w3-input w3-border w3-sand" name="order_date" type="text" placeholder="YYYY-MM-DD"></p>
        <p>      
            <label class="w3-text-brown"><b>Enter Your Time</b></label>
            <input class="w3-input w3-border w3-sand" name="time" type="text" ></p>
          

    <button class="w3-btn w3-brown">Confirm</button></p>
  </form>
</div>

</body>
</html> 



