<?php
$whereTheFuck =  $_SERVER["DOCUMENT_ROOT"];
?>
<style media="screen">
  .footer {
    padding: 20px 0;
    position: relative;
    display: flex;
    width: 100%;
    min-height: 200px;
    flex-direction: column;
    flex-wrap: wrap;
    align-items: stretch;
  }

  .footer .r {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: stretch;
  }

  .footer .i {
    color: #ffffff;
  }

  .footer .c {
    flex-grow: 1;
    flex-shrink: 0;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    align-items: center;
  }

  .footer .c a {
    color: #738D45;
    font-size: 16px;
    padding: 2px;
    margin: 2px;
    text-decoration: none;
  }

  .footer .c a:hover {
    color: #ffffff;
  }

  .footer .c h1 {
    color: #ffffff;
    font-size: 18px;
    margin-bottom: 10px;
  }
</style>
<div class="hellfire" style="background: #222222;">
  <div class="hellfire-body">
    <div class="container">
      <div class="footer">
        <div class="r">
          <div class="i">
            <a href="<?php $whereTheFuck ?>/../">
              <img src="<?php $whereTheFuck ?>/favicon.png" alt="" height="70px">
            </a>
          </div>
          <div class="c">
            <h1>About</h1>
            <a href="<?php $whereTheFuck ?>/team.php">Team</a>
            <a href="<?php $whereTheFuck ?>/aboutus.php">About Us</a>
          </div>
          <div class="c">
            <h1>Projects</h1>
            <a href="<?php $whereTheFuck ?>/mycelium">Mycelium</a>
            <a >2 Lewd 4 Dead</a>
          </div>
          <div class="c">
            <h1>Social</h1>
            <a href="https://discord.gg/3Xr282W">discord</a>
            <a href="https://twitter.com/RegimentRuin">twitter</a>
            <a href="https://www.reddit.com/r/MossRegrown/">subreddit</a>
            <a href="https://trello.com/mossteam2">trello</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
