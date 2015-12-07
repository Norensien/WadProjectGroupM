<?php
if(isset($_POST['insert'])){
    header("Location: http://www.yourwebsite.com/user.php"); /* Redirect browser */
    $xml = new DomDocument("1.0","UTF-8");
    $xml->preserveWhiteSpace = false;
    $xml->formatOutput = true;
    $xml->load('studentdb.xml');
    
    $cname = $_POST['c_name'];
    $hadd = $_POST['h_add'];
    $nadd = $_POST['n_add'];
    
    $rootTag = $xml->getElementsByTagName("ROOT")->item(0);
    
    $infoTag = $xml->createElement("INFO");
        $nameTag = $xml->createElement("NAME", $cname);
        $addTag = $xml->createElement("LOCATION", $hadd);
        $numTag = $xml->createElement("NUMBER", $nadd);
        
        $infoTag->appendChild($nameTag);
        $infoTag->appendChild($addTag);
        $infoTag->appendChild($numTag);
    

    $rootTag->appendChild($infoTag);
    $xml->save('studentdb.xml');
}
    


exit();
?>
