﻿<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<title>Testa glidande meny</title>
</head>

<body>
	<div id="sitewrap">
		<div id="topwrap">
			<div id="demotop">
				<header>
					<h1>Välkommen kära gäst</h1>
				</header>
			</div> <!-- Div demotop ends here -->

			<div id="stickywrap">
				<div id="stickynav">
					<nav>
						<ul>
							<li id="current"><a href="#">Home</a></li>
							<li><a href="gone.php">Gone</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">My Rock</a></li>
						</ul>
					</nav>
				</div> <!-- Div stickynav ends here -->
			</div> <!-- Div stickywrap ends here -->
		</div> <!-- Div topwrap ends here -->

		<section>
			<h2>Här står det lite text:)</h2>

			<?php
				// Kontakten ser ut som följer nedan:
				// Server, användarnamn, lösenord, databas
				$connDB = new mysqli('localhost', 'johan', 723305, 'johan');
				//$selectDB = mysql_select_db('testdb');

				if (mysqli_connect_errno()) {
					printf("Ingen kontakt med DB!!!! %s\n", mysqli_connect_errno());
					exit();
				}

				if ($result = $connDB-> query("SELECT Name FROM tbltest")) {
					//$rows = $result->fetch_fields();
					//echo "<p>Kontakt med DB</p>";
					$row = $result->fetch_row();
					foreach ($rows as $newrows)
					//while($newrows = $rows->fetch_row()) // mysqli_fetch_field($rows))
					{
						# code...
					//}
						//$dbName = $newrows['Name'];
						printf("You're name is: %s\n", $newrows->name);
						//$result->close();
					}
					//echo "<h3>".$dbName."</p>";
					$result->close();
				}
			?>

			<article>
				<h3>En exempeltext</h3>
				<p>
					Mellan Sarek och Padjelanta. 
					Padjelanta är det höga landet som är osannolikt fantastiskt vacker och mjukt i formerna. Sarek är brutalt
					 och alpin, bäst därför att balansera på gränsen. Padjelanta ligger i Norra Lapland med Sarek i öster och
					  Sulitelma i väster. Om vi bröjar från norr så stiger Akka upp i ett fantastisk majestät och gör skäl för 
					  namnet Lapplands drottningen. Ett flertal glacierer letar sig ner från de hög massiven. Fallhöjden är 
					  stora, störst i sverige faktiskt. Om man väljer den östliga grenen av Padjelantaleden känner man tygnden 
					  från Akka massivets branter. Det är hög och imponerad, och med den stora forsen brus är detta sinnebilden 
					  av Lappland - höga berg, brusande forsar och snötäckta bergssidor. Detta är sannerlig ett Mekka för 
					  fjällälksaren, allt finns här, egentlige finns det ingen anledning att gå vidare, men de flesta gör 
					  det. Kankse är det så att dämningen av Akkajaure gör att civilsuiationen känns nära oxch påtaglig. Som 
					  fjällvandrarew vill man alltid längre in i kärnan av orörda fjällnatur. Människans ingrepp döljs dock 
					  bättre vinter tid och kan rekomenderas till den känslige naturvännen. Dämningen av Akkajaure är en, enligt 
					  många naturälskare, fruktansvärt ingrepp och lämnar en litet dålig smaken i munnen när man passerar, men 
					  berget Akka gör att allt känns bättre igen och snön och isen döljer så mycket. Med endasst en SJ macka i 
					  magen nådde jag blod socker fattig ängligen området nära Akkastugan. Jag hade kommet med eftermiddagsbussen 
					  till Ritsem, där mötte O ocg S upp, de hade varit ute på en vecko tur från Katterat. En natt var det -35 C 
					  när de vaknade i tältet. S åkte hem till jobbet och O fortsatte med mig. eftersom nätter var aningen 
					  kylslagna bestämde vi oss för att lägga turen mittemellan Sarek och Padjelanta för att kunna ha reträtt 
					  vägar till stugorna längs Padjelanta leden. Den första tält platsen blev på lämpligt avstånbd från 
					  STF-stugan. Kvällen var fint, men kallt, riporna kurrade utanför tältet och svag vind lekte i 
					  fjällbjörkarna. Akka topparna var imponerad och en dag borde vi ta oss upp dätr. På OEt kokade potatis 
					  moset och vi karvade ren bog och njöt av till varon. Med dun jackan på var det ganska behaglig, och så 
					  fanns ju alltid den varma trygg heten i sovsäcken. En bit såg vi folk i stugan, men vi längtade inte dit, 
					  det här är trotts allt bättre, i tältet och den övriga fjäll utrustningen vilar trygg heten och fram för allt friheten. Vi kan gå vart vi vill, stanna var vi vill, blir det oväder smäller vi bara upp tältet och gör läger för natten. Det finns dokk två nackdelarna med tälning, pjäxorna måste i sov säcken för att inte krympa ihop av kylan och att man måste lämna sovsäcks värmen för att börja en ny dagen. Vi väcks av ripornas kurren och snart pulserar fotogen köket hemtrevligt. 5 dl saft soppa och två portioner havregryns gröt är en bra start på dagen. Två kåsorna kaffe gör att vi vaknar till innan dagens slit. Vi har siktet inställt på Kisuris stugan eller kanske längre. Vi skidar fram på vinter leden som går på motsatt sida jämfört med sommar leden. En och annan skoter bränner förbi oss men inga på skidor. Var är alla? Min rygg säck väger grymt mycket och Os säkert mer, så jag vågar inte klaga. Säcken är överfull och tältet får spännas på locket, och jag tänker att det här är minst 37kg. Jag tänker alltid 37 kg, det känns bättre då, det är som en mantra jag mumlar, 37 kg, 37 kg, 37 kg. Ibland är ett osannolikt harvande i fjällen ut mål känns det som, godis pausen som enda ljus punkt. Men så dyker det upp något, den här gången dök den öppna forsen upp. Vi kan inte komma över, vi måste gå runt och vinden har tagit i, vi får spåra i den djup snön, eftersom vi har lämna vinter leden och skoter maskinerna bakom oss. Kutjaure breder ut sig framför oss och på andra sidan syns same vistet och nån is fiskare med tillhörande skoter syns också. Vi måste över sjön, vinden tar i och piska snö, så att den ser krattad ut. Vi följer ett framblåst skoterspår upp i baken mot Kisuris stugan. Längre bort syns Naturvårds verkets kämpar som markerar Padjelanta leden ner mot Stalo. Vi kryssar fram i skogen och hamnar lite långt söderut och får kämpa till baks i vinden. Slutligen når vi de lilla stug lägret och väl inne i stug värmen känns det bra. Vi dela med en familj som verka trevlig, i den andra vinter öppna husera en arg gubbe, med Klätter mus brallor så dit gå vi int. Den lilla stugan är mysiga och vi trycker i oss några påsar frys torkat och jäser och drecker kaffe. Vi språkar med de lilla familjen och knoppar därefter in, imorgon väntar Sarek coh då gäller det att vara utvilad, specielt om vinden håller i. Vinden mojnar inte under natten utan fortsätter med oför minskad styrka. efter en rejäl frukost trotsar vi vädret och stugans härlig värmen. Vi följer denna gamla sommar leden och det går förvånansvärt bra, fast vinden är en aning stressande, alldrig någon lä och man blir kiss nödig av kylan. Vi har nu lämnat Akkas toppar ensam bakom oss och Padjalantas mjukare former syns söderöver. Jag känner igen mej när vi kommer över krönet, jag har gåt den här vägen förut fats från anndra hållet och i Juli värmen och med mygg surr och annat såm man faktiskt längtar efter så här när det blåser frisk vind och när rasterna avslutas föratt vi fryser. O skidar på, medans jag kroknar en aning emellanåt, jag använder ofta inte stavarna för att den 39kiliga säcken tynger så att de är svår att lyfta. Kanske kunde man dumpa något. Vinden upphör inte och jag går inkapslad i mitt huva och goggles. Till slut lyckas vi hitta lä bakom en hög strand brink eller vad det nu kan vara som döljs under snön. Att hitta lä är underbar och äntligen kan man slappna av en smulan.
				</p>
			</article>
		</section>

		<aside>
			<h2>Högerspaletn</h2>
		</aside>
		<footer>
			<p>Välkommen tillbaka kära gäst:)</p>
		</footer>
	</div>

	
	<script type="text/javascript" src="jquery_1102.js"></script>
	<script type="text/javascript" src="effects.js"></script>


</body>

</html>


