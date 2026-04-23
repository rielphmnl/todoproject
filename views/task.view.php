<?php require $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php'; ?>


<div class="h-full w-full p-10">
	<div class="h-full w-full">

		<!-- back button -->
		<div class="flex">
			<a class="bg-neutral-300/95 border hover:bg-neutral-200 hover:scale-105 border-neutral-400 rounded-lg px-3 py-1 cursor-pointer" href="/">Back</a>
		</div>

		<!-- bottom area -->
		<div class="w-full h-full flex justify-center items-center">
			<div class="flex flex-col gap-5 items-center bg-neutral-300/95 rounded-xl p-5">
				<form id="updateForm" method="POST" action="/actions/updateTask.php">	
					<div class="flex gap-2">
						<p class="flex justify-end w-14">ID:</p>
						<input class="flex-1 font-bold" type="text" name="id" value="<?= $todo['id'] ?>" />
					</div>
					
					<div class="flex gap-2">
						<p class="w-14 flex justify-end">Task:</p>
						<input class="flex-1 font-bold" type="text" name="task" placeholder="<?= $todo['task'] ?>" value="<?= $todo['task'] ?>" />
					</div>
		
					<div class="flex gap-2">
						<p class="w-14 flex justify-end">Done?:</p>
						<input						
							type="checkbox"
							id="isDone"
							name="isDone"
							<?= $todo['isDone'] === 1 ? 'checked' : '' ?>
							value="<?= $todo['isDone'] ?>"
						/>
					</div>
				</form>

				<div class="flex justify-center gap-2 w-full">
					<!-- fix form for updating task -->	
					<button class="bg-neutral-300/95 border hover:bg-neutral-200 hover:scale-105 border-neutral-400 rounded-lg px-3 py-1 cursor-pointer" id="saveBTN" type="submit">save</button>
		
					<div class="">					
						<form method="POST" action="/actions/deleteTask.php">
							<input type="hidden" name="id" value="<?= $todo['id'] ?>" />
							<button class="bg-neutral-300/95 border hover:bg-neutral-200 hover:scale-105 border-neutral-400 rounded-lg px-3 py-1 cursor-pointer" type="submit">delete</button>
						</form>
					</div>
				</div>
			</div>		

		</div>




	</div>
</div>

<script>
	const updateFormEl = document.querySelector('#updateForm');
	const saveButtonEl = document.querySelector('#saveBTN');
	const isDoneEl = document.querySelector('#isDone');

	saveButtonEl.addEventListener('click', function() {
		isDoneEl.value = isDoneEl.checked ? 1 : 0;
		isDoneEl.checked = true;

		updateFormEl.submit();
	});
	
</script>
	

<?php require $_SERVER['DOCUMENT_ROOT'] . '/partials/foot.php'; ?>