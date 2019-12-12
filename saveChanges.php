<?php

echo "jai shree naam prabhu ka";
$html=file_get_contents('settings_edit.php');
$dom=new DOMDocument();
$dom->loadHTML($html);
$x=new DOMXPath($dom);
foreach($x->query('//td')as $td)
    echo $td->textContent;
?>