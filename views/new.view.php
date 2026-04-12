<?php require $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php'; ?>


<div class="task-action">
	<div class="container">

		<form method="GET" action="/">
			<button class="back" type="submit">Back</button>
		</form>

		<form id="createForm" method="POST" action="/actions/addNewTask.php">
			<div class="detail">
				<p class="label">Task:</p>
				<input id="newTask" name="newTask" placeholder="*Task here*" required />
			</div>
			
			<div class="detail">
				<p class="label">Done?:</p>
				<input type="checkbox" id="isDone" name="isDone" />
			</div>

			<button id="saveBTN" class="save" type="submit">save</button>
		</form>
		
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