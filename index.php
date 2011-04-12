<?php
session_start();
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<meta content="Waves is the annual national cultural festival hosted by the Birla Institute of Technology and Science, Pilani - KK Birla Goa Campus. Waves 2010, to be held from October 14 to 16, is one of the biggest college festivals in the Goa-Mumbai region. Themed on Viva La Vida; a Celebration of Life, this Waves hosts competetive events spanning 8 categories, a plethora of creative workshops, and special nights previously graced by the likes of Parikrama, KK and DJ Suketu." name="description" />
		<meta content="festival, cultural, Birla Institute Of Technology and Science, culfest, goa, mumbai goa region, india, waves, viva la vida, nites, college, university, workshops, events, dance, drama, music, literature, literary, quiz, depp, art" name="keywords" />
		<title>Waves 2010: The National Cultural Festival | BITS - Pilani KK Birla Goa Campus</title>
	
		<script src="includes.min.js" type="text/javascript" ></script>
		<script src="scripts.min.js" type="text/javascript" ></script>
		<script src="updates.js" type="text/javascript" ></script>
		<link href="css/styles.min.css" rel="stylesheet" type="text/css" />                

		<script type="text/javascript">
                /*<![CDATA[
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-10844169-1']);
			_gaq.push(['_trackPageview']);
		      
			(function() {
			  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
                //]]>*/
		</script>
	</head>

	<body> 
		<div id="initmsg" class="top-left"></div>
                
                
		<div id="toppanel">
			<div id="panel"></div>	
			<div class="tab">
				<ul class="login">
					<li class="left">&nbsp;</li>
					<li id="toggle" class="whoscomingbutton">
						<a id="open" class="open" href="javascript:void(0);"></a>
						<a id="close" style="display: none;" class="close" href="javascript:void(0);"></a>			
					</li>
					<li class="right">&nbsp;</li>
				</ul> 
			</div>
                </div>
				
		<ul id="events-navigation" class="navigation">
			<li class="dance"><a title="View the Dance events" href="javascript:void(0)">Dance</a></li>
			<li class="drama"><a title="View the Drama events" href="javascript:void(0)">Drama</a></li>
			<li class="music"><a title="View the Music events" href="javascript:void(0)">Music</a></li>
			<li class="finearts"><a title="View the Art events" href="javascript:void(0)">Art</a></li>
			<li class="literary"><a title="View the Literary events" href="javascript:void(0)">Literature</a></li>
			<li class="quiz"><a title="View the Quiz events" href="javascript:void(0)">Quiz</a></li>
			<li class="big4"><a title="View the The Big Four events" href="javascript:void(0)">The Big Four</a></li>
			<li class="miscellaneous"><a title="View the Miscellaneous events" href="javascript:void(0)">Miscelleanous</a></li>
		</ul>
		
		<div class="container">
			<div id="sparks-wrapper">
				<div class="sparks"></div>
			</div>
			<div id="main-wrapper">
				<img src="img/home-bg.jpg" width="880" height="584" alt="Click To Enter"/>
			</div>
			<div id="pick-cat">
				<div id="events-main-details">
					<p>On this wave of exhilaration, in the whirlwind of breath-taking experiences that is life, lies an amalgamation of emotions. Every soul wishes to rejoice in the most vital pursuits of its existence, to seek its quintessential elements, those that define life itself.</p>
					<p>And so this year, Waves celebrates Life itself: 3 days of Viva La Vida, a celebration of life. The events at Waves span various categories; each one a distinct flavour in the unending zest of Life.</p>
				</div>
				<div id="cat-list">
					<h2 class="dance"><a href="javascript:void(0)">Dance</a></h2>
					<h2 class="drama"><a href="javascript:void(0)">Drama</a></h2>
					<h2 class="music"><a href="javascript:void(0)">Music</a></h2>
					<h2 class="finearts"><a href="javascript:void(0)">Art</a></h2>
					<h2 class="literary"><a href="javascript:void(0)">Literature</a></h2>
					<h2 class="quiz"><a href="javascript:void(0)">Quiz</a></h2>
					<h2 class="big4"><a href="javascript:void(0)">The Big Four</a></h2>
					<h2 class="miscellaneous"><a href="javascript:void(0)">Miscellaneous</a></h2>
					<hr />
					<h3><a href="javascript:void(0)" class="back-home">Go Back Home</a></h3>
				</div>
			</div>
			<div id="coming-soon">
				<img src="img/nites-page.jpg" width="600" height="300" />
				<h4><a href="javascript:void(0)" class="back-home">Go Back Home</a></h4>
			</div>
			<div id="event-categories">

				<!-- Top Navigation -->
				<div id="events-top-navigation">
					<ul>
						<li><a href="javascript:void(0)">Rules</a></li>
						<li><a href="javascript:void(0)">Contact</a></li>
						<li><a href="javascript:void(0)">Register</a></li>
					</ul>
				</div>
				<!-- Top Navigation End -->
				
				<!-- Category Event Lists -->
				<div id="finearts-list" class="category-event-list">
					<ul>
						<li><a href="javascript:void(0)">Fine Toon</a></li>
						<li><a href="javascript:void(0)">Panorama</a></li>
						<li><a href="javascript:void(0)">Blind Art</a></li>
						<li><a href="javascript:void(0)">Art Marathon</a></li>
						<li><a href="javascript:void(0)">Prima Facie</a></li>
					</ul>
				</div>
				<div id="dance-list" class="category-event-list">
					<ul>
						<li><a href="javascript:void(0)">Sizzle</a></li>
						<li><a href="javascript:void(0)">Dance Duo</a></li>
						<li><a href="javascript:void(0)">Step Up</a></li>
						<li><a href="javascript:void(0)">Natyanjali</a></li>
					</ul>
				</div>
				<div id="drama-list" class="category-event-list">
					<ul>
						<li><a href="javascript:void(0)">Curtain Call</a></li>
						<li><a href="javascript:void(0)">Nukkad Naatak</a></li>
						<li><a href="javascript:void(0)">Movie Spoof</a></li>
						<li><a href="javascript:void(0)">Rendezvous</a></li>
						<li><a href="javascript:void(0)">Skime</a></li>
					</ul>
				</div>
				<div id="literary-list" class="category-event-list">
					<ul>
						<li><a href="javascript:void(0)">The Joust</a></li>
						<li><a href="javascript:void(0)">Funspeak</a></li>
						<li><a href="javascript:void(0)">Word Games</a></li>
						<li><a href="javascript:void(0)">Inkstint</a></li>
						<li><a href="javascript:void(0)">Press Corps</a></li>
                                                <li><a href="javascript:void(0)">JAM</a></li>
					</ul>
				</div>
				<div id="music-list" class="category-event-list">
					<ul>
						<li><a href="javascript:void(0)">Indian Rock</a></li>
						<li><a href="javascript:void(0)">Animusic</a></li>
						<li><a href="javascript:void(0)">Saaz</a></li>
						<li><a href="javascript:void(0)">Silence Of The Amps</a></li>
						<li><a href="javascript:void(0)">Canto Solista</a></li>
						<li><a href="javascript:void(0)">Sea Rock</a></li>
                                                <li><a href="javascript:void(0)">Six String Showdown</a></li>
					</ul>
				</div>
				<div id="quiz-list" class="category-event-list">
					<ul>
						<li><a href="javascript:void(0)">The Vices Quiz</a></li>
						<li><a href="javascript:void(0)">The SpEnt Quiz</a></li>
						<li><a href="javascript:void(0)">The Waves Open Quiz</a></li>
					</ul>
				</div>
				<div id="big4-list" class="category-event-list">
					<ul>
						<li><a href="javascript:void(0)">Natyanjali</a></li>
						<li><a href="javascript:void(0)">Mr. and Ms. Waves</a></li>
						<li><a href="javascript:void(0)">Fashion Parade</a></li>
						<li><a href="javascript:void(0)">Sea Rock</a></li>
					</ul>
				</div>
				<div id="miscellaneous-list" class="category-event-list">
					<ul>
						<li><a href="javascript:void(0)">Mezzotint</a></li>
						<li><a href="javascript:void(0)">The Wall Street Fete</a></li>
						<li><a href="javascript:void(0)">Looney Tunes</a></li>
						<li><a href="javascript:void(0)">Mum Is The Word</a></li>
					</ul>
				 </div>
				<!-- End Category Event Lists -->
				<div id="event-register-box" class="category-text">
				</div>
				<!-- Category Content -->
				<div id="dance" class="category-text">
					<h1></h1>
					<hr />
					<p><b>Celebration </b>| On a mystic autumn evening, as the breeze hums new tones of delight, as unbridled spirits exult in the mood of revelry, there is freedom in the air. It lives, breathes, seeps into the soul, only to burst forth from every seam. And all that remains is this moment, this feeling, this festival of life.</p>
				</div>
				<div id="music" class="category-text">
					<h1></h1>
					<hr />
					<p><b>Quotidian </b>| It is that which never leaves you; something so deep it's a part of your daily life. A freshness that makes even the most routine of tasks exotic. A satisfaction nestled so snugly, it breaches the surface as the merest skip in your step, a muffled hum in your breath.</p>
				</div>
				<div id="finearts" class="category-text">
					<h1>Art</h1>
					<hr />
					<p><b>Serenity </b>| A strange calm pervades all senses, as the mind fills with awe. Rises a thought which, like a spark, is nurtured to a blaze; and in that moment, when thought is paramount, and the body a tool bent to its will, comes a feeling of feverish tranquillity, a peace bordering on belligerent exhilaration.</p>
				</div>
				<div id="literary" class="category-text">
					<h1></h1>
					<hr />
					<p><b>Expression </b>| Within each humble form, behind every mortal face, lies a genius of thought. There is a craving to be seen, to be heard, to be a mark of virtuosity in this myriad of opinions. The ideas take form, mirroring the very depths of the consciousness, unfolding like a carpet of gold, a majestic creation, the pinnacle of untainted expression.</p>
				</div>
				<div id="drama" class="category-text">
					<h1></h1>
					<hr />
					<p><b>The Chase </b>| The most alluring of life's rewards lies at the end of the tunnel. It is that which makes us work, day in and day out, dealing with many trials and tribulations on the way. All to catch the ultimate prize: to forsake who we are, and be who we've always wanted to be.</p>
				</div>
				<div id="quiz" class="category-text">
					<h1></h1>
					<hr />
					<p><b>The Adventure </b>| No frontier is final. No voyage absolute. There is something appealing, something elusive in everything you do. You're driven by an urge to know, to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before.</p>
				</div>
				<div id="big4" class="category-text">
					<h1>The Big Four</h1>
					<hr />
					<p>These events define the superlatives at Waves every year. The biggest stakes, largest crowd pullers, the maximum prize money, tremendous brand visibility, the hottest trends in fashion, the fiercest dance duels &ndash; they've got it all on showcase.</p>
				</div>
				<div id="miscellaneous" class="category-text">
					<h1>Miscellaneous Events</h1>
					<hr />
					<p><b>The Simple Pleasures </b>| There is joy in seeing a pebble skim the waters of a pond. Like the thrill in leaning out of the car, feeling the breeze running through your hair. Life is short, but replete with those sweet nothings you indulge in; sudden, impulsive, and yet never forgotten.</p>
				</div>
				<!-- Category Content End -->
				
				<!-- Event Content -->
				
				<!-- Art -->
				<div id="finetoon" class="category-text">
					<p>If you are one of those who believe in the maxim that newspapers are read only for the comic strips only and spend many a boring lecture doodling at the back of your notebook, then the newbie event of Cartooning beckons you this WAVES. Cartooning gives you a bigger canvas to unleash your imagination upon. May your caricatures be as appealing as the prize money!</p>
				</div>
				<div id="panorama" class="category-text">
					<p>Nature has been a favorite muse of generations of artists since time immemorial and has consistently produced nothing short of masterpieces in each rendition. It's a subject that never ages and never fails to enrapture.  Abiding by this truism, we present to you Panorama, the ultimate competition for Landscape Painting. Make sure of leaving no stone in the scenery unturned in your quest for the magnum opus.</p>
				</div>
				<div id="blindart" class="category-text">
					<p>Great artists have an uncanny knack of seeing that which is not easily discernible to the ordinary eye. But only true geniuses can envision art beyond sight. The paradox of reality is that there is no image as compelling as the one seen in the mind's eye. Thus, for those with a deep insight into art, Blind Art challenges you to give a vivid depiction of your imagination, by painting with your eyes wide shut,  guided only by the description provided by your partner.</p>
				</div>
				<div id="artmarathon" class="category-text">
					<p>Paint a scene and then scramble to finish your t-shirt design, all the while nervously glancing at the never-ending list of tasks at hand and the merciless clock. It's an all-out art attack!</p>
				</div>
				<div id="primafacie" class="category-text">
					<p>In the business of portrayals, you are faced with the challenge of combining the artist and the craftsman. So, if you have the skill of capturing the whole essence of a person with your easel, in the confines of a single canvas, this is the event to showcase your talent. It is said that every portrait that is painted with feeling is a self-portrait of the artist who made it, not of the sitter. So be sure to autograph yours with excellence.</p>
				</div>
				
				<!-- Dance -->
				<div id="sizzle" class="category-text">
					<p>Talent will be found aplenty in this showcase of skill, but the one with all the right moves will take home the prize. No effects. No backup. Only the music, the stage, and the audience waiting to be dazzled.</p>
				</div>
				<div id="danceduo" class="category-text">
					<p>An air of romance, of chemistry, of passion; two graceful forms swaying with the music, in elegance and perfect synchrony. When each is half of this mesmerising whole, it is truly the purest dance of all.</p>
				</div>
				<div id="stepup" class="category-text">
					<p>It is the battle for dance supremacy, as dancers pit their skills and moves against each other for the ultimate prize. Each step could be their last, and it will take talent, grace and smooth choreography to be the last dancer standing.</p>
				</div>
				
				<!-- Drama -->
				<div id="curtaincall" class="category-text">
					<p>Dimmed lights, polished wood, parted curtains, bated breath - the stage is set for you to mesmerize the audience with your acting prowess. Don your costumes, splash on your make-up, and make your presence felt in the stage play event of Waves.</p>
				</div>
				<div id="nukkadnaatak" class="category-text">
					<p>Don your scarves, hold your head high, and shout out your emotions. Powerful dialogues, lithe movements and the heights of innovation- it's spellbinding entertainment with a heart of gold. No lights, no curtains: all the world's a stage!</p>
				</div>
				<div id="moviespoof" class="category-text">
					<p>This October, the Joker will be talking about his wide range of skin-care products and lipsticks. Gabbar Singh will be addressing his curious feelings for Kalia. Expect the unexpected; the wild, the dangerous, and the outrageous. Watch people rip your favourite movie apart, as you sit there and curse yourself for actually enjoying it.</p>
                                        <hr/>
                                        <p>Any <b>one</b> of the following can be spoofed by a team:</p>
                                        <p><b>English</b></p>
                                        <ul>
                                            <li>The Dark Knight</li>
                                            <li>Inception</li>
                                            <li>Twilight</li>
                                            <li>The Grudge</li>
                                            <li>Harry Potter And The [name of your choice here]</li>
                                            <li>Titanic</li>
                                            <li>The Matrix</li>
                                        </ul>
                                        <p><b>Hindi</b></p>
                                        <ul>
                                            <li>Sarkar</li>
                                            <li>Taare Zameen Par</li>
                                            <li>Black</li>
                                            <li>3 Idiots</li>
                                            <li>Sholay</li>
                                            <li>Border</li>
                                            <li>Jodha Akbar</li>
                                            <li>Lagaan</li>
                                        </ul>
				</div>
				<div id="rendezvous" class="category-text">
					<p>Is imitation the sincerest form of flattery? Or is it just a way to get a few laughs at the expense of a ridiculous character? Well, the ends justify the means, we always say. Mock, jeer and extrapolate your perception of your favourite icon, and win laurels and adulation in return.</p>
                                        <hr/>
                                        <p><b>The Rendezvous Character List:</b></p>
                                        <p><b>Male</b></p>
                                        <ul>
                                            <li>Thakur (Sholay)</li>
                                            <li>Viru Sahasrabuddhe (3 Idiots)</li>
                                            <li>Darth Vader (Star Wars)</li>
                                            <li>Chatur Ramalingam (3 idiots)</li>
                                            <li>Jim Carrey (The Mask)</li>
                                            <li>Rajnikanth</li>
                                            <li>Raghu Ram (Roadies)</li>
                                            <li>Edward Cullen (Twilight)</li>
                                            <li>Sunny Deol (Gadar)</li>
                                            <li>Circuit (Munnabhai MBBS)</li>
                                            <li>ACP Pradyuman (CID)</li>
                                            <li>Simpu Singh (Channel V)</li>
                                            <li>Navjyot Singh Sidhu</li>
                                            <li>Osama Bin Laden</li>
                                            <li>Homer Simpson (The Simpsons)</li>
                                            <li>Karan Johar</li>
                                            <li>The Rock (WWE)</li>
                                            <li>Rohit (Koi Mil Gaya)</li>
                                        </ul>
                                        <p><b>Female</b></p>
                                        <ul>
                                            <li>Rani Mukherjee (Black)</li>
                                            <li>Mayavati</li>
                                            <li>Rakhi Sawant</li>
                                            <li>Janice (F.R.I.E.N.D.S)</li>
                                            <li>Komolika (Kasauti Zindagi Kay)</li>
                                            <li>Dadi Sa (Balika Vadhu)</li>
                                            <li>Berta (Two And A Half Men)</li>
                                            <li>Vidya Balan (Bhool Bhulaiya)</li>
                                            <li>Basanti (Sholay)</li>
                                            <li>Rabri Devi </li>
                                            <li>Maya Sarabhai (Sarabhai v/s Sarabhai)</li>
                                            <li>Karan Johar</li>
                                        </ul>				
                                </div>
				<div id="skime" class="category-text">
					<p>Words can only say so much. In Skime, in fact, we forbid you to use them. A mime event, this challenge will test your innovation and emoting abilities to the very limits. After all, actions speak louder than words.</p>
				</div>
				
				<!-- Literary -->
				<div id="thejoust" class="category-text">
					<p>Sparring fiends, unite! Leave aside your petty quarrels, and fight it out gladiator style. Engage in a war of words and ideas, as you dismiss your opponent's arguments with all the flair and panache of a Shakespearean character.</p>
				</div>
				<div id="funspeak" class="category-text">
					<p>Say goodbye to the years of chastisement you've faced for talking absolute rot. We give you a chance to display your ability to weave the absurd, incredible and witty into one seamless rant, and the good news is that you'll actually be applauded for this.</p>
				</div>
				<div id="wordgames" class="category-text">
					<p>Words have no power to impress the mind without the exquisite horror of their reality, said Edgar Allan Poe. With an army of anagrams, crosswords, palindromes and other such mind benders, this event is sure to test your grasp over the English language to the very limits. Don't be scared, now.</p>
				</div>
				<div id="inkstint" class="category-text">
					<p>The pen is mightier than the sword. Especially when you can conjure up a 20 feet tall fire-breathing dragon with a rather inconvenient case of the flu, albeit on paper. This is your chance to scorch the competition with your wit, creativity, and eloquence. Oh, and your dragon, if you absolutely must.</p>
				</div>
				<div id="jam" class="category-text">
					<p>So there's this event where all you have to do is talk for a minute. Of course, there are more than a dozen rules that you need to follow. And there's a bunch of people armed with buzzers who'll do anything to shut you up and speak instead. And there's a megalomaniacal JAM-master who'll add a few rules whenever he wants, just for fun. Sounds simple, right?</p>
				</div>
				<div id="presscorps" class="category-text">
				     <p>Have you ever made the headlines? Alright, what about in the literal sense? Here is a chance to jump into your journalist boots, and give your nosiness a cause. With a dizzying mix of events, we offer a chance for you to play critic. Praises for the good ones, and brick bats for the ones that are not - we want the truth about the campus buzz. Or at least your version of it.</p>
				</div>
				
				<!-- Music -->
				<div id="indianrock" class="category-text">
					<p>With its turbulent mix of modernity and culture, the Indian Rock scene skids off the beaten track with bands belting out lyrical notes from Indian languages to the riffs of eccentric rock; fusion in its most powerful avatar.</p>
				</div>
				<div id="animusic" class="category-text">
					<p>The synchronization of sonic skill with visual brilliance put to the ultimate test. This instrumental music event requires the participant to compose a short musical piece to accompany an animation.</p>
					<p>Check <a href='/files/Animusic-sample.zip'>this</a> out to know what we're looking for.</p>
				</div>
				<div id="saaz" class="category-text">
					<p>Let the delicate tunes of Hindustani and Carnatic vocals enchant your senses as participants fight for supremacy in one of the oldest Indian art forms.</p>
				</div>
				<div id="silenceoftheamps" class="category-text">
					<p>Tone down the distortion; let the unadulterated melody of the strings take control in this Western Acoustic event. No technical snags, no sound checks. Just pull the plug.</p>
				</div>
				<div id="cantosolista" class="category-text">
					<p>Skip back a few musical eras and set free the Kishore Kumar or Lata Mangeshkar inside, with this Hindi vocal event tuned to the melodies of the 70s and 80s.</p>
				</div>
                                <div id="sixstringshowdown" class="category-text">
                                    <p>A novel event which has always been a favourite among music aficionados, Six String Showdown is back this year. This is where guitarists go head to head in a highly anticipated contest, a supreme test of mastery over the six strings. Testing their ability to improvise and come up with soothing, melodic licks or death-defying shreds, the winner will be crowned the undisputed Lord of the Strings.</p>
				</div>
                                
				<!-- Quiz -->
				<div id="thevicesquiz" class="category-text">
					<p>This one's not for the weak of heart. Or for grandma. Unleash the little devil inside of you, and rid yourself of all your virtues, as you are quizzed about everything you were never supposed to know.</p>
				</div>
				<div id="thespentquiz" class="category-text">
					<p>Couch potatoes of the world, unite! This quiz brings together sports, movies, TV, music, and everything else that Man has invented for his own entertainment. We'll get the questions, but bring your own popcorn.</p>
				</div>
				<div id="thewavesopenquiz" class="category-text">
					<p>The Mother of all Quizzes, the Waves Quiz has always brought together the best college teams in the region. But this year, it goes open. So team up with whoever you want - it could be a friend, sibling, parent, even your pet rabbit - and compete for some awesome prizes.</p>
				</div>
				
				<!-- The Big Four -->
				<div id="fashionparade" class="category-text">
					<p>Passion, poise and a prerogative to impress. Be it in high heels and low cuts, or smooth and suave and dripping charm, the fashion parade is a celebration of the good life, giving a glimpse of the elegant side of the human personality. Undoubtedly one of the most chic and classy events of Waves, the FashP is one of the biggest crowd puller and pleasers. After all, life is a style statement.</p>
					<hr/>
                                        <p>Any <b>one</b> of the following themes can be portrayed by a team:</p>
					<ul>
						<li>Urban Yodha</li>
						<li>Geometry</li>
						<li>Forgotten Fairy Tales</li>
					</ul>
				</div>
				<div id="natyanjali" class="category-text">
					<p>What's a party without a steady beat and a rhythm divine? An unbridled expression of human enjoyment, the Natyanjali features some of the most explosive dance talent from across the country, competing in arguably the most intense event at Waves. A gala of energy, dance and intensity, the Natyanjali is an assured entertainer.</p>
				</div>
				<div id="mrandmswaves" class="category-text">
					<p>Everybody is born equal, but some are more equal than others. Mr. and Ms. Waves is the search for that individual possessing the X factor; an individual of matchless wit, incomparable style and endearing charm. Pitting personality against personality, this event provides enough sparks to keep people on their feet throughout the night.</p>
				</div>
				<div id="searock" class="category-text">
					<p>A sea of people. Wave after wave of cheers and chants come crashing and tumbling through the crisp night air and melt through barriers of colour, caste and creed. For once, everyone will speak the same tongue. For once, it won't be about mind games and politics. For once, it will be a celebration of what is, and not what was. Come and experience the spectacle, as artist and audience unite to sing the same glorious song.</p>
				</div>
				<!-- Miscellaneous -->
				<div id="mezzotint" class="category-text">
					<p>Experience the challenge of still photography sync'ed with audio-visual dynamism; an event for photographers with a passion for twisted creativity.</p>
				</div>
				<div id="thewallstreetfete" class="category-text">
					<p>Speculate, risk it all, and take the bulls and bears in your stride!</p>
				</div>
				<div id="looneytunes" class="category-text">
					<p>Get out your pots and pans, bottles and bags to jam at this unconventional music event.</p>
				</div>
				<div id="mumistheword" class="category-text">
					<p>Say nothing; need we say more?</p>
				</div>
				<!-- Event Content End -->
				
				<!-- Event Rules -->
				<!-- Art Rules-->
				<div id="finetoon-rules" class="category-text">
					<ul>
						<li><b>Category: Bronze</b></li>
						<li><b>Number of Participants: Maximum 2 per team</b></li>
						<li><b>Maximum number of entries per college: Unlimited</b></li>
						<li><b>Registration: On the spot / Online</b></li>
						<li><b>Duration: 120 minutes</b></li>
						<hr />
						<li>The participants will be given a particular storyline or base.</li>
						<li>The participants will be required to make either a <b>comic strip or a story</b>, in accordance with the storyline and other directions that will be provided on the spot.</li>
						<li>Both the participants will be working together.</li>
					</ul>
				</div>
				<div id="panorama-rules" class="category-text">
					<ul>
						<li><b>Category: Silver</b></li>
						<li><b>Number of Participants: 1</b></li>
						<li><b>Maximum number of entries per college: 5</b></li>
						<li><b>Registration: Online</b></li>
						<li><b>Duration: 90 minutes</b></li>
						<hr />
						<li>Sheets, basic colour paints and three brushes will be provided.</li>
						<li>Participants can <b>bring their own brushes also</b>, they <b>cannot carry their own paint.</b></li>
						<li>The participants will be given <b>one location on campus</b>, and will be required to paint a given scenery.</li>
						<li>The painting has to be <b>only in the two colors</b> that will be provided to the participant.</li>
					</ul>
				</div>
				<div id="blindart-rules" class="category-text">
					<ul>
						<li><b>Category: Bronze</b></li>
						<li><b>Number of Participants: 2</b></li>
						<li><b>Maximum number of entries per college: Unlimited</b></li>
						<li><b>Registration: On The Spot / Online</b></li>
						<li><b>Duration: 45 minutes</b></li>
						<hr />
						<li>A black and white picture will be provided; colour has to be filled in by the blindfolded person, with directions from the participant with handcuffs.</li>
						<li>One of the participants will be <b>blindfolded</b> while the other will be <b>handcuffed</b> and be given a picture which he/she will need to describe such that his/her partner is able to recreate the picture.</li>
						<li>The participant with the picture is allowed to see what the blindfolded person is drawing and can direct him accordingly, <b>but he cannot draw.</b></li>
						<li>Sketch pens and sheets will be provided. The person with the picture should also instruct him as to which pen to use and when.</li>
					</ul>
				</div>
				<div id="artmarathon-rules" class="category-text">
					<ul>
						<li><b>Category: Gold</b></li>
						<li><b>Number of Participants: 2</b></li>
						<li><b>Maximum number of entries per college: 3</b></li>
						<li><b>Registration: Online</b></li>
						<li><b>Duration: Spread over two days, 1 hour on the first day and 4 hours on the second day.</b></li>
						<hr />
						<li>The first round will be the elimination round, after which 20 teams will be selected to play for the next rounds.</li>
						<li>Each team will be put through a series of tasks. Teams may move forward to the next round once they complete their task.</li>
						<li>The final evaluation shall be on the basis of their performance in all the rounds.</li>
						<li>The details of all the rounds will be explained during the course of the event.</li>
					</ul>
				</div>
				<div id="primafacie-rules" class="category-text">
					<ul>
						<li><b>Category: Silver</b></li>
						<li><b>Number of Participants: 1</b></li>
						<li><b>Maximum number of entries per college: 3</b></li>
						<li><b>Registration: Online</b></li>
						<li><b>Duration: 90 minutes</b></li>
						<hr />
						<li>Each participant will be given a photograph with a close-up view of a random person.</li>
						<li>The participant will be required to sketch the picture in the photograph.</li>
						<li>Each participant will be given a set of oil pastels, watercolours, brushes and black pens.</li>
						<li>Each participant has to use <b>all</b> the material provided in his/her sketch.</li>
						<li>Sheets, and limited material will be provided.</li>
					</ul>
				</div>
				<!-- Art Rules End-->
				<!-- Big 4 Rules -->
				<div id="fashionparade-rules" class="category-text">
					<ul>
						<li><b>Category: Gold</b></li>
						<li><b>Number of Participants: 12 - 16 per team, plus a maximum of 5 backstage</b></li>
						<li><b>Maximum number of entries per college: 1</b></li>
						<li><b>Registration: Online</b></li>
						<li><b>Duration: Elimination: 10 minutes. Finals: 15 minutes (curtain to curtain). Points will be deducted for exceeding time limit.</b></li>
						<hr />
						<b>Elimination Round:</b>
						<li>Teams need to submit a copy of their write-up at the time of the elimination round.</li>
						<li>Teams have to bring 2 CDs containing their music and video/powerpoint tracks. One CD has to be submitted at the time of the elimination round.</li>
						<li>The elimination round will have rules same as final round and will be held if required.</li>
						<b>Final Round:</b>
						<li>Emphasis will be given to clothing, walk, portrayal of theme and originality.</li>
						<li>All participants do not have to be on stage at the same time.</li>
						<li>Change in the number of participants after the eliminations leads to deduction of points.</li>
						<li>Backstage helpers <b>should not exceed 5</b>, two of whom must be present to provide cues for music and light.</li>
						<li>Use of water, fire and any kind of fireworks (party poppers included) in any form on stage will <b>result in disqualification.</b></li>
						<li>Points will be deducted for any display of vulgarity or dance movements on stage.</li>
						<li>A maximum of <b>10 props</b> are allowed to be used in the entire show.</li>
						<li>An <b>I-shaped extension</b> will be provided to the auditorium stage. Both the stage and the extension may be used as the walking ramp.</li>
						<li>A projector screen will be present as a backdrop which can be used if required.</li>
						<li>Teams are requested to confirm their participation in advance by mailing the event manager.</li>
					</ul>
				</div>
				<div id="natyanjali-rules" class="category-text">
					<ul>
						<li><b>Category: Gold</b></li>
						<li><b>Number of Participants: 6 - 12, plus 3 for music cues, lighting and backstage</b></li>
						<li><b>Maximum number of entries per college: 1</b></li>
						<li><b>Registration: On the spot / Online</b></li>
						<li><b>Duration: Elimination: 4 - 6 minutes. Final Round 1 : 4 - 6 minutes and Final Round 2 : 2 - 3 minutes</b></li>
						<hr />
						<b>Elimination Round:</b>
						<li>Natyanjali is a Group Dance Event.</li>
						<li>A prepared sequence of about <b>4 - 6 minutes</b> has to be performed.</li>
						<li>A minimum of 6 dancers must be present on stage at all times of the performance.</li>
						<li>It is sufficient for one person of the group to wear the entire costume of the dance.</li>
						<li>However if the costume is not uniform, participants must wear one of each type.</li>
						<li>Usage of props is allowed but it <b>does not carry</b> extra credit.</li>
                        <li>Usage of props should be confirmed with event manager.</li>
						<li>7 teams are selected for the finals directly from this round.</li>
						<li>The next few good teams may qualify for the wildcard round.</li>
						<li>The elimination round takes place completely before the <b>judges only</b> behind closed doors.</li>
						<li><b>No</b> lead dancer or solo performances allowed in any of the rounds.</li>
                 		<li>The Auditorium screen should not be used for any purpose.</li>
						<li>The soundtrack of the groups' performance should be brought along in a CD/DVD or pen drive.</li>
						<b>Final Round One:</b>
						<li>The same prepared sequence of 4 - 6 mins must be performed in front of a large audience in the auditorium.</li>
                                                <li>A minimum of 6 dancers must be present on stage at all times of the performance.</li>
                                                <li><b>No</b> lead dancer or solo performances allowed in any of the rounds.</li>
                                                <li>Usage of props is allowed but it <b>does not carry</b> extra credit.</li>
                                                <li>The auditorium screen should <b>not</b> be used for any purpose. (for photos, videos etc.)</li>
						<b>Final Round Two (Props Round):</b>
						<li>Number of participants on stage: <b>5 - 12</b></li>
						<li>A particular prop is given to a team and a soundtrack of <b>2 - 3 minutes</b> is provided immediately after the team's performance in the first round.</li>
						<li>They must perform a dance sequence for the given track using the prop provided in as many innovative ways as possible.</li>
					</ul>
				</div>
				<div id="mrandmswaves-rules" class="category-text">
					<ul>
						<li><b>Category: Gold</b></li>
						<li><b>Number of Participants: 1 - 2 (1 male and 1 female at most)</b></li>
						<li><b>Maximum number of entries per college: 1</b></li>
						<li><b>Registration: Online</b></li>
						<li><b>Duration: Tentative</b></li>
						<hr />
						<b>General Rules:</b>
						<li>Attire for the auditorium round should, ideally, be relevant to the theme i.e., Viva la Vida.</li>
                                                <li>Candidates should preferably submit their application forms before 11 am on Day 2.</li>
                                                <li>Candidates shortlisted for a second round of screening will be subjected to a round of Personal interviews, following which selected candidates will proceed to the final auditorium round.</li>
                                                <li>The Audi round will consist of the following challenges:</li>
<ul>
                                                <li><b>Ramp Walk</b></li>
                                                <li><b>Impress me: </b>All candidates would strive to impress the gathered audience with whatever talent they may be having in a constrained time.</li>
                                                <li><b>Witty Questions Round: </b>After elimination, the remaining candidates will be subjected to a question and answer session. Questions will be allotted on randomly.</li>
</ul>
                                                <li>The next round consisting of an arbitrary task will determine the ultimate winners.</li>
                                                <li>The round involving questions from the judges will be the final round.</li>
					</ul>
				</div>
				<div id="searock-rules" class="category-text">
					<ul>
						<li><b>Number of performers: 3 - 8 (per band)</b></li>
						<li><b>Registration: Online</b></li>
						<li><b>Duration: Elimination: 20 minutes, Finals: 30 minutes (per band, including sound check)</b></li>
						<hr />
						<li>Sea Rock 2010 will be a two round competition, elimination round and final round.</li>
						<li>Bands will have to register with us via mail. Click on Register for detailed instructions.</li>
						<li>Bands will also have to register on the spot when they reach the campus. The time slot for the elimination round will be allotted to the band by a lucky draw at the time of on the spot registration on first come first serve basis.</li>						
						<li>15 bands will be selected for the elimination round based strictly upon their entries.</li>
						<li>4 bands will be selected for the final round based on their performance in the elimination round.</li>
						<li>Elimination round scores will not carry over to finals.</li>
						<li>A standard 5 piece drum kit, cymbals (ZBT choke, crash and ride) and a single bass pedal will be provided.</li>
						<li>Accommodation will be provided to all performing band members.</li>
						<li>No alcohol, cigarettes or drugs of any kind are allowed on campus or to be used during performance.</li>
						<li>Profanity during performance will not be accepted.</li>
						<li>Any kind of misbehaviour with the organizers/judges will lead to disqualification.</li>
						<li>The organizers/judges are the final authority on any decisions and cannot be questioned.</li>
					</ul>
				</div>
                                <div id="searock-register" class="category-text">
					<ul style="list-style-type: none;"><li>To register, bands must mail the following to <b>searock@bits-waves.org</b> before <b>12AM, September 12, 2010</b>:</li></ul>
                                        <ul>
						<li>At least <b>one track recording</b>. <b>Original compositions</b> will be appreciated. Note that this is the <b>sole criteria</b> for elimination.</li>
						<li>A well-formatted, formally written document in PDF format, with:
                                                    <ul>
                                                        <li>The names and ages of the band members.</li>
                                                        <li>Their roles in the band.</li>
                                                        <li>Contact details: Addresses, contact numbers, email IDs.</li>
                                                        <li>A short description of the band; detailing their history, influences and achievements.</li>
                                                    </ul>
                                                </li>
					</ul>
				</div> 
				<!-- Big 4 Rules End -->
				<!-- Miscellaneous Rules -->
				<div id="mezzotint-rules" class="category-text">
				<ul>
					<li><b>Category: Bronze</b></li>
					<li><b>Number of Participants: 4 per Team</b></li>
					<li><b>Maximum number of entries per college: 3</b></li>
					<li><b>Registration: On the spot</b></li>
					<li><b>Duration: Tentative</b></li>
					<hr />
					<b>Round One:</b>
					<li>A list of themes will be given to choose from.</li>
					<li>The participants will have to take photographs related to the chosen theme.</li>
					<li>The photograph should be clear enough to depict the theme.</li>
					<li>Any camera above 3.2 megapixels is allowed.</li>
					<li>A maximum of 10 photographs are allowed for a theme.</li>
					<b>Round Two:</b>
					<li>A number of soundtracks will be provided to choose from.</li>
					<li>Participants will need to make a video, which should be a compilation of all the photographs taken during the festival, set to the tune of the selected soundtrack.</li>
					<li>Synchronization of the photographs with the music will count for more points.</li>
					<li>The video should be at most 2 minutes long.</li>
					<li>The theme of the video should suit the lyrics (if any).</li>
					<li>No camera will be provided by the event organizers.</li>
				</ul>
				</div>
				<div id="thewallstreetfete-rules" class="category-text">
				<ul>
					<li><b>Category: Bronze</b></li>
					<li><b>Number of Participants: 1-4 per team</b></li>
					<li><b>Maximum number of entries per college: Unlimited</b></li>
					<li><b>Registration: On the spot / Online</b></li>
					<li><b>Duration: 30 minutes (Elimination Round), 45 minutes (Final Round)</b></li>
					<b>Elimination Round:</b>
					<li>Teams get 30 minutes to trade all of their allotted gold with other teams based on an initial average price and position, and make the most profit doing so.</li>
					<li>Teams are allowed to set and change their own buying and selling prices by sending a sealed bid to the game master. Changes thereafter will be considered only after 1 minute of the last bid.</li>
					<li>8 teams make it to the final round; maximum profit is the sole criteria.</li>
					<b>Final Round:</b>
					<li>Teams will represent countries and be given initial resources to exchange as many shapes of predetermined specifications as possible with the game trader for money. They will have 45 minutes to do so.</li>
					<li>Different countries will have different initial resources, and teams are free to use up their resources the way they want.</li>
					<li>Auctions for resources will be held at random points once the game is underway. One member from each team must approach the game master when this happens to place their bids.</li>
				</ul>
				</div>
				<div id="looneytunes-rules" class="category-text">
				<ul>
					<li><b>Category: Bronze</b></li>
					<li><b>Number of participants: 1-8</b></li>
					<li><b>Maximum no. of teams per college: 1</b></li>
					<li><b>Registration: 45 minutes before the Event</b></li>
					<li><b>Duration: 8 minutes (5minutes performance + 3minutes setup)</b></li>
					<b>General Rules:</b>
					<li>Teams should register with a list of non conventional instruments that are to be used.</li>
					<li>No conventional instruments (acoustic/electronic) are permitted.</li>
					<li>The instruments to be used in the performance should each fit into a box of 60*60*60 cm</li>
					<li>The organizer will provide no instruments.</li>
					<li>Minimum of 4 unconventional instruments must be used.</li>
					<li>No singing or use of recognizable words is allowed.</li>
					<li>Humming, whistling, clapping, twitching of fingers is permitted. They will be considered as instruments of music.</li>
				</ul>
				</div>
				<div id="mumistheword-rules" class="category-text">
				<ul>
					<li><b>Category: Bronze</b></li>
					<li><b>No . of participants: 3 (including 1 actor)</b></li>
					<li><b>Maximum no. of teams per college: unlimited (for prelims) and 1 (for finals)</b></li>
					<li><b>Registration: On the spot</b></li>
					<b>General Rules:</b>
					<li>Actor is not allowed to talk, mumble or point at objects while enacting.</li>
					<li>Splitting of words is allowed, but letter by letter splitting is restricted.</li>
					<li>Actor is not allowed to show letters. Participants are allowed to use codes for the same.</li>
					<li>Specific rules for the rounds will be mentioned on the spot.</li>
					<b>Elimination Round:</b>
					<li>There will be one elimination round after which the best 6 teams from the qualified teams of each college go to the finals.</li>
					<b>Final Round:</b>
					<li>Details of the rounds will be given on the spot.</li>
				</ul>
				</div>
				<!-- Miscellaneous Rules End -->
				<!-- Quiz Rules -->
				<div id="thevicesquiz-rules" class="category-text">
					<ul>
						<li><b>Category: Bronze</b></li>
						<li><b>Number of Participants: 1 - 3</b></li>
						<li><b>Maximum number of entries per college: Unlimited</b></li>
						<li><b>Registration: On The Spot / Online</b></li>
						<li><b>Duration: Tentative</b></li>
						<hr />
						<b>Elimination Round:</b>
						<li>A preliminary round will be conducted to select the top 6 teams for the Final Round. It will be based on the theme of The Vices.</li>
						<li>In case of a tie, internal tie-breakers will be used to break the tie between teams.</li>
						<b>Final Round:</b>
						<li>The finals will consist of numerous rounds that will be revealed on the spot by the quizmaster.</li>
						<li><b>Quizmaster's decision is final.</b></li>
					</ul>
				</div>
				<div id="thespentquiz-rules" class="category-text">
					<ul>
						<li><b>Category: Silver</b></li>
						<li><b>Number of Participants: 1 - 3</b></li>
						<li><b>Maximum number of entries per college: Unlimited</b></li>
						<li><b>Registration: On The Spot / Online</b></li>
						<li><b>Duration: Tentative</b></li>
						<hr />
						<b>Elimination Round:</b>
						<li>A preliminary round will be conducted to select the top 6 teams for the Final Round. It will be based on the theme of Sports and Entertainment.</li>
						<li>In case of a tie, internal tie-breakers will be used to break the tie between teams.</li>
						<b>Final Round:</b>
						<li>The finals will consist of numerous rounds that will be revealed on the spot by the quizmaster.</li>
						<li><b>Quizmaster's decision is final.</b></li>
					</ul>
				</div>
				<div id="thewavesopenquiz-rules" class="category-text">
					<ul>
						<li><b>Category: Gold</b></li>
						<li><b>Number of Participants: 1 - 3</b></li>
						<li><b>Maximum number of entries per college: Unlimited</b></li>
						<li><b>Registration: On The Spot / Online</b></li>
						<li><b>Duration: Tentative</b></li>
						<hr />
						<b>Elimination Round:</b>
						<li>A preliminary round will be conducted to select the top 6 teams for the Final Round. It will be a general quiz.</li>
						<li>In case of a tie, internal tie-breakers will be used to break the tie between teams.</li>
						<b>Final Round:</b>
						<li>The finals will consist of numerous rounds that will be revealed on the spot by the quizmaster.</li>
						<li><b>Quizmaster's decision is final.</b></li>
					</ul>
				</div>
				<!-- Quiz Rules End-->
				<!-- Music Rules -->
				<div id="indianrock-rules" class="category-text">
					<ul>
						<li><b>Category: Gold</b></li>
						<li><b>Number of Participants: 4 - 10</b></li>
						<li><b>Maximum number of entries per college: Unlimited</b></li>
						<li><b>Registration: On The Spot (Waves Day 1) / Online</b></li>
						<li><b>Duration: Elimination: 10 minutes, Finals: 15 minutes (including set up time)</b></li>
						<hr />
						<b>General Rules:</b>
						<li>This event caters to the upcoming genre of music also known as Indian Rock.</li>
						<li>The songs should have lyrics in <b>Indian languages</b>. However, a rap with English lyrics is allowed.</li>
						<li>Original compositions are allowed. In this case, <b>3 copies</b> of the lyrics must be submitted at time of registration on campus.</li>
						<li>In case of lyrics in any Indian language other than Hindi or English <b>3 copies</b> of the literal translation of the lyrics in English must be submitted at the time of registration on campus.</li>
						<li><b>Lyrics will be checked for vulgarity and profanity.</b></li>
						<li>Every extra minute taken beyond specified time limit will lead to reduction of <b>5% of the total marks scored</b>.</li>
						<li>Usage of at least <b>one percussion instrument</b> is compulsory.</li>
						<li>Minimum of <b>one vocalist</b> is compulsory.</li>
						<li>There should be minimum of four performing members on the stage at any particular point in time.</li>
						<li>Any pre-recorded music or sound would lead to disqualification of the team.</li>
						<li>The marks from eliminations will not be carried over to finals.</li>
						<li>Availability of the following instruments (if required) is assured: Drum Set, An Electric Bass, a Keyboard and a Tabla Set.</li>
						
						<b>Elimination Round:</b>
						<li>Only one song is to be performed within the given time.</li>
						<li>The song performed can be among the ones prepared for the finals.</li>
						
						<b>Final Round:</b>
						<li>Maximum of 6 teams will qualify for this round.</li>
						<li>It is compulsory to perform a minimum of one song within the given time limit.</li>
					</ul>
				</div>
				<div id="animusic-rules" class="category-text">
					<ul>
						<li><b>Category: Gold</b></li>
						<li><b>Number of Participants: 4 - 8</b></li>
						<li><b>Maximum number of entries per college: 1</b></li>
						<li><b>Registration: On The Spot (Waves Day 1) / Online</b></li>
						<li><b>Duration: Round One: 5 minutes (plus 3 minutes set up time), Round Two: 2 - 3 minutes animation video + 5 minutes group instrumental + 4 minutes setup time</b></li>
						<hr />
						<b>General Rules:</b>
						<li>This is an instrumental music event.</li>
						<li>In the elimination round the participants are expected to play a group instrumental piece of any genre.</li>
						<li>Any kind of album, self-composition or folk music is allowed, both Indian and Western.</li>
						<li>Finalists would be expected to play suitable live music for an animation video (which will be uploaded on the website) other than a group instrumental piece.</li>
						<li>Any pre-recorded music would lead to disqualification of the team.</li>
						<li>The marks from the eliminations will not be carried over to finals.</li>
						<li>Every extra minute taken beyond the specified time limit will lead to <b>reduction of 5%</b> of the total marks scored.</li>
						<li>Availability of the following instruments (if required) is assured: Drum Set, An Electric Bass, a Keyboard and a Tabla Set.</li>
						
						<b>Round One:</b>
						<li>Teams should perform a self-composed or an adapted group instrumental piece.</li>
						<li>May be made an elimination round.</li>
						
						<b>Round Two:</b>
						<li>The teams are expected to play suitable music for an animation video of amongst the ones put up on the website.</li>
						<li>The music may be self composed or any kind of album, folk music, both Indian and Western.</li>
						<li>After the animation piece, the team would be asked to play an instrumental piece which could be the same as the one prepared for the first round.</li>
					</ul>
				</div>
				<div id="saaz-rules" class="category-text">
					<ul>
						<li><b>Category: Bronze</b></li>
						<li><b>Number of Participants: 1</b></li>
						<li><b>Maximum number of entries per college: Unlimited</b></li>
						<li><b>Registration: On The Spot (Waves Day 1) / Online</b></li>
						<li><b>Duration: 12 minutes</b></li>
						<hr />
						<li>This event tests the skills of the participants in Indian classical music.</li>
						<li>It is a <b>solo vocal competition</b> and will be conducted in two categories, <b>Carnatic</b> and <b>Hindustani</b></li>
						<li>The participants may bring their own accompaniments/accompanists. No accompaniments will be provided.</li>
						<li>Special marks will be awarded for extempore singing at the discretion of the judges.</li>
						<li>Every extra minute taken beyond the specified time limit will lead to <b>reduction of 5%</b> of the total marks scored.</li>
					</ul>
				</div>
				<div id="silenceoftheamps-rules" class="category-text">
					<ul>
						<li><b>Category: Silver</b></li>
						<li><b>Number of Participants: Minimum of 3</b></li>
						<li><b>Maximum number of entries per college: Unlimited</b></li>
						<li><b>Registration: On The Spot (Waves Day 1) / Online</b></li>
						<li><b>Duration: 12 minutes (including set up time)</b></li>
						<hr />
						<b>General Rules:</b>
						<li>The participants can perform acoustic renditions of English songs of any genre.</li>
						<li>A minimum of <b>one vocalist</b> is compulsory.</li>
						<li>There should be a minimum of <b>three performing members</b> on the stage at any particular point in time.</li>
						<li>Rendition accompanied by an instrument is not compulsory.</li>
						<li>Every extra minute taken beyond specified time limit will lead to reduction of <b>5% of the total marks scored</b>.</li>
						<li>Availability of the following instruments is assured: An electric bass, a keyboard and a congo.</li>
						<li>Usage of a congo is allowed. Usage of the electric bass and keyboard (only in piano mode) is allowed. <b>No other electronic instruments are allowed</b>.</li>
					</ul>
				</div>
				<div id="cantosolista-rules" class="category-text">
					<ul>
						<li><b>Category: Silver</b></li>
						<li><b>Number of Participants: 1</b></li>
						<li><b>Maximum number of entries per college: Unlimited</b></li>
						<li><b>Registration: On The Spot (Waves Day 1) / Online</b></li>
						<li><b>Duration: Unrestricted</b></li>
						<hr />
						<b>Elimination Round:</b>
						<li>The participants have to come prepared with 2 songs of their choice to showcase their versatility.</li>
						<li>The songs must have <b>Hindi</b> lyrics.</li>
						<li>This will be followed by a round of scale-change where the participants have to adapt to the corresponding scale.</li>
						<li>The marks from eliminations will <b>not</b> be carried over to finals.</li>
						<li><b>6 contestants</b> will be selected for the finals.</li>
						
						<b>Final Round: Nostalgia</b>
						<li>The theme of the final round will be Hindi oldies (timeline upto the <b>1980s</b>).</li>
						<li>A song bank will be provided to the finalists and the songs rendered in the final rounds will be <b>strictly from the song bank.</b></li>
						<li>Karaoke tracks will be provided.</li>
						<li>The participants <b>must carry a CD player</b> with them.</li>
						<li>The rest of the rules will be briefed to the selected finalists after the eliminations results.</li>
						
					</ul>
				</div>
                                <div id="sixstringshowdown-rules" class="category-text">
                                    	<ul>
						<li><b>Category: Silver</b></li>
						<li><b>Number of Participants: 1</b></li>
						<li><b>Maximum number of entries per college: Unlimited</b></li>
						<li><b>Registration: On The Spot / Online</b></li>
						<li><b>Duration: Unrestricted</b></li>
						<hr />
						<b>Elimination Round:</b>
						<li>Guitarists will be paired at random and each pair will duel over the same backing track which will be provided on registration.</li>
						<li>A fixed number of guitarists will advance into the next round. This will be independent of how they fared against their opponent in the duel &ndash; it is possible for both the guitarists in a duel to advance into the next round.</li>
						
						<b>Subsequent Rounds:</b>
						<li>Guitarists will be paired depending on their scores in a manner deemed fair and appropriate by the judges and organizers. Guitarists will duel over a backing track as in the previous round.</li>
						<li>Only one guitarist from each particular duel will advance to the next round.</li>
						<li>Subsequent rounds will continue till the number of guitarists in the reckoning remains two.</li>
						
                                                <b>The Final Showdown will involve an extended duel between the finalists.</b>
						
					</ul>
                                </div>
				<!-- Music Rules End -->
				<!-- Drama Rules -->
				<div id="curtaincall-rules" class="category-text">
					<ul>
						<li><b>Category: Gold</b></li>
						<li><b>Number of Participants: 4 - 8, plus 3 backstage</b></li>
						<li><b>Maximum number of entries per college: 1</b></li>
						<li><b>Registration: Online (Scripts to be mailed on given email id, at least 2 weeks before the event)</b></li>
						<li><b>Duration: 55 - 60 minutes per team (including set up)</b></li>
						<hr />
						<li>Elimination will be based on scripts.</li>
						<li>The team must present a one act play (short skit).</li>
                        <li>The play must be in Hindi or English.</li>
						<li>Teams must minimize their usage of props. A list of all props required is to be mentioned in the script. Basic props might be provided like table and chairs.</li>
						<li><b>Sound clips are disallowed.</b> Teams may request the backstage members to produce sound from a synthesizer or any other musical instrument.</li>
						<li>A total of <b>3 members</b> from a team are allowed to help the performers with the backstage necessities. Only one person will be allowed to control the sound, and only one person will be allowed to control the lighting. The third person may help in on-stage activities between a change in scene, etc.</li>
						<li>Points would be deducted on exceeding the maximum time limit.</li>
						<li>Vulgarity is strictly prohibited.</li>
						<li>The judges' decision will be final and binding.</li>
					</ul>
				</div>
				<div id="nukkadnaatak-rules" class="category-text">
					<ul>
						<li><b>Category: Gold</b></li>
						<li><b>Number of Participants: 8 - 15</b></li>
						<li><b>Maximum number of entries per college: 1</b></li>
						<li><b>Registration: On the spot/ Online (Registrations close one hour before the event)</b></li>
						<li><b>Duration: 20 minutes per team</b></li>
						<hr />
						<li>The play should contain a social message.</li>
						<li>No musical instrument utilizing electric power is allowed. Any other musical instrument (including unconventional ones like plates, spoons, etc.) are allowed and will be considered as a prop.</li>
						<li>No pre-recorded music or voices are allowed.</li>
						<li>A maximum of <b>10 different kinds</b> of props can be used.</li>
						<li><b>Prop:</b> Any item or object used apart from the costume would be considered as prop. If a book is a prop then a collection of books would also be considered as one single prop.</li>
						<li>Use of costumes of different kind, apart from the general costume of the participants, shall also be considered as props. Each different kind of costume shall be considered as a prop. However, variety in colours of the same kind of costume is not considered as an additional prop.</li>
						<li>Language used can be either English or Hindi.</li>
						<li><b>Points will be deducted for vulgarity.</b></li>
						<li>The judges' decision will be final and binding.</li>
					</ul>
				</div>
				<div id="moviespoof-rules" class="category-text">
					<ul>
						<li><b>Category: Silver</b></li>
						<li><b>Number of Participants: 6, plus 2 backstage</b></li>
						<li><b>Maximum number of entries per college: Unlimited</b></li>
						<li><b>Registration: On the spot/ Online (Registrations close one hour before the event)</b></li>
						<li><b>Duration: 12 minutes per team</b></li>
						<hr />
						<li>Teams can act in Hindi or English.</li>
						<li>The team may choose any one movie from the given list (available on the main Movie Spoof tab) for the spoof.</li>
						<li>Eliminations will include a small scene from the play to be performed before the judges. This shall take place a day prior to the event. Maximum of <b>6 teams</b> will be selected for the finals.</li>
						<li><b>No props</b> shall be provided. Teams have to arrange for their own props. </li>
						<li>Teams should report <b>30 minutes</b> before the final round of the event begins.</li>
						<li>Use of costumes of different kind, apart from the general costume of the participants, shall also be considered as props. Each different kind of costume shall be considered as a prop. However, variety in colours of the same kind of costume is not considered as an additional prop.</li>
						<li><b>Points will be deducted for vulgarity.</b></li>
						<li>The judges' decision will be final and binding.</li>
					</ul>
				</div>
				<div id="rendezvous-rules" class="category-text">
					<ul>
						<li><b>Category: Silver</b></li>
						<li><b>Number of Participants: 1 per team</b></li>
						<li><b>Maximum number of entries per college: Unlimited</b></li>
						<li><b>Registration: On the spot / Online</b></li>
						<li><b>Duration: 1 minute per participant</b></li>
						<hr />
						<li><b>All performances have to be based on a set of characters provided beforehand on the website. Participants should imitate only these personalities.</b></li>
						
						<b>Elimination Round:</b>
						<li>The participants will be required to present a monologue for <b>1 minute</b>, after which they will be asked rapid fire questions about the personality.</li>
						<li>Dressing up as the personality would be attract more points.</li>
						<li><b>10 participants</b> will make it to the final round.</li>
						
						<b>Final Round:</b>
						<li>The participant has to present a monologue for <b>2 minutes</b>. (including a 30 second self-introduction)</li>
						<li>The participants shall be divided in groups of 5 each and will be interviewed by the host.</li>
						<li>This will be followed by a few rounds that will be announced after the eliminations.</li>
						<li><b>The participants are requested to get their facts right regarding the personality. Not doing this may lead to deduction of points.</b></li>
						<li><b>Points will be deducted for vulgarity.</b></li>
					</ul>
				</div>
				<div id="skime-rules" class="category-text">
					<ul>
						<li><b>Category: Silver</b></li>
						<li><b>Number of Participants: 6 - 8 including instrumentalists, plus 2 backstage</b></li>
						<li><b>Maximum number of entries per college: 1</b></li>
						<li><b>Registration: Online</b></li>
						<li><b>Duration: 12 minutes per team (including set up time for each scene)</b></li>
						<hr />
						<li>Eight members may be on stage and two others have to be off stage.</li>
						<li>There are no restrictions in the costumes.</li>
						<li>The teams may use movie songs and slideshows to support their plot.</li>
						<li>The use of a synthesizer or any other musical instrument is allowed.</li>
						<li>No recognizable voices can be used by participants. (But sounds like dog barks are allowed)</li>
						<li>Use of costumes of different kind, apart from the general costume of the participants, shall also be considered as props. Each different kind of costume shall be considered as a prop. However, variety in colours of the same kind of costume is not considered as an additional prop.</li>
						<li><b>Any sort of vulgarity will result in disqualification of the team.</b></li>
						<li><b>Skime is not a conventional mime. It has the relaxed rules mentioned above. No other rules of conventional mime need to be followed.</b></li>
						<li>The judges' decision will be final and binding.</li>
					</ul>
				</div>
				<!-- Drama Rules End -->
				<!-- Literary Rules -->
				<div id="thejoust-rules" class="category-text">
					<ul>
						<li><b>Category: Gold</b></li>
						<li><b>Number of Participants: 2 per team</b></li>
						<li><b>Maximum number of entries per college: Unlimited</b></li>
						<li><b>Registration: On the spot / Online</b></li>
						<li><b>Duration: Details mentioned below</b></li>
						<hr />
						<b>Round One:</b>
						<li>The First Round will consist of Round Table Debates, with either member of each team being for or against the motion.</li>
						<li>Each speaker will be given <b>3 minutes</b> to put forth his argument.</li>
						<li><b>8 teams</b> will qualify for the next round, based on their scores that will be normalised with respect to the other debates.</li>
						
						<b>Round Two:</b>
						<li>The 8 teams that qualify will debate an issue/crisis with assigned lobby positions.</li>
						<li><b>Teams will make five minute opening speeches, followed by a rebuttal of three minutes, and closing arguments of two minutes.</b></li>
						<li><b>4 teams</b> will qualify for the finals.</li>
						
						<b>Final Round:</b>
						<li>The final will be in the form of a <b>Parliamentary Style Debate.</b></li>
					</ul>
				</div>
				<div id="funspeak-rules" class="category-text">
					<ul>
						<li><b>Category: Bronze</b></li>
						<li><b>Number of Participants: 1 per team</b></li>
						<li><b>Maximum number of entries per college: Unlimited</b></li>
						<li><b>Registration: On the spot / Online</b></li>
						<li><b>Duration: Details mentioned below</b></li>
						<hr />
						<b>Round One:</b>
						<li>The participant will begin with one word and be given <b>two</b> more one after the other to string together in an innovative, witty and funny way during the course of his speech.</li>
						<li><b>24 participants</b> qualify for the next round.</li>
						<li><b>Time limit: 60 seconds</b></li>
						
						<b>Round Two:</b>
						<li>The participants who have qualified for this round are split into groups of 3. Each group has to compete in a <b>shipwreck round</b>.</li>
						<li>In shipwreck, each participant of a group will be assigned a personality, <b>on the spot</b> (e.g. Paris Hilton's Chihuahua) and the Top 8 are selected for the finals.</li>
						<li>All are presumed to be on a sinking ship. They have to justify to the judges why they should be saved in place of the others.</li>
						<li>The survivors from each group qualify for the finals.</li>
						<li><b>Time limit : 60 seconds</b></li>
						
						<b>Final Round One: Dub Dilemma</b>
						<li>Participants will be divided into 2 groups of 4 people each and shown a video clip.</li>
						<li>They will be randomly allotted a character in the video clip and are then supposed to fill in the dialogues with witty conversation of their own imagination.</li>
						
						<b>Final Round Two: Taboo Block 'N Tackle</b>
						<li>The participant will have to speak for or against a given topic and will have to change when the event manager instructs them to do so according to the keyword <b>(block means for and tackle means against)</b> but they are not allowed to use certain words, which they will be told beforehand.</li>
						<li><b>Time limit: 60 seconds</b></li>
					</ul>
				</div>
				<div id="wordgames-rules" class="category-text">
					<ul>
						<li><b>Category: Silver</b></li>
						<li><b>Number of Participants: 2 per team</b></li>
						<li><b>Maximum number of entries per college: Unlimited</b></li>
						<li><b>Registration: On the spot / Online</b></li>

						<hr />
						<b>Elimination Round:</b>
						<li>A general booklet will be given to the teams comprising standard word games like anagrams, palindromes, etc.</li>
						<li><b>7 teams</b> will qualify for the final rounds, subject to a <b>maximum of 3 teams per college</b>.</li>
						
						<b>Final Round:</b>
						<li>Qualifying teams will be informed of the rules on the spot. There will be a scrabble component.</li>
					</ul>
				</div>
				<div id="inkstint-rules" class="category-text">
					<ul>
						<li><b>Category: Bronze</b></li>
						<li><b>Number of Participants: 1</b></li>
						<li><b>Maximum number of entries per college: Unlimited</b></li>
						<li><b>Registration: On the spot / Online</b></li>

						<hr />
						<b>Elimination Round:</b>
						<li>There are 2 categories, <b>prose</b> and <b>poetry</b>, participants may take part in <b>only one</b>.</li>
						<li><b>Prose:</b> Participants have to write a work of fiction based on a given theme.</li>
						<li><b>Poetry:</b> The participants will be given a number of related themes to link through a poem.</li>
						<li><b>8 participants</b> will qualify for the final rounds, from each category.</li>
						
						<b>Final Round:</b>
						<li>The rules for this round will be revealed to the finalists after the eliminations.</li>
					</ul>
				</div>
				<div id="jam-rules" class="category-text">
					<ul>
						<li><b>Category: Silver</b></li>
						<li><b>Number of Participants: 1</b></li>
						<li><b>Maximum number of entries per college: Unlimited</b></li>
						<li><b>Registration: On the spot / Online</b></li>

						<hr />
						<b>Elimination Round:</b>
						<li>Participants shall be grouped in sets of 6. (can be increased to a maximum 8 if required)</li>
						<li>Each group shall go through one set of regular jam and one special round like an Alphabet JAM, or a Disconnect JAM. <b>2 participants</b> with the maximum points at the end of three rounds proceed to finals.</li>
						<li>Finalists are chosen on the basis on their position amongst all the participants and not just their group.</li>
						
						<b>Final Round:</b>
						<li>The final participants shall then have 5 rounds of jamming, at the end of which the positions shall be declared.</li>
						<li>Points will be awarded on the duration for which a contestant speaks without making grammatical errors, slurring etc. and not on content.</li>
						<li>The JAM Master's decision will be final and binding.</li>
						<li><b>Vulgarity is strictly prohibited and may result in disqualification.</b></li>
					</ul>
				</div>
				<div id="presscorps-rules" class="category-text">
					<ul>
						<li><b>Category: Gold</b></li>
						<li><b>Number of Participants: 2 per team</b></li>
						<li><b>Maximum number of entries per college: Unlimited</b></li>
						<li><b>Registration: On the spot / Online</b></li>

						<hr />
						<b>Round One (Day One):</b>
						<li>All the participants will be given three newspapers each, corresponding to three days of the week.</li>
						<li>Each team will get newspapers corresponding to the same three days, to ensure uniformity.</li>
						<li>Teams will have to come up with one headline derived from words of the headlines taken from each of the three newspapers, and one interesting photograph, and then write a 200 word piece of serious writing on that headline connecting it with the chosen photograph.</li>
						<li>The top <b>8 teams</b> make it to the second round.</li>
							
						<b>Round Two (Day Two):</b>
						<li>Each of the 8 teams will be given an event to cover.</li>
						<li>They will be given 15 minutes to cover the event with a minimum of 2 minutes coverage time.</li>
						<li>Teams must return within the stipulated time with their video coverage, failing which 5% of the score will be deducted for every two minutes they exceed.</li>
						
						<b>Round Three (Day Three):</b>
						<p>Each team must bring out a full colour e-newsletter, the theme of which will be given on the spot. The newsletter must include:</p>
						<li><b>Editorial</b></li>
						<p>Editorials must be well reasoned and well researched, and express a clear and cogent point of view. The editorials must be opinion pieces, the length of which must be inspired by that in the national dailies; entries cannot be long, in-depth articles or feature stories.</p>
						<li><b>Feature Article</b></li>
						<p>A background or mood article as opposed to a conventional news story or personality profile, detailing the theme and purpose of the issue.</p>
						<li><b>Event Coverage</b></li>
						<p>The team must cover one event of Waves, which will be specified to them by random lottery, and write an article detailing and reviewing/analyzing the event, with clear reasoning to back their review/analysis.</p>
						<li><b>Interview</b></li>
						<p>Teams will be asked to interview a personality visiting campus during Waves. The personality specified to each team will again be chosen by drawing lots. The interview must then be transcribed in the form of an analytical article, not as a conventional test paper question and answer pattern.</p>
						<li><b>Opinion Poll</b></li>
						<p>Teams will have to choose a topic for their opinion poll keeping in mind the theme and backdrop of the newsletter. Teams must record the number of votes, and submit recorded proof of the same, in either audio or video format.</p>
					</ul>
		
				</div>
				<!-- Literary Rules End -->
				<!-- Dance Rules -->
				<div id="sizzle-rules" class="category-text">
					<ul>
						<li><b>Category: Gold</b></li>
						<li><b>Number of Participants: 1 per team</b></li>
						<li><b>Maximum number of entries per college: 2</b></li>
						<li><b>Registration: On the spot / Online</b></li>

						<hr />
						<b>Elimination Round:</b>
						<li>Participants are required to perform a <b>3 - 5 minute</b> long prepared sequence.</li>
						<li><b>No classical dance forms are allowed.</b></li>
						<li>This round of the event is performed behind closed doors before the judges only.</li>
						<li>The dance soundtracks are to be submitted to the event manager at the time of registration.</li>
						
						<b>Final Round One:</b>
						<li>The same 3 - 5 minute long prepared dance sequence has to be performed again, this time <b>in front of an audience</b>.</li>
						
						<b>Final Round Two | Virtual Dancer:</b>
						<li>The participants are given a fused soundtrack of a maximum length of 2 minutes.</li>
						<li>The participants must imagine a partner and dance accordingly.</li>
						
						<b>Final Round Three | Footloose:</b>
						<li>Two participants are simultaneously called on stage. The first participant dances to a song played on the spot while the other stays still. When a suitable signal is given, the first participant freezes and the second participant immediately begins dancing to the continuation of <b>the same song.</b></li>
						<li>When the song is changed, the entire process is repeated except, unlike earlier; the <b>second participant will have to begin</b> this time.</li>
						<li>In this way, the song is changed several times while the participants dance in an alternating manner.</li>
					</ul>
				</div>
				<div id="danceduo-rules" class="category-text">
					<ul>
						<li><b>Category: Silver</b></li>
						<li><b>Number of Participants: 2 per team</b></li>
						<li><b>Maximum number of entries per college: 1</b></li>
						<li><b>Registration: Online</b></li>

						<hr />
						<b>Elimination Round:</b>
						<li>Participants are required to perform a <b>3 - 5 minute</b> long prepared sequence.</li>
						<li>Couple dance forms completely based upon Salsa, Jazz, Tango, Jive, Foxtrot, Quickstep, Rock and Roll, Tap, Samba, Rumba, Waltz and Cha Cha are <b>not allowed.</b></li>
						<li>The judge may penalize the participants if he/she feels that one or more of these dance forms has been used extensively.</li>
						<li>The use of props is allowed. However they do not carry any extra points. The usage of any kind of props must be notified to the event manager beforehand.</li>
						<li>Both the participants must be on stage during the entire performance.</li>
						<li>The number of finalists will depend on the number of participating teams.</li>
												
						<b>Final Round One:</b>
						<li>Participants are required to perform a <b>3 - 5 minute</b> long prepared sequence.</li>
						<li>Couple dance forms completely based upon Salsa, Jazz, Tango, Jive, Foxtrot, Quickstep, Rock and Roll, Tap, Samba, Rumba, Waltz and Cha Cha are <b>not allowed.</b></li>
						<li>The judge may penalize the participants if he/she feels that one or more of these dance forms has been used extensively.</li>
						<li>The use of props is allowed. However they do not carry any extra points. The usage of any kind of props must be notified to the event manager beforehand.</li>
						<li>Both the participants must be on stage during the entire performance.</li>
						
						<b>Final Round Two:</b>
						<li>The participants are required to dance for <b>2 - 3 minutes</b> to a song sequence provided to them after the results of the first round.</li>
						<li>There will be a <b>partition</b> placed in between the two participants such that they <b>cannot see each other</b> during the performance.</li>
					</ul>
				</div>
				<div id="stepup-rules" class="category-text">
					<ul>
						<li><b>Category: Bronze</b></li>
						<li><b>Number of Participants: 1 per team</b></li>
						<li><b>Maximum number of entries per college: Unlimited</b></li>
						<li><b>Registration: On the spot / Online</b></li>

						<hr />
						<b>Elimination Round:</b>
						<li>Each participant will dance for <b>1 minute</b> to a song given to them on the spot.</li>
						<li>Top <b>16 performers</b> of this round will move forward to the next round.</li>
						
						<b>Final Round</b>
						<p>This round aims at judging both the <b>dancing ability</b> and the <b>adaptability</b> of the participants so that they can prove their mettle in a short period of time to continue to be in the race for the winner's spot.</p>
						
						<b>Final Round One:</b>
						<li>All 16 participants will be divided into <b>4 groups</b> comprising of <b>4 participants each.</b></li>
						<li>Each participant in the group has to perform in a <b>given area.</b> If a participant steps out of the area, he/she shall be warned once. If the offence is repeated, the participant will be <b>eliminated immediately.</b></li>
						<li>One group will perform at a time where all 4 participants in that group dance simultaneously on a tune provided to them.</li>
						<li>One participant will be eliminated every 30/45 seconds.</li>
						<li>Top <b>2 performers</b> of every group, for a total of 8 people, will move to the next round.</li>
						
						<b>Final Round Two:</b>
						<li>All 8 participants will be divided into <b>2 groups</b> comprising of <b>4 participants</b> each.</li>
						<li>Each participant in the group has to perform in a <b>given area.</b> If a participant steps out of the area, he/she shall be warned once. If the offence is repeated, the participant will be <b>eliminated immediately.</b></li>
						<li>One group will perform at a time where all 4 participants in that group dance simultaneously on a tune provided to them.</li>
						<li>One participant will be eliminated every 30/45 seconds.</li>
						<li>Top <b>2 performers</b> of every group, for a total of 4 people, will move to the next round.</li>
					
						<b>Final Round Three:</b>
						<li>All 4 performers will perform simultaneously and every 45 seconds one person will be eliminated.</li>
						<li>Each participant has to perform in a <b>given area.</b> If a participant steps out of the area, he/she will be warned once. If the offence is repeated, the participant will be <b>eliminated immediately.</b></li>
						<li>The top two performers of this round will move to the final round.</li>
						
						<b>Final Round Four:</b>
						<li>The two finalists battle it out simultaneously for <b>at least 1 minute</b> and are marked on specific criteria like skill, adaptability, energy level, creativity and perform until one is eliminated or bows out.</li>
					</ul>
				</div>
				<!-- Dance Rules End -->
				<!-- Event Rules End -->
				<!-- Event Contacts -->
				
				<!-- Literary Contacts -->
				<div id="presscorps-contact" class="category-text">
					<p><b>T Dhruva</b></p>
					<p>dhruva92@gmail.com</p>
					<p>+91 9503817694</p>
				</div>
				<div id="inkstint-contact" class="category-text">
					<p><b>Arka Bhattacharyya</b></p>
					<p>arkab.24@gmail.com</p>
					<p>+91 9657292217</p>
				</div>
				<div id="jam-contact" class="category-text">
					<p><b>Abhijeet Mehrotra</b></p>
					<p>abhijeet.meh@gmail.com</p>
					<p>+91 9637244231</p>
				</div>
				<div id="funspeak-contact" class="category-text">
					<p><b>Akshiv Avikshit</b></p>
					<p>arkab.24@gmail.com</p>
					<p>+91 9657292217</p>
				</div>
				<div id="wordgames-contact" class="category-text">
					<p><b>Varad Gunjal</b></p>
					<p>gunjal.varad@gmail.com</p>
					<p>+91 9527925825</p>
				</div>
				<div id="thejoust-contact" class="category-text">
					<p><b>Gauri Mukund Mangalgiri</b></p>
					<p>gaurimangalgiri@gmail.com</p>
					<p>+91 9823622609</p>
				</div>
				<!-- Literary Contacts End -->
				
				<!-- Music Contacts -->
				<div id="indianrock-contact" class="category-text">
					<p><b>Keshav Kinkar Sonbhadra</b></p>
					<p>+91 9960511571</p>
					<br/>
					<p><b>Tejendar Singh</b></p>
					<p>+91 9561935737</p>
					<br/>
					<p><b>Sundar T.S.</b></p>
					<p>+91 9637423679</p>
				</div>
				<div id="silenceoftheamps-contact" class="category-text">
					<p><b>P. Siddharth</b></p>
					<p>+91 9923655297</p>
					<br/>
					<p><b>Aseem Patil</b></p>
					<p>+91 9545470686</p>
				</div>
				<div id="animusic-contact" class="category-text">
					<p><b>Prashasti Baid</b></p>
					<p>+91 9040269014</p>
					<br/>
					<p><b>Manaswi Dobhal</b></p>
					<p>+91 9960031699</p>
					<br/>
					<p><b>Suraj Pawar</b></p>
					<p>+91 9922932701</p>				
				</div>
				<div id="saaz-contact" class="category-text">
					<p><b>Sreecharan S</b></p>
					<p>+91 9049268881</p>
					<br/>
					<p><b>Pooja Naik</b></p>
					<p>+91 9764167177</p>
					<br/>
					<p><b>Paanini Navilekar</b></p>
					<p>+91 9637423472</p>					
				</div>
				<div id="cantosolista-contact" class="category-text">
					<p><b>Prem Sarit Acharya</b></p>
					<p>+91 9850542475</p>
					<br/>
					<p><b>Vibhor Bajpai</b></p>
					<p>+91 9637423507</p>
					<br/>
					<p><b>Jayant Dalmia</b></p>
					<p>+91 9637244280</p>					
				</div>
                                <div id="sixstringshowdown-contact" class="category-text">
					<p><b>Pannini</b></p>
					<p>+91 9637423472</p>
					<br/>
					<p><b>Aseem</b></p>
					<p>+91 9545470686</p>                                 
                                </div>
				<!-- Music Contacts End -->

				<!-- Miscellaneous Contacts -->
				<div id="mezzotint-contact" class="category-text">
					<p><b>Hrishikesh Sinkar</b></p>
					<p>hrishikesh@bits-waves.org</p>
					<p>+91 9702061760</p>
				</div>
				<div id="thewallstreetfete-contact" class="category-text">
					<p><b>Hrishikesh Sinkar</b></p>
					<p>hrishikesh@bits-waves.org</p>
					<p>+91 9702061760</p>
				</div>
				<div id="looneytunes-contact" class="category-text">
					<p><b>Hrishikesh Sinkar</b></p>
					<p>hrishikesh@bits-waves.org</p>
					<p>+91 9702061760</p>
				</div>
				<div id="mumistheword-contact" class="category-text">
					<p><b>Hrishikesh Sinkar</b></p>
					<p>hrishikesh@bits-waves.org</p>
					<p>+91 9702061760</p>
				</div>
				<!-- Miscellaneous Contacts End -->

				<!-- Drama Contacts -->
				<div id="curtaincall-contact" class="category-text">
					<p><b>Nandkishore Prakash</b></p>
					<p>nandkishore_prakash@yahoo.com</p>
					<p>+91 9823137304</p>
                                        <br/>
					<p><b>Neha Nayak</b></p>
					<p>neha91@gmail.com</p>
					<p>+91 9657868838</p>
                                        <br/>
					<p><b>Maanit Mehra</b></p>
					<p>maanitm@gmail.com</p>
					<p>+91 9323228373</p>
				</div>
				<div id="nukkadnaatak-contact" class="category-text">
					<p><b>Kunal Agarwal</b></p>
					<p>india.kunal@gmail.com</p>
					<p>+91 9049268879</p>
                                        <br/>
					<p><b>Tejas Pandey</b></p>
					<p>tejpee@hotmail.com</p>
					<p>+91 9158900710</p>
				</div>
				<div id="moviespoof-contact" class="category-text">
					<p><b>Mudit Raj Gupta</b></p>
					<p>blackjack.mudit@gmail.com</p>
					<p>+91 9370257792</p>
                                        <br/>
					<p><b>Shweta Goyal</b></p>
					<p>shweta.goyal121@gmail.com</p>
					<p>+91 9049601198</p>
				</div>
				<div id="rendezvous-contact" class="category-text">
					<p><b>Dhairya Sanghvi</b></p>
					<p>dhairyasanghvi89@gmail.com</p>
					<p>+91 9049268838</p>
                                        <br/>
					<p><b>Tarosh Rao</b></p>
					<p>taroshrao@gmail.com</p>
					<p>+91 9637423577</p>
				</div>
				<div id="skime-contact" class="category-text">
					<p><b>Sikhil T.V</b></p>
					<p>sikhiltv@gmail.com</p>
					<p>+91 8007709623</p>
                                        <br/>
					<p><b>Supan</b></p>
					<p>Supanshah51191@gmail.com</p>
					<p>+91 9637244246</p>
				</div>
				<!-- Drama Contacts End -->
				
				<!-- Dance Contacts -->
				<div id="stepup-contact" class="category-text">
					<p><b>Abhinav Gupta</b></p>
					<p>abhinavgupta5289@gmail.com</p>
					<p>+91 9049268789</p>
                                        <br/>
					<p><b>Amit</b></p>
					<p>amit.fame03@gmail.com</p>
					<p>+91 9657293933</p>
				</div>
				<div id="sizzle-contact" class="category-text">
					<p><b>Pushya Mithra</b></p>
					<p>wallcrawler.spm@gmail.com</p>
					<p>+91 7798634825</p>
                                        <br/>
					<p><b>Garima Agarwal</b></p>
					<p>gariagarwal22@gmail.com</p>
					<p>+91 9637423505</p>
				</div>
				<div id="danceduo-contact" class="category-text">
					<p><b>Satyajeeth</b></p>
					<p>saty10pbpgc@gmail.com</p>
					<p>+91 8983862819</p>
                                        <br/>
					<p><b>Anuraag</b></p>
					<p>mailanuraagramesh@gmail.com</p>
					<p>+91 9552518825</p>
				</div>
				<!-- Dance Contacts End -->
				
				<!-- Art Contacts -->
				<div id="blindart-contact" class="category-text">
					<p><b>Tanmay Binaykiya</b></p>
					<p>+91 9689586968</p>
                                        <br/>
					<p><b>Raghav Nyati</b></p>
					<p>+91 9096882094</p>
				</div>
				<div id="primafacie-contact" class="category-text">
					<p><b>Sahil Deshpande</b></p>
					<p>kaushalsapre@gmail.com</p>
					<p>+91 9860531910</p>
                                        <br/>
					<p><b>Harshal Chaudhari</b></p>
					<p>harshvoldy@gmail.com</p>
					<p>+91 8976398268</p>
				</div>
				<div id="panorama-contact" class="category-text">
					<p><b>Suchismita Naik</b></p>
					<p>decapr2315@gmail.com</p>
					<p>+91 9767570723</p>
                                        <br/>
					<p><b>Vishal Sontakke</b></p>
					<p>+91 9673991691</p>
				</div>
				<div id="finetoon-contact" class="category-text">
					<p><b>Arvind Ranganathan</b></p>
					<p>kaushalsapre@gmail.com</p>
					<p>+91 9960747235</p>
                                        <br/>
					<p><b>Sharang Sharma</b></p>
					<p>sharangsharma09@gmail.com</p>
					<p>+91 9657270754</p>
				</div>
				<div id="artmarathon-contact" class="category-text">
					<p><b>Karan S Raghuvanshi</b></p>
					<p>+91 7709790810</p>
                                        <br/>
					<p><b>Yash Babar</b></p>
					<p>yashbabar5@gmail.com</p>
					<p>+91 9561431423</p>
				</div>
				<!-- Art Contacts End -->
				
				<!-- Quiz Contacts -->
				<div id="thewavesopenquiz-contact" class="category-text">
					<p><b>Shridhar Ramachandran</b></p>
					<p>rama.shridhar@gmail.com</p>
					<p>+91 9960534515</p>
                                        <br/>
					<p><b>Sohag Sen</b></p>
					<p>sohagsen.sen@gmail.com</p>
					<p>+91 9552518857</p>
				</div>
				<div id="thespentquiz-contact" class="category-text">
					<p><b>Shridhar Ramachandran</b></p>
					<p>rama.shridhar@gmail.com</p>
					<p>+91 9960534515</p>
                                        <br/>
					<p><b>Anirudh W</b></p>
					<p>vendetta.anirudh@gmail.com</p>
					<p>+91 8888312830</p>
                    <br/>
					<p><b>Aditya S</b></p>
					<p>adi1990@gmail.com</p>
					<p>+91 9561939907</p>
				</div>
				<div id="thevicesquiz-contact" class="category-text">
					<p><b>Ajachi Chakrabarti</b></p>
					<p>ajachi@gmail.com</p>
					<p>+91 9011060010</p>
                                        <br/>
					<p><b>Karthik Swaminathan</b></p>
					<p>fingon1123@gmail.com</p>
					<p>+91 9967545064</p>
				</div>
				<!-- Quiz Contacts End -->
				
				<!-- Big Four Contacts -->
				<div id="natyanjali-contact" class="category-text">
					<p><b>Anand S</b></p>
					<p>anandsatheendran@gmail.com</p>
					<p>+91 9960505889</p>
                                        <br/>
					<p><b>Avni</b></p>
					<p>becool.avni@gmail.com</p>
					<p>+91 9637244254</p>
				</div>
				<div id="fashionparade-contact" class="category-text">
					<p><b>Anish Barjatya</b></p>
					<p>anish.bitsgoa15@gmail.com</p>
					<p>+91 9049268884</p>
<br/>
					<p><b>Sakshi Agarwal</b></p>
					<p>sakshiagarwal001@gmail.com</p>
					<p>+91 9637423479</p>
<br/>
					<p><b>Devyani</b></p>
					<p>devyani1291@gmail.com</p>
					<p>+91 9823114368</p>
				</div>
				<div id="mrandmswaves-contact" class="category-text">
					<p><b>Ellora Nath</b></p>
					<p>ellora.nath@gmail.com</p>
					<p>+91 9923327002</p>
<br/>
					<p><b>Anubhav Khaduja</b></p>
					<p>myselfbeckhamowen@gmail.com</p>
					<p>+91 9049629482</p>
<br/>
					<p><b>Apurva Mudgal</b></p>
                    <p>apurva2609@gmail.com</p>
					<p>+91 9764002609</p>
				</div>
				<div id="searock-contact" class="category-text">
					<p><b>Kunal Bhatia</b></p>
					<p>kunal@bits-waves.org</p>
					<p>+91 9049268921</p>
				</div>
				<!-- Big Four Contacts End -->
				
				<!-- Event Contacts End -->
				<div class="back-home"><hr /><h3><a href="javascript:void(0)">Go Back Home</a></h3></div>
				<div class="download-rulebook"><hr /><h3><a href="/files/waves2010-rulebook.pdf">Download The Rulebook</a></h3></div>
			</div>
                        <!-- Events End -->
                        
                        <!-- Workshops -->
                        <div id="workshop-categories">

				<!-- Top Navigation -->
				<div id="workshops-top-navigation">
					<ul>
						<li><a href="javascript:void(0)">Organizers</a></li>
                                                <li><a href="javascript:void(0)">Contact</a></li>
					</ul>
				</div>
				<!-- Top Navigation End -->
				
				<!-- Workshop List -->
                                <div id="workshops-list" class="category-event-list">
					<ul>
                                                <li><a href="javascript:void(0)">Happy Feet</a></li>
                                                <li><a href="javascript:void(0)">Ventriloquism</a></li>
                                                <li><a href="javascript:void(0)">Fashion & Grooming</a></li>
                                                <li><a href="javascript:void(0)">Theatre Art</a></li>
						<li><a href="javascript:void(0)">Hands Of Fortune</a></li>
                                                <!-- <li><a href="javascript:void(0)">Nostradamus' Numbers</a></li> -->
						<!-- <li><a href="javascript:void(0)">Air Waves</a></li> -->
						<li><a href="javascript:void(0)">A Thousand Folds</a></li>
                                                <li><a href="javascript:void(0)">Freeze</a></li>
						<li><a href="javascript:void(0)">Three Sixty</a></li>
						<li><a href="javascript:void(0)">3D Siporex Art</a></li>
                                                <!--<li><a href="javascript:void(0)">Spiced Up</a></li>-->
                                        </ul>
				</div>
				<!-- End Workshops List -->
								
				<!-- Workshops Content -->
                                <div id="workshops-main" class="category-text">
                                        <p>In this exhilarating celebration of life, the Waves 2010 team brings to you a plethora of workshops designed to enhance your knowledge and skill levels in fields lying well beyond the realm of classrooms and laboratories. Feats, acts and demonstrations which you've always admired from a safe distance, will be at your fingertips. From making masterpieces with just pieces of paper and your bare hands, to speaking through someone elses mouth; you'll take away experiences that'll last a lifetime.</p>
                                </div>
				<div id="ventriloquism" class="category-text">
					<p>This ancient art has its roots in religious practices of the Greeks, thought to be the voice of the dead and branded a witchcraft,  it has evolved today into one of the most popular  form of entertainment  and has donned the garb of comedy.  Come Waves and an opportunity to learn the mystique art of ventriloquism. Learn to manipulate perception, to throw your voice and give life to your puppet.</p>
				</div>
                                <div id="fashiongrooming" class="category-text">
					<p>Grooming and etiquette is something most take for granted. How we carry and present ourselves socially matters. And since first impressions count, the manner in which you present yourself makes a big difference. So coming this Waves is a professional to help you navigate your way through the sometimes confusing rules of grooming and etiquette.</p>
				</div>
                                <div id="theatreart" class="category-text">
                                        <p><b>Dialogue Rendition</b></p>
					<p>The stage lit up, tales enacted , characters born, props created, creativity unleashed, audience mesmerized, passion found and shared; want to be a part of it all? The theatre arts workshop is designed to guide the artist in you. With a special emphasis on dialogue delivery, rendition is an oppurtunity to hone your skills under the expertise and guidance of the master himself.</p>    
				</div>
                                <div id="radiojockeying" class="category-text">
					<p>Voice has magic, voice has power. It's unique and it captivates minds . Learn to modulate your voice, liven up and seduce the crowd this Waves. Considered a  hot career path in today's world and a route to fame, RJing is an art where the garrulous rule. Are you game? Test and hone your skills in this workshop and have endless fun.</p>
				</div>
                                <div id="athousandfolds" class="category-text">
					<p>The ancient art of origami is a beauty to behold and akin to a philosophy: that anything can be naturally molded to our desire. Learn to metamorphose simple square pieces of paper into breathtaking designs by sculpting paper using intricate folds. No cuts, no glue; just the sheer skill of hand to lend the model its shape and splendor.</p>
				</div>
                                <div id="freeze" class="category-text">
					<p>Although you can't fast-forward life, you can speed up time in your movies with time-lapse photography. This video technique compresses hours of action into mere seconds; clouds roll overhead, the sun races towards the horizon, and flowers bloom before your eyes. Eager to learn the techniques? Register for the time lapse photography workshop and create moments of unsurpassed beauty.</p>
				</div>
                                <div id="3dsiporexart" class="category-text">
					<p>Carve light weight cement blocks and add a dash of colour to give shape to your ideas. Feel the blocks give way to your creation, watch the paint heighten it's essence. Experience exhilaration at this workshop that would surely bring out the artist in you and fill the hours with fun and creation.</p>
				</div>
                                <div id="threesixty" class="category-text">
					<p>Do you long to capture the wider perspective? Crave to transcend the barriers of the human eye?  Here comes a workshop will teach you to capture the essence of a panorama by stitching photos together.   Enter the enthralling world of panoramic photography and merge your snapshots seamlessly together to create the complete 360 degree view.</p>
				</div>
                                <div id="handsoffortune" class="category-text">
					<p><b>Palmistry:</b> It's a foggy future, filled with uncertainty and doubt. What would we not give to have a glimpse of it? The palmistry workshop is here to help dispel the fog with light of revelations. The signs of our future are writ in our own hands, a confounding unique pattern that can be unraveled only by knowing eyes. Believe in it or not, register for this workshop for two hours full of fun and foretelling.</p>
				        <p><b>Numerology:</b> Numbers are ubiquitous, numbers are the essence of the universe, numbers are facts and numbers are linked with our lives.  Learn about the power of numbers and manipulate them to your advantage in this workshop to brighten your life.</p>
				</div>
                                <div id="happyfeet" class="category-text">
                                    <p>Register for the 4 dance workshops to revel in the waves of music and dance. Pick from the styles on offer this time:</p>
                                    <ul>
                                        <li>
                                            <b>Waka Waka</b><br />
                                            <p>Waka Waka, a recent rage, has its origin in the sensous Egyptian belly dance. It has dazzled millions and drawn thousands to its intoxicating folds. Come waves and an opportunity to break free, enjoy and express yourself through this dance form. (only for girls)</p>
                                        </li>
                                        <li>
                                            <b>Jazz Funk</b><br />
                                            <p>A hybrid of hip hop and jazz dance, it combines the best in both and takes dancing experience to a whole new level. The latest craze among dance lovers, jazzfunk is elegant, fiery, soulful and vibrant. Participate in the workshop to learn this emerging dance form.</p>
                                        </li>
                                        <li>
                                            <b>Jive</b><br />
                                            <p>Lively and spirited, it's the fastest and the most enjoyable ball room dance. Twirl to the rhythm, kick to the beat and unwind yourself this Waves. Waves brings to you an opportunity to gear up, sway your body, rock your hips and give yourself to merriment.</p>
                                        </li>
                                        <li>
                                            <b>Contemporary</b><br />
                                            <p>Contemporary dance is characterised by its versatality and is a nebulous style of dance. Contemporary can be danced to almost any style of music, or united with other dance forms to create new styles of movement. It opens a greater range of fluidity and balance and at the same time, the ease of movement promoted by this technique allows begginers to explore the natural energy and emotions of their bodies to establish a mind-body connection.</p>
                                        </li>
                                    </ul>
				</div>
                                <div id="spicedup" class="category-text">
					<p>Cookery is an art &ndash; the metamorphosis of the raw and the plain into a sensuous meal. A dash of sugar, spice and everything nice &ndash; voila! a delicious spread. The cookery workshop is here to shake up your culinary skills and spice up your life.</p>
				</div>
				<!-- Workshops Content End -->
				
				<!-- Who -->
				<div id="ventriloquism-organizers" class="category-text">
					<p><b><a href="http://ventriloquiallyyours.blogspot.com/2009/02/george-shanthakumar-new-vent-friend.html" target="_blank">George Shanthakumar</a></b></p><hr />
                                        <p>A banker by profession and ventriloquist by passion, our guest this waves has mastered the art of ventriloquism for over 13 years now. With over 3000 performances, including many shows on national channels with his talking 'puppet friends', George Shathakumar is a known name in the field of ventriloquism. Apart from having entertained large and varied crowd for years now, he has also used his dolls to teach positive thinking and lateral thinking. Don't miss this!</p>
				</div>
                                <div id="fashiongrooming-organizers" class="category-text">
					<p><i>A fashion modeling, entertainment industry grooming and image building workshop by India's leading fashion choreographer, <strong><a href="www.kaushikghosh.com" target="_blank">Kaushik Ghosh</a></strong>.</i></p><hr />
                                        <p><a href="http://www.kaushikghosh.com" target="_blank">Kaushik Ghosh</a>, India's top fashion choreographer and internationally renowned model trainer has choreographed around 1500 most prestigious fashion shows all over the world featuring Bollywood stars, television actors, Miss India's, Mr. India's and international supermodels from Australia, China, Canada, Russia, Europe, South Africa & USA. He has conducted more than 350 workshops in 66 cities all over the world, which have produced a number of supermodels, movie stars and fashion personalities.</p>
				</div>
                                <div id="theatreart-organizers" class="category-text">
                                        <p><b><a href="http://www.thespo.org" target="_blank">Quasar Thakore Padamsee | Thespo 12</a></b></p><hr />
                                        <p>From a one-evening event to a weeklong multi-city celebration of the best youth theatre in the country, Thespo has come a long way. The best kind of platform that any and every young person, interested in any and all aspects of the theatre would want is here at Waves 2010. Quasar Thakore Padamsee, son of Alyque Padamsee and Dolly Thakore, would be here to teach us the tricks of the trade. It would be a dream come true for most of us to have an actor of his callibre and background dishing out his wisdom.</p>
				</div>
                                <div id="nostradamusnumbers-organizers" class="category-text">
                                       <p><b><a href="http://www.bejandaruwalla.com" target="_blank">Bejan Daruwalla</a></b></p><hr />
                                        <p>Bejan Daruwalla is the world's most famous astrologer today and appears regularly on international T.V shows. He is also a best-selling author and columnist. Currently his articles are published  in a number of newspapers in India, London and New York. This Waves, the man himself will reveal what the stars have in store for you.</p> 
				</div>
                                <div id="athousandfolds-organizers" class="category-text">
                                        <p><b><a href="http://www.flickr.com/photos/akhil_origami/" target="_blank">Akhil Oswal</a></b></p><hr />
                                        <p>Akhil Oswal has been folding for the last 10 years and is one of the few origami artists of India today. He has been designing his own models since a year. He recently stood second by public voting in an internationally acclaimed design challenge conducted by OrigamiUSA (5OSME Merlion Challenge). Check out his <a href="http://www.flickr.com/groups/1406561@N23/pool/with/4638878472/" target="_blank">award-winning work!</a></p> 
				</div>
                                <div id="freeze-organizers" class="category-text">
                                        <p><b><a href="http://3dindia.com/" target="_blank">Hitesh Gusani</a></b></p><hr />
                                        <p>A graphic designer by profession his passions include adventure, arts, movies, photography, travelling and lots more, Hitesh Gusani has conducted numerous workshops on 3D, panoramic, time lapse, creative and general photography all over the country. He is the Technical Head and In-charge, Research and Development at 3D India.</p>
				</div>
                                <div id="threesixty-organizers" class="category-text">
                                        <p><b><a href="http://3dindia.com/" target="_blank">Hitesh Gusani</a></b></p><hr />
                                        <p>A graphic designer by profession his passions include adventure, arts, movies, photography, travelling and lots more, Hitesh Gusani has conducted numerous workshops on 3D, panoramic, time lapse, creative and general photography all over the country. He is the Technical Head and In-charge, Research and Development at 3D India.</p>
				</div>
                                <div id="3dsiporexart-organizers" class="category-text">
                                        <p><b><a href="http://www.bharatrawal.com/" target="_blank">Bharat Rawal</a></b></p><hr />
                                        <p>He is a Fine Artist, Art Consultant, Interior and Landscape Designer and is the
Founder and Principal of School of Fine Arts and Interior Design, Pune. He introduced the 3D Ceramic Art
Type in India and has self developed a kind of Resin Clay. His work has been exhibited in various solo and
group exhibitions all over India.</p>
				</div>
                                <div id="handsoffortune-organizers" class="category-text">
                                        <p><b><a href="http://www.bejandaruwalla.com" target="_blank">Bejan Daruwalla</a></b></p><hr />
                                        <p>Bejan Daruwalla is the world's most famous astrologer today and appears regularly on international T.V shows. He is also a best-selling author and columnist. Currently his articles are published  in a number of newspapers in India, London and New York. This Waves, the man himself will reveal what the stars have in store for you.</p>
				</div>
                                <div id="happyfeet-organizers" class="category-text">
                                        <p><b><a href="http://www.katie-holland.net" target="_blank">Katie Holland</a></b></p><hr />
                                        <p>A workshop by the world famous belly dancer Katie Holland from the UK. Highly in demand across India and Europe as a teacher and performer, Katie has studied many forms of dance and specialises in fusing styles including Bellydance, Bollywood, Samba and African.</p>
                                        <p><b><a href="http://www.splitsole-da.com" target="_blank">Dhiraj Bakshi | Split Sole Academy</a></b></p><hr />
                                        <p>Dhiraj Bakshi has trained in Ballet, Contemporary, Jazz Funk, Lyrical and multiple Ballroom styles. He has also been a faculty member and associated with the Terence Lewis Contemporary Dance Company and The Danceworx Academy. He has attended an array of workshops with international instructors from all over the world, with the likes of Jann Freeman (USA), Suraiya Franco (Dominican Republic) and Jacqueline Bird (USA).</p>
                                        <p><i>Split Sole Dance Academy (SSDA) has been founded by Dhiraj Bakshi. It's a jazz based dance academy with strong technique. They have also performed at the esteemed Kala Ghoda Arts Festival 2010, this year and at the Salsa fiesta.</i></p>
                                </div>
                                <div id="spicedup-organizers" class="category-text">
                                        <p><b><a href="http://www.marriott.com/hotels/travel/goimc-goa-marriott-resort" target="_blank">The Marriott | Goa</a></b></p><hr />
                                        <p>Learn cooking some mouth-watering delicacies from the chef of the 5 star Goa Marriott resort; one of Goa's finest hotels.</p>
				</div>
				<!-- Who End -->
				
				<!-- Workshops Contacts -->
				<div id="ventriloquism-contact" class="category-text">
					<p><b>Priyank Hirani</b></p>
					<p>priyank@bits-waves.org</p>
					<p>+91 9049268795</p>
                                        <hr />
					<p><b><a href="http://ventriloquiallyyours.blogspot.com/2009/02/george-shanthakumar-new-vent-friend.html" target="_blank">George Shanthakumar</a></b></p><hr />                                       
				</div>
                                <div id="fashiongrooming-contact" class="category-text">
					<p><b>Priyank Hirani</b></p>
					<p>priyank@bits-waves.org</p>
					<p>+91 9049268795</p>
                                        <hr />
                                        <p><b><a href="http://www.kaushikghosh.com" target="_blank">Kaushik Ghosh</a></b></p>                                       
				</div>
                                <div id="nostradamusnumbers-contact" class="category-text">
					<p><b>Priyank Hirani</b></p>
					<p>priyank@bits-waves.org</p>
					<p>+91 9049268795</p>
                                        <hr />
                                        <p><b><a href="http://www.bejandaruwalla.com" target="_blank">Bejan Daruwalla</a></b></p>
				</div>
                                <div id="handsoffortune-contact" class="category-text">
					<p><b>Priyank Hirani</b></p>
					<p>priyank@bits-waves.org</p>
					<p>+91 9049268795</p>
                                        <hr />
                                        <p><b><a href="http://www.bejandaruwalla.com" target="_blank">Bejan Daruwalla</a></b></p>
				</div>
                                <div id="athousandfolds-contact" class="category-text">
					<p><b>Priyank Hirani</b></p>
					<p>priyank@bits-waves.org</p>
					<p>+91 9049268795</p>
                                        <hr />
                                        <p><b><a href="http://www.flickr.com/photos/akhil_origami/" target="_blank">Akhil Oswal</a></b></p>
				</div>
                                <div id="radiojockeying-contact" class="category-text">
					<p><b>Priyank Hirani</b></p>
					<p>priyank@bits-waves.org</p>
					<p>+91 9049268795</p>
				</div>
                                <div id="theatreart-contact" class="category-text">
					<p><b>Priyank Hirani</b></p>
					<p>priyank@bits-waves.org</p>
					<p>+91 9049268795</p>
                                        <hr />
                                        <p><b><a href="http://www.thespo.org" target="_blank">Quasar Thakore Padamsee | Thespo12</a></b></p>
				</div>
                                <div id="freeze-contact" class="category-text">
					<p><b>Priyank Hirani</b></p>
					<p>priyank@bits-waves.org</p>
					<p>+91 9049268795</p>
                                        <hr />
                                        <p><b><a href="http://3dindia.com/" target="_blank">Hitesh Gusani</a></b></p>
				</div>
                                <div id="3dsiporexart-contact" class="category-text">
					<p><b>Priyank Hirani</b></p>
					<p>priyank@bits-waves.org</p>
					<p>+91 9049268795</p>
                                        <hr />
                                        <p><b><a href="http://www.bharatrawal.com/" target="_blank">Bharat Rawal</a></b></p>
				</div>
                                <div id="threesixty-contact" class="category-text">
					<p><b>Priyank Hirani</b></p>
					<p>priyank@bits-waves.org</p>
					<p>+91 9049268795</p>
                                        <hr />
                                        <p><b><a href="http://3dindia.com/" target="_blank">Hitesh Gusani</a></b></p>
				</div>
                                <div id="spicedup-contact" class="category-text">
					<p><b>Priyank Hirani</b></p>
					<p>priyank@bits-waves.org</p>
					<p>+91 9049268795</p>
                                        <hr />
                                        <p><b><a href="http://www.marriott.com/hotels/travel/goimc-goa-marriott-resort" target="_blank">The Marriott</a></b></p>
				</div>
                                <div id="happyfeet-contact" class="category-text">
					<p><b>Priyank Hirani</b></p>
					<p>priyank@bits-waves.org</p>
					<p>+91 9049268795</p>
                                        <hr />
                                        <p><b><a href="http://www.katie-holland.net" target="_blank">Katie Holland</a></b> (Waka Waka)</p>
                                        <p><b><a href="http://www.splitsole-da.com" target="_blank">Split Sole Dance Academy</a></b>  (Jazz Funk, Jive, Contemporary)</p>
				</div>
				<!-- Workshops Contacts End -->
				
				<div class="back-home"><hr /><h3><a href="javascript:void(0)">Go Back Home</a></h3></div>
			</div>
                        <!-- Workshops End -->
                        
                        <!-- Specials -->
                        <div id="special-categories">
				
				<!-- Special List -->
                                <div id="specials-list" class="category-event-list">
										<ul>
                                                <li><a href="javascript:void(0)">Bazinga</a></li>
												<li><a href="javascript:void(0)">Nirvana</a></li>
                                                <li><a href="javascript:void(0)">Flavours</a></li>
                                                <li><a href="javascript:void(0)">Insomnia</a></li>
                                                <li><a href="javascript:void(0)">Blue Chips</a></li>
                                                <li><a href="javascript:void(0)">The Waves Ball</a></li>
                                                <li><a href="javascript:void(0)">The Limca Challenge</a></li>
                                        </ul>
				</div>
				<!-- End Specials List -->
								
				<!-- Specials Content -->
                                <div id="specials-main" class="category-text">
                                        <p>The Specials at Waves; a diverse platter of unique spices seasoning the vibrant atmosphere. This year will see us set world records, compete with human canvases, and witness life lived on the very edge.</p>
                                </div>
				<div id="thelimcachallenge" class="category-text">
					<p>This Waves, get your name up in the record books as you take part in the 'Great Waves Arm Wrestling Challenge'. To be officiated by the Limca Book of World Records, this will feature an attempt to break the world record for the maximum number of people arm wrestling at the same time. Subsequently this will be made an event to find the strongest man in Waves.</p>
                                </div>
                                <div id="bazinga" class="category-text">
                                <p><b>Paintball Tournament</b></p>
                                <p>Do you want to experience a rush like never before? Satisfy all your primal instincts through the incredible excitement of actual combat! Get your guns out and your gear ready for paintball this Waves. <a href="http://www.headrush.in" target="_blank">Headrush PaintBall</a> brings you a truly professional paintball experience! Teams of five and a whole lot of aggression is all you require. To register your clan or to know more, send in your names to paintball@bits-waves.org</p>
				</div>
                                <div id="insomnia" class="category-text">
					<p>Creatures of the night, fear not. This Waves, we've designed a whole bunch of things to do, especially for you. So don't turn off the lights, the party's just begun.</p>    
				</div>
                                <div id="bluechips" class="category-text">
			        <p>Blue Chips at Waves 2010 gives you the perfect opportunity to flaunt your skills and win some awesome prizes. Bet your way through poker, or place the right wagers on game of Craps; and if that weren't enough, we have Baccarat and Blackjack for you as well. Prerequisites ? A tad bit of chivalry and loads and loads of luck. The cards are shuffled and the dice ready to be rolled. Are you game?</p>    
				</div>
                                <div id="thewavesball" class="category-text">
					<p>What can seem more inviting than a few moments of romantic bliss? Dance away to your heart’s content under a starry sky. Let your hair down and immerse yourself in the soft music and dance at The Waves Ball with your partner and create a night of memories.</p>
				</div>
                                <div id="flavours" class="category-text">
					<p>Witness people from all walks of life, their skills on showcase. With street stunt bikers, fire dancers, belly dancers, a ventriloquist and a jazz funk virtuoso gracing the occasion, not a dull moment is in sight. Come celebrate their talent and your lust for life!</p>
				</div>
                                <div id="nirvana" class="category-text">
					<p>Looking for some tranquility amidst all the action? With the right blend of enjoyment and relaxation, The Nirvana lounge at Waves is the perfect place to catch your breath.</p>
				</div>
				<!-- Specials Content End -->
				<div class="back-home"><hr /><h3><a href="javascript:void(0)">Go Back Home</a></h3></div>
			</div>
                        <!-- Specials End -->
                        
			<div id="links-wrapper">
				<div id="events-link" class="span-6 links"><img src="img/events-glass.jpg" width="133" height="546" alt="Events" /><div class="tip"><img src="img/events-text.png" width="113" height="37" alt="Events"/></div><div class="tip-reflection"><img src="img/events-text-reflection.png" width="113" height="37" alt="Events"/></div></div>
				<div id="specials-link" class="span-6 links"><img src="img/specials-glass.jpg" width="133" height="546" alt="Specials" /><div class="tip"><img src="img/specials-text.png" width="130" height="37" alt="Specials"/></div><div class="tip-reflection"><img src="img/specials-text-reflection.png" width="130" height="37" alt="Specials"/></div></div>
				<div id="workshops-link" class="span-6 links"><img src="img/workshops-glass.jpg" width="133" height="546" alt="Workshops" /><div class="tip"><img src="img/workshops-text.png" width="200" height="37" alt="Workshops"/></div><div class="tip-reflection"><img src="img/workshops-text-reflection.png" width="200" height="37" alt="Workshops"/></div></div>
				<div id="nites-link" class="span-6 last links"><img src="img/nites-glass.png" width="133" height="546" alt="Nites" /><div class="tip"><img src="img/nites-text.png" width="85" height="37" alt="Nites"/></div><div class="tip-reflection"><img src="img/nites-text-reflection.png" width="85" height="37" alt="Nites"/></div></div>
			</div>
		</div>
		
		
		<div id="footer-nav">
			<div id="footer-links">
				<div id="left-links">
					<a href="javascript:void(0)" title="Login | Register" id="login-link" class="left login">&nbsp;</a>
					<a href="http://www.bits-waves.org/blog/" title="Visit Our Blog" class="left updates" target="_blank">&nbsp;</a>
					<a href="http://www.facebook.com/bitswaves" title="Subscribe To Our Facebook Feed" class="left facebook" target="_blank">&nbsp;</a>
					<a href="http://twitter.com/bitswaves" title="Follow Us On Twitter" class="left twitter" target="_blank">&nbsp;</a>
				</div>
				<div id="right-links">
					<a href="javascript:void(0)" title="The Department Of Publicity And Public Relations" class="right depp">&nbsp;</a>
					<a href="http://www.bits-waves.org/winter2009/lookback/" title="A Look Back At Waves 2009" class="right lookback" target="_blank">&nbsp;</a>
					<a href="sponsors.html" title="Our Sponsors" class="right sponsors" id="sponsors-link">&nbsp;</a>
					<a href="javascript:void(0)" title="Contact Us" class="right contact" id="contact-link">&nbsp;</a>
				</div>
			</div>
			<div id="contact-us" class="bottom-content">
				<div id="contacts-accordion">
					<ul>
						<li><a class="spons" href="javascript:void(0)">Sponsorship and Marketing</a></li>
						<li><a class="pub" href="javascript:void(0)">Publicity and Public Relations</a></li>
						<li><a class="accom" href="javascript:void(0)">Reception and Accommodation</a></li>
						<li><a class="docw" href="javascript:void(0)">Creative Works</a></li>
						<li><a class="nites" href="javascript:void(0)">Special Nites</a></li>
						<li><a class="dojma" href="javascript:void(0)">Journalism and Media Affairs</a></li>
						<li><a class="cont" href="javascript:void(0)">Controls and Events</a></li>
						<li><a class="back" href="javascript:void(0)">Backstage</a></li>
						<li><a class="dos" href="javascript:void(0)">Security</a></li>
						<li><a class="dopy" href="javascript:void(0)">Photography</a></li>
						<li><a class="finass" href="javascript:void(0)">Assets and Finance</a></li>
						<li><a class="deco" href="javascript:void(0)">Arts and Decoration</a></li>
						<li><a class="conv" href="javascript:void(0)">The Convenor</a></li>
						<li class="last-item"><a class="csa" href="javascript:void(0)">Council for Student Affairs</a></li>
					</ul>
				</div>
				<div id="contacts-details">
					<div id="spons" class="details">
						<h3></h3>
						<p>Kushal Bhagia</p>
						<p>+91 9823230776</p>
						<p>kushal@bits-waves.org</p>
					</div>
					<div id="pub" class="details">
						<h3></h3>
						<p>Emaad Ahmed Manzoor</p>
						<p>+91 9880348536</p>
						<p>emaad@bits-waves.org</p>
						<br />
						<p>Sameer Jhamtani</p>
						<p>+91 9765898293</p>
						<p>sameerjhamtani@bits-waves.org</p>
					</div>
					<div id="accom" class="details">
						<h3></h3>
						<p>M. Gautam</p>
						<p>+91 9049269066</p>
						<p>gautam@bits-waves.org</p>
						<br />
						<p>Sumith Chandra Reddy</p>
						<p>+91 9960475599</p>
						<p>sumith@bits-waves.org</p>
					</div>
					<div id="docw" class="details">
						<h3></h3>
						<p>Priyank Hirani</p>
						<p>+91 9049268795</p>
						<p>priyank@bits-waves.org</p>
					</div>
					<div id="nites" class="details">
						<h3></h3>
						<p>Pulkit Budhiraja</p>
						<p>+91 9923600221</p>
						<p>pulkit@bits-waves.org</p>
					</div>
					<div id="dojma" class="details">
						<h3></h3>
						<p>Madhupurna Biswas</p>
						<p>+91 9049629756</p>
						<p>madhupurna@bits-waves.org</p>
						<br />
						<p>Ankit Hatalkar</p>
						<p>+91 9004348185</p>
						<p>ankit@bits-waves.org</p>
					</div>
					<div id="cont" class="details">
						<h3></h3>
						<p>Hrishikesh Sinkar</p>
						<p>+91 9702061760</p>
						<p>hrishikesh@bits-waves.org</p>
					</div>
					<div id="dos" class="details">
						<h3></h3>
						<p>Akhil Sekhar Reddy</p>
						<p>+91 9049268860</p>
						<p>akhil@bits-waves.org</p>
						<br />
						<p>Uttej Reddy</p>
						<p>+91 9049629768</p>
						<p>uttej@bits-waves.org</p>
					</div>
					<div id="dopy" class="details">
						<h3></h3>
						<p>Shiva Sheethal Varma</p>
						<p>+91 9049629448</p>
						<p>shiva@bits-waves.org</p>
						<br />
						<p>Aditya Cherukuri</p>
						<p>+91 9960509818</p>
						<p>adityacherukuri@bits-waves.org</p>
					</div>
					<div id="deco" class="details">
						<h3></h3>
						<p>Nandakishore</p>
						<p>+91 9049269044</p>
						<p>nandakishore@bits-waves.org</p>
						<br />
						<p>J. Vamsi Krishna</p>
						<p>+91 9049442468</p>
						<p>vamsi@bits-waves.org</p>
					</div>
					<div id="back" class="details">
						<h3></h3>
						<p>Sameer Nikam</p>
						<p>+91 9049049495</p>
						<p>sameernikam@bits-waves.org</p>
						<br />
						<p>Aditya Nikam</p>
						<p>+91 9822134578</p>
						<p>adityanikam@bits-waves.org</p>
					</div>
					<div id="finass" class="details">
						<h3>Finance</h3>
						<p>M. Naveen Raghuveer</p>
						<p>+91 9561745878</p>
						<p>naveen@bits-waves.org</p>
						<h3>Assets</h3>
						<p>Gajanan Arha</p>
						<p>+91 9881888721</p>
						<p>gajanan@bits-waves.org</p>
					</div>
					<div id="csa" class="details">
						<div>
							<h3>Aditya Chintawar | President</h3>
							<p>+91 9823289049</p>
							<p>prez@bits-goa.ac.in </p>
						</div>
						<div>
							<h3>Mourya Krishna | Vice-President</h3>
							<p>+91 9960561019</p>
							<p>viceprez@bitsgoa.ac.in</p>
						</div>
						<div>
							<h3>Chaparala Sri Vijay | Treasurer</h3>
							<p>+91 9049268896</p>
							<p>trez@bits-goa.ac.in </p>
						</div>
						<div>
							<h3>Aniketh Reddy | General Secretary</h3>
							<p>+91 9657282161</p>
							<p>gensec@bits-goa.ac.in</p>
						</div>
					</div>
					
					<div id="conv" class="details">
						<h3></h3>
						<p>Joshan Cherian Abraham</p>
						<p>+91 9049269008</p>
						<p>joshan@bits-waves.org</p>
					</div>
				</div>
			</div>
			<div id="login-register" class="bottom-content">
				<div id="User-Info"></div>
                                <div id="accomodation" class="bottom-content form">
                                    <br/>
                                    
                                    <p>Register yourself for accommodation by submitting the form below. If you're the contingent leader from your institute, you may register your entire contingent. Travel proof is required; further details will be provided in the Instructions tab. Mail in any queries to gautam@bits-waves.org.</p>
                                    <form id="accomodation-form">
					<fieldset>
						<legend>Accommodation</legend>
                                                <div class="notification"></div>
						<p>
						<label for="num_boys">Number Of Boys</label><br />
						<input type="text" name="num_boys" value="" id="num_boys" autocomplete="off"/>
						</p>
                                                <p>
						<label for="num_girls">Number Of Girls</label><br />
						<input type="text" name="num_girls" value="" id="num_girls" autocomplete="off"/>
						</p>
						<p class="date" id="arrivalp">
						<label for="arrival_date">Arrival</label><br />
						<input type="text" name="arrival_date" value="" readonly="readonly" autocomplete="off" id="arrival_date" autocomplete="off"/>
						</p>
                                                <p class="date" id="departurep">
						<label for="departure_date">Departure</label><br />
						<input type="text" name="departure_date" value="" readonly="readonly" autocomplete="off" id="departure_date"/>
						</p>
                                                <div id="datepicker">
                                                    <h3>October</h3>
                                                    <a href="javascript:void(0)">13</a>
                                                    <a href="javascript:void(0)">14</a>
                                                    <a href="javascript:void(0)">15</a>
                                                    <a href="javascript:void(0)">16</a>
                                                    <a href="javascript:void(0)">17</a>
                                                </div>
					</fieldset>
					<div id="acco-buttons"><input type="button" value="Instructions" id="instructions-button"/><div id="file-uploader">Upload Travel Proof</div><input type="button" value="Register &rarr;" id="acco-button"/></div>
                                        </form>
                                </div>
                                <div id="accomodation-instructions" class="bottom-content">
                                    <div id="acco-top-tabs">
                                        <a href="javascript:void(0)" id="main-instructions-tab">Accommodation</a><a href="javascript:void(0)" id="reaching-campus-tab">Reaching Campus</a><a href="javascript:void(0)" id="details-tab">On-Campus Rules</a>
                                    </div>
                                    <div id="acco-content">
                                        <div id="details" class="acco-instructions">
                                            <p>All students are required to carry their <b>ID cards</b> at all times.</p>
                                            <p>All students entering the campus will undergo a baggage check at the main gate.</p>
                                            <p>Consumption of alcohol, tobacco and narcotics is strictly prohibited on the campus.</p>
                                            <p>Inflammable fluids, knives and explosives of any kind are disallowed on the campus. Any other item deemed unsafe will be confiscated.</p>
                                            <p>Food stalls will only use coupons for selling items. Direct monetary transactions are not allowed.</p>
                                            <p>The Waves 2010 Organizing Committee is not responsible for any loss of property or mishaps that occur during the festival.</p>
                                            <p>Decisions of the Waves 2010 Organizing Committee will be final and binding.</p>
                                        </div>
                                        <div id="main" class="acco-instructions">
                                            <p><b>Accommodation will be provided only to registered participants in possession of a copy of the accommodation confirmation letter.</b></p>
                                            <p>Accommodation may be provided on or off campus, from the <b>day prior</b> to the fest to <b>3PM, the day after</b>, once the required payment has been made.</p>
                                            <p>Participants are required to share rooms with other participants. Requests for single rooms will not be entertained.</p>
                                            <p>Basic amenities such as buckets and mattresses will be provided. Participants are advised to bring their own locks, bed sheets etc.</p>
                                            <p>The campus is well-equipped with essential amenities, including a medical centre, a shopping complex and an SBI ATM.</p>
<p>Accommodation payment does not include food. The various food options during your stay are: </p>
<ul>
<li>The Waves Food Court</li>
<li>The Campus Messes</li>
<li>The Institute Cafeterias</li>
</ul> 
                                        </div>
                                        <div id="reaching" class="acco-instructions">
                                            <p>You can visit BITS, Pilani - Goa Campus by air, bus, train or road. <a href="http://maps.google.com/maps/ms?ie=UTF8&hl=en&msa=0&msid=112505604067879928582.000462b4ec476a98012e8&z=11" target="_blank">Here</a> is a route map to help you out.</p>
                                            <p>Dabolim Airport is located just 5 kilometers from the campus. Buses are available from nearby cities like Pune and Mumbai (Maharashtra). Goa is well connected by trains from all over India. Vasco and Madgaon are the two major railway stations in Goa.</p>
                                            <p>The following are the alternatives to reach the Campus from major locations once you land up in Goa:</p>
                                            <p><b>From Vasco:</b></p>
                                            <ul>
                                                <li>Bus: Rs. 5</li>
                                                <li>Taxi: Rs. 150</li>
                                                <li>Auto-Rickshaw: Rs. 90</li>
                                                <li>Bike-rider: Rs. 60</li>
                                            </ul>
                                            <p><b>From Madgaon:</b></p>
                                            <ul>
                                                <li>Bus: Rs. 20</li>
                                                <li>Taxi: Rs. 350</li>
                                                <li>Auto-Rickshaw: Rs. 220</li>
                                                <li>Bike-rider: Rs. 150</li>
                                            </ul>
                                            <p><b>From Panaji:</b></p>
                                            <ul>
                                                <li>Bus: Rs. 20</li>
                                                <li>Taxi: Rs. 350</li>
                                                <li>Auto-Rickshaw: Rs. 230</li>
                                                <li>Bike-rider: Rs. 150</li>
                                            </ul>
                                            <p><b>From Dabolim Airport:</b></p>
                                            <ul>
                                                <li>Taxi: Rs. 150</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="acco-bottom-nav"><a href="javascript:void(0)" id="instructions-close-button">&larr;Hide Instructions</a><a href="http://maps.google.com/maps/ms?ie=UTF8&hl=en&msa=0&msid=112505604067879928582.000462b4ec476a98012e8&z=11" target="_blank" id="campus-route-button">Route To Campus&rarr;</a></div>
                                </div>
				<div id="login-form" class="form">
					<form>
					<fieldset>
						<legend>Login</legend>
                                                <div class="notification"></div>
						<p>
						<label for="login-email">Email</label><br />
						<input type="text" name="login-email" value="" id="login-email"/>
						</p>
						<p>
						<label for="login-password">Password</label><br />
						<input type="password" name="login-password" value="" id="login-password"/>
						</p>
					</fieldset>
					<p align="right"><input type="button" value="Login &rarr;" id="login-button"/></p>
					</form>
				</div>
				
				<div id="register-form" class="form">
					<form>
					<fieldset>
						<legend>Register</legend>
                                                <div class="notification"></div>
						<p>
						<label for="name">Name</label><br />
						<input type="text" name="username" value="" id="name"/>
						</p>
						<p>
						<label for="register-email">Email</label><br />
						<input type="text" name="register-email" value="" id="register-email"/>
						</p>
						<p>
						<label for="register-password">Password</label><br />
						<input type="password" name="register-password" value="" id="register-password"/>
						</p>
						<p>
						<label for="register-confirm-password">Confirm Password</label><br />
						<input type="password" name="register-confirm-password" value="" id="register-confirm-password"/>
						</p>
						<p>
						<label for="college">College</label><br />
						<input type="text" name="college" value="" id="college"/>
						</p>
						<p>
						<label for="mobile">Contact Number</label><br />
						<input type="text" name="mobile" value="" id="mobile"/>
						</p>
					</fieldset>
					<p align="right"><input type="button" value="Register &rarr;" id="register-button"/></p>
					</form>				
				</div>
				<div id="logout">
					<input type="button" value="Logout &rarr;" id="logout-button"/>
				</div>
			</div>
                        <div id="close-panel"><a href="javascript:void(0)">X Close Panel</a></div>
                    </div>
	</body>
</html>
