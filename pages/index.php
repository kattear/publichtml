
			<article>
				<section class="backed">
					<h1>Lorem Supreme!</h1>
					<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sem augue, mollis quis venenatis eu, suscipit sed metus. Suspendisse vehicula, ante ac auctor sodales, magna nunc ultrices lacus, rhoncus ullamcorper mauris nibh eget neque. Proin eu dolor quam, et laoreet sapien. Curabitur auctor tristique mauris eget aliquam. Vivamus lobortis tortor eu neque dictum facilisis. Sed malesuada leo sed nisi ultricies placerat. Nam at leo sapien, id euismod nulla. Mauris accumsan fermentum nisl, et vehicula enim bibendum non.
					</p>

					<p>
					Maecenas in quam arcu, sit amet faucibus tellus. In nibh lectus, porttitor eu accumsan quis, ultricies non nulla. Mauris mi ligula, cursus eu consectetur quis, adipiscing vel elit. Vestibulum commodo, velit eu posuere sagittis, urna urna auctor eros, vel dignissim lorem tortor vitae mi. Nulla tempus magna tincidunt mauris tristique porta. Praesent ornare nisl sit amet orci fermentum at pretium nunc mattis. Morbi varius, eros at lacinia tristique, ligula massa pellentesque risus, eu sollicitudin risus massa non ante. Nulla pretium venenatis nisl vitae sodales.
					</p>
				</section>
				
				<figure id="reese">
					<img src="images/reese.jpg" alt="Reese" title="Reese">
					<figcaption>Reese is mad at me for doing more homework</figcaption>
				</figure>
				
			</article>
			
			<article id="doodle">
				<p class="up">Have you doodled lately?</p>
				<a href="indexd" id="doodle1"></a>
				<!-- <p class="down">doodled lately?</p> -->
			</article>
			
			<section id="newsletter">
				<?php if (empty($_POST)): ?>
					<form method="POST" action="index.php">
						<label>Sign up for our newsletter</label>
						<input id="email" class="required" type="email" required="" title="We would you like your newsletter sent?" placeholder="Enter email address here" size="38" name="email">
						<input class="submit" type="submit" value="Submit">
					</form>
				<?php else: ?>
					<h1>Request Received</h1>
				<!-- if no form data, render out the form -->
				<?php endif; ?> 
			</section>