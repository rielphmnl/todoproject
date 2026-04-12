<?php require $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php'; ?>


<div class="task-action">
	<div class="container">

		<div>
			<a class="button" href="/">Back</a>
		</div>
		<form id="updateForm" method="POST" action="/actions/updateTask.php">	
			<div class="detail">
				<p class="label">ID:</p>
				<input type="text" name="id" value="<?= $todo['id'] ?>" />
			</div>
			
			<div class="detail">
				<p class="label">Task:</p>
				<input type="text" name="task" placeholder="<?= $todo['task'] ?>" value="<?= $todo['task'] ?>" />
			</div>

			<div class="detail">
				<p class="label">Done?:</p>
				<input
					type="checkbox"
					id="isDone"
					name="isDone"
					<?= $todo['isDone'] === 1 ? 'checked' : '' ?>
					value="<?= $todo['isDone'] ?>"
				/>
			</div>
		</form>

		<div class="btn-options">
			<!-- fix form for updating task -->	
			<button id="saveBTN" type="submit">save</button>

			<form method="POST" action="/actions/deleteTask.php">
				<input type="hidden" name="id" value="<?= $todo['id'] ?>" />
				<button type="submit">delete</button>
			</form>
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