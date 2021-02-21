<?php
require '../core/functions.php';
$meta=[];
$meta['title']='Hello, I am Roman Nunez';
$meta['description']='Hello, I am Roman Nunez';
$content=<<<EOT

        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./dist/css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">      
       
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