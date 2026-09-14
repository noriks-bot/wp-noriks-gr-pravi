<?php
/**
 * product-bottom: NORIKS Snug — jastuk za cijelo tijelo u S-obliku (orto-snug).
 * Pravilo: svaka sekcija ima TOCNO JEDNU sliku, naizmjenicno lijevo/desno,
 * pozadine se izmjenjuju (prva tonirana).
 *   1) Galerija u krevetu            5) Dimenzije (desno)
 *   2) Problem — VIDEO (lijevo)      6) Preporucuju kiroprakticari
 *   3) Kako radi (desno)             7) Punjenje (lijevo)
 *   4) Tri potpore (lijevo)          8) Boje (desno)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$sg      = get_template_directory_uri() . '/img/snug/';
$sg_path = get_template_directory() . '/img/snug/';
$sg_vid  = function( $file, $poster, $alt ) use ( $sg, $sg_path ) {
  if ( ! file_exists( $sg_path . $file ) ) { return ''; }
  return '<video class="nsg-video" autoplay muted loop playsinline preload="metadata" poster="'
       . esc_url( $sg . $poster ) . '" aria-label="' . esc_attr( $alt ) . '">'
       . '<source src="' . esc_url( $sg . $file ) . '" type="video/mp4"></video>';
};
$sg_img  = function( $file, $alt, $cls = '' ) use ( $sg, $sg_path ) {
  if ( ! file_exists( $sg_path . $file ) ) { return ''; }
  return '<img class="' . esc_attr( $cls ) . '" src="' . esc_url( $sg . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) KAKO IZGLEDA U KREVETU (galerija) -->
<section class="nsg-sec nsg-tint">
  <div class="nsg-wrap">
    <p class="nsg-kicker nsg-center">Σε αληθινό υπνοδωμάτιο</p>
    <h2 class="nsg-h2 nsg-center">Μια αγκαλιά που κρατά όλη τη νύχτα</h2>
    <p class="nsg-sub">Αγκαλιάστε το μπροστά, ακουμπήστε την πλάτη πίσω — το μαξιλάρι δουλεύει και από τις δύο πλευρές.</p>
    <div class="nsg-gallery">
      <figure><?php echo $sg_vid( 'sng-gal-1.mp4', 'sng-gal-1.jpg', 'Το μαξιλάρι τυλιγμένο γύρω από τα πόδια στον ύπνο' ); ?></figure>
      <figure><?php echo $sg_vid( 'sng-gal-2.mp4', 'sng-gal-2.jpg', 'Πώς χρησιμοποιείται το NORIKS Snug' ); ?></figure>
      <figure><?php echo $sg_vid( 'sng-gal-3.mp4', 'sng-gal-3.jpg', 'Ύπνος στο πλάι με το NORIKS Snug' ); ?></figure>
      <figure><?php echo $sg_vid( 'sng-gal-4.mp4', 'sng-gal-4.jpg', 'Το NORIKS Snug στο κρεβάτι' ); ?></figure>
    </div>
  </div>
</section>

<!-- 2) PROBLEM — slika lijevo -->
<section class="nsg-sec">
  <div class="nsg-wrap nsg-row2">
    <div class="nsg-media"><?php echo $sg_vid( 'sng-video.mp4', 'sng-video.jpg', 'Το NORIKS Snug σε χρήση' ); ?></div>
    <div class="nsg-copy">
      <p class="nsg-kicker">Το πρόβλημα</p>
      <h2 class="nsg-h2">Γιατί δεν ξυπνάτε ποτέ <em>ξεκούραστοι</em></h2>
      <div class="nsg-pain__list">
        <div class="nsg-pain__row">
          <span class="nsg-pain__num">01</span>
          <div class="nsg-pain__copy">
            <h3>Ο ώμος σηκώνει όλο το βάρος.</h3>
            <p>Χωρίς στήριξη για το πάνω μέρος του σώματος, ο πάνω ώμος γέρνει μπροστά και παίρνει όλο σας το βάρος. Αυτό είναι το μούδιασμα με το οποίο ξυπνάτε κάθε πρωί.</p>
          </div>
        </div>
        <div class="nsg-pain__row">
          <span class="nsg-pain__num">02</span>
          <div class="nsg-pain__copy">
            <h3>Το ισχίο πέφτει, η σπονδυλική στήλη ακολουθεί.</h3>
            <p>Τίποτα δεν κρατά τα ισχία σας στην ίδια ευθεία, οπότε η βαρύτητα τα τραβά κάτω και η μέση στρίβει για να το αναπληρώσει. Αυτό είναι το ξύπνημα στις τρεις τα ξημερώματα.</p>
          </div>
        </div>
        <div class="nsg-pain__row">
          <span class="nsg-pain__num">03</span>
          <div class="nsg-pain__copy">
            <h3>Τα γόνατα ακουμπούν και τρίβονται.</h3>
            <p>Η πίεση κόκαλο με κόκαλο αυξάνεται όλη τη νύχτα. Μέχρι το πρωί τα γόνατα πονούν και τα πόδια είναι βαριά πριν καν σηκωθείτε από το κρεβάτι.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 3) KAKO RADI — slika desno -->
<section class="nsg-sec nsg-tint">
  <div class="nsg-wrap nsg-row2 nsg-row2--rev">
    <div class="nsg-copy">
      <p class="nsg-kicker">Πώς λειτουργεί</p>
      <h2 class="nsg-h2">Το σχήμα S κρατά τρία σημεία ταυτόχρονα</h2>
      <p>Η καμπύλη ακολουθεί τη γραμμή του σώματος: το πάνω μέρος στηρίζει τον ώμο, το κέντρο γεμίζει τον χώρο στη μέση και το κάτω σκέλος χωρίζει τα γόνατα.</p>
      <p>Το βάρος κατανέμεται σε όλο το μήκος αντί να μαζεύεται σε ένα σημείο. Το σώμα σταματά να στέλνει τα σήματα που σας ξυπνούν.</p>
      <ul class="nsg-check">
        <li>Ανακουφισμένοι ώμοι, χωρίς πίεση στη μία πλευρά</li>
        <li>Ισχία και λεκάνη σε φυσική ευθεία</li>
        <li>Χωρισμένα γόνατα, χωρίς επαφή κόκαλο με κόκαλο</li>
      </ul>
      <a class="nsg-cta" href="#bundle-selector">Επιλέξτε το χρώμα σας</a>
    </div>
    <div class="nsg-media"><?php echo $sg_img( 'sng-usporedba.jpg', 'Το NORIKS Snug σε σύγκριση με ένα απλό μαξιλάρι' ); ?></div>
  </div>
</section>

<!-- 4) TRI KLJUČNE POTPORE — slika lijevo -->
<section class="nsg-sec nsg-trust">
  <div class="nsg-trust__head">
    <p class="nsg-trust__eyebrow">Εμπιστοσύνη των ειδικών</p>
    <h2 class="nsg-trust__title">Το συνιστούν οι <em>χειροπράκτες.</em></h2>
  </div>
  <div class="nsg-wrap">
    <div class="nsg-docs">
      <article class="nsg-doc">
        <div class="nsg-doc__img"><?php echo $sg_img( 'sng-doc-1.jpg', 'Χειροπράκτρια με το μαξιλάρι NORIKS Snug' ); ?></div>
        <div class="nsg-doc__body">
          <p class="nsg-doc__lead">«Το Snug το συνιστώ σε ασθενείς που παλεύουν με πόνους στο ισχίο και στη μέση κατά τον ύπνο.»</p>
          <p class="nsg-doc__p">«Το σχήμα S κρατά τη σπονδυλική στήλη σε ουδέτερη θέση, γιατί στηρίζει ταυτόχρονα ώμους, ισχία και γόνατα. Τα περισσότερα μαξιλάρια σώματος λύνουν μόνο ένα από αυτά. Αυτό τα λύνει και τα τρία, και γι' αυτό οι ασθενείς το συνεχίζουν πραγματικά.»</p>
          <div class="nsg-doc__who">
            <p class="nsg-doc__name">Χειροπράκτρια<svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true"><circle cx="8" cy="8" r="8" fill="#5b7fa6"/><path d="M5 8l2 2 4-4" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </p>
            <p class="nsg-doc__role">12 χρόνια πρακτικής</p>
          </div>
        </div>
      </article>
      <article class="nsg-doc">
        <div class="nsg-doc__img"><?php echo $sg_img( 'sng-doc-2.jpg', 'Χειροπράκτης με το μαξιλάρι NORIKS Snug' ); ?></div>
        <div class="nsg-doc__body">
          <p class="nsg-doc__lead">«Στους ασθενείς που κοιμούνται στο πλάι το πρόβλημα είναι πάντα το ίδιο: το κενό ανάμεσα στον ώμο και στα γόνατα.»</p>
          <p class="nsg-doc__p">«Το Snug είναι ένα από τα λίγα προϊόντα που το λύνουν πραγματικά. Στηρίζει όλο το μήκος του κορμού, όχι μόνο ένα σημείο πίεσης. Οι ασθενείς επιστρέφουν μετά από δύο εβδομάδες και λένε ότι η πρωινή δυσκαμψία έφυγε.»</p>
          <div class="nsg-doc__who">
            <p class="nsg-doc__name">Χειροπράκτης<svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true"><circle cx="8" cy="8" r="8" fill="#5b7fa6"/><path d="M5 8l2 2 4-4" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </p>
            <p class="nsg-doc__role">18 χρόνια πρακτικής</p>
          </div>
        </div>
      </article>
    </div>
    <p class="nsg-note">Οι γνώμες των ειδικών δεν αντικαθιστούν την ιατρική εξέταση ούτε τη συνταγογραφούμενη θεραπεία.</p>
  </div>
</section>

<!-- 7) PUNJENJE — slika lijevo -->
<section class="nsg-sec nsg-tint">
  <div class="nsg-wrap nsg-row2">
    <div class="nsg-media"><?php echo $sg_img( 'sng-potpore.jpg', 'Τρία βασικά σημεία στήριξης: χέρια, ισχία, γόνατα' ); ?></div>
    <div class="nsg-copy">
      <p class="nsg-kicker">Τρία σημεία στήριξης</p>
      <h2 class="nsg-h2">Ένα μαξιλάρι αντί για τρία</h2>
      <p>Οι περισσότεροι στοιβάζουν δύο ή τρία απλά μαξιλάρια για να πάρουν τη στήριξη που δίνει μόνο του το Snug — και μετά τα μετακινούν όλη τη νύχτα.</p>
      <p>Το Snug κρατά και τα τρία σημεία μαζί, οπότε δεν χρειάζεται να ξυπνήσετε για να το διορθώσετε.</p>
      <ul class="nsg-check">
        <li>Στήριξη χεριών — αποτρέπει το μούδιασμα τη νύχτα</li>
        <li>Ευθυγράμμιση ισχίων — η σπονδυλική στήλη μένει ουδέτερη</li>
        <li>Μαξιλάρωμα γονάτων — βγάζει την πίεση από τη μέση</li>
      </ul>
    </div>
  </div>
</section>

<!-- 5) DIMENZIJE — slika desno -->
<section class="nsg-sec">
  <div class="nsg-wrap nsg-row2 nsg-row2--rev">
    <div class="nsg-copy">
      <p class="nsg-kicker">Το σωστό μέγεθος</p>
      <h2 class="nsg-h2">105 × 30 cm — αρκετό, αλλά όχι υπερβολικό</h2>
      <p>Σας στηρίζει από τον ώμο ως τα γόνατα, αλλά δεν πιάνει όλο το κρεβάτι και δεν ενοχλεί τον σύντροφό σας.</p>
      <p>Ακριβώς αυτό το μήκος είναι ο λόγος που κρατιέται εύκολα και γυρίζετε εύκολα μαζί του — χωρίς μετακινήσεις και χωρίς ξυπνήματα.</p>
      <ul class="nsg-check">
        <li>Μήκος 105 cm, πλάτος 30 cm</li>
        <li>Ταιριάζει σε όλα τα ύψη</li>
        <li>Ελαφρύ, το μετακινείτε με το ένα χέρι</li>
      </ul>
    </div>
    <div class="nsg-media"><?php echo $sg_img( 'sng-dimenzije.jpg', 'Διαστάσεις: 105 × 30 cm' ); ?></div>
  </div>
</section>

<!-- 6) PREPORUČUJU STRUČNJACI (postavitev z originala) -->
<section class="nsg-sec nsg-tint">
  <div class="nsg-wrap nsg-row2">
    <div class="nsg-media"><?php echo $sg_img( 'sng-boje.jpg', 'Έξι διαθέσιμα χρώματα' ); ?></div>
    <div class="nsg-copy">
      <p class="nsg-kicker">Επιλέξτε χρώμα</p>
      <h2 class="nsg-h2">Έξι χρώματα για κάθε υπνοδωμάτιο</h2>
      <p>Μπλε, ροζ, γκρι, πράσινο, μωβ και σκούρο μπλε — το χρώμα το επιλέγετε σε αυτή τη σελίδα, πριν το προσθέσετε στο καλάθι.</p>
      <p>Όλες οι αποχρώσεις έχουν το ίδιο δροσιστικό ύφασμα και το ίδιο γέμισμα· αλλάζει μόνο το χρώμα του καλύμματος.</p>
      <a class="nsg-cta" href="#bundle-selector">Επιλέξτε το χρώμα σας</a>
    </div>
  </div>
</section>

<!-- 10) ŠTO MOŽETE OČEKIVATI -->
<style>
.nsg-sec { padding: 62px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #1f2a37; }
.nsg-sec * { box-sizing: border-box; }
.nsg-tint { background: #f2f5f9; }
.nsg-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.nsg-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #5b7fa6; margin: 0 0 10px; }
.nsg-h2 { font-size: clamp(25px, 3.2vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #1f2a37; }
.nsg-center { text-align: center; }
.nsg-sub { text-align: center; font-size: 16px; color: #5c6b7a; max-width: 60ch; margin: 0 auto 40px; line-height: 1.6; }
.nsg-copy p { font-size: 16px; line-height: 1.7; color: #4a5765; margin: 0 0 14px; }
.nsg-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 52px; align-items: center; }
.nsg-media img { width: 100%; display: block; border-radius: 14px; box-shadow: 0 2px 4px rgba(31,42,55,.05), 0 14px 40px rgba(31,42,55,.09); }
.nsg-three { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; }
.nsg-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 26px 22px; }
.nsg-num { display: inline-flex; align-items: center; justify-content: center; width: 34px; height: 34px; border-radius: 50%; background: #5b7fa6; color: #fff; font-weight: 800; font-size: 16px; margin-bottom: 14px; }
.nsg-card h3 { font-size: 17.5px; font-weight: 800; margin: 0 0 8px; line-height: 1.3; }
.nsg-card p { font-size: 15px; color: #5c6b7a; line-height: 1.6; margin: 0; }
.nsg-check { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 11px; }
.nsg-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; }
.nsg-check li::before { content: "✓"; position: absolute; left: 0; top: -1px; width: 20px; height: 20px; border-radius: 50%; background: #5b7fa6; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nsg-cta { display: inline-block; background: #1f2a37; color: #fff !important; font-size: 15px; font-weight: 700; padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.nsg-cta:hover { background: #33445a; color: #fff !important; }
.nsg-cta--center { display: block; width: fit-content; margin: 40px auto 0; }
.nsg-trust__head { padding: 0 22px; text-align: center; margin-bottom: 34px; }
.nsg-trust__eyebrow { font-size: 12px; letter-spacing: .14em; text-transform: uppercase; font-weight: 700; color: #5b7fa6; margin: 0 0 8px; }
.nsg-trust__title { font-size: clamp(22px, 3vw, 30px); line-height: 1.15; font-weight: 800; color: #12202c; margin: 0; }
.nsg-trust__title em { font-style: italic; font-weight: 800; color: #5b7fa6; }
.nsg-docs { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; max-width: 960px; margin: 0 auto; }
.nsg-doc { background: #fff; border: 1px solid #e0d6d6; border-radius: 12px; overflow: hidden; display: flex; flex-direction: column; }
.nsg-doc__img { width: 100%; aspect-ratio: 4/5; overflow: hidden; }
.nsg-doc__img img { width: 100%; height: 100%; object-fit: cover; display: block; }
.nsg-doc__body { padding: 22px 20px 24px; display: flex; flex-direction: column; flex: 1; }
.nsg-doc__lead { font-size: clamp(17px, 2.2vw, 19px); font-weight: 700; font-style: italic; color: #12202c; line-height: 1.45; margin: 0 0 14px; }
.nsg-doc__p { font-size: 15px; color: #3d4a57; line-height: 1.62; margin: 0 0 18px; }
.nsg-doc__who { border-top: 1px solid #e0d6d6; padding-top: 15px; margin-top: auto; }
.nsg-doc__name { margin: 0; font-size: 15px; font-weight: 700; color: #12202c; line-height: 1.3; display: flex; align-items: center; gap: 6px; }
.nsg-doc__role { margin: 4px 0 0; font-size: 13px; color: #6b7a88; line-height: 1.3; }
.nsg-note { text-align: center; font-size: 12px; color: #93a1b0; font-style: italic; margin: 22px 0 0; }
.nsg-tl { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; }
.nsg-tl__item { background: #f2f5f9; border-radius: 14px; padding: 26px 22px; }
.nsg-tl__when { font-size: 12.5px; font-weight: 800; letter-spacing: .1em; text-transform: uppercase; color: #5b7fa6; margin-bottom: 8px; }
.nsg-tl__item h3 { font-size: 18px; font-weight: 800; margin: 0 0 8px; line-height: 1.3; }
.nsg-tl__item p { font-size: 15px; color: #5c6b7a; line-height: 1.6; margin: 0; }
.nsg-row2--tight { gap: 44px; align-items: center; }
.nsg-pain__list { display: flex; flex-direction: column; }
.nsg-pain__row { display: flex; gap: 18px; padding: 22px 0; border-top: 1px solid #dbe2ea; }
.nsg-pain__row:last-child { border-bottom: 1px solid #dbe2ea; }
.nsg-pain__num { flex: none; font-size: 17px; font-weight: 800; color: #5b7fa6; letter-spacing: .04em; padding-top: 5px; }
.nsg-pain__copy { flex: 1; }
.nsg-pain__copy h3 { font-size: clamp(18px, 2vw, 21px); font-weight: 800; line-height: 1.25; margin: 0 0 7px; letter-spacing: -.01em; }
.nsg-pain__copy p { font-size: 15px; line-height: 1.6; color: #5c6b7a; margin: 0; }
.nsg-h2 em { font-style: normal; color: #5b7fa6; }
.nsg-gallery { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; align-items: stretch; }
.nsg-gallery figure { margin: 0; border-radius: 14px; overflow: hidden; box-shadow: 0 2px 4px rgba(31,42,55,.05), 0 14px 40px rgba(31,42,55,.09); }
.nsg-gallery img, .nsg-video { width: 100%; height: 100%; object-fit: cover; object-position: center; display: block; aspect-ratio: 3/4; }
.nsg-boje { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-top: 34px; }
.nsg-media--stack { display: grid; gap: 16px; }
.nsg-boje figure { margin: 0; border-radius: 14px; overflow: hidden; }
.nsg-boje img { width: 100%; display: block; }
@media (max-width: 980px) {
  .nsg-docs { grid-template-columns: 1fr; gap: 18px; max-width: 520px; }
  .nsg-boje { grid-template-columns: 1fr 1fr; }
  .nsg-gallery { grid-template-columns: 1fr 1fr; }
  .nsg-row2 { grid-template-columns: 1fr; gap: 30px; }
  .nsg-row2--rev .nsg-media { order: -1; }
  .nsg-three, .nsg-tl, .nsg-docs { grid-template-columns: 1fr; gap: 16px; }
}
@media (max-width: 560px) {
  .nsg-gallery { grid-template-columns: 1fr; gap: 14px; }
  .nsg-gallery img, .nsg-video { aspect-ratio: 3/4; }
  .nsg-sec { padding: 44px 0; }
  .nsg-pain__row { gap: 14px; padding: 20px 0; }
  .nsg-wrap { padding: 0 16px; }
  .nsg-sub { margin-bottom: 28px; }
  .nsg-card, .nsg-tl__item { padding: 22px 18px; }
  .nsg-cta { width: 100%; text-align: center; }
}

/* ── kratek opis izdelka: kljukice namesto pik ─────────────────────── */
.woocommerce div.product .woocommerce-product-details__short-description ul,
.woocommerce-product-details__short-description ul {
  list-style: none !important; margin: 10px 0 14px !important; padding-left: 0 !important; }
.woocommerce div.product .woocommerce-product-details__short-description ul li,
.woocommerce-product-details__short-description ul li {
  list-style: none !important; text-indent: 0 !important; margin: 0 0 7px !important;
  line-height: 1.45 !important; font-size: 15.5px !important;
  display: block !important; position: relative !important; padding-left: 31px !important; }
.woocommerce-product-details__short-description ul li::marker { content: "" !important; }
.woocommerce-product-details__short-description ul li::before { content: none !important; }
.woocommerce-product-details__short-description .nsg-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
