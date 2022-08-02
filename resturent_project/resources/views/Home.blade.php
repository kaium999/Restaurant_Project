<!DOCTYPE html>
<html>
<head>
<style>
body {
  margin: 0;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #04AA6D;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">Profile</a></li>
  <li><a href="UploadProductpage">Upload Product</a></li>
  <li><a href="AllproductShow">See Product Page</a></li>
  <li><a href="AdminSeeReservation">See Reservation Page</a></li>
  <li><a href="productOrder">See Order Page</a></li>
  <li><a href="tableshow">Table Show</a></li>
  <li><a href="#">{{session('username')}}</a></li>
  <li><a href="{{"edit/" .session('logid')}}">Edit Profile</a></li>
  <li><a href="aplogOut">Logout</a></li>

</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h2>Fixed Full-height Side Nav</h2>
  <h3>Try to scroll this area, and see how the sidenav sticks to the page</h3>
  <p>Notice that this div element has a left margin of 25%. This is because the side navigation is set to 25% width. If you remove the margin, the sidenav will overlay/sit on top of this div.</p>
  <p>Also notice that we have set overflow:auto to sidenav. This will add a scrollbar when the sidenav is too long (for example if it has over 50 links inside of it).</p>
 
</div>

</body>
</html>
