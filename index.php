<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/main.css">
	<title>Riddles</title>
</head>
<audio id="audio" src="aud/click1.wav" ></audio>
<script src="js/main.js"></script>
<?php 

// RANDOM GREETING MESSAGE DATABASE

$_SESSION['msg'] = array(
	" do you use Angular for frontend",
	" are you a quater pounder with cheese, extra mayo",
	" are you a flat-earther",
	" is this is a randomly generated message",
	" do you hold your fork in your right hand",
	" are you a league player",
	" do you echo your HTML",
	" do you use internal CSS",
	" if so, who did 9/11",
	" are you a quitter",
	" are you in the JavaScript stream"
	)

?>

<body id="test">
	<header>
		<h1>Are You A Qu<span>?</span>zard</h1>
		<h2>or<?php echo $_SESSION['msg'][rand(0, count($_SESSION['msg'])-1)]?><span>?</span></h2>
	</header>

<!-- NAME INPUT SPACE FOR MESSAGE AT RESULTS PAGE -->

	<form action='results.php' method="post">
		<section class="intro">
			<p class="title">Greetings!</p>
			
			<article class="name"><input autocomplete="off" type="text" name="name" id="name" placeholder="(type your name)"><span></span></article>
			<p class="greeting"> Prepare your mind for an unambiguously objective test of your intellegence. Good luck, have fun. </p>
		</section>
<?php

// QUESTION AND ANSWER DATABASE

$_SESSION['quizPieces'] = $quizPieces = array(

	array(
	// QUESTIONS
	
	'q' => 'Stand on me, you\'re not stable. Jump on me you\'re free as can be. Launch yourself at the right time and fly high! What am I?', 
	// ANSWERS
	
	'a jetpack', 
	'a balance beam', 
	'a rocket', 
	'a trampoline',
	'none'
	),
	array(
	// QUESTIONS
	
	'q' => 'I have eighty-eight keys, but cannot open a single door. What am I?', 
	// ANSWERS
	
	'a fingerprint', 
	'a piano', 
	'a padlock', 
	'rubik\'s cube',
	'none'
	),
	array(
	// QUESTIONS
		
	'q' => 'I get smaller every time I take a bath. What am I?', 
	// ANSWERS
	
	'skin', 
	'soap', 
	'hair', 
	'a mirror',
	'none'
	
	),
	array(
	// QUESTIONS
		
	'q' => 'It\'s got twists and turns, but has no curves. Twist it to fix it, turn it to ruin it. What is it?', 
	// ANSWERS
	
	'spoon', 
	'ruler', 
	'fork', 
	'rubik\'s cube',
	'none'
	
	),
	array(
	// QUESTIONS
		
	'q' => 'What is greater than God, more evil than the devil, the poor have it, the rich need it, and if you eat it, you\'ll die?', 
	// ANSWERS
	
	'nothing', 
	'air', 
	'blood', 
	'gold',
	'none'
	
	),
	array(
	// QUESTIONS
		
	'q' => 'Who makes it, has no need of it. Who buys it, has no use for it. Who uses it can neither see nor feel it. What is it?', 
	// ANSWERS
	
	'kitchen utensils', 
	'boat', 
	'coffin', 
	'airplane',
	'none'
	
	),
	array(
	// QUESTIONS
	
	'q' => 'What can travel around the world while staying in a corner?', 
	// ANSWERS
	
	'air hostess', 
	'postage stamp', 
	'television', 
	'the internet',
	'none'
	
	),
	array(
	// QUESTIONS
		
	'q' => 'You can drop me from the tallest building and I\'ll be fine, but if you drop me in water I die. What am I?', 
	// ANSWERS
	
	'stone', 
	'diamond', 
	'titanium', 
	'paper',
	'none'
	
	),
	array(
	// QUESTIONS
		
	'q' => 'What has a head and a tail, but no body?', 
	// ANSWERS
	
	'bed', 
	'coin', 
	'snake', 
	'lizard',
	'none'
	
	),
	array(
	// QUESTIONS
		
	'q' => 'What gets wetter and wetter the more it dries?', 
	// ANSWERS
	
	'towel', 
	'well', 
	'soap', 
	'sponge',
	'none'
	
	),
	array(
	// QUESTIONS
		
	'q' => 'Paul\'s height is six feet, he\'s an assistant at a butcher\'s shop, and wears size 9 shoes. What does he weigh?', 
	// ANSWERS
	
	'meat', 
	'butcher', 
	'70kg', 
	'nothing',
	'none'
	
	),
	array(
	// QUESTIONS
		
	'q' => 'What kind of room has no doors or windows?', 
	// ANSWERS
	
	'kitchen', 
	'greenhouse', 
	'computer', 
	'mushroom',
	'none'
	
	),
	array(
	// QUESTIONS
		
	'q' => 'Which answer in this list is the correct answer to this question? <br><br>
	1. All of the below. <br>
	2. None of the below. <br>
	3. All of the above. <br>
	4. One of the above. <br>
	5. None of the above. <br>
	6. None of the above.', 
	// ANSWERS
	
	'6', 
	'5', 
	'3', 
	'7',
	'none'
	
	),
	array(
	// QUESTIONS
		
	'q' => 'If 1 = 5, <br>2 = 10, <br>3 = 15 and <br>4 = 20, <br>what is 5 equal to?', 
	// ANSWERS
	
	'25', 
	'5', 
	'50', 
	'1',
	'none'
	
	),
	array(
	// QUESTIONS
		
	'q' => 'I am tall when I am young and short when I am old, what am I?', 
	// ANSWERS
	
	'robber', 
	'candle', 
	'age', 
	'river',
	'none'
	
	),
	array(
	// QUESTIONS
		
	'q' => 'If you randomly choose one of the following answers to this question, what is your chance of getting it right? <br><br>
	A) 50% <br>
	B) 25% <br>
	C) 0% <br>
	D) 25%', 
	// ANSWERS
	
	'a', 
	'b', 
	'c', 
	'd',
	'none'
	
	),
	array(
	// QUESTIONS
		
	'q' => 'John has been hired to paint the numbers 1 through 100 on 100 apartments.	How many times will he have to paint 8?', 
	// ANSWERS
	
	'8', 
	'20', 
	'1', 
	'64',
	'none'
	
	),
	array(
	// QUESTIONS
		
	'q' => 'A tomato vine is 3 meters long. The bottom foot of the vine doesnt grow any tomatoes but the rest of the vine grows a tomato every 5 inches. How many vegetables can grow off of the vine?',
	// ANSWERS
	
	'3', 
	'0', 
	'21', 
	'5',
	'none'
	
	),
	array(
	// QUESTIONS
		
	'q' => 'What gets broken without being held?', 
	// ANSWERS
	
	'glass', 
	'a promise', 
	'chewing gum', 
	'brick',
	'none'
	
	),
	array(
	// QUESTIONS
		
	'q' => 'The eight of us go forth not back to protect our king from a foes attack. What are we?', 
	// ANSWERS
	
	'deck of cards', 
	'a mortgage', 
	'knights', 
	'chess pawns',
	'none'
	
	)
	
);

?>
<?php
// DISPLAYS A SECTION FOR EACH QUESTION
	for ($i = 0; $i < count($quizPieces); $i++) { ?>

	<section class='box'>
			<h2>
				Question <span class="num"> <?php echo $i+1 ?> </span>
			</h2>
			<p>
				<?php echo $quizPieces[$i]['q']; ?>
			</p>
			<section class='grid'>
			<?php 
				$x = 0;
				// DISPLAYS THE FOUR ANSWERS PER EACH QUESTION
			for ($n = $i*4; $n < ($i+1)*4; $n++) { 

				?>
				<input type='radio' name="<?php echo $i; ?>" value="<?php echo $x ?>" id="<?php echo $n ?>"><label class="option" for="<?php echo $n ?>" onclick="play()"><?php echo $quizPieces[$i][$x] ?></label>
			<?php
					$x++; 
		
		} ?>
			
			<!-- Hidden Defaule Input - records anser as 'none' -->
				<input type="radio" name="<?php echo $i; ?>" value="4" checked="checked">
			</section>
		</section>

	<?php }
?>

<!-- form submission -->
	<section class="submit">
		<h2>Submit Your Results!</h2>
			<input type="submit" value="Submit!">
	</section>
	</form>


</body>
</html>