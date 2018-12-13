<?php /* 
*    X-filter: A filter for Internet advertisements
*    (c) 2017 X-filter, LLC (https://x-filter.net)
*    Network-wide ad blocking via your own hardware.
*
*    This file is copyright under the latest version of the EUPL.
*    Please see LICENSE file for your rights under this license. */
    require "scripts/x-filter/php/header.php";
?>
<!-- Title -->
<div class="page-header">
    <h1>Output the last lines of the xfilter-FTL.log file (live)</h1>
</div>

<div class="checkbox"><label><input type="checkbox" name="active" checked id="chk1"> Automatic scrolling on update</label></div>
<pre id="output" style="width: 100%; height: 100%; max-height:650px; overflow-y:scroll;"></pre>
<div class="checkbox"><label><input type="checkbox" name="active" checked id="chk2"> Automatic scrolling on update</label></div>

<?php
    require "scripts/x-filter/php/footer.php";
?>


<script src="scripts/x-filter/js/taillog-FTL.js"></script>
