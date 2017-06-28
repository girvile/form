<html>
<head>
<title>Impossible mission</title>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>css/main.css" />
</head>
<body>

<div id="container">
<h1>The List :</h1>
<?php foreach($students as $row):?>
  <ul>
    <h4><?php echo $row['Student_Name']; ?></h4>
    <li><?php echo $row['Student_Mobile']; ?></li>
    <li><?php echo $row['Student_Address']; ?></li>
    <li><?php echo $row['Student_Email']; ?></li>
  </ul>
<?php endforeach; ?>
</div>
</body>
</html>
