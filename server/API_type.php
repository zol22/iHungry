<?php

require ('unirest-php/src/Unirest.php');

function recipe_daily_calories($calories,$time_frame)
{

	$response = Unirest\Request::get("https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/mealplans/generate?targetCalories=2000&timeFrame=day",
  array(
    "X-RapidAPI-Host" => "spoonacular-recipe-food-nutrition-v1.p.rapidapi.com",
    "X-RapidAPI-Key" => "1bd8955bb5msh20153e7d105e2d5p1138c1jsn920fe71fc5d4"
  )
);
		
$size = count($response->body->meals);


	for ($x = 0 ; $x < $size ; $x++) {
		$id = $response->body->meals[$x]->id;
		$title = $response->body->meals[$x]->title;
		$mins = $response->body->meals[$x]->readyInMinutes;
		$image = $response->body->meals[$x]->image;
		
		echo "Option ".($x+1)."<br>";
		echo "ID:  ".$id."<br>";
		echo "Title:  ".$title."<br>";
		echo "Time:  ".$mins." mins"."<br>";
	
		echo "<img src='https://spoonacular.com/recipeImages/$id-480x360.jpg' alt='recipe' />";
		echo "<br><br><br>";
			
	}
	$calories = $response->body->nutrients->calories;
	$protein = $response->body->nutrients->protein;
	$fat = $response->body->nutrients->fat;
	$carbohydrates = $response->body->nutrients->carbohydrates;
	
}


function recipe_ingredients ($ingredients)
{
	$response = Unirest\Request::get("https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/findByIngredients?ingredients=$ingredients",
	array( 
		 "X-RapidAPI-Host" => "spoonacular-recipe-food-nutrition-v1.p.rapidapi.com",
		"X-RapidAPI-Key" => "1bd8955bb5msh20153e7d105e2d5p1138c1jsn920fe71fc5d4"
    )
  );

	$size =  count($response->body);;
	
	
	for ($x = 0 ; $x < $size ; $x++) {

		//var_dump($response);

		$id = $response->body[$x]->id;

		$title = $response->body[$x]->title;
		$image = $response->body[$x]->image;

			
		$useIngredients = $response->body[$x]->usedIngredientCount;
	
		

		echo "Option ".($x+1)."<br>";
		echo "ID:  ".$id."<br>";
		echo "Title:  ".$title."<br>";
		echo "UsedIngredients:  ".$useIngredients."<br>";	
		echo "<img src='$image' alt='ingredients' />"."<br>";
		

		
	}
}



?>
	