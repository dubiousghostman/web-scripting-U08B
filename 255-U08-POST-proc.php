<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Order Your Pizza</title>
<!--

    Order Your Pizza Assignment
    Date: 6/8/22
    Mackenzie King
    
   For this assignment, I use HTML to offer a selection of cassette players. Once chosen, and the submit button is pressed, the page takes you to another page that uses HTML and PHP to display your choice.

- The use of Web forms
- The use of POST
- Use of client/server events

-->

</head>
<style>
  
  body{
    /* Set a background image to make the page look more professional. Because I was in a hurry, I used a generic pizza picture */
   background-image: url(https://beseenontop-wpengine.netdna-ssl.com/wp-content/uploads/2012/11/competitor-pizza-shop.jpg);
    background-repeat: no-repeat;
    background-size: cover;
   
  }
/* Set a box element to make the text easier to read against the background image. We'll put all our forms and buttons within this element */
  #element {
    background-image: url("https://www.wpfaster.org/wp-content/uploads/2014/06/wrinkled-white-paper-texture-background.jpg");
    background-repeat: no-repeat;
    background-size: cover;
		opacity: 96%;
		box-shadow: 3px 3px 6px 6px black;
    margin-top: 200px;
    margin-left: 240px;
    margin-right: 240px;
    text-align: center;
    padding: 50px;

</style>


<body style="margin: 4%;">
   <section id="element">


<?php

if(isset($_POST["name"])) { $name = $_POST["name"]; } else { $name = ""; }
if(isset($_POST["size"])) { $size = $_POST["size"]; } else { $size = ""; }
if(isset($_POST["pepp"])) { $pepp = $_POST["pepp"]; } else { $pepp = ""; }
if(isset($_POST["mush"])) { $mush = $_POST["mush"]; } else { $mush = ""; }
if(isset($_POST["gppr"])) { $gppr = $_POST["gppr"]; } else { $gppr = ""; }
if(isset($_POST["bacon"])) { $bacon = $_POST["bacon"]; } else { $bacon = ""; }

# Starting values
$pepp_cost=0;
$mush_cost=0;
$gppr_cost=0;
$bacon_cost=0;


# Size cost
if ($size=='Small')
        $size_cost=10;
else if ($size=='Medium')
        $size_cost=15;
else if ($size=='Large')
        $size_cost=20;

#Pizza topping costs
if ($pepp=='on')
$pepp_cost=4;

if ($mush=='on')
    $mush_cost=3;

if ($gppr=='on')
    $gppr_cost=2;

if ($bacon=='on')
    $bacon_cost=5;


print "<br>Order: ";


# Pizza type

# No toppings
if ($pepp=='' && $mush=='' && $gppr=='' && $bacon=='')
    print "$size Cheese Pizza";

# Veg only
if ($mush=='on' && $gppr=='on' && $pepp=='' && $bacon=='')
    print "$size Vegi lovers";

# Meat only
if ($pepp=='on' && $bacon=='on'&& $mush=='' && $gppr=='')
    print "$size Meat lovers";

# pepp only
if ($pepp=='on' && $bacon==''&& $mush=='' && $gppr=='')
    print "$size Classic";

# mushroom only
if ($pepp=='' && $bacon==''&& $mush=='on' && $gppr=='')
    print "$size Mushroom";



# Size of pie
print "<br>Pizza Size: $size pizza $$size_cost";

# But I hate peperoni! Maybe I can feed it to the dog.
if ($pepp=='on')
    print "<br>Topping: Pepperoni $$pepp_cost";

if ($mush=='on')
    print "<br>Topping: Mushrooms $$mush_cost";

if ($gppr=='on')
    print "<br>Topping: Green peppers $$gppr_cost";

# Because...
if ($bacon=='on')
    print "<br>Topping: Ham $$bacon_cost";



$total_cost=($size_cost + $pepp_cost + $mush_cost + $gppr_cost + $bacon_cost);

Print "<br>Total Cost: $$total_cost";



   
       
       
?>
