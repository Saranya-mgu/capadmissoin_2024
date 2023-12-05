<?php /*?>MG UNIVERSITY
CAP - COLLEGE SIDE
File:menu_principal
location :capadmission/cap_appln/views/principle/menu_principal

version  date              Added                                                                        author      functionality
V 2.0     14/05/2018        Added                                                                       namitha       menu
<?php */?>
<?php //print_r($clg_name);exit;?>

<style>
.blink_me {
  animation: blinker 1s linear infinite;
}

@keyframes blinker {
  50% {
    opacity: 0;
  }
}
</style>

<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<table align="left" cellpadding="0" cellspacing="0" width="100%">
	
    <tr>
         <td class="orange_box" height="30" align="left">&nbsp;<strong><span style="color:#000;">Logged in As : <?=  $college_name;?></span> <br />
         </strong></td>
        </tr>
	<tr>
    	<td width="100%" align="left" height="200" valign="top">
        <div id='cssmenu'>
            <ul>
            	<li class='<?php if($selected_main_menu=='home') echo 'active'; else echo 'inactive';?>'><a href='<?php echo base_url();?>Collegeprince'><span>Home</span></a></li>
                
                
                <li class='<?php if($selected_main_menu=='college_profile') echo 'active'; else echo 'inactive';?>'><a href='<?php echo base_url();?>Collegeprince/collegeprofile'><span >College Profile <!--<img src="<?php echo base_url();?>/images/animated-update-image-0026.gif" />--></span></a></li>
                
                <li class='<?php if($selected_main_menu=='helpdesk') echo 'active'; else echo 'inactive';?>'><a href='<?php echo base_url();?>Collegeprince/helpdesk_details'><span>College HelpDesk Details <!--<img src="<?php echo base_url();?>/images/animated-update-image-0026.gif" />--> </span></a></li>
                
                 <li class='<?php if($selected_main_menu=='adn_committee') echo 'active'; else echo 'inactive';?>'><a href='<?php echo base_url();?>Collegeprince/admission_authority'><span>College Admission Committee Details <?php echo date('Y')." - ".(date('y')+1); ?>  <!--<img src="<?php echo base_url();?>/images/animated-update-image-0026.gif" />--></span></a></li>
                 
                 
                 <li class='<?php if($selected_main_menu=='naac') echo 'active'; else echo 'inactive';?>'><a href='<?php echo base_url();?>Collegeprince/naac_score'><span>NAAC SCORE /<br /> NIRF Rank Details <!--<img src="<?php echo base_url();?>/images/animated-update-image-0026.gif" />--> </span></a></li>
                 
                 
                 <li class='<?php if($selected_main_menu=='con_course') echo 'active'; else echo 'inactive';?>'><a href='<?php echo base_url();?>Collegeprince/courses_consol'><span>Programmes &amp; Seat Distribution  <!--<img src="<?php echo base_url();?>/images/new1.gif" />--></span></a></li>
                 
                 
                <!-- 2023 <li class='<?php if($selected_main_menu=='MI') echo 'active'; else echo 'inactive';?>'><a href='<?php echo base_url();?>Collegeprince/MI'><span>Apply For Marginal Increase <?php echo date('Y')." - ".(date('y')+1); ?>  <img src="<?php echo base_url();?>/images/new1.gif" /></span></a></li>-->
                
               <!--  <li class='<?php if($selected_main_menu=='sports_event') echo 'active'; else echo 'inactive';?>'>                
<a href='<?php echo base_url();?>Collegeprince/sports_event' <?php if($selected_sub_menu=='sports_event') echo 'style="color:#03F;"'?> ><span>Sports Event for the<br /> Year <?php echo date('Y')." - ".(date('y')+1); ?><img src="<?php echo base_url();?>/images/new1.gif" /></span></a> </li>-->
                   
                 
               
           
              
               
               
              
               <!--rlv-->
              
			 <!-- RLV Menu-->
			    <?php if($college_id==151){?>
              <li class='has-sub <?php if($selected_main_menu=='nocapadmn') echo 'active';?>'><a href='#'><span>Non CAP Admission <!--<img src="<?php echo base_url();?>/images/new1.gif" />--></span></a>
                    <ul <?php if($selected_main_menu=='nocapadmn'){?>style="display:block;"<?php }?>>
                    
                    
                    <!-- 2023 -->
                     <!-- <li class='last'><a href='<?php echo base_url();?>Collegeprince/international_registration' <?php if($selected_sub_menu=='cand_regn_inter') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">International Candidate Registration</span></a></li>
                 <li class='last'><a href='<?php echo base_url();?>Collegeprince/cand_regn' <?php if($selected_sub_menu=='cand_regn') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">Candidate Registration</span></a></li>
              
                 <li class='last'><a href='<?php echo base_url();?>Collegeprince/candidate_list' <?php if($selected_sub_menu=='cand_list') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">  Candidate List</span></a></li>
    <li class='last'><a href='<?php echo base_url();?>Collegeprince/admit_students' <?php if($selected_sub_menu=='admit_stud') echo 'style="color:#03F;"'?> >
    <span class="arrow_menutt">Admit Students</span></a></li>-->
                  
                   <!-- 2023 END-->
                    
                    <li class='last'><a href='<?php echo base_url();?>Collegeprince/admitted_list' <?php if($selected_sub_menu=='admitted_students') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">Admitted Students</span></a></li> 
                    </ul>
                     
					<?php }?>
               
               
               
               <!--end-->
              
                         <?php  
                if($college_id!=151)
				{?>
               
          <!-- NON CAP MENU -->             
               
<li class='has-sub <?php if($selected_main_menu=='nocapadmn') echo 'active';?>'><a href='#'><span>Non CAP Admission <!--<img src="<?php echo base_url();?>/images/new1.gif" />--></span></a>
                   
                   
                    <ul <?php if($selected_main_menu=='nocapadmn'){?>style="display:block;"<?php }?>>
                    
                    <?php 
					 {?>
                     
                   
				  <!--2023 live-->
                  <!--<li class='last'><a href='<?php echo base_url();?>Collegeprince/prelimnry_ranklist' <?php if($selected_sub_menu=='preliminary_rank_list') echo 'style="color:#03F;"'?> ><span>Verification of Provisional Rank List-PD Quota</span></a></li>-->
              
               <!--  <li class='last'><a href='<?php echo base_url();?>Collegeprince/sports_cultural_pd_ranklist_pay_org' <?php if($selected_sub_menu=='rank_list_noncap') echo 'style="color:#03F;"'?> ><span class="arrow_menutt"> Final Rank List Sports Cultural PD</span></a></li>-->
                 
               <!--  <li class='last'><a href='<?php echo base_url();?>Collegeprince/sports_cultural_pd_ranklist_pay_org' <?php if($selected_sub_menu=='rank_list_noncap') echo 'style="color:#03F;"'?> ><span class="arrow_menutt"> Supplementary PD RankList</span></a></li>
                 
                  <li class='last'><a href='<?php echo base_url();?>Collegeprince/sports_supply' <?php if($selected_sub_menu=='rank_list_sports') echo 'style="color:#03F;"'?> ><span class="arrow_menutt"> Supplementary Sports RankList</span></a></li>-->
                  
                    <!--2023 live end-->
                  
                  <?php /*?> 
                   
                   
               
                   
                  <!-- 2023-->
                   
                  <!--  <li class='last'><a href='<?php echo base_url();?>Collegeprince/cand_regn_cap_or_not' <?php if($selected_sub_menu=='cand_regn') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">Candidate Registration </span></a></li>
                   
                      
                     <li class='last'><a href='<?php echo base_url();?>Collegeprince/candidate_list' <?php if($selected_sub_menu=='cand_list') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">  Candidate List</span></a></li>
                      <li class='last'><a href='<?php echo base_url();?>Collegeprince/admit_students' <?php if($selected_sub_menu=='admit_stud') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">Admit Students</span></a></li> -->
                   
                   
                    <!-- 2023 END-->
                    
                  
                
                <!--    <li class='last'><span style="color:#00F; font-weight:bold;">PD</span></li>
                 
                  <li class='last'><a href='<?php echo base_url();?>Collegeprince/prelimnry_ranklist' <?php if($selected_sub_menu=='preliminary_rank_list') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">Supplementary RankList</span></a></li>
                 
                  <?php 
				  }?>
                     
                  
                     <li class='last'><a href='<?php echo base_url();?>Collegeprince/admitted_list' <?php if($selected_sub_menu=='admitted_students') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">Admitted Students</span></a></li>
                  
                  </ul>
                </li>
				<!--noncap end-->
				
				<?php //}?>
               <!---->
                
                <?php /*?><li class='<?php if($selected_main_menu=='courses1') echo 'active'; else echo 'inactive';?>'><a href='<?php echo base_url();?>Collegeprince/complmentrysub'><span>Map Commomn Course/ Complementry Course</span></a></li>
                   <?php */?>
                 
 <?php /*?> <li class='<?php if($selected_main_menu=='uploadranklist') echo 'active'; else echo 'inactive';?>'><a href='<?php echo base_url();?>Collegeprince/Upload_rank_list'><span>Upload Ranklist<img src="<?php echo base_url();?>/images/animated-update-image-0026.gif" /></span></a></li><?php */?>                 
        <?php /*?>    <li class='<?php if($selected_main_menu=='viewranklist') echo 'active'; else echo 'inactive';?>'><a href='<?php echo base_url();?>Collegeprince/View_rank_list'><span>View Ranklist</span></a></li>
            <?php */?>
			<!--Foreign 
                
                <li class='<?php if($selected_main_menu=='international') echo 'active'; else echo 'inactive';?>'><a href='https://ucicmgu.org/' target="_blank"><span>Internation Student Admission<img src="<?php echo base_url();?>/images/new1.gif" /></span></a></li>-->
              
                
                
              
                
               
               
                
		    <!-- COMMUNITY-->
				
				<li class='has-sub <?php if($selected_main_menu=='capaltmnt_com') echo 'active';?>'><a href='#'><span>UGCAP COMMUNITY Allotments<!--<img src="<?php echo base_url();?>/images/new1.gif" />--> </span></a>
                    <ul <?php if($selected_main_menu=='capaltmnt_com'){?>style="display:block;"<?php }?>>
                 
                                
                   <!--<li class='last'><a href='<?php echo base_url();?>Collegeprincecommunity' <?php if($selected_sub_menu=='alt_lst') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">Third Allotment List</span></a></li>-->
                   
                  <!-- <li class='last'><a href='<?php echo base_url();?>Collegeprincecommunity' <?php if($selected_sub_menu=='alt_lst') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">Community Merit Second Phase First Allotment List</span></a></li>-->
                  
                  <!-- <li class='last'><a href='<?php echo base_url();?>Collegeprincecommunity' <?php if($selected_sub_menu=='alt_lst') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">Community Merit Supplementary Second Allotment List</span></a></li>-->
                   
                  <!-- <li class='last'><a href='<?php echo base_url();?>Collegeprincecommunity/viewandadmit_spotranklist1' <?php if($selected_sub_menu=='spot1') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">Community Merit Final I RankList</span></a></li>-->
                  
                  
                   <!--<li class='last'><a href='<?php echo base_url();?>Collegeprincecommunity/viewandadmit_spotranklist1' <?php if($selected_sub_menu=='spot1') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">Community Merit Final II RankList</span></a></li>-->
                   
                  <!-- <li class='last'><a href='<?php echo base_url();?>Collegeprincecommunity/viewandadmit_spotranklist1' <?php if($selected_sub_menu=='spot1') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">Community Merit Final III RankList</span></a></li>-->
                  
                    <!--<li class='last'><a href='<?php echo base_url();?>Collegeprincecommunity/viewandadmit_spotranklist1' <?php if($selected_sub_menu=='spot1') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">Community Merit Special RankList</span></a></li>-->
                  
                  <li class='last'><a href='<?php echo base_url();?>Collegeprincecommunity/admittdlst_quota' <?php if($selected_sub_menu=='quota_admitted_lst') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">Admitted List Quota Wise</span></a></li>
                  
                  <!--<li class='last'><a href='<?php echo base_url();?>Collegeprincecommunity/admittdlst' <?php if($selected_sub_menu=='admitted_lst') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">Admitted List</span></a></li>-->
                                   
             <!--<li class='last'><a href='<?php echo base_url();?>Collegeprincecommunity/alt_higher_option' <?php if($selected_sub_menu=='alt_higher_lst') echo 'style="color:#03F;"'?> ><span class="arrow_menutt"> Allotment wise Higher Option List</span></a></li>-->
                   <!-- <li class='last'><a href='<?php echo base_url();?>Collegeprincecommunity/temp_admit_list' <?php if($selected_sub_menu=='temp_admit') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">Higher Option from other colleges</span></a></li>-->
                   
                  
           <!-- <li class='last'><a href='<?php echo base_url();?>Collegeprincecommunity/permanet_admission' <?php if($selected_sub_menu=='prmnt_admn') echo 'style="color:#03F;"'?>><span class="arrow_menutt" style="font-size:12px;">Choosen Temporary To Permanent  </span></a></li>
                     <li class='last'><a href='<?php echo base_url();?>Collegeprincecommunity/rejcldlst'  <?php if($selected_sub_menu=='rejcldlst') echo 'style="color:#03F;"'?>><span class="arrow_menutt" style="font-size:12px;">Rejected/Cancelled/Discontinued</span></a></li>-->
                     
                     
                <!-- <li class='last'><a href='<?php echo base_url();?>Collegeprincecommunity/higheropt' <?php if($selected_sub_menu=='highr_opt') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">Higher Option List</span></a></li>
                     <li class='last'><a href='<?php echo base_url();?>Collegeprincecommunity/higher_opt_list' <?php if($selected_sub_menu=='highr_option') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">Higher Option List</span></a></li>
                    -->
               <!-- <li class='last'><a href='<?php echo base_url();?>Collegeprincecommunity/alt_rejcldlst' <?php if($selected_sub_menu=='alt_rejt_lst') echo 'style="color:#03F;"'?>><span class="arrow_menutt" style="font-size:12px;">Allotment wise Rejected/Cancelled/Discontinued</span></a></li>-->
                    
                </ul>
                </li>
               
                <?php /*?> <li class='has-sub <?php if($selected_main_menu=='capaltmnt') echo 'active';?>'><a href='#'><span>UGCAP Allotments<img src="<?php echo base_url();?>/images/new1.gif" /> </span></a>
                    <ul <?php if($selected_main_menu=='capaltmnt'){?>style="display:block;"<?php }?>>
                    
                    
                    <li class='last'><a href='<?php echo base_url();?>Collegeprincetrial' <?php if($selected_sub_menu=='alt_lst') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">Trial Allotment List</span></a></li>
                    
                    <!-- <li class='last'><a href='<?php echo base_url();?>Collegeprinceregaltmnt' <?php if($selected_sub_menu=='alt_lst') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">First Allotment List</span></a></li>-->
                    </ul>
                    </li><?php */?>
                
                 <li class='<?php if($selected_main_menu=='cancel') echo 'active'; else echo 'inactive';?>'><a href='<?php echo base_url();?>Collegeprince/cancelled_students'><span >UG Cancelled Students List</span></a></li>
              
			  <!--REGULAR-->
			  <li class='has-sub <?php if($selected_main_menu=='capaltmnt') echo 'active';?>'><a href='#'><span>UGCAP Allotments<!--<img src="<?php echo base_url();?>/images/new1.gif" />--> </span></a>
                    <ul <?php if($selected_main_menu=='capaltmnt'){?>style="display:block;"<?php }?>>
                 
                <!-- <li class='<?php if($selected_main_menu=='trial') echo 'active'; else echo 'inactive';?>'><a href='<?php echo base_url();?>Collegeprincetrial'><span>Trial Allotment<img src="<?php echo base_url();?>/images/new1.gif" /></span></a></li>-->
                 
                 
                  <!-- <li class='last'><a href='<?php echo base_url();?>Collegeprinceregaltmnt' <?php if($selected_sub_menu=='alt_lst') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">Third Allotment List</span></a></li>-->
                  
                 <!-- <li class='last'><a href='<?php echo base_url();?>Collegeprinceregaltmnt' <?php if($selected_sub_menu=='alt_lst') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">Sc/St Special II First Allotment List </span></a></li>-->
                  
                 
                  
                  <!-- <li class='last'><a href='<?php echo base_url();?>Collegeprinceregaltmnt' <?php if($selected_sub_menu=='alt_lst') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">Sc/St Special I First Allotment List </span></a></li>-->
                  <!-- <li class='last'><a href='<?php echo base_url();?>Collegeprinceregaltmnt' <?php if($selected_sub_menu=='alt_lst') echo 'style="color:#03F;"'?> ><span class="arrow_menutt"> Supplementary Allotment Second Allotment List </span></a></li>-->
                   
                   <!-- <li class='last'><a href='<?php echo base_url();?>Collegeprinceregaltmnt/viewandadmit_spotranklist1' <?php if($selected_sub_menu=='spot1') echo 'style="color:#03F;"'?> ><span class="arrow_menutt"> Final I Allotment RankList </span></a></li>-->
                   
                    <!--<li class='last'><a href='<?php echo base_url();?>Collegeprinceregaltmnt/viewandadmit_spotranklist1' <?php if($selected_sub_menu=='spot1') echo 'style="color:#03F;"'?> ><span class="arrow_menutt"> Final II Allotment RankList </span></a></li>-->
                    
                   <!-- <li class='last'><a href='<?php echo base_url();?>Collegeprinceregaltmnt/viewandadmit_spotranklist1' <?php if($selected_sub_menu=='spot1') echo 'style="color:#03F;"'?> ><span class="arrow_menutt"> Final III Allotment RankList </span></a></li>-->
                   
                    <!-- <li class='last'><a href='<?php echo base_url();?>Collegeprinceregaltmnt/viewandadmit_spotranklist1' <?php if($selected_sub_menu=='spot1') echo 'style="color:#03F;"'?> ><span class="arrow_menutt"> Special Allotment RankList </span></a></li>-->
                  
                  <!--<li class='last'><a href='<?php echo base_url();?>Collegeprinceregaltmnt/admittdlst' <?php if($selected_sub_menu=='admitted_lst') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">Admitted List</span></a></li>-->
                  
                 <li class='last'><a href='<?php echo base_url();?>Collegeprinceregaltmnt/admittdlst_quota' <?php if($selected_sub_menu=='quota_admitted_lst') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">Admitted List Merit Quota</span></a></li>
                 
                 
                 
          
                                      
           <!-- <li class='last'><a href='<?php echo base_url();?>Collegeprinceregaltmnt/alt_higher_option' <?php if($selected_sub_menu=='alt_higher_lst') echo 'style="color:#03F;"'?> ><span class="arrow_menutt"> Allotment wise Higher Option List</span></a></li>-->
             
             
                   <!-- <li class='last'><a href='<?php echo base_url();?>Collegeprinceregaltmnt/temp_admit_list' <?php if($selected_sub_menu=='temp_admit') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">Higher Option from other colleges</span></a></li>-->
                   
                    <!-- <li class='last'><a href='<?php echo base_url();?>Collegeprinceregaltmnt/admitted_list_namcorrection' <?php if($selected_sub_menu=='edit') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">Edit Name/DOB Admitted Students</span></a></li>--> 
                    
                    
             <!-- <li class='last'><a href='<?php echo base_url();?>Collegeprinceregaltmnt/permanet_admission' <?php if($selected_sub_menu=='prmnt_admn') echo 'style="color:#03F;"'?>><span class="arrow_menutt" style="font-size:12px;">Choosen Temporary To Permanent  </span></a></li> 
              
              
                     <li class='last'><a href='<?php echo base_url();?>Collegeprinceregaltmnt/rejcldlst'  <?php if($selected_sub_menu=='rejcldlst') echo 'style="color:#03F;"'?>><span class="arrow_menutt" style="font-size:12px;">Rejected/Cancelled/Discontinued</span></a></li>-->
                    <!-- <li class='last'><a href='<?php echo base_url();?>Collegeprinceregaltmnt/higheropt' <?php if($selected_sub_menu=='highr_opt') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">Higher Option List</span></a></li>
                     <li class='last'><a href='<?php echo base_url();?>Collegeprinceregaltmnt/higher_opt_list' <?php if($selected_sub_menu=='highr_option') echo 'style="color:#03F;"'?> ><span class="arrow_menutt">Higher Option List</span></a></li>
                    -->
                   
                   <!-- <li class='last'><a href='<?php echo base_url();?>Collegeprinceregaltmnt/search_stud' <?php if($selected_sub_menu=='search') echo 'style="color:#03F;"'?>><span class="arrow_menutt" style="font-size:12px;">Search Student</span></a></li>-->
                  <!-- <li class='last'><a href='<?php echo base_url();?>Collegeprinceregaltmnt/alt_rejcldlst' <?php if($selected_sub_menu=='alt_rejt_lst') echo 'style="color:#03F;"'?>><span class="arrow_menutt" style="font-size:12px;">Allotment wise Rejected/Cancelled/Discontinued</span></a></li>-->
                   
                   <!-- <li class='last'><a href='<?php echo base_url();?>Collegeprinceregaltmnt/viewandadmit_spotranklist1' <?php if($selected_sub_menu=='spot1') echo 'style="color:#03F;"'?>><span class="arrow_menutt" style="font-size:12px;">Spot I RankList</span></a></li>-->
                   <?php }?> 
                     
                </ul>
                </li>
				<!--regular end-->
                
                 <li class='<?php if($selected_main_menu=='consol_admitted_lst') echo 'active'; else echo 'inactive';?>'><a href='<?php echo base_url();?>Collegeprinceregaltmnt/admittdlst_consol'><span >Admitted List</span></a></li>
				
               
                
            
					<li class='<?php if($selected_main_menu=='consol') echo 'active'; else echo 'inactive';?>'><a href='<?php echo base_url();?>Collegeprince/consol'><span>Consolidated Admission List <br />(2023-2017) </span></a></li>
                    
                    
					
                   
              <?php }?>
                
                <!-- DCB-->
                  <li class='has-sub' <?php if($selected_main_menu=='dcb_common') echo 'active';else echo 'inactive';?>><a href='#'><span>Demand Collection<br /> Balance Statement </span></a>
                    <ul <?php if($selected_main_menu=='dcb_common'){?>style="display:block;"<?php }?>>
                    
                    <li class='last'><a href='<?php echo base_url();?>Dcb_cap/dcb_colg_dashboard' <?php if($selected_sub_menu=='DCB') echo 'style="color:#f44336;"'?> ><span class="arrow_menutt ">DCB</span><img src="<?php echo base_url();?>/images/new1.gif" /></a></li>
                      
                      <li class='last'><a href='<?php echo base_url();?>Dcb_cap/' <?php if($selected_sub_menu=='count') echo 'style="color:#f44336;"'?> ><span class="arrow_menutt ">Edit Student Count</span><img src="<?php echo base_url();?>/images/new1.gif" /></a></li>
                      
                
            </ul>     </li>
               
               
                <li class='<?php if($selected_main_menu=='change_pass') echo 'active'; else echo 'inactive';?>'><a href='<?php echo base_url();?>Collegeprince/changepass'><span>Change Password</span></a></li>
                <li><a href='<?php echo base_url();?>Publicpg/logout'><span>Logout	</span></a></li>
               <br />
              
            </ul>
        
        </div>
        </td>
	</tr>
    <tr><td height="5"></td></tr>
       <tr>
       
        <td align="center">
                 <?php if(session()->get('ug')==1){?>
                  <a href="<?php echo base_url();?>Collegeprince/"><img src="<?php echo base_url();?>images/button_ug.png" border="0"/></a>
                  <?php 
				 }
		if(session()->get('pg')==1){
		?>
			<a href="<?php echo base_url();?>Collegeprincepg/"><img src="<?php echo base_url();?>images/button_pg_inactive.png" border="0"/></a>
		<?php }
		if(session()->get('ip')==1){
		?>
             <a href="<?php echo base_url();?>Collegeprince_integrated/"><img src="<?php echo base_url();?>images/button_ip.png" border="0" width="90px"/></a>
        <?php }?>
                 </td>
       
      
       </tr><?php /*?><?php */?>
    <tr>
   	<td><div  style="color:#F00; padding-top:20px; padding-left:27px;">
        <a href='<?php echo base_url();?>Collegeprince/contact'><img src="<?php echo base_url();?>/images/cus1.jpg" width="160px;" height="60px;" /></a>
        
       </div></td>
   </tr>
    
    <tr>
    	<td width="100%" align="center" class="pad1">&nbsp;</td>
        
    </tr>
    <tr></tr>
</table>
  