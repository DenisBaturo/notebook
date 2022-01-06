<?php

class Database {
	
		
	public function connectDB($host, $user, $pass, $db_name){
			
		$link = mysqli_connect($host, $user, $pass, $db_name); 

		return $link;
	}
			
	public function updateNote() {
		
		
		$conn = new mysqli("localhost", "root", "", "notebookdb");
		if($conn->connect_error){
			die("Ошибка: " . $conn->connect_error);
		}
		
		
	   // если запрос GET
		if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"]))
		{
			$userid = $conn->real_escape_string($_GET["id"]);
			
			$sql = "SELECT * FROM notes WHERE id = '$userid'";
			
			if($result = $conn->query($sql)){
				
				if($result->num_rows > 0){
					
					foreach($result as $row){
						$header = $row["header"];
						$text = $row["text"];
					}
					echo 
					
					
					'<form method="post">
						
							<br>
							<br>
							<br>
							
							 <div class="form-group row">
								<label for="text" class="col-sm-2 col-form-label">Заголовок</label>
								<div class="col-sm-10">
								  <input type="text" name="headerRed" class="form-control" id="header" value="'.$header.'">
								</div>
							 </div>
							
							<div class="form-group row">
								<label for="text" class="col-sm-2 col-form-label">Текст</label>
								<div class="col-sm-10">
								  <input type="text" name="textRed" class="form-control" id="text" value="'.$text.'">
								</div>
							 </div>
															
							<input type="submit" value="Update note" class="btn btn-dark">
								
					</form>';
				
				}
				else{
					echo "<div>Заметка не найдена</div>";
				}
				$result->free();
			} else{
				echo "Ошибка: " . $conn->error;
			}
		}
		elseif (isset($_POST["headerRed"]) && isset($_POST["textRed"])) {
			  
			$header = $conn->real_escape_string($_POST["headerRed"]);
			$text = $conn->real_escape_string($_POST["textRed"]);
			$sql = "UPDATE notes SET header = '{$header}', text = '{$text}' WHERE id = '{$_GET["id"]}'";
			if($result = $conn->query($sql)){
				header("Location: notes.php");
			} else{
				echo "Ошибка: " . $conn->error;
			}
		}
		else{
			echo "Некорректные данные";
		}
		$conn->close();		
		
	}
	
	public function addNote() {
		
		
		if (isset($_POST['headerAdd']) && isset($_POST['textAdd'])){
		
			try {
				$dbh = new PDO("mysql:host=localhost;dbname=notebookdb;charset=utf8;", 'root', '');
			} catch (PDOException $e) {
				die($e->getMessage());
			}


			$sth = $dbh->prepare("INSERT INTO notes SET  user_id=:user_id, header=:header, text=:text"); 
			$sth->execute(array('user_id' => $_SESSION['id'], 'header' => $_POST['headerAdd'], 'text' => $_POST['textAdd']));
		 
			
			header("Location: notes.php");
		
		}
		
	}
	
	public function delNote($link) {
							
		//удаляем строку из таблицы
		$sql = mysqli_query($link, "DELETE FROM notes WHERE id = {$_GET['id']}");
						 
		if ($sql) {
			//echo "<p>Заметка удалена.</p>";
			header("Location: notes.php");
			exit;
		} else {
			echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
		}
		
	}
	
	public function listNotes($link) {
															
		$sql = mysqli_query($link, "SELECT id, user_id, header, text FROM notes where user_id = '{$_SESSION['id']}'");		
	
		while ($result = mysqli_fetch_array($sql)) {
				
			echo 
					 
				' 
				<form>
				  <div class="form-row align-items-center">
										
					<div class="col-auto">
					   <input type="text" class="form-control mb-2" id="inlineFormInput" value="'.$result['header'].'">
					</div>
					
					<div class="col-auto">
						<input type="text" class="form-control mb-2" id="inlineFormInput" value="'.$result['text'].'">
					</div>
					
					<div class="col-auto">
						<td> <a class="nav-link active" href="delete.php?id='.$result['id'].'">Delete</a></td>
					</div>
					
					<div class="col-auto">
						<td><a class="nav-link active" href="update.php?id='.$result['id'].'">Update</a></td>							
					</div>
					
				  </div>
				</form>';										
			} 	
		
	}
	
}

?>