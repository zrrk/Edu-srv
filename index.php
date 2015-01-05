<?php
include("classes/Html.php");

  $html= new Html( '','ar','rtl','' );
  
  $html->header_Edu( "./seremot_files",'prof',0,0,0 );
  //abdo();
    
	
    echo '<div id="content">
    <div id="inner-content" class="wrap clearfix">';
if( isset( $_GET['err'] ) && $_GET['err'] == 1 )
{
  echo '<meta http-equiv="refresh" content="0, #ANCREScfpass"/>';
  echo'<center><img src="./files/err.png" width="50" height="50" alt="">';
  echo"<A NAME='ANCREScfpass'></A><center><h3><echec> خطأ في كلمةالمرور أو إسم المستخدم!</echec></h3></center>";
}


    echo'<ul>
         <center><img src="./files/who.png" width="150" height="75" alt=""></br></br>
	  <form method=post action="login.php">';
 $s="المستخدم";
 
	   echo '<label for="user"><align=right >'.$s.' : </align></label>
	   <input name="user" type="text" autocomplete="off" autofocus required placeholder=" الحروف و الأرقام فقط" /><br/><br/>
	   <label for="pass">كلمة المرور : </label>
	   <input name="pass" type="password" required placeholder=" " /><br/>
           
	   <input type="submit" value="OK"  /><br/><hr/>
	  </form> 
</ul>	
	</div>';

?>
</body>
</html>
