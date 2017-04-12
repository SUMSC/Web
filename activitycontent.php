<?php
$con = mysql_connect("localhost","root","6287672liu");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("msc", $con);

$result = mysql_query("SELECT * FROM activity");

while($row = mysql_fetch_array($result))
  {
  echo $row['FirstName'] . " " . $row['LastName'];
  echo "<br />";
  }

  
mysql_close($con);
?>
	<div class="fh5co-page-title" style="background-image: url(images/slide_6.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 animate-box">
					<h1><span class="colored">最新</span> 活动</h1>
				</div>
			</div>
		</div>
	</div>
	<div id="best-deal">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box" data-animate-effect="fadeIn">
					<h2>建设中</h2>
					<p>待续</p>
				</div>
				<!--
				<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">
					<div class="fh5co-property">
						<figure>
							<img src="images/slide_3.jpg" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
							<a href="#" class="tag">正在进行</a>
						</figure>
						<div class="fh5co-property-innter">
							<h3><a href="#">编程之美</a></h3>
							<div class="price-status">
		               </div>
		               <p>文案</p>
	            	</div>
	            	<p class="fh5co-property-specification">
	            		<span><strong>3500</strong> Sq Ft</span>  <span><strong>3</strong> Beds</span>  <span><strong>3.5</strong> Baths</span>  <span><strong>2</strong> Garages</span>
	            	</p>
					</div>
				</div>

				<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">

					<div class="fh5co-property">
						<figure>
							<img src="images/slide_2.jpg" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
							<a href="#" class="tag">正在进行</a>
						</figure>
						<div class="fh5co-property-innter">
							<h3><a href="#">微软校园行</a></h3>
							<div class="price-status">
		               </div>
		               <p>文案</p>
	            	</div>
	            	<p class="fh5co-property-specification">
	            		<span><strong>3500</strong> Sq Ft</span>  <span><strong>3</strong> Beds</span>  <span><strong>3.5</strong> Baths</span>  <span><strong>2</strong> Garages</span>
	            	</p>
					</div>
					
				</div>
				<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">

					<div class="fh5co-property">
						<figure>
							<img src="images/slide_1.jpg" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
							<a href="#" class="tag">已完结</a>
						</figure>
						<div class="fh5co-property-innter">
							<h3><a href="#">第二届pentahackathon</a></h3>
							<div class="price-status">
		                 	<span class="price">$1,540,000</span>
		               </div>
		               <p>文案</p>
	            	</div>
	            	<p class="fh5co-property-specification">
	            		<span><strong>3500</strong> Sq Ft</span>  <span><strong>3</strong> Beds</span>  <span><strong>3.5</strong> Baths</span>  <span><strong>2</strong> Garages</span>
	            	</p>
					</div>
				</div>

				<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">
					<div class="fh5co-property">
						<figure>
							<img src="images/slide_4.jpg" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
							<a href="#" class="tag">已完结</a>
						</figure>
						<div class="fh5co-property-innter">
							<h3><a href="#">Hi HAckathon</a></h3>
							<div class="price-status">
		                 	<span class="price">$540,000 </span>
		               </div>
		               <p>文案</p>
	            	</div>
	            	<p class="fh5co-property-specification">
	            		<span><strong>3500</strong> Sq Ft</span>  <span><strong>3</strong> Beds</span>  <span><strong>3.5</strong> Baths</span>  <span><strong>2</strong> Garages</span>
	            	</p>
					</div>
				</div>
				
				<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">

					<div class="fh5co-property">
						<figure>
							<img src="images/slide_5.jpg" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
							<a href="#" class="tag">正在进行</a>
						</figure>
						<div class="fh5co-property-innter">
							<h3><a href="#">某活动</a></h3>
							<div class="price-status">
		                 	<span class="price">$200,000,000</span>
		               </div>
		               <p>文案</p>
	            	</div>
	            	<p class="fh5co-property-specification">
	            		<span><strong>3500</strong> Sq Ft</span>  <span><strong>3</strong> Beds</span>  <span><strong>3.5</strong> Baths</span>  <span><strong>2</strong> Garages</span>
	            	</p>
					</div>
					
				</div>
				<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">

					<div class="fh5co-property">
						<figure>
							<img src="images/slide_6.jpg" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
							<a href="#" class="tag">正在进行</a>
						</figure>
						<div class="fh5co-property-innter">
							<h3><a href="#">某活动</a></h3>
							<div class="price-status">
		                 	<span class="price">$1,540,000</span>
		               </div>
		               <p>文案</p>
	            	</div>
	            	<p class="fh5co-property-specification">
	            		<span><strong>3500</strong> Sq Ft</span>  <span><strong>3</strong> Beds</span>  <span><strong>3.5</strong> Baths</span>  <span><strong>2</strong> Garages</span>
	            	</p>
					</div>
				</div>


				<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">
					<div class="fh5co-property">
						<figure>
							<img src="images/slide_3.jpg" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
							<a href="#" class="tag">正在进行</a>
						</figure>
						<div class="fh5co-property-innter">
							<h3><a href="#">某活动</a></h3>
							<div class="price-status">
		                 	<span class="price">$540,000 </span>
		               </div>
		               <p>文案</p>
	            	</div>
	            	<p class="fh5co-property-specification">
	            		<span><strong>3500</strong> Sq Ft</span>  <span><strong>3</strong> Beds</span>  <span><strong>3.5</strong> Baths</span>  <span><strong>2</strong> Garages</span>
	            	</p>
					</div>
				</div>

				<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">

					<div class="fh5co-property">
						<figure>
							<img src="images/slide_2.jpg" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
							<a href="#" class="tag">正在进行</a>
						</figure>
						<div class="fh5co-property-innter">
							<h3><a href="#">某活动</a></h3>
							<div class="price-status">
		                 	<span class="price">$200,000,000</span>
		               </div>
		               <p>文案</p>
	            	</div>
	            	<p class="fh5co-property-specification">
	            		<span><strong>3500</strong> Sq Ft</span>  <span><strong>3</strong> Beds</span>  <span><strong>3.5</strong> Baths</span>  <span><strong>2</strong> Garages</span>
	            	</p>
					</div>
					
				</div>
				<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">

					<div class="fh5co-property">
						<figure>
							<img src="images/slide_1.jpg" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
							<a href="#" class="tag">正在进行</a>
						</figure>
						<div class="fh5co-property-innter">
							<h3><a href="#">某活动</a></h3>
							<div class="price-status">
		                 	<span class="price">$1,540,000</span>
		               </div>
		               <p>文案</p>
	            	</div>
	            	<p class="fh5co-property-specification">
	            		<span><strong>3500</strong> Sq Ft</span>  <span><strong>3</strong> Beds</span>  <span><strong>3.5</strong> Baths</span>  <span><strong>2</strong> Garages</span>
	            	</p>
					</div>
				</div>

				<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">
					<div class="fh5co-property">
						<figure>
							<img src="images/slide_4.jpg" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
							<a href="#" class="tag">正在进行</a>
						</figure>
						<div class="fh5co-property-innter">
							<h3><a href="#">某活动</a></h3>
							<div class="price-status">
		                 	<span class="price">$540,000 </span>
		               </div>
		               <p>文案</p>
	            	</div>
	            	<p class="fh5co-property-specification">
	            		<span><strong>3500</strong> Sq Ft</span>  <span><strong>3</strong> Beds</span>  <span><strong>3.5</strong> Baths</span>  <span><strong>2</strong> Garages</span>
	            	</p>
					</div>
				</div>
				
				<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">

					<div class="fh5co-property">
						<figure>
							<img src="images/slide_5.jpg" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
							<a href="#" class="tag">正在进行</a>
						</figure>
						<div class="fh5co-property-innter">
							<h3><a href="#">某活动</a></h3>
							<div class="price-status">
		                 	<span class="price">$200,000,000</span>
		               </div>
		               <p>文案</p>
	            	</div>
	            	<p class="fh5co-property-specification">
	            		<span><strong>3500</strong> Sq Ft</span>  <span><strong>3</strong> Beds</span>  <span><strong>3.5</strong> Baths</span>  <span><strong>2</strong> Garages</span>
	            	</p>
					</div>
					
				</div>
				<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">

					<div class="fh5co-property">
						<figure>
							<img src="images/slide_6.jpg" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
							<a href="#" class="tag">正在进行</a>
						</figure>
						<div class="fh5co-property-innter">
							<h3><a href="#">某活动</a></h3>
							<div class="price-status">
		                 	<span class="price">$1,540,000</span>
		               </div>
		               <p>文案</p>
	            	</div>
	            	<p class="fh5co-property-specification">
	            		<span><strong>3500</strong> Sq Ft</span>  <span><strong>3</strong> Beds</span>  <span><strong>3.5</strong> Baths</span>  <span><strong>2</strong> Garages</span>
	            	</p>
					</div>
				</div>


			</div>
			<div class="row">
				<div class="col-md-12 text-center animate-box" data-animate-effect="fadeIn">
					<nav>
					  <ul class="pagination">
					    <li class="disabled">
					      <a href="#" aria-label="Previous">
					        <span aria-hidden="true">&laquo;</span>
					      </a>
					    </li>
					    <li class="active"><a href="#">1</a></li>
					    <li><a href="#">2</a></li>
					    <li><a href="#">3</a></li>
					    <li><a href="#">4</a></li>
					    <li><a href="#">5</a></li>
					    <li>
					      <a href="#" aria-label="Next">
					        <span aria-hidden="true">&raquo;</span>
					      </a>
					    </li>
					  </ul>
					</nav>
				</div>
			</div>-->
		</div>
	</div>
