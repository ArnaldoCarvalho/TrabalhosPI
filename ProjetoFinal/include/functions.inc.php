<?php
function pr($arr) {
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

function clean_name($string) {
    $string = str_replace(' ', '_', $string); // Replaces all spaces with hyphens.
    return preg_replace('/[^A-Za-z0-9\_.]/', '', $string); // Removes special chars.
} 

function XML2Array(SimpleXMLElement $parent)
{
    $array = array();

    foreach ($parent as $name => $element) {
        ($node = & $array[$name])
            && (1 === count($node) ? $node = array($node) : 1)
            && $node = & $node[];

        $node = $element->count() ? XML2Array($element) : trim($element);
    }

    return $array;
}
?>