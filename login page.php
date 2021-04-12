

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <div class="main">
        <div class="formbox">
            <div class="buttonbox">
                <div id="btn"></div>
                <button type="button" class="togglebtn" onclick="login()">login</button>
                <button type="button" class="togglebtn" onclick="Register()">Register</button>
            </div>

            <form method="post" action="validate_login.php" class="input-group" id="login">
                <input type="text" name="Username" id="usrname" class="input-field" placeholder="Username" required>
                <input type="password" name="password" id="pw" class="input-field" placeholder="Password" required><br><br><br>
                <button type="submit" name= "submit" value="submit" class="submit-btn">Login</button>

                
                <br><br><a href="first_page.html"><button type="button" class="submit-btn">Back to Home</button></a>
            </form>

            <form method = "post" action="signup.php" class="input-group" id="Register">
                <!--  onsubmit = "return validation()"  -->
                <input type="text" name="Username" id="usrname" class="input-field" placeholder="Username" required>
                <input type="password" name="password" id="pw" class="input-field" placeholder="Password" required>
                <input type="password"  id="cnfrm pw" class="input-field"
                    placeholder="Confirm Password"><br><br><br>
                <button type="submit" name= "submit" value="submit" class="submit-btn">Submit</button>
                <br><br><a href="first_page.html"><button type="button" class="submit-btn">Back to Home</button></a>
            </form>

            <script>
                var x = document.getElementById("login");
                var y = document.getElementById("Register");
                var z = document.getElementById("btn");

                function Register() {
                    x.style.left = "-450px";
                    y.style.left = "50px";
                    z.style.left = "110px";
                }

                function login() {
                    x.style.left = "50px";
                    y.style.left = "450px";
                    z.style.left = "0";
                }
            </script>
        </div>
    </div>
<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>

</html>










