<?php
		session_start();

	

	if (isset($_POST['email']))
	{
	//Udana walidacja//
		$wszystko_ok = true;
	//Poprawność name'a
		$name = $_POST['name'];
	//sprawdzenie długośći//
		if ((strlen($name)<3) || (strlen($name)>30))
		{
			$wszystko_ok=false; 
			$_SESSION['e_name']="Pole Imię musi zawierać od 3 do 30 znaków";
		}
	//sprawdzenie maila//
		$email = $_POST['email'];
		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
		if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
		{
			$wszystko_ok=false; 
			$_SESSION['e_email'] = "Podaj poprawny adres email";
		}

	//sprawdzenie wiadomośći
		$msg= $_POST['message'];

		if ((strlen($msg)>750))
		{
			$wszystko_ok=false; 
			$_SESSION['e_msg']="Maksymalna długość wiadomośći to 750 znaków";
		} 
	//Bot or not?
		$secret="6LeXzskZAAAAALFCHgZiEkEWLcR7i9gSn5iTdD6E";
		$check = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
		$odpowiedz = json_decode($check);
		if ($odpowiedz->success==false)
			{
				$wszystko_ok=false; 
				$_SESSION['e_captcha'] = "Potwierdź, że nie jesteś botem!";
			}
		
		

		if ($wszystko_ok==true)
		{
			//Wysyłanie maila
			$to = 'kontakt@kubarudzinski.pl';
			$subject = 'Nowe zapytanie ofertowe od '.$name.' ('.$emailB.')';
			$headers .= "Content-Type: text/html; charset-utf-8";
			
		}

	}

	
?>
<!DOCTYPE HTML>
<html lang="pl">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177901004-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-177901004-1');
	</script>

	<meta charset="utf-8" />
	<title>Kuba Rudziński</title>
	<meta name="description" content="Profesjonalne tworzenie witryn internetowych od a do z. Nie czekaj dłużej. Bądź widoczny w sieci, bądź widoczny wszędzie" />
	<meta name="keywords" content="webdeveloper, html, js, javascript, css, php, seo, tworzenie stron internetowych, wizytówka, strona firmowa, tania strona" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="fontello/css/fontello.css" type="text/css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"> 
	<link rel="icon" href="img/favicon.png" type = "image/x-icon"> 
	

	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script src="jquery.scrollTo.min.js"></script>
	<script>
		jQuery(function($)
		{
			//zresetuj scrolla
			//$.scrollTo(0);
			$('#1').click(function() { $.scrollTo($('#omnie'), 1000); });
			$('#2').click(function() { $.scrollTo($('#oferta'), 1500); });
			$('#3').click(function() { $.scrollTo($('#doswiadczenie'), 2000); });
			$('#4').click(function() { $.scrollTo($('#kontakt'), 2500); });
			$('#5').click(function() { $.scrollTo($('#omnie'), 1000); });
			$('#6').click(function() { $.scrollTo($('#oferta'), 1500); });
			$('#7').click(function() { $.scrollTo($('#doswiadczenie'), 2000); });
			$('#8').click(function() { $.scrollTo($('#kontakt'), 2500); });
			$('.4').click(function() { $.scrollTo($('#kontakt'), 2500); });

			$('.scrollup').click(function() { $.scrollTo($('body'), 1500); });

		}
		);

			//pokaż podczas przewijania
			$(window).scroll(function()
			{
				if($(this).scrollTop()>300) $('.scrollup').fadeIn();
				else $('.scrollup').fadeOut();
			}


				);
	</script>




</head>
<body>

<!-- radial czyli tło pierwszego widoku-->
<div class="radial">

	
			<div>
				<a href="#" class="scrollup"></a>
			</div>

			<div class="lefttop" style="width:33%; height:180px;">
				<div id="imglogo">
					<a href="zatrudnij-programiste-webowego">
						<img src="img/check.svg" alt="kubarudzinski logo" class="logo"/>
					</a>
					<div id="logo">
						<a href="zatrudnij-programiste-webowego" class="linklogo">Kuba Rudziński</a>
					</div>
				</div>
			</div>
			<div class="mobile">	
				<div id="imglogo">
					<a href="zatrudnij-programiste-webowego" class="logo">
						<img src="img/check.svg" alt="kubarudzinski logo" class="logo"/>
					</a>
					<div id="logo">
						<a href="zatrudnij-programiste-webowego" class="linklogo">Kuba Rudziński</a>
					</div>
				</div>
			</div>
	<nav>
		<div class="mobile">
			<button class="hamburger">
				<span class="hamburger__box">
					<span class="hamburger__inner"></span>
				</span>
			</button>
			<div class="navigation">
				<ul class="navigation__list">
					<a href="#"><li class="navigation__item" id="1">O mnie</li></a>
					<a href="#"><li class="navigation__item" id="2">Oferta</li></a>
					<a href="html-css-js-php-bootstrap-seo-wordpress"><li class="navigation__item">Technologie</li></a>
					<a href="#"><li class="navigation__item" id="4" >Kontakt</li></a>
				</ul>
			</div>
		</div>
		
		
			
		
		<div class="desktop">
			<div  class="bar">
				<a class="4" href="#">
					<div id="a">
						Kontakt
					</div>
				</a>
				<a id="7" href="html-css-js-php-bootstrap-seo-wordpress" class="szerokibutton">
					<div id="b">
						Technologie
					</div>
				</a>
				<a id="6" href="#">
					<div id="c">
						Oferta
					</div>
				</a>
				<a id="5" href="#">
					<div id="d">
						O mnie
					</div>
				</a>
				<div style="clear:both;"></div>
				<br/><br/>
					
			</div>
		</div>
			<br/><br/><br/><br/><br/>
	</nav>

	<div class="slidecontainer">

	    <div id="slajd1">
	    	Kuba Rudziński - Webdeveloper
	    	<br/><br/>
	    	Mój <span style="color:#ff7300;">cel</span> to Twoje <span style="color:#ff7300;">wyniki</span>
	    </div>
	</div>
	
</div>
<section>
	<div id="oferta">
			<br><br>
		<h2><span style="color:#ff7300;">Po co mi strona?</span></h2>
			<article>
				<h4>Ile razy szukałeś informacji o jakiejś firmie w internecie? A ile razy gdzie indziej? Dzisiaj gdzie indziej nie istnieje.</h4>
				<h4>Każdego miesiąca około <a id="aoferta" href="http://pbi.org.pl/raporty/" target="_blank">27 milionów Polaków</a> korzysta z internetu.<br>  <a class="4" href="#"><span style="color:#ff7300;">Skontaktuj się ze mną</span></a> i daj się znaleźć.<br> Internet jest wszędzie. Ty też tam bądź.</h4>
			</article>
				<br><br>
		<h2>Co oferuję?</h2><br>
			<article>
				<h4><span style="color:#ff7300;">Profesjonalne wykonanie strony internetowej</span> od a do z.</h4><br> <p>Każdego klienta traktuję indywidualnie, dlatego możesz mieć pewność, że Twoja strona będzie oryginalna. Nie piszę kolejnych linijek kodu na wyścigi, dla mnie najważniejsza jest jakość. Dla Twoich klientów też, stąd gwarancja iż witryna spełnia wszystkie wymogi narzucane przez Google'a oraz jest zgodna ze standardami W3C.<br> Jeżeli to Twoja pierwsza strona, pomogę Ci wybrać hosting dopasowany do potrzeb i rozwieję wszystkie ewentualne wątpliwości dotyczące obsługi tychże.</p>
			</article>
				<br><br>
		<h2>Co później?</h2>
			<article>
				<p>Brak wsparcia po zakończeniu projektu to najczęściej wymieniana obawa młodych przedsiębiorców. Koniec procesu tworzenia strony nie powinien być końcem naszej współpracy.</p>
				 <h4><span style="color:#ff7300;">Sukces</span> nigdy nie jest ostateczny.</h4>
				 <p>Tworzenie własnej firmy to nie sprint, zadowolenie i zaufanie klientów powinno być filarem każdego przedsięwzięcia. Jedyny sposób żeby je zdobyć to ciężka i systematyczna praca. <br>Zdając sobie z tego sprawę daję Ci <span style="color:#ff7300;">gwarancję</span> wsparcia po zrealizowaniu zamówienia.</p>
			</article>



	</div>
</section>
<section>
	<div id="omnie">
		<h3><span style="color:#ff7300;">O mnie</span>, słów kilka</h3>
					<ol>
					
						<li><div class="slim1"><b>Programista</b></div>
							
							<ul>
								<li><div id="wezej">
									<span style="color:#ff7300;font-weight: 900;">Pasja.</span> Programowanie to coś co mnie kształtuje, co daje niesamowitą satysfakcję, to
									dziedzina o nieograniczonych możliwościach rozwoju. Współpracę z drugim człowiekiem 
									zawsze traktuję poważnie, a pomoc w rozwijaniu Twojego pomysłu 	przynosi mi poczucie samorealizacji.
									</div>
								</li>
							</ul>
						</li>
						<li><div class="slim1"><b>Technik budownictwa</b></div>
							
							<ul>
								<li><div id="wezej">
									Choć to mój wyuczony zawód to nie naprawiam domów ani autostrad. Z pomocą Alana Wattsa,
									Kurta Vonneguta, Hermana Hessego i wielu innych buduję lepszy świat dla moich dzieci. Świat, w którym <span style="color:#ff7300;font-weight: 900;">pomoc drugiemu człowiekowi</span> jest celem, a nie środkiem.
									</div>
								</li>
							</ul>
						</li>	
						<li><div class="slim1"><b>Podróżnik</b></div>							
							<ul>
								<li><div id="szerzej">
									Malta, Maroko, Anglia, Włochy, to nie państwa które zobaczyłem przejazdem lub z hotelowych okien.
									To miejsca, które przez pewien czas nazywałem swoim domem. To nowi ludzie i ich pomysły na życie, czasem podobne 
									do naszych, innym razem diametralnie różne. Obcowanie i zrozumienie tak wielu idei, oraz sposobów <span style="color:#ff7300;font-weight: 900;">czerpania korzyści</span> z życia sprawia, że mój sposób patrzenia na świat wychodzi poza standardowe ramy, niejednokrotnie prowadząc do
									nieszablonowych rozwiązań.
								</div>
								</li>
							</ul>
						</li>
					</ol>
	</div>
							<div style="clear:both;"></div>
</section>
		<!--   CONTACT  -->
	<section>
		<div id="dolstrony">
			<br/>
			<div class="mobile" id="skontaktujsie">Skontaktuj się ze mną</div>
			<div class="desktop" id="skontaktujsie2">Wyślij mi wiadomość</div>

			<div id="kontakt">
				<form method="post"><br>
					<input type="text" name="name" placeholder="Imię i nazwisko" onfocus="this.placeholder=''" onblur="this.placeholder='Imię i nazwisko'"/><br>
					<?php
						if (isset($_SESSION['e_name']))
						{
							echo '<div class="error">'.$_SESSION['e_name'].'</div>';
							unset($_SESSION['e_name']);
						}
					?>
						
					<input  type="text" name="email" placeholder="Adres e-mail" onfocus="this.placeholder=''" onblur="this.placeholder='Adres e-mail'"/><Br>
					<?php
						if (isset($_SESSION['e_email']))
						{
							echo '<div class="error">'.$_SESSION['e_email'].'</div>';
							unset($_SESSION['e_email']);
						}
					?>
					
					<textarea id="kontaktwiadomosc" rows="7" cols="38" name="message" placeholder="Treść wiadomośći" onfocus="this.placeholder=''" onblur="this.placeholder='Treść wiadomośći'"></textarea>
					<?php
						if (isset($_SESSION['e_msg']))
						{
							echo '<div class="error">'.$_SESSION['e_msg'].'</div>';
							unset($_SESSION['e_msg']);
						}
					?>
					<div class="srodek"><div class="g-recaptcha" data-sitekey="6LeXzskZAAAAAG2RRauSd7FBD_ndIKkuzVrwSU3I"></div></div>
					<?php
						if (isset($_SESSION['e_captcha']))
						{
							echo '<div class="error">'.$_SESSION['e_captcha'].'</div>';
							unset($_SESSION['e_captcha']);
						}
					?>
						<br><br>
					<input id="kontaktwyslij" type="submit" value="Wyślij">
					<?php
						if ($wszystko_ok==true)
						{
							$_SESSION['mailsended']=true;
							ob_start();
							mail($to,$subject,$msg,$headers);
							ob_end_clean();	
						}
						if(isset($_SESSION['mailsended']))
						{
							header('Location:html-css-js-php-bootstrap-seo-wordpress'); 
						}

					?>
						
				</form>
			</div>
			<div class="desktop">
				<div id="sociallinki">
						Skontaktuj się ze mną
					<article id="namiary">
						<h5>Telefon:<br> (+48) 507 534 154</h5>
						<h5>Adres e-mail: <span style=" text-shadow: 1px 1px black;">kontakt<span style="color:#ff7300">@</span>kubarudzinski.pl</span></h5>
							<br/>
						<div id=namiarycenter>Znajdź mnie również na:</div>
							<br/>
					</article>
					<div class="linkscontainer" id="fb">
						<a href="https://www.facebook.com/kubarudzinskidotpl" target="_blank"><i class="icon-facebook-rect"></i></a>
					</div>
					<div class="linkscontainer" id="instagram">
						<a href="https://www.instagram.com/kubarudzinski.pl/" target="_blank"><i class="icon-instagram"></i></a>
					</div>
					<div class="linkscontainer" id="linkedin">
						<a href="https://www.linkedin.com/in/kuba-rudzi%C5%84ski-64571618b/" target="_blank"><i class="icon-linkedin-squared"></i>
						</a>
					</div>
					<div style="clear: both;"></div>
				</div>
				<div style="clear:both"></div>
			</div>
			
			<div class="mobile">
				<div id="sociallinki">
					<article id="namiary">
						<h5>Telefon:<br> (+48) 507 534 154</h5>
						<h5>Adres e-mail: <span style=" text-shadow: 1px 1px black;">kontakt<span style="color:#ff7300">@</span>kubarudzinski.pl</span></h5>
							<br/>
						<div id=namiarycenter>Znajdź mnie również na:</div>
							<br/>
					</article>
					<div class="linkscontainer" id="fb">
						<a href="https://www.facebook.com/kubarudzinskidotpl" target="_blank"><i class="icon-facebook-rect"></i></a>
					</div>
					<div class="linkscontainer" id="instagram">
						<a href="https://www.instagram.com/kubarudzinski.pl/" target="_blank"><i class="icon-instagram"></i></a>
					</div>
					<div class="linkscontainer" id="linkedin">
						<a href="https://www.linkedin.com/in/kuba-rudzi%C5%84ski-64571618b/" target="_blank"><i class="icon-linkedin-squared"></i>
						</a>
					</div>
					<div style="clear: both;"></div>
				</div>
				<div style="clear:both"></div>
			</div>
	</div>

	</section>
	
	<footer>
		2020 &copy; Wszelkie prawa zastrzeżone. Projekt i wykonanie - Kuba Rudziński
	</footer>
	<script>
				
				const hamburger = document.querySelector('.hamburger');
				const nav = document.querySelector('.navigation');
				

				const handleClick = () => {
				hamburger.classList.toggle('hamburger--active');
				nav.classList.toggle('navigation--active');

				}
				hamburger.addEventListener('click', handleClick);
			</script>
</body>
</html>