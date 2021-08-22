<?php

declare(strict_types=1);


function debug(?string $element): void {
    $content = $element ? htmlentities($element) : $element;
    print_r(
        '<br /><div style="border: 1px solid grey; padding: 10px; display: inline-block;">'
        .$content.
        '</div><br />'
    );
}


