# tahun_kabisat
Penentuan Tahun Kabisat
<html> 
    <head> 
        <title>TUGAS 1 </title> 
    </head> 
    <body> <h2>CEK TAHUN KABISAT </h2> 

    <form method="post" action=""> 
    Masukkan tahun <input type="text" name="bil" /><br />
    <input type="submit" name="submit" value="Submit" /> 
    </form> 

<?php
if(isset($_POST['submit'])){
$TAHUN = $_POST['bil'];
if ($TAHUN%4==0)
{
    echo "$TAHUN TAHUN KABISAT"; 
}
else if($TAHUN%4!=0)
{
    echo "$TAHUN BUKAN TAHUN KABISAT"; 
}
}
?>
</body> 
</html> 
