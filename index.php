<!-- Navigation Bar, Left Sided, Contains all DropDowns  the topics -->

<?php

//checks if it is an active session or not. 
//if it is active, then it will produce the outputs necessary to fill in the answer and 
//also the last inputted variables on the form.
//otherwise, regular page emerges. 
if (session_id() == ''){
	echo "SESSION IS NOT ACTIVE...";
	} else {
		echo "SESSION IS ACTIVE...";
		echo json_encode($_SESSION[JSON_POST]);
        $_SESSION[testpy] = $testpy;
        echo $testpy;
	}
?>

<?php include_once('constructors.php');
	$m = new linksPage();
	$m->headerCreate();
?>

<!--Nav Bar Left SideBar-->
<?php include 'navbar.php';	?> 

<!--page body-->
<?php
$_SESSION[formula_text] = "Speed";
$formula_text = $_SESSION[formula_text];
include_once('constructors.php');
//create variables that will initialize the fields............ or they are sent to constructors?

$m = new pageGenerator($formula_text);
$title = $m->title_set();
$formula = $m->formula_set();
$sample_problems = $m->sample_problems_set();
$description = $m->description_set();
$variables = $m->variables_set_test();
$form_input = $m->form_input();
$form_output = $m->form_output();

echo
'
<div class="col-8 bg-dark container-fluid justify-content-center">
  <!-- Page Header -->        
  <div class="row justify-content-center text-center shadow p-3 text-white">
    <h3>    
 		'.$title.'
    </h3>
  </div>
  <!-- Formula Panel Container-->
  <div class="container-fluid bg-light rounded justify-content-center">
    <!-- Form Header -->
    <div class="row p-2 text-center justify-content-center">
        <h3>    
			'.$formula.'
        </h3>
    </div>
    <div class="row p-3">
        
      <!--Form Contents-->
      
      <div class = "col-6 p-2">
      	<form class="p-0" action = "calculations.php" method ="post">
			
            <input type="hidden" name = "textHelper" value = "'.$title.'">
            
        	'.$variables, $form_input.'
      	</form>
      
      	'.$form_output.'
      
      </div>
      
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
                '.$description.'
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
                '.$sample_problems.'               
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
    '.$variables.'
</div>
</div>
';

/* */
$field_ids = $m->form_input_names;
?>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src = "script.js" type = "text/javascript"> </script>


</body>