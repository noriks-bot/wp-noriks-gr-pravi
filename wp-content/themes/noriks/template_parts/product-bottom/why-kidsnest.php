<?php
/**
 * product-bottom: NORIKS KidsNest — παιδικό μαξιλάρι για σωστή αναπνοή (orto-kidsnest).
 * Kopija tryneedo.com/products/kids-pillow sekcija, GR prijevod (ublazene med. tvrdnje).
 * Redoslijed:
 *   1. Trust marquee (plava)  2. "Pocnite veceras..." (slika L / tekst D, plavi naslov)
 *   3. "Pravilna potpora..." (tekst L / slika D)  4. Statistika 94/60/98 (svijetlo-plava, 3 kartice s krugovima)
 *   5. "#1 djecji jastuk 2026" + zvjezdice + drseca foto traka
 * Plava: #2b3fb0, svijetla: #eef1fb, navy: #1b2450. Slike: img/kidsnest/
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$kn = get_template_directory_uri() . '/img/kidsnest/';
?>

<!-- ============ 1) Trust marquee (plava traka, vrti se) ============ -->
<div class="kn-marquee" aria-hidden="true">
  <div class="kn-marquee-track">
    <?php $kn_ticker = array('ΣΥΣΤΗΝΕΤΑΙ ΑΠΟ ΠΑΙΔΙΑΤΡΟΥΣ','ΑΦΡΟΣ ΜΝΗΜΗΣ OEKO-TEX®','ΔΟΜΗ 3 ΖΩΝΩΝ','90 ΝΥΧΤΕΣ ΔΟΚΙΜΗΣ','ΥΠΟΑΛΛΕΡΓΙΚΟ','ΠΛΕΝΟΜΕΝΗ ΘΗΚΗ');
    for ( $r = 0; $r < 2; $r++ ) { foreach ( $kn_ticker as $t ) { echo '<span class="kn-tick">'.esc_html($t).'</span><span class="kn-dot">•</span>'; } } ?>
  </div>
</div>

<!-- ============ 2) Pocnite veceras — slika LIJEVO, tekst DESNO ============ -->
<section class="kn-sec">
  <div class="kn-wrap kn-row2">
    <div class="kn-media"><img src="<?php echo esc_url( $kn.'01-poravnan-gr.webp' ); ?>" alt="Τέλεια ευθυγράμμιση — κεφάλι, αυχένας και σπονδυλική στήλη στον ύπνο" loading="lazy" onerror="this.style.display='none'"></div>
    <div class="kn-copy">
      <p class="kn-eyebrow">Αναπτύχθηκε με οδοντιάτρους για τους παιδικούς αεραγωγούς</p>
      <h2 class="kn-h2 kn-h2-blue">Ξεκινήστε απόψε να διορθώνετε την κρυφή ζημιά.</h2>
      <p>Οι παιδιατρικοί οδοντίατροι αεραγωγών προειδοποιούν τους γονείς για το ίδιο σιωπηλό πρόβλημα: τα παιδιά που ροχαλίζουν και αναπνέουν από το στόμα δεν «κοιμούνται απλώς χειρότερα». Η γνάθος, ο ουρανίσκος και η δομή του προσώπου τους μπορεί σταδιακά να αναπτύσσονται προς λάθος κατεύθυνση.</p>
      <p><strong>Και το παράθυρο διόρθωσης δεν μένει ανοιχτό για πάντα.</strong></p>
      <p>Το NORIKS <strong>μαξιλάρι KidsNest</strong> σχεδιάστηκε για να <strong>στηρίζει το κεφάλι, τη γνάθο και τους αεραγωγούς στη σωστή θέση κατά τον ύπνο</strong> — ενθαρρύνοντας την αναπνοή από τη μύτη και την πιο υγιή ανάπτυξη του προσώπου όσο ακόμη έχει σημασία.</p>
      <p><strong>Δεν είναι απλώς ένα μαξιλάρι.<br>Είναι νυχτερινή στήριξη των αεραγωγών στα χρόνια που διαμορφώνουν το πρόσωπο του παιδιού σας.</strong></p>
    </div>
  </div>
</section>

<!-- ============ 3) Pravilna potpora — tekst LIJEVO, slika DESNO ============ -->
<section class="kn-sec">
  <div class="kn-wrap kn-row2">
    <div class="kn-copy">
      <h2 class="kn-h2 kn-h2-blue">Η σωστή στήριξη κεφαλιού και αυχένα είναι το κλειδί για υγιή ύπνο.</h2>
      <p>Το εργονομικό παιδικό μαξιλάρι κρατά <strong>το κεφάλι και τον αυχένα σε φυσική ευθυγράμμιση και βοηθά να αποτραπεί η κλίση του κεφαλιού</strong> κατά τη διάρκεια της νύχτας. Έτσι η σπονδυλική στήλη παραμένει σωστά ευθυγραμμισμένη — ακόμη κι αν το παιδί στριφογυρίζει πολύ στον ύπνο του.</p>
      <p><strong>Το αποτέλεσμα: πιο ήρεμος ύπνος και καλύτερη ανάκαμψη.</strong></p>
    </div>
    <div class="kn-media"><img src="<?php echo esc_url( $kn.'02-san.jpg' ); ?>" alt="Παιδί κοιμάται ήρεμα στο μαξιλάρι KidsNest" loading="lazy" onerror="this.style.display='none'"></div>
  </div>
</section>

<!-- ============ 4) Statistika — svijetlo-plava, 3 kartice s krugovima ============ -->
<section class="kn-sec kn-stats-sec">
  <div class="kn-wrap">
    <h2 class="kn-h2 kn-h2-blue kn-center">Σχεδιασμένο να προστατεύει το πρόσωπο του παιδιού σας που μεγαλώνει</h2>
    <p class="kn-sub kn-center"><strong>Ο ύπνος με ανοιχτό στόμα στην παιδική ηλικία μπορεί να αλλάξει τη μορφή του προσώπου που αναπτύσσεται. Το KidsNest κρατά το κεφάλι του παιδιού σας ευθυγραμμισμένο ώστε να αναπνέει από τη μύτη.</strong></p>
    <div class="kn-stats">
      <?php
      $kn_stats = array(
        array('94','165.3','των γονιών παρατηρούν ότι το παιδί κοιμάται με <strong>κλειστό στόμα</strong> μέσα σε 2 εβδομάδες'),
        array('60','105.5','της ανάπτυξης του προσώπου του <strong>παιδιού</strong> σας διαμορφώνεται έως τα 6 έτη — αυτό το παράθυρο δεν ξανανοίγει'),
        array('98','172.3','των γονιών θα συνιστούσαν το <strong>KidsNest</strong> για να προστατεύσει το χαμόγελο ενός ακόμη παιδιού'),
      );
      foreach ( $kn_stats as $st ) : ?>
      <div class="kn-stat-card">
        <svg class="kn-ring" viewBox="0 0 64 64" aria-hidden="true">
          <circle cx="32" cy="32" r="28" fill="none" stroke="#dfe5f5" stroke-width="5"/>
          <circle cx="32" cy="32" r="28" fill="none" stroke="#2b3fb0" stroke-width="5" stroke-linecap="round" stroke-dasharray="<?php echo esc_attr($st[1]); ?> 175.9" transform="rotate(-90 32 32)"/>
          <text x="32" y="38" text-anchor="middle" class="kn-ring-t"><?php echo esc_html($st[0]); ?>%</text>
        </svg>
        <p><?php echo wp_kses_post($st[2]); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 5) #1 djecji jastuk + zvjezdice + drseca foto traka ============ -->
<section class="kn-sec kn-rated-sec">
  <div class="kn-wrap">
    <h2 class="kn-h2 kn-h2-blue kn-center">Ψηφίστηκε το #1 παιδικό μαξιλάρι ύπνου για το 2026.</h2>
    <p class="kn-sub kn-center">Στηρίξτε τον ύπνο τους — στηρίξτε τα χρόνια που μεγαλώνουν.</p>
    <p class="kn-stars kn-center"><span aria-hidden="true">★★★★★</span> Βαθμολογία 4,8/5 με βάση 140+ αξιολογήσεις</p>
  </div>
  <div class="kn-strip">
    <div class="kn-strip-track">
      <?php for ( $r = 0; $r < 2; $r++ ) : for ( $i = 1; $i <= 5; $i++ ) : ?>
        <img src="<?php echo esc_url( $kn.'traka/t'.$i.'.webp' ); ?>" alt="NORIKS KidsNest — παιδιά και γονείς" loading="lazy" onerror="this.style.display='none'">
      <?php endfor; endfor; ?>
    </div>
  </div>
</section>

<!-- ============ 6) Kvaliteta materijala — slika LIJEVO, tekst DESNO ============ -->
<section class="kn-sec">
  <div class="kn-wrap kn-row2">
    <div class="kn-media"><img src="<?php echo esc_url( $kn.'03-detalj.webp' ); ?>" alt="KidsNest — δομή 3 ζωνών και διαπνέον ύφασμα από κοντά" loading="lazy" onerror="this.style.display='none'"></div>
    <div class="kn-copy">
      <h2 class="kn-h2 kn-h2-blue">Ποιότητα που τη νιώθετε — νύχτα με τη νύχτα.</h2>
      <p>Το πυκνό, διαπνέον πλεκτό ύφασμα και η προσεκτικά διαμορφωμένη επιφάνεια δεν υπάρχουν για την εμφάνιση — <strong>κάθε ζώνη έχει τον ρόλο της</strong>. Το κέντρο αγκαλιάζει απαλά το κεφάλι, οι άκρες στηρίζουν τον αυχένα και η δομή κρατά το σχήμα της ακόμη και μετά από μήνες καθημερινής χρήσης.</p>
      <p>Η θήκη αφαιρείται και πλένεται στο πλυντήριο, ο αφρός είναι <strong>υποαλλεργικός και ανθεκτικός στα ακάρεα</strong> — έτσι το μαξιλάρι μένει φρέσκο, καθαρό και έτοιμο για κάθε νύχτα. Χωρίς βαθουλώματα, χωρίς να «κάθεται», χωρίς συμβιβασμούς.</p>
      <p><strong>Ένα μαξιλάρι που και μετά από έναν χρόνο δείχνει — και στηρίζει — όπως την πρώτη μέρα.</strong></p>
    </div>
  </div>
</section>

<style>
  .kn-wrap { max-width: 1440px; margin: 0 auto; padding: 0 22px; } /* isti container kao gornji .product */
  .kn-sec { padding: 60px 0; }
  .kn-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
  .kn-h2 { font-size: clamp(26px,3.2vw,40px); font-weight: 800; color: #1b2450; line-height: 1.14; margin: 0 0 16px; }
  .kn-h2-blue { color: #2b3fb0; }
  .kn-center { text-align: center; }
  .kn-eyebrow { font-size: 13px; font-weight: 800; letter-spacing: .02em; color: #1b2450; margin: 0 0 6px; }
  .kn-copy p { font-size: 15.5px; line-height: 1.65; color: #33394f; margin: 0 0 14px; }
  .kn-sub { font-size: 16px; line-height: 1.55; color: #33394f; max-width: 680px; margin: 0 auto 10px; }
  .kn-media img { width: 100%; height: auto; display: block; border-radius: 18px; box-shadow: 0 14px 40px rgba(27,36,80,.10); }

  /* 1) marquee */
  .kn-marquee { background: #2b3fb0; overflow: hidden; white-space: nowrap; margin-top: 26px; }
  @media (min-width: 861px) { .kn-marquee { margin-top: -20px; } } /* desktop: prepolovljen razmik do vsebine zgoraj */
  .kn-marquee + .kn-sec { padding-top: 26px; }
  .kn-marquee-track { display: inline-block; padding: 13px 0; animation: knScroll 28s linear infinite; }
  .kn-tick { color: #fff; font-weight: 800; font-style: italic; font-size: 15px; letter-spacing: .06em; text-transform: uppercase; }
  .kn-dot { color: #aebafe; margin: 0 22px; font-weight: 800; }
  @keyframes knScroll { from { transform: translateX(0); } to { transform: translateX(-50%); } }

  /* 4) statistika */
  .kn-stats-sec { background: #eef1fb; }
  .kn-stats { display: grid; grid-template-columns: repeat(3,1fr); gap: 24px; max-width: 1180px; margin: 30px auto 0; }
  .kn-stat-card { background: #fff; border-radius: 16px; padding: 34px 26px; text-align: center; box-shadow: 0 10px 28px rgba(27,36,80,.07); }
  .kn-ring { width: 150px; height: 150px; margin: 0 auto 18px; display: block; }
  .kn-ring-t { font-size: 15px; font-weight: 800; fill: #2b3fb0; }
  .kn-stat-card p { font-size: 15px; line-height: 1.5; color: #33394f; margin: 0; }
  .kn-stat-card p strong { color: #2b3fb0; }

  /* 5) rated + strip */
  .kn-rated-sec { background: #eef1fb; padding-bottom: 0; }
  .kn-stars { font-size: 16px; color: #1b2450; font-weight: 600; margin: 6px 0 26px; }
  .kn-stars span { color: #f5a623; letter-spacing: 2px; margin-right: 8px; }
  .kn-strip { overflow: hidden; width: 100vw; margin-left: calc(50% - 50vw); padding-bottom: 34px; }
  .kn-strip-track { display: flex; gap: 8px; width: max-content; animation: knScroll 60s linear infinite; }
  .kn-strip:hover .kn-strip-track { animation-play-state: paused; }
  .kn-strip-track img { width: 350px; aspect-ratio: 1/1; object-fit: cover; border-radius: 10px; display: block; flex: 0 0 auto; }

  @media (max-width: 860px) {
    .kn-sec { padding: 30px 0; }
    .kn-row2 { grid-template-columns: 1fr; gap: 18px; }
    .kn-row2 .kn-media { order: -1; }
    .kn-h2 { font-size: 2rem; }
    .kn-stats { grid-template-columns: 1fr; gap: 14px; margin-top: 18px; }
    .kn-ring { width: 120px; height: 120px; }
    .kn-strip-track img { width: 240px; }
  }
</style>
