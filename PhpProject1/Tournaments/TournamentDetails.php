<?php
include '../header.php'; 
include '../Nav.php';
    $id = $_GET['id'];
                    
    $sql = "SELECT * FROM `Tournament` where tournamentID ='$id'";               
    $data = $conn->query($sql);
     $sql = "SELECT tg.TournamenetGamesID as id,o.Name as winner, g.Name as game, tt.Type as type  "
            . "FROM Zackary_Project.TournamentGames tg "
            . "join Game g on g.GameID = tg.GameID "
            . "join TournamentType tt on tt.TournamentTypeID = tg.TypeID "
            . "join tournamentResults tr on tr.tournamentGameID = tg.TournamenetGamesID "
            . "join Team t on t.teamID = tr.teamID "
            . "join Organization o on o.OrganizationID = t.organizationID "
            . "where  tr.place = 1 && tg.TournamentID = '$id'";               
    $data2 = $conn->query($sql);
foreach($data as $tourn)
    {
        echo "<h2>".$tourn['Name']."</h2>";
        echo "<h4>Presented By: ".$tourn['sponsor']."</h4>";;
        echo "<h6>".$tourn['startDate']." TO ".$tourn['endDate']."</h6>";
       
    }            
    ?>
<a href="AddGameToTournament.php?id ="<?php echo $id?>>
    <input class="btn btn-md btn-primary" type="button" value="Add Game">
</a>

<table class="table-hover table-striped table">
    <th>Game</th>
    <th>Winner</th>
    <th>Type</th>
    <th>Details</th>
<?php
    
   
    foreach($data2 as $tourn)
    {
        echo "<tr>";
        echo"<td>".$tourn['game']."</td>";
        echo "<td>".$tourn['winner']."</td>";
        echo "<td>".$tourn['type']."</td>";?>
    <td><a href=TournamentGameDetails.php?id=<?php echo $tourn['id']?>>                 
                                <input class='btn btn-md btn-primary' type='button' value='Details'>
                                </a></td>

        <?php
        echo "</tr>";
    }      
?>   
    
</table>

<?php include '../footer.php';