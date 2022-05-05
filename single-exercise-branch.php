<!DOCTYPE html>
<html>
<head>	
	<?php wp_head();?>
	
	<script src="https://cdn.tailwindcss.com"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@400;500;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<link href="https://cdn.jsdelivr.net/gh/lazywasabi/thai-web-fonts@6/fonts/Anuphan/Anuphan.css" rel="stylesheet" />
</head>
<body <?php body_class(); ?>>
	<div class="flex flex-col content-between">
		<nav class="nav_codebranch_exercise flex items-center justify-between">
			<div class="flex items-center">
				<i class="fas fa-solid fa-code color-blue text-xl px-4"></i>
				<div class="flex items-baseline">
					<h1 class="text-2xl font-bold pr-4">CODEBOX</h1>
					<p class="text-white px-4">Phawinee Thongbor</p>
					<i class="fas fa-solid fa-pen text-white"></i>
				</div>
			</div>
			
			<div class="btn_codebranch_exercise pr-4">
				<i class="fas fa-solid fa-share bg-gray-300 rounded-md p-2 m-1"></i>
				<i class="fas fa-solid fa-sitemap bg-gray-300 rounded-md p-2"></i>
				<i class="fas fa-solid fa-save save_code rounded-md p-2 m-1 text-white"></i>
				<i class="fas fa-solid fa-info-circle bg-purple rounded-md p-2 text-white bg-lightblue"></i>
			</div>
		</nav>

		<div class="flex">
			<div class="realtime_code bg-slate-50">
				<p class="p-4">
					Hello Word
				</p>
			</div>
			<div class="code_editor">
				<p class="p-4 text-pink-600">
					Hello Word
				</p>
			</div>
		</div>

		<footer class="nav_codebranch_exercise flex items-center justify-between px-4">
			<div class="btn_codebranch_exercise pr-4">
				<i class="fas fa-solid fa-code-branch text-white bg-yellow-400 rounded-md p-2 mr-1"></i>
				<i class="fas fa-solid fa-clone text-white bg-fuchsia-400 rounded-md p-2"></i>
				<i class="fas fa-solid fa-sync rounded-md p-2 m-1 text-white bg-lime-400"></i>
				<i class="fas fa-solid fa-file-download bg-red-500 rounded-md p-2 text-white"></i>
			</div>
			<div>
				<div class="login_users bg-pink-500 rounded-md py-1 px-2 text-white">
					<span class="text-sm pr-1">Log in</span>
					<i class="fas fa-solid fa-user"></i>
				</div>
			</div>
		</footer>
	</div>
	
	<style type="text/css">
		body{
			font-family: 'Anuphan', sans-serif; 
			color: var(--color1);
		}
		:root {
			--black: #333;
			--blueboxbranch: #63E3FF;
		}
		.color-blue {
			color: #63E3FF;
		}
		.save_code {
			background-color: #63E3FF;
		}
		.bg-purple {
			background-color: #9A5BED;
		}
		.nav_codebranch_exercise {
			background-color: var(--black);
			width: 100vw;
			height: auto;
		}
		.nav_codebranch_exercise h1 {
			color: var(--blueboxbranch);
		}
		.realtime_code {
			height: 85vh;
			width: 50vw;
		}
		.code_editor {
			width: 50vw;
			background-color: var(--black);	
		}
	</style>
	<?php wp_footer() ?>
</body>
</html>