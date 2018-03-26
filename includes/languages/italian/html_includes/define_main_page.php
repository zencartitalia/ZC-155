<?php if ( $detect->isMobile() && !$detect->isTablet() || $_SESSION['layoutType'] == 'mobile' ) { ?>

<a href="http://www.zen-cart.com/book"><img src="includes/templates/responsive_classic/images/zencart-book-mobile.png" alt="get your manual today" title="Have you got yours yet? Join the 1000's of Zen Cart users that have bought the only comprehensive owners manual !" class="home-image" /></a>
  
<?php  } else if ( $detect->isTablet() || $_SESSION['layoutType'] == 'tablet' ){ ?>

<a href="http://www.zen-cart.com/book"><img src="includes/templates/responsive_classic/images/zencart-book.png" alt="get your manual today" title="Have you got yours yet? Join the 1000's of Zen Cart users that have bought the only comprehensive owners manual !" class="home-image" /></a>

<?php  } else if ( $_SESSION['layoutType'] == 'full' ) { ?>

<a href="http://www.zen-cart.com/book"><img src="includes/templates/responsive_classic/images/zencart-book.png" alt="get your manual today" title="Have you got yours yet? Join the 1000's of Zen Cart users that have bought the only comprehensive owners manual !" class="home-image" /></a>

<?php  } else { ?>

<a href="http://www.zen-cart.com/book"><img src="includes/templates/responsive_classic/images/zencart-book.png" alt="get your manual today" title="Have you got yours yet? Join the 1000's of Zen Cart users that have bought the only comprehensive owners manual !" class="home-image" /></a>

<?php  } ?>

<h4>Ecco il nuovo Zen Cart&reg; v. 1.5.5 in italiano (<a href="http://150.zen-cart.it/" target="_blank">Vedi il sito dedicato</a>)</h4>

<p class="biggerText">Il template di base utilizza PHP Mobile Detect per mostrare una versione ottimizzata del sito a seconda del device.  
    Se sei su desktop e vuoi vedere la versione per tablet, <a class="red" href="index.php?main_page=index&amp;layoutType=tablet">usa questo link.</a>  
    Se vuoi vedere il layout Mobile <a class="red" href="index.php?main_page=index&amp;layoutType=mobile">usa questo link.</a>  
    Per tornare alla versione Desktop <a class="red" href="index.php?main_page=index&amp;layoutType=default">usa questo link.</a></p>

<p>Il Team di <strong><a href="http://www.zen-cart.it/" target="_blank">Zen Cart Italia</a></strong> nel ringraziarti per aver scelto di utilizzare Zen Cart&reg; ha predisposto delle pagine di informazione con delle istruzioni generali di configurazione e modifiche da apportare prima di aprire il negozio al pubblico; inizia immediatamente <u><a href="index.php?main_page=page_2"><strong>leggendo le istruzioni</strong></a></u> predisposte per la configurazione essenziale e l&#39;allestimento.</p>

