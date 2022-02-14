<!DOCTYPE html>

<html lang ="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Portfolio</title>

	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:100">
	<link rel="stylesheet" type="text/css" href="/main.css">
	<style type="text/css">
		.myDiv {
			text-align: center;
		}
		.flip-box {
			background-color: transparent;
			width: 500px;
			height: 500px;
			perspective: 500px;
		}
		.flip-box:hover .flip-box-inner{
			transform: rotateY(180deg);
		}
		.flip-box-back, .flip-box-front {
			vertical-align: middle;
			position: absolute;
			width: 100%;
			height: 100%;
			backface-visibility: hidden;
		}
		.flip-box-front {
			background-color: transparent;
			color:black;
		}
		.flip-box-back {
			color:white;
			width: 100%;
			height: 100%;
			border-radius: 50%;
			padding: 50px;
			font-size: 50px;
			transform: rotateY(180deg);
		}
		.flip-box-inner {
			position: relative;
			width: 100%;
			height: 100%;
			text-align: center;
			transition: transform 0.5s;
			transform-style: preserve-3d;
		}
		tr,td {
			text-align: center;
		}
		table {
			width: 100%;
			padding: 100px;
		}
		ul{
			list-style: none;
			list-style-position: inside;
			margin:auto;
			padding:0px;
		}
		input{
			width:300px;
			height: 30px;
			font-size: large;
			text-align: center;
		}
		button{
			width: 120px;
			height: 50px;
			background-color: #99ffcc;
			cursor: pointer;
			font-size: large;
			border: 0;
		}
		button:hover{
			background-color: #00cc66;
		}
	</style>
</head>

<body>
	<header>
        
        <div class="menuToggle" onclick="toggleMenu();">
        <a href="#" class="logo">My Portfolio</a>
        </div>
        <ul class="navigation">
            <li><a href="#home" onclick="toggleMenu();">Home</a></li>
            <li><a href="#about" onclick="toggleMenu();">About</a></li>
            <li><a href="#skills" onclick="toggleMenu();">Skills</a></li>
            <li><a href="#contact" onclick="toggleMenu();">Contact</a></li>
        </ul>
    </header>
    <section class="home" id="home">
        <div class="container">
        	<p>Hello, I am Joshua. :)</p>
            <h2>Always be Good to others.</h2>
            <a href="/posts"><button class="myClass">My Projects</button></a>
        </div>
    </section>

    <section class="about" id="about">
    	<table>
    		<tr>
    			<td>
    				<h2>What I can do</h2>
    			</td>
    			<td>
    				<h2>What I want to do</h2>
    			</td>
    			<td>
    				<h2>What I wont do</h2>
    			</td>
				
    		</tr>
    		<tr>
    			<td>
    				<ul>
    					<li>HTML</li>
    					<li>CCS</li>
    					<li>Javascript</li>
						<li>PHP</li>
						<li>Python</li>
    				</ul>
    			</td>
    			<td>
    				<ul>
    					<li>To be a Data Scientist</li>
    					<li>To be a Software Engineer</li>
    					<li>To be a Project Manager</li>
    				</ul>
    			</td>
    			<td>
    				<ul>
    					<li>Digital Drawing</li>
    					<li>Robotics</li>
    					<li>Invent a device</li>
    				</ul>
    			</td>
    		</tr>
    	</table>

    	
        <div class="myDiv">
        	<div class="row">
        	<div class="flip-box">
        		<div class="flip-box-inner">
        		<div class="flip-box-front">
                <img src="images/profile.jpg" style="width:500px;height:500px; border-radius: 50%;">
            	</div>
            	<div class="flip-box-back" style="background-color: darkcyan">
            		<h2>Joshua</h2>
            		<p>Bulan</p>
            	</div>
            	</div>
        	</div>
        	<div class="col">
            <h2>About me</h2>
                 <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the
                    1500s, when an unknown printer took a galley of type and scrambled
                    it to make a type specimen book.

                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the
                    1500s, when an unknown printer took a galley of type and scrambled
                    it to make a type specimen book.
                </p>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the
                    1500s, when an unknown printer took a galley of type and scrambled
                    it to make a type specimen book.
                </p>
                 <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the
                    1500s, when an unknown printer took a galley of type and scrambled
                    it to make a type specimen book.

                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the
                    1500s, when an unknown printer took a galley of type and scrambled
                    it to make a type specimen book.
                </p>
            <h1 style="padding:20px;margin-top: 20px;">How old are you?</h1>
        	<input type="date" id="birthday">
        	<p style="margin-top: 10px;"><button onclick="calculateAge()">Show Age</button></p>
        	<label id="birthdayOutput"></label>
        	</div>

   		</div>
    	</div>

   </section>

   <section class="skills" id="skills">
   	<div class="myDiv">
   		<h2>My Skills</h2>
   		<div class="row">
   			<div class="col">
				<ul class="soft">
					<li>Adaptability </li>
					<li>Communication </li>
					<li>Creative thinking</li>
					<li>Work ethic </li>
					<li>Teamwork</li>
					<li>Positivity </li>
					<li>Time management </li>
					<li>Motivation </li>
					<li>Problem-solving </li>
					<li>Critical thinking</li>
					<li>Conflict resolution</li>
				</ul>
   			</div>
   			<div class="col">
   				<div class="line">
   					<div class="data">
   						<span>HTML</span>
   						<span>70%</span>
   					</div>
   					<div class="way ht"></div>
   				</div>
   				<div class="line">
   					<div class="data">
   						<span>CSS</span>
   						<span>40%</span>
   					</div>
   					<div class="way cs"></div>
   				</div>
   				<div class="line">
   					<div class="data">
   						<span>Javascript</span>
   						<span>30%</span>
   					</div>
   					<div class="way js"></div>
   				</div>
				<div class="line">
   					<div class="data">
   						<span>PHP</span>
   						<span>20%</span>
   					</div>
   					<div class="way ph"></div>
   				</div>
				<div class="line">
   					<div class="data">
   						<span>Python</span>
   						<span>40%</span>
   					</div>
   					<div class="way py"></div>
   				</div>
   			</div>
   		</div>
   			<div>
   				<h1>What do you want me to do?</h1>
   				<input style="margin-top: 20px;padding: 20px;" type="text" id="shout">
   				<p>
   					<button style="margin: 20px;" onclick="shout()">Display in all capitals.</button>
   				</p>
   			<label id="shoutOutput"></label>
   			</div>
   	</div>
   	
   </section>

    <section class="contact" id="contact">
        <div>
            <h2>Contact Me</h2>
        </div>
        <div class="contactForm">
            <h3>Send Message</h3>
            <div class="inputBox">
                <input type="text" placeholder="Name">
            </div>
            <div class="inputBox">
                <input type="text" placeholder="Email">
            </div>
            <div class="inputBox">
                <textarea placeholder="Name"></textarea>
            </div>
            <div class="inputBox">
                <input type="submit" value="Send">
            </div>
        </div>
    </section>

   <script type="text/javascript">
   	document.getElementById("birthday").value = "2021-01-21";

   	function calculateAge(){
   		var birthday = new Date(document.getElementById("birthday").value);
   		var ageDiff = Date.now() - birthday.getTime();
   		var ageDate = new Date(ageDiff);
   		document.getElementById("birthdayOutput").innerText = "You're " + Math.abs(ageDate.getUTCFullYear() - 1970) + " years old."
   	}
   	function shout() {
   		var shoutString = document.getElementById("shout").value;
   		document.getElementById("shoutOutput").innerText = shoutString.toUpperCase();
    }

   	
   </script>
</body>
</html>