<?php
require_once "design.php";
site_header("Home");
?>
<noscript>
<div class="red"><b>WARNING:</b> You don't have Javascript enabled! Please do not use this Web UI until you enable it; otherwise, you may end up with a corrupt XML file.</div>
<br />
</noscript>

Welcome to the Bell System Web <abbr title="User Interface">UI</abbr>. If this is the first time you've ever been to this site, go through the pages in the order they are listed in the menu to setup the bell system.
<br /><br />
<ul>
<li><b>Schedules</b> &mdash; Create schedules that ring the bell at certain times.</li>
<li><b>Calendar</b>  &mdash; Set when these schedules will be used.</li>
<li><b>Settings</b>  &mdash; Set when school starts/ends to enable the bell system.</li>
<li><b>Backup</b>    &mdash; Backup/restore the bell system configuration file.</li>
</ul>

<p>If you have any questions, you can consult the <a href="https://github.com/floft/BellSystem" target="_blank">documentation</a>.</p>
<?php site_footer(); ?>
