<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<!--MAIN-->
<script type="text/javascript" src="<?php echo base_url() ?>app/js/livepipe.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>app/js/tabs.js"></script>
<div id="main" >
<?php
//Show Flash Message
if($msg = $this->session->flashdata('flash_message'))
{
	echo $msg;
}
?>
<!--SIGN-UP-->
<div id="selSignUp">
  <div class="clsPostProject">
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
                          <h2><?php echo $this->lang->line('Reports'); ?></h2>
                          <br />
                          <label>&nbsp;</label>
                          <?php
							open_flash_chart_object("400","300", site_url('reports/numberOfUsersSigned'), false ,base_url());
							echo "<br><br><br>  <label>&nbsp;</label>";
							open_flash_chart_object("400","300", site_url('reports/projectsCreated'), false,base_url() );
						  ?>
                          <!-- Show skills using tabs -->
                        </div>
                        <!--SIGN-UP-->
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
<!--END OF MAIN-->
<?php $this->load->view('footer'); ?>