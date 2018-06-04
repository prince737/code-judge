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
	<div class="container-fluid display-table">
		<div class="row display-table-row">
			<div class="col s2 sidebar display-table-cell">
				<h4 class="team-name">void main()</h4>
				<p class="tr">Time Remaining:</p>
				<div class="timer">
					<div class="hour time">01</div>
					<div class="minute time">48</div>
					<div class="second time">03</div>
				</div>

				<div class="attempted">
					<div class="q1 q">Question 1: <span>Not Attempted</span></div>
					<div class="q2 q">Question 2: <span>Not Attempted</span></div>
					<div class="q3 q">Question 3: <span>Not Attempted</span></div>
					<div class="q4 q">Question 4: <span>Not Attempted</span></div>
					<div class="q5 q">Question 5: <span>Not Attempted</span></div>
				</div>
				<button class="btn waves-effect waves-light" type="submit" name="action">Submit<i class="material-icons right icon-white">send</i></button>

			</div>
			<div class="col s10">
				<div class="header z-depth-1">
					<p class="brand-name">Generic Name</p>
					<span>Organised By: Cultural Comittee, Department of CA</span>
				</div>
				<div class="questions-wrap">
					<ul id="tabs-swipe-demo" class="tabs">
					    <li class="tab col s2"><a class="active" href="#test-swipe-1">Question 1</a></li>
					    <li class="tab col s2"><a href="#test-swipe-2">Question 2</a></li>
					    <li class="tab col s2"><a href="#test-swipe-3">Question 3</a></li>
					    <li class="tab col s2"><a href="#test-swipe-4">Question 4</a></li>
					    <li class="tab col s2"><a href="#test-swipe-5">Question 5</a></li>
					</ul>
					<div id="test-swipe-1" class="col s12 question z-depth-2">

						<p class="normal-text">Given the participants' score sheet for your University Sports Day, you are required to find the runner-up score. You are given scores. Store them in a list and find the score of the runner-up.</p>

						<p class="bold-text">Input Format</p>

						<p class="normal-text">The first line contains . The second line contains an array   of  integers each separated by a space.</p>

						<p class="bold-text">Output Format</p>

						<p class="normal-text">Print the runner-up score.</p>

						<p class="bold-text">Sample Input 0</p>

						<p class="background-text">5 <br>2 3 6 6 5</p>

						<p class="bold-text">Sample Output 0</p>

						<p class="background-text">5</p>

						<p class="bold-text">Explanation</p>

						<p class="normal-text">Given list is . The maximum score is , second maximum is . Hence, we print  as the runner-up score.</p>

					</div>
					<div id="test-swipe-2" class="col s12 question z-depth-2">
						<p class="normal-text">Given the participants' score sheet for your University Sports Day, you are required to find the runner-up score. You are given scores. Store them in a list and find the score of the runner-up.</p>

						<p class="bold-text">Input Format</p>

						<p class="normal-text">The first line contains . The second line contains an array   of  integers each separated by a space.</p>

						<p class="bold-text">Output Format</p>

						<p class="normal-text">Print the runner-up score.</p>

						<p class="bold-text">Sample Output 0</p>

						<p class="background-text">5</p>

						<p class="bold-text">Explanation</p>

						<p class="normal-text">Given list is . The maximum score is , second maximum is . Hence, we print  as the runner-up score.</p>
					</div>
					<div id="test-swipe-3" class="col s12 question z-depth-2">
						<p class="normal-text">Given the participants' score sheet for your University Sports Day, you are required to find the runner-up score. You are given scores. Store them in a list and find the score of the runner-up.</p>

						<p class="bold-text">Input Format</p>

						<p class="normal-text">The first line contains . The second line contains an array   of  integers each separated by a space.</p>

						<p class="bold-text">Output Format</p>

						<p class="normal-text">Print the runner-up score.</p>

						<p class="bold-text">Sample Input 0</p>

						<p class="background-text">5 <br>2 3 6 6 5</p>

						<p class="bold-text">Explanation</p>

						<p class="normal-text">Given list is . The maximum score is , second maximum is . Hence, we print  as the runner-up score.</p>
					</div>
					<div id="test-swipe-4" class="col s12 question z-depth-2">

						<p class="bold-text">Input Format</p>

						<p class="normal-text">The first line contains . The second line contains an array   of  integers each separated by a space.</p>

						<p class="bold-text">Output Format</p>

						<p class="normal-text">Print the runner-up score.</p>

						<p class="bold-text">Sample Input 0</p>

						<p class="background-text">5 <br>2 3 6 6 5</p>

						<p class="bold-text">Sample Output 0</p>

						<p class="background-text">5</p>

						<p class="bold-text">Explanation</p>

						<p class="normal-text">Given list is . The maximum score is , second maximum is . Hence, we print  as the runner-up score.</p>
					</div>
					<div id="test-swipe-5" class="col s12 question z-depth-2">
						<p class="normal-text">Given the participants' score sheet for your University Sports Day, you are required to find the runner-up score. You are given scores. Store them in a list and find the score of the runner-up.</p>

						<p class="bold-text">Input Format</p>

						<p class="bold-text">Output Format</p>

						<p class="normal-text">Print the runner-up score.</p>

						<p class="bold-text">Sample Input 0</p>

						<p class="background-text">5 <br>2 3 6 6 5</p>

						<p class="bold-text">Sample Output 0</p>

						<p class="background-text">5</p>

						<p class="bold-text">Explanation</p>

						<p class="normal-text">Given list is . The maximum score is , second maximum is . Hence, we print  as the runner-up score.</p>
					</div>
				</div>
				<div class="clearfix"></div>
				<form action="" method="POST">
					<div class="wrap z-depth-2">		
						<div class="code-header">
							<span>Write Your Code Here</span>
							
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
					        <input type="checkbox" class="filled-in" id="ci" />
					        <span>Run Against Custom Input</span>
					    </label>
					</p>	
					<div class="actions">
						
						<button class="run-code btn blue-grey lighten-5" type="submit" name="run">{ }  Run Code</button>
						<button class="btn waves-effect waves-light" type="submit" name="action">Submit Code<i class="material-icons right icon-white">send</i></button>
					</div>
					<div class="custom-input-wrap" id="ciw">
						<textarea id="custom-input"></textarea>
					</div>
				</form>
				<br><br><br><br><br><br><br><br><br><br>
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
	 <script type="text/javascript">
	 	$(document).ready(function(){
            $('.tabs').tabs();
        });
	 </script>
	 <script type="text/javascript">
	 	$('#ci').change(function() {
		    $("#ciw").slideToggle();   
		});
	 </script>
</body>
</html>