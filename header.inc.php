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
        <li <? if($_SERVER['PHP_SELF'] == "/index.php") { ?>class="active"<? } ?>><a href="/">Home</a></li>
        <li <? if($_SERVER['PHP_SELF'] == "/eventlist.php") { ?>class="active"<? } ?>><a href="/eventlist.php">Event List</a></li>
        <li <? if($_SERVER['PHP_SELF'] == "/evententry.php") { ?>class="active"<? } ?>><a href="/evententry.php">Event Entry</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
