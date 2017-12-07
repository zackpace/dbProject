<?php
include '../header.php';

if($_POST["Company"] > 0)
{
    try{
			$stmt = $conn->prepare("INSERT INTO Game (Name, ReleaseDate, CompanyID) VALUES (?, ?, ?)");
                        $stmt->bind_param("ssi", $_POST["Name"], $_POST["Release"], $_POST["Company"]);
                        $stmt->execute();
			echo "<div>Game Created. Click <a href=\"AddGame.php\">here</a> to return to Adding Games.</div>";
		}
		catch(PDOException $e){
			die($e);
		
}
}
 else {
  
    try{
                        $stmt = $conn->prepare("INSERT INTO Company (Name) VALUES (?)");
                        $stmt->bind_param("s", $_POST["Company"]);
                        $stmt->execute();
			echo "<div>Company Created. Click <a href=\"AddGame.php\">here</a> to return to Adding Games.</div>";
		}
		catch(PDOException $e){
			die($e);
                }
		
}


include '../footer.php';