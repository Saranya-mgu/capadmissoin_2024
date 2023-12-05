<?php /*?>MG UNIVERSITY
CAP - COLLEGE SIDE
File:template1span
location :capadmission/cap_appln/views/template1span

version  date              create/edited                                                                                 author   functionality
V 2.0     14/05/2018        edited
<?php */?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mahatmagandhi University- CAP Admission Portal</title>
<link rel="stylesheet" href="<?php echo base_url();?>css/tmpl_styles.css" />
<link rel="stylesheet" href="<?php echo base_url();?>css/styles.css">
<script src="<?php echo base_url();?>js/jquery-latest.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/phdgeneral.js"></script>
<link href="<?php echo base_url();?>images/favicon.ico" rel="shortcut icon" type="image/x-icon" />

<style type="text/css">
#bk {
    background-image: url(<?php echo base_url('/images/frm2021.png'); ?>);
    background-repeat: no-repeat;
    background-size: 100% 100%;
    height: 100px;
}

</style>

</head>

<body>
<div>
	<?php /*?><div style="height:auto; position:fixed; top:0px; width:100%; z-index:991;">
        <div style="background-color:#FFF; width:100%;">
        <table align="center" cellpadding="0" cellspacing="0" width="95%" class="main_table">
           
            <tr>
            
                <td width="5" height="80"></td>
                <td width="80"><a href="https://www.mgu.ac.in" target="_new"><img src="<?php echo base_url();?>images/logo32.png" width="80" height="80"/></a></td>
                <td width="5"></td>
                <td class="tmpl_head">MAHATMA GANDHI UNIVERSITY<BR /><font size="-1"> KOTTAYAM, KERALA, INDIA.</font></td>
                <td width="100"><img src="<?php echo base_url();?>images/cap.png" height="80"/></td>
            </tr>
            <tr>
                <td height="2px"></td>
            </tr>
        </table>
        </div>
        <div style="width:100%; height:30px;" class="tmpl_bar"></div>
        <div style="height:10px;"></div>
    </div><?php */?>
	
	
	<div id="bk">
    <table align="center" cellpadding="0" cellspacing="0" width="95%" class="main_table" >
          
            <tr>
                <!--<td width="4" height="80"></td>-->
                <td width="86" align="right">
    <a href="https://www.mgu.ac.in/">
        <img src="<?= base_url('images/logo32.png'); ?>" width="80" height="80" style="margin-top: 15px;" />
    </a>
</td>
                
                <td width="847" class="tmpl_head" align="left" style="padding-top:20px;">MAHATMA GANDHI UNIVERSITY<BR /><font size="-1"> KOTTAYAM, KERALA, INDIA.</font></td>
                <td width="103"  align="center">&nbsp;<!--<img src="<?php echo base_url();?>/images/gandhi.png" height="80"/>--></td>
                <td width="400" >&nbsp;</td>
                  <td width="400" >&nbsp;</td>
                  <td width="400" >&nbsp;</td>
            </tr>
            <tr>
                <td height="2px"></td>
            </tr>
        </table>
        <div style="width:100%; height:30px;" class="tmpl_bar"></div>
        <div style="height:10px;"></div>
    </div>   
   
    <div>
    <table align="center" cellpadding="0" cellspacing="0" border="0" width="95%" class="main_table" height="200px">
    <tr>
                       
            <td width="20%" bgcolor="#FFFFFF" class="ash_bordr" valign="top" align="left"><?= $this->renderSection('span1') ?></td>
            <td width="1%"></td>
            <td width="79%" bgcolor="#FFFFFF" class="ash_bordr" valign="top" align="left"><?= $this->renderSection('span2') ?></td>
        
        </tr>
    </table>
    </div>
    <div style="height:10px;"></div>
    <div>
    <table align="center" cellpadding="0" cellspacing="0" width="95%" height="50px">
        <tr>
            <td align="center" class="footer">&copy; <?php echo date("Y");?> Mahatma Gandhi University. All Rights Reserved.<br />
    Powered by CAP Technical Team, Mahatma Gandhi University, Kottayam, Kerala </td>
        </tr>
    </table>
    </div>
</div>
</body>
</html>