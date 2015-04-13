<?php
error_reporting(0);
if(isset($_POST['submit'])){
if($_POST['name']!='' && $_POST['email']!='' && $_POST['phone']!='' && $_POST['message']!=''){
$yourname=$_POST['name'];
$youremail=$_POST['email'];
$yourphone=$_POST['phone'];
$message=$_POST['message'];


 $to='contactexcelsiorindia@gmail.com';
      
   $From ="$yourname<$youremail>";
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        $headers .= 'To: '.$yourname . "\r\n";
        $headers .= 'From: '.$youremail. "\r\n";
  $contents = '<table width="100%" border="0">';   
  $contents.= '<tr><td width="29%"><p>&nbsp;</p></td><td width="71%">&nbsp;</td></tr>';  
  $contents.= '<tr><td><strong>Name : </strong></td><td>'.$yourname.'</td></tr>';  
  $contents.= '<tr><td><strong>Email :</strong></td><td>'.$youremail.'</td></tr>';  
  $contents.= '<tr><td><strong>Phone Number :</strong></td><td>'.$yourphone.'</td></tr>'; 
  $contents.= '<tr><td><strong>Message:</strong></td><td>'.$message.'</td></tr>';
  $contents.='</table>';

$subject1='Excel India';
mail($to,$subject1,$contents,$headers);
$msg="Thank you for enquiry we will revert back soon.....";
}
}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- PAGE TITLE -->
    <title>Excelsior INDIA</title>
    <!-- MAKE IT RESPONSIVE -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="shortcut icon" type="image/x-icon" href="images/favi.png"/> 
    <!-- BOOTSTRAP -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- MAIN STYLE -->
    <link href="css/customize.css" rel="stylesheet" media="screen">
    <link href="style.css" rel="stylesheet" media="screen">
    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- START BODY -->
  <body>
	<div id="page">
		<!-- START MAIN CONTAINER -->
		<div id="main-container">
			<!-- START NAVIGATION -->
			<div class="sticky-wrapper">
				<nav id="navigation1">
					<div class="container">
						<!-- LOGO GOES HERE -->
						<a href="javascript:void(0)" id="logo"><img src="images/logo.png" alt="Logo Image"></a>
						<!-- MENU -->
						<nav>
							<ul id="menu">
								<li><a href="#initiatives">Products</a></li>
                                <li><a href="#awards">Awards</a></li>
								<li><a href="#team">Team</a></li>
								<li><a href="#collaborations">Collaborations</a></li>
						
								<li><a href="#contact">Contact Us</a></li>
                                <li><a href="#donation">Donate</a></li>
								<!--<li><a href="#donation" class="btn btn-success">Donation</a></li>-->
							</ul>
						</nav>
					</div>
				</nav>
			</div>
			<!-- END NAVIGATION -->

			<!-- START PROJECT SECTION -->
			<section id="project" class="section" >
				<span class="sequence-prev" ></span>
				<span class="sequence-next" ></span>
	            <ul class="sequence-canvas">
	            	<li class="animate-in  center" style="background-image: url('images/slider/slider1.png');">
		            	<div class="slide-content">
			            	<h1>Welcome !</h1>
			            	<h1>Excelsior INDIA</h1>
		            	</div>
	            	</li>
	            	<li class="center" style="background-image: url('images/slider/slider2.png');">
		            	<div class="slide-content">
			            	<h1>who are we</h1>
			            	<h3>we are students from IIT and IIM who have come up together to give back to the society. </h3>
		            	</div>
	            	</li>
	            	<li class="center" style="background-image: url('images/slider/slider3.png');">
		            	<div class="slide-content">
			            	<h1>Our Vision</h1>
			            	<div>
				            	<h3>We plan to come up with innovative practices, services, products which will adorn the life of people who will soon have enough avenues to re-mould their life in whichever shape they love to.</h3>
			            	</div>
		            	</div>
	            	</li>
	            </ul>
			</section>
			<!-- END PROJECT SECTION -->


            <!-- START Initiatives SECTION -->
			<section id="initiatives" class="section section-content-colored with-arrow color2">
				<!-- SECTION TITLE -->
				<div class="section-header with-arrow">
					<h1>Products</h1>
				</div>
				<!-- SECTION CONTENT -->
				<div class="section-content">
					<div class="container">
						<div class="flexslider initiative-slider">
			                <ul class="slides">
			                	<!-- START EVENT -->
			                    <li>
			                        <div class="slide">
										<div class="initiative">
											<!-- EVENT FEATURED IMAGE -->
											<div class="initiative-header">
												<a href="initiative-recycled-notebooks.html">
													<img src="images/slider/2.png" alt="Event cover">
												</a>
											</div>
											<!-- START CONTENT -->
											<div class="initiative-content">
												<!-- EVENT TITLE -->
												<h3>Recycled Notebooks</h3>
												<!-- EVENT DESCRIPTION -->
												<p>For 25 million children in India education is still a distant dream. 47 out of 100 children in class 1 reach class 8th, rest drop out majority of them being girls. </p>
												<div class="center">
													<a href="initiative-recycled-notebooks.html" class="btn btn-default">Read More</a>
												</div>
											</div>
										</div>
									</div>
								</li>
								<!-- END EVENT -->
			                    <li>
			                        <div class="slide">
										<div class="initiative">
											<div class="initiative-header">
												<a href="initiative-bag-cum-desk.html">
													<img src="images/event/bag-cum-desk.jpg" alt="Event cover">
												</a>
											</div>
											<div class="initiative-content">
												<h3><img src="images/newamaze.jpg"></h3>
												<p>World Bank’s Primary Education Policy Paper states sanitation and furniture as the two most dominant and influencing hardware contributors. </p>
												<div class="center">
													<a href="initiative-bag-cum-desk.html" class="btn btn-default">Read More</a>
												</div>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- END Initiatives SECTION -->





			<!-- START EVENTS SECTION -->
			<section id="awards" class="section with-arrow section-content-colored">
				<!-- SECTION TITLE -->
				<div class="section-header with-arrow">
					<h1>Awards and Recognition</h1>
				</div>
				<!-- SECTION CONTENT -->
				<div class="section-content">
					<div class="container">
						<div class="flexslider events-slider">
			                <ul class="slides">
			                	<!-- START EVENT -->
			                    <li>
			                        <div class="slide">
										<div class="event">
											<div class="event-header">
												<a href="award-create-like-wow.html">
													<img src="images/event/2.jpg" alt="Event cover">
												</a>
											</div>
											<div class="event-content">
												<h3>Create Like WOW!</h3>
												<div class="event-data">
													<p><span class="icon icon-calendar"></span> January 23, 2015</p>
												</div>
												<p>Minds of children are the containers which can be filled with any kind of thoughts.  </p>
												<div class="center">
													<a href="award-create-like-wow.html" class="btn btn-default">Read More</a>
												</div>
											</div>
										</div>
									</div>
								</li>
								<!-- END EVENT -->
			                    <li>

								<div class="slide">
										<div class="event">
											<!-- EVENT FEATURED IMAGE -->
											<div class="event-header">
												<a href="award-eureka-2014.html">
													<img src="images/event/1.jpg" alt="Event cover">
												</a>
											</div>
											<!-- START CONTENT -->
											<div class="event-content">
												<!-- EVENT TITLE -->
												<h3>Eureka! 2014</h3>
												<!-- EVENT DATAS -->
												<div class="event-data">
													<p><span class="icon icon-calendar"></span> February 1, 2015 </p>
												</div>
												<!-- EVENT DESCRIPTION -->
												<p>Excelsior INDIA was declared Runner’s up in Eureka! B-Plan Competition held at IIT Bombay</p>
												<div class="center">
													<a href="award-eureka-2014.html" class="btn btn-default">Read More</a>
												</div>
											</div>
										</div>
									</div>
									</li>
			                    <li>
			                        <div class="slide">
										<div class="event">
											<div class="event-header">
												<a href="award-abhyuday.html">
													<img src="images/event/3.jpg" alt="Event cover">
												</a>
											</div>
											<div class="event-content">
												<h3>Abhyuday</h3>
												<div class="event-data">
													<p><span class="icon icon-calendar"></span> February 14, 2015</p>
												</div>
												<p>Excelsior INDIA won the Abhyuday Action plan competition</p>
												<div class="center">
													<a href="award-abhyuday.html" class="btn btn-default">Read More</a>
												</div>
											</div>
										</div>
									</div>
								</li>
			                    <li>
			                        <div class="slide">
										<div class="event">
											<div class="event-header">
												<a href="award-tryst.html">
													<img src="images/event/tryst.jpg" alt="Event cover">
												</a>
											</div>
											<div class="event-content">
												<h3>Tryst B-plan</h3>
												<div class="event-data">
													<p><span class="icon icon-calendar"></span> March 2, 2015</p>
												</div>
												<p>We were the runners up in the B-plan competition held in Tryst, the annual Festival.</p>
												<div class="center">
													<a href="award-tryst.html" class="btn btn-default">Read More</a>
												</div>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- END EVENTS SECTION -->


            <!-- START GALLERY SECTION -->
			<section id="team" class="section">
				<!-- SECTION TITLE -->
				<div class="section-header with-arrow">
					<h1>Our Team</h1>
				</div>
				<!-- SECTION CONTENT -->
				<div class="content-section color_dark">
					<div id="gallery-slider">
		                <ul class="slides">
							<!-- SLIDE OF 2 GALLERY ITEMS -->
                            <li>
							<div class="gallery-item">
						    		<a id="various1" href="#01">
						    			<div class="info">
                                            <p>Anurag Gangwar</p>
                                           <p class="desg">Core-Team Member</p>
                                            <p class="coll">IIT Delhi</p>
                                        </div>
							    		<img src="images/team/Anurag-Gangwar.jpg" width="300" height="200" alt="Image gallery">
						    		</a>
                                    <div style=" display:none;">
                                        <div id="01" class="hide_text">
                                            <div style="background-image:url('images/team/Anurag-Gangwar.jpg');background-position:50% 0%;" class="pic-icon"></div>
                                            <h2>Anurag Gangwar</h2>
                                            <p> Currently pursuing B.Tech in Engineering Physics from Indian Institute of Technology Delhi. Anurag completed his schooling from Suraj Bhan DAV Public School Vasant Vihar. He has helped in market research and analysis as project executive of Enactus IIT Delhi. His team of Enactus IIT Delhi received Mahindra Amazing Indian award and secured Second place in Enactus National Championship 2015. He has organized many collection drives in and around south delhi through NSS and Excelsior INDIA, and has a good understanding of the social sector. Excelsior INDIA is just another chapter in his beautiful journey of life.   </p>
                                            <div class="social">
                                            <a href="https://in.linkedin.com/pub/anurag-gangwar/87/b8a/186" target="_blank"><span class="icon icon-linkedin"></span></a></div>
                                           <!-- <p class="aboutnn">
                                                A very thoughtful initiative. Not everyone can dare to initiate a change. This team has the capapbility and the vision to do so.
                                            </p>-->
                                            <div style="clear:both"></div>
                                        </div>
                                    </div>
					    		</div>


                             </li>
                             <li>
		                    	<div class="gallery-item">
						    		<a id="various1" href="#02">
						    			<div class="info">
                                            <p>Ashish Pratap Singh</p>
                                            <p class="desg">Core-Team Member</p>
                                            <p class="coll">IIT Delhi</p>
                                        </div>
							    		<img src="images/team/Ashish_Pratap_Singh.jpg" width="300" height="200" alt="Image gallery">
						    		</a>
                                    <div style=" display:none;">
                                        <div id="02" class="hide_text">
                                            <div style="background-image:url('images/team/Ashish_Pratap_Singh.jpg');background-position:50% 0%;" class="pic-icon"></div>
                                            <h2>Ashish Pratap Singh</h2>
                                            <p>Driven by passion for his interests and motivated by the need of the society, this young lad works really hard to contribute to the upliftment of the society. Having said that, Lets get on to some work. </p>
                                            <div class="social">
                                             <a href="https://www.facebook.com/ashish.pratapsingh.7399" target="_blank"><span class="icon icon-facebook"></span></a>
                                            <a href="https://in.linkedin.com/pub/ashish-pratap-singh/88/76/97b" target="_blank"><span class="icon icon-linkedin"></span></a></div>

                                            <div style="clear:both"></div>
                                        </div>
                                    </div>
					    		</div>
		                    </li>
		                    <li>

		                    	<div class="gallery-item">
						    		<a id="various1" href="#03">
						    			<div class="info">
                                            <p>Harshit Chauhan</p>
                                            <p class="desg">Core-Team Member</p>
                                            <p class="coll">IIT Delhi</p>
                                        </div>
							    		<img src="images/team/Harshit-Chauhan.jpg" width="300" height="200" alt="Image gallery">
						    		</a>
                                    <div style=" display:none;">
                                        <div id="03" class="hide_text">
                                            <div style="background-image:url('images/team/Harshit-Chauhan.jpg');background-position:50% 0%;" class="pic-icon"></div>
                                            <h2>Harshit Chauhan</h2>
                                            <p> Currently pursuing B.Tech in mechanical Engineering from Indian Institute of Technology Delhi. He has completed his schooling from Springfields College, Moradabad (UP). He interned in Delhi Drainage Master plan, IIT Delhi. He has worked in Avanti fellows as a mentor and also represented his hostel in Board for Student Welfare, IIT Delhi. Other than being a core member of Excelsior INDIA, he is presently volunteering for Enactus IIT Delhi and is also an active member of Robotics Club, IIT Delhi.<br><br>Has the capability to turns ideas into projects , and projects into serial success. Endeavours to deliver high quality work on time. Ardent follower of swami vivekanand’s principles. </p>
                                             <div class="social">
                                             <a href="https://www.facebook.com/harshit.chauhan.965" target="_blank"><span class="icon icon-facebook"></span></a>
                                            <a href="https://in.linkedin.com/pub/harshit-chauhan/a3/165/385" target="_blank"><span class="icon icon-linkedin"></span></a></div>

                                            <div style="clear:both"></div>
                                        </div>
                                    </div>
					    		</div>
                             </li>
                             <li>
		                    	<div class="gallery-item">
						    		<a id="various1" href="#04">
						    			<div class="info">
                                            <p>Kushagra Srivastava</p>
                                            <p class="desg">Core-Team Member</p>
                                            <p class="coll">IIT Delhi</p>
                                        </div>
							    		<img src="images/team/Kushagra_Srivastava.jpg" width="300" height="200" alt="Image gallery">
						    		</a>
                                    <div style=" display:none;">
                                        <div id="04" class="hide_text">
                                            <div style="background-image:url('images/team/Kushagra_Srivastava.jpg');background-position:50% 0%;" class="pic-icon"></div>
                                            <h2>Kushagra Srivastava</h2>

                                            <p> Completed schooling from Delhi Public School Vasant Kunj. Currently pursuing B.Tech in Textile technology from Indian Institute of Technology Delhi.<br><br> He has worked with Avanti fellows as an intern, and was responsible for conducting their Outreach programme. He interacted with over 3,000 kids as part of the programme, and has an in depth understanding of the needs & requirement of students in government run institutions. He is also the co-founded of an NGO, nurturing nation, which provided mentoring to underprivileged kids.</p>
                                             <div class="social">
                                             <a href="https://www.facebook.com/kushagra.srivastava.9210" target="_blank"><span class="icon icon-facebook"></span></a>
											 <a href="https://in.linkedin.com/pub/kushagra-srivastava/87/b27/b68" target="_blank"><span class="icon icon-linkedin"></span></a></div>

                                            <div style="clear:both"></div>
                                        </div>
                                    </div>
					    		</div>
                             </li>

							<!-- END SLIDE -->

                             <li>

		                    	<div class="gallery-item">
						    		<a id="various1" href="#05">
						    			<div class="info">
                                            <p>Manvi Bansal</p>
                                            <p class="desg">Core-Team Member</p>
                                            <p class="coll">IIT Delhi</p>
                                        </div>
							    		<img src="images/team/Manvi_Bansal.jpg" width="300" height="200" alt="Image gallery">
						    		</a>
                                    <div style=" display:none;">
                                        <div id="05" class="hide_text">
                                            <div style="background-image:url('images/team/Manvi_Bansal.jpg');background-position:50% 0%;" class="pic-icon"></div>
                                            <h2>Manvi Bansal</h2>
                                            <p> I am a B.Tech student at IIT Delhi and a proud member of Excelsior INDIA. Be it be designing machines in mechanical engineering or travelling or reading, through every activity I strive to learn and become capable to contribute positively to the society. <br><br>Excelsior INDIA has provided me the perfect opportunity to make an impact where it matters. Strength of Excelsior INDIA lies in its team and its continuous efforts towards achieving a very noble cause. Each member is a highly motivated and talented personality and wonderful colleague. </p>
                                              <div class="social">
                                             <a href="https://www.facebook.com/manvi.bansal.509?fref=ts" target="_blank"><span class="icon icon-facebook"></span></a>
                                            </div>

                                            <div style="clear:both"></div>
                                        </div>
                                    </div>
					    		</div>
		                    </li>
                            <li>
							<div class="gallery-item">
						    		<a id="various1" href="#06">
						    			<div class="info">
                                            <p>Praneeth Buruju</p>
                                            <p class="desg">Core-Team Member</p>
                                            <p class="coll">IIT Delhi</p>
                                        </div>
							    		<img src="images/team/Praneeth_Buruju.jpg" width="300" height="200" alt="Image gallery">
						    		</a>
                                    <div style=" display:none;">
                                        <div id="06" class="hide_text">
                                            <div style="background-image:url('images/team/Praneeth_Buruju.jpg');background-position:50% 0%;" class="pic-icon"></div>
                                            <h2>Praneeth Buruju</h2>
                                            <p>I'm a 2nd year undergrad student from IIT Delhi (Engineering Physics). <br>
Being very patriotic, i am highly interested in Policy Making, Social Entrepreneurship and Team Leadership. Apart from these i love physics, psychology, cricket and Politics. Basically I’m an anytime foodie :D !!
</p>
                                          <p class="aboutnn">
                                               Regarding Excelsior INDIA, I only have one sentence- Let our actions speak for us
                                            </p>
                                            <div class="social">
                                             <a href="https://www.facebook.com/praneeth.buruju" target="_blank"><span class="icon icon-facebook"></span></a>
                                            <a href="https://in.linkedin.com/pub/praneeth-buruju/75/581/ba4" target="_blank"><span class="icon icon-linkedin"></span></a></div>
                                            <div style="clear:both"></div>
                                        </div>
                                    </div>
					    		</div>
		                    </li>
		                    <li>
							<div class="gallery-item">
						    		<a id="various1" href="#07">
						    			<div class="info">
                                            <p>Prateek Sachan</p>
                                            <p class="desg">Core-Team Member</p>
                                            <p class="coll">IIT Delhi</p>
                                        </div>
							    		<img src="images/team/Prateek-Sachan.jpg" width="300" height="200" alt="Image gallery">
						    		</a>
                                    <div style=" display:none;">
                                        <div id="07" class="hide_text">
                                            <div style="background-image:url('images/team/Prateek-Sachan.jpg');background-position:50% 0%;" class="pic-icon"></div>
                                            <h2>Prateek Sachan</h2>
                                             <p> He completed schooling from Bethany Convent School, Naini Allahabad. Currently he is a student at Indian Institute of Technology, Delhi pursuing B.Tech in Chemical Engineering. He did an internship with Avanti fellows and was responsible for conducting their outreach programme. He visited around 75 Delhi State Government Schools under the program, and has valuable insights regarding the needs and requirements of students studying in government run schools. He is also a co-founder of an NGO, Nurturing Nation, which mentored students preparing for IIT-JEE examination. </p>
                                            <p class="aboutnn">
                                                Excelsior INDIA is an opportunity for everyone working in it to create an impact that will have far reaching consequences
                                            </p>
                                            <div class="social">
     <a href="https://www.facebook.com/prateek.sachan.564" target="_blank"><span class="icon icon-facebook"></span></a>
     
     <a href="https://in.linkedin.com/pub/prateek-sachan/a4/78b/662" target="_blank"><span class="icon icon-linkedin"></span></a></div>
                                            <div style="clear:both"></div>
                                        </div>
                                    </div>
					    		</div>
                             </li>
                             <li>

		                    	<div class="gallery-item">
						    		<a id="various1" href="#08">
						    			<div class="info">
                                            <p>Ritesh Kumar Verma</p>
                                            <p class="desg">Core-Team Member</p>
                                            <p class="coll">IIT Delhi</p>
                                        </div>
							    		<img src="images/team/Ritesh_Kumar_Verma.jpg" width="300" height="200" alt="Image gallery">
						    		</a>
                                    <div style=" display:none;">
                                        <div id="08" class="hide_text">
                                            <div style="background-image:url('images/team/Ritesh_Kumar_Verma.jpg');background-position:50% 0%;" class="pic-icon"></div>
                                            <h2>Ritesh Kumar Verma</h2>
											<p> Completed his schooling from G.M.I.S. Kanpur. He is currently pursuing B.Tech in chemical engineering from IIT Delhi. His experience includes internship in outreach and communications at Avanti organization. He is presently a project executive at Enactus IIT Delhi. He co-founded an NGO, Nurturing Nation which provides consulting to JEE aspirants. His writes as a passion, in literary forms such as poems and articles. </p>
                                            <p class="aboutnn"> "Excelsior INDIA helped us see the infinity. Now we have to discard the limits and turn into a rocket ship." </p>									 <div class="social">
                                             <a href="https://in.linkedin.com/pub/ritesh-kumar-verma/a4/4/394" target="_blank"><span class="icon icon-linkedin"></span></a></div>

                                            <div style="clear:both"></div>
                                        </div>
                                    </div>
					    		</div>
		                    </li>
                            <li>
		                   <div class="gallery-item">
						    		<a id="various1" href="#09">
						    			<div class="info">
                                            <p>Varun Doval</p>
                                            <p class="desg">Core-Team Member</p>
                                            <p class="coll">IIM Indore</p>
                                        </div>
							    		<img src="images/team/Varun-Doval.jpg" width="300" height="200" alt="Image gallery">
						    		</a>
                                    <div style=" display:none;">
                                        <div id="09" class="hide_text">
                                            <div style="background-image:url('images/team/Varun-Doval.jpg');background-position:50% 0%;" class="pic-icon"></div>
                                            <h2>Varun Doval</h2>
                                            <p>Currently pursuing management (first year) from Indian Institute of Management Indore. He has completed his schooling from Delhi Public School R.K. Puram. Varun has worked at Teach India in the pilot stage, and helped design the initial course material. He was an intern to former president Dr. A.P.J Abdul Kalam at Kalam Foundation, and worked on the Jaipur Metro Kids School project for the foundation. Varun has also worked with CII Foundation, and designed the overall strategy for the foundation.<br><br> He has closely analyzed the CSR mandate under the new Company Act, and had been part of the CII National Committee on CSR Activity and CII National Civil Society dialogue. Varun was the head IIM Indore Media & PR committee, and also founded the industry interaction unit under the committee. He is currently the co-coordinator for IRIS – IIM Indore’s flagship business & cultural event</p>
                                             <div class="social">
                                             <a href="https://www.facebook.com/varundoval" target="_blank"><span class="icon icon-facebook"></span></a>
                                            <a href="https://in.linkedin.com/in/varundoval" target="_blank"><span class="icon icon-linkedin"></span></a></div>
                                            <!--<p class="aboutnn">
                                                A very thoughtful initiative. Not everyone can dare to initiate a change. This team has the capapbility and the vision to do so.
                                            </p>-->
                                            <div style="clear:both"></div>
                                        </div>
                                    </div>
					    		</div>

		                    </li>
                            <li>
                             <div class="gallery-item">
						    		<a id="various1" href="#10">
						    			<div class="info">
                                            <p>Vasu Tekriwal</p>
                                            <p class="desg">Core-Team Member</p>
                                            <p class="coll">IIT Delhi</p>
                                        </div>
							    		<img src="images/team/Vasu_Tekriwal.jpg" width="300" height="200" alt="Image gallery">
						    		</a>
                                    <div style=" display:none;">
                                        <div id="10" class="hide_text">
                                            <div style="background-image:url('images/team/Vasu_Tekriwal.jpg');background-position:50% 0%;" class="pic-icon"></div>
                                            <h2>Vasu Tekriwal</h2>
                                            <p> I am B.Tech. 2nd year student pursuing Chemical Engineering from IIT Delhi.<br><br>
I have a keen interest in physics , philosophy and current affairs and I love debating and music and I  like to read just about everything!
</p>
<div class="social">
                                             <a href="https://www.facebook.com/vasutekriwal" target="_blank"><span class="icon icon-facebook"></span></a>
                                            <a href="https://in.linkedin.com/pub/vasu-tekriwal/99/4b2/198" target="_blank"><span class="icon icon-linkedin"></span></a></div>

                                            <div style="clear:both"></div>
                                        </div>
                                    </div>
					    		</div>

		                    </li>
                             
		                   

		                </ul>
					</div>
				</div>
			</section>
			<!-- END GALLERY SECTION -->


            <!-- START SERVICES SECTION -->
			<section id="collaborations" class="section section-content-colored with-arrow color2">
				<!-- SECTION TITLE -->
				<div class="section-header with-arrow">
					<h1>Collaborations</h1>
				</div>
				<!-- SECTION CONTENT -->
				<div class="section-content" style="padding:10px 0;">
					<div class="container">
						<div class="services-slider">
                         <div id="carousel">
      <img src="images/coll/khanna.jpg" />
     <img src="images/coll/itsa.jpg" />
      <img src="images/coll/times-foundation.jpg" />
      <img src="images/coll/iim-indor.jpg" />
      <img src="images/coll/bhartiya.jpg" />
  
     <img src="images/coll/gunj.jpg" />
      <img src="images/coll/safexpress.jpg" />
    </div>
		                    <!--<ul class="slides">

		                        <li>
		                            <div class="slide">
										<img src="images/coll/khanna.jpg" />
									</div>
								</li>
                                <li>
		                            <div class="slide">
										<img src="images/coll/itsa.jpg" />
									</div>
								</li>
                                <li>
		                            <div class="slide">
										<img src="images/coll/times-foundation.jpg" />
									</div>
								</li>
                                <li>
		                            <div class="slide">
										<img src="images/coll/iim-indor.jpg" />
									</div>
								</li>
                                <li>
		                            <div class="slide">
										<img src="images/coll/bhartiya.jpg" />
									</div>
								</li>
                                 <li>
		                            <div class="slide">
										<img src="images/coll/d-light.jpg" />
									</div>
								</li>
                                 <li>
		                            <div class="slide">
										<img src="images/coll/gunj.jpg" />
									</div>
								</li>
                                 <li>
		                            <div class="slide">
										<img src="images/coll/safexpress.jpg" />
									</div>
								</li>
							</ul>-->
						</div>

					</div>
                   <div class="dwnarro"><img src="images/dwnarro.png" alt=""></div>
				</div>
			</section>
			<!-- END SERVICES SECTION -->


            

			<!-- START DONATION SECTION -->
			<section id="donation" class="section section-image" style="background-image: url('images/donation_cover.jpg');">
				<div class="section-content center">
					<h2>Come and make a few hearts smile</h2>
					<!-- DONATION BUTTON -->
					<a onclick="lightbox_open();" class="light-display btn btn-donation btn-success">Grant your Waste paper</a>
                    <a href="#" class="btn btn-donation btn-success">Make a Donation</a>
				</div>
			</section>
			<!-- END DONATION SECTION -->

			<!-- START CONTACT SECTION -->
			<section id="contact" class="section with-arrow">
				<!-- SECTION TITLE -->
				<div class="section-header with-arrow">
					<h1>Let's Get In Touch</h1>
				</div>
				<!-- SECTION CONTENT -->
				<div class="section-content">
					<div class="container">
						<div class="row">
							<!-- CONTACT TEXT -->
							<div class="col-md-6">
							<p><b>Sales Enquiry</b>- Kushagra Srivastava: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                +918826531013<br/>
                                
            <b>For Investors & Business Partnerships</b>- Varun Doval:&nbsp;&nbsp; +918878372666<br> <b>Media Partnerships</b>- Ritesh Kumar Verma: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+919818749480<br>
Email:<a href="mailto:contactexcelsiorindia@gmail.com"> contactexcelsiorindia@gmail.com</p>
								<!-- SOCIAL BUTTTONS -->
								<ul class="social-list">
									<li><a href="https://www.facebook.com/visitexcelsiorINDIA" class="btn btn-facebook" target="_blank"><span class="icon icon-facebook"></span> Like our Page on Facebook</a></li>

								</ul>
							</div>
							<div class="col-md-6">
								<!-- CONTACT FORM -->
				                <form class="form-horizontal" method="post" action="index.php" id="form">
				                  <div class="form-group">
				                    <label for="contact_name" class="col-lg-2 control-label">Name</label>
				                    <div class="col-lg-10">
				                      <input type="text" class="form-control" name="contact_name" required>
				                    </div>
				                  </div>
				                  <div class="form-group">
				                    <label for="contact_email" class="col-lg-2 control-label">Email</label>
				                    <div class="col-lg-10">
				                      <input type="email" class="form-control" name="contact_email" required>
				                    </div>
				                  </div>
                                   <div class="form-group">
				                    <label for="contact_name" class="col-lg-2 control-label">Phone</label>
				                    <div class="col-lg-10">
				                      <input type="text" class="form-control" name="contact_num" required>
				                    </div>
				                  </div>
				                  <div class="form-group">
				                    <label for="contact_textarea" class="col-lg-2 control-label">Message</label>
				                    <div class="col-lg-10">
				                      <textarea class="form-control" rows="3" name="contact_textarea" required></textarea>
				                    </div>
				                  </div>
				                  <div class="form-group">
				                    <div class="col-lg-offset-2 col-lg-10">
				                      <input type="hidden" name="submitted" id="submitted" value="true" />
				                      <button type="submit" class="btn btn-default btn-send" name="submitted"><i data-icon="&#xe00d;"></i>Send</button>
				                    </div>
				                  </div>
				                </form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- END CONTACT SECTION -->

			<!-- START FOOTER SECTION -->
			<section id="footer" class="section section-full-colored">
				<div class="section-content center">
					<p>Copyright ©2015 Excelsior INDIA</p>
				</div>
			</section>
			<!-- END FOOTER SECTION -->

		</div>
		<!-- END MAIN CONTAINER -->

		<!-- PAGE LOADING-->
		<div id="loader"></div>
  	</div>
    <!-- SCRIPTS -->
    <script src="http://code.jquery.com/jquery.js"></script>
	<script src="js/alert.js"></script>
	<script src="js/jquery.sequence-min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.smoothscroll.min.js"></script>
    <script src="js/jquery.meanmenu.min.js"></script>
    <script src="js/pace.min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/custom.js"></script>

    <script type="text/javascript" src="js/jquery.waterwheelCarousel.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        var carousel = $("#carousel").waterwheelCarousel({
          flankingItems: 2,
          movingToCenter: function ($item) {
            $('#callback-output').prepend('movingToCenter: ' + $item.attr('id') + '<br/>');
          },
          movedToCenter: function ($item) {
            $('#callback-output').prepend('movedToCenter: ' + $item.attr('id') + '<br/>');
          },
          movingFromCenter: function ($item) {
            $('#callback-output').prepend('movingFromCenter: ' + $item.attr('id') + '<br/>');
          },
          movedFromCenter: function ($item) {
            $('#callback-output').prepend('movedFromCenter: ' + $item.attr('id') + '<br/>');
          },
          clickedCenter: function ($item) {
            $('#callback-output').prepend('clickedCenter: ' + $item.attr('id') + '<br/>');
          }
        });

        $('#prev').bind('click', function () {
          carousel.prev();
          return false
        });

        $('#next').bind('click', function () {
          carousel.next();
          return false;
        });

        $('#reload').bind('click', function () {
          newOptions = eval("(" + $('#newoptions').val() + ")");
          carousel.reload(newOptions);
          return false;
        });

      });
    </script>


<script type="text/javascript">
window.document.onkeydown = function (e)
{
	if (!e){
		e = event;
	}
	if (e.keyCode == 27){
		lightbox_close();
	}
}
function lightbox_open(){
	window.scrollTo(0,0);
	document.getElementById('light').style.display='block';
	document.getElementById('fade').style.display='block';
}
function lightbox_close(){
	document.getElementById('light').style.display='none';
	document.getElementById('fade').style.display='none';
}
</script>

<script>
		$(function() {

			$('.show-more-buton').click(
				function (e) {
					$("#contenthr").animate({width:"0"},500);
					$(".top-grids").delay(500).fadeIn(500);
					$(".show-more-buton").delay(0).fadeOut(800);
					$(".show-less-buton").delay(800).fadeIn(500);
					$(".show-more-text").delay(0).fadeOut(800);
					$(".show-less-text").delay(800).fadeIn(200);
				}
			);
			$('.show-less-buton').click(
				function (e) {
					$(".top-grids").delay(0).fadeOut(500);
					$(".show-less-buton").delay(0).fadeOut(800);
					$(".show-more-buton").delay(800).fadeIn(500);
					$(".show-less-text").delay(0).fadeOut(800);
					$(".show-more-text").delay(800).fadeIn(500);
					$("#contenthr").delay(500).animate({width:"100%"},500);
				}
			);

		});
	</script>


<div class="light-bg" id="light" style="display: none;"><a class="light-close" onclick="lightbox_close();">close</a><br>
<h2>Grant Your Waste Paper</h2><br>


<form class="wpcf7-form" method="" action="" name="">


<p><span><input type="text" placeholder="Name *" aria-invalid="false" aria-required="true" class="wpcf7-text" size="40" value="" name="your-name"></span> </p>

<p><span><input type="email" placeholder="Email *" aria-invalid="false" aria-required="true" class="wpcf7-text wpcf7-email  wpcf7-validates-as-email" size="40" value="" name="email"></span> </p>

<p><span><input type="tel" placeholder="Phone *" aria-invalid="false" aria-required="true" class="wpcf7-text wpcf7-tel  wpcf7-validates-as-tel" size="40" value="" name="phone"></span> </p>

<p><span><textarea placeholder="Message *" aria-invalid="false" aria-required="true" class="wpcf7-textarea" rows="10" cols="40" name="message"></textarea></span> </p>

<p><span><input type="submit" class="wpcf7-submit" value="Grab it Now"></span></p>

</form>
</div><div id="fade" onClick="lightbox_close();"></div>


  </body>
  <!-- END BODY -->
</html>
