<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("./header.php"); ?>    
</head>
<body>

<div class="jumbotron text-center top_bar">
  <h1>The quize site</h1>
  <p>Answer and win prize</p> 
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-2">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-md-7">
      <?php
        $i = 0;
        foreach(get_questions() as $data) {
            echo "<div class=\"row\">".
                    "<span class=\"question_row\">".($i + 1).". ".$data["question"]."</span>".
                    "<div class=\"options\"><input type=\"radio\" name=\"options".($i + 1)."\" value=\"".$data["opt1"]."\">".$data["opt1"]."</div>".
                    "<div class=\"options\"><input type=\"radio\" name=\"options".($i + 1)."\" value=\"".$data["opt2"]."\">".$data["opt2"]."</div>".
                    "<div class=\"options\"><input type=\"radio\" name=\"options".($i + 1)."\" value=\"".$data["opt3"]."\">".$data["opt3"]."</div>".
                    "<div class=\"options\"><input type=\"radio\" name=\"options".($i + 1)."\" value=\"".$data["opt4"]."\">".$data["opt4"]."</div>".
                "</div>";
            $i++;
        }
      ?>
    </div>
    <div class="col-sm-2">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>
    


<?php include("./footer.php"); ?>
</body>
</html>