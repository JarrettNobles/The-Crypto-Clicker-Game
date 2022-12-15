<?php
 session_start(); 
?>
<!DOCTYPE html>
<!-- change to php-->
<html>
<head>
    <title>Crypto Clicker Game</title>
</head>
<link rel="stylesheet" href="crypto.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<body>
<div class="tab">
    <button class="tablinks" onclick="openSection('clicker')" id="defaultOpen">Clicker <br/></button>
    <button class="tablinks" onclick="openSection('shop')">Shop <br/></button>
    <button class="tablinks" id = "aboutButton" onclick="openSection('about')">About Crypto Mining <br/> Cost: 100BTC</button>
    <button class="tablinks" id = "resourcesButton" onclick="openSection('resources')">Resources <br/> Cost: 200BTC</button>
    <button class="tablinks" id = "startYourselfButton" onclick="openSection('startYourself')">Start Mining <br/> Cost: 300BTC</button>
	<!-- <button style="text-align: right" id = "" onclick="">Logout</button>-->
	<form style="background-color: inherit;"  action="logout.php">
		<input type="submit" value="Logout" />
	</form>
<?php
	if ($_SESSION['loggedin']==1)
	{
		echo "LOGGED IN: ";
		//echo "UID: " . $_SESSION['UID'];
		echo "UserName: " . $_SESSION['username'];
		//echo "Score" . $_SESSION['score'];
		//echo "Profile pic" . $_SESSION['pp'];
	}
?>

	<!-- <form style="background-color: inherit;"  action="updateScore.php">
		<input type="submit" value="Save Game" /> -->
	</form>
<!-- <img src="/images/<?=$_SESSION['pp']?>" class="img-fluid rounded-circle">-->

</div>

<?php
	if ($_SESSION['loggedin']==1)
	{
		echo "LOGGED IN: ";
		//echo "UID: " . $_SESSION['UID'];
		echo "UserName: " . $_SESSION['username'];
		//echo "Score" . $_SESSION['score'];
		//echo "Profile pic" . $_SESSION['pp'];
		echo " Mini: " . $_SESSION['mini'];		
?>


<div style="width: 100%;">
       <h1 id="Wallet" onload="displayMini" style="text-align: center; font-size: 75px;">
           <label>Wallet:</label>
           <label id="num">0</label>
           <label>BTC</label>
       </h1><br/>

	  
    <div id="clicker" class="tabcontent">
        <center>
        <img id = "graphics_card" src="./images/1030.png" style="width: 500px" onclick="increment(); pop(event); random_color();"/> <br>
        </center>
        <div id = "miners">
            <h3 style="text-align: center; font-size: 60px; color: white; border-style: solid; border-color: rgb(2,64,120);
  border-top-color: coral;">MINERS</h3>
            <div id = "miniMiners"></div>
            <div id = "asicMiners"></div>
            <div id = "l3Miners"></div>
            <div id = "hydrominers"></div>
        </div>
    </div>
    <div id="shop" class="tabcontent">
        <h1 style="text-align: center; color: white; border-style: solid; border-color: rgb(2,64,120);
  border-top-color: coral;">Shop</h1>
        <div id = "minerShop" style="float: left">
            <h2>> Asic Miners</h2>
            <div class="content_img">
                <img id = "mini" src="./images/asic_mini.png" style="width: 200px;" onclick="buyMini()">
                <div>Buy mini asic miner to auto-mine crypto. Cost: 10 BTC</div>
            </div>
            <div class="content_img">
                <img id = "asic" src="./images/asic.png" style="width: 200px;" onclick="buyAsic()">
                <div>Buy asic miner to auto-mine crypto. Cost: 20 BTC</div>
            </div>
            <div class="content_img">
                <img id = "l3++" src="./images/L3++.png" style="width: 200px;" onclick="buyL3()">
                <div>Buy L3++ asic miner to auto-mine crypto. Cost: 30 BTC</div>
            </div>
            <div class = "content_img">
                <img id = "hydro" src="./images/S19_Pro_Hydro.png" style="width: 200px;" onclick="buyHydro()">
                <div>Buy S19 Pro Hydro asic miner to auto-mine crypto. Cost: 40 BTC</div>
            </div> <br><br><br><br>
        </div>
        <div id = "upgradeShop" style="float: right">
            <h2>> Upgrades</h2>
            <div class="content_img">
                <img id = "upgrade_image" src="./images/1050.png" style="width: 200px;" onclick="upgradeGPU()">
                <div>
                    <p>Upgrade GPU to get more BTC per click.</p>
                    <p id="upgrade_cost">Cost: 10 BTC</p>
                </div>
            </div>
        </div>
    </div>
    <div id="about" class="tabcontent">
        <h1 style="text-align: center; color: white; border-style: solid; border-color: rgb(2,64,120);
  border-top-color: coral;">Info Page</h1>
        <div class="center">
        <div id = "pow">
            <h3>Proof-of-Work(PoW)</h3>
            <p>
                Proof-of-Work(PoW) Blockchains use miners to update the blockchain by  processing transactions and producing
                new blocks. The miners race to find the hash of the next block and are given a block reward for producing the
                block. High end graphics cards are used to mine. ASIC's (Application Specific Integrated Circuit) are purpose
                built computers that mine a certain crypto algorithm. Miners make the network decentralized meaning not one
                person or institution can't control it.
            </p>
        </div>
        <center><button id = "posButton" onclick="showText('pos',10,'eth')" style="display: block">Show more<br/>Cost: 10 BTC</button></center>
        <div id="pos" style="display: none">
            <h3>Proof-of-Stake(PoS)</h3>
            <p>
                Other Blockchains use Proof-of-Stake (PoS) consensus mechanism. In this model the stakers set up a validator
                node and stake their coins as collateral. The stakers are then rewarded with the transaction fees. While the
                coins are staked they can't be spent and the rules of the stake will determine when you can unstake.
            </p>
        </div>
        <center><button id = "ethButton" onclick="showText('eth',20,'')" style = "display: none">Show more<br/>Cost: 20 BTC</button></center>
        <div id="eth" style="display: none">
            <h3>Ethereum</h3>
            <p>
                Ethereum is the 2nd largest cryptocurrency by market cap and has one of the largest crypto ecosystems. It is
                a proof-of-work blockchain but will soon switch to a proof-of-stake blockchain. They are calling the event
                of the switch from one consensus mechanism to another  the "Merge." The Merge is set to take place in September 2022.
            </p>
        </div>
        </div>
    </div>
    <div id="resources" class="tabcontent">
        <h1 style="text-align: center; color: white; border-style: solid; border-color: rgb(2,64,120);
  border-top-color: coral;">Resources</h1>
        <div class = "center resources">
        <div id="ethRes">
            <h3>Ethereum</h3>
            <a href="https://ethereum.org/en/upgrades/merge/" target="_blank">Ethereum Website</a> <br/>
            <a href="https://ethmerge.com/" target="_blank">Eth Merge Website</a>
        </div>
        <center><button id = "btcButton" onclick="showText('btc',10,'marketResearch')" style="display: block">Show more<br/>Cost: 10 BTC</button></center>
        <div id="btc" style="display: none;">
            <h3>Bitcoin</h3>
            <a href="https://bitcoin.org/en/" target="_blank">Bitcoin website</a> <br/>
            <a href="https://bitcoinmagazine.com/" target="_blank">Bitcoin Magazine</a>
        </div>
        <center><button id = "marketResearchButton" onclick="showText('marketResearch',20,'youtube')" style="display: none">Show more<br/>Cost: 20 BTC</button></center>
        <div id="marketResearch" style="display: none;">
            <h3>Crypto Price Aggregators</h3>
            <a href="https://coinmarketcap.com/" target="_blank">Coin Market Cap</a> <br>
            <a href="https://www.coingecko.com/" target="_blank">CoinGecko</a>
        </div>
        <center><button id = "youtubeButton" onclick="showText('youtube',30,'cex')" style="display: none; background: white;">Show more<br/>Cost: 30 BTC</button></center>
        <div id = "youtube" style="display: none">
            <h3>Youtube Links</h3>
            <a href="https://www.youtube.com/watch?v=kHybf1aC-jE&t=25s" target="_blank">Blockchain Explained</a> <br/>
            <a href="https://www.youtube.com/watch?v=kHybf1aC-jE&t=25s" target="_blank">Bitcoin's Proof-Of-Work Explained</a> <br/>
            <a href="https://www.youtube.com/watch?v=XLcWy1uV8YM&t=465s" target="_blank">Proof-Of-Work</a> <br/>
            <a href="https://www.youtube.com/watch?v=x83EVUZ_EWo&t=10s" target="_blank">Proof-Of-Stake</a> <br/>
            <a href="https://www.youtube.com/watch?v=pycVClxWUN8" target="_blank">Eth Merge</a>
        </div>
		<center><button class = "secButton" id = "cexButton" onclick="showText('cex',30,'dex')" style="display: none">Show more<br/>Cost: 30 BTC</button></center>
        <div id="cex" style="display: none">
            <h3>Centralized Exchanges</h3>
            <a href="https://coinbase.com/join/warren_qre" target="_blank">Coinbase</a> <br>
            <a href="https://accounts.binance.us/en/register?ref=57229976" target="_blank">Binance.US</a>
        </div>
        <center><button id = "dexButton" onclick="showText('dex',40,'')" style="display: none">Show more<br/>Cost: 40 BTC</button></center>
        <div id="dex" style="display: none">
            <h3>Decentralized Exchanges</h3>
            <a href="https://app.uniswap.org/#/swap?chain=mainnet" target="_blank">Uniswap</a> <br>
            <a href="https://www.sushi.com/" target="_blank">Sushiswap</a>
        </div>
    </div>
    </div>
    <div id="startYourself" class="tabcontent">
        <h1 style="text-align: center; color: white; border-style: solid; border-color: rgb(2,64,120);
  border-top-color: coral;">Start Mining Yourself</h1>
        <div class="center">
			<div id="calc">
                <h3>Can use use your hardware to mine?</h3>
                <p> NiceHash has a downloadable miner and a minning pool. It is one of the simplest miners to use with very minimal setup.</p>
                <a href="https://www.nicehash.com/profitability-calculator" target="_blank">NiceHash Profitability Calculator</a> <br>
			</div>
            <center><button id = "miningButton" onclick="showText('mining',10,'pools')" style="">Show more<br/>Cost: 10 BTC</button></center>
            <div id="mining" style="display: none">
                <h3> Other miners</h3>
                <p> Here are links to other miners which take a little more setup.</p>
                <a href="https://trex-miner.com/" target="_blank">T-Rex Miner</a> <br>
                <a href="https://github.com/Lolliedieb/lolMiner-releases/releases" target="_blank">lol Miner</a> <br>
                <a href="https://github.com/NebuTech/NBMiner" target="_blank">NBMiner</a> <br>
                <a href="https://www.youtube.com/watch?v=X1njfyi05ng" target="_blank">Miner Setup tutorial</a>
            </div>
            <center><button id = "poolsButton" onclick="showText('pools',20,'wallets')" style="display: none">Show more<br/>Cost: 20 BTC</button></center>
			<div id="pools" style="display: none">
            <h3> Mining Pools</h3>
                <p> There are many different mining pools but here a two good ones. You need to connect to a mining pool to have consistent profits.</p>
                <a href="https://ethermine.org/start" target="_blank">Ethermine</a> <br>
                <a href="https://eth.2miners.com/help" target="_blank">2Miners</a>
			</div>
            <center><button id = "walletsButton" onclick="showText('wallets',30,'')" style="display: none">Show more<br/>Cost: 30 BTC</button></center>
			<div id="wallets" style="display: none">
                <h3> Metamask Wallet Download</h3>
                <p>You need a wallet to send your earnings to.</p>
                <a href="https://metamask.io/" target="_blank">Metamask</a>
			</div>
        </div>
    </div>
</div>
</body>
</html>
	<?php
	}
	?>
<script>
    //set up for webpage and initialization of global variables
    document.getElementById("defaultOpen").click();
	//var tanner= '<?php echo $score;?>';
   let cryptoCount = <?php echo $_SESSION['score']; ?>;
        document.getElementById('num').innerHTML = cryptoCount.toFixed(3);

    let incVal = 1;

    let gpuImages = ["1050.png","1660.png","2060super.png","3060.png","3060ti.png","3070.png","3070wooden.png","3090.png","max_gpu.png"]
    let gpuCosts = [10,20,30,40,50,60,70,80,Infinity]
    let gpuIdx = 0;

	let miniCount = <?php echo $_SESSION[mini];?>;
       // document.getElementById('mini').innerHTML = miniCount.toFixed(3);
    let asicCount = <?php echo $_SESSION[asic];?>;
    let l3Count = <?php echo $_SESSION[l3];?>;
    let hydroCount = <?php echo $_SESSION[hydro];?>;

    let aboutUnlocked = false;
    let resourcesUnlocked = false;
    let startYourselfUnlocked = false;


    //function to increment cryptoCount and rewrite it to document
    function increment()
    {
        cryptoCount += incVal;
        document.getElementById('num').innerHTML = cryptoCount.toFixed(3);
	updateScore();
    }
    
   // for(let i=1; i<=asicCount; i++){
	   // document.getElementById("asicMiners").innerHTML += "<img src='./images/asic.png' class = 'miningRig' style = 'width: 200px;'>";
   // }
    //functions for buying miners
    function buyMini()
    {
        if(cryptoCount >= 10 && miniCount < 5) {
            if(miniCount == 0)
            {
                document.getElementById("miniMiners").innerHTML += "<h3>Mini Asic Miners</h3>";
            }
            cryptoCount -= 10;
	    updateScore();
	    miniCount += 1;
	    updateMiner();
            document.getElementById('num').innerHTML = cryptoCount.toFixed(3);
            setInterval(function () {
                cryptoCount += 1;
		updateScore();
                document.getElementById('num').innerHTML = cryptoCount.toFixed(3);
            }, 1000)
            document.getElementById("miniMiners").innerHTML += "<img src='./images/asic_mini.png' class = 'miningRig' style = 'width: 200px;'>";
        }

        if(miniCount == 5) {
            document.getElementById('mini').src = "./images/mini_maxed.png";
	}
    }
/*function displayMini(){
	if(miniCount >= 1) {
document.getElementById("miniMiners").innerHTML += "<img src='./images/asic_mini.png' class = 'miningRig' style = 'width: 200px;'>"
    }
	}*/

    function buyAsic()
    {
        if(cryptoCount >= 20 && asicCount < 5) {
            if(asicCount == 0)
            {
                document.getElementById("asicMiners").innerHTML += "<h3>Asic Miners</h3>";
            }
            cryptoCount -= 20;
	    updateScore();
	    asicCount += 1;
	    updateMiner();
            document.getElementById('num').innerHTML = cryptoCount.toFixed(3);
            setInterval(function () {
                cryptoCount += 2;
	    	updateScore();
                document.getElementById('num').innerHTML = cryptoCount.toFixed(3);
            }, 1000)
            document.getElementById("asicMiners").innerHTML += "<img src='./images/asic.png' class = 'miningRig' style = 'width: 200px;'>";
        }

        if(asicCount == 5) {
            document.getElementById('asic').src = "./images/asic_maxed.png";
        }
    }

    function buyL3()
    {
        if(cryptoCount >= 30 && l3Count < 5) {
            if(l3Count == 0)
            {
                document.getElementById("l3Miners").innerHTML += "<h3>L3++ Miners</h3>"
            }
            cryptoCount -= 30;
	    updateScore();
            l3Count += 1;
	    updateMiner();
            document.getElementById('num').innerHTML = cryptoCount.toFixed(3);
            setInterval(function () {
                cryptoCount += 3;
	    	updateScore();
                document.getElementById('num').innerHTML = cryptoCount.toFixed(3);
            }, 1000)
            document.getElementById("l3Miners").innerHTML += "<img src='./images/L3++.png' class = 'miningRig' style = 'width: 200px;'>";
        }

        if(l3Count == 5) {
            document.getElementById('l3++').src = "./images/l3_maxed.png";
        }
    }

    function buyHydro()
    {
        if(cryptoCount >= 40 && hydroCount < 5) {
            if(hydroCount == 0)
            {
                document.getElementById("hydrominers").innerHTML += "<h3>S19 Pro Hydro Miners</h3>"
            }
            cryptoCount -= 40;
	    updateScore();
            hydroCount += 1;
	    updateMiner();
            document.getElementById('num').innerHTML = cryptoCount.toFixed(3);
            setInterval(function () {
                cryptoCount += 4;
	    	updateScore();
                document.getElementById('num').innerHTML = cryptoCount.toFixed(3);
            }, 1000)
            document.getElementById("hydrominers").innerHTML += "<img src='./images/S19_Pro_Hydro.png' class = 'miningRig' style = 'width: 200px;'>";
        }

        if(hydroCount == 5) {
            document.getElementById('hydro').src = "./images/hydro_maxed.png";
        }
    }

    //function to upgrade gpu
    function upgradeGPU()
    {
        if(cryptoCount >= gpuCosts[gpuIdx] && gpuIdx < 8) {
            cryptoCount -= gpuCosts[gpuIdx];
            document.getElementById('num').innerHTML = cryptoCount;
            incVal *= 2;
            document.getElementById('graphics_card').src = "./images/" + gpuImages[gpuIdx];
            document.getElementById('upgrade_image').src = "./images/" + gpuImages[gpuIdx+1];
            document.getElementById('upgrade_cost').innerHTML = "Cost: " + gpuCosts[gpuIdx+1] + " BTC";
            gpuIdx += 1;
	    updateScore();
	    updateGPU();
	}
    }

    ///////////////////////////// for loops for the boys
   //miniMiner display
    for(let i=1; i<=miniCount; i++){
	    document.getElementById("miniMiners").innerHTML += "<img src='./images/asic_mini.png' class = 'miningRig' style = 'width: 200px;'>";
            setInterval(function () {
                cryptoCount += 1;
	    	updateScore();
                document.getElementById('num').innerHTML = cryptoCount.toFixed(3);
            }, 1000)
    }
   //asicMiner display
    for(let j=1; j<=asicCount;j++){
		    document.getElementById("asicMiners").innerHTML += "<img src='./images/asic.png' class = 'miningRig' style = 'width: 200px;'>";
            setInterval(function () {
                cryptoCount += 2;
	    	updateScore();
                document.getElementById('num').innerHTML = cryptoCount.toFixed(3);
            }, 1000)
	    }
   //l3Miner display
    for(let l=1; l<=l3Count;l++){
			    document.getElementById("l3Miners").innerHTML += "<img src='./images/L3++.png' class = 'miningRig' style = 'width: 200px;'>";
            setInterval(function () {
                cryptoCount += 3;
	    	updateScore();
                document.getElementById('num').innerHTML = cryptoCount.toFixed(3);
            }, 1000)
		    }
    //hydroMiner display
    for(let m=1; m<=hydroCount;m++){
	   			 document.getElementById("hydrominers").innerHTML += "<img src='./images/S19_Pro_Hydro.png' class = 'miningRig' style = 'width: 200px;'>";
            setInterval(function () {
                cryptoCount += 4;
	    	updateScore();
                document.getElementById('num').innerHTML = cryptoCount.toFixed(3);
            }, 1000)
    }

    // GPU display Dr allen help us
    for(let n=0; n>=gpuIdx;n++){
	    document.getElementById("upgrade_image").innerHTML += "<img src='./images/1050.png' style = 'width: 200px;'>";
	   /* document.getElementById("graphics_card").innerHTML += "<img src='./images/1660.png' class = 'miningRig' style = 'width: 200px;'>";
	    document.getElementById("graphics_card").innerHTML += "<img src='./images/2060Super.png' class = 'miningRig' style = 'width: 200px;'>";
	    document.getElementById("graphics_card").innerHTML += "<img src='./images/3060.png' class = 'miningRig' style = 'width: 200px;'>";
	    document.getElementById("graphics_card").innerHTML += "<img src='./images/3060ti.png' class = 'miningRig' style = 'width: 200px;'>";
	    document.getElementById("graphics_card").innerHTML += "<img src='./images/3070.png' class = 'miningRig' style = 'width: 200px;'>";
	    document.getElementById("graphics_card").innerHTML += "<img src='./images/3090.png' class = 'miningRig' style = 'width: 200px;'>";
	    */
    }
   
    //function to handle changing sections using tab bar at top of screen
    function openSection(sectionName) {
        if(sectionName == 'about' && !aboutUnlocked)
        {
            if(cryptoCount < 100)
                return;
            else
            {
                cryptoCount -= 100;
	    	updateScore();
                document.getElementById('num').innerHTML = cryptoCount.toFixed(3);
                document.getElementById('aboutButton').innerText = 'About';
                aboutUnlocked = true;
            }
        }
        if(sectionName == 'resources' && !resourcesUnlocked)
        {
            if(cryptoCount < 200)
                return;
            else
            {
                cryptoCount -= 200;
	    	updateScore();
                document.getElementById('num').innerHTML = cryptoCount.toFixed(3);
                document.getElementById('resourcesButton').innerText = 'Resources';
                resourcesUnlocked = true;
            }
        }
        if(sectionName == 'startYourself' && !startYourselfUnlocked)
        {
            if(cryptoCount < 300)
                return;
            else
            {
                cryptoCount -= 300;
	    	updateScore();
                document.getElementById('num').innerHTML = cryptoCount.toFixed(3);
                document.getElementById('startYourselfButton').innerText = 'Start Yourself';
                startYourselfUnlocked = true;
            }
        }
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(sectionName).style.display = "block";
        //evt.currentTarget.className += " active";
    }

    //function that reveals text after you have 'bought' a new section
    function showText(id,cost,nextId)
    {
        if(cryptoCount >= cost)
        {
            cryptoCount -= cost;
	    updateScore();
            document.getElementById('num').innerHTML = cryptoCount.toFixed(3);
            document.getElementById(id).style.display = 'block';
            document.getElementById(id+'Button').style.display = 'none';
            if(nextId != '')
            {
                document.getElementById(nextId+'Button').style.display = 'block';
            }
        }
    }

    //function that executes particle effect
    function pop (e) {
        let amount = 25;

        if (e.clientX === 0 && e.clientY === 0) {
            const bbox = e.target.getBoundingClientRect();
            const x = bbox.left + bbox.width / 2;
            const y = bbox.top + bbox.height / 2;
            for (let i = 0; i < amount; i++) {
                createParticle(x, y);
            }
        } else {
            for (let i = 0; i < amount; i++) {
                createParticle(e.clientX, e.clientY);
            }
        }
    }

    //creates actual particle and animation for particle
    function createParticle (x, y) {
        const particle = document.createElement('particle');
        document.body.appendChild(particle);
        let width = Math.floor(Math.random() * 30 + 8);
        let height = width;
        let destinationX = (Math.random() - 0.5) * 300;
        let destinationY = (Math.random() - 0.5) * 300;
        let rotation = Math.random() * 520;
        let delay = Math.random() * 200;


        particle.style.backgroundImage = 'url(./images/BTClogo.png)';

        particle.style.width = `${width}px`;
        particle.style.height = `${height}px`;
        const animation = particle.animate([
            {
                transform: `translate(-50%, -50%) translate(${x}px, ${y}px) rotate(0deg)`,
                opacity: 1
            },
            {
                transform: `translate(-50%, -50%) translate(${x + destinationX}px, ${y + destinationY}px) rotate(${rotation}deg)`,
                opacity: 0
            }
        ], {
            duration: Math.random() * 1000 + 5000,
            easing: 'cubic-bezier(0, .9, .57, 1)',
            delay: delay
        });
        animation.onfinish = removeParticle;
    }

    //deletes particle at end of animation
    function removeParticle (e) {
        e.srcElement.effect.target.remove();
    }

    //sets color of element
    function color() {
        var col = document.getElementById("Wallet");
        col.style.color = random_color();
    }

    //generates random color
    function random_color() {
        var x = Math.floor(Math.random() * 256);
        var y = Math.floor(Math.random() * 256);
        var z = Math.floor(Math.random() * 256);
        var bgColor = "rgb(" + x + "," + y + "," + z + ")";
        console.log(bgColor);

        document.body.style.color = bgColor;
    }


    function updateScore()
    {
	const xhttp = new XMLHttpRequest();
	xhttp.open("GET", "updateScore.php?s="+cryptoCount);
	xhttp.send();
    }
    
    function updateMiner()
    {
	const xhttp = new XMLHttpRequest();
	xhttp.open("GET", "updateMiners.php?m="+miniCount);
	xhttp.send();
	xhttp.open("GET", "updateMiners.php?a="+asicCount);
	xhttp.send();
	xhttp.open("GET", "updateMiners.php?l="+l3Count);
	xhttp.send();
	xhttp.open("GET", "updateMiners.php?h="+hydroCount);
	xhttp.send();
	
    }

    function updateGPU()
    {
	const xhttp = new XMLHttpRequest();
	xhttp.open("GET", "updateMiners.php?g="+gpuIdx);
	xhttp.send();
	
    }
    function unlock()
    {
	    if (aboutUnlocked == true && resourcesUnlocked == true && startYourselfUnlocked == True){    
	const xhttp = new XMLHttpRequest();
	xhttp.open("GET", "unlock.php?p="+1);
	xhttp.send();
	    }
    }
</script>

