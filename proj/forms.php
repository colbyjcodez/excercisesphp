<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <section class="row">
        <div class ="grid">
            <section class="col-2-3">
            <?php
                echo "Today is " . date("Y/m/d") . "<br>";
                $name = $email = $comment = "";
            
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = test_input($_POST["name"]);
                $email = test_input($_POST["email"]);
                $comment = test_input($_POST["comment"]);
                }

                function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
                }
            ?>

                <h2>Purchase a Conference Pass</h2>
                <h5>$99 per Pass</h5>

                <p>Purchase your Styles Conference pass using the form to the right.<p>
                
                <h4>Why Attend?</h4>

                <ul class="why-attend">
                    <li>Over twenty world-class speakers</li>
                    <li>One full day of workshops and two full days  of presentations</li>
                    <li>Hosted at The Chicago Theatre, a historical landmark</li>
                    <li>Augusta in Chicago is simply amazing</li>
                </ul>

            </section>
            <form class="col-1-3" action="#" method="post">
                <fieldset class ="register-group">
                    <input type="radio" name="day" value="Tuesday" checked> Tuesday
                    <input type="radio" name="day" value="Wednesday"> Wednesday
                    <input type="radio" name="day" value="Thursday"> Thursday
                    <input type="checkbox" name="day" value="Friday" checked> Friday
                    <input type="checkbox" name="day" value="Saturday"> Saturday
                    <input type="checkbox" name="day" value="Sunday"> Sunday
                    <label>
                        Name 
                    <input type="text" name="name" placeholder="Fullname" >
                    <?php   
                        if (isset($_POST)){
                             if (empty($_POST["name"])) {
                             echo $nameErr = "Name is required";
                            }
                        }
                        ?> 
                    </label>
                    <label>
                        Email
                        <input type="email" name="email" placeholder="Email address">      
                     </label>
                        <?php   
                        if (isset($_POST)){
                             if (empty($_POST["email"])) {
                             echo $emailErr = "Email is required";
                            }
                        }
                        ?> 

                     <label>
                         Number of Passes
                         <select name="quantity" required>
                             <option value="1" selected>1</option>
                             <option value="2">2</option>
                             <option value="3">3</option>
                             <option value="4">4</option>
                             <option value="5">5</option>
                         </select>
                     </label>

                     <label>
                         Comments
                         <textarea name="comments"></textarea>
                    </label>

                </fieldset>
                <input type="submit" name="submit" value="Purchase">

            </form>
        </div>
    </section>
    

</body>
</html>