<?php

class linksPage {
	
	function headerCreate(){
    
	echo '
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

	</head>
	<!-- Body Container-->
	<body class="container-fluid p-0">

	<!-----------------------------------------------------Page Grid--------------------------------------------->
	<!-- Page Container -->
	<div class="row">
    ';
   
    
    }

	function foooterCreate(){
    echo ' 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src = "script.js" type = "text/javascript"> </script>
	</body>
    
    ';
    }

}


class Subject_Nav {
    public $subject;
    public static $sname = "localhost";
    public static $uname = "calcs";
    public static $pword = "Muaythai97!@";
    public static $dbase ="calcs";
    
    
    function __construct($subject){
        $servername = "localhost";
        $username = "calcs";
        $password = "Muaythai97!@";
        $database = "calcs";
        $conn = new mysqli($servername, $username, $password, $database);
        
        $this->subject = $subject;
        $sql = "SELECT * FROM `Navbar_Contents` WHERE `subject` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $this->subject);
        $stmt->execute();
        $this->result = $stmt->get_result();
        $this->conn = $conn;
    }

    function display_links($subject){
        $result=$this->result;
        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {
                echo '<a class="list-group-item-action list-group-item" href="' . $row['link'] . '">' . $row['formula_name'] . '</a>';
            }
        }
    }
    }
    
    
    
class pageGenerator {

	//result here refers to the sql statement leading to the associative array. Needs to be optimized

    public $formula;

    function __construct($formula){
        $servername = "localhost";
        $username = "calcs";
        $password = "Muaythai97!@";
        $database = "calcs";
        $conn = new mysqli($servername, $username, $password, $database);
        
        $this->formula = $formula;
        $sql = "SELECT * FROM `Navbar_Contents` WHERE `formula_name` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $this->formula);
        $stmt->execute();
        $this->result = $stmt->get_result(); 
    	$this->row = $this->getRow();
    }
///////////////////////////////////////
	public function getRow(){
		$result = $this->result;
    	if ($result->num_rows>0){
			$row = $result->fetch_assoc();
        	return $row;
        }
    }
    //set Title
    function title_set(){
    	//set formula name from db.
    	$row = $this->row;
    	return $row['formula_name'];
    }
/////////////////////////////////////////////
    //set formula string
    function formula_set(){
        $row = $this->row;
    	return $row['formula'];
    }
    
    //set sample problems
    function sample_problems_set(){
        $row = $this->row;
    	return $row['sample_problems'];
    }
    
    //set description
    function description_set(){
    	$row = $this->row;
    	return $row['description'];
    }
    
    function variables_set_test(){
        //Creates an associative array from the JSON input from the database as $this->varjson. Varjson is in form {"var1":{"description":..., "unit":..., "latex":...}}
        $formula_name = $this->formula;
    	$row = $this->row;
        $this->varjson = json_decode($row['variables'], true);
       	$vararr = $this->varjson;        
    
		//Create a regular array to store id for text and option inputs
        $form_input_names = array();
        	//Create array containing each input, input_units  
    	$variables_form_contents = "";	
    
  ///  
    	echo '       
        <input type = "hidden" name = "textHelper" value = '.$formula_name.'>
        ';
    		
        foreach($vararr as $v => $v_conts){
       		//placeholder will need review for now to be used in input class generated to give a value
        	//only to be displayed if $_SESSION[response] is true
        	
       		//check if the session response variable is true or false. If false, then create normal page
        	//if true, then give valueInputs attribute to the HTML generatedd
        	if(session_id() == ''){
            	$selectedOrNot = "selected";
            	$selectValue = "";
            	echo '';
            	$testpy = '';
            }
        
            else{
				$postValue = $_POST[$v];
            	$valuePlaceHolder = 'value = "'.$postValue.'"';
            	$selectValue = $_POST[$v.'_units'];
            	$selectPlaceHolder = 'value = "'.$selectValue.'"';
            	$selectedOrNot = '';
            	$testpy = $_SESSION[testpy];
            }
        
        
        	
        	$variable_name = $v;
        	$variable_unit = $v.'_units';
        	$form_input_names[$variable_name] = "";
            $form_input_names[$variable_unit] = "";
        	$variables_form_contents = 
           	$variables_form_contents.  
				'<div class = "input-group mb-3 p-0">
                	 <div class="input-group=prepend">
                    	 <span class="input-group-text">' . $v_conts['latex'] . '</span>
                 	</div>
                 	<input type = "text" class = "form-control" placeholder="'.$v_conts['description'].'" name='. $v .' id ='. $v .' ' .$valuePlaceHolder.' >
                 	<div class="input-group-append">
                    	<select class="form-control" name ='.$v.'_units id ='.$v.'_units>
							<option value = "" '.$selectedOrNot.' disabled hidden>Choose Unit</option>                        
                        '
                    	     . self::unit_options($v_conts, $selectValue) .
                     	'</select>
                 	</div>
	'.$testpy.'
				</div>
                                ';
        
        }
    	return $variables_form_contents;
    	$this->form_input_names = $form_input_names;
 
    }


	function responseVariables(){
		
    }

    function form_input() {
    return '<input type = "submit" class = "form-control button" id = "form_input">';
    } 
	//Only takes care of listing unit options for the page
	
	function form_output() {
   	return 
    '<div class="card card-body text-center bg-light ma-0" id = "output_field">
    Answer
    </div>'
    ;
    }
	

	static function unit_options($v_conts, $selectValue){
        $sname = "localhost";
        $uname = "calcs";
        $pword = "Muaythai97!@";
        $dbase ="calcs";
        $unit = $v_conts['unit'];
        $sql = "SELECT * FROM `units` where `unit` = ?";
        $connect = new mysqli($sname, $uname, $pword, $dbase);
        $stmt = $connect->prepare($sql);
        $stmt->bind_param("s", $v_conts['unit']);
        $stmt->execute();
        $result = $stmt->get_result();
        $list = " ";

        	
        
        $i = 0;
        if ($result->num_rows>0){
        
            while ($row=$result->fetch_assoc()){
            	$i = $i + 1;
            
            	if($i == $selectValue){
                	$selected = "selected";
                } else {
                $selected = "";
                }
            
                $list = $list . '<option value = '.$i. ' ' .$selected. '>' . $row['name'] . '('. $row["symbol"] .')' ."</option>";
            }
        }  
        return $list;
    }	
}	
	
?>