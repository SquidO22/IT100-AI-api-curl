<!-- Review the following code for our RecipeCard Class we discussed in class.  -->

<pre><?php

class RecipeCard {
// Public multi-dimensional array property
public $ingredients;

// Constructor
public function __construct($initIngredients=[["",""]]) {
// Initialize the ingredients array with some initial ingredients
$this->ingredients = $initIngredients;
}

// You can add more methods here to manipulate the ingredients,
// such as adding new ingredients, removing ingredients, etc.

// Method to add a new ingredient (defaults to 1 of whatever it is if empty)
public function addIngredient($name, $amount=1) {
$this->ingredients[] = [
'name' => $name,
'amount' => $amount
];
}

// Method to remove existing ingredient
public function removeIngredient($name) {
foreach ($this->ingredients as $key => $ingredient) {
if ($ingredient['name'] == $name) {
unset($this->ingredients[$key]);
}
}
// Re-index the array
$this->ingredients = array_values($this->ingredients);
}

// Method to mix ingredients
public function mixIngredients($name1,$name2,$newIngredient) {
$this->removeIngredient($name1);
$this->removeIngredient($name2);

print("\n\nUsing $name1 and $name2, now have ".$newIngredient."\n");
$this->addIngredient($newIngredient);
}

}

$initialIngredients = [
  [
  'name' => 'Flour',
  'amount' => '2 cups'
  ],
  [
  'name' => 'Sugar',
  'amount' => '1 cup'
  ],
  [
  'name' => 'Eggs',
  'amount' => '2'
  ],
];

// ASSIGNMENT STARTING HERE
$recipe = new RecipeCard($initialIngredients);
print("\n\nInitial Ingredients\n");
print_r($recipe->ingredients);

$recipe->removeIngredient("Sugar");
print("\n\nAfter Removal of Sugar\n");
print_r($recipe->ingredients);

$recipe->addIngredient("Starch","2 Tablespoons");
print("\n\nAfter Addition of Starch\n");
print_r($recipe->ingredients);

$recipe->mixIngredients("Flour","Starch","Pre-Pie Crust");
print_r($recipe->ingredients);

$recipe->mixIngredients("Eggs","Pre-Pie Crust","Pie Crust");
print_r($recipe->ingredients);
// ASSIGNMENT ENDING HERE

?></pre>




<!--

1.) What will the code print out as it moves from // ASSIGNMENT STARTING HERE to // ASSIGNMENT ENDING HERE below?

2.) What are the methods and their purpose within the class? 

3.) How many ingredients will be left upon completion of the above?

4.) Explain, in plain written English, what "mixIngredients" is doing in the above!

-->