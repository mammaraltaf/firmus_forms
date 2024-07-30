<?PHP
error_reporting(0);
include "../dbclass.php";
$id_ctr=$_GET['id'];
$supp=$_GET['supp'];

echo "<br><p align=center><b>Are you sure you want to delete this Recording ?</b>   ";
echo "    <a  class='btn btn-sm btn-danger' href=supp.php?id=$id_ctr&supp=yes>Yes</a>    ";  echo "      <a  class='btn btn-default' href=list.php>Cancel</a> "; 

if ($supp=='yes') 
{
$db = new database('');
$db->connect();
$db->query("delete from FOR_FF_APJ_ES WHERE id='$id_ctr'");


echo('<div class="alert alert-success">Record Deleted  Contrato eliminado !</div>');  

}  
?>
<br>
<br>
<a  class='btn btn-default' href=list.php> << Back</a> 