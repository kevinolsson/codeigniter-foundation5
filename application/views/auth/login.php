<?php
$base_url = $this->config->item('base_url'); 
$assets = $this->config->item('assets');
?>

<?php echo form_open("auth/login");?>
<div class="login large-5 columns large-centered small-centered">
  <fieldset>

    <legend>
      <h4><strong><?=$this->config->item('company');?></strong> Portal</h4>
    </legend>
    
    <!-- Username -->
    <div class="row collapse">
      <div class="small-3 columns">
        <span class="prefix">Username</span>
      </div>
      <div class="small-9 columns">
        <?php echo form_input($identity);?>
      </div>
    </div>
    
    
    <!-- Password -->
    <div class="row collapse">
      <div class="small-3 columns">
        <span class="prefix">Password</span>
      </div>
      <div class="small-9 columns">
        <?php echo form_input($password);?>
      </div>
    </div>

    <!-- Branch -->
    <div class="row collapse">
      <div class="small-3 columns">
        <span class="prefix">Branch</span>
      </div>
      <div class="small-9 columns">
        <select required name="branch">
          <option value="1">Headquarters</option>
          <option selected value="2">Pasig</option>
          <option value="3">Jasaan</option>
          <option value="4">Davao</option>
          <option value="5">Carmona</option>
          <option value="6">Dumoy</option>
          <option value="7">Recodo</option>
          <option value="8">Butuan</option>
          <option value="9">San Pascual</option>
        </select>
      </div>
    </div>
    
    <!-- Remember Me Checkbox -->
    <div class="row collapse">
      <div class="small-8 columns remember-me">
        Remember Me:&nbsp;
        <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
      </div>
      <div class="small-4 columns">
        <input type="submit" class="submit" name="submit" value="Sign In">
      </div>
    </div>
    
  </fieldset>
  
  <?php if(isset($message)) : ?>
    <!-- Error Message -->
    <div class="message">
      <?php echo $message;?>
    </div>
  <?php endif; ?>


<?php echo form_close();?>
