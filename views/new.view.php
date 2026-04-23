<?php require $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php'; ?>


<div class="w-full h-full p-10">
	<form method="GET" action="/">
		<button class="bg-neutral-300/95 border hover:bg-neutral-200 hover:scale-105 border-neutral-400 rounded-lg px-3 py-1 cursor-pointer" type="submit">Back</button>
	</form>

	<div class="h-full flex justify-center items-center">
		
		<div class="bg-neutral-300/95 rounded-xl p-5">			
			<form id="createForm" method="POST" action="/actions/addNewTask.php">
				<div class="flex gap-2 items-end">
					<p class="w-14 flex justify-end">Task:</p>
					<input class="bg-neutral-400/40 rounded px-2 py-1 focus:outline-0" id="newTask" name="newTask" placeholder="*Task here*" autofocus required />
				</div>
				
				<div class="flex gap-2">
					<p class="w-14 flex justify-end">Done?:</p>
					<input type="checkbox" id="isDone" name="isDone" />
				</div>
	
				<div class="flex justify-center">					
					<button id="saveBTN" class="bg-neutral-300/95 border hover:bg-neutral-200 hover:scale-105 border-neutral-400 rounded-lg px-3 py-1 cursor-pointer" type="submit">save</button>
				</div>
			</form>
		</div>

	</div>
</div>

<script>
	const saveButtonEl = document.querySelector('#saveBTN');
	const isDoneEl = document.querySelector('#isDone');
	const createFormEl = document.querySelector('#createForm');

	saveButtonEl.addEventListener('click', function(event) {
		event.preventDefault();
		isDoneEl.value = isDoneEl.checked ? 1 : 0;
		isDoneEl.checked = true;
		createFormEl.submit();
	});
</script>
	

<?php require $_SERVER['DOCUMENT_ROOT'] . '/partials/foot.php'; ?>