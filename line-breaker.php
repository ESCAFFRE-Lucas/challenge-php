<?php
function breakLines(string $str, int $len): string {
    return wordwrap($str, $len);
}
