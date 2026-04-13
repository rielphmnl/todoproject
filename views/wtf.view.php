<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>tailwind practice</title>

		<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
		<link rel="stylesheet" href="style.css">
	</head>
	<body class="h-screen bg-gray-900">

		<div class="h-screen">
			<!-- nav bar -->
			<div class="flex justify-between px-10 py-7 text-gray-50 text-sm font-medium items-center">	
				<div class="text-indigo-600">
					<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"><path fill="currentColor" d="M12 6c-2.67 0-4.33 1.33-5 4c1-1.33 2.17-1.83 3.5-1.5c.76.19 1.31.74 1.91 1.35c.98 1 2.09 2.15 4.59 2.15c2.67 0 4.33-1.33 5-4c-1 1.33-2.17 1.83-3.5 1.5c-.76-.19-1.3-.74-1.91-1.35C15.61 7.15 14.5 6 12 6m-5 6c-2.67 0-4.33 1.33-5 4c1-1.33 2.17-1.83 3.5-1.5c.76.19 1.3.74 1.91 1.35C8.39 16.85 9.5 18 12 18c2.67 0 4.33-1.33 5-4c-1 1.33-2.17 1.83-3.5 1.5c-.76-.19-1.3-.74-1.91-1.35C10.61 13.15 9.5 12 7 12"/></svg>
				</div>
				
				<div class="flex justify-between gap-12">
					<a href="#">Product</a>
					<a href="#">Features</a>
					<a href="#">Marketplace</a>
					<a href="#">Company</a>
				</div>
	
				<div>
					<a href="#">Log in →</a>
				</div>
				
			</div>

			<!-- hero -->
			<div class="h-full flex justify-center items-center">
				<div class="text-gray-50 text-center align-middle w-2/3">
					<p class="text-6xl font-semibold">Deploy to the cloud</p>
					<p class="text-6xl font-semibold">with confidence</p>
	
					<p class="text-gray-400 mt-7">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat.</p>
	
					<!-- buttons -->
					<div class="mt-8 flex justify-center gap-5">
						<div>
							<a href="#" class="text-gray-50 bg-indigo-500 hover:bg-indigo-400 px-3 py-3 rounded-md">Get started</a>
						</div>
						<div>
							<a href="#" class="text-gray-50">Learn more →</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- image div -->
		<div class="text-gray-50 h-screen p-5">
			<div class="h-full w-full bg-indigo-900 flex justify-center items-center rounded-xl">
				<p>[ image here ]</p>
			</div>	
		</div>
		
		<!-- brand logos -->
		<div class="text-gray-50 flex justify-around text-3xl mt-32">
			<p>transitor</p>
			<p>reform</p>
			<p>tuple</p>
			<p>savvycal</p>
			<p>statamic</p>
		</div>

		<!-- case study link -->
		<div class="flex justify-center">
			<p class=" text-gray-400 mt-12 border border-gray-400/50 rounded-2xl px-4 py-1 font-extralight text-sm cursor-pointer" id="pill">
				Transistor saves up to $40,000 per year, per employee by working with us. 
				<span class="text-indigo-400 font-medium">
					Read our case study →
				</span>
			</p>
		</div>

		<!-- everything you need to know -->
		<div class="h-screen mt-60 flex flex-col items-center">
			<div class="w-2/3 text-center">
				<p class="text-indigo-400 font-medium">Deploy faster</p>
				<p class="text-gray-50 mt-3 text-5xl font-semibold">Everything you need to deploy our app</p>
				<p class="text-gray-400 mt-5 text-lg font-light">Quis tellus eget adipiscing convallis sit sit eget aliquet quis. Suspendisse eget egestas a elementum pulvinar et feugiat blandit at. In mi viverra elit nunc.</p>
			</div>

			<!-- bullets -->
			<div class="text-gray-50 mt-24 bg-gray-900 w-full flex flex-wrap gap-9 justify-center">
				<!-- per bullet -->
				<div class="w-96 flex gap-5">
					<div>
						<div class="bg-indigo-500 h-12 w-12 rounded-lg flex justify-center items-center">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M5.5 20A5.5 5.5 0 0 1 0 14.5A5.5 5.5 0 0 1 5.5 9c1-2.35 3.3-4 6-4c3.43 0 6.24 2.66 6.5 6.03l.5-.03c2.5 0 4.5 2 4.5 4.5S21 20 18.5 20zm0-10C3 10 1 12 1 14.5S3 19 5.5 19h13a3.5 3.5 0 0 0 3.5-3.5a3.5 3.5 0 0 0-3.5-3.5c-.56 0-1.1.13-1.57.37l.07-.87A5.5 5.5 0 0 0 11.5 6a5.51 5.51 0 0 0-5.31 4.05zm6.5 7v-5.25L14.25 14l.75-.66l-3.5-3.5l-3.5 3.5l.75.66L11 11.75V17z"/></svg>
						</div>

					</div>
					
					<div class="mt-2">
						<p class="font-semibold">Push to deploy</p>

						<p class="text-gray-400 mt-3">Morbi viverra dui mi arcu sed. Tellus semper adipiscing suspendisse semper morbi. Odio urna massa nunc massa.</p>
					</div>
					
				</div>

				<div class="w-96 flex gap-5">
					<div>
						<div class="bg-indigo-500 h-12 w-12 rounded-lg flex justify-center items-center">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M17 10h-1.2V7c0-2.1-1.7-3.8-3.8-3.8S8.2 4.9 8.2 7v3H7c-.6 0-1 .4-1 1v8c0 .6.4 1 1 1h10c.6 0 1-.4 1-1v-8c0-.6-.4-1-1-1M9.8 7c0-1.2 1-2.2 2.2-2.2s2.2 1 2.2 2.2v3H9.8zm6.7 11.5h-9v-7h9z"/></svg>
						</div>

					</div>
					
					<div class="mt-2">
						<p class="font-semibold">SSL certificates</p>

						<p class="text-gray-400 mt-3">Sit quis amet rutrum tellus ullamcorper ultricies libero dolor eget. Sem sodales gravida quam turpis enim lacus amet.</p>
					</div>
					
				</div>

				<div class="w-96 flex gap-5">
					<div>
						<div class="bg-indigo-500 h-12 w-12 rounded-lg flex justify-center items-center">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1"><path d="M6.446 10.512a5.75 5.75 0 0 0 8.429 6.468m2.679-3.492A5.75 5.75 0 0 0 9.125 7.02"/><path stroke-linejoin="round" d="m3.75 12.5l2.5-2.5l2.5 2.5m6.5-1l2.5 2.5l2.5-2.5"/></g></svg>
						</div>

					</div>
					
					<div class="mt-2">
						<p class="font-semibold">Simple queues</p>

						<p class="text-gray-400 mt-3">Quisque est vel vulputate cursus. Risus proin diam nunc commodo. Lobortis auctor congue commodo diam neque.</p>
					</div>
					
				</div>

				<div class="w-96 flex gap-5">
					<div>
						<div class="bg-indigo-500 h-12 w-12 rounded-lg flex justify-center items-center">
							<svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 256 256"><path fill="currentColor" d="M68 128a130.7 130.7 0 0 1-13.73 58.7a4 4 0 0 1-3.58 2.22a3.9 3.9 0 0 1-1.78-.42a4 4 0 0 1-1.8-5.36A122.7 122.7 0 0 0 60 128a67.74 67.74 0 0 1 25.5-53.08a4 4 0 0 1 5 6.25A59.74 59.74 0 0 0 68 128m60-4a4 4 0 0 0-4 4a188.1 188.1 0 0 1-23.48 91a4 4 0 0 0 7 3.88A196.2 196.2 0 0 0 132 128a4 4 0 0 0-4-4m0-32a36 36 0 0 0-36 36a4 4 0 0 0 8 0a28 28 0 0 1 56 0a218 218 0 0 1-20.9 93.7a4 4 0 1 0 7.24 3.41A226 226 0 0 0 164 128a36 36 0 0 0-36-36m0-64A100.11 100.11 0 0 0 28 128a91.7 91.7 0 0 1-5.24 30.67a4 4 0 1 0 7.54 2.66A99.7 99.7 0 0 0 36 128a92 92 0 0 1 184 0a286.4 286.4 0 0 1-5.37 55.23a4 4 0 0 0 3.15 4.69a4 4 0 0 0 .78.08a4 4 0 0 0 3.92-3.23A294.3 294.3 0 0 0 228 128A100.11 100.11 0 0 0 128 28M93.6 156.09a4 4 0 0 0-4.71 3.12a155 155 0 0 1-17.66 46.64a4 4 0 0 0 6.93 4a163.1 163.1 0 0 0 18.57-49a4 4 0 0 0-3.13-4.76M128 60a69 69 0 0 0-8.5.53a4 4 0 0 0 1 7.93A63 63 0 0 1 128 68a60.07 60.07 0 0 1 60 60a256 256 0 0 1-1.95 31.5a4 4 0 0 0 3.47 4.47h.5a4 4 0 0 0 4-3.51A264 264 0 0 0 196 128a68.08 68.08 0 0 0-68-68m56.93 128.12a4 4 0 0 0-4.87 2.88c-1.49 5.78-3.21 11.58-5.1 17.23a4 4 0 1 0 7.58 2.54c2-5.83 3.73-11.81 5.27-17.77a4 4 0 0 0-2.87-4.87Z"/></svg>
						</div>

					</div>
					
					<div class="mt-2">
						<p class="font-semibold">Advanced security</p>

						<p class="text-gray-400 mt-3">Arcu egestas dolor vel iaculis in ipsum mauris. Tincidunt mattis aliquet hac quis. Id hac maecenas ac donec pharetra eget.</p>
					</div>
					
				</div>
				
			</div>
		</div>

		<!-- message from ceo -->
		<div class="h-fit px-10 mt-52">
			<div class="h-full bg-indigo-800 rounded-3xl pt-30 pb-28 pl-20 pr-56 text-gray-50">
				<p class="text-2xl font-semibold">Workcation</p>

				<p class="mt-6 text-xl font-medium">“Amet amet eget scelerisque tellus sit neque faucibus non eleifend. Integer eu praesent at a. Ornare arcu gravida natoque erat et cursus tortor consequat at. Vulputate gravida sociis enim nullam ultricies habitant malesuada lorem ac.”</p>

				<p class="mt-5 font-medium">Judith Black</p>
				<p class="font-light">CEO of tuple</p>
			</div>
		</div>

		<!-- pricing -->
		<div class="mt-40 bg-pink-600 p-10">
			<div class="flex justify-center">
				<div class="text-center w-9/12">
					<p class="text-indigo-400 text-m font-medium">Pricing</p>
					<p class="text-gray-50 mt-3 text-5xl font-medium">Pricing that grows with you</p>
					<p class="text-gray-400 mt-6 text-xl font-light">Choose an affordable plan that’s packed with the best features for engaging your audience, creating customer loyalty, and driving sales.</p>
				</div>
			</div>

			<!-- cards -->
			<div class="bg-amber-600 flex text-gray-400 text-sm mt-20">
				<!-- card1 -->
				<div class="bg-indigo-950 flex-1 border border-r-0 border-gray-600 mt-10 rounded-l-3xl px-9 py-10 flex flex-col content-between">
					<div>
						<p class="text-gray-50 text-lg font-semibold">Freelancer</p>
						<p class="mt-5">The essentials to provide your best work for clients.</p>
	
						<p class="mt-5 text-2xl"><span class="text-gray-50 text-4xl">$19</span>/month</p>
	
						<ul class="mt-5">
							<li class="mt-3">5 products</li>
							<li class="mt-3">Up to 1,000 subscribers</li>
							<li class="mt-3">Basic analytics</li>
							<li class="mt-3">48-hour support response time</li>
						</ul>
					</div>

					<div class="bg-gray-700 hover:bg-gray-600 w-full text-center py-3 rounded-lg mt-16">
						<a class="text-gray-50" href="#">Buy plan</a>
					</div>
				</div>

				<!-- card2 -->
				<div class="bg-indigo-950 flex-1 border border-gray-600 rounded-t-3xl px-9 py-10 flex flex-col content-between">
					<div>
						<p class="text-indigo-600 text-lg font-semibold">Startup</p>
						<p class="mt-5">A plan that scales with your rapidly growing business.</p>
	
						<p class="mt-5 text-2xl"><span class="text-gray-50 text-4xl">$49</span>/month</p>
	
						<ul class="mt-5">
							<li class="mt-3">25 products</li>
							<li class="mt-3">Up to 10,000 subscribers</li>
							<li class="mt-3">Advanced analytics</li>
							<li class="mt-3">24-hour support response time</li>
							<li class="mt-3">Marketing automations</li>
						</ul>
					</div>

					<div class="bg-indigo-600 hover:bg-indigo-400 w-full text-center py-3 rounded-lg mt-16">
						<a class="text-gray-50" href="#">Buy plan</a>
					</div>
				</div>

				<!-- card3 -->
				<div class="bg-indigo-950 flex-1 border border-l-0 border-gray-600 mt-10 rounded-r-3xl px-9 py-10 flex flex-col content-between">
					<div>
						<p class="text-gray-50 text-lg font-semibold">Enterprise</p>
						<p class="mt-5">Dedicated support and infrastructure for your company.</p>
	
						<p class="mt-5 text-2xl"><span class="text-gray-50 text-4xl">$99</span>/month</p>
	
						<ul class="mt-5">
							<li class="mt-3">Unlimited products</li>
							<li class="mt-3">Unlimited subscribers</li>
							<li class="mt-3">Advanced analytics</li>
							<li class="mt-3">1-hour, dedicated support response time</li>
							<li class="mt-3">Marketing automations</li>
						</ul>
					</div>

					<div class="bg-gray-700 hover:bg-gray-600 w-full text-center py-3 rounded-lg mt-16">
						<a class="text-gray-50" href="#">Buy plan</a>
					</div>
				</div>

				
			</div>
		</div>

		<!-- faq -->
		<div class="mt-32 text-gray-50 px-7">
			<!-- label -->
			<p class="text-5xl font-medium">Frequently asked questions</p>

			<!-- qa -->
			<div class="mt-20">
				<!-- per faq first child-->
				<div class="flex content-between">
					<!-- question -->
					<div class="flex-2/5">
						<p class="font-semibold">What's the best thing about Switzerland?</p>
					</div>

					<!-- answer -->
					<div class="flex-3/5">
						<p class="font-extralight text-gray-400">I don't know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</p>
					</div>

				</div>

				<!-- per faq succeding children (with margin)-->
				<div class="flex content-between border-t border-gray-500 mt-8 pt-8">
					<!-- question -->
					<div class="flex-2/5">
						<p class="font-semibold">How do you make holy water?</p>
					</div>

					<!-- answer -->
					<div class="flex-3/5">
						<p class="font-extralight text-gray-400">You boil the hell out of it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam aut tempora vitae odio inventore fuga aliquam nostrum quod porro. Delectus quia facere id sequi expedita natus.</p>
					</div>

				</div>

				<div class="flex content-between border-t border-gray-500 mt-8 pt-8">
					<!-- question -->
					<div class="flex-2/5">
						<p class="font-semibold">What do you call someone with no body and no nose?</p>
					</div>

					<!-- answer -->
					<div class="flex-3/5">
						<p class="font-extralight text-gray-400">Nobody knows. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, voluptas ipsa quia excepturi, quibusdam natus exercitationem sapiente tempore labore voluptatem.</p>
					</div>

				</div>

				<div class="flex content-between border-t border-gray-500 mt-8 pt-8">
					<!-- question -->
					<div class="flex-2/5">
						<p class="font-semibold">Why do you never see elephants hiding in trees?</p>
					</div>

					<!-- answer -->
					<div class="flex-3/5">
						<p class="font-extralight text-gray-400">Because they're so good at it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</p>
					</div>

				</div>
			</div>
		</div>

		<!-- start app -->
		<div class="h-screen flex content-center items-center text-center px-40">
			<div class="">
				<div>
					<p class="text-gray-50 text-5xl font-medium">Boost your productivity. Start using our app today.</p>
				</div>

				<div class="mt-6">
					<p class="text-gray-500">Incididunt sint fugiat pariatur cupidatat consectetur sit cillum anim id veniam aliqua proident excepteur commodo do ea.</p>
				</div>

				<div class="mt-10 flex justify-center gap-5">
					<div>
						<a href="#" class="text-gray-50 bg-indigo-500 hover:bg-indigo-400 px-3 py-3 rounded-md">Get started</a>
					</div>
					<div>
						<a href="#" class="text-gray-50">Learn more →</a>
					</div>
				</div>
			</div>
		</div>

		<!-- footer -->
		<div class="px-10">
			<div class="flex justify-between border-t border-gray-800 py-30">
				<!-- left pane -->
				<div class="text-indigo-700 h-20 w-20">
					<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"><path fill="currentColor" d="M12 6c-2.67 0-4.33 1.33-5 4c1-1.33 2.17-1.83 3.5-1.5c.76.19 1.31.74 1.91 1.35c.98 1 2.09 2.15 4.59 2.15c2.67 0 4.33-1.33 5-4c-1 1.33-2.17 1.83-3.5 1.5c-.76-.19-1.3-.74-1.91-1.35C15.61 7.15 14.5 6 12 6m-5 6c-2.67 0-4.33 1.33-5 4c1-1.33 2.17-1.83 3.5-1.5c.76.19 1.3.74 1.91 1.35C8.39 16.85 9.5 18 12 18c2.67 0 4.33-1.33 5-4c-1 1.33-2.17 1.83-3.5 1.5c-.76-.19-1.3-.74-1.91-1.35C10.61 13.15 9.5 12 7 12"/></svg>
				</div>

				<!-- right pane -->
				<div class="text-gray-400 text-sm font-light leading-10 flex gap-16">
					<!-- per column -->
					<div>
						<p class="text-gray-50 font-medium">Solutions</p>
						<p>Hosting</p>
						<p>Data services</p>
						<p>Uptime monitoring</p>
						<p>Enterprise services</p>
						<p>Analytics</p>				
					</div>

					<div>
						<p class="text-gray-50 font-medium">Support</p>
						<p>Submit ticket</p>
						<p>Documentation</p>
						<p>Guides</p>
					</div>

					<div>
						<p class="text-gray-50 font-medium">Company</p>
						<p>About</p>
						<p>Blog</p>
						<p>Jobs</p>
						<p>Press</p>
					</div>

					<div>
						<p class="text-gray-50 font-medium">Legal</p>
						<p>Terms of service</p>
						<p>Privacy policy</p>
						<p>License</p>
					</div>

				</div>
			</div>
		</div>

	</body>
</html>