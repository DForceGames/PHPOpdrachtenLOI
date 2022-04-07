<?php
    session_start();
?>
<div class="container">
	<ul class="nav nav-pills">
	  <li class="nav-item">
	    <a class="nav-link" href="ledenlijst.php">Ledenlijst</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="postcode.php">Postcode</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="schoon.php">Schoon</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="teams.php">Teams</a>
	  </li>
          <li class="nav-item">
            <?php
                if(!isset($_SESSION['uname'])){
                    echo '<div class="container">
                <form method="post" action="login.php">
                    <div id="div_login">
                            Login
                            <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
                            <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
                            <input type="submit" value="Submit" name="but_submit" id="but_submit" />
                    </div>
                </form>
            </div>';
                }
            ?>
	  </li>
	</ul>
</div>