<!DOCTYPE html>
<head lang=ru>
<meta charset="utf-8">
<link rel="stylesheet" href="css/regstyle.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/preloader.css">
<script src="js/script.js"></script>
 </head>
    <body >
    <div id="page-preloader" class="preloader">
<div class="loader"></div>
</div>
<form action="create.php" method="post" enctype="multipart/form-data">
<input type="file" name="image" required>
<input type="text" name="comment">
<button type="submit" class="btn btn-primary"> upload </button>
</form>
