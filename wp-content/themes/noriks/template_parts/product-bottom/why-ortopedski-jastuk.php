<?php
/**
 * product-bottom: NORIKS ErgoSit — ORTOPEDSKI JASTUK ZA SJEDENJE (orto-ortopedski-jastuk)
 * 1:1 kopija originalne stranice (celinva.com/products/orthopedic-cushion):
 * iste sekcije, isti redoslijed, iste postavitve (lijevo-desno), sadržaj preveden GR,
 * rebrand NORIKS ErgoSit, lokalizirane grafike. Pink akcent #e5157e, navy #121030.
 * Redoslijed (original):
 *   1. marquee  2. "#1 Orthopedic Seat Cushion" + UGC  3. End Tailbone (img L / txt R)
 *   4. Improve Posture (txt L / img R)  5. Relief That Adapts (grid L / txt R)
 *   6. UGC reviews traka  7. Engineered (img L / txt R + CTA)
 *   8. Effective Against (akordeon, puna širina)  9. 20x Cheaper (img L / txt R + CTA)
 *   10. Won't Quit (txt L / tablica R)  11. 60 Days (tamna, značka L / txt R)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$oj  = get_template_directory_uri() . '/img/ortopedski-jastuk/';
$ojv = get_template_directory_uri() . '/img/ortopedski-jastuk/videos/';
$oj_img = function( $file, $alt ) use ( $oj ) {
  return '<img src="'.esc_url($oj.$file).'" alt="'.esc_attr($alt).'" loading="lazy" onerror="this.style.display=\'none\'">';
};
?>

<!-- ============ 1) Marquee (tamna traka, vrti se) ============ -->
<div class="oj-marquee" aria-hidden="true">
  <div class="oj-marquee-track">
    <?php $oj_ticker = array('ΔΙΑΠΝΕΟΝ ΚΑΙ ΠΛΕΝΟΜΕΝΟ','ΤΕΛΕΙΑ ΕΥΘΥΓΡΑΜΜΙΣΗ','ΑΦΡΟΣ STABILITYCORE™','ΠΙΣΤΟΠΟΙΗΣΗ OEKO-TEX®','ΥΠΟΑΛΛΕΡΓΙΚΟ','ΘΗΚΗ SILKFLEX™');
    for ( $r = 0; $r < 2; $r++ ) { foreach ( $oj_ticker as $t ) { echo '<span class="oj-tick">'.esc_html($t).'</span><span class="oj-dot">•</span>'; } } ?>
  </div>
</div>

<!-- ============ 2) "Svjetski #1" + UGC karusel ============ -->
<section class="oj-sec">
  <div class="oj-wrap">
    <h2 class="oj-hero-h">Το <em>#1 ορθοπεδικό μαξιλάρι καθίσματος</em> στον κόσμο για καθημερινή άνεση</h2>
    <p class="oj-hero-sub">Το εμπιστεύονται χιλιάδες ικανοποιημένοι πελάτες — από <strong>οδηγούς στον δρόμο έως εργαζόμενους γραφείου και οικογένειες στο σπίτι.</strong></p>
    <div class="oj-ugc-grid oj-ugc-5">
      <?php for ( $i = 1; $i <= 4; $i++ ) : ?>
        <div class="oj-ugc-item" data-src="<?php echo esc_url( $ojv.'nasi-'.$i.'.mp4' ); ?>">
          <video class="oj-ugc-video" preload="metadata" playsinline muted></video>
          <span class="oj-ugc-play" aria-label="Αναπαραγωγή"></span>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- ============ 3) Kraj boli u trtici — slika LIJEVO, tekst DESNO ============ -->
<section class="oj-sec oj-alt">
  <div class="oj-wrap oj-row2">
    <div class="oj-media"><?php echo $oj_img('07_lifestyle_HR.png','Πριν και μετά — πόνος στον κόκκυγα στην οδήγηση'); ?></div>
    <div class="oj-copy">
      <h2 class="oj-h2"><em class="oj-pink-i">Τέλος στον πόνο σε κόκκυγα, ισχιαλγία και μέση</em> από το κάθισμα</h2>
      <p>Οι περισσότερες καρέκλες καταπονούν το σώμα σας μέσα σε 30 λεπτά. <strong>Οι γοφοί γέρνουν, η σπονδυλική στήλη καμπουριάζει και η πίεση αυξάνεται στον κόκκυγα και στο ισχιακό νεύρο.</strong> Γι' αυτό οι μεγάλες διαδρομές, η δουλειά γραφείου ή το δείπνο στο τραπέζι αφήνουν τη μέση πονεμένη, πιασμένη ή μουδιασμένη.</p>
      <p>Το NORIKS <strong>ορθοπεδικό μαξιλάρι ErgoSit</strong> είναι φτιαγμένο διαφορετικά. Η εγκοπή για τον κόκκυγα εξαλείφει την άμεση πίεση στο κοκκυγικό οστό, ενώ ο ανατομικός σχεδιασμός στηρίζει τη σπονδυλική στήλη και επαναφέρει την υγιή στάση. Ο αφρός μνήμης υψηλής πυκνότητας κατανέμει το βάρος ομοιόμορφα σε γοφούς και μηρούς και διατηρεί τη ροή του αίματος, ώστε τα πόδια να μη μουδιάζουν.</p>
    </div>
  </div>
</section>

<!-- ============ 4) Poboljšajte držanje — tekst LIJEVO, slika DESNO ============ -->
<section class="oj-sec">
  <div class="oj-wrap oj-row2">
    <div class="oj-copy">
      <h2 class="oj-h2">Βελτιώστε τη στάση σας και ενισχύστε την κυκλοφορία</h2>
      <p>Τα καθίσματα αυτοκινήτου και οι καρέκλες γραφείου είναι φτιαγμένα για αντοχή, όχι για το σώμα σας. Το σχήμα τους αναγκάζει τους γοφούς να βυθίζονται, τους μηρούς να χώνονται στο κάθισμα και την κυκλοφορία να επιβραδύνεται — τα πόδια γίνονται ανήσυχα και η μέση πονά για ώρα αφότου σηκωθείτε.</p>
      <p>Το NORIKS <strong>ErgoSit</strong> σχεδιάστηκε για πολλές ώρες. Η διαμορφωμένη βάση κρατά τους γοφούς στο ίδιο επίπεδο, τα ανατομικά άκρα μειώνουν την πίεση στους μηρούς και η ανύψωση στηρίζει τη σπονδυλική στήλη χιλιόμετρο με το χιλιόμετρο. Το αποτέλεσμα; Όρθια στάση, υγιής κυκλοφορία και ώρες καθίσματος χωρίς πόνο και πιάσιμο.</p>
    </div>
    <div class="oj-media"><video class="oj-secvid" src="<?php echo esc_url( $ojv.'drzanje.mp4' ); ?>" autoplay muted loop playsinline preload="metadata"></video></div>
  </div>
</section>

<!-- ============ 5) Prilagođava se gdje god sjedite — grid 4 LIJEVO, tekst DESNO ============ -->
<section class="oj-sec oj-alt">
  <div class="oj-wrap oj-row2">
    <div class="oj-media"><?php echo $oj_img('prilagodba.webp','NORIKS ErgoSit — προσαρμόζεται όπου κι αν κάθεστε'); ?></div>
    <div class="oj-copy">
      <h2 class="oj-h2">Ανακούφιση που προσαρμόζεται όπου κι αν κάθεστε.</h2>
      <p>Το NORIKS <strong>ErgoSit</strong> προσαρμόζεται σε κάθε σημείο όπου κάθεστε. Η σταθερή αντιολισθητική βάση το κρατά στη θέση του σε <strong>καθίσματα αυτοκινήτου, καρέκλες γραφείου, καρέκλες τραπεζαρίας και αναπηρικά αμαξίδια</strong> — ώστε η άνεση να σας ακολουθεί όλη την ημέρα.</p>
      <p>Ο αφρός μνήμης υψηλής πυκνότητας στηρίζει το σώμα χωρίς να ξεφουσκώνει, ενώ η πλενόμενη, αφαιρούμενη θήκη μένει φρέσκια, καθαρή και έτοιμη για καθημερινή χρήση.</p>
    </div>
  </div>
</section>

<!-- ============ 6) Trust traka (kao original press-bar, ali s pravim NORIKS oznakama) + SLIKE kupaca ============ -->
<section class="oj-sec oj-stills-sec">
  <div class="oj-trustbar" aria-hidden="true">
    <div class="oj-trustbar-track">
      <?php $oj_trust = array('120.000+ ΠΕΛΑΤΕΣ','ΒΑΘΜΟΛΟΓΙΑ 4,8/5','OEKO-TEX®','ΣΥΣΤΑΣΗ ΓΙΑΤΡΩΝ','ΕΓΓΥΗΣΗ 60 ΗΜΕΡΩΝ','ΟΡΘΟΠΕΔΙΚΟΣ ΣΧΕΔΙΑΣΜΟΣ');
      for ( $r = 0; $r < 2; $r++ ) { foreach ( $oj_trust as $t ) { echo '<span class="oj-trust-item">'.esc_html($t).'</span><span class="oj-trust-dot">•</span>'; } } ?>
    </div>
  </div>
  <div class="oj-wrap">
    <div class="oj-stills">
      <?php for ( $i = 1; $i <= 6; $i++ ) : ?>
        <img src="<?php echo esc_url( $oj.'galerija/li'.$i.'.webp' ); ?>" alt="NORIKS ErgoSit — ικανοποιημένοι πελάτες" loading="lazy" onerror="this.style.display='none'">
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- ============ 7) Osmišljen s ortopedskim znanjem — slika LIJEVO, tekst DESNO + CTA ============ -->
<section class="oj-sec oj-alt">
  <div class="oj-wrap oj-row2">
    <div class="oj-media"><?php echo $oj_img('04_lijecnik_HR.png','Σύσταση γιατρού — NORIKS ErgoSit'); ?></div>
    <div class="oj-copy">
      <h2 class="oj-h2">Σχεδιασμένο με ορθοπεδική γνώση, φτιαγμένο για καθημερινό κάθισμα.</h2>
      <p>Με τη συμβολή ορθοπεδικών ειδικών και μήνες εργονομικών δοκιμών, το NORIKS <strong>ErgoSit</strong> σχεδιάστηκε για να ανακουφίζει τους πιο συχνούς πόνους που προκαλεί το πολύωρο κάθισμα — από την πίεση στον κόκκυγα έως την ενόχληση στη μέση και τους γοφούς.</p>
      <a class="oj-cta" href="#bundle-selector">👉 ΠΑΡΑΓΓΕΙΛΕΤΕ ΤΩΡΑ</a>
    </div>
  </div>
</section>

<!-- ============ 8) Učinkovito protiv čestih problema — akordeon, PUNA ŠIRINA ============ -->
<section class="oj-sec">
  <div class="oj-wrap">
    <h2 class="oj-h2 oj-center"><em class="oj-pink-i">Αποτελεσματικό ενάντια</em> σε συχνά προβλήματα του καθίσματος</h2>
    <div class="oj-acc">
      <?php
      $oj_probs = array(
        array('Πόνος στον κόκκυγα (κοκκυγικό οστό)','Η εγκοπή για τον κόκκυγα αφαιρεί την πίεση από το κοκκυγικό οστό και κατανέμει το βάρος σε όλο το μαξιλάρι, ώστε να μη νιώθετε εκείνον τον οξύ, καυστικό πόνο ήδη μετά από λίγα λεπτά καθίσματος.'),
        array('Ισχιαλγία και σουβλιές στο πόδι','Κρατώντας τους γοφούς στο ίδιο επίπεδο και τη σπονδυλική στήλη όρθια, το μαξιλάρι αποφορτίζει το ισχιακό νεύρο — ώστε να μπορείτε να κάθεστε, να οδηγείτε ή να εργάζεστε χωρίς τον διαπεραστικό πόνο που απλώνεται στα πόδια.'),
        array('Πόνος στη μέση','Οι περισσότερες καρέκλες αφήνουν κενό πίσω από τη μέση. Το NORIKS το γεμίζει, επαναφέρει τη φυσική καμπύλη της σπονδυλικής στήλης και μειώνει τη μυϊκή ένταση στις πολλές ώρες καθίσματος.'),
        array('Μούδιασμα και πρήξιμο στα πόδια','Οι επίπεδες επιφάνειες κόβουν την κυκλοφορία. Τα ανατομικά άκρα του μαξιλαριού αποφορτίζουν τους μηρούς και διατηρούν τη ροή του αίματος, ώστε τα πόδια να νιώθουν ελαφριά και γεμάτα ενέργεια, όχι βαριά ή μουδιασμένα.'),
        array('Πόνος στην ιερολαγόνια άρθρωση και τους γοφούς','Το ανομοιόμορφο βάρος καταπονεί γοφούς και αρθρώσεις. Το NORIKS κατανέμει την πίεση ομοιόμορφα, βοηθά να διατηρείται ισορροπημένη στάση και μειώνει την ένταση στους γοφούς.'),
        array('Ανακούφιση για ευαίσθητο κάθισμα','Για τις ευαίσθητες περιοχές, το μαξιλάρι συνδυάζει σταθερή στήριξη με απαλό ανατομικό περίγραμμα — αποφορτίζει την πίεση ώστε να κάθεστε άνετα ακόμη κι όταν το σώμα είναι ευαίσθητο.'),
      );
      foreach ( $oj_probs as $p ) : ?>
        <div class="oj-acc-item">
          <button class="oj-acc-head" type="button" aria-expanded="false">
            <span class="oj-acc-tick">✔</span><span class="oj-acc-title"><?php echo esc_html($p[0]); ?></span><span class="oj-acc-chev">⌄</span>
          </button>
          <div class="oj-acc-body"><p><?php echo esc_html($p[1]); ?></p></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 9) 20x jeftinije — slika LIJEVO, tekst DESNO + CTA ============ -->
<section class="oj-sec">
  <div class="oj-wrap oj-row2">
    <div class="oj-media"><?php echo $oj_img('14_vsebina_HR.png','NORIKS ErgoSit — καθίστε καλύτερα, ζήστε καλύτερα'); ?></div>
    <div class="oj-copy">
      <h2 class="oj-h2"><em class="oj-pink-i">20× φθηνότερο</em> από τις ακριβές λύσεις</h2>
      <p>Οι περισσότεροι <strong>ξοδεύουν χιλιάδες</strong> προσπαθώντας να λύσουν τον πόνο από το κάθισμα:</p>
      <ul class="oj-x">
        <li><span>✕</span> Εργονομική καρέκλα: <strong>750–1.100 €</strong></li>
        <li><span>✕</span> Εβδομαδιαίες επισκέψεις σε χειροπράκτη: <strong>70–140 € ανά επίσκεψη</strong> (3.000+ € τον χρόνο)</li>
        <li><span>✕</span> Φυσικοθεραπεία: <strong>190 €+ ανά επίσκεψη</strong>, συχνά με εβδομάδες αναμονής</li>
      </ul>
      <p><strong>Ορθοπεδικό μαξιλάρι NORIKS ErgoSit</strong></p>
      <p>Μία αγορά, μία φορά, που ανακουφίζει τον πόνο σε κόκκυγα, μέση και γοφούς — χωρίς να αδειάσει το πορτοφόλι σας.</p>
      <a class="oj-cta" href="#bundle-selector">Παραγγείλετε τώρα</a>
    </div>
  </div>
</section>

<!-- ============ 10) Jastuk koji ne odustaje — tekst LIJEVO, tablica DESNO ============ -->
<section class="oj-sec">
  <div class="oj-wrap oj-row2">
    <div class="oj-copy">
      <h2 class="oj-h2">Το μαξιλάρι που δεν τα παρατάει</h2>
      <p class="oj-lead">Μένει σταθερό, ανακουφίζει τον πόνο και προσφέρει στήριξη εκεί όπου τα άλλα αποτυγχάνουν.</p>
    </div>
    <div class="oj-cmp-wrap">
      <span class="oj-cmp-others">Άλλα</span>
      <div class="oj-cmp-pill"><span>NORIKS</span></div>
      <div class="oj-cmp-card">
        <div class="oj-cmp-row"><div class="f">Αποφορτίζει κόκκυγα και μέση</div><div class="us">✓</div><div class="no">✕</div></div>
        <div class="oj-cmp-row"><div class="f">Στηρίζει όρθια, υγιή στάση</div><div class="us">✓</div><div class="no">✕</div></div>
        <div class="oj-cmp-row"><div class="f">Διατηρεί το σχήμα του στον χρόνο</div><div class="us">✓</div><div class="no">✕</div></div>
        <div class="oj-cmp-row"><div class="f">Αντιολισθητική βάση</div><div class="us">✓</div><div class="no">✕</div></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ 11) Isprobajte 60 dana — TAMNA, značka LIJEVO, tekst DESNO ============ -->
<section class="oj-sec oj-guar-sec">
  <div class="oj-wrap">
  <div class="oj-guarantee oj-row2">
    <div class="oj-guar-badge"><?php echo $oj_img('15_znacka_60_dana_HR.png','Εγγύηση επιστροφής χρημάτων 60 ημερών'); ?></div>
    <div class="oj-guar-copy">
      <h2 class="oj-h2 oj-h2-light">Δοκιμάστε το <em class="oj-pink-i">60 ημέρες</em>, χωρίς άγχος</h2>
      <p>Το να βρείτε το σωστό μαξιλάρι δεν είναι εύκολο — πολλά ξεφουσκώνουν ή απλώς δεν φέρνουν πραγματική ανακούφιση. Γι' αυτό κάθε NORIKS <strong>ErgoSit</strong> συνοδεύεται από την <strong>εγγύηση άνεσης 60 ημερών</strong>.</p>
      <p>Πάρτε το στο γραφείο, στο αυτοκίνητο ή για τις πολλές ώρες στο σπίτι. Αν δεν νιώσετε λιγότερο πόνο και περισσότερη άνεση στο καθημερινό σας κάθισμα, η ομάδα μας θα φροντίσει να γίνει όπως πρέπει.</p>
      <p>Γιατί όταν πρόκειται για την υγεία και την άνεσή σας, πιστεύουμε ότι τη διαφορά πρέπει να τη <strong>νιώθετε</strong> — όχι απλώς να την ελπίζετε.</p>
    </div>
  </div>
  </div>
</section>

<style>
  .oj-wrap { max-width: 1440px; margin: 0 auto; padding: 0 22px; } /* ista širina kao gornji .product container */
  .oj-wrap-narrow { max-width: 820px; margin: 0 auto; padding: 0 18px; }
  .oj-sec { padding: 60px 0; }
  .oj-alt { background: #faf6f9; }
  .oj-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
  .oj-h2 { font-size: clamp(24px,3vw,36px); font-weight: 800; color: #121030; line-height: 1.15; margin: 0 0 16px; }
  .oj-h2-light { color: #fff; }
  .oj-pink-i { color: #e5157e; font-style: italic; }
  .oj-center { text-align: center; }
  .oj-copy p, .oj-lead { font-size: 15.5px; line-height: 1.6; color: #3a3450; margin: 0 0 14px; }
  .oj-lead { font-size: 16px; color: #55506b; }
  .oj-media img, .oj-grid2 img, .oj-media video.oj-secvid { width: 100%; height: auto; display: block; border-radius: 18px; box-shadow: 0 14px 40px rgba(27,21,51,.10); }

  /* 1) Marquee */
  .oj-marquee { background: #121030; overflow: hidden; white-space: nowrap; }
  .oj-marquee-track { display: inline-block; padding: 13px 0; animation: ojScroll 26s linear infinite; }
  .oj-tick { color: #fff; font-weight: 800; font-style: italic; font-size: 15px; letter-spacing: .06em; text-transform: uppercase; }
  .oj-dot { color: #e5157e; margin: 0 22px; font-weight: 800; }
  @keyframes ojScroll { from { transform: translateX(0); } to { transform: translateX(-50%); } }

  /* 2) hero */
  .oj-hero-h { text-align: center; font-size: clamp(26px,3.4vw,42px); font-weight: 800; color: #121030; line-height: 1.12; margin: 0 auto 12px; max-width: 900px; }
  .oj-hero-h em { color: #e5157e; font-style: italic; }
  .oj-hero-sub { text-align: center; font-size: 16px; color: #55506b; max-width: 660px; margin: 0 auto 28px; line-height: 1.55; }

  /* UGC */
  .oj-ugc-grid { display: grid; gap: 12px; }
  .oj-ugc-3 { grid-template-columns: repeat(3,1fr); max-width: 760px; margin: 0 auto; }
  .oj-ugc-5 { grid-template-columns: repeat(4,1fr); max-width: 1000px; margin: 0 auto; }
  .oj-ugc-item { position: relative; aspect-ratio: 9/16; border-radius: 12px; overflow: hidden; background: #121030; cursor: pointer; }
  .oj-ugc-item video { width: 100%; height: 100%; object-fit: cover; display: block; }
  .oj-ugc-play { position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%); width: 50px; height: 50px; border-radius: 50%; background: rgba(255,255,255,.92); }
  .oj-ugc-play::after { content: ""; position: absolute; top: 50%; left: 54%; transform: translate(-50%,-50%); border-style: solid; border-width: 10px 0 10px 16px; border-color: transparent transparent transparent #121030; }

  .oj-grid2 { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; }

  /* CTA — tamni navy gumb kao original */
  .oj-cta { display: inline-block; background: #121030; color: #fff; font-weight: 800; font-size: 15px; letter-spacing: .04em; padding: 15px 34px; border-radius: 8px; text-decoration: none; margin-top: 8px; }
  .oj-cta:hover { background: #e5157e; color: #fff; }

  /* 8) akordeon */
  .oj-acc { max-width: 880px; margin: 18px auto 0; border-top: 1px solid #ecdfe8; }
  .oj-acc-item { border-bottom: 1px solid #ecdfe8; }
  .oj-acc-head { width: 100%; background: none; border: 0; display: flex; align-items: center; gap: 12px; padding: 16px 4px; cursor: pointer; font-size: 15.5px; font-weight: 700; color: #121030; text-align: left; }
  .oj-acc-tick { color: #22b573; font-weight: 800; }
  .oj-acc-title { flex: 1; }
  .oj-acc-chev { transition: transform .2s; color: #b39aab; }
  .oj-acc-item.open .oj-acc-chev { transform: rotate(180deg); }
  .oj-acc-body { max-height: 0; overflow: hidden; transition: max-height .25s ease; }
  .oj-acc-item.open .oj-acc-body { max-height: 260px; }
  .oj-acc-body p { font-size: 14.5px; line-height: 1.6; color: #4a4560; margin: 0 0 16px; padding-left: 28px; }

  /* 9) X lista */
  .oj-x { list-style: none; margin: 0 0 14px; padding: 0; }
  .oj-x li { font-size: 15px; color: #3a3450; margin: 0 0 10px; }
  .oj-x li span { color: #d64545; font-weight: 800; margin-right: 8px; }

  /* 6) Trust traka — svijetla, "logotip" stil kao original press-bar (mijesana tipografija) */
  .oj-trustbar { background: #f7f0f2; overflow: hidden; white-space: nowrap; width: 100vw; margin-left: calc(50% - 50vw); }
  .oj-trustbar-track { display: inline-block; padding: 14px 0; animation: ojScroll 34s linear infinite; }
  .oj-trust-item { color: #9b96a6; font-weight: 800; font-style: italic; font-size: 15px; letter-spacing: .06em; text-transform: uppercase; }
  .oj-trust-dot { color: #e5157e; margin: 0 22px; font-weight: 800; }

  /* 6) UGC stillovi (slike kupaca) — full-bleed kao original */
  .oj-stills-sec { padding: 20px 0 40px; }
  .oj-stills-sec .oj-wrap { margin-top: 0; }
  .oj-stills-sec .oj-wrap { max-width: none; padding: 0; }
  .oj-stills { display: grid; grid-template-columns: repeat(6,1fr); gap: 6px; width: 100vw; margin-left: calc(50% - 50vw); }
  .oj-stills img { width: 100%; aspect-ratio: 9/16; object-fit: cover; display: block; border-radius: 0; }

  /* 10) usporedba — bijela kartica + plavajuća pink pilula (kao original) */
  .oj-cmp-wrap { position: relative; padding: 40px 0 30px; }
  .oj-cmp-others { position: absolute; top: 8px; right: 0; width: 88px; text-align: center; font-weight: 800; color: #121030; font-size: 14px; }
  .oj-cmp-pill { position: absolute; top: 0; bottom: 0; right: 96px; width: 100px; background: #e5157e; border-radius: 28px; box-shadow: 0 16px 36px rgba(229,21,126,.35); z-index: 1; display: flex; justify-content: center; align-items: flex-start; padding-top: 14px; }
  .oj-cmp-pill span { color: #fff; font-weight: 800; font-size: 10.5px; letter-spacing: .14em; }
  .oj-cmp-card { position: relative; background: #fff; border-radius: 16px; box-shadow: 0 12px 34px rgba(27,21,51,.10); border: 1px solid #f1edf3; }
  .oj-cmp-row { display: grid; grid-template-columns: 1fr 100px 88px; align-items: center; border-bottom: 1px solid #f2eff4; min-height: 62px; }
  .oj-cmp-row:last-child { border-bottom: 0; }
  .oj-cmp-row .f { padding: 14px 16px; text-align: center; font-weight: 800; color: #121030; font-size: 15px; line-height: 1.3; }
  .oj-cmp-row .us { position: relative; z-index: 2; text-align: center; color: #fff; font-weight: 800; font-size: 18px; }
  .oj-cmp-row .no { text-align: center; color: #e23a3a; font-weight: 800; font-size: 16px; }

  /* 11) jamstvo — zaobljena tamna kartica (kao original) */
  .oj-guar-sec { padding-top: 20px; }
  .oj-guarantee { background: #121030; border-radius: 18px; padding: 52px 48px; }
  .oj-guar-copy p { color: #cfc9e0; font-size: 15px; line-height: 1.6; margin: 0 0 12px; }
  .oj-guar-badge img { width: 280px; max-width: 100%; height: auto; margin: 0 auto; display: block; border-radius: 50%; }

  @media (max-width: 860px) {
    /* mobilni: prepolovljeni razmaci medju sekcijama */
    .oj-sec { padding: 30px 0; }
    .oj-marquee + section.oj-sec { padding-top: 20px; }
    .oj-hero-h { font-size: 2rem !important; }
    .oj-stills-sec { padding: 10px 0 20px; }
    .oj-guar-sec { padding-top: 10px; }
    .oj-row2 { grid-template-columns: 1fr; gap: 18px; }
    .oj-ugc-3 { grid-template-columns: repeat(3,1fr); }
    /* hero videi: horizontalni slider u jednom redu (kao original) */
    .oj-ugc-5 { display: flex; overflow-x: auto; gap: 10px; scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch; padding: 0 4px 6px; }
    .oj-ugc-5 .oj-ugc-item { flex: 0 0 46%; scroll-snap-align: center; }
    .oj-stills { grid-template-columns: repeat(3,1fr); }
    .oj-row2 .oj-media, .oj-row2 .oj-grid2 { order: -1; }
    .oj-guarantee { padding: 34px 22px; }
    .oj-guarantee .oj-guar-badge { order: -1; }
    .oj-cmp-others { width: 72px; }
    .oj-cmp-pill { right: 78px; width: 84px; }
    .oj-cmp-row { grid-template-columns: 1fr 84px 72px; }
  }

  /* No-attrs: sakrij "Tablica veličina" ako se negdje pojavi */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap, #open-size-chart, #open-size-chartCustom { display: none !important; }
</style>

<script>
(function(){
  /* Pink active bundle-option (preživljava LiteSpeed UCSS). */
  function paintOj(){
    var sel = document.getElementById('bundle-selector'); if(!sel) return;
    sel.querySelectorAll('.bundle-option').forEach(function(c){ c.style.removeProperty('border-color'); c.style.removeProperty('background'); c.style.removeProperty('border-width'); });
    var checked = sel.querySelector('input[name="bundle_option"]:checked');
    var card = checked ? checked.closest('.bundle-option') : (sel.querySelector('.bundle-option.active') || sel.querySelector('.bundle-option'));
    if(card){ card.style.setProperty('border-color','#ED5E95','important'); card.style.setProperty('background','rgba(237,94,149,0.1)','important'); card.style.setProperty('border-width','2px','important'); }
  }
  function bindOj(){ var sel=document.getElementById('bundle-selector'); if(!sel) return; paintOj(); sel.querySelectorAll('input[name="bundle_option"]').forEach(function(r){ r.addEventListener('change', paintOj); }); }
  if(document.readyState==='loading'){ document.addEventListener('DOMContentLoaded', bindOj); } else { bindOj(); }

  /* Akordeon */
  document.querySelectorAll('.oj-acc-head').forEach(function(btn){
    btn.addEventListener('click', function(){ var it=btn.closest('.oj-acc-item'); var open=it.classList.toggle('open'); btn.setAttribute('aria-expanded', open?'true':'false'); });
  });

  /* UGC video: prikaži prvi kadar, klik = pusti sa zvukom */
  document.querySelectorAll('.oj-ugc-item').forEach(function(item){
    var v = item.querySelector('.oj-ugc-video'); if(!v) return; v.src = item.dataset.src;
    item.addEventListener('click', function(){
      if (item.dataset.loaded) return; item.dataset.loaded='1';
      var play=item.querySelector('.oj-ugc-play'); if(play) play.remove();
      v.muted=false; v.controls=true; v.playsInline=true; var p=v.play(); if(p&&p.catch) p.catch(function(){});
    });
  });

  /* Glatki scroll za CTA */
  document.querySelectorAll('a.oj-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){ e.preventDefault(); var t=document.getElementById('bundle-selector')||document.querySelector('.single_add_to_cart_button'); if(t) t.scrollIntoView({behavior:'smooth',block:'center'}); });
  });
})();
</script>
