<?php
  include './include/header.php';
  include './include/navbar.php';
  include './include/functions.php';
  if(isset($_GET['page']) && !empty($_GET['page'])){

    $page = $_GET['page'];
    if($page === 'home'){
      include './pages/home.php';
    }else if($page === 'upload'){
      include './pages/upload.php';
    }else if($page === 'uploadsuccess'){
      include './pages/uploadSuccess.php';
    }else{
      include './pages/home.php';
    }

  }else{
    include './pages/home.php';
  }


  include './include/footer.php';
?>
