<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
		
			include 'header.php';
                       
?>
<! the nav is put here by itself. if use the nav file then it takes you to the wrong location since it is going up a directory>
<nav class= nav nav-pills nav-justified bg-dark">
    <a class="nav-link text-light bg-dark" href="index.php">Home</a>
    <a class="nav-link text-light bg-dark" href="Organizations/OrganizationList.php">Organizations</a>
    <a class="nav-link text-light bg-dark" href="Tournaments/TournamentMainPage.php">Tournaments</a>
    <a class="nav-link text-light bg-dark" href="Players/PlayersMainPage.php">Players</a>
    <a class="nav-link text-light bg-dark" href="Teams/TeamMainPage.php">Teams</a>
    <a class="nav-link text-light bg-dark" href="Games/GamesMainPage.php">Games</a>
</nav>



<div class="offset-nav">
<p class="lead">hello world</p>
</div>


<div class="row">
    <div class="col-md-3">
        <h2>Organizations</h2>
        <p>
            ASP.NET MVC gives you a powerful, patterns-based way to build dynamic websites that
            enables a clean separation of concerns and gives you full control over markup
            for enjoyable, agile development.
        </p>
        <p><a class="btn btn-default" href="https://go.microsoft.com/fwlink/?LinkId=301865">Learn more &raquo;</a></p>
    </div>
    <div class="col-md-3">
        <h2>Get more libraries</h2>
        <p>NuGet is a free Visual Studio extension that makes it easy to add, remove, and update libraries and tools in Visual Studio projects.</p>
        <p><a class="btn btn-default" href="https://go.microsoft.com/fwlink/?LinkId=301866">Learn more &raquo;</a></p>
    </div>
    <div class="col-md-3">
        <h2>Web Hosting</h2>
        <p>You can easily find a web hosting company that offers the right mix of features and price for your applications.</p>
        <p><a class="btn btn-default" href="https://go.microsoft.com/fwlink/?LinkId=301867">Learn more &raquo;</a></p>
    </div>
    <div class="col-md-3">
        <h2>Web Hosting</h2>
        <p>You can easily find a web hosting company that offers the right mix of features and price for your applications.</p>
        <p><a class="btn btn-default" href="https://go.microsoft.com/fwlink/?LinkId=301867">Learn more &raquo;</a></p>
    </div>
</div>






<?php include 'footer.php';?>