<html>
    <body>
        <form action="test2.php" method="post" enctype="multipart/form-data">
            Name: <input type="text" name="imageName" />
            Image: <input type="file" name="image" />
            <input type="submit" value="submit" />
        </form>
    </body>
</html>

<?php
  echo $_POST['imageName'];
  echo "<pre>";
  echo var_dump($_FILES['image']);
  echo "</pre>";
?>
