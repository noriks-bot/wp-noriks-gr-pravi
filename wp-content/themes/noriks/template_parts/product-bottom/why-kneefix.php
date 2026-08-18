<?php
/**
 * product-bottom: NORIKS KneeFix — ortopedska steznica za koljeno (orto-kneefix).
 * Sekcije i redoslijed preslikani s referentne stranice, tekst na HR,
 * slike su NORIKS kreative iz img/kneefix/. Svaka sekcija ima sliku s jedne
 * i tekst s druge strane (naizmjenično) — nema sekcija koje su samo slika.
 *   1. Όταν κάθε βήμα γίνεται δυσάρεστο   slika lijevo   13_stepenice
 *   2. Ίσως δεν πρόκειται μόνο για φθορά   slika desno    14_zglob
 *   3. Στήριξη για ενεργά γόνατα         slika lijevo   08_aktivno
 *   4. 4 λειτουργίες. Πιο σταθερή αίσθηση.    slika desno    03_funkcije
 *   5. Άνετη στήριξη σε 3 βήματα          slika lijevo   04_koraki
 *   6. Περισσότερη άνεση στην καθημερινότητα      slika desno    05_lifestyle
 *   7. Preporučeno za potporu koljena     slika lijevo   06_zdravnik
 *   8. Η διαφορά είναι αισθητή                  slika desno    07_vs
 *   9. Τι λένε οι πελάτες μας                3 kartice      10/11/12
 * Recenzije i FAQ renderira zajednički reviews.php (ne ovdje).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$kf      = get_template_directory_uri() . '/img/kneefix/';
$kf_path = get_template_directory() . '/img/kneefix/';

/* Ako slika nije na serveru, prikaže se neutralni sivi placeholder. */
$kf_img = function( $file, $alt ) use ( $kf, $kf_path ) {
  if ( file_exists( $kf_path . $file ) ) {
    return '<img src="'.esc_url($kf.$file).'" alt="'.esc_attr($alt).'" loading="lazy">';
  }
  return '<div class="kfx-ph" role="img" aria-label="'.esc_attr($alt).'"><span>'.esc_html($alt).'</span></div>';
};
?>

<!-- ============ 1) Όταν κάθε βήμα γίνεται δυσάρεστο ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('kf-gr-3.webp','Πόνος στο γόνατο κατά την κάθοδο σκάλας'); ?></div>
    <div class="kfx-copy">
      <h2 class="kfx-h2">Όταν κάθε βήμα γίνεται δυσάρεστο</h2>
      <p class="kfx-lead">Στην αρχή είναι συχνά μόνο ένα ελαφρύ τράβηγμα.</p>
      <p>Έπειτα έρχονται οι στιγμές που νιώθετε το γόνατο πολύ πιο έντονα:</p>
      <ul class="kfx-list">
        <li>Όταν σηκώνεστε</li>
        <li>Στις σκάλες</li>
        <li>Μετά από πολλή ώρα καθιστοί</li>
        <li>Στο περπάτημα ή σε παρατεταμένη ορθοστασία</li>
      </ul>
      <p>Πολλοί τότε αρχίζουν αυτόματα να αποφεύγουν την κίνηση. Περπατούν πιο αργά, ξεκουράζουν ασυναίσθητα το γόνατο ή νιώθουν ανασφαλείς στις καθημερινές κινήσεις.</p>
      <p class="kfx-strong">Το πρόβλημα είναι αυτό: όσο πιο προσεκτικά κινείστε, τόσο περισσότερο το γόνατο γίνεται το κέντρο της καθημερινότητάς σας.</p>
    </div>
  </div>
</section>

<!-- ============ 2) Ίσως δεν πρόκειται μόνο για φθορά ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-copy">
      <h2 class="kfx-h2">Ίσως δεν πρόκειται μόνο για φθορά</h2>
      <p>Πολλές συνηθισμένες εξηγήσεις μιλούν μόνο για «φθορά». Ο πόνος στο γόνατο όμως συχνά μοιάζει περισσότερο με <strong>πίεση, ερεθισμό ή αστάθεια</strong>.</p>
      <p>Ένας πιθανός λόγος είναι ο ερεθισμένος αρθρικός υμένας — η ευαίσθητη εσωτερική μεμβράνη της άρθρωσης του γόνατος. Όταν ερεθιστεί αυτός ο ιστός, το γόνατο μπορεί να αντιδρά πιο ευαίσθητα στην καταπόνηση. Αυτό μπορεί να εκδηλωθεί ως:</p>
      <ul class="kfx-inline-list">
        <li>Αίσθημα πίεσης γύρω από την επιγονατίδα</li>
        <li>Δυσκαμψία μετά από ακινησία</li>
        <li>Ανασφάλεια στην κίνηση</li>
        <li>Ευαισθησία στην καταπόνηση</li>
      </ul>
      <p>Πολλοί κλασικοί νάρθηκες προσπαθούν να λύσουν το πρόβλημα με άκαμπτη σταθεροποίηση. Οι σκληροί νάρθηκες όμως είναι συχνά άβολοι, γλιστρούν ή περιορίζουν τη φυσική κίνηση. Ακριβώς γι' αυτό ο <strong>NORIKS KneeFix</strong> σχεδιάστηκε διαφορετικά.</p>
    </div>
    <div class="kfx-media"><?php echo $kf_img('14_zglob.jpg','Ερεθισμένος αρθρικός υμένας της άρθρωσης του γόνατος'); ?></div>
  </div>
</section>

<!-- ============ 3) Στήριξη για ενεργά γόνατα ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('08_energoi_GR.webp','Μείνετε ενεργοί — χωρίς περιορισμούς στα γόνατα'); ?></div>
    <div class="kfx-copy">
      <h2 class="kfx-h2">Στήριξη για ενεργά γόνατα</h2>
      <p><strong>NORIKS KneeFix</strong> συνδυάζει πολλές λειτουργίες σε ένα ευέλικτο σύστημα στήριξης για την καθημερινότητα. Αντί για βαρύ νάρθηκα έχετε:</p>
      <ul class="kfx-check">
        <li>Συμπίεση που ρυθμίζετε μόνοι σας</li>
        <li>Πλευρική σταθεροποίηση</li>
        <li>Μαξιλαράκι γέλης για αποφόρτιση της επιγονατίδας</li>
        <li>Αντιολισθητικό άκρο που εφαρμόζει</li>
      </ul>
      <p>Στόχος δεν είναι να ακινητοποιήσει το γόνατό σας. Ο KneeFix σχεδιάστηκε για να στηρίζει πιο άνετα το γόνατο στην καθημερινή κίνηση — στο περπάτημα, στη δουλειά, στα ψώνια ή στο ταξίδι.</p>
    </div>
  </div>
</section>

<!-- ============ 4) 4 λειτουργίες. Πιο σταθερή αίσθηση. ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-copy">
      <h2 class="kfx-h2">4 λειτουργίες. Πιο σταθερή αίσθηση.</h2>
      <p>Ο KneeFix δεν κάνει μόνο ένα πράγμα — πολλά συστήματα στήριξης λειτουργούν ταυτόχρονα:</p>
      <ul class="kfx-check">
        <li><strong>Ακριβής τροχός συμπίεσης</strong> — ρυθμιζόμενη συμπίεση και ασφαλής εφαρμογή</li>
        <li><strong>Διπλοί πλευρικοί σταθεροποιητές</strong> — πλευρική σταθερότητα του γόνατος</li>
        <li><strong>Μαξιλαράκι γέλης για την επιγονατίδα</strong> — αποφόρτιση της πίεσης και απορρόφηση κραδασμών</li>
        <li><strong>Λαβή σιλικόνης κατά του γλιστρήματος</strong> — η μαλακή υφή σιλικόνης εμποδίζει το γλίστρημα και το τσαλάκωμα</li>
      </ul>
    </div>
    <div class="kfx-media"><?php echo $kf_img('03_leitourgies_GR.webp','Τέσσερις λειτουργίες του νάρθηκα NORIKS KneeFix'); ?></div>
  </div>
</section>

<!-- ============ 5) Άνετη στήριξη σε 3 βήματα ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('04_vimata_GR.webp','Άνετη στήριξη σε τρία βήματα — περάστε, ευθυγραμμίστε, ρυθμίστε'); ?></div>
    <div class="kfx-copy">
      <h2 class="kfx-h2">Άνετη στήριξη σε 3 βήματα</h2>
      <ol class="kfx-steps">
        <li><strong>Περάστε τον νάρθηκα πάνω από το γόνατο.</strong> Τραβήξτε τον προς τα πάνω για ασφαλή και άνετη εφαρμογή.</li>
        <li><strong>Ευθυγραμμίστε το μαξιλαράκι γέλης.</strong> Τοποθετήστε το κεντραρισμένο γύρω από την επιγονατίδα.</li>
        <li><strong>Ρυθμίστε τη συμπίεση.</strong> Γυρίστε τον τροχό για να ρυθμίσετε τη στήριξη και τη σταθερότητα.</li>
      </ol>
      <p>Χωρίς περίπλοκους ιμάντες και ρυθμίσεις — είστε έτοιμοι σε λίγα δευτερόλεπτα.</p>
    </div>
  </div>
</section>

<!-- ============ 6) Περισσότερη άνεση στην καθημερινότητα ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-copy">
      <h2 class="kfx-h2">Περισσότερη άνεση στην καθημερινότητα</h2>
      <p>Πολλοί δεν θέλουν βαρύ αθλητικό νάρθηκα. Θέλουν απλώς:</p>
      <ul class="kfx-check">
        <li>Να περπατούν πιο σίγουρα</li>
        <li>Να ανεβαίνουν σκάλες πιο χαλαρά</li>
        <li>Να στέκονται περισσότερη ώρα</li>
        <li>Να κινούνται πιο ελεύθερα</li>
      </ul>
      <p>Ο NORIKS KneeFix σχεδιάστηκε για να κάνει τις καθημερινές κινήσεις πιο ευχάριστες — χωρίς περιττούς περιορισμούς. Το ευέλικτο υλικό προσαρμόζεται καλύτερα στη μέρα σας και στηρίζει το γόνατο εκεί που το χρειάζεστε.</p>
      <a class="kfx-cta" href="#bundle-selector">Επιλέξτε το μέγεθός σας →</a>
    </div>
    <div class="kfx-media"><?php echo $kf_img('kf-gr-1.webp','KneeFix στην καθημερινότητα — περπάτημα, ποδήλατο, προπόνηση'); ?></div>
  </div>
</section>

<!-- ============ 7) Συνιστάται για καθημερινή στήριξη του γόνατος ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('kf-gr-2.webp','Συνιστάται για καθημερινή στήριξη του γόνατος'); ?></div>
    <div class="kfx-copy">
      <h2 class="kfx-h2">Συνιστάται για καθημερινή στήριξη του γόνατος</h2>
      <ul class="kfx-check">
        <li>Ρυθμιζόμενη στήριξη συμπίεσης</li>
        <li>Σταθεροποιεί και προστατεύει το γόνατο</li>
        <li>Άνετο για καθημερινή χρήση</li>
      </ul>
      <p>Ο KneeFix προορίζεται ως καθημερινή στήριξη και όχι ως ιατρική θεραπεία. Σε περίπτωση οξείας κάκωσης ή επίμονων ενοχλήσεων, συμβουλευτείτε τον γιατρό σας πριν τη χρήση.</p>
    </div>
  </div>
</section>

<!-- ============ 8) Η διαφορά είναι αισθητή ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-copy">
      <h2 class="kfx-h2">Η διαφορά είναι αισθητή</h2>
      <p>Οι παραδοσιακοί νάρθηκες συχνά λύνουν το πρόβλημα ακινητοποιώντας το γόνατο. Ο KneeFix ακολουθεί άλλο δρόμο — στηρίζει την κίνηση αντί να τη μπλοκάρει.</p>
      <ul class="kfx-check">
        <li>Φυσικό βάδισμα αντί για δυσκαμψία στην κίνηση</li>
        <li>Χαλαρή στάση σώματος αντί για άβολη θέση</li>
        <li>Ελευθερία κίνησης και άνεση αντί για εμφανή καταπόνηση του γόνατος</li>
      </ul>
      <a class="kfx-cta" href="#bundle-selector">Παραγγείλετε το KneeFix</a>
    </div>
    <div class="kfx-media"><?php echo $kf_img('07_vs_GR.webp','Ο νάρθηκας γόνατος NORIKS σε σύγκριση με παραδοσιακό νάρθηκα'); ?></div>
  </div>
</section>

<!-- ============ 9) Τι λένε οι πελάτες μας ============ -->
<section class="kfx-sec kfx-revs">
  <div class="kfx-wrap">
    <h2 class="kfx-h2 kfx-center">Τι λένε οι πελάτες μας</h2>
    <p class="kfx-sub kfx-center"><strong>Χιλιάδες πελάτες φορούν ήδη καθημερινά το NORIKS KneeFix</strong> επειδή σχεδιάστηκε για να στηρίζει στοχευμένα το γόνατο — αντί να περιορίζει άσκοπα την κίνηση ή να καλύπτει προσωρινά τις ενοχλήσεις.</p>
    <div class="kfx-rev-grid">
      <?php foreach ( array(
        array( '10_review-1.jpg', 'Επιτέλους πιο σταθερό βάδισμα', 'Έχω δοκιμάσει ήδη αρκετούς νάρθηκες, αλλά ήταν είτε πολύ άκαμπτοι είτε γλιστρούσαν συνέχεια. Αυτός εφαρμόζει αισθητά πιο άνετα και δίνει στο γόνατο πολύ περισσότερη σταθερότητα στο περπάτημα και στις σκάλες.', 'Damir P.' ),
        array( '11_review-3.jpg', 'Περισσότερη ασφάλεια στις σκάλες', 'Οι σκάλες ήταν για χρόνια μαρτύριο, γιατί το γόνατό μου έμοιαζε ασταθές. Από τότε που φοράω το KneeFix νιώθω πολύ πιο σίγουρη. Σχεδόν δεν γλιστράει ούτε σε μεγάλες βόλτες.', 'Sanja M.' ),
        array( '12_review-6.jpg', 'Ευχάριστο στην καθημερινότητα', 'Το φοράω στη δουλειά και δεν πίστευα ότι θα είναι τόσο άνετο. Το υλικό είναι ευέλικτο, η συμπίεση ρυθμίζεται εύκολα και κάτω από το παντελόνι σχεδόν δεν φαίνεται.', 'Vesna N.' ),
      ) as $rv ) : ?>
        <article class="kfx-rev">
          <div class="kfx-rev-img"><?php echo $kf_img( $rv[0], 'Πελάτης φοράει τον νάρθηκα NORIKS KneeFix' ); ?></div>
          <div class="kfx-rev-body">
            <div class="kfx-stars" aria-label="Ocjena 5 od 5">★★★★★</div>
            <p class="kfx-rev-title"><?php echo esc_html( $rv[1] ); ?></p>
            <p class="kfx-rev-text"><?php echo esc_html( $rv[2] ); ?></p>
            <p class="kfx-rev-name"><?php echo esc_html( $rv[3] ); ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
  .kfx-sec { padding: 48px 0; }
  .kfx-alt { background: #f5f6f7; }
  .kfx-wrap { max-width: 1180px; margin: 0 auto; padding: 0 18px; }
  .kfx-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .kfx-h2 { font-size: clamp(24px,3.1vw,36px); font-weight: 800; color: #141414; line-height: 1.15; margin: 0 0 16px; }
  .kfx-center { text-align: center; }
  .kfx-copy p, .kfx-sub { font-size: 16px; line-height: 1.65; color: #3a3a3a; margin: 0 0 14px; }
  .kfx-sub { max-width: 820px; margin: 0 auto 26px; }
  .kfx-lead { font-weight: 700; color: #141414; }
  .kfx-strong { font-weight: 700; color: #141414; }
  .kfx-media img { width: 100%; height: auto; display: block; border-radius: 16px; }

  .kfx-ph { width: 100%; aspect-ratio: 1/1; background: #ededed; border: 1px dashed #d3d3d3; border-radius: 16px;
            display: flex; align-items: center; justify-content: center; padding: 18px; box-sizing: border-box; }
  .kfx-ph span { font-size: 13px; line-height: 1.45; color: #9a9a9a; text-align: center; }

  .kfx-list { margin: 0 0 16px; padding-left: 20px; }
  .kfx-list li { font-size: 16px; line-height: 1.6; color: #3a3a3a; margin: 0 0 6px; }
  .kfx-inline-list { list-style: none; display: flex; flex-wrap: wrap; gap: 8px 10px; margin: 0 0 16px; padding: 0; }
  .kfx-inline-list li { background: #fff; border: 1px solid #e4e4e4; border-radius: 999px; padding: 8px 16px; font-size: 14px; color: #141414; }
  .kfx-check { list-style: none; margin: 0 0 16px; padding: 0; }
  .kfx-check li { position: relative; padding: 0 0 11px 30px; font-size: 15.5px; color: #141414; line-height: 1.5; }
  .kfx-check li:before { content: "✓"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; background: #141414; color: #fff; border-radius: 50%; font-size: 12px; text-align: center; line-height: 20px; }
  .kfx-steps { list-style: none; counter-reset: kfxstep; margin: 0 0 16px; padding: 0; }
  .kfx-steps li { counter-increment: kfxstep; position: relative; padding: 0 0 14px 40px; font-size: 15.5px; line-height: 1.55; color: #3a3a3a; }
  .kfx-steps li:before { content: counter(kfxstep); position: absolute; left: 0; top: 0; width: 26px; height: 26px; background: #141414; color: #fff; border-radius: 50%; font-size: 13px; font-weight: 700; text-align: center; line-height: 26px; }

  .kfx-cta { display: inline-block; margin-top: 8px; background: #141414; color: #fff; font-weight: 700; font-size: 16px; padding: 14px 30px; border-radius: 10px; text-decoration: none; }
  .kfx-cta:hover { background: #E8450E; color: #fff; }

  /* 9) recenzije s fotografijama kupaca */
  .kfx-rev-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 22px; }
  .kfx-rev { background: #fff; border: 1px solid #e8e8e8; border-radius: 14px; overflow: hidden; }
  .kfx-rev-img img { width: 100%; height: 100%; aspect-ratio: 3/4; object-fit: cover; display: block; border-radius: 0; }
  .kfx-rev-body { padding: 16px 18px 18px; text-align: center; }
  .kfx-stars { color: #f5a623; font-size: 15px; letter-spacing: 1px; }
  .kfx-rev-title { font-weight: 700; color: #141414; font-size: 15px; margin: 8px 0 8px; }
  .kfx-rev-text { font-size: 14px; line-height: 1.6; color: #4a4a4a; margin: 0 0 12px; }
  .kfx-rev-name { font-size: 13px; font-style: italic; font-weight: 700; color: #6b6b6b; margin: 0; padding-top: 10px; border-top: 1px solid #ededed; }

  @media (max-width: 820px) {
    .kfx-sec { padding: 30px 0; }
    .kfx-row2 { grid-template-columns: 1fr; gap: 20px; }
    .kfx-row2 .kfx-media { order: -1; }
    .kfx-h2 { font-size: 2rem; }
    .kfx-rev-grid { grid-template-columns: 1fr; }
    .kfx-rev-img img { aspect-ratio: 4/3; }
  }

  /* Nema "Tablica veličina" linka na KneeFixu (ni plugin ni globalni). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis (short description): sakrij standardne točke (•), ostaje samo ✅
     iz teksta; razmak između "Prednosti:" i liste te ispod liste.
     (Ovaj se predložak učitava samo na orto-kneefix stranicama.) */
  .woocommerce-product-details__short-description ul {
      list-style: none;
      margin: 8px 0 26px;
      padding-left: 0;
  }
  .woocommerce-product-details__short-description ul li {
      list-style: none;
      padding-left: 0;
      margin-left: 0;
      line-height: 1.55;
      margin-bottom: 6px;
  }
  /* razmak iznad "Prednosti:" (paragraf neposredno prije liste) */
  .woocommerce-product-details__short-description p:has(+ ul) {
      margin-top: 20px;
      margin-bottom: 4px;
  }
</style>

<script>
(function(){
  document.querySelectorAll('a.kfx-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){ e.preventDefault(); var t=document.getElementById('bundle-selector')||document.querySelector('.single_add_to_cart_button'); if(t) t.scrollIntoView({behavior:'smooth',block:'center'}); });
  });
})();
</script>
