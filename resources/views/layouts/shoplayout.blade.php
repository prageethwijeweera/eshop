<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>E-Shop</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
<link rel="stylesheet" type="text/css" href="{{URL::to('css/style.css')}}" />
</head>

<body>
	<div id="header">
		<a href="{{URL::to('')}}" class="float"><img src="{{URL::to('images/logo.jpg')}}" alt="" width="171" height="73" /></a>
	  <div class="topblock1">
			Currency:<br /><select><option>US Dollar</option></select>
		</div>
	    <div class="topblock2">
			Lanquage:<br />
		    <a href="#"><img src="{{URL::to('images/flag1.gif')}}" alt="" width="19" height="11" /></a>
		    <a href="#"><img src="{{URL::to('images/flag2.gif')}}" alt="" width="19" height="11" /></a>
		    <a href="#"><img src="{{URL::to('images/flag3.gif')}}" alt="" width="19" height="11" /></a>
		    <a href="#"><img src="{{URL::to('images/flag4.gif')}}" alt="" width="19" height="11" /></a>
		    <a href="#"><img src="{{URL::to('images/flag5.gif')}}" alt="" width="19" height="11" /></a>
		    <a href="#"><img src="{{URL::to('images/flag6.gif')}}" alt="" width="19" height="11" /></a>
		</div>
		<div class="topblock2">
			<img src="{{URL::to('images/shopping.gif')}}" alt="" width="24" height="24" class="shopping" />
		 	<p>Shopping cart</p> <p><strong>0</strong> <span>items</span></p>
		</div>
		<ul id="menu">
			<li><img src="{{URL::to('images/li.gif')}}" alt="" width="19" height="29" /></li>
			<li><a href="{{URL::to('/')}}"><img src="{{URL::to('images/but1_a.gif')}}" alt="" width="90" height="29" /></a></li>
			<li><a href="index2.html"><img src="{{URL::to('images/but2.gif')}}" alt="" width="129" height="29" /></a></li>
			<li><a href="index2.html"><img src="{{URL::to('images/but3.gif')}}" alt="" width="127" height="29" /></a></li>
			<li><a href="index2.html"><img src="{{URL::to('images/but4.gif')}}" alt="" width="113" height="29" /></a></li>
			<li><a href="index2.html"><img src="{{URL::to('images/but5.gif')}}" alt="" width="132" height="29" /></a></li>
			<li><a href="index2.html"><img src="{{URL::to('images/but6.gif')}}" alt="" width="105" height="29" /></a></li>
			<li><a href="index2.html"><img src="{{URL::to('images/but7.gif')}}" alt="" width="82" height="29" /></a></li>
			<li><a href="index2.html"><img src="{{URL::to('images/but8.gif')}}" alt="" width="112" height="29" /></a></li>
			<li><a href="index2.html"><img src="{{URL::to('images/but9.gif')}}" alt="" width="71" height="29" /></a></li>
		</ul>
	</div>
	
	<div id="container">
	  
	@yield('indexcontent')

	  <div id="left" class="column">
	  	<div class="block">
		<img src="{{URL::to('images/title1.gif')}}" alt="" width="168" height="42" /><br />
			<ul id="navigation">

				@foreach($categories as $category)
					<li class="color" >
						<a href="{{URL('/')}}/category/{{$category["id"]}}" class="category" data-item="{{$category["id"]}}" name="_token" value="{{ csrf_token() }}">{{$category['category_name']}}</a>
					</li>
				@endforeach



				
			</ul>
		</div>
		<a href="#"><img src="{{URL::to('images/banner1.jpg')}}" alt="" width="172" height="200" /></a>
	  </div>
	  <div id="right" class="column">
	  	<a href="#"><img src="{{URL::to('images/banner2.jpg')}}" alt="" width="237" height="216" /></a><br />
		<div class="rightblock">
			<img src="{{URL::to('images/title4.gif')}}" alt="" width="223" height="29" /><br />
			<div class="blocks">
				<img src="{{URL::to('images/top_bg.gif')}}" alt="" width="218" height="12" />
				<form action="#">
					<p class="line"><span>Login:</span> <input type="text" /></p>
					<p class="line"><span>Password:</span> <input type="text" /></p>
					<p class="line center"><a href="#" class="reg">Registration</a> | <a href="#" class="reg">Forgot password?</a></p>
					<p class="line center pad20"><a href="#"><img src="{{URL::to('images/enter.gif')}}" alt="" width="69" height="25" /></a></p>
				</form>
				<img src="{{URL::to('images/bot_bg.gif')}}" alt="" width="218" height="10" /><br />
			</div>
			<div class="blocks">
				<img src="{{URL::to('images/top_bg.gif')}}" alt="" width="218" height="12" />
				<div id="news">
					<img src="{{URL::to('images/title5.gif')}}" alt="" width="201" height="28" />
					<span class="date">23 november</span>
					<p>Dolor sit amet, consetetur sadipscing elitr, seddiam nonumy eirmod tempor. invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
					<a href="#" class="more">read more</a>
				</div>
				<img src="{{URL::to('images/bot_bg.gif')}}" alt="" width="218" height="10" /><br />
			</div>
		</div>
	  </div>
	</div>
	
	<div id="footer">
		<a href="{{URL::to('')}}">Home</a>  |  <a href="index2.html">New Products</a>  |  <a href="index2.html">Special Offers</a>  |  <a href="index2.html">My Account</a>  |  <a href="index2.html">Shopping Chart</a>  |  <a href="index2.html">Locations</a>  |  <a href="index2.html">FAQ</a>  |  <a href="index2.html">Contact Us</a>  |  <a href="index2.html" class="terms">Privacy Policy</a>  |  <a href="index2.html" class="terms">Terms of Use</a>
		<p>Copyright &copy;. All rights reserved. <a href="http://www.turkhey.com/" title="Holiday Destinations in Turkey">Holiday Destinations in Turkey</a></p>
	</div>
	<script type="text/javascript" src="{{URL::to('lib/jquery/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::to('lib/js-cookie/src/js.cookie.js')}}"></script>
	<script type="text/javascript" src="{{URL::to('site.js')}}"></script>
</body>
</html>
