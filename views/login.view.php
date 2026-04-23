<?php require $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php'; ?>


<div class="h-full flex justify-center items-center">
	<div class="bg-gray-200/70 border-2 border-white/30 rounded-xl shadow-xl p-6">
	
		<form class="flex flex-col gap-5" method="POST" action="/actions/loginUser.php">
			<div class="flex gap-2">
				<label for="username">username:</label>
				<input class="bg-gray-300 rounded shadow-2xl focus:outline-0 px-2 py-1" type="text" id="username" name="username" autofocus />
			</div>
	
			<div class="flex gap-2">
				<label for="password">password:</label>

				<div>
					<input class="bg-gray-300 rounded shadow-2xl focus:outline-0 px-2 py-1" type="password" id="password" name="password" />
					<svg class="inline-block" id="eye" style="cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3m0 8a5 5 0 0 1-5-5a5 5 0 0 1 5-5a5 5 0 0 1 5 5a5 5 0 0 1-5 5m0-12.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5"/></svg>
				</div>			
			</div>

			<div class="w-full flex justify-center gap-2">
				<button class="bg-neutral-300/95 border hover:bg-neutral-200 hover:scale-105 border-neutral-400 rounded-lg px-3 py-1 cursor-pointer" type="submit">log in</button>

				<div class="bg-neutral-300/95 border hover:bg-neutral-200 hover:scale-105 border-neutral-400 rounded-lg px-3 py-1 cursor-pointer">
					<a href="register.php"  class="" >sign up</a>
				</div>
			</div>

			<div>
				<p class="text-xs font-extralight text-gray-400/50">user3 password</p>
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