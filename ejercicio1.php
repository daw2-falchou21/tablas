<?php
$db = mysqli_connect('localhost', 'root', 'root') or
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db, 'moviesite') or die (mysqli_error($db));

//insert new data into the reviews table
$query = <<<ENDSQL
INSERT INTO reviews
	(review_movie_id, review_date, reviewer_name, review_comment,
		review_rating)
VALUES
   (1, "2012-11-12", "Lucas Rodriguez", "It's a bit boring", 2),
   (1, "2020-11-08", "Kai Mendez", "It's a good movie but for my taste it is missing something", 4),
   (2, "2012-11-12", "Mark Lee", "Science fiction movie with main actor of indiana jones so no words", 5),
   (2, "2020-11-08", "Booby Fenzandez", "Good movie but not my taste", 3),
   (3, "2012-11-12", "Mark Lee", "Very good movie", 5),
   (3, "2012-11-08", "Kai Mendez", "The king of monsters please congratulations to the team for the movie", 5)
ENDSQL;
mysqli_query($db, $query) or die (mysqli_error($db));

echo 'Movie database successfully updated!';
?>