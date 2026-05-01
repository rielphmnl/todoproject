<?php require $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php'; ?>

<!-- app -->
<div class="h-screen w-screen flex flex-col justify-center items-center overflow-y-auto">
	<p class="text-2xl font-semibold">TODO LIST</p>
	<!-- container -->
	<div class="bg-neutral-300/60 rounded-xl p-5 mt-5 flex flex-col gap-2 items-center">
		<!-- list -->
		<div class="bg-neutral-300/80 rounded-xl p-5 flex flex-col gap-2">

			<?php foreach ($todos as $todo) : ?>
				<div class="border border-neutral-400 rounded-lg flex gap-5 justify-between items-center py-3 px-5">
					<p class="font-semibold">
						<?php echo $todo['isDone'] === 1 ? "<s>{$todo['task']}</s>" : "{$todo['task']}"; ?>
					</p>
					<div class="flex">
						<a class="bg-neutral-300/95 border hover:bg-neutral-200 hover:scale-105 border-neutral-400 rounded-lg px-3 py-1 cursor-pointer" href="/edit-todo?id=<?= $todo['id'] ?>"><p>view</p></a>
					</div>
				</div>
			<?php endforeach ?>


		</div>
		<!-- create new -->
		<div class="flex">
			<a class="bg-neutral-300/95 border hover:bg-neutral-200 hover:scale-105 border-neutral-400 rounded-lg px-3 py-1 cursor-pointer" href="/create-todo">Create TODO</a>
		</div>	
	</div>
	
	<!-- make logout button -->
	<form class="pt-2" action="/actions/logoutUser.php" method="POST">
		<button class="bg-neutral-300/95 border hover:bg-neutral-200 hover:scale-105 border-neutral-400 rounded-lg px-3 py-1 cursor-pointer">log out</button>
	</form>
</div>
	

<?php require $_SERVER['DOCUMENT_ROOT'] . '/partials/foot.php'; ?>