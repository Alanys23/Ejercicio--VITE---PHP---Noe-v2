<?php

$cookieladApiKey = trim((string) env('COOKIELAD_API_KEY'));

if ($cookieladApiKey === '') {
    return;
}
?>
<!-- V2 COOKIE LAD -->
<script defer src="https://webda.eus/apis/cookielad/loader.js?key=<?= e($cookieladApiKey) ?>&color=d47523&v=1.799"></script>
