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
    <h1>Update Gravity (list of blocked domains)</h1>
</div>

<!-- Alerts -->
<div id="alInfo" class="alert alert-info alert-dismissible fade in" role="alert" hidden="true">
    <button type="button" class="close" data-hide="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    Updating...
</div>
<div id="alSuccess" class="alert alert-success alert-dismissible fade in" role="alert" hidden="true">
    <button type="button" class="close" data-hide="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    Success!
</div>

<button class="btn btn-lg btn-primary btn-block" id="gravityBtn">Update</button>
<pre id="output" style="width: 100%; height: 100%;" hidden="true"></pre>

<?php
    require "scripts/x-filter/php/footer.php";
?>


<script src="scripts/x-filter/js/gravity.js"></script>
