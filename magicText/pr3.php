<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="pr3.css">
	<link rel="stylesheet" href="pr3_tab.css">
	<link rel="stylesheet" href="pr3_tab2.css">
	<link rel="stylesheet" href="pr3_tab3.css">
	<link rel="stylesheet" href="pr3_tab4.css">
	<link rel="stylesheet" href="pr3_tab5.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title></title>
</head>
<body>

	<div class="navigation ">
		<div class="menuToggle"></div>
		<ul >
			<div class="tab">
				<li  class="list active " style="--clr:#f44336;"><a class="tablinks" onclick="openCity(event, 'Home')" id="defaultOpen" href="#"><span class="icon"><ion-icon name="home-outline"></ion-icon></span><span class="text">Home</span></a></li>
				<li  class="list " style="--clr:#ffa117;"><a class="tablinks" onclick="openCity(event, 'About')" href="#"><span class="icon"><ion-icon name="person-outline"></ion-icon></span><span class="text">About</span></a></li>
				<li  class="list " style="--clr:#0fc70f;"><a class="tablinks" onclick="openCity(event, 'Messages')" href="#"><span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span><span class="text">Messages</span></a></li>
				<li  class="list " style="--clr:#2196f3;"><a class="tablinks" onclick="openCity(event, 'Photos')" href="#"><span class="icon"><ion-icon name="camera-outline"></ion-icon></span><span class="text">Photos</span></a></li>
				<li class="list " style="--clr:#b145e9;"><a class="tablinks" onclick="openCity(event, 'Settings')" href="#"><span class="icon"><ion-icon name="settings-outline"></ion-icon></span><span class="text">Settings</span></a></li>
			</div>
		</ul>
	</div>

	<div id="Home" class="tabcontent">
		<h3>Home</h3>
		<p>Home is the capital city of England.</p>
		<style>
			.demo {
				border:1px solid #C0C0C0;
				border-collapse:collapse;
				padding:5px;
			}
			.demo th {
				border:1px solid #C0C0C0;
				padding:5px;
				background:#F0F0F0;
			}
			.demo td {
				border:1px solid #C0C0C0;
				padding:5px;
			}
		</style>
		<table class="demo" id="myTable">
			<caption>Table 1</caption>
			<thead>
				<tr>
					<th>Header1</th>
					<th>Header2</th>
					<th>Header3</th>
					<th>Header4</th>
					<th>Header5</th>
				</tr>
			</thead>
			<tbody>
				<?php for ($i=0; $i < 10; $i++) { ?>


					<tr>
						<td>&nbsp; <?php echo rand(1,1); ?></td>
						<td>&nbsp; <?php echo rand(1,3); ?></td>
						<td>&nbsp; <?php echo rand(1,2); ?></td>
						<td>&nbsp; <?php echo rand(1,4); ?></td>
						<td>&nbsp; <?php echo rand(1,5); ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

	<div id="About" class="tabcontent">
		<h3>About</h3>
		<p>About is the capital of France.</p> 
		<!-- Demo header-->
<section class="py-5 header">
    <div class="container py-4">
        <!-- <header class="text-center mb-5 pb-5 text-white">
            <h1 class="display-4">Bootstrap vertical tabs</h1>
            <p class="font-italic mb-1"></p>
            <p class="font-italic">
                <a class="text-white" href="">
                    <u></u>
                </a>
            </p>
        </header> -->


        <div class="row">
            <div class="col-md-3">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Personal information</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <i class="fa fa-calendar-minus-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Bookings</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <i class="fa fa-star mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Reviews</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <i class="fa fa-check mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Confirm booking</span></a>
                    </div>
            </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <h4 class="font-italic mb-4">Personal information</h4>
                        <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <h4 class="font-italic mb-4">Bookings</h4>
                        <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <h4 class="font-italic mb-4">Reviews</h4>
                        <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <h4 class="font-italic mb-4">Confirm booking</h4>
                        <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
	</div>

	<div id="Messages" class="tabcontent">
		<h3>Messages</h3>
		<p>Messages is the capital of Japan.</p>
		<html>
<head>
	<meta charset="UTF-8">
	<meta http-qpuiv="X-UA-Compatible" content="ID=edge">
	<meta name="viewport" content="width=device-width, inticial-scale=1">
	<title>Pure CSS3 Tab</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<header>
			<h1>Pure CSS3 Tab</h1>
		</header>
		<div class="tabs effect-1">
			<!-- tab-title -->
			<input type="radio" id="tab-1" name="tab-effect-1" checked="checked">
			<span>Home</span>

			<input type="radio" id="tab-2" name="tab-effect-1">
			<span>Calendar</span>

			<input type="radio" id="tab-3" name="tab-effect-1">
			<span>Book Mark</span>

			<input type="radio" id="tab-4" name="tab-effect-1">
			<span>Upload</span>
			
			<input type="radio" id="tab-5" name="tab-effect-1">
			<span>Settings</span>

			<!-- tab-content -->
			<div class="tab-content1">
				<section id="tab-item-1">
					<h1>One</h1>
				</section>
				<section id="tab-item-2">
					<h1>Two</h1>
				</section>
				<section id="tab-item-3">
					<h1>Three</h1>
				</section>
				<section id="tab-item-4">
					<h1>Four</h1>
				</section>
				<section id="tab-item-5">
					<h1>Five</h1>
				</section>
			</div>
		</div>
				<div class="tabs effect-2">
			<!-- tab-title -->
			<input type="radio" id="tab-1" name="tab-effect-2" checked="checked">
			<span>
			<i class="fa fa-home"></i><span>Home</span>
			</span>

			<input type="radio" id="tab-2" name="tab-effect-2">
			<span>
				<i class="fa fa-calendar"></i><span>Calendar</span>
			</span>

			<input type="radio" id="tab-3" name="tab-effect-2">
			<span>
				<i class="fa fa-bookmark"></i><span>Book Mark</span>
			</span>

			<input type="radio" id="tab-4" name="tab-effect-2">
			<span>
				<i class="fa fa-cloud-upload"></i><span>Upload</span>
			</span>

			<input type="radio" id="tab-5" name="tab-effect-2">
			<span>
				<i class="fa fa-cog"></i><span>Settings</span>
			</span>

			<!-- tab-content -->
			<div class="tab-content1">
				<section id="tab-item-1">
					<h1>One</h1>
				</section>
				<section id="tab-item-2">
					<h1>Two</h1>
				</section>
				<section id="tab-item-3">
					<h1>Three</h1>
				</section>
				<section id="tab-item-4">
					<h1>Four</h1>
				</section>
				<section id="tab-item-5">
					<h1>Five</h1>
				</section>
			</div>
		</div>
				<div class="tabs effect-3">
			<!-- tab-title -->
			<input type="radio" id="tab-1" name="tab-effect-3" checked="checked">
			<span>Home</span>

			<input type="radio" id="tab-2" name="tab-effect-3">
			<span>Calendar</span>

			<input type="radio" id="tab-3" name="tab-effect-3">
			<span>Book Mark</span>

			<input type="radio" id="tab-4" name="tab-effect-3">
			<span>Upload</span>
			
			<input type="radio" id="tab-5" name="tab-effect-3">
			<span>Settings</span>

			<div class="line ease"></div>

			<!-- tab-content -->
			<div class="tab-content1">
				<section id="tab-item-1">
					<h1>One</h1>
				</section>
				<section id="tab-item-2">
					<h1>Two</h1>
				</section>
				<section id="tab-item-3">
					<h1>Three</h1>
				</section>
				<section id="tab-item-4">
					<h1>Four</h1>
				</section>
				<section id="tab-item-5">
					<h1>Five</h1>
				</section>
			</div>
		</div>
				<div class="tabs effect-4">
			<!-- tab-title -->
			<input type="radio" id="tab-1" name="tab-effect-4" checked="checked">
			<span>
				<i class="fa fa-home"></i><span>Home</span>
			</span>

			<input type="radio" id="tab-2" name="tab-effect-4">
			<span>
				<i class="fa fa-calendar"></i><span>Calendar</span>
			</span>

			<input type="radio" id="tab-3" name="tab-effect-4">
			<span>
				<i class="fa fa-bookmark"></i><span>Book Mark</span>
			</span>

			<input type="radio" id="tab-4" name="tab-effect-4">
			<span>
				<i class="fa fa-cloud-upload"></i><span>Upload</span>
			</span>

			<input type="radio" id="tab-5" name="tab-effect-4">
			<span>
				<i class="fa fa-cog"></i><span>Settings</span>
			</span>

			<!-- tab-content -->
			<div class="tab-content1">
				<section id="tab-item-1">
					<h1>One</h1>
				</section>
				<section id="tab-item-2">
					<h1>Two</h1>
				</section>
				<section id="tab-item-3">
					<h1>Three</h1>
				</section>
				<section id="tab-item-4">
					<h1>Four</h1>
				</section>
				<section id="tab-item-5">
					<h1>Five</h1>
				</section>
			</div>
		</div>
				<div class="tabs effect-5">
			<!-- tab-title -->
			
			<input type="radio" id="tab-1" name="tab-effect-5" checked="checked">
			<span>
				<i class="fa fa-home"></i>
			</span>

			<input type="radio" id="tab-2" name="tab-effect-5">
			<span>
				<i class="fa fa-calendar"></i>
			</span>

			<input type="radio" id="tab-3" name="tab-effect-5">
			<span>
				<i class="fa fa-bookmark"></i>
			</span>

			<input type="radio" id="tab-4" name="tab-effect-5">
			<span>
				<i class="fa fa-cloud-upload"></i>
			</span>

			<input type="radio" id="tab-5" name="tab-effect-5">
			<span>
				<i class="fa fa-cog"></i>
			</span>

			<!-- tab-content -->
			<div class="tab-content1">
				<section id="tab-item-1">
					<h1>One</h1>
				</section>
				<section id="tab-item-2">
					<h1>Two</h1>
				</section>
				<section id="tab-item-3">
					<h1>Three</h1>
				</section>
				<section id="tab-item-4">
					<h1>Four</h1>
				</section>
				<section id="tab-item-5">
					<h1>Five</h1>
				</section>
			</div>
		</div>
	</div>
	<footer class="footer">
		<div class="container">
			<div class="copyright">
				<span>Designed By</span>
				<a href="http://www.weibo.com/518501269" target="_blank">@Clear</a>
				<a href="https://github.com/SoClear" target="_blank">Github</a>
				<a href="http://www.cleardesign.me" target="_blank">WebSite</a>
			</div>
		</div>
	</footer>
</body>
</html>
	
	</div>

	<div id="Photos" class="tabcontent">
		<h3>Photos</h3>
		<p>Photos is the capital of Japan.</p>

		<!-- about -->
<div class="about">
   <a class="bg_links social portfolio" href="https://www.rafaelalucas.com" target="_blank">
      <span class="icon"></span>
   </a>
   <a class="bg_links social dribbble" href="https://dribbble.com/rafaelalucas" target="_blank">
      <span class="icon"></span>
   </a>
   <a class="bg_links social linkedin" href="https://www.linkedin.com/in/rafaelalucas/" target="_blank">
      <span class="icon"></span>
   </a>
   <a class="bg_links logo"></a>
</div>
<!-- end about -->

<section id="wrapper">
   <div class="content2">
      <!-- Tab links -->
      <div class="tabs2">
         <button class="tablinks2 active" data-country="London"><p data-title="London">London</p></button>
         <button class="tablinks2" data-country="Paris"><p data-title="Paris">Paris</p></button>
         <button class="tablinks2" data-country="Barcelona"><p data-title="Barcelona">Barcelona</p></button>
         <button class="tablinks2" data-country="Madrid"><p data-title="Madrid">Madrid</p></button>
      </div>

      <!-- Tab content -->
      <div class="wrapper_tabcontent">
         <div id="London" class="tabcontent2 active">
            <h3>London</h3>
            <p>London is the capital of Great Britain. It is one of the greatest cities in the world. It is an important business and financial centre. It is an intellectual centre, too. Everywhere in London, there are open spaces: Hyde Park and Regent Park are the largest. The City is the oldest part of London. </p>
         </div>

         <div id="Paris" class="tabcontent2">
            <h3>Paris</h3>
            <p>Paris is in the Paris department of the Paris-Isle-of-France region The French historic, political and economic capital, with a population of only 2.5 million is located in the northern part of France. One of the most beautiful cities in the world. Home to historical monuments such as Notre Dame, the Eiffel tower (320m), Bastille, Louvre and many more. </p>
         </div>

         <div id="Barcelona" class="tabcontent2">
            <h3>Barcelona</h3>
            <p>Barcelona has been an urban laboratory since the high Medieval Ages. A place of diversity, a backdrop for a multiplicity of social and cultural processes on multiple scales that reflect different ways of constructing the future, a city with a long experience of urban life and social innovations. </p>
         </div>

         <div id="Madrid" class="tabcontent2">
            <h3>Madrid</h3>
            <p>Madrid is in the middle of Spain, in the Community of Madrid. The Community is a large area that includes the city as well as small towns and villages outside the city. 7 million people live in the Community. More than 3 million live in the city itself. 
            </p>
         </div>
      </div>
   </div>
</section>
	</div>

	<div id="Settings" class="tabcontent">
		<h3>Settings</h3>
		<p>Settings is the capital of Japan.</p>

		<sl>Shining Text Animation Effects</sl>

<svg class="svg-obj" width="600" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="-4 25 971 169" enable-background="new -4 25 971 169" xml:space="preserve">
<g>
  <path class="path" d="M5.6,34.5H68c8,0,15.1,1.1,21.3,3.4c6.2,2.2,11.5,5.4,15.8,9.3c4.3,4,7.6,8.8,9.9,14.3c2.3,5.5,3.5,11.6,3.5,18.2
    c0,8.4-1.2,15.3-3.7,20.7c-2.5,5.4-5.3,9.7-8.5,12.9c-3.2,3.2-6.5,5.6-9.8,7.1c-3.3,1.5-5.8,2.7-7.7,3.4l33.4,60.3H89.6l-29-55
    H33.8v55H5.6V34.5z M33.8,104.2h30.7c7.1,0,13-2,17.6-5.9c4.6-3.9,6.9-9.5,6.9-16.6c0-6.9-2.3-12.3-7-16.4
    c-4.7-4.1-11.9-6.1-21.7-6.1H33.8V104.2z"/>
  <path class="path" d="M200.5,34.5h32.8l50,149.5h-29.4l-8.6-29h-56.7l-8.6,29h-29.4L200.5,34.5z M217.1,61.8h-0.4l-20.6,68.5h41.6L217.1,61.8z"
    />
  <path class="path" d="M323.2,34.5h52.5c12.9,0,24,1.9,33.3,5.7c9.3,3.8,16.9,9,22.9,15.6c5.9,6.7,10.3,14.6,13.1,23.7c2.8,9.2,4.2,19.1,4.2,29.7
    c0,24.5-5.8,43.1-17.3,55.8c-11.5,12.7-28.5,19-50.9,19h-57.8V34.5z M351.3,158h25.6c6.9,0,13-0.7,18.4-2.2c5.4-1.5,9.9-4,13.4-7.7
    c3.6-3.6,6.3-8.6,8.2-14.9c1.9-6.3,2.8-14.3,2.8-23.9c0-7.3-0.8-13.9-2.5-20c-1.7-6-4.3-11.2-7.8-15.4c-3.5-4.3-8-7.6-13.4-9.9
    c-5.5-2.3-12-3.5-19.7-3.5h-25V158z"/>
  <path class="path" d="M507.8,139.1c5.3,7.8,11.9,13.6,19.6,17.2c7.8,3.6,16.3,5.5,25.5,5.5c3.4,0,6.9-0.3,10.7-0.9s7.2-1.7,10.3-3.2
    c3.1-1.5,5.6-3.4,7.7-5.9c2-2.4,3-5.5,3-9.1c0-2.9-0.7-5.4-2-7.3c-1.3-2-3.3-3.7-6-5.1c-2.7-1.5-5.9-2.8-9.7-3.9
    c-3.8-1.1-8.2-2.2-13.2-3.4l-16.6-3.8c-6-1.4-11.7-3.1-17.1-5c-5.4-2-10.2-4.5-14.3-7.7c-4.1-3.1-7.4-7.1-9.9-11.8
    c-2.5-4.7-3.7-10.5-3.7-17.3c0-7.8,1.7-14.7,5.1-20.6c3.4-5.9,7.9-10.7,13.3-14.6c5.5-3.8,11.7-6.7,18.6-8.6
    c6.9-1.9,13.9-2.8,20.9-2.8c12.9,0,24.5,2.4,35,7.2c10.4,4.8,19.6,12.4,27.4,22.8l-23.3,17.6c-3.6-6.9-8.8-12.2-15.4-16
    c-6.7-3.8-14.6-5.7-23.8-5.7c-8.1,0-14.9,1.4-20.3,4.3c-5.4,2.9-8.1,7-8.1,12.3c0,3.1,0.8,5.6,2.4,7.7c1.6,2,3.8,3.7,6.7,5.1
    c2.9,1.4,6.2,2.6,9.9,3.5c3.7,0.9,7.7,1.9,11.9,2.8l18.3,4c5.6,1.3,11,2.8,16.2,4.7c5.2,1.9,9.8,4.4,13.8,7.6s7.2,7.1,9.7,12
    c2.4,4.8,3.7,10.8,3.7,18c0,9.1-2,16.8-5.9,23.1c-3.9,6.3-9,11.4-15.2,15.2c-6.2,3.9-13.3,6.6-21.1,8.3c-7.8,1.7-15.6,2.5-23.3,2.5
    c-6.2,0-12.3-0.7-18.5-2c-6.2-1.3-12.1-3.3-17.7-6c-5.7-2.7-11-5.9-15.9-9.9c-4.9-3.9-9.1-8.5-12.6-13.6L507.8,139.1z"/>
  <path class="path" d="M780.5,138c0,7.6-1.4,14.4-4.3,20.6c-2.9,6.2-7,11.4-12.3,15.8c-5.3,4.3-11.7,7.7-19.1,10c-7.4,2.3-15.6,3.5-24.6,3.5
    c-9.1,0-17.3-1.2-24.7-3.5c-7.4-2.3-13.7-5.6-19-10c-5.3-4.3-9.4-9.6-12.3-15.8c-2.9-6.2-4.3-13-4.3-20.6V34.5h28.1v96.2
    c0,4.6,0.5,8.8,1.6,12.4c1,3.6,2.8,6.8,5.4,9.3c2.5,2.6,5.8,4.6,9.9,6c4.1,1.4,9.2,2.1,15.3,2.1c6,0,11.1-0.7,15.2-2.1
    c4.1-1.4,7.5-3.4,10-6c2.5-2.6,4.3-5.7,5.4-9.3c1.1-3.6,1.6-7.8,1.6-12.4V34.5h28.1V138z"/>
  <path class="path" d="M834.3,34.5h28.1v67.2l59.2-67.2h33.4l-48.9,56.7l52.3,92.8h-32.5l-39.5-69.9l-23.9,27.1V184h-28.1V34.5z"/>
</g>
</svg>





	</div>

	<script>

		let menuToggle = document.querySelector('.menuToggle');
		let navigation = document.querySelector('.navigation');
		let tabcontent = document.querySelectorAll('.tabcontent');
		let v = true;

		menuToggle.onclick = function(){
			navigation.classList.toggle('open')
			if (v) {
				for(var i = 0; i < tabcontent.length; i++){
					tabcontent[i].style.transform = 'translateX(150px)';
					v = false;
				}
			} else {
				for(var i = 0; i < tabcontent.length; i++){
					tabcontent[i].style.transform = 'translateX(0px)';
					v = true;
				}

			}
			

		}

		const list = document.querySelectorAll('.list');
		function activeLink(){
			list.forEach((item) => item.classList.remove('active'));
			this.classList.add('active')
		}

		list.forEach((item) => item.addEventListener('click' , activeLink));

	</script>
	<script>
		function openCity(evt, cityName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
		}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="pr3.js"></script>
<script type="text/javascript" src="pr2.js"></script>
<script type="text/javascript" src="pr4.js"></script>
<script type="text/javascript">
	$(document).ready( function () {
		$('td:contains("1")').css('background', 'red');
		$('td:contains("2")').css('background', 'yellow');
		$('td:contains("3")').css('background', 'blue');
		$('td:contains("4")').css('background', 'orange');
		$('td:contains("5")').css('background', 'green');
		$('#myTable').DataTable({
			"sScrollY": "200px",
			"iDisplayLength": 5,
			"bFilter": true,
			"bPaginate": true,
			 "bInfo": true,
        "bSortable": true,
        "bRetrieve": true,
        "bScrollCollapse": true,
			"aaSorting": [
			[4, "desc"]
			],
			  "aoColumnDefs": [
      { "sTitle": "My column title", "aTargets": [ 0 ] },
      { "sTitle": "My column title", "aTargets": [ 1 ] },
      { "sTitle": "My column title", "aTargets": [ 2 ] },
      { "sTitle": "My column title", "aTargets": [ 3 ] },
      { "sTitle": "My column title", "aTargets": [ 4 ] },
       { "sWidth": "120%", "aTargets": [ 3 ] },
       { "aDataSort": [ 0, 1 ], "aTargets": [ 0 ] },
      { "aDataSort": [ 1, 0 ], "aTargets": [ 1 ] },
      { "aDataSort": [ 2, 3, 4 ], "aTargets": [ 2 ] }
    ],
     "iCookieDuration": 60*60*24,
      "asStripeClasses": [ 'strip1', 'strip2', 'strip3' ],
       "bAutoWidth": true


		});
	} );
</script>
</body>
</html>