<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>
</head>
<link rel="stylesheet" type="text/css" href="dashboard.css">
<body>
<div id="wholepage">
	<div id="left-menu">
		<img src="images/wq.png" id="logo" />
		<img src="images/Color Overlay.png" id="overlay" />
		<img src="images/photo1.png" id="user" />
		<hr>
		<img src="images/menu.png" id="menu" />	
		<div class="tab">
  	<button class="tablinks" onclick="openTab(event, 'Dashboard')" id="defaultOpen"><img src="images/dashboard icon.png" class="tab-icon" />Dashboard</button>
  	<button class="tablinks" onclick="openTab(event, 'Wallet')"><img src="images/credit-card.png" class="tab-icon" />Wallet</button>
  	<button class="tablinks" onclick="openTab(event, 'Tokens')"><img src="images/spider-web.png" class="tab-icon" />Buy Tokens</button>
  	<button class="tablinks" onclick="openTab(event, 'Transactions')"><img src="images/browser.png" class="tab-icon" />Transactions</button>
	</div>
	<p id="copyright">Workquest.co 2019. All rights reserved</p>
	</div>
	<div id="right-menu">
		<div id="Dashboard" class="tabcontent">
 <div id="dashboard-head" class="header"><p id="header-text">DASHBOARD</p></div>
 <div id="user-input"><img src="images/user.png" id="user-logo" /><p id="user-name"><?php echo $_POST["name"]; ?></p></div>
 <div class="dropdown">
 <a class="dropbtn" onclick="fdropdown()"><img src="images/arrow.png" id="arrow" /></a>
<div class="dropdown-content1" id="Dropdwn">
    <a class="tablinks" onclick="openTab(event, 'Profile')" id="profile-link"><div id="droplink">Profile</div></a>
    <a href="#"><div id="droplink">Logout</div></a>
</div>
</div>
 <div class="dash-box" id="box1"><p id="box-text">TOKEN BALANCE</p><img src="images/cloud.png" id="box-image1" /></div>
 <div class="dash-box" id="box2"><p id="box-text">ETH BALANCE</p><img src="images/blockchain.png" id="box-image2" /></div>
 <div class="dash-box" id="box3"><p id="box-text">TOKEN PER ETH</p><img src="images/eth.png" id="box-image3" /></div>
 <div class="dash-box" id="box4"><p id="box-text">TOKEN SOLD</p><img src="images/distribution.png" id="box-image4" /></div>
 <div id="ico-start"><img src="images/coin.png" id="coin" /><p id="ico-text">ICO WILL BE STARTED IN</p>
 	<div id="exbox1"></div><p id="time1">DAYS</p>
 	<div id="exbox2"></div><p id="time2">HOURS</p>
 	<div id="exbox3"></div><p id="time3">MINUTES</p>
 	<div id="exbox4"></div><p id="time4">SECONDS</p>
 </div>
</div>

<div id="Wallet" class="tabcontent">
   <div id="wallet-head" class="header"><p id="header-text">WALLET</p></div>
   <div id="user-input"><img src="images/user.png" id="user-logo" /><p id="user-name"><?php echo $_POST["name"]; ?></p></div>
   <div class="dropdown">
 <a class="dropbtn" onclick="fdropdown2()"><img src="images/arrow.png" id="arrow" /></a>
<div class="dropdown-content2" id="Dropdwn2">
    <a class="tablinks" onclick="openTab(event, 'Profile')" id="profile-link"><div id="droplink">Profile</div></a>
    <a href="#"><div id="droplink">Logout</div></a>
</div>
</div>
 <div class="wall-box" id="wallbox1"><p id="box-text">TOKEN BALANCE</p><img src="images/cloud.png" id="wallbox-image1" /></div>
 <div class="wall-box" id="wallbox2"><p id="box-text">ETH BALANCE</p><img src="images/blockchain.png" id="wallbox-image2" /></div>
 <div class="wall-box" id="wallbox3"><p id="box-text">TOKEN PER ETH</p><img src="images/eth.png" id="wallbox-image3" /></div>
 <div class="wall-box" id="wallbox4"><p id="box-text">TOKEN SOLD</p><img src="images/distribution.png" id="wallbox-image4" /></div>
 <div id="left-fill" class="fill">
 		<p id="fill-text1">SEND ETH</p>
 		<label for="email"><p id="mediumletters">TO ADDRESS</p></label>
      <input type="text" placeholder="" name="address" required />

      <label for="amount"><p id="mediumletters">AMOUNT IN ETHEREUM ( ALL: 0.000 TC )</p></label>
      <input type="text" placeholder="" name="amount" required />
      <button type="submit" class="btn" id="withdrawbtn">WITHDRAW FROM ETH WALLET</button></div>
    <div id="right-fill" class="fill">
 		<p id="fill-text2">SEND TOKEN</p>
 		<label for="email"><p id="mediumletters">TO ADDRESS</p></label>
      <input type="text" placeholder="" name="address" required />

      <label for="amount"><p id="mediumletters">AMOUNT IN WRC COIN ( ALL: 0.000 TC )</p></label>
      <input type="text" placeholder="" name="amount" required />
      <button type="submit" class="btn" id="tokenbtn">WITHDRAW FROM TOKEN</button></div>  
</div>

<div id="Tokens" class="tabcontent">
	<div id="buy-head" class="header"><p id="header-text">BUY TOKEN</p></div>
  <div id="user-input3"><img src="images/user.png" id="user-logo" /><p id="user-name3"><?php echo $_POST["name"]; ?></p></div>
  <div class="dropdown">
 <a class="dropbtn" onclick="fdropdown3()"><img src="images/arrow.png" id="arrow3" /></a>
<div class="dropdown-content3" id="Dropdwn3">
    <a class="tablinks" onclick="openTab(event, 'Profile')" id="profile-link"><div id="droplink">Profile</div></a>
    <a href="./index.html"><div id="droplink">Logout</div></a>
</div>
</div>
  <div id="center-fill" class="fill">
 		<p id="fill-text2">ETH: 0</p>
 		<label for="eth"><p id="mediumletters">ETHEREUM</p></label>
      <input type="text" placeholder="" name="address" required />

      <label for="coin"><p id="mediumletters">WRC COIN ( ALL: 0.000 TC )</p></label>
      <input type="text" placeholder="" name="amount" required />
      <button type="submit" class="btn" id="buybtn">ICO NOT STARTED YET</button></div>
</div>

<div id="Transactions" class="tabcontent">
  <div id="trans-head" class="header"><p id="header-text">TRANSACTIONS</p></div>
  <div id="user-input"><img src="images/user.png" id="user-logo" /><p id="user-name"><?php echo $_POST["name"]; ?></p></div>
  <div class="dropdown">
 <a class="dropbtn" onclick="fdropdown4()"><img src="images/arrow.png" id="arrow" /></a>
<div class="dropdown-content4" id="Dropdwn4">
    <a class="tablinks" onclick="openTab(event, 'Profile')" id="profile-link"><div id="droplink">Profile</div></a>
    <a href="./index.html"><div id="droplink">Logout</div></a>
</div>
</div>
  <table id="trans-table">
  <tr>
    <th>S.NO.</th>
    <th>ADDRESS</th>
    <th>ETH/WRC</th>
    <th>AMOUNT</th>
    <th>HEX</th>
    <th>TIME</th>
  </tr>
  <tr>
    <td><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></td>
    <td><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></td>
    <td><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></td>
    <td><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></td>
    <td><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></td>
    <td><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></td>
  </tr>
</table>
</div>

<div id="Profile" class="tabcontent">
  <div id="profile-head" class="header"><p id="header-text">PROFILE</p></div>
  <div id="user-input4"><img src="images/user.png" id="user-logo" /><p id="user-name4"><?php echo $_POST["name"]; ?></p></div>
  <div class="dropdown">
 <a class="dropbtn" onclick="fdropdown5()"><img src="images/arrow.png" id="arrow4" /></a>
<div class="dropdown-content5" id="Dropdwn5">
    <a class="tablinks" onclick="openTab(event, 'Profile')" id="profile-link"><div id="droplink">Profile</div></a>
    <a href="./index.html"><div id="droplink">Logout</div></a>
</div>
</div>
  <div id="center-fill2" class="fill">
    <p id="fill-text2">PROFILE</p>
    <label for="name"><p id="mediumletters">USER NAME</p></label>
      <input type="text2" placeholder="" name="name" required />

      <label for="mail"><p id="mediumletters">MAIL</p></label>
      <input type="text2" placeholder="" name="mail" required />
      <button type="submit" class="btn" id="updatebtn">UPDATE</button></div>

      <div id="center-fill3" class="fill">
    <p id="fill-text2">PROFILE</p>
    <label for="currpass"><p id="mediumletters">CURRENT PASSWORD</p></label>
      <input type="text2" placeholder="" name="cpass" required />

      <label for="newpass"><p id="mediumletters">ENTER NEW PASSWORD</p></label>
      <input type="text2" placeholder="" name="npass" required />
      <label for="confirm"><p id="mediumletters">CONFIRM NEW PASSWORD</p></label>
      <input type="text2" placeholder="" name="cnfnpass" required />
      <button type="submit" class="btn" id="updatebtn2">SAVE CHANGES</button></div>
</div>

	</div>
</div>
<script>

function openTab(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();

function fdropdown() {
  document.getElementById("Dropdwn").classList.toggle("showmenu");
}

function fdropdown2() {
  document.getElementById("Dropdwn2").classList.toggle("showmenu"); 
}

function fdropdown3() {
  document.getElementById("Dropdwn3").classList.toggle("showmenu");  
}

function fdropdown4() {
  document.getElementById("Dropdwn4").classList.toggle("showmenu"); 
}

function fdropdown5() {
  document.getElementById("Dropdwn5").classList.toggle("showmenu"); 
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("Dropdwn");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>
</body>
</html>
