<!DOCTYPE html>

<html>

<head>

	<title>About</title>

    <link rel="stylesheet" typeof="text/css" href="style.css">

</head>

<body>
	<nav>

        <ul>
            <li><a href="Index.html">Home</a></li>
            <li><a class="active" href="About.php">About</a></li>
            <li><a href="Studies.html">Studies</a></li>
            <li><a href="#">Grades</a>
                <ul>
                    <li><a href="#">Middle School</a>
                        <ul>
                            <li><a href="mid1st.html">1st Grade</a></li>
                            <li><a href="mid2nd.html">2nd Grade</a></li>
                            <li><a href="mid3rd.html">3rd Grade</a></li>
                            <li><a href="mid4th.html">4th Grade</a></li> 
                        </ul>
                    </li>
                    <li><a href="#">High School</a>
                        <ul>
                            <li><a href="high1st.html">1st Grade</a></li>
                            <li><a href="high2nd.html">2nd Grade</a></li>
                            <li><a href="high3rd.html">3rd Grade</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>

        <div id="contact">
            <li><a href="Contact.html">Contact</a></li>
        </div>

    </nav>
        
    <div id="welcome">

    <br>

    <h1>About Me</h1>

    <br>

    </div>

    <img src="images/gradmeedit.png" class="imgme">

<div id="maindiv">

    <div id="div1">

        <?php

        $dob = new DateTime('2002-09-26');
        $today   = new DateTime('today');
        
        $year = $dob->diff($today)->y;
        ?>

        <p id="aligncenter">
        My full name is Melroy Tygo Loen, I was born and raised in Almere in the Netherlands.<br>

        Age: <?php echo $year;?> Male<br>
        Height: 169cm / 5'7"<br>
        Weight: 60Kg / 132lb
        </p>

    </div>

    <div id="div2">

        <p><img src="images/frtc.png" class="frtc">
        Every saturday (exept in and the weeks leading up to winter) i go to a mountain biking club and we go cycling for about 2 hours in groups. Once every 4 to 8 weeks we head out of Almere
        for more variety of routes and difficulty grades as Almere does not have any natural nature, so no very interesting biking tracks.<br><br><br><br>
        My main hobby is playing video games, i can be quite picky and harsh towards games, but in a general sense i enjoy games that give a uniqe experience with loads of detail and nuances.
        
        <!--
        A few examples being:<br>
        <a href="https://warthunder.com/en/game/">War Thunder</a><br>
        <a href="https://terraria.org/">Terraria</a><br>
        <a href="http://www.teamfortress.com/">Team Fortress 2</a>
        <br>
        </p>
        -->
    </div>

    <div id="div1">

        <p><img src="images/spinotank.png" class="imgspinotank">
        I have an overal casual intrest in history, (prehistoric creatures and WW1/2 the most), conflicts, military vehicles of any kind, aviation and technology (Mostly hardware).<br><br>

        I enjoy learning about military vehicles and plane's designers and reasons certain vehicles were made a certain way. I enjoy learning about the path it took, what kind of other
        inventions went into making a vehicle and how they were used, where or how they became famous or infamous, eg, a certain battle, mission, operation or event.<br><br>

        For most of my life i didn't have a genré of music i listend to, i didn't go out looking for more or something new, so music wasn't really a part of my life, until begin 2017 when
        I discovered a clip from The Hobbit on youtube with backing music 'To Hell and Back' by Sabaton, I was instantly hooked, it was exactly what I wanted from music, something melodic
        and powerfull. I immediately loved the band and wanted to hear more, so after binging Sabaton for a few days I went out looking if this kind of metal was more common, it was.
        Nuclear Blast Records, The hosting channel for Sabaton had loads of bands that fit the description for what I wanted, and through Nuclear Blast I discovered Napalm Records, another
        channel hosting metal bands, and an even wider variety of the bands on Napalm Records fit the melodic and powerfull description, same story with Metal Blade Records, most of what
        I listen to now is from those three Recordlabels.<br><br>

        From a around late 2015 I was getting intrested in technology and hardware, just learning about the history, design process and uses, mostly i was into the hardware part of things,
        basically anything in or attached to a computer or server. I love building them and configuring them. In school, a few of the most memorable hours were where we would just had to
        take a computer apart, and rebuild it again.
        </p>

    </div>

</div>

<footer>

<p>
    <a id="padhome" href="Index.html">Home</a>

    <a id="padcontact" href="Contact.html">Contact</a>
    <p id="padp">Email: Melroy.tygo.loen@gmail.com<br>
                 Phone: 06 42849604
    </p>

</p>

</footer>

</body>

</html>