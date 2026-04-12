<?php require $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php'; ?>


<div class="task-action">
	<div class="container">

		<form method="POST" action="/actions/registerUser.php">
			<div>
				<label for="username">Username:</label>
				<input type="text" id="username" name="username" />
			</div>

			<div>
				<label for="password">Password:</label>
				<div style="display:flex;">
					<input type="password" id="password" name="password" />
					<svg id="eye" style="cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3m0 8a5 5 0 0 1-5-5a5 5 0 0 1 5-5a5 5 0 0 1 5 5a5 5 0 0 1-5 5m0-12.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5"/></svg>
				</div>
			</div>

			<br>
			<button type="submit">sign up</button>
		</form>

		<div>
			<a href="login.php"  class="button" >log in</a>
		</div>
		
	</div>
</div>


<script>

	let eyeEl = document.querySelector('#eye');
	let passwordEl = document.querySelector('#password');
	let isShowPassword = false;

	eyeEl.addEventListener('click', function() {
		
		if (!isShowPassword) {
			isShowPassword = true;
			passwordEl.type = "text";
		} else {
			isShowPassword = false;
			passwordEl.type = "password";
		}

	});

</script>


	

<?php require $_SERVER['DOCUMENT_ROOT'] . '/partials/foot.php'; ?>