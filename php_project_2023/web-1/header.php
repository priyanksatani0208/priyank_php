<!-- header -->
	<div class="header-w3l">
	
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="index.html">Mobile Services </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="home">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about">About</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="services">Services</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link " href="contact">Contact</a>
      </li>
	  
	  <?php
					if(isset($_SESSION['email']))
					{
					?>
					
					  <li class="">
							<a class="nav-link " href="myprofile">Profile</a>
					  </li>&nbsp;&nbsp;
					  <li class="w3">
                           <a class="nav-link " href="logout">Logout</a>
                       </li>
					<?php
					}
					else
					{
					?>	
					  <li class="w3">
                         <a class="nav-link " href="login">Login</a>
                       </li>
						  
					<?php
					}
					?>	 	

    </ul>
  
  
					
					</div>
					
</nav>

	<!-- //header -->