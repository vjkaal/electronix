<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" href="../css/header_footer.css">
	<link rel="stylesheet" href="../css/products/products.css">
</head>

<body>

	<?php

	include '../inc/header.php';

	?>


	<div class="mainContent">

		<div class="navContainer">

			<nav class="topbar">
				<div class="t1 topChild">
					<button class="topBtn" onclick='show(1); displayItems_1("t1d",0)'>SoundBars</button>
					<button class="topBtn" onclick='show(2); displayItems_1("t2d",0)'>Headphones</button>
					<button class="topBtn" onclick='show(3); displayItems_1("t3d",0)'>Gaming Headsets</button>
					<button class="topBtn" onclick='show(4); displayItems_1("t4d",0)'>Earphones</button>
				</div>
			</nav>


			<nav class="bottombar">
				<div class="t1b btmChild">
					<button class="btmBtn" onclick='displayItems_1("t1d",0)'>200W +</button>
				</div>


				<div class="t1b btmChild">
					<button class="btmBtn" onclick='displayItems_1("t1d",1)'>100W to 200W</button>
				</div>


				<div class="t1b btmChild">
					<button class="btmBtn" onclick='displayItems_1("t1d",2)'>under 60W</button>
				</div>




				<div class="t2b btmChild">


					<div class="one">

						<div class="t2b1">
							<button class="btmBtn" onclick='displayItems_1("t2d",0); setActive("t2b1",0)'>Over ear</button>
						</div>

						<div class="t2b1">
							<button class="btmBtn" onclick='displayItems_1("t2d",2); setActive("t2b1",1)'>On ear</button>
						</div>

					</div>



					<div class="two">

						<div class="t2b2">
							<button class="btmBtn" onclick='displayItems_2("t2b1","t2d",0,2)'>Wired</button>
						</div>

						<div class="t2b2">
							<button class="btmBtn" onclick='displayItems_2("t2b1","t2d",1,3)'>Wireless</button>
						</div>

					</div>


				</div>



				<div class="t3b btmChild"></div>



				<div class="t4b btmChild">


					<div class="one">

						<div class="t4b1">
							<button class="btmBtn" onclick='displayItems_1("t4d",0)'>Wired</button>
						</div>

						<div class="t4b1">
							<button class="btmBtn" onclick='displayItems_1("t4d",1)'>Wireless</button>
						</div>

						<div class="t4b1">
							<button class="btmBtn" onclick='displayItems_1("t4d",2)'>True Wireless</button>
						</div>

						<div class="t4b1">
							<button class="btmBtn" onclick='displayItems_1("t4d",3)'>Neckbands</button>
						</div>

					</div>

				</div>

			</nav>

		</div>



		<!--
			
			
			soundbar section
	
	
		-->

		<div class="display t1d">

			<div class="individual">
				<div class="heading">
					<a href="https://www.google.com/search?q=Sony+HTG700+specs" target="_blank">Sony 3.1ch 400W Dolby Atmos Soundbar</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/soundbars/200/1.png" alt="">
				</div>

				<div class="price">
					<span>Rs. 40,000/-</span>
				</div>

				<div class="btn">
					<button>Buy Now</button>
				</div>
			</div>


			<div class="individual">
				<div class="heading">
					<a href="https://www.google.com/search?q=Yamaha+YAS209+specs" target="_blank">Yamaha 200W Soundbar with WIreless Subwoofer</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/soundbars/200/2.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 37,500/-</span>
				</div>

				<div class="btn">
					<button>Buy Now</button>
				</div>
			</div>


			<div class="individual">
				<div class="heading">
					<a href="https://www.google.com/search?q=JBL+bar+2.1+300W+specs" target="_blank">JBL 2.1 300W Dolby Digital Soundbar</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/soundbars/200/3.png" alt="">
				</div>

				<div class="price">
					<span>Rs. 27,000/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual">
				<div class="heading">
					<a href="https://www.google.com/search?q=Philips+TAB7305+specs" target="_blank">Philips 300W Dolby Digital Soundbar</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/soundbars/200/4.png" alt="">
				</div>

				<div class="price">
					<span>Rs. 18,000/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual">
				<div class="heading">
					<a href="https://www.google.com/search?q=Samsung+T450/XL+specs" target="_blank">Samsung 2.1ch 200W Dolby Digital Soundbar</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/soundbars/200/5.png" alt="">
				</div>

				<div class="price">
					<span>Rs. 18,000/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>

		</div>


		<div class="display t1d">

			<div class="individual">
				<div class="heading">
					<a href="https://www.google.com/search?q=zebronics+juke+box+9400+specs" target="_blank">Zebrnoics Dolby 5.1 Soundbar</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/soundbars/100/1.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 11,000/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual">
				<div class="heading">
					<a href="https://www.google.com/search?q=boat+aavante+1700D+specs" target="_blank">boAt AAVANTE 2.1ch 120W Dolby audio Soundbar</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/soundbars/100/2.webp" alt="">
				</div>

				<div class="price">
					<span>Rs. 8,500/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual">
				<div class="heading">
					<a href="https://www.google.com/search?q=jbl+cinema+sb231+specs" target="_blank">JBL 2.1ch 110W Dolby Digital Soundbar</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/soundbars/100/3.png" alt="">
				</div>

				<div class="price">
					<span>Rs. 8,000/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>

			<div class="individual">
				<div class="heading">
					<a href="https://www.google.com/search?q=boat+aavante+2050+specs" target="_blank">boAt AAVANTE 2.1 160W boAt Signature Soundbar </a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/soundbars/100/4.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 8,000/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>

		</div>



		<div class="display t1d">

			<div class="individual">
				<div class="heading">
					<a href="https://www.google.com/search?q=boat+aavante+1250+specs" target="_blank">boAt AAVANTE 80W 2.1ch Soundbar</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/soundbars/60/1.png" alt="">
				</div>

				<div class="price">
					<span>Rs. 5,000/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual">
				<div class="heading">
					<a href="https://www.google.com/search?q=boat+aavante+1190+specs" target="_blank">boAt AAVANTE 2.2ch 90W Soundbar</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/soundbars/60/2.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 4,500/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual">
				<div class="heading">
					<a href="https://www.google.com/search?q=boat+aavante+1160+specs" target="_blank">boAt AAVANTE 2.0ch 60W Soundbar</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/soundbars/60/3.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 3,200/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual">
				<div class="heading">
					<a href="https://www.google.com/search?q=jbl+cinema+sb231+specs" target="_blank">Portronics Sound Pro III Soundbar</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/soundbars/60/4.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 1,600/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>

		</div>



		<!--
			
		
			headphones over-ear
	
	
		-->




		<div class="display t2d">

			<div class="individual hp wired">
				<div class="heading">
					<a href="https://www.google.com/search?q=audio+technica+ATH+M60x+specs" target="_blank">Audio-Technica ATH-M60x Wired Professional Monitor</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headphones/over-ear/wired/1.png" alt="">
				</div>

				<div class="price">
					<span>Rs. 19,000/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual hp wired">
				<div class="heading">
					<a href="https://www.google.com/search?q=ath+ws550is+brd+specs" target="_blank">Audio-Technica ATH-Ws550iS BRD over-ear wired</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headphones/over-ear/wired/2.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 8,000/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual hp wired">
				<div class="heading">
					<a href="https://www.google.com/search?q=senheisser+hd+400s+specs" target="_blank">Sennheiser HD 400S over-ear Headphone with Mic</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headphones/over-ear/wired/3.png" alt="">
				</div>

				<div class="price">
					<span>Rs. 4,500/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual hp wired">
				<div class="heading">
					<a href="https://www.google.com/search?q=sony+MDR+XB450AP+specs" target="_blank">Sony MDR-XB450AP Headphone (Red)</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headphones/over-ear/wired/4.png" alt="">
				</div>

				<div class="price">
					<span>Rs. 2,200/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual hp wired">
				<div class="heading">
					<a href="https://www.google.com/search?q=sony+mdr+zx110+specs" target="_blank">Sony MDR-ZX110 Stereo Headphone (White)</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headphones/over-ear/wired/5.png" alt="">
				</div>

				<div class="price">
					<span>Rs. 1,100/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual hp wired">
				<div class="heading">
					<a href="https://www.google.com/search?q=ubon+ghp+1280+specs" target="_blank">Ubon GHP-1280 Wired Heaphones</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headphones/over-ear/wired/6.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 600/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>

		</div>





		<div class="display t2d">

			<div class="individual hp wireless">
				<div class="heading">
					<a href="https://www.google.com/search?q=skullcandy+crusher+anc+bluetooth+specs" target="_blank">Skullcandy Crusher ANC over-ear Bluetooth Headphones</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headphones/over-ear/wireless/1.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 19,500/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual hp wireless">
				<div class="heading">
					<a href="https://www.google.com/search?q=sennheiser+4.50+btnc+specs" target="_blank">Sennheiser HD 4.50 BTNC over-ear Wireless Headset (Black)</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headphones/over-ear/wireless/2.jpeg" alt="">
				</div>

				<div class="price">
					<span>Rs. 10,000/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual hp wireless">
				<div class="heading">
					<a href="https://www.google.com/search?q=jbl+live+500bt+specs" target="_blank">JBL Live 500BT Bluetooth over-ear Headphone with Mic</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headphones/over-ear/wireless/3.webp" alt="">
				</div>

				<div class="price">
					<span>Rs. 6,000/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual hp wireless">
				<div class="heading">
					<a href="https://www.google.com/search?q=boltt+fire+blast+1400+specs" target="_blank">Boltt Fire Blast 1400 over-ear Premium Headphone (Black)</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headphones/over-ear/wireless/4.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 3,000/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual hp wireless">
				<div class="heading">
					<a href="https://www.google.com/search?q=boat+rockerz+560T+specs" target="_blank">boAt Rockerz 560T wireless Headphone with 15H Playback</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headphones/over-ear/wireless/5.webp" alt="">
				</div>

				<div class="price">
					<span>Rs. 1,500/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual hp wireless">
				<div class="heading">
					<a href="https://www.google.com/search?q=zebronics+thunder+bluetooth+headphone+specs" target="_blank">Zebronics Thunder Bluetooth over-ear Headphone (Black)</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headphones/over-ear/wireless/6.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 700/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>

		</div>





		<!--
			
		
			headphones on-ear
		
		
		-->


		<div class="display t2d">

			<div class="individual hp wired">
				<div class="heading">
					<a href="https://www.google.com/search?q=audio+technica+ath+sr5+specs" target="_blank">Audio-Technica ATH-SR5 on-ear wired Headphones</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headphones/on-ear/wired/1.png" alt="">
				</div>

				<div class="price">
					<span>Rs. 12,000/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual hp wireless">
				<div class="heading">
					<a href="https://www.google.com/search?q=audio+technica+ath+ar1is+specs" target="_blank">Audio-Technica ATH-AR1IS BK on-ear Headphones with Mic</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headphones/on-ear/wired/2.png" alt="">
				</div>

				<div class="price">
					<span>Rs. 5,300/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual hp wireless">
				<div class="heading">
					<a href="https://www.google.com/search?q=sennheiser+hd+2.30i+specs" target="_blank">Sennheiser HD 2.30i on-ear wired Headset</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headphones/on-ear/wired/3.webp" alt="">
				</div>

				<div class="price">
					<span>Rs. 4,000/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual hp wireless">
				<div class="heading">
					<a href="https://www.google.com/search?q=jbl+t500+specs" target="_blank">JBL T500 Powerfull Bass on-ear Headphones with Mic</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headphones/on-ear/wired/4.webp" alt="">
				</div>

				<div class="price">
					<span>Rs. 2,000/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual hp wireless">
				<div class="heading">
					<a href="https://www.google.com/search?q=sony+mdr+zx110+specs" target="_blank">Sony MDR-ZX110 on-ear Headphones</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headphones/on-ear/wired/5.png" alt="">
				</div>

				<div class="price">
					<span>Rs. 1,000/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual hp wireless">
				<div class="heading">
					<a href="https://www.google.com/search?q=boat+bassheads+900t+specs" target="_blank">boAt BassHeads 900T Wired Headsets</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headphones/on-ear/wired/6.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 700/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>

		</div>





		<div class="display t2d">

			<div class="individual hp wireless">
				<div class="heading">
					<a href="https://www.google.com/search?q=beats+mrj62zm/a+specs" target="_blank">Beats by Dr.Dre Solo Pro MRJ62ZM/A Noise Cancelling on-ear wireless headphones</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headphones/on-ear/wireless/1.webp" alt="">
				</div>

				<div class="price">
					<span>Rs. 25,000/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual hp wireless">
				<div class="heading">
					<a href="https://www.google.com/search?q=marshall+major+3+voice+specs" target="_blank">Marshall Major III Voice Wireless Bluetooth on-ear Headphones</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headphones/on-ear/wireless/2.jpeg" alt="">
				</div>

				<div class="price">
					<span>Rs. 13,000/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual hp wireless">
				<div class="heading">
					<a href="https://www.google.com/search?q=jbl+live+500bt+specs" target="_blank">JBL Live 500BT on-ear Bluetooth Headphone with Mic</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headphones/on-ear/wireless/3.webp" alt="">
				</div>

				<div class="price">
					<span>Rs. 7,500/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual hp wireless">
				<div class="heading">
					<a href="https://www.google.com/search?q=skullcandy+s5gbw+j539+grind+specs" target="_blank">Skullcandy S5GBW-J539 Grind Bluetooth Headphones</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headphones/on-ear/wireless/4.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 5,000/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual hp wireless">
				<div class="heading">
					<a href="https://www.google.com/search?q=boAt+rockerz+410T+specs" target="_blank">boAt Rockerz 410T wireless Headphones</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headphones/on-ear/wireless/5.webp" alt="">
				</div>

				<div class="price">
					<span>Rs. 1,500/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual hp wireless">
				<div class="heading">
					<a href="https://www.google.com/search?q=zebronics+zeb+duke+bluetooth+headphone+specs" target="_blank">Zebronics Zeb-duke 101 Wireless on-ear Bluetooth Headphones</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headphones/on-ear/wireless/6.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 900/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>

		</div>




		<!--
			
		
			gaming headsets
	
	
		-->


		<div class="display t3d">

			<div class="individual hs">
				<div class="heading">
					<a href="https://www.google.com/search?q=razer+tiamat+2.2+V2+specs" target="_blank">Razer Tiamat 2.2 V2 over-ear Gaming Headset</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headsets/1.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 8,500/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual hs">
				<div class="heading">
					<a href="https://www.google.com/search?q=razer+rz04+02830100+r3u1+specs" target="_blank">Razer RZ04-02830100-R3U1 Kraken Pro V2 Analog Gaming Headset</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headsets/2.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 5,000/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual hs">
				<div class="heading">
					<a href="https://www.google.com/search?q=hyperx+hx+hs5cx+sr+specs" target="_blank">HyperX HX-HS5CX-SR Cloud X Pro over-ear Gaming Headset</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headsets/3.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 3,900/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual hs">
				<div class="heading">
					<a href="https://www.google.com/search?q=razer+rz04+=2830200+r3m1+specs" target="_blank">Razer RZ04-O2830200-R3M1 over-ear wired Gaming Headset</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headsets/4.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 3,000/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual hs">
				<div class="heading">
					<a href="https://www.google.com/search?q=hyperx+hx+hscsc+specs" target="_blank">HyperX HX-HSCSC-BK cloud Stinger Core over-ear Headphones</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headsets/5.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 1,800/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual hs">
				<div class="heading">
					<a href="https://www.google.com/search?q=cosmic+byte+g4000+headphone+specs" target="_blank">Cosmic Byte G4000 over-ear Headphones with Mic</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/headsets/6.webp" alt="">
				</div>

				<div class="price">
					<span>Rs. 1,000/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>

		</div>



		<!--
			
			
			earphones here
	
	
		-->



		<!--
			
		
			wired here
	
	
		-->

		<div class="display t4d">


			<div class="individual ep">
				<div class="heading">
					<a href="https://www.google.com/search?q=sony+mdr+ex155ap+specs" target="_blank">Sony MDR-EX155AP Wired Earphones</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/earphones/wired/1.webp" alt="">
				</div>

				<div class="price">
					<span>Rs. 1,100/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual ep">
				<div class="heading">
					<a href="https://www.google.com/search?q=sony+mdr+ex155ap+specs" target="_blank">Sony MDR-EX155AP Wired Earphones</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/earphones/wired/1.webp" alt="">
				</div>

				<div class="price">
					<span>Rs. 1,100/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual ep">
				<div class="heading">
					<a href="https://www.google.com/search?q=sony+mdr+ex155ap+specs" target="_blank">Sony MDR-EX155AP Wired Earphones</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/earphones/wired/1.webp" alt="">
				</div>

				<div class="price">
					<span>Rs. 1,100/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual ep">
				<div class="heading">
					<a href="https://www.google.com/search?q=sony+mdr+ex155ap+specs" target="_blank">Sony MDR-EX155AP Wired Earphones</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/earphones/wired/1.webp" alt="">
				</div>

				<div class="price">
					<span>Rs. 1,100/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual ep">
				<div class="heading">
					<a href="https://www.google.com/search?q=sony+mdr+ex155ap+specs" target="_blank">Sony MDR-EX155AP Wired Earphones</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/earphones/wired/1.webp" alt="">
				</div>

				<div class="price">
					<span>Rs. 1,100/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>






		</div>



		<!--
			
		
			wireless here
	
	
		-->

		<div class="display t4d">


			<div class="individual ep">
				<div class="heading">
					<a href="https://www.google.com/search?q=jbl+t110bt+specs" target="_blank">JBL Tune T110BT Bluetooth earphone with Mic</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/earphones/wireless/1.webp" alt="">
				</div>

				<div class="price">
					<span>Rs. 1,300/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual ep">
				<div class="heading">
					<a href="https://www.google.com/search?q=jbl+t110bt+specs" target="_blank">JBL Tune T110BT Bluetooth earphone with Mic</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/earphones/wireless/1.webp" alt="">
				</div>

				<div class="price">
					<span>Rs. 1,300/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual ep">
				<div class="heading">
					<a href="https://www.google.com/search?q=jbl+t110bt+specs" target="_blank">JBL Tune T110BT Bluetooth earphone with Mic</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/earphones/wireless/1.webp" alt="">
				</div>

				<div class="price">
					<span>Rs. 1,300/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual ep">
				<div class="heading">
					<a href="https://www.google.com/search?q=jbl+t110bt+specs" target="_blank">JBL Tune T110BT Bluetooth earphone with Mic</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/earphones/wireless/1.webp" alt="">
				</div>

				<div class="price">
					<span>Rs. 1,300/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>

		</div>



		<!--
			
			
			True Wireless here
	
		
		-->

		<div class="display t4d">


			<div class="individual ep">
				<div class="heading">
					<a href="https://www.google.com/search?q=boat+airdopes+131t+tws+specs" target="_blank">boAt Airdopes 131T TWS Earbuds</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/earphones/earpodes/1.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 1,200/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual ep">
				<div class="heading">
					<a href="https://www.google.com/search?q=boat+airdopes+131t+tws+specs" target="_blank">boAt Airdopes 131T TWS Earbuds</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/earphones/earpodes/1.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 1,200/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual ep">
				<div class="heading">
					<a href="https://www.google.com/search?q=boat+airdopes+131t+tws+specs" target="_blank">boAt Airdopes 131T TWS Earbuds</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/earphones/earpodes/1.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 1,200/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual ep">
				<div class="heading">
					<a href="https://www.google.com/search?q=boat+airdopes+131t+tws+specs" target="_blank">boAt Airdopes 131T TWS Earbuds</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/earphones/earpodes/1.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 1,200/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual ep">
				<div class="heading">
					<a href="https://www.google.com/search?q=boat+airdopes+131t+tws+specs" target="_blank">boAt Airdopes 131T TWS Earbuds</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/earphones/earpodes/1.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 1,200/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


		</div>


		<!--
			
		
			neckbands here
	
	
		-->

		<div class="display t4d">


			<div class="individual ep">
				<div class="heading">
					<a href="https://www.google.com/search?q=boat+rockerz+255+pro+T+specs" target="_blank">boAt Rockerz 255 Pro T Wireless earphones</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/earphones/neckbands/1.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 1,100/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual ep">
				<div class="heading">
					<a href="https://www.google.com/search?q=boat+rockerz+255+pro+T+specs" target="_blank">boAt Rockerz 255 Pro T Wireless earphones</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/earphones/neckbands/1.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 1,100/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual ep">
				<div class="heading">
					<a href="https://www.google.com/search?q=boat+rockerz+255+pro+T+specs" target="_blank">boAt Rockerz 255 Pro T Wireless earphones</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/earphones/neckbands/1.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 1,100/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual ep">
				<div class="heading">
					<a href="https://www.google.com/search?q=boat+rockerz+255+pro+T+specs" target="_blank">boAt Rockerz 255 Pro T Wireless earphones</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/earphones/neckbands/1.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 1,100/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>


			<div class="individual ep">
				<div class="heading">
					<a href="https://www.google.com/search?q=boat+rockerz+255+pro+T+specs" target="_blank">boAt Rockerz 255 Pro T Wireless earphones</a>
				</div>

				<div class="img">
					<img src="../res/img/speakers/earphones/neckbands/1.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 1,100/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			</div>



		</div>

	</div>



</body>


<script src="../js/headerFile.js"></script>
<script src="../js/products.js"></script>

</html>