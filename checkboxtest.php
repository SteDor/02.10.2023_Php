

<form action="" method="post">   
     <!-- Eine checkbox mit mehreren Auswahlmöglichkeiten -->
     <input type="checkbox" name="isChecked[]" value="Milch"> Milch<br>
     <input type="checkbox" name="isChecked[]" value="Eier"> Eier<br>
     <input type="checkbox" name="isChecked[]" value="Brot"> Brot<br>
     <input type="checkbox" name="isChecked[]" value="Tomate"> Tomate<br>
     <input type="submit" name="absenden" value="Liste absenden">
</form>
<?php 
if (isset($_POST['absenden'])){
echo "Einkaufsliste: <br>";
         if (isset($_POST['isChecked'])){
             foreach ($_POST['isChecked'] as $value) {
                 echo $value."<br>";
             }            

}
}
?>




