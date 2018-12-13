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
    <h1>Find Blocked Domain In Lists</h1>
</div>
<!-- Domain Input -->
<div class="form-group input-group">
    <input id="domain" type="text" class="form-control" placeholder="Domain to look for (example.com or sub.example.com)">
	<input id="quiet" type="hidden" value="no">
    <span class="input-group-btn">
        <button id="btnSearch" class="btn btn-default" type="button">Search partial match</button>
        <button id="btnSearchExact" class="btn btn-default" type="button">Search exact match</button>
    </span>
</div>

<pre id="output" style="width: 100%; height: 100%;" hidden="true"></pre>

<?php
    require "scripts/x-filter/php/footer.php";
?>


<script src="scripts/x-filter/js/queryads.js"></script>
