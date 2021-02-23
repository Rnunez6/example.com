<?php

require '../core/processContactForm.php';
require '../core/session.php';
checkSession();

$meta=[];
$meta['title']='Roman Resume';
$content=<<<EOT
   
    <body>

        <main> 
          <article>
            <h1>Roman Nunez</h1>
              <div >
                <a href="..." target="_blank" rel="noopener">LinkedIn</a>
                  &#x25CF;
                  Riverside, IL
                  </article>
              </div>

        
          <h2> Full Stack Web and Hybrid Mobile Applications Developer</h2>
          <p>Full stack web and hybrid mobile applications developer specializing in full stack JavaScript application and architectures. Experienced  
            in all stages of the development life cycle, well versed in numerous programming languages. </p>
          <ul>
            <li>Hands-on experience leading all stages of system development efforts, including requirements in definition design, architecture, testing and support.
            </li>
            <li>Outstanding leadership abilities; able to coordinate and direct all phases of project-based efforts.</li>
          </ul>
       

        <article>
          <h3>Core Competencies</h3>
          <ul class="setcolumns" >  
           <li>Full Stack Development</li>
           <li>Strong Analytical Skills</li>
           <li>Prioritizes Tasks</li>
           <li>Hybrid Mobile Development</li>
           <li>Savvy Problem Solver</li>
           <li>Strong Leadership Skills</li>
          </ul>    
        
        </article>
      
          <h3>Certifications / Technical Proficiencies</h3>      
          <p><span class="abb"><I>computer Languages:</I>  </span>C++, C# 
          <br><span class="abb"><I>3D Design and Modeling:</I> </span>Maya 
          <br><span class="abb"><I>Platforms:</I> </span>Windows  </p>
      
          <h3> Professional Experience </h3>
          <p style="text-align:left;"><b>Diaz Transportation - Cicero IL    <span style="float:right;"> Oct 2015 - Nov 2019</span></b></p>
          <ul>
            <li>Dispatching trucks </li>
            <li>Book keeping on Microsoft Excel</li>
          </ul>

          <h3>Education</h3>
         
          <p style="text-align:left;">DePaul University, Chicago, IL -  <span style="float:right;"> June 2015 </span>
            <br> <b>Bachelor of Science </b></br>
            <br></br>
          </p>
          
              <p style="text-align:left;">Morton College, Cicero, IL -   <span style="float:right;"> May 2011 </span>
            <br><b>Associate in Science </b></br>
          </p>
        
        </main>  
     
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
    </body>

EOT;

require '../core/layout.php';