<?php
    session_start();
    include('loginser.php');
?>
<style>
    img{
        width : 40%;
        height: auto;
        margin-left : 30%;
    }
    .form{
        border: solid black 2px; 
        width: 20%;
        padding-left: 40px;
        padding-top: 20px;
        padding-bottom: 20px;
        margin-left: 39%;
    }
    .button{
        margin-left: 0px;
    }
    .semua{
        text-align: center;
    }
</style>
<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="daftarpelajarbaru.php">Pendaftaran Pelajar Baharu</a></li>
		  </ul>
		  <br><br>
<img src="logo.jpg">
<div class="semua">
<h2>SISTEM KEHADIRAN PELAJAR</h2>
</div>
<div class="form">
<form id="login" name="login" method="post" action="login.php">
<table align="center" width="263">
    <tbody>
        <tr>
        <th align="left" height="36" scope="row">USERNAME</th>
        <th width="24">:          
        <th width="205" align="left" ><input type="text" name="user" id="user"></th>
        </tr>
        <tr>
        <th align="left" height="36" width="109" scope="row">PASSWORD</th>
        <th>:          
        <th align="left"><input type="password" name="pass" id="pass"></th>
        </tr>
        </tbody>
        </table>
    <div align="center">
        <span><strong><?php echo $error; ?></strong></span><br>
        <input type="submit" name="submit" class="button submit" value="Submit">

</div>
