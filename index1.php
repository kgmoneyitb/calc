<!-- Navigation Bar, Left Sided, Contains all DropDowns  the topics -->

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script type="text/javascript" id="MathJax-script" async
  src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-chtml.js">
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3224929804342005"
     crossorigin="anonymous"></script>

<!-- Script Tag "function" -->
//calculate function runs as follows: just send the Request to calculate.php

</head>
<!-- Body Container-->
<body class="container-fluid p-0">

<!-----------------------------------------------------Page Grid--------------------------------------------->
<!-- Page Container -->
<div class="row">
<!--Nav Bar Left SideBar-->

<?php include 'navbar.php'; ?>


<?php 
include_once("constructors.php");
$m = new pageGenerator("Speed");
$m->generateBody("Speed");
?>

<!--Related Information Right Sidebar-->
<div class="col-2 shadow bg-light">
    <?php
    include_once("constructors.php");
    $m = new pageGenerator("Speed");
    $m->variables_set_test("Speed");
    ?>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>