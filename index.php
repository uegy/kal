<?php
include_once 'db.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE>Kalorien Tabelle</TITLE>

<!-- JQuery JS -->
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/init.js"></script>

<!-- Preload Images -->
<script language="JavaScript">
<!--
pic1 = new Image(16, 16); 
pic1.src="style/loader.gif";
//-->
</script>

<style type="text/css">
<!--
#county_drop_down, #no_county_drop_down, #loading_county_drop_down { display: none; }
--> 
</style>

</head>

<body>
 

<div align="center"><strong>Kalorientabelle</strong>: Selektiere ein Lebensmittel
  
  
</div><br />
<form name="form" action="parse.php" method="post">
<table width="317" border="0" align="center">
   <tr>
     <td width="100">Kategorie</td>
     <td width="217"><select id="state" name="state">

<?php
$stmt = $mysql->prepare("SELECT code, name FROM `states`");
$stmt->execute();
$stmt->bind_result($code, $name);

while ($row = $stmt->fetch()) : ?>
<option value="<?php echo $code; ?>"><?php echo $name; ?></option>
<?php endwhile; ?>

     </select></td>
   </tr>
   <tr>
     <td height="33">Art</td>
     <td><div id="county_drop_down"><select id="county" name="county"><option value="">County...</option></select></div>
	 <span id="loading_county_drop_down"><img src="style/loader.gif" width="16" height="16" align="absmiddle">&nbsp;Loading...</span>
	 
   </tr>
   <tr>
     <td>&nbsp;</td>
	 <td><input type="submit" name="Submit" value="Add" /></td>
   </tr>
 </table>
 </form>
</BODY>
</HTML>
