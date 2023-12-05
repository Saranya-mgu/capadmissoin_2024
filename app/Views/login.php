



<?= $this->section('span2') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
<table align="center" cellpadding="0" cellspacing="0" width="70%" height="100%" class="pad1">
    <tr>
        <td width="100%" height="100%" align="center" valign="top">
            <table align="center" cellpadding="0" cellspacing="0" width="100%" height="100%" class="newsbox">
                <tr>
                    <td width="100%" align="center" height="30" class="newsboxhead_brown">Login</td>
                </tr>
                <tr>
                    <td colspan="4" height="50" valign="middle" align="center"> 
                          <?php $error = session()->getFlashdata('error'); ?>
                           <?php if ($error): ?>
                              <div class="alert alert-danger">
                                       <?= $error ?>
                              </div>
                            <?php endif; ?>
                        </td>
                </tr>
                <tr>
                    <td width="100%" align="left" valign="top" class="home-content">
                        <form name="frm_login" id="frm_login" method="post" action="<?= base_url('Publicpg/login'); ?>">
                            <table align="center" cellpadding="0" cellspacing="0">

                                <tr height="40px">
                                    <td align="left" class="fnt" style="height:30px;">User Id</td>
                                    <td width="30" align="center">:</td>
                                    <td colspan="2" align="left"><input name="user_id" id="user_id" size="38" maxlength="15" type="text" class="txtbox" style="height:30px;"></td>
                                </tr>
                                <tr height="20px">
                                    <td></td>
                                    <td></td>
                                    <td colspan="2" height="10px"><label></label></td>
                                </tr>
                                <tr height="40px">
                                    <td align="left" class="fnt" style="height:30px;">Password</td>
                                    <td width="30" align="center">:</td>
                                    <td colspan="2" align="left"><input name="pass" id="pass" size="38" maxlength="15" type="password" class="txtbox" style="height:30px;"></td>
                                </tr>
                                <tr height="40px">
                                    <td></td>
                                    <td></td>
                                    <td colspan="2" height="10px"><label></label></td>
                                </tr>
                                <!-- reCAPTCHA widget -->

                                
                                <tr>
                                <td colspan="6" align="right" class="g-recaptcha" height="10" data-sitekey="6Lcj_QkpAAAAABHxpncKLYVNVULpDeIDoBGn0DX6"></td>
                                </tr>
                                 
                                <tr>
                                    <td colspan="4" height="20px" align="right" class="blue_small_fnt"></td>
                                </tr>
                                <tr>
                                    <td align="left"></td>
                                    <td width="30" align="center"></td>
                                    <td colspan="2" align="left"><input name="logn_but" id="logn_but" size="38" type="submit" class="blue_button_brown" value="LOGIN"></td>
                                </tr>
                                <tr>
                                    <td colspan="4" height="50"></td>
                                </tr>
                            </table>
                        </form>
                        <a href=""> Retrieve Password</a>
                    </td>
        </td>
    </tr>
</table>

</td>
</tr>
</table>
<?= $this->endSection() ?>