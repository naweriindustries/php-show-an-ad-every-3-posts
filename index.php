
<?php

$gtPosts=mysqli_query($db,"SELECT * FROM POSTS ORDER BY views DESC");
while ($row=mysqli_fetch_array($gtPosts)) {
    // code...


if (($row['id']) % 3==1 ) {
    // code...
echo "Place An Advert Code Here";

} else {
    // code...

    echo"Load your post here ".$row['id'];
}




}




?>
