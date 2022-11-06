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



<!--page body-->
<div class="col-8 bg-dark container-fluid justify-content-center">
  <!-- Page Header -->        
  <div class="row justify-content-center text-center shadow p-3 text-white">
    <h3>    
    <?php 
    include_once('constructors.php');
    $m = new pageGenerator("Speed");
    $m->title_set("Speed");
    ?>
    </h3>
  </div>
  <!-- Formula Panel Container-->
  <div class="container-fluid bg-light rounded justify-content-center">
    <!-- Form Header -->
    <div class="row p-2 text-center justify-content-center">
        <h3>    
        <?php 
        include_once('constructors.php');
        $m = new pageGenerator("Speed");
        $m->formula_set("Speed");
        ?>
        </h3>
    </div>
    <div class="row p-3">
        
      <!--Form Contents-->
      <form class="col-6 p-2" method="post" action="calculations.php">
        <?php
        include_once("constructors.php");
        $m = new pageGenerator("Speed");
        $m->variables_set_test("Speed");
		$m->form_input();
        ?>
      </form>
      
      <!--Information Accordian-->
      <div class="col-6 p-2">
        <!-- Accordian Container -->
        <div class="accordian" id="accordianHenrysLaw">
          <!-- Accordian Card for Explanation of Variables, Target is "collapseVars"-->
          <div class="card">
            <!-- Explan Vars Header and button contents -->
            <div class="card-header">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseVars">
                  Explanation of Variables
                </button>
              </h5>
            </div>
            <!-- Card Body for Explanation of Vars -->
            <div id="collapseVars" class="collapse show">
              <div class="card-body">
                poop
              </div>
            </div>
          </div>

          <div class="card">
            <!-- Formula Info Header and button contents -->
            <div class="card-header">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInfo">
                  Formula Description and Information
                </button>
              </h5>
            </div>
            <!-- Card Body for Formula Info -->
            <div id="collapseInfo" class="collapse show">
              <div class="card-body">
                <?php 
                include_once('constructors.php');
                $m = new pageGenerator("Speed");
                $m->description_set("Speed");
                ?>
              </div>
            </div>
          </div>

          <div class="card">
            <!-- Formula Info Header and button contents -->
            <div class="card-header">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseProbs">
                  Sample Problems Worked
                </button>
              </h5>
            </div>
            <!-- Card Body for Sample Problems -->
            <div id="collapseProbs" class="collapse show">
              <div class="card-body">
                <?php 
                include_once('constructors.php');
                $m = new pageGenerator("Speed");
                $m->sample_problems_set("Speed");
                ?>                 
              </div>


            </div>
          </div>

          <div class="card">
            <!-- Further Reading Header and button contents -->
            <div class="card-header">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFurther">
                  Further Reading
                </button>
              </h5>
            </div>
            <!-- Card Body for Further Reading -->
            <div id="collapseFurther" class="collapse show">
              <div class="card-body">
                Further Reading Here
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

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