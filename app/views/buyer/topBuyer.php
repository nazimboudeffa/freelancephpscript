<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<!--MAIN-->
<div id="main">
  <!--POST PROJECT-->
  <div class="clsInnerpageCommon">
<div class="block">
           <div class="main_t">
        <div class="main_r">
          <div class="main_b">
            <div class="main_l">
              <div class="main_tl">
                <div class="main_tr">
                  <div class="main_bl">
                    <div class="main_br">
                      <div class="cls100_p">
                        <div class="clsInnerCommon">
                          <h2><?php echo $this->lang->line('Top Buyers');?></h2>
                          <table cellspacing="1" cellpadding="2" width="96%">
                            <tbody>
                              <tr>
                                <td width="30" class="dt"><?php echo $this->lang->line('Sl.No');?></td>
                                <td width="250" class="dt"><?php echo 'Buyer Name';?></td>
                                <td width="60" class="dt"><?php echo $this->lang->line('Rating');?></td>
                                <td width="250" class="dt"><?php echo $this->lang->line('Reviews');?></td>
                              </tr>
                              <?php $i=0;
								  foreach($topBuyers as $key=>$value)
									{
									  $user = getUserInfo($key);
									  $condition1=array('subscriptionuser.username'=>$user->id);
								$certified1= $this->certificate_model->getCertificateUser($condition1);
									  if( $i%2 ==0 )
										$class = 'dt1 dt0';
									  else 
										$class = 'dt2 dt0';		
									   ?>
                              <tr class="<?php echo $class; ?>">
                                <td><?php echo $i=$i+1;?></td>
                                <td><a href="<?php echo site_url('buyer/viewProfile/'.$user->id);?>"><?php echo $user->user_name;?></a>
								<?php 
							   $condition1=array('subscriptionuser.username'=>$user->id);
								$certified1= $this->certificate_model->getCertificateUser($condition1);
								if($certified1->num_rows()>0)
			                    {
									// get the validity
									$validdate=$certified1->row();
									$end_date=$validdate->valid; 
									$created_date=$validdate->created;
									$valid_date=date('d/m/Y',$created_date);
								    $next=$created_date+($end_date * 24 * 60 * 60);
									$next_day= date('d/m/Y', $next) ."\n";
							        if(time()<=$next)
								    {?>
								<img src="<?php echo image_url('certified.gif');?>"  title="<?php echo $this->lang->line('Certified Member') ?>" alt="<?php  echo $this->lang->line('Certified Member')?>"/>
								<?php } 
								   }?>
								</td>
                                <td><?php echo $user->user_rating;?></td>
                                <td><?php echo $user->num_reviews;?></td>
                              </tr>
                              <?php  
									} ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--END OF POST PROJECT-->
</div>
<!--END OF MAIN-->
<?php $this->load->view('footer'); ?>