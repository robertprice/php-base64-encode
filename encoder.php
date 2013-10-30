<?php
/**
 * Script to base64 encode an image file for use in JavaScript, HTML and CSS.
 * 
 * @author   Robert Price <rob@robertprice.co.uk>
 * @link     http://www.robertprice.co.uk/
 */

if ($argc == 2) {
    $filename = $argv[1];

    if (is_readable($filename) && is_file($filename)) {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimetype = finfo_file($finfo, $filename);
        finfo_close($finfo);

        $contents = file_get_contents($filename);
        echo "data:" . $mimetype . ";base64," . base64_encode($contents);
    } else {
        echo "Can't read file $filename\n";
    }
} else {
    echo "Usage: php " . $argv[0] . " image_to_encode.png\n";
}
