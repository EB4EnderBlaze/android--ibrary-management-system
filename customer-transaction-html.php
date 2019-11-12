<?php
session_start();
echo "Your id is " . $_SESSION['customer_id'] . ".<br>";
?>
<html>
	<head>
		<title>Issue or Return a Book</title>
		<style>
					input[type=text] {
  width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=password ] {
  width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
					input[type=submit] {
			  display: inline-block;
			  border-radius: 4px;
			  background-color: #f4511e;
			  border: none;
			  color: #FFFFFF;
			  text-align: center;
			  font-size: 28px;
			  padding: 20px;
			  width: 300px;
			  transition: all 0.5s;
			  cursor: pointer;
			  margin: 5px;
			}

			input[type = submit] span {
			  cursor: pointer;
			  display: inline-block;
			  position: relative;
			  transition: 0.5s;
			}

			input[type = submit] span:after {
			  content: '\00bb';
			  position: absolute;
			  opacity: 0;
			  top: 0;
			  right: -20px;
			  transition: 0.5s;
			}

			input[type = submit]:hover span {
			  padding-right: 100px;
			}

			input[type = submit]:hover span:after {
			  opacity: 1;
			  right: 0;
			}
		body {
			font-family: "Arial";
			background:rgb(242,238,203);
		}
		h1 {
			color:blue;
			text-transform:uppercase;
			font-size:40px;
			font-style:oblique;
			font-weight: bold;
		}
		a {
			font-size:30px;
			line-height: 50px;
			text-transform:uppercase;
		}
		a:link {
			color:orange;
		}
		a:visited {
			color:lime;
		}
		a:hover{
			color:blue;
		}
		a:active{
			color:cyan;
		}
	</style>
	</head>
	<body>
		<center>
			<h1>Issue or Return a Book</h1>
			<hr>
			<form action = "customer-transaction.php" method = "post">
				Transaction ID : <input type = "text" name = "transID"><br><br>
				Book ID : <input type = "text" name = "bookID"><br><br>
				Branch ID : <input type = "text" name = "branchID"><br><br>
				Transaction Type : <select name = "transtype">
					<option value = "select" selected> Select One </option>
					<option value = "transissue"> Issue </option>
					<option value = "transreturn"> Return </option>
				</select><br><br>
				<input type = "submit" name = "transSubmit">
			</form>
		</center>
	</body>
</html>