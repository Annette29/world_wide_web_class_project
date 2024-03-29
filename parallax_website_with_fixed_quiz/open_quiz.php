<?php
session_start();

// Check if the user is authenticated (session variable is set)
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // User is not authenticated, redirect to the login page
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Parallax Web Quiz</title>
	<link rel="stylesheet"  href="style.css">
</head>
<body>
  <div class="pimg1">
		<div class="ptext">
			<span class="boder">
				Let Us Know Your Favorites!
			</span>
		</div>
	</div>
  <form action="process_quiz.php" method="POST">
    <section class="section section-light">
      <div class = "ptext1">
      <label for="q1">What is your favorite ice cream flavor?</label><br>
      <input type="radio" name="q1" value="Chocolate"> Chocolate<br>
      <input type="radio" name="q1" value="Vanilla"> Vanilla<br>
      <input type="radio" name="q1" value="Strawberry"> Strawberry<br>
      <input type="radio" name="q1" value="Mint Chocolate Chip"> Mint Chocolate Chip<br>
      </div>
    </section>
  
    <div class="pimg2">
      <div class="ptext">
        <span class="boder trans">
          Question 2
        </span>
      </div>
    </div>
  
    <section class="section section-dark">
      <div class = "ptext1">
      <label for="q2">What is your favorite movie genre?</label><br>
      <input type="radio" name="q2" value="Action"> Action<br>
      <input type="radio" name="q2" value="Comedy"> Comedy<br>
      <input type="radio" name="q2" value="Drama"> Drama<br>
      <input type="radio" name="q2" value="Horror"> Horror<br>
      </div>
    </section>
  
    <div class="pimg3">
      <div class="ptext">
        <span class="boder trans">
          Question 3
        </span>
      </div>
    </div>
  
    <section class="section section-light">
      <div class = "ptext1">
      <label for="q3">What is your favorite TV show?</label><br>
      <input type="radio" name="q3" value="Friends"> Friends<br>
      <input type="radio" name="q3" value="The Office"> The Office<br>
      <input type="radio" name="q3" value="Game of Thrones"> Game of Thrones<br>
      <input type="radio" name="q3" value="Stranger Things"> Stranger Things<br>
      </div>
    </section>

    <div class="pimg4">
      <div class="ptext">
        <span class="boder trans">
          Question 4
        </span>
      </div>
    </div>
  
    <section class="section section-dark">
      <div class = "ptext1">
      <label for="q4">What is your favorite book genre?</label><br>
      <input type="radio" name="q4" value="Romance"> Romance<br>
      <input type="radio" name="q4" value="Mystery"> Mystery<br>
      <input type="radio" name="q4" value="Science Fiction"> Science Fiction<br>
      <input type="radio" name="q4" value="Fantasy"> Fantasy<br>
      </div>
    </section>

    <div class="pimg5">
      <div class="ptext">
        <span class="boder trans">
          Question 5
        </span>
      </div>
    </div>

    <section class="section section-light">
      <div class = "ptext1">
      <label for="q5">What is your favorite hobby?</label><br>
      <input type="radio" name="q5" value="Reading"> Reading<br>
      <input type="radio" name="q5" value="Watching Movies"> Watching Movies<br>
      <input type="radio" name="q5" value="Playing Video Games"> Playing Video Games<br>
      <input type="radio" name="q5" value="Traveling"> Traveling<br>
      </div>
    </section>

    <div class="pimg6">
      <div class="ptext">
        <span class="boder trans">
          Question 6
        </span>
      </div>
    </div>
  
    <section class="section section-dark">
      <div class = "ptext1">
      <label for="q6">What is your favorite animal?</label><br>
      <input type="radio" name="q6" value="Dog"> Dog<br>
      <input type="radio" name="q6" value="Cat"> Cat<br>
      <input type="radio" name="q6" value="Birds"> Birds<br>
      <input type="radio" name="q6" value="Fish"> Fish<br>
      </div>
    </section>

    <div class="pimg7">
      <div class="ptext">
        <span class="boder trans">
          Question 7
        </span>
      </div>
    </div>

    <section class="section section-light">
      <div class = "ptext1">
      <label for="q7">What is your favorite season?</label><br>
      <input type="radio" name="q7" value="Spring"> Spring<br>
      <input type="radio" name="q7" value="Summer"> Summer<br>
      <input type="radio" name="q7" value="Fall"> Fall<br>
      <input type="radio" name="q7" value="Winter"> Winter<br>
      </div>
    </section>

    <div class="pimg1">
      <div class="ptext">
        <span class="boder">
          <input type="submit" value="Show Me My Responses :)" class="myButton">
        </span>
      </div>
    </div>
  </form>
</body>
</html>