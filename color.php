<html>
    <body>
    <?php
$color = array('white', 'green', 'red','yellow');
foreach ($color as $a)
{
echo "$a, ";
}
echo "<ul>";
foreach ($color as $b)
{
echo "<li>$b</li>";
}
echo "</ul>";
?>
    </body>
</html>