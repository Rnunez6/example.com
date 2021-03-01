<?php

require '../core/processContactForm.php';

$meta=[];
$meta['title']='Roman Resume';
$content=<<<EOT
   
    <body>

        <main>            
              <div class="row">
                <div class="container">
                  <div class="col-12">
                    <h1 class="text-center">Roman Nunez Resume</h1>
                    <h2 class="text-center">Full Stack Web and Hybrid Mobile Applications Developer</h2>
                    <p class="text-center">Full stack web and hybrid mobile applications developer specializing in full stack JavaScript application and architectures. Experienced in all stages of the development life cycle, well versed in numerous programming languages. Hands-on experience leading all stages of system development efforts, including requirements in definition design, architecture, testing and support.
                        Outstanding leadership abilities; able to coordinate and direct all phases of project-based efforts.</p>
                  </div>
                  </div>
              </div>
              <hr class="my-4">
                  <div class="row">
                        <div class="container">
                          <h2 class="text-center">Core Competencies</h3>
                           
                            <div class="d-inline-block" style="margin-top: 20px" style="width: 250px;"> 
                            
                            <ul class="row" >
                              <li class="col-4">Full Stack Development</li>
                              <li class="col-8">Strong Analytical Skills</li>
                              <li class="col-4">Hybrid Mobile Development</li>
                              <li class="col-8">Prioritizes Tasks</li>
                              <li class="col-4">Savvy Problem Solver</li>
                              <li class="col-8">Strong Leadership Skills</li>
                            </ul>
                        </div>
                      
                      </div>
    
    
                      <hr class="my-4">
                        <div class="container">
                          <h2 class="text-center">Certifications and Technical Proficiencies</h2>
                          <h5><I>Computer Languages:</I>  C++, C# </h5>
                          <h5><I>3D Design and Modeling:</I> Maya </h5>
                          <h5><I>Platforms:</I> Windows  </h5>
                        </div>
    
    
    
                        <div class="container"> 
                          <hr class="my-4">
                          <h2 class="text-center">Professional Experience</h2>
                          <p style="text-align:left;"><b>Diaz Transportation - Cicero IL    <span style="float:right;"> Oct 2015 - Nov 2019</span></b></p>
                          <ul>
                            <li>Dispatching trucks </li>
                            <li>Book keeping on Microsoft Excel</li>
                          </ul>
    
                          <hr class="my-4">
                        <h2 class="text-center">Education</h2>
                         
                        <h5 class="clearfix" style="text-align:left;" >DePaul University, Chicago, IL -  <span style="float:right;"> June 2015 </span> </h5>
                          <p> Bachelor of Science </p>
                        
                        <h5  style="text-align:left;">Morton College, Cicero, IL -   <span style="float:right;"> May 2011 </span> </h5>
                          <p>Associate in Science </p>
                        
        </main>  
     
    </body>

EOT;

require '../core/layout.php';