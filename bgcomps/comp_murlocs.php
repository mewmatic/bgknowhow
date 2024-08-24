<?php include_once('../header.php'); ?>

<h2 class="page_title">Standard Compositions: Murlocs</h2>
<p>
    <?php include_once('intro.php'); ?>
</p>
<br>
<hr>
<br>
<p>
    <a href="/bgstrategy/?show=minions&type=murloc"><i class="bi bi-box-arrow-up-right"></i> All available Murlocs and Murloc-associated minions</a>
    <br><br>
    <!-- general info about Murlocs -->
</p>
<div class="comp_wrapper">
    <h3 id="starter">Murloc Starter Kit Composition <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Honcho', 'Prince', 'Prince', 'Bassgill', 'Gillmother', 'Gillmother', 'Brann'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This is basically a composition to start out Murlocs before you start switching the cards into more endgame like the two builds below. You're going to use <strong>Fairy Gillmother</strong> as a way to find and search for not only battlecries for <strong>'Loc Prince</strong>, but Bream Counter. Once you find Bream Counter, then you start finding Bassgill or Diremuck Forager. If you don't get Bream Counter then you use the battlecries gained to buff up your other Murlocs. Eventually, if you can't get them strong enough you get <a class="hoverimage" href="/bgstrategy/minion/?id=343">Operatic Belcher</a> to give them venomous.
    </p>

    <h3 id="battlecry">Battlecry/Handloc Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Choral', 'Burglar', 'Bassgill', 'Primalfin', 'Murk-Eye', 'Murky', 'Brann'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        I decided to combine Battlecry and Handloc Murlcos just because of how interchangable the cards are. You NEED a lot of these cards, plus Bream Counter. The only major change is whether you want to generate cards with Primalfin Lookout, gain more stats with Murky, or use venom cards like Operatic Belcher. Murlocs are a challenging build to create due to how many Tier-5 and Tier-6 minions you need, and how little of the lower tier minions in Tier 1-3, matter in the grand scheme of things. As a guide for just how Battleground works in general, your early game does not determine what your build later on becomes. Even if you got the Murloc Starter Kit, what matters is what you triple into and what your trinkets will look like. Going back to slowscaling, your main form of scaling will be through Bream Counter, Murky, King Bagurgle, and the newly added Mrglin' Burglar. Keep this in mind when you start using cards like Primalfin and Young Murk-Eye. While you will generate a lot of cards, you may lose strength. Always balance between tempo and value!

        Nerglish Phrasebook, Twin Sky Lanterns, Rockin' Music Box, Belcher Portrait, Goldenizer Supply, Bob-ble Head, Essence of Dreams, and Tinyfin Onesie are ideal trinkets.
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
