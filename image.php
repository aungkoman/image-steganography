<?php
        $image = isset($_GET['v']) ? $_GET['v'] : null;
        if($image == null ) die("can't find v");
        $image_url = "http://localhost/myanmar_image/images/".$image.".png";
        echo "<img src='$image_url' />";
        //echo "image_url is ".$image_url;
?>

<br>
<form action="../decrypt.php" method="post">
    <input type="password" id="password" name="password" required placeholder="စကားဝှက်">
        <input type="text" name="v" style="display:none"  value="<?php echo $image; ?>">
        
        <input type="submit"  id="send_button" value="ပုံဖော်ရန်">
</form>


<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
  <script src="js/jquery.loadingModal.min.js"></script>
    
    <script src="js/main.js"></script>
    <script>
      $("#send_button").on("click",function(){
        show_loading_modal("ဓာတ်ပုံများ ဆာဗာသို့ ပေးပို့နေပါပြီ  ... ");
      })
    </script>
