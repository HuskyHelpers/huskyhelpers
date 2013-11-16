 <div class="navbar navbar-default">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Husky Helpers</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li <?php if($_SERVER['PHP_SELF'] == "/index.php") { ?>class="active"<?php } ?>><a href="/">Home</a></li>
        <li <?php if($_SERVER['PHP_SELF'] == "/volprefernces.php") { ?>class="active"<?php } ?>><a href="/volpreferences.php">Volunteer Preferences</a></li>
        <li <?php if($_SERVER['PHP_SELF'] == "/eventlist.php") { ?>class="active"<?php } ?>><a href="/eventlist.php">Event List</a></li>
        <li <?php if($_SERVER['PHP_SELF'] == "/evententry.php") { ?>class="active"<?php } ?>><a href="/evententry.php">Event Entry</a></li>
        <li <?php if($_SERVER['PHP_SELF'] == "/orgentry.php") { ?>class="active"<?php } ?>><a href="/orgentry.php">Organization Sign In / Sign up</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if(isset($_SESSION['user'])) { ?>
            <p class="navbar-text">Welcome, <? echo $_SESSION['user']; ?> [<a href="/logout.php">logout</a>]</p>
        <? } else { ?>
        <li><a href="/login.php">Login with NetID</a></li>
        <?php } ?>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
