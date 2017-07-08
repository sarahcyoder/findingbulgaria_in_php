<?php

require_once('../inc/header.php');
require_once('../inc/nav.php');

?>

<div class="container">
  <div class="row">
    <div class="col-sm-9">
      <div id="mainbody">
      	<h1>Contact Us</h1>
      	<p>If you  have questions, comments, or suggestions, please feel free to contact us!</p>
                
  			<form action="http://findingbulgaria.com/about/thank-you.html" method="post" enctype="multipart/form-data" name="contactform" id="contactform">
   				<div class="form-group">
      			<label for="name">Name:</label>
      			<input type="text" class="form-control" id="name" placeholder="Your Name">
    			</div>
    			<div class="form-group">
     			<label for="email">Email:</label>
      			<input type="email" class="form-control" id="email" placeholder="Enter email">
   			 	</div>
                <div class="form-group">
     			<label for="comments">Comments:</label><br />
      			<textarea name="comments" id="comments" rows="10" cols="50"></textarea>
   			 	</div>
   			 	<button type="submit" class="btn btn-default">Submit</button>
 			 </form>
    </div>
    </div>
    <div class="col-sm-3" id="sidebar">
        <br />
		<p class="cutline">
		    <img src="../img/milo.jpg" alt="Milo in Plovdiv" class="img-responsive img-rounded" />
		    Whisper your wishes to the statue of Milo, a beloved resident of Plovdiv.
		</p>
    </div>
  </div>
</div>

<?php

require_once('../inc/footer.php');

?>
