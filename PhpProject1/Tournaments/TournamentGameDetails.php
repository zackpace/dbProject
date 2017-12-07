<?php
include '../header.php'; 
include '../Nav.php';
 
$id = $_GET['id'];
$gameID;
$sqlGame = "SELECT * FROM Zackary_Project.TournamentGames where TournamenetGamesID = '$id'";
$sql = "SELECT tr.tournamentRestultsID as resultsID, tr.place as place,o.Name as name,tt.Type as type, r.Name as region
          FROM Zackary_Project.TournamentGames tg 
           join TournamentType tt on tt.TournamentTypeID = tg.TypeID 
            join tournamentResults tr on tr.tournamentGameID = tg.TournamenetGamesID 
           join Team t on t.teamID = tr.teamID 
            join Region r on r.RegionID=t.Region
            join Organization o on o.OrganizationID = t.organizationID 
           where tg.TournamenetGamesID  = '$id' order by cast(place as unsigned)";               
$game = $conn->query($sqlGame);
$data = $conn->query($sql);
foreach($game as $g)
    {
        $gameID = $g['GameID'];
    }     
?>

<a href="AddResultToTournamnet.php?id=<?php echo $id?>&&game=<?php echo $gameID?>">
    <input class="btn btn-md btn-primary" type="button" value="Add A Result">
</a>
<table class="table-hover table-striped table">
    <th>Team</th>
    <th>Place</th>
    <th>Region</th>
    <th>Remove</th>
<?php
    
   
    foreach($data as $tourn)
    {
        echo "<tr>";
        echo"<td>".$tourn['name']."</td>";
        echo "<td>".$tourn['place']."</td>";
        echo "<td>".$tourn['region']."</td>";?>
        <td><a href=dbTournament.php?removalID=<?php echo $tourn['resultsID']?>>REMOVE RESULT</a></td>
        </tr>
        <?php
    }      
?>   
    
</table>
<?php include '../footer.php';