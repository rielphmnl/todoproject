[ ] add margin top buttons (log in and register)
[ ] background of a class="button"

[x] log in 
	[x] make button to go to register page

[x] register
	[x] make button to go to log in page

[x] create log out
	[x] make logout button
	[x] end session
		$_SESSION = []; //clear session array
		session_destroy(); //php function that destroys session

		$params = session_get_cookie_params();
		setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);

		[ ] redirect to log in page

[ ] use url routing instead of the file itself
[ ] make actions to controllers





/////////////////////// agile

>> when a _____ does a _____ it should _____ 

when a user clicks the download button it should download the file


when a user clicks on the logout button it should log the session out and return to log in page









////////////////////// bry

[ ] logout
	[ ] frontend
		[ ] add a button to the nav bar
			[ ] onclick send request to backend for logout
	[ ] backend
		[ ] function for logout
			[ ] clear session
			[ ] clear cookies
			[ ] redirect to login page
