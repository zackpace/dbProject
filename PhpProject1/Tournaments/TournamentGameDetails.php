<?php
include '../header.php'; 
include '../Nav.php';
 
$id = $_GET['id'];
$gameID;
$sqlGame = "SELECT * FROM Zackary_Project.TournamentGames where TournamenetGamesID = '$id'";
$sql = "SELECT  tr.place as place,o.Name as name,tt.Type as type  "
            . "FROM Zackary_Project.TournamentGames tg "
            . "join TournamentType tt on tt.TournamentTypeID = tg.TypeID "
            . "join tournamentResults tr on tr.tournamentGameID = tg.TournamenetGamesID "
            . "join Team t on t.teamID = tr.teamID "
            . "join Organization o on o.OrganizationID = t.organizationID "
            . "where tg.TournamenetGamesID  = '$id' order by cast(place as unsigned)";               
$game = $conn->query($sqlGame);
$data = $conn->query($sql);
foreach($game as $g)
    {
        $gameID = $g['GameID'];
    }     
?>

<a href="AddResultToTournamnet.php?id =<?php echo $id?>&&game=<?php echo $gameID?>">
    <input class="btn btn-md btn-primary" type="button" value="Add A Result">
</a>
<table class="table-hover table-striped table">
    <th>Team</th>
    <th>Place</th>
<?php
    
   
    foreach($data as $tourn)
    {
        echo "<tr>";
        echo"<td>".$tourn['name']."</td>";
        echo "<td>".$tourn['place']."</td>";
        echo "</tr>";
    }      
?>   
    
</table>
<?php include '../footer.php';