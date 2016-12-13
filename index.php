<?php $parentTitle = "JASL"; include "inc/top.inc";?>
		
		<?php include "inc/nav.inc";?>
		
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/lab1.png" alt="labs">
   
    </div>

    <div class="item">
      <img src="images/lab2.png" alt="labs">
     
    </div>

    <div class="item">
      <img src="images/lab3.png" alt="labs">
    </div>
      <div class="item">
      <img src="images/lab7.png" alt="labs">
   
    </div>

    <div class="item">
      <img src="images/lab8.png" alt="labs">
     
    </div>

    <div class="item">
      <img src="images/lab9.png" alt="labs">
      

    
  </div>
</div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">

  <div class="firstpage">

			<h3>Jorge Adrián Sánchez de Llano</h3>
      <h4>University of Rochester</h4>
			
			<p>Computer Science, BA. Class 2017. University of Rochester</p>
      <ul>
        <li>Focus on Human Computer Interaction; coursework on Algorithms, Computer Formal Systems, Databases Management, Web Development, App Development</li>
        <li>Spanish native speaker, French basic notions through High School coursework, Russian knowledge through Summer Immersion Program in Saint Petersburg</li>
        <li>HTML, CSS, Javascript, Java, C, Python, Prolog, PSQL, PHP, SWIFT knowledge demonstrated throughout courses projects, assignments</li>
      </ul>
    </div>
    <div class="secondpage">
    <div class ="ef1">
      <h3>Major Accomplishments</h3>
      <p>I obtained my high school diploma with the highest Exam Grade of the year, allowing me to continue my studies at University of Rochester. Even though I started as a MechE and then as a Financial Economist, I have completed 90% of the credits required to obtained my diploma in 6 semesters.</p>
      <h4>In CSC 174 my accomplishments are as follows:</h4>
    </div>
    <div class="ef2">

			<div class="cards">
			<div class="card" id="g1">
  				<div class="card-block">
    				<h3 class="card-title">HTML</h3>
    				<h6 class="card-subtitle text-muted">Perfected the basis</h6>
  				</div>
  				<div class="card-block">
    				<p>Improved on the use of HTML that allowed to developed better techniques with PHP.</p>
            <p>Adopted techniques such as includes and more linking to Javascript and CSS.</p>

  				</div>
			</div>


			<div class="card" id="g2">
  				<div class="card-block">
    				<h3 class="card-title">CSS</h3>
    				<h6 class="card-subtitle text-muted">Designing my own pages</h6>
  				</div>
  				<div class="card-block">
    				<p class="card-text">Understood even better the concepts that allow my site to be visually appealing.</p>
            <p>Furthered my technique by implementing pre-existing frameworks, that personalizes.</p>
  				</div>
			</div>
   
			

			<div class="card" id="g3">
  				<div class="card-block">
    				<h3 class="card-title">JavaScript</h3>
    				<h6 class="card-subtitle text-muted">Responsiveness now included</h6>
  				</div>
  				<div class="card-block">
    				<p class="card-text">Prepared solid interactions that allowed passing information between the server and the user</p>
            <p>Most relevant tool was the implementation of Data Validation</p>
  				</div>
			</div>

 </div>
    <div class="ef3">
			
			<div class="card" id="g4">
  				<div class="card-block">
    				<h3 class="card-title">PHP</h3>
    				<h6 class="card-subtitle text-muted">Enabling user interaction</h6>
  				</div>
  				<div class="card-block">
    				<p class="card-text">Introduced concepts like SQL tables connecting to the server. </p>
            <p> Allowed to consult external data</p>
  				</div>
			</div>
    </div>
			</div>

		

		

		<?php include "inc/footer.inc";?>

	</div><!--.container-->
	
	<?php include "inc/scripts.inc";?>
	<script src="js/slider.min.js"></script>
	<script>
		jQuery(function($) {
			$('.slider').sss();
		});
	</script>
	
	</body>

</html>