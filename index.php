<!DOCTYPE html>
<html>
<head>
	<title>Code Judge</title>
	<link rel="stylesheet" type="text/css" href="plugin/codemirror/lib/codemirror.css">
	<link rel="stylesheet" href="plugin/codemirror/addon/hint/show-hint.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
	<link rel="stylesheet" href="css/selectric.css">
    <link rel="stylesheet" type="text/css" href="css/default.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="icon" type="image/jpg" href="assets/icon.png" />
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col s2 sidebar">


			</div>
			<div class="col s10">
				<form action="" method="POST">
					<div class="wrap z-depth-2">		
						<div class="code-header">
							<span>Test Your Code Here</span>
							
							<div class="input-field lang">
							    <select>
								    <option value="1">C / C++</option>
								    <option value="2">Java</option>
								    <option value="3">Python 3</option>
							    </select>
							</div>				    
						</div>	
					 	<textarea class="codemirror-textarea code">
#include<iostream>
using namespace std;
int main(){
	int i,j,count=0;
	if(count==0){
        //Do Something
	}
	return 0; 
}
					 	</textarea>		 	
					</div>
					<p class="checkbox">
					    <label>
					        <input type="checkbox" class="filled-in"/>
					        <span>Run Against Custom Input</span>
					    </label>
					</p>	
					<div class="actions">
						
						<button class="run-code btn blue-grey lighten-5" type="submit" name="run">{ }  Run Code</button>
						<button class="btn waves-effect waves-light" type="submit" name="action">Submit Code<i class="material-icons right icon-white">send</i></button>
					</div>
				</form>
			</div>

		</div>

	</div>
	






	 <script type="text/javascript" src="js/jquery.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
	 <script type="text/javascript" src="plugin/codemirror/lib/codemirror.js"></script>
	 <script src="plugin/codemirror/mode/clike/clike.js"></script>
	 <script src="plugin/codemirror/addon/hint/show-hint.js"></script>
	 <script src="plugin/codemirror/addon/hint/anyword-hint.js"></script>
	 <script src="plugin/codemirror/addon/edit/matchbrackets.js"></script>
	 <script src="js/selectric.js"></script>
	 <script type="text/javascript" src="js/default.js"></script>
	 <script>
		$(function() {
		  $('select').selectric();
		});
	 </script>
</body>
</html>