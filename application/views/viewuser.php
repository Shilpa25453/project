<!DOCTYPE html>
<html>
    <head>
      <title>ADD AIRLINE DETAILS</title>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/style.css');?>" media="all">
      <meta charset=utf-8>
      <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
    </head>
  <style>
  </style>
    <body>
<!-- nav section start -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  <!---main nav--->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url()?>main/adminhome"> Home</a>        
            
      </div>
    </nav>
    <!---nav end--->
<div class="container" id="homepage">
	<body>
		
		<h2>VIEW user details</h2>
		<form action="" method="post">
		<table class="table table-success table-striped table-hover">
		<tr>
		<td>FIRST NAME</td>
        <td>LATNAME</td>
        <td>AGE</td>
        <td>GENDER</td>
        <td>ADDRESS</td>
        <td>PHONE NUMBER</td>
        <td>EMAIL</td>	
		</tr>
		<?php
		if($n->num_rows()>0)
		{
			foreach($n->result() as $row)
			{
        ?>
        <tr>
        			<td>
        				<?php echo $row->fname;?></td>
                            <td>
                            <?php echo $row->lname;?></td>
                             <td>
                            <?php echo $row->age;?></td>
                             <td>
                            <?php echo $row->gender;?></td>
                             <td>
                            <?php echo $row->address;?></td>
                             <td>
                            <?php echo $row->phno;?></td>
                            <td>
                            <?php echo $row->email;?></td>

                            
                            </tr>
                                <?php

        					}
                        }
                    
                        ?>
	</table>
</form>
</div>
<footer class="container-fluid text-center">  
  </footer>
</body>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>
<!---Custom Js-->
<script src="js/script.js"></script>

</html>