<h1>Loops</h1>
<h2>while loops</h2>
<?php
// while loops 
$in = 0;
while($in < 10){

    print $in . "<br>";
    $in++;
}
?>
<h3>do-while loops</h3>
<?php
//do while loops
$s = 5;

do{
    print $s . "<br>";
    $s++;
}while($s < 15);

?>
<h4>for loops</h4>

<?php
for ($f=45; $f<55; $f++ ){
    print $f . "<br>";
}
?>

<h4>for-each</h4>
<h5>months</h5>

<?php
$months = ["january","february","march","april","may","june","july","august","september","october","november","december"];

foreach($months AS $month){
    print $month . "<br>";
}
?>

<br><br>

<?php
    $days = ["sunday","monday","tuesday","wednesday","thursday","friday","saturday"];
?>

<br>

<?php
    print date("Y F jS");
    $current_year = date('Y');
    $current_month = date('F');
    $current_day = date('l');
?>

<form action="">

    <select name="" id="">
    <option value="">DAYS</option>
    <?php
        foreach($days  AS $day){
            print  "<option value=''>$day</option>";
        }
    ?>
    </select>

    <select name="" id="">
        <option value="">--Months--</option>
        <?php
        foreach($months AS $month){
            print "<option value=''>$month</option>";
        }
        ?>
    </select>

    <select name="" id="">
        <option value="">--Year--</option>
        <?php
        $y = 2014;
        while($y < 2030){
            print"<option value =''>$y</option>";
            $y++;
        }
        
        ?>
        
    </select>
</form>

<?php
    print $current_day;
?>

<h5>form with the current date as the text</h5>

<form action="">
    <select name="" id="">
        <option value="">
        <?php
            print "<option value=''>$current_day</option>";
        ?>
        </option>
    </select>
    <select name="" id="">
        <option value="">
        <?php
            print "<option value=''>$current_month</option>";
        ?>
        </option>
    </select>
    
    <select name="" id="">
        <option value="">
        <?php
            print "<option value=''>$current_year</option>";
        ?>
        </option>
    </select>

</form>

