<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Nicholas Rubin</title>
<meta name="description" content="A 16-year-old designer, developer, and photographer living in Seattle, Washington. Creator of Greenhouse, a free browser extension for Chrome and Safari.">
<link type="text/css" rel="stylesheet" href="styles/style.css">
<link rel="stylesheet" type="text/css" href="styles/animations.css">
<script src="scripts/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="styles/sweet-alert.css">
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="scripts/instafeed.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-27833160-5', 'nicholasrub.in');
  ga('send', 'pageview');

</script>
</head>
<script src="scripts/scroll.js"></script>
<script src="scripts/start.js"></script>
<body>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $field_name = $_POST['cf_name'];
    $field_email = $_POST['cf_email'];
    $field_message = $_POST['cf_message'];
    
    $mail_to = 'nrubin999@gmail.com';
    $subject = 'Message From: '.$field_name;
    
    $body_message = 'From: '.$field_name."\n";
    $body_message .= 'E-mail: '.$field_email."\n";
    $body_message .= 'Message: '.$field_message;
    
    $headers = 'From: '.$field_email."\r\n";
    $headers .= 'Reply-To: '.$field_email."\r\n";
    
    if (!empty($field_message)) {
    	$mail_status = mail($mail_to, $subject, $body_message, $headers);
    }
    
    if ($mail_status) { ?>
        <script language="javascript" type="text/javascript">
			alert("Success! Thanks for the message.");
            window.location = 'http://nicholasrub.in';
        </script>
    <?php
    }
    else { ?>
        <script language="javascript" type="text/javascript">
            alert("Message failed. Did you forget to type something?");
            window.location = 'http://nicholasrub.in';
        </script>
    <?php
	}
}
?>
<div id="top">
<a href="index.html"><img src="images/logo.png" id="logo" class="fadeIn"></a>
<ul id="nav" class="pullDown">
<li id="link"><a href="http://allaregreen.us" target="_blank" onClick="ga('send', 'event', 'button', 'click', 'greenhouse');">GREENHOUSE</a></li>
<li id="link" style="padding-bottom:10px;">PHOTOGRAPHY
	<ul>
    	<li><a href="http://instagram.com/nick_rubin" target="_blank" onClick="ga('send', 'event', 'button', 'click', 'instagram');">INSTAGRAM</a></li>
        <li><a href="http://500px.com/nickrubin" target="_blank" onClick="ga('send', 'event', 'button', 'click', '500px');">500PX</a></li>
    </ul>
</li>
<li id="link"><a href="http://dribbble.com/nickrubin" target="_blank" onClick="ga('send', 'event', 'button', 'click', 'dribbble');">DESIGN</a></li>
<li id="link"><a href="http://blog.nicholasrub.in" target="_blank" onClick="ga('send', 'event', 'button', 'click', 'blog');">BLOG</a></li>
<li id="link"><span id="contactnav" style="cursor:pointer;"><a>CONTACT</a></span></li>
</ul>
<p id="name" class="fadeIn">NICHOLAS RUBIN</p>
<p id="subname">I'm a 16-year-old designer, developer,</p> 
<p id="subnamebottom">and photographer living in Seattle, WA. Creator of Greenhouse.</p>
<div id="contact" class="pullDown">
	<p id="buttonlabel">CONTACT ME</p>
</div>
</div>
<script type="text/javascript">
    var userFeed = new Instafeed({
        get: 'user',
        userId: 245514203,
        accessToken: '245514203.467ede5.0db3e87413074b7e85ac62e1b7f5ee7c',
		limit: 10,
		template: '<a href="{{link}}" target="_blank"><img src="{{image}}" id="instagram"></a>'
    });
    userFeed.run();
</script>
<div id="instafeed">
</div>
<div id="second">
<p id="creations">My Creations:</p>
<a href="http://allaregreen.us" target="_blank" onClick="ga('send', 'event', 'button', 'click', 'greenhouse');">
<img id="greenhouselogo" src="images/greenhouselogo.png">
<p class="greenhousetitle">Greenhouse</p>
</a>
<p class="greenhousetitle" id="greenhousesub">A free browser extension for Chrome Firefox, and Safari that exposes the role money plays in Congress. Displays on any web page detailed campaign contribution data for every Senator and Representative, including total amount received and breakdown by industry and by size of donation. Puts vital data where it’s most relevant so you can discover the real impact of money on our political system. See the website <a href="http://allaregreen.us" style="color:#666666;">here</a>.</p>
<a href="http://quink.nicholasrub.in" target="_blank" onClick="ga('send', 'event', 'button', 'click', 'greenhouse');">
<img id="quinklogo" src="images/icon128.png">
<p class="greenhousetitle">Quink</p>
</a>
<p class="greenhousetitle" id="greenhousesub">Top-10 finalist at MHacks IV. A free browser extension for Chrome and Safari that lets you read the news faster without leaving the page you’re on. Quink displays a short summary of linked pages/articles on mouse hover using a natural language processing API. A truly integrated browsing experience, complete with easy social sharing. See the website <a href="http://quink.nicholasrub.in" style="color:#666666;">here</a>.</p>
</div>
<p id="about"><img src="images/avatar.png" height="90" width="90" style="border:4px solid white;margin-bottom:20px;"><br>I'm <span style="color:white!important;text-decoration:underline!important;font-size:17px!important;"><b>Nicholas Rubin</b></span>, a 16-year-old designer, developer, and photographer living in Seattle, WA. I specialize in web design and web applications. Creator of Greenhouse, and finalist at MHacks IV.
<br><br>
<span style="line-height:1.5em;">
<a href="http://blog.nicholasrub.in" target="_blank" onClick="ga('send', 'event', 'button', 'click', 'blog');"><span style="color:white;border-bottom:1px solid white;">Blog</span></a><br>
<a href="http://twitter.com/nickrubin" target="_blank" onClick="ga('send', 'event', 'button', 'click', 'twitter');"><span style="color:#55aace;border-bottom:1px solid #55aace;">Twitter</span></a><br>
<a href="http://instagram.com/nick_rubin" target="_blank" onClick="ga('send', 'event', 'button', 'click', 'instagram');"><span style="color:white;border-bottom:1px solid white;">Instagram</span></a><br>
<a href="http://500px.com/nickrubin" target="_blank" onClick="ga('send', 'event', 'button', 'click', '500px');"><span style="color:#999999;border-bottom:1px solid #999999;">500px</span></a><br>
<a href="http://dribbble.com/nickrubin" target="_blank" onClick="ga('send', 'event', 'button', 'click', 'dribbble');"><span style="color:#ea4c89;border-bottom:1px solid #ea4c89;">Dribbble</span></a><br>
</p>
</span>
<p id="name2" style="padding-top:60px !important;margin-left:90px!important;margin-bottom:0px !important;text-align:left;color:#999999!important;">Contact me:</p>
<form id="contact2" action="index.php" method="post">
    <input spellcheck="false" id="namebox" style="text-transform:capitalize;" type="text" placeholder="Name" name="cf_name">
    <input spellcheck="false" id="emailbox" type="text" placeholder="Email" name="cf_email">
    <textarea spellcheck="false" id="messagebox" placeholder="Message" name="cf_message"></textarea>
    <input id="sendbutton" type="submit" value="SEND">
</form>
</body>
</html>
