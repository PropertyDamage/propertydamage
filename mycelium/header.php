<?php
$whereTheFuck =  $_SERVER["DOCUMENT_ROOT"];
?>
<style media="screen">
  .header {
    position: sticky;
    display: flex;
    width: 100%;
    flex-direction: column;
    flex-wrap: wrap;
    align-items: stretch;
  }

  .header .r {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: stretch;
  }

  .header .i {
    color: #ffffff;
  }

  .header .c {
    flex-grow: 1;
    flex-shrink: 0;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    align-items: stretch;
  }

  .header .c.left {
    flex-grow: 1;
    flex-shrink: 0;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    align-items: flex-start;
  }

  .header .c.right {
    flex-grow: 1;
    flex-shrink: 0;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    align-items: flex-end;
  }

  .header .c a {
    padding: 15px;
    text-align: center;
    flex-direction: column;
    flex-wrap: wrap;
    display: stretch;
  }

  .header .c a:hover{
    background: #424242;
    color: #ffffff;
  }

  .header .c a {
    color: #738D45;
    font-size: 16px;
    text-decoration: none;
  }

  .header .c h1 {
    color: #ffffff;
    font-size: 18px;
    margin-bottom: 10px;
  }

  .header img {
    display: block;
  }
  </style>
<div class="hellfire" style="position: relative;background: #222222;">
  <div class="hellfire-body">
    <div class="container">
      <div class="header">
        <div class="r">
        <div class="c left">
          <div class="r">
          <a href="<?php $whereTheFuck ?>\mycelium\">
            <img src="<?php $whereTheFuck ?>\mycelium\media\mycelium.png" alt="" height="28px">
          </a>
        </div>
        </div>
        <div class="c right">
          <div class="r">
            <a href="<?php $whereTheFuck ?>/mycelium/devblogs">Blog</a>
            <a href="<?php $whereTheFuck ?>/mycelium/roadmap.html">Roadmap</a>
          </div>
        </div>

        </div>
      </div>
    </div>
  </div>
</div>
