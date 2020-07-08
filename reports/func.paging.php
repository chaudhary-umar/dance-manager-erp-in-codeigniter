<?php include("inc-main.php"); ?>
<?php $aa=0; ?>
<?php if($totalRows_total>$lim){?>
<style type="text/css">
#pagesview a {
	padding:8px 2px 5px 2px;
	border: 1px solid #06F;
	-moz-border-radius: 5px;
	border-radius: 5px;
	margin:0px 1px 0px 0px;
	text-decoration:none;
	font-size:12px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
}

.selectedpage{
	background:#06F; color:#FFF;cursor:default;
	}

.unselectedpage{
	background:#FFF; color:#000; cursor:pointer;
}
</style>
<div id="pagesview" style="height:40px; background-image:linear-gradient(to right, #FFF,#09F, #FFF );">
    <table class="table table-striped table-bordered table-hover">
  <tr>
    <td width="100" align="left" valign="middle" style="padding:12px; color:#000; ">Pages : <?php $totap= (($totalRows_total-($totalRows_total%$lim))/$lim);
		if(($totalRows_total%$lim)>0){
			$totap=$totap+1;
		}
		echo $totap;
		 ?></td>
    <td><?php 
$crrpage=(($stt/$lim)+1);
$lastpage=floor($totalRows_total/$lim)+1;
if($totap>=26){
	$allowedmin=$crrpage-13;
	if($allowedmin<1){
		$allowedmin=1;
	}
	$allowedmax=$crrpage+13;
	if($allowedmax<26){
	if($totalRows_total<26){	
	$allowedmax=$totalRows_total;
	}else{
	$allowedmax=26;	
	}
	}
	
}else{
	$allowedmin=1;
	$allowedmax=$totap;
}

if($allowedmax<100){
	$roudnoff=2;
}else if($allowedmax<1000){
	$roudnoff=3;
}else if($allowedmax<10000){
	$roudnoff=4;
}else if($allowedmax<100000){
	$roudnoff=5;
}else if($allowedmax<1000000){
	$roudnoff=6;
}

?>         
<?php if($totap>0){?>        
<a style="float:left; padding:0; border:none;" href="<?php if((($aa-1)*$lim)==$stt){?>javascript:void();<?php }else{?>http://<?php echo $_SERVER['HTTP_HOST']; ?><?php echo $_SERVER['PHP_SELF']; ?>?q_date=<?php echo @$_GET['q_date']; ?>&q_date2=<?php echo @$_GET['q_date2']; ?>&q=<?php echo @$_GET['q']; ?>&id=<?php echo @$_GET['id']; ?>&stid=<?php echo @$_GET['stid']; ?>&stt=0<?php }?>"><img src="img/but_first.png" width="32" height="32"></a>
<?php }?>
<?php 


	$aa=$allowedmin-1;
	for($s=$allowedmin;$s<=$allowedmax;$s++){
        $aa=$aa+1;

if($lastpage>=$aa){
		
	 ?><a class="<?php  if((($aa-1)*$lim)==$stt){  ?>selectedpage<?php }else{?>unselectedpage<?php }?>" style="float:left;" href="<?php if((($aa-1)*$lim)==$stt){?>javascript:void();<?php }else{?>http://<?php echo $_SERVER['HTTP_HOST']; ?><?php echo $_SERVER['PHP_SELF']; ?>?q_date=<?php echo @$_GET['q_date']; ?>&q_date2=<?php echo @$_GET['q_date2']; ?>&q=<?php echo @$_GET['q']; ?>&id=<?php echo @$_GET['id']; ?>&stid=<?php echo @$_GET['stid']; ?>&stt=<?php echo ($aa-1)*$lim; ?><?php }?>
"><?php echo  sprintf("%0".$roudnoff."s", $aa);  ?></a>
<?php }?>
<?php 
		}?>
<?php if($totap>0){?>        
<a style="float:left; padding:0; border:none;" href="<?php if((($aa-1)*$lim)==$stt){?>javascript:void();<?php }else{?>http://<?php echo $_SERVER['HTTP_HOST']; ?><?php echo $_SERVER['PHP_SELF']; ?>?q_date=<?php echo @$_GET['q_date']; ?>&q_date2=<?php echo @$_GET['q_date2']; ?>&q=<?php echo @$_GET['q']; ?>&id=<?php echo @$_GET['id']; ?>&stid=<?php echo @$_GET['stid']; ?>&stt=<?php echo (floor($totalRows_total/$lim)*$lim); ?><?php }?>"><img src="img/but_final.png" width="32" height="32"></a>
<?php }?>
        
 </td>
  </tr>
</table>

</div>
<?php }?>  
