<?php include_once('../header.php'); ?>

<h2 class="page_title">Standard Compositions: Beasts</h2>
<p>
    <?php include_once('intro.php'); ?>
</p>
<br>
<hr>
<br>
<p>
    <a href="/bgstrategy/?show=minions&type=beast"><i class="bi bi-box-arrow-up-right"></i> All available Beasts and Beast-associated minions</a>
    <br><br>
    In general Beast compositions utilize the many deathrattle effects available for this minion type and/or different ways of buffing your units during the combat phase. They are pretty self-reliant (do not need another minion type to shine) and neither have a special strength nor weakness against other minion types. All Beast builds can be improved by utilizing <a class="hoverimage" href="/bgstrategy/minion/?id=420">Sprightly Scarab</a> to Reborn as many Beasts as possible while building up your endgame composition. Also <a class="hoverimage" href="/bgstrategy/minion/?id=372">Free-Flying Feathermane</a> is generally a solid pickup to keep in your hand.
</p>
<div class="comp_wrapper">
    <h3 id="slamma">Slamma Summon Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Raptor', 'Raptor', 'Octosari', 'Mama Bear', 'Mama Bear', 'Slamma', 'Slamma'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This composition is very much dependend on having at least two <strong>Slamma</strong>s since they scale multipliable. That means two basic ones would multiply the stats of a Beast summoned during combat by 2 x 2 = 4, whereas a golden would just triple their stats. This can heavily scale with other Slammas as long as you have board space (2 x 2 x 3 = 12 for a golden and a regular one). The multiplication by the Slammas is the last effect that goes into the equation, meaning the <strong>Sly Raptor</strong> will first spawn as 7/7, then the Mama Bears will add their +3/+3 buffs (10/10), followed by the Slammas (resulting in 40/40 for the example lineup shown).
        <br><br>
        <!--        Blanchy is a great unit to have in this build due to its high base stats being set when it is reborn. If Murlocs are available this can be made even better by having a <a class="hoverimage" href="/bgstrategy/minion/?id=332">Bassgill</a> summon the Blanchy from your hand since that way gets the buffs off of Mama Bear and the Slammas an extra time, which the reborned version will multiply again, to produce a lot more overall combat value. That is also the reason why a minion like <a class="hoverimage" href="/bgstrategy/minion/?id=61">Rat Pack</a> is not a great fit for this comp, due to the tokens only having a low base stat of 1/1.-->
        <!--        <br><br>-->
        Having Taunt (usually on the Raptors) to protect your Slammas and Mamas to keep them alive is also absolutely neccessary, since your board's power gets at least halved per Slamma that gets killed off. Utilizing <a class="hoverimage" href="/bgstrategy/minion/?id=420">Sprightly Scarab</a> is great for this combo to make the Slammas reborn, since that keeps up the pressure through their pressence, while having them being pretty large if you have a lot of them. <a class="hoverimage" href="/bgstrategy/minion/?id=95">Octosari</a> is also a great unit to combine with Slamma, if you can get it early on and add a <a class="hoverimage" href="/bgstrategy/minion/?id=256">Titus</a> to your board, you can get multiple big summons off of it.
        <br><br>
        Picking up and keeping in hand two <a class="hoverimage" href="/bgstrategy/minion/?id=372">Free-Flying Feathermane</a> will further increase your composition. The counters to this comp you should watch out for, are <a class="hoverimage" href="/bgstrategy/minion/?id=433">Worgen Vigilante</a>, <a class="hoverimage" href="/bgstrategy/minion/?id=226">Blaster</a>, <a class="hoverimage" href="/bgstrategy/minion/?id=255">Sin'dorei</a> and some Venomous setups, since you could end up only having 3-4 really strong units over the fight.
    </p>

    <h3 id="deathrattle">Deathrattle Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Goldrinn', 'Hawkstrider', 'Raptor', 'Octosari', 'Titus', 'Slamma', 'Slamma'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Give taunt to minions that aren't Octosari, <strong>Titus</strong> or Banana Slamma. Give stealth and divine shield to Titus Rivendare or Banana Slamma. Make sure you use <a class="hoverimage" href="/bgstrategy/minion/?id=420">Sprightly Scarab</a> to give reborn to your beasts besides <strong>Hawkstrider</strong>, it's definitely important in this build. Be careful, <a class="hoverimage" href="/bgstrategy/minion/?id=372">Free-Flying Feathermane</a> could be summoned instead of the reborned <strong>Goldrinn</strong>.
        <!--<br><br>
        Look out for the spell <a class="hoverimage" href="/bgstrategy/spell/?id=38">Titus' Tribute</a> which provides the same effect as one <strong>Titus</strong> without needing the board space, but also stacks with it.-->
    </p>

    <h3 id="octosari">Octosari Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Hawkstrider', 'Octosari', 'Titus', 'Slamma', 'Slamma'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This is a special setup with only 5 minions, which works by having <strong>Octosari</strong>'s ability already scaled a bit. You are summoning big sized deathrattles while also guaranteeing <strong>Octosari</strong> will be scaled up.
        <!--<br><br>
        Look out for the spell <a class="hoverimage" href="/bgstrategy/spell/?id=38">Titus' Tribute</a> which provides the same effect as one <strong>Titus</strong> without needing the board space, but also stacks with it.-->
    </p>

    <h3 id="rylak">Rylak Battlecry Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Macaw', 'Macaw', 'Piper', 'Jazzer', 'Rylak', 'Jazzer', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Needs the availability of Quilboars. Very important to not play other Deathrattle (due to <strong>Macaw</strong>) or Taunt (due to <strong>Rylak</strong>) minions. Heavily improves by utilizing <a class="hoverimage" href="/bgstrategy/minion/?id=420">Sprightly Scarab</a> to Reborn <strong>Rylak</strong> followed by the Macaw.
        <!--<br><br>
        Look out for the spell <a class="hoverimage" href="/bgstrategy/spell/?id=38">Titus' Tribute</a> which provides the same effect as one <strong>Titus</strong> without needing the board space, but also stacks with it.-->
    </p>

    <h3 id="rylakdemon">Rylak Battlecry Demon Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Macaw', 'Felbat', 'Felbat', 'Felemental', 'Rylak', 'Felemental', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Needs the availability of Demons. Very important to not play other Deathrattle (due to <strong>Macaw</strong>) or Taunt (due to <strong>Rylak</strong>) minions. Heavily improves by utilizing <a class="hoverimage" href="/bgstrategy/minion/?id=420">Sprightly Scarab</a> to Reborn <strong>Rylak</strong> followed by the Macaw.
        <br><br>
        Improves by the availability of Mechs, because Magnetize is the best option to profit from a heavily buffed tavern (replace a Felbat with a <a class="hoverimage" href="/bgstrategy/minion/?id=53">Deflect-o-Bot</a> in that case). Tricky to play, because your board will be rather weak until you triple minions or get Felbats. <a class="hoverimage" href="/bgstrategy/minion/?id=132">Felbat</a> is also an option to buff your board. The Felementals can be replaced by <a class="hoverimage" href="/bgstrategy/minion/?id=260">Mecha-Jaraxxus</a> in the late game.
        <!--<br><br>
        Look out for the spell <a class="hoverimage" href="/bgstrategy/spell/?id=38">Titus' Tribute</a> which provides the same effect as one <strong>Titus</strong> without needing the board space, but also stacks with it.-->
    </p>
</div>

<br><br>
<hr>
<br>
<p>
    <?php include_once('outro.php'); ?>
</p>
<br><br>

<?php include_once('../footer.php'); ?>
