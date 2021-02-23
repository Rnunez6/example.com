<?php
require '../core/functions.php';
require '../core/bootstrap.php';
$meta=[];
$meta['title']='Roman Homepage';
$content=<<<EOT
     

        <h1> Hello </h1>       
        <p>I am learning html. I'm in Agile Full Stack Web and Hybrid Mobile Application Development right now.</p>
        <script>

          var toggleMenu = document.getElementById('toggleMenu');
          var nav = document.querySelector('nav');
          toggleMenu.addEventListener(
            'click',
            function(){
              if(nav.style.display=='block'){
                nav.style.display='none';
              }else{
                nav.style.display='block';
              }
            }
          );
        </script>

        EOT;

        require '../core/layout.php';