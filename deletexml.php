<?php
if(isset($_POST['insert'])){
    
    $xml = new DomDocument("1.0","UTF-8");
    $xml ->load('studentdb.xml');
    
    $cname=$_POST['c_name'];
    
    $xpath= new DOMXPATH($xml);
    
    foreach($xpath->query("/ROOT/INFO[NAME = '$cname']")as $node)
    {
        $node->parentNode->removeChild($node);
    }
    $xml->formatoutput=true;
    $xml->save('studentdb.xml');
    header("Location: http://www.yourwebsite.com/user.php"); /* Redirect browser */
}
exit();
?>
