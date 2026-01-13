<?php
declare(strict_types=1);

// Utils
// -----

// ********************************************************************
// Print utils
// ********************************************************************


// Print Line. Appends an EOL at the end
// --------------------------------------------------------------------
function println(mixed $something=''): void {
    echo $something;
    echo PHP_EOL;
}

// Print array values in a single line. Appends an EOL at the end
// --------------------------------------------------------------------
function print_values($arr): void {
    foreach($arr as $elem) {
        echo "$elem ";
    }
    echo PHP_EOL;
}


// ********************************************************************
// Template utils
// ********************************************************************

function render_template(string $_TEMPLATE_FILENAME, array $_TEMPLATE_VARS): string {

    extract($_TEMPLATE_VARS, EXTR_SKIP);

    ob_start();

    require($_TEMPLATE_FILENAME);

    $_RESULT = ob_get_clean();

    return $_RESULT;


}