<?php
function currency_format($price,$unit = ''){
    return number_format($price,0,'','.').$unit;
}
?>