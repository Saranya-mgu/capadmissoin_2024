<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<table align="center" cellpadding="0" cellspacing="0" width="100%" height="100%" class="pad1">
	<tr>
    	<td width="100%" height="100%" align="center" valign="top">
            <table align="center" cellpadding="0" cellspacing="0" width="100%" height="100%" class="newsbox fnt">
                <tr>
                    <td width="100%" align="center" height="30" class="newsboxhead" colspan="3">Dash Board</td>
                </tr>
                <tr><td height="10" align="center"></td></tr><!---->
                <tr>
                    <td colspan="2" align="left" valign="top">
                    	<table align="center" cellpadding="0" cellspacing="0" width="95%">
                        
                        	<tr>
                            	<td>
                               
                                
                               
                             
                                <div style="font-size:18px; font-weight:bold; color:#000"></div>
                      <div align="" style=" font-weight:bold; font-size:22px; font-family:'keralalite';">

                      <div class="scrollingNotifications_New scrollbar" id="forScrollNews" style="text-align:justify">
                
                <?php /*?><div align="justify" style=" font-weight:bold; font-size:25px; color:#F30; font-family:'keralalite';">
            ®¢ ¼ß Ìß ®Áí
¯µ¼ÞÜµ dÉçÕÖÈ¢: ³YèÜX ø¼ßØíçd¿×X ©¿X ¦ø¢ÍßAá¢.</div>
<?php */?>
                <ul style="list-style-type:none;" > 
               
               <?php foreach($latestnews_array as $val){?>
               <li >
                   <div class="eachNotification" style="font-family: ubuntu_regular;">
                   <!--<span style=" line-height: 2.0;"><?php  					
                   echo date("F j, Y", strtotime($val['created_date'])); 
                   ?></span>-->
                 <?php if($val['attachment']){ ?> <a href="<?php echo $val['attachment'];?>" target="_blank"> <?php }?>
                  <p class="English" style="padding-left:10px;font-family: ubuntu_regular;color:red">							
                               <?php echo $val['subject'];?>
                       </p><?php if($val['attachment']){?></a><?php }?>
                   <?php if($val['attachment']){?><a href="<?php echo $val['attachment'];?>" target="_blank"><?php }?>
                   <p class="English" style="padding-left:10px;font-family: ubuntu_regular;">
                           <?php echo $val['content'];?>
                       </p>
                      
                       <?php if($val['attachment']){?></a><?php }?>
                        
                      </div>
               </li>
              
               <?php } ?>
</ul>
               </div>
              
              </div>
                   
                            </td>
                            </tr>
                           
                             
                        </table>
                    
                    </td>
                </tr>
                <tr><td height="50" align="center"></td></tr>
            </table>
         </td>
     </tr>
</table>
<style type="text/css">
.home-content li{
padding-top:5px;	
}
</style>