<?php
include '../header.php';
if($_POST["type"] == "team")
{
   try{
			$stmt = $conn->prepare("INSERT INTO Team (Region, gameID, organizationID) VALUES (?, ?, ?)");
                        $stmt->bind_param("iii", $_POST["Region"], $_POST["Game"], $_POST["orgID"]);
                        $stmt->execute();
			echo "<div>Team Created. Click <a href=\"OrganizationList.php\">here</a> to return to main page</div>";
		}
		catch(PDOException $e){
			die($e);
		
}
}
else if($_POST["type"] == "org")
{
   try{
			$stmt = $conn->prepare("INSERT INTO Organization (Name,Founded) VALUES (?, ?)");
                        $stmt->bind_param("ss", $_POST["Name"], $_POST["Founded"]);
                        $stmt->execute();
			echo "<div>Organization Created. Click <a href=\"OrganizationList.php\">here</a> to return to main page</div>";
		}
		catch(PDOException $e){
			die($e);
		
}
}