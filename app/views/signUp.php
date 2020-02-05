<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<!--MAIN-->
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
						     <h2>New Buyer Signup</h2>
							  <form method="post" action="buyers.cgi">
							  <input type="hidden" name="new" value="user"/>
							  
							  <p>Not a Buyer? <a href="freelancers.cgi?new=user">Click here</a> to signup as a Programmer to place bids instead.
							  <p>Tip: We recommend you <a href="buyers.cgi?new=project"><big>Post your project</big></a> <i>before</i> signing up.
							  <p><strong>E-mail Address:</strong>
								<input type="text" name="email" size="40"/>
								<input type="submit" class="clsSmall" value="Submit" name="submit"/><br />
								<small>Please provide a valid e-mail address. Only Programmers you choose to work with<br /> will see your e-mail address. <a href="#">View our Privacy Policy</a>.</small></p>
							</form>
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