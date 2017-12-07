<?php
include '../header.php';
if($_POST["type"] == "tournament")
{
   try{
			$stmt = $conn->prepare("INSERT INTO Tournament (sponsor, location, startDate,endDate,Name) VALUES (?, ?, ?,?,?)");
                        $stmt->bind_param("sssss", $_POST["Sponsor"], $_POST["Location"], $_POST["startDate"], $_POST["endDate"], $_POST["Name"]);
                        $stmt->execute();
			echo "<div>Tournament Created. Click <a href=\"TournamentMainPage.php\">here</a> to return to main page</div>";
		}
		catch(PDOException $e){
			die($e);
		
}
}

else if($_POST["type"] == "game")
{
   try{
			$stmt = $conn->prepare("INSERT INTO TournamentGames (TournamentID, GameID, TypeID) VALUES (?, ?, ?)");
                        $stmt->bind_param("iii", $_POST["tournamentID"], $_POST["Game"], $_POST["tournyType"]);
                        $stmt->execute();
			echo "<div>Game Added. Click <a href=\"TournamentMainPage.php\">here</a> to return to main page</div>";
		}
		catch(PDOException $e){
			die($e);
		
}
}
else if($_POST["type"] == "result")
{
   try{
			$stmt = $conn->prepare("INSERT INTO tournamentResults (teamID, place, tournamentGameID) VALUES (?, ?, ?)");
                        $stmt->bind_param("isi", $_POST["Team"], $_POST["place"], $_POST["tournamentGameID"]);
                        $stmt->execute();
			echo "<div  onclick='history.back()'>Result Added. Click here to return to main page</div>";
		}
		catch(PDOException $e){
			die($e);
		
}
}
else if($_GET["removalID"] > 0)
{
    try{
			$stmt = $conn->prepare("DELETE FROM tournamentResults where tournamentRestultsID = ? ");
                        $stmt->bind_param("i", $_GET["removalID"]);
                        $stmt->execute();
			echo "<div>Game Added. Click <a href=\"TournamentMainPage.php\">here</a> to return to main page</div>";
		}
		catch(PDOException $e){
			die($e);
		
}
}

include '../footer.php';