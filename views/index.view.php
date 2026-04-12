<?php require $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php'; ?>


<div class="app">
	<p>TODO LIST</p>
	<div class="container">
		<div class="list">

			<?php foreach ($todos as $todo) : ?>
				<div class="item">
					<p>
						<?php echo $todo['isDone'] === 1 ? "<s>{$todo['task']}</s>" : "{$todo['task']}"; ?>
					</p>
					<div style="display:flex; align-items: center;">				
						<a style="height:100%" class="button" href="/task.php?id=<?= $todo['id'] ?>"><p>view</p></a>
					</div>
				</div>
			<?php endforeach ?>


		</div>
		<div class="create-new">
			<a class="button" href="/new.php">Create TODO</a>
		</div>	
	</div>
	
	<!-- make logout button -->
	<form action="/actions/logoutUser.php" method="POST">
		<button>log out</button>
	</form>
</div>
	

<?php require $_SERVER['DOCUMENT_ROOT'] . '/partials/foot.php'; ?>