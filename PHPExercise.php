<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP Exercise </title>
<style>
    body {
        background-color: lightblue
    }
    h1{
        color:darkred
    }
    p.one {
        border-style: solid;
        border-color: darkred
    
    }
    </style>
</head>
<body>
<h1> Simple Calculator by Jacob Kolb</h1>


<form>

    
    <input type="text" name="num1" placeholder="number1">
    <select name="operator">
        <option>None</option>
        <option>Add</ option>
        <option>Sutract</option>
        <option>Multiply</option>
        <option>Divide</option>
    </select>
    <input type="text" name="num2" placeholder="number2">
   
    <br>
    <button type="submit" name="submit" value="submit" >Calculate</button>   
</form>
<p class="one">The answer is:</p>
<?php 
    if (isset($_GET['submit'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];
        switch ($operator) {
            case "None":
                echo "You need to slecet a method!";
                break;
                case "Add":
                echo $result1 + $result2;
                break;
                case "Subtract":
                echo $result1 - $result2;
                break;
                case "Multiply":
                echo $result1 * $result2;
                break;
                case "Divide":
                echo $result1 / $result2;
                break;
        }
    }
    
?>

</body>

</html> 