<div class="col-2 bg-dark">
  <div class="card bg-dark">
    <div class="card-header">
      <h5 class="mb-0"><button class="btn btn-link">Home </button></h5>
    </div>
  </div>

  <!--CHEMISTRY ACCORDIAN-->  
  <div id="accordian">
    <!--Card Container CHEMISTRY, bg color-->
    <div class="card bg-dark">
      <!-- Card Header and Button -->
      <div class="card-header" id="headingOne">
        <h5 class="mb-0"> <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne">Chemistry
          </button>
        </h5>
      </div>
    </div>

    <!-- Card Body, CHEMISTRY Light Bg-->
    <div id="collapseOne" class="collapse">
      <div class="card-body bg-light">
        <!--Tab Navigation-->
        <nav class="justify-content-center">
          <div class="nav nav-tabs p-3 justify-content-center" id="nav-tab" role="tablist">
            <a class="nav-link nav-item active" data-toggle="tab" href="#nav-calc" role="tab">Calculators</a>
            <a class="nav-link nav-item" data-toggle="tab" href="#nav-sim" role="tab">Simulators</a>
          </div>
        </nav>  

        <div class="tab-content text-center" id="nav-tabContent">
          <!--Chemistry Calculator search Form Control for tab content-->
          <input class="form-control" id="myInput" type="text" placeholder="Search..">
          <!--Chemistry Calculator Tab contents-->
          <div class="tab-pane fade show active" id="nav-calc" role="tabpanel">
            <!--Sample Topics1 Section Header and divider-->
            <h6 class="p-2 text-center">Sample Topics1</h6>
            <div class="dropdown-divider"></div>
            <!--Sample Topics1 Section list group and contents-->
            <div class="list-group justify-content-center">
                <?php
                include_once("constructors.php");
                $m = new Subject_Nav("Chemistry");
                $m->display_links("Chemistry");
                ?>
            </div>
          </div>


          <!--Chemistry Simulations Tab Contents-->
          <div class="tab-pane fade show" id="nav-sim" role="tabpanel">
            <!--Sample Topics1 Section Header and divider-->
            <h6 class="p-2 text-center">Sample Topics1</h6>
            <div class="dropdown-divider"></div>
            <!--Sample Topics1 Section list group and contents-->
            <div class="list-group">
            </div>
          </div>        
        </div>
      </div>
    </div>
  </div>

  <!--PHYSICS ACCORDIAN-->
  <div id="accordian">
    <!--Card Container PHYSICS, bg color-->
    <div class="card bg-dark">
      <!-- Card Header and Button -->
      <div class="card-header" id="headingOne">
        <h5 class="mb-0"> <button class="btn btn-link" data-toggle="collapse" data-target="#collapsePhys">Physics
          </button>
        </h5>
      </div>
    </div>
    <!-- Card Body PHYSICS, Light Bg-->
    <div id="collapsePhys" class="collapse">
      <div class="card-body bg-light">
        <!--Physics Tab Navigation-->
        <nav class="justify-content-center">
          <div class="nav nav-tabs p-3 justify-content-center" id="nav-tab" role="tablist">
            <a class="nav-link nav-item active" data-toggle="tab" href="#nav-calc-phys" role="tab">Calculators</a>
            <a class="nav-link nav-item" data-toggle="tab" href="#nav-sim-phys" role="tab">Simulators</a>
          </div>
        </nav>  
        <div class="tab-content text-center" id="nav-tabContent">
          <!--Physics Calculator search Form Control for tab content-->
          <input class="form-control" id="myInput" type="text" placeholder="Search..">
          <!--Physics Calculator Tab contents-->
          <div class="tab-pane fade show active" id="nav-calc-phys" role="tabpanel">
            <!--Header for topic section group list-->
            <h6 class="p-2 text-center">Sample Topics1</h6>
            <!--dropdown divider-->
            <div class="dropdown-divider"></div>
            <!--list group for sample topic-->
            <div class="list-group justify-content-center">
                <?php
                include_once("constructors.php");
                $m = new Subject_Nav("Physics");
                $m->display_links("Physics");
                ?>
            </div>
          </div>
          <!--Physics Simulations Tab Contents-->
          <div class="tab-pane fade show" id="nav-sim-phys" role="tabpanel">
            <!--Sample Topics1 Section Header and divider-->
            <h6 class="p-2 text-center">Sample Topics1</h6>
            <div class="dropdown-divider"></div>
            <!--Sample Topics1 Section list group and contents-->
            <div class="list-group">
              <a class="list-group-item-action list-group-item" href="#">Poop1</a>
              <a class="list-group-item-action list-group-item" href="#">Poop2</a>
            </div>
            <!--Sample Topics2 Section Header and divider-->
            <h6 class="p-2 text-center">Sample Topics2</h6>
            <div class="dropdown-divider"></div>
            <!--Sample Topics2 Section list group and Contents-->
            <div class="list-group">
              <a class="list-group-item-action list-group-item" href="#">Poop43</a>
              <a class="list-group-item-action list-group-item" href="#">Poop420</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!--MATH ACCORDIAN-->
  <div id="accordian">
    <!-- card container-->
    <div class="card bg-dark">
      <!-- Card Header and Button -->
      <div class="card-header" id="headingOne">
        <h5 class="mb-0"> <button class="btn btn-link" data-toggle="collapse" data-target="#collapseMath">Math
          </button>
        </h5>
      </div>

      <!--Card Body Math -->
      <div id="collapseMath" class="collapse">
        <div class="card-body bg-light">
          <!--Math Tab Navigation-->
          <nav class="justify-content-center">
            <div class="nav nav-tabs p-3 justify-content-center" id="nav-tab" role="tablist">
              <a class="nav-link nav-item active" data-toggle="tab" href="#nav-calc-math" role="tab">Calculators</a>
              <a class="nav-link nav-item" data-toggle="tab" href="#nav-sim-math" role="tab">Simulators</a>
            </div>
          </nav>  
          <div class="tab-content text-center" id="nav-tabContent">
            <!--Math Calculator search Form Control for tab content-->
            <input class="form-control" id="myInput" type="text" placeholder="Search..">
            <!--Math Calculator Tab contents-->
            <div class="tab-pane fade show active" id="nav-calc-math" role="tabpanel">
              <!--Header for topic section group list-->
              <h6 class="p-2 text-center">Sample Topics1</h6>
              <!--dropdown divider-->
              <div class="dropdown-divider"></div>
              <!--list group for sample topic-->
              <div class="list-group">
                <!--List item-->
                <div class="list-group justify-content-center">
                <?php
                include_once("constructors.php");
                $m = new Subject_Nav("Math");
                $m->display_links("Math");
                ?>
            </div>
              </div>

            </div>
            <!--Math Simulations Tab Contents-->
            <div class="tab-pane fade show" id="nav-sim-math" role="tabpanel">
              <!--Sample Topics1 Section Header and divider-->
              <h6 class="p-2 text-center">Sample Topics1</h6>
              <div class="dropdown-divider"></div>
              <!--Sample Topics1 Section list group and contents-->
              <div class="list-group">
                <a class="list-group-item-action list-group-item" href="#">Math43</a>
                <a class="list-group-item-action list-group-item" href="#">Math420</a>
              </div>
              <!--Sample Topics2 Section Header and divider-->
              <h6 class="p-2 text-center">Sample Topics2</h6>
              <div class="dropdown-divider"></div>
              <!--Sample Topics2 Section list group and Contents-->
              <div class="list-group">
                <a class="list-group-item-action list-group-item" href="#">Mathmama</a>
                <a class="list-group-item-action list-group-item" href="#">Poop420</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--STATS ACCORDIAN-->
  <div id="accordian">
    <!-- card container-->
    <div class="card bg-dark">
      <!-- Card Header and Button -->
      <div class="card-header" id="headingStats">
        <h5 class="mb-0"> <button class="btn btn-link" data-toggle="collapse" data-target="#collapseStats">Statistics
          </button>
        </h5>
      </div>

      <!--Card Body Stats -->
      <div id="collapseStats" class="collapse">
        <div class="card-body bg-light">
          <!--Stats Tab Navigation-->
          <nav class="justify-content-center">
            <div class="nav nav-tabs p-3 justify-content-center" id="nav-tab" role="tablist">
              <a class="nav-link nav-item active" data-toggle="tab" href="#nav-calc-stats" role="tab">Calculators</a>
              <a class="nav-link nav-item" data-toggle="tab" href="#nav-sim-stats" role="tab">Simulators</a>
            </div>
          </nav>  
          <div class="tab-content text-center" id="nav-tabContent">
            <!--Math Calculator search Form Control for tab content-->
            <input class="form-control" id="myInput" type="text" placeholder="Search..">
            <!--Math Calculator Tab contents-->
            <div class="tab-pane fade show active" id="nav-calc-stats" role="tabpanel">
              <!--Header for topic section group list-->
              <h6 class="p-2 text-center">Sample Topics1</h6>
              <!--dropdown divider-->
              <div class="dropdown-divider"></div>
              <!--list group for sample topic-->
              <div class="list-group justify-content-center">      
                <?php
                include_once("constructors.php");
                $m = new Subject_Nav("Statistics");
                $m->display_links("Statistics");
                ?>
              </div>
             
            </div>
            <!--Physics Simulations Tab Contents-->
            <div class="tab-pane fade show" id="nav-sim-stats" role="tabpanel">
              <!--Sample Topics1 Section Header and divider-->
              <h6 class="p-2 text-center">Sample Topics1</h6>
              <div class="dropdown-divider"></div>
              <!--Sample Topics1 Section list group and contents-->
              <div class="list-group">
                <a class="list-group-item-action list-group-item" href="#">Stat43</a>
                <a class="list-group-item-action list-group-item" href="#">Stat420</a>
              </div>
              <!--Sample Topics2 Section Header and divider-->
              <h6 class="p-2 text-center">Sample Topics2</h6>
              <div class="dropdown-divider"></div>
              <!--Sample Topics2 Section list group and Contents-->
              <div class="list-group">
                <a class="list-group-item-action list-group-item" href="#">Statpoop</a>
                <a class="list-group-item-action list-group-item" href="#">Poop420</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>