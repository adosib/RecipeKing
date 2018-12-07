
<div class="recipePageDisplay">



    
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6 order-2 order-lg-1">
            <h5 class="display-4" id="recipeName">{{recipe.label}}</h5>
            
            
        </div>
        <div class="col-12 col-lg-6 order-1 order-lg-2">
        <div class="card">
                <img ng-src="{{recipe.image}}" class="card-img-bottom">
        </div>
        </div>
    </div>
    <div class="row">
    <div class="col-12 nutritionBox text-center">
            <span>Serving size: {{recipe.yield}}    |    </span>
            <span>Calories: {{recipe.calories | number : 0}}</span>
    </div>
    </div>
    <div class="row recipePageContent">
        <div class="col-12 col-lg-8">
                <h4>Ingredients:</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" ng-repeat="ingredient in recipe.ingredients">{{ingredient.text}}</li>
                </ul>
                
            <h6>Reviews: </h6>
                <?php /*
                    //$recipe_name="<script>document.writeln(document.getElementById('recipeName').innerHTML);</script>";
                    //if(isset($_POST['var'])) $recipe_name=$_POST['var'];
                    //echo $recipe_name;
                    $username = $_SESSION['username'];
                    $status = $_SESSION['login'];
                    //$_SESSION['recipe'] = $recipe_name;
            
                    //echo $username;
                    //echo $status;
                    //echo $_SESSION;
                    
                    require_once "db.conf";

                    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    

                    if ($mysqli->connect_error) {
                    die('Connect Error (' . $mysqli->connect_errno . ') '
                        . $mysqli->connect_error);
                        echo " connection failed! ";
                    }

                    echo $recipe_name;
                    echo " TEST! ";


                    $query = "SELECT review FROM reviews WHERE username = '$username' AND recipe = '$recipe_name'";


                    $mysqliResult = $mysqli->query($query);

                    while($row = $mysqliResult->fetch_assoc()) {
                        print $row['review'];
                    }
                    $mysqliResult->close();
                    $mysqli->close();
                    if($status == "true"){
                        echo "<form action='reviews.php' method='POST'><textarea id='review' name='review' placeholder='Leave comments here'><input type='hidden' value='document.getElementById('exampleModalLabel').innerHTML'></textarea><input type='submit' value='Submit'></from>";
                    }
                    */
                    ?>
                    
                
        </div>
    </div>

</div>
<a class="btn recipeSearchBtn" role="button" href="#/!" title="Back">Back</a>
</div>