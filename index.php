
<!DOCTYPE html>

<?php include 'includes/functions.php'; ?>

<html>
<title>Upload Test </title>
<head>    
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="../_styles/template.css" rel="stylesheet"></head>
<body>

<h1> Upload file </h1>
<small> This upload function currently accepts the ff: extensions ("jpeg", "jpg", "png", "pdf", "txt"). access  ./includes/upload_file.php to change. </small>


<br />
<br />
<form action="./includes/upload_file.php" method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="thisFile">
    <input type="submit" value="Upload Image" name="submit">
</form>

<hr />

<?php
       /** DISPLAY UPLOADED FILES **/
       $getFiles = getFiles(); 
       foreach($getFiles as $row) {
       $fileID = $row['id'];
       $fileName = $row['filename'];
       $filePath = $row['path'];
       $date = $row['date_uploaded'];
?>

<li> <?php echo $date; ?> | <img src ="./stylesheet/doc_icon.png"> <a href="<?php echo $thisPage."/".$filePath; ?>"><?php echo $fileName; ?></a>  </li>
<?php  } ?>




</body>
</html>


