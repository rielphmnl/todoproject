<?php require $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php'; ?>


<div class="h-full flex justify-center items-center">
	<div class="bg-gray-200/70 border-2 border-white/30 rounded-xl shadow-xl p-6">
	
		<form method="POST" action="/actions/loginUser.php">
			<div>
				<label for="username">username:</label>
				<input class="bg-gray-300 rounded shadow-2xl" type="text" id="username" name="username" />
			</div>
	
			<div class="mt-1">
				<label for="password">password:</label>
				
					<input class="bg-gray-300 rounded shadow-2xl type="password" id="password" name="password" />
					<svg class="inline-block" id="eye" style="cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3m0 8a5 5 0 0 1-5-5a5 5 0 0 1 5-5a5 5 0 0 1 5 5a5 5 0 0 1-5 5m0-12.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5"/></svg>

			</div>

			<div class="w-full flex justify-around mt-5">
				<button class="bg-gray-400 rounded-xl p-4" type="submit">log in</button>

				<div class="bg-gray-400 rounded-xl p-4">
					<a href="register.php"  class="" >sign up</a>
				</div>
			</div>
		</form>
	
		
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