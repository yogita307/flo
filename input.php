<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FLO</title>
  </head>
  <body>
    <style>
      html {
        display: grid;
        place-items: center;
        min-height: 100vh;
        background: rgb(246, 214, 201);
        background: linear-gradient(
          90deg,
          rgba(246, 214, 201, 1) 0%,
          rgba(212, 157, 157, 1) 25%,
          rgba(230, 141, 137, 1) 35%,
          rgba(251, 125, 109, 1) 52%,
          rgba(250, 97, 77, 1) 76%,
          rgba(255, 68, 52, 1) 85%,
          rgba(250, 42, 28, 1) 92%
        );
        color: #555;
      }
      * {
        box-sizing: border-box;
      }

      #hold_it {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        font-family: system-ui;
      }
      h1,
      h2 {
        margin: 0;
        font-weight: 100;
        width: 100%;
      }

      .split {
        width: 100%;
        display: flex;
        justify-content: center;
        margin-top: 2rem;
      }
      .question {
        width: 20%;
        margin: 1rem;
        text-align: center;
        padding: 1rem;
        background: rgba(255, 255, 255, 0.4);
        border-radius: 5px;
        font-size: 1.05rem;
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.25);
      }
      a:link, a:visited {
  background-color: black;
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
      .button{
        margin: 0;
        margin-top: 1rem;
        border: 0;
        width: 20%;
        padding: 0.5rem;
        display: inline-block;
        background-color: rgba(255, 255, 255, 0.4);
        box-sizing: border-box;
      }
      .dates {
        margin: 0;
        margin-top: 1rem;
        border: 0;
        width: 75%;
        padding: 0.5rem;
        display: inline-block;
        background-color: rgba(255, 255, 255, 0.4);
        box-sizing: border-box;
      }
      button:hover {
        background-color: rgba(255, 255, 255, 0.8);
      }

      .selected {
        border-bottom: 3px solid rgba(236, 48, 48, 0.8);
      }
      .aptitudes {
        padding: 1rem;
        border-radius: 5px;
        display: none;
        background-color: rgba(255, 255, 255, 0.4);
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.25);
      }

      .aptitudes div {
        padding: 1rem;
        display: block;
        width: 100%;
        max-width: 800px;
        text-align: center;
        margin: 0 auto;
      }
      .aptitudes .more_apt {
        font-size: 1.5rem;
      }
      .aptitudes span {
        padding: 0.5rem 1rem;
        border-radius: 5px;
        margin: 0.5rem;
        background: rgba(255, 255, 255, 0.4);
        display: inline-block;
        white-space: nowrap;
      }


      a {
        color: #222;
      }
      input[type='checkbox'] {
    accent-color: red;
}
input[type='radio'] {
    accent-color:red;
}
      #submit {
        background-color:rgba(255, 255, 255, 0.4);
  
  border: none;
  color: black;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;

}
#submit:hover {
  background-color: #f44336;
  color: white;
}

    </style><form method="post" action="input.php" >
   
    <div id="hold_it">
      <h1>Let Us Know YOU❤️</h1>
      <div class="split">
      <div id="zero" class="question">
           <br>
         
          <label for="email" name="email">Email</label><br />
          <input type="text"  name="email"  required></input>
        </div>

        <div id="one" class="question">
          Period type <br>
          <input type="radio"  name="type" value="regular" class="button"></input>
          <label for="type"> Regular</label><br />
          <input type="radio"  name="type" value="irregular" class="button"></input>
          <label for="type"> Irregular</label><br />
        </div>

        <div id="two" class="question">
          Do you use any Birth control pills?<br>
          <input type="radio"  value="yes"name="pills" class="button"></input>
          <label for="pills"> Yes</label><br>
          <input type="radio"  value="no" name="pills" class="button"></input>
          <label for="pills"> No</label>
        </div>
        <div id="three" class="question">
          
          Enter you last period date :<br />
          <input
            type="date"
            id="start-date"
            name="last_period"
            class="dates"

            required
          />
        </div>
        <br />
        <div id="four" class="question">
          <br />
          Period Length<br />
          <input type="number" id="length" name="length" min="1" max="20" class="dates" required>
         <br />
        </div>
        <div id="five" class="question">
          <br />
          Do you Have any?
          <br />
          <input type="checkbox" id="pcos" name="other" value="pcos" />
          <label for="pcos"> pcos</label><br />
          <input type="checkbox" id="endometriosis" name="other" value="endometriosis" ></input>
          <label for="endometriosis"> endometriosis</label><br />
        </div>
      </div>
      <div class="split">
        <div class="aptitudes">
          
        </div>
       
      
    
    
        
       <button><input id="submit" type="submit" value="Submit" ></input></button>  
      </div>
    </div></form><br><br><br><br><br><br>
    <a href="main.html" >Go to home</a>
    
    <script>
      var all_apts = [
          [
            'writing',
            'design',
            'pilot',
            'lawyer',
            'philosopher',
            'entrepreneur',
          ],
          [
            'writing',
            'medicine',
            'acting',
            'entrepreneur',
            'politics',
            'consultant',
          ],
          [
            'sales',
            'public relations',
            'event planning',
            'politics',
            'television',
            'teaching',
          ],
          [
            'medicine',
            'counseling',
            'religous leader',
            'teaching',
            'charity work',
          ],
          ['writing', 'design', 'art', 'yoga instructor', 'message therapist'],
        ],
        btns = document.querySelectorAll('button');

      btns.forEach(function (elm) {
        elm.addEventListener('click', function () {
          if (elm.parentElement.querySelector('.selected')) {
            elm.parentElement
              .querySelector('.selected')
              .classList.remove('selected');
            elm.classList.add('selected');
          } else {
            elm.classList.add('selected');
          }

          if (document.querySelectorAll('.selected').length == 5) {
            calcScore();
          }
        });
      });

      function calcScore() {
        document.querySelector('.aptitudes').style.display = 'block';
        var items = document.querySelectorAll('.selected'),
          more_apt = document.querySelector('.more_apt'),
          less_apt = document.querySelector('.less_apt'),
          apts = [];

        for (var i = 0; i < 5; i++) {
          if (items[i].classList.contains('yes')) {
            apts = apts.concat(all_apts[i]);
          }
        }

        more_apt.innerHTML = '';
        less_apt.innerHTML = '';

        for (var i = 0; i < apts.length; i++) {
          if (
            apts.filter((x) => x == apts[i]).length > 1 &&
            !more_apt.innerHTML.includes(apts[i])
          ) {
            more_apt.innerHTML += '<span>' + apts[i] + '</span>';
          }
          if (apts.filter((x) => x == apts[i]).length == 1) {
            less_apt.innerHTML += '<span>' + apts[i] + '</span>';
          }
        }
      }
    </script>
   
  </body>
</html>
<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "app_flo";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);



if (isset($_POST['email'])) {
  $email = $_POST['email'];
}
else {$email = '';}

if (isset($_POST['type'])) {
  $type = $_POST['type'];
}
else {$type = '';}
if (isset($_POST['pills'])) {
  $pills = $_POST['pills'];
}
else {$pills = '';}
if (isset($_POST['last_period'])) {
  $last_period = $_POST['last_period'];
}
else {$last_period= '';}
if (isset($_POST['length'])) {
  $length = $_POST['length'];
}
else {$length= '';}
if (isset($_POST['other'])) {
  $other = $_POST['other'];
}
else {$other= '';}
// Hash password using bcrypt
// $hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert user data into database
$query = "INSERT INTO inputs (email,type, pills, last_period,length,other) VALUES ('$email','$type', '$pills', '$last_period','$length','$other')";
mysqli_query($db, $query);


// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} ?>

<?php

?>
