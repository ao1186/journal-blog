<?php
if (isset($_SESSION['status'])) {
?>
<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
  <strong><?=$_SESSION['status'];?></strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php
    unset($_SESSION['status']);
    unset($_SESSION['message']);

}?>

