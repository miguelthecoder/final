<?php
$title="Contact Page";
include 'header.php';

///make a conditional to set hide the form
// were using booleans to show if it's true or false
// if the condition is true == we want the form to show
// otherwise we want the form to hide....

$displayForm = True;
//isset checks if the form is intact, once it's submited,
//  we want it to hide
if(isset($_POST['submit'])) {
  $displayForm = False;
	echo "<h1 class=\"Comments\">User Comments</h1>
	";
}
if ($displayForm){
?>
		<div class="Form">
			<h1>Comments</h1>
			<h2>Please fill the form to post your comment!</h2>
			<form id="commentForm" action="contact.php" method="POST">
				<fieldset>
					<div class="forms">
						<label for="firstName">First Name:
							<!-- ///minlegth attribute requires a minimun length  -->
							<input id="fname" name="name" minlength="2" placeholder="First Name" type="text" required />
						</label>
						<label for="lastName">Last Name:
							 <input id="lname" name="lname"minlength="2" placeholder="Last Name" type="text" required />
						</label>
						<label for="email">Email:
							<input id="email" name="email" placeholder="Email" type="email" required />
						</label>
						<label for="phone">Phone:
							<input id="phone" name="phone" placeholder="(555)555-5555" type="tel" required />
						</label>
						<label for="comment">Comments:
						<textarea id="comment" name="comment" placeholder="Enter comments..." required /></textarea>
						</label>
						<input type="submit" name="submit" value="submit">
					</div>
				</fieldset>
			</form>
		</div>
<?php
	}

	if(!empty($_POST)){
		// try this
    try {
      $db = new PDO('mysql:dbname=MRosas_SQLchalleng;host=localhost', 'r2hstudent', 'SbFaGzNgGIE8kfP');
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //query where are you inserting into...
      $query = 'INSERT INTO comments(comment, name) VALUES (:comment, :name)';
			// prepare the statment
      $prepared = $db->prepare($query);
			//strip_tags gets rid of <>// so the scripts wont run.
      $prepared->bindParam(':comment', strip_tags($_POST['comment']));
			$prepared->bindParam(':name', strip_tags($_POST['name']));

      $prepared->execute();

			$collectComments = 'SELECT name, comment from comments';
			$commentPrepare = $db->prepare($collectComments);
			$commentPrepare->execute();
			//create a variable for the fetchAll()
			//etchAll()Returns an array containing all of the result set rows
			$commentsArray = $commentPrepare->fetchAll();
			/// I also could have done DESC order based on ID
			// we want our newest comment to display at the top, so we have to reverse our array..
			$commentsArray = array_reverse($commentsArray);
			// loop through the array, to get the comment and the name of the user..
			foreach ($commentsArray as $userComment) {
				$comment = strip_tags($userComment['comment']);
				$name =strip_tags($userComment['name']);
				echo "
				<div class=\"userComment\">
					<p>Comment: </p>
					<p>{$comment}</p>
					<p>User: </p>
					<p>{$name}</p>
				</div>
				";
			}
    } catch (Exception $e) {
        echo $e->getMessage();
        exit;
    }
    }
?>
<!-- //form validation jquery -->
	<script
	src="http://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous">
</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js">
</script>
<script>
		$("#commentForm").validate();
</script>
<!-- </script> -->
<?php
include 'footer.php';
?>
