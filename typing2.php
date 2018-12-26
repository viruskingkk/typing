<?php 
//error_reporting(E_ALL); 
error_reporting(0); //遮罩warning 
?> 
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<title>打字速度測試</title> 
<META NAME="save" CONTENT="history"> 
<STYLE> 
.sHistory {behavior:url(#default#savehistory);} 
</STYLE> 
<SCRIPT LANGUAGE="JavaScript"> 
<!-- Begin 
var ms = 0; 
var state = 0; 
function startstop() 
 { 
 if (state == 0) 
{ 
 state = 1; 
 then = new Date(); 
 then.setTime(then.getTime() - ms); 
 } 
else 
{ 
 state = 0; 
 now = new Date(); 
 ms = now.getTime() - then.getTime(); 
 document.stpw.time.value = ms; 
 } 
 } 
function swreset() 
{ 
 state = 0; 
 ms = 0; 
 document.stpw.time.value = ms; 
} 
function display() 
{ 
setTimeout("display();", 50); 
if (state == 1) 
{ 
now = new Date(); 
ms = now.getTime() - then.getTime(); 
document.stpw.time.value = ms; 
 } 
 } 
// End --> 
</SCRIPT> 
</head> 
<body topmargin="0" onLoad="display()" onselectstart="return false" onpaste="alert('想偷懶麼？');" oncopy="return false;" oncut="return false;" oncontextmenu="window.event.returnValue=false"> 
<form action="" method="post" name="stpw" valign="top"> 
<table align="center" cellspacing="10" cellpadding="0" border="0"> 
<tr width="200" align="left"> 
<td style="color:red">請選擇想要的範文:</td> 
 <td><input name="magic" value="typing1" type="radio" onClick="javascript:location.href='typing1.php';" >範文1</td> 
 <td><input name="magic" value="typing2" type="radio" onClick="javascript:location.href='typing2.php';" checked>範文2</td> 
 <td><input name="magic" value="typing3" type="radio" onClick="javascript:location.href='typing3.php';">範文3</td> 
 </tr> 
 <tr width="200"> 
<td colspan="4" width="800">範文：<br> 
伦敦金是一种贵金属保证金交易方式，因起源于伦敦而得名。其采用24小时交易制度，入市门槛低，市场公开透明，为全球投资者青睐的“生财工具”。本栏目为投资者讲述投资伦敦金的相关概念及知识，帮助投资者从容入市。.<br> 
</td> 
</tr> 
<tr> 
 <td colspan="4">開始測試嘍<font color="red">（在下面的輸入框開始打字吧）:</font><br> 
 <b>計時開始:</b><INPUT TYPE="text" Name="time" class=sHistory> 
<INPUT TYPE="BUTTON" Name="ssbutton" VALUE="開始/停止" onClick="startstop()"> 
<INPUT TYPE="BUTTON" NAME="reset" VALUE="重置" onClick="swreset()"> 
</td> 
 </tr> 
 <tr> 
<td colspan="3"> 
<textarea name="in" cols="70" rows="20" wrap="on" onFocus=" 
" onBlur=""></textarea></td> 
 <td ><input name="ssbutton" type="submit" value="點擊往下看結果吧"><input type="hidden" name="wtime" value=""></td> 
 </tr> 
</table> 
</form> 
<div style="margin-left:90"> 
<?php 
if($_POST['ssbutton']=="點擊往下看結果吧") 
{ 
$total=$_POST['in']; 
$time=$_POST['time']; 
$arr = explode(" ",$total); //explode 的作用是把字串分割為陣列 
foreach ($arr as $value) 
{ $result.=$value; } 
$num=strlen($result); 
$ltime=(int)($time/1000); 
echo "測試的結果為"; 
echo "<br>總輸入為：<font color='red'>".($num/3)."個</font>"; 
echo " 所使用的時間為：<font color='red'>".$ltime."秒</font>"; 
if($ltime==0) 
{ 
 echo " 您最終的打字速度為：<font color='red'>0個/秒</font>"; 
} 
else 
{ 
 echo " 您最終的打字速度為：<font color='red'>".((($num/3)/$ltime)*60)."個/分</font>"; 
} 
} 
?> 
</font> 
</div> 
</body> 
</html>
