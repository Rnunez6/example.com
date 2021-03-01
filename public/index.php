<?php
require '../core/bootstrap.php';
$meta=[];
$meta['title']='Roman Home';


$content= <<< EOT
     
<main>                
<h1> Hello </h1>       
<p>I am learning html. I'm in Agile Full Stack Web and Hybrid Mobile Application Development right now.</p>

<h5 class="text-center">Here are some examples of my work </h5>

<hr class="my-4">

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Draw</h5>
    <p class="card-text">Quick example of using canvas in JavaScript.</p>
    <a href="https://rnunez6.github.io/draw/program" class="card-link">Draw</a>
  </div>
</div>


<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">NASA APOD</h5>
    <p class="card-text">Quick example using JQuery to make NASA Apod.</p>
    <a href="https://rnunez6.github.io/jquery-apod/index" class="card-link">NASA</a>
  </div>
</div>
</main>
EOT;
    
require '../core/layout.php';