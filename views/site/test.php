<h1><?php echo $title;?></h1>
<br>

<?php

echo 'test view';
echo '<hr>';
echo 'data from controller ::'.$cat;

?>
<hr>
<h2> แสดงผลแบบ Array </h2>
<?php

print_r($ar);
echo '<hr>';

print_r($person);
echo '<hr>';

foreach ($person as $item) {
    echo $item['fname'].'/'.$item['lname'].'/'.$item['email'].'<br>';
    
}
?>


