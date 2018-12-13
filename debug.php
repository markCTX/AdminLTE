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
    <h1>Generate debug log</h1>
</div>

<p><input type="checkbox" id="upload" checked> Upload debug log and provide token once finished</p>
<p>Once you click this button a debug log will be generated and can automatically be uploaded if we detect a working internet connection.</p>
<button class="btn btn-lg btn-primary btn-block" id="debugBtn">Generate debug log</button>
<pre id="output" style="width: 100%; height: 100%;" hidden="true"></pre>

<?php
    require "scripts/x-filter/php/footer.php";
?>


<script src="scripts/x-filter/js/debug.js"></script>
