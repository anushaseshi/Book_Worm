<?php
/**
 * Created by PhpStorm.
 * User: rohinibandkodige
 * Date: 11/17/15
 * Time: 10:49 PM
 */
$conn = mysqli_connect("localhost","root","root","BOOK_WORM")or die("Can't Connect...");

$category = $_GET[id];

$query = "SELECT isbn, title, price, image FROM book WHERE category_ID = ".$category;

$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
?>
        <div class ="books">
            <img src="<?php echo $row['image']; ?>" /><br/>
            Title : <?php echo $row['title']; ?><br/>
            ISBN : <?php echo $row['isbn']; ?><br/>
            Price : $<?php echo $row['price']; ?><br/>
            <a href="#">Add To Cart</a><br/><br/>
        </div>
        <?php
    }
}
else
{
    echo "No books found.";
}

?>