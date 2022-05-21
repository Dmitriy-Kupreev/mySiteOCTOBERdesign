<html>
	<head>
		<title>Форма заявки с сайта</title>
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<!-- Bootstrap JS + Popper JS -->
		<script defer src="js/bootstrap.bundle.min.js"></script>

		<style>
			a {
				color: aliceblue;
				font-weight: 100;
				text-decoration: none;
			}

			a:hover {
				color: rgb(27, 4, 253);
				font-style: italic;
			}
			/* @import url(//fonts.googleapis.com/css?family=Lato:300:400); */

			body {
				margin: 0;
			}

			/* h1 {
				font-family: "Lato", sans-serif;
				font-weight: 300;
				letter-spacing: 2px;
				font-size: 48px;
			}
			p {
				font-family: "Lato", sans-serif;
				letter-spacing: 1px;
				font-size: 14px;
				color: #333333;
			} */

			.header {
				position: relative;
				text-align: center;
				background: linear-gradient(60deg, rgba(6, 0, 101, 1) 0%, rgba(248, 77, 33, 1) 100%);
				color: white;
			}
			.logo {
				width: 50px;
				fill: white;
				padding-right: 15px;
				display: inline-block;
				vertical-align: middle;
			}

			.inner-header {
				height: 65vh;
				width: 100%;
				margin: 0;
				padding: 0;
			}

			.flex {
				/*Flexbox for containers*/
				display: flex;
				justify-content: center;
				align-items: center;
				text-align: center;
			}

			.waves {
				position: relative;
				width: 100%;
				height: 15vh;
				margin-bottom: -7px; /*Fix for safari gap*/
				min-height: 100px;
				max-height: 150px;
			}

			.content {
				position: relative;
				height: 20vh;
				text-align: center;
				background-color: white;
			}

			/* Animation */

			.parallax > use {
				animation: move-forever 25s cubic-bezier(0.55, 0.5, 0.45, 0.5) infinite;
			}
			.parallax > use:nth-child(1) {
				animation-delay: -2s;
				animation-duration: 7s;
			}
			.parallax > use:nth-child(2) {
				animation-delay: -3s;
				animation-duration: 10s;
			}
			.parallax > use:nth-child(3) {
				animation-delay: -4s;
				animation-duration: 13s;
			}
			.parallax > use:nth-child(4) {
				animation-delay: -5s;
				animation-duration: 20s;
			}
			@keyframes move-forever {
				0% {
					transform: translate3d(-90px, 0, 0);
				}
				100% {
					transform: translate3d(85px, 0, 0);
				}
			}
			/*Shrinking for mobile*/
			@media (max-width: 768px) {
				.waves {
					height: 40px;
					min-height: 40px;
				}
				.content {
					height: 30vh;
				}
				h1 {
					font-size: 24px;
				}
			}
		</style>
	</head>
	<body>

	
		<!-- <div>
			Москва, ул. Кременчугская, д.7/2, оф.322 /// 8 (926) 457-8019 ///
			<a
				data-bs-toggle="offcanvas"
				href="#offcanvasExample"
				role="button"
				aria-controls="offcanvasExample"
			>
				info<span class="style1">@</span>octoberdesign.ru
			</a>
		</div> -->

		<div class="header">
			<!--Content before waves-->
			<div class="inner-header flex">
				<!--Just the logo.. Don't mind this-->
				<svg
					version="1.1"
					class="logo"
					baseProfile="tiny"
					id="Layer_1"
					xmlns="http://www.w3.org/2000/svg"
					xmlns:xlink="http://www.w3.org/1999/xlink"
					x="0px"
					y="0px"
					viewBox="0 0 500 500"
					xml:space="preserve"
				>
					<path
						fill="#FFFFFF"
						stroke="#000000"
						stroke-width="10"
						stroke-miterlimit="10"
						d="M57,283"
					/>
					<!-- <g>
						<path
							fill="#fff"
							d="M250.4,0.8C112.7,0.8,1,112.4,1,250.2c0,137.7,111.7,249.4,249.4,249.4c137.7,0,249.4-111.7,249.4-249.4
							C499.8,112.4,388.1,0.8,250.4,0.8z M383.8,326.3c-62,0-101.4-14.1-117.6-46.3c-17.1-34.1-2.3-75.4,13.2-104.1
							c-22.4,3-38.4,9.2-47.8,18.3c-11.2,10.9-13.6,26.7-16.3,45c-3.1,20.8-6.6,44.4-25.3,62.4c-19.8,19.1-51.6,26.9-100.2,24.6l1.8-39.7    c35.9,1.6,59.7-2.9,70.8-13.6c8.9-8.6,11.1-22.9,13.5-39.6c6.3-42,14.8-99.4,141.4-99.4h41L333,166c-12.6,16-45.4,68.2-31.2,96.2  c9.2,18.3,41.5,25.6,91.2,24.2l1.1,39.8C390.5,326.2,387.1,326.3,383.8,326.3z"
						/>
					</g> -->
				</svg>
				<h1>
					<a
					
						href="javascript:close();"

					>
					&rarr;&nbsp;Сообщение успешно отправлено,&nbsp;домой?!
					</a>
					<marquee
						style="font-size: 1rem; font-weight: 100"
						scrollamount="1"
						scrolldelay="20"
						width="20"
						height="22"
						behavior="scroll"
						direction="left"
						>Быт. 1:2 и Дух Божий ношашеся верху воды...</marquee
					>
				</h1>
			</div>

			<!--Waves Container-->
			<div>
				<svg
					class="waves"
					xmlns="http://www.w3.org/2000/svg"
					xmlns:xlink="http://www.w3.org/1999/xlink"
					viewBox="0 24 150 28"
					preserveAspectRatio="none"
					shape-rendering="auto"
				>
					<defs>
						<path
							id="gentle-wave"
							d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"
						/>
					</defs>
					<g class="parallax">
						<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
						<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
						<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
						<use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
					</g>
				</svg>
			</div>
			<!--Waves end-->
		</div>

		<div
			class="offcanvas offcanvas-start"
			tabindex="-1"
			id="offcanvasExample"
			aria-labelledby="offcanvasExampleLabel"
		>
			<div class="offcanvas-header">
				<h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5>
				<button
					type="button"
					class="btn-close text-reset"
					data-bs-dismiss="offcanvas"
					aria-label="Закрыть"
				></button>
			</div>
			<div class="offcanvas-body">
				<div>
					<form action="send.php" method="post">
						<div class="mb-0">
							<label for="exampleInputEmail1" class="form-label">Представьтесь, пожалуйста!</label>
						</div>

						<input
							type="text"
							class="form-control"
							id="exampleInputEmail1"
							aria-describedby="emailHelp"
							name="fio"
							required
						/>

						<div id="emailHelp" class="form-text mb-3">мы должны знать, как к Вам обращаться:)</div>

						<div class="mb-0">
							<label for="exampleInputPassword1" class="form-label">Ваш e-mail или телефон</label>
						</div>

						<input type="email" class="form-control" id="exampleInputPassword1" name="email" />

						<div id="emailHelp" class="form-text mb-3">мы Вам перезвоним или ответим по e-mail</div>

						<div class="mb-0">
							<label for="exampleFormControlTextarea1" class="form-label">Ваше сообщение</label>
						</div>

						<textarea
							name="message"
							cols="50"
							rows="7"
							class="form-control mb-2"
							id="exampleFormControlTextarea1"
						>
						</textarea>

						<div class="g-recaptcha mb-3" data-sitekey="6Ld3swIgAAAAABcTPWZ26vsPNQkEUXS7qFKGvf-g"></div>

						<input class="btn btn-secondary" type="submit" value="Отправить" />

						<!-- <button type="submit" class="btn btn-primary">Отправить</button> -->
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
