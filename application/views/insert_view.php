

<html>
<head>
<title>Impossible mission</title>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>css/main.css" />
</head>
<body>

<div id="container">
<?php echo form_open('insert_ctrl'); ?>
<h1 style="color:white">Send youre informations for our next mission</h1><hr/>
<?php if (isset($message)) {?>
<CENTER><h3 style="color:green;">You accomplished youre mission, congratulations !</h3></CENTER><br>
<?php } ?>
<?php echo form_label('<h2 style="color:white">Name :</h2>'); ?> <?php echo form_error('dname'); ?><br />
<?php echo form_input(array('id' => 'dname', 'name' => 'dname')); ?><br />

<?php echo form_label('<h2 style="color:white">Email :</h2>'); ?> <?php echo form_error('demail'); ?><br />
<?php echo form_input(array('id' => 'demail', 'name' => 'demail')); ?><br />

<?php echo form_label('<h2 style="color:white">Phone number :</h2>'); ?> <?php echo form_error('dmobile'); ?><br />
<?php echo form_input(array('id' => 'dmobile', 'name' => 'dmobile', 'placeholder' => '10 Digit Mobile No.')); ?><br />

<?php echo form_label('<h2 style"color:white">Adress :</h2>'); ?> <?php echo form_error('daddress'); ?><br />
<?php echo form_input(array('id' => 'daddress', 'name' => 'daddress')); ?><br />

<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<a name="start" title="list" class="button button-primary"
href="<?php echo site_url("Print_list") ?>">See list</a>
<?php echo form_close(); ?><br/>
<div id="fugo">

</div>
</div>
</body>
</html>
