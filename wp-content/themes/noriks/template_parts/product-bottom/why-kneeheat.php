<?php
/**
 * product-bottom: NORIKS KneeHeat — grijac, kompresija i masaza koljena (orto-kneeheat) — trg GR.
 *
 * Sve sekcije su LIJEVO/DESNO (slika + tekst), po referentnoj stranici
 * (getmendable.com / Knee Triple Therapy Recovery System). Nikad slika na sredini.
 * Recenzije i FAQ renderira zajednicki reviews.php.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$kh      = get_template_directory_uri() . '/img/kneeheat/';
$kh_path = get_template_directory() . '/img/kneeheat/';

$kh_vid = function( $file, $poster, $alt ) use ( $kh, $kh_path ) {
  if ( ! file_exists( $kh_path . $file ) ) { return ''; }
  return '<video class="nkh-video" autoplay muted loop playsinline preload="metadata" '
       . 'poster="' . esc_url( $kh . $poster ) . '" aria-label="' . esc_attr( $alt ) . '">'
       . '<source src="' . esc_url( $kh . $file ) . '" type="video/mp4"></video>';
};

$kh_img = function( $file, $alt ) use ( $kh, $kh_path ) {
  if ( file_exists( $kh_path . $file ) ) {
    return '<img src="' . esc_url( $kh . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
  }
  return '<div class="nkh-ph" role="img" aria-label="' . esc_attr( $alt ) . '"><span>' . esc_html( $alt ) . '</span></div>';
};
?>

<!-- 1) Tri koraka — videi -->
<section class="nkh-sec nkh-light">
  <div class="nkh-wrap">
    <p class="nkh-eyebrow nkh-center">Πώς λειτουργεί</p>
    <h2 class="nkh-h2 nkh-center">Ανακούφιση σε 3 απλά βήματα</h2>
    <p class="nkh-lead nkh-center">Χωρίς ρυθμίσεις, χωρίς εφαρμογή, χωρίς περίπλοκη ρουτίνα. Τοποθετήστε το, πατήστε το κουμπί και συνεχίστε τη μέρα σας.</p>
    <div class="nkh-steps3">
      <div class="nkh-step3">
        <?php echo $kh_vid( 'kh-step-1.mp4', 'kh-step-1.jpg', 'Τοποθέτηση του περιτυλίγματος στο γόνατο' ); ?>
        <div class="nkh-step3-txt">
          <p class="nkh-step3-h"><span>1</span> Τοποθετήστε το περιτύλιγμα</p>
          <p>Τυλίξτε το γύρω από το γόνατο και σφίξτε τους ιμάντες. Διαρκεί 20 δευτερόλεπτα και λειτουργεί και στα δύο πόδια.</p>
        </div>
      </div>
      <div class="nkh-step3">
        <?php echo $kh_vid( 'kh-step-2.mp4', 'kh-step-2.jpg', 'Έναρξη της συνεδρίας με ένα κουμπί' ); ?>
        <div class="nkh-step3-txt">
          <p class="nkh-step3-h"><span>2</span> Πατήστε το κουμπί</p>
          <p>Ένα κουμπί ξεκινά και τις τρεις θεραπείες — θερμότητα, συμπίεση και δόνηση — για ακριβώς 12 λεπτά.</p>
        </div>
      </div>
      <div class="nkh-step3">
        <?php echo $kh_vid( 'kh-step-3.mp4', 'kh-step-3.jpg', 'Η συσκευή λειτουργεί μόνη της όσο ξεκουράζεστε' ); ?>
        <div class="nkh-step3-txt">
          <p class="nkh-step3-h"><span>3</span> Συνεχίστε τη μέρα σας</p>
          <p>Δείτε τις ειδήσεις, πιείτε έναν καφέ. Η συσκευή λειτουργεί μόνη της και σταματά όταν τελειώσει η συνεδρία.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 2) Zacaran krug — video -->
<section class="nkh-sec nkh-white">
  <div class="nkh-wrap nkh-row">
    <div class="nkh-media"><?php echo $kh_vid( 'kh-vid-bol.mp4', 'kh-vid-bol.jpg', 'Πόνος και δυσκαμψία στο γόνατο' ); ?></div>
    <div class="nkh-copy">
      <h2 class="nkh-h2">Σπάστε τον φαύλο κύκλο. Το γόνατό σας είναι έτοιμο για πραγματική ανακούφιση.</h2>
      <p>Ο θαμπός πόνος, η δυσκαμψία όταν σηκώνεστε, το προσεκτικό βήμα πριν κατεβείτε τις σκάλες — αυτά είναι σημάδια ενός ιστού που για χρόνια «πεινάει» σιωπηλά. Η απάντηση δεν είναι ακόμη ένα χάπι, αλλά η αποκατάσταση της ροής του αίματος στην άρθρωση.</p>
      <ul class="nkh-tri">
        <li><strong>12 λεπτά την ημέρα:</strong> αποκατάσταση της ροής και χαλάρωση της έντασης, χωρίς χάπια.</li>
        <li><strong>Ανανέωση και αποκατάσταση:</strong> η θερμότητα διαστέλλει τα αγγεία, η συμπίεση μειώνει το πρήξιμο, η δόνηση χαλαρώνει τη δυσκαμψία — όλα σε μία συνεδρία.</li>
        <li><strong>Κίνηση χωρίς υπολογισμούς:</strong> σκάλες χωρίς σχεδιασμό, κάθισμα στον κήπο, το εγγόνι στην αγκαλιά.</li>
      </ul>
    </div>
  </div>
</section>

<!-- Osjetite razliku — video desno -->
<section class="nkh-sec nkh-light">
  <div class="nkh-wrap nkh-row">
    <div class="nkh-copy">
      <h2 class="nkh-h2">Νιώστε τη διαφορά: η διαρκής ανακούφιση ξεκινά σήμερα</h2>
      <p>Όχι μια σύντομη ηρεμία, αλλά μια αλλαγή που θα προσέξετε. <strong>Οι περισσότεροι χρήστες νιώθουν πραγματική διαφορά μέσα στις πρώτες 7 έως 14 ημέρες</strong> τακτικής χρήσης. Η πρωινή δυσκαμψία υποχωρεί και το κατέβασμα της σκάλας παύει να είναι υπολογισμός.</p>
      <ul class="nkh-tri">
        <li><strong>Λιγότερη δυσκαμψία και πίεση:</strong> μειώνει την ένταση και το πρήξιμο που συντηρούν τις ενοχλήσεις.</li>
        <li><strong>Καλύτερη κυκλοφορία:</strong> επαναφέρει τη ροή στους βαθύτερους ιστούς του γονάτου — εκεί όπου πραγματικά δημιουργείται το πρόβλημα.</li>
        <li><strong>Όλα στο σπίτι:</strong> χωρίς μετακινήσεις για θεραπείες και χωρίς αναμονή για ραντεβού.</li>
      </ul>
    </div>
    <div class="nkh-media"><?php echo $kh_vid( 'kh-vid-zglob.mp4', 'kh-vid-zglob.jpg', 'Η άρθρωση του γονάτου' ); ?></div>
  </div>
</section>

<!-- Pametna tehnologija — video lijevo -->
<section class="nkh-sec nkh-white">
  <div class="nkh-wrap nkh-row">
    <div class="nkh-media"><?php echo $kh_vid( 'kh-vid-led.mp4', 'kh-vid-led.jpg', 'Θερμαντικά στοιχεία στο περιτύλιγμα' ); ?></div>
        <div class="nkh-copy">
      <h2 class="nkh-h2">Έξυπνη τεχνολογία για τους βαθύτερους ιστούς</h2>
      <p>Προσαρμόστε το NORIKS KneeHeat στο γόνατό σας: <strong>3 επίπεδα θερμότητας</strong>, <strong>3 λειτουργίες δόνησης</strong> και <strong>κυκλική συμπίεση</strong>. Χωρίς καλώδιο, ένα κουμπί, δώδεκα λεπτά.</p>
      <ul class="nkh-tri">
        <li><strong>Πάντα έτοιμο:</strong> ασύρματη λειτουργία και φόρτιση με καλώδιο USB-C.</li>
        <li><strong>Φορητό:</strong> είναι ελαφρύ και χωράει στην τσάντα — χρησιμοποιήστε το όπου κι αν βρίσκεστε.</li>
        <li><strong>Απλός χειρισμός:</strong> ένα κουμπί, χωρίς εφαρμογή και χωρίς ρυθμίσεις.</li>
      </ul>
    </div>
  </div>
</section>


<!-- 2) Trostruka metoda — slika desno -->
<section class="nkh-sec nkh-light">
  <div class="nkh-wrap nkh-row">
    <div class="nkh-copy">
      <h2 class="nkh-h2">Τρεις θεραπείες σε μία συνεδρία</h2>
      <p>Η θέρμανση, η συμπίεση και η δόνηση δεν λειτουργούν η μία μετά την άλλη, αλλά ταυτόχρονα — γι' αυτό μία συνεδρία διαρκεί μόνο 12 λεπτά.</p>
      <ul class="nkh-tri">
        <li><strong>Η θερμότητα έως 42 °C</strong> διαστέλλει τα αιμοφόρα αγγεία και μαλακώνει τον δύσκαμπτο ιστό γύρω από την άρθρωση.</li>
        <li><strong>Η συμπίεση με αέρα</strong> σφίγγει και χαλαρώνει ρυθμικά, απομακρύνει το συσσωρευμένο υγρό και φέρνει φρέσκο αίμα.</li>
        <li><strong>Το μασάζ με δόνηση 60 Hz</strong> χαλαρώνει την ένταση και τη δυσκαμψία που κρατά το γόνατο «κλειδωμένο».</li>
      </ul>
      <p class="nkh-note">Σε αντίθεση με τις συσκευές TENS, που απλώς καλύπτουν το σήμα του πόνου, το KneeHeat δρα στους βαθύτερους ιστούς.</p>
    </div>
    <div class="nkh-media nkh-graf"><?php echo $kh_img( 'kh-04-metoda.jpg', 'Τριπλή μέθοδος: θερμότητα, συμπίεση και δόνηση' ); ?></div>
  </div>
</section>


<!-- 4) Značajke uređaja — slika desno -->
<section class="nkh-sec nkh-white">
  <div class="nkh-wrap nkh-row">
    <div class="nkh-media nkh-graf"><?php echo $kh_img( 'kh-11-znacajke.jpg', 'Χαρακτηριστικά της συσκευής NORIKS KneeHeat' ); ?></div>
    <div class="nkh-copy">
      <h2 class="nkh-h2">Φτιαγμένο για να φοριέται, όχι για το συρτάρι</h2>
      <p>Ο πίνακας ελέγχου είναι στην εξωτερική πλευρά, στο χέρι σας: <strong>ένα άγγιγμα αλλάζει το επίπεδο θερμότητας</strong>, ένα άλλο τη λειτουργία δόνησης. Χωρίς μενού και χωρίς εφαρμογή που πρέπει να ψάχνετε στο σκοτάδι.</p>
      <p>Το περιτύλιγμα κλείνει με δύο ιμάντες, οπότε διαλέγετε εσείς πόσο σφιχτά — πιο χαλαρά όταν κάθεστε, πιο σφιχτά όταν περπατάτε στο σπίτι. Η συσκευή μένει στη θέση της και δεν γυρίζει γύρω από το πόδι.</p>
      <p class="nkh-strong">Είναι ασύρματη και φορτίζει με καλώδιο USB-C· μία φόρτιση αρκεί για πολλές συνεδρίες, οπότε σας ακολουθεί στη δουλειά ή σε ταξίδι.</p>
    </div>
  </div>
</section>

<!-- 5) Što je u paketu — slika lijevo -->
<section class="nkh-sec nkh-light">
  <div class="nkh-wrap nkh-row">
    <div class="nkh-copy">
      <h2 class="nkh-h2">Τι περιλαμβάνει η συσκευασία</h2>
      <ul class="nkh-pack">
        <li><strong>Συσκευή NORIKS KneeHeat</strong> — περιτύλιγμα με θέρμανση, συμπίεση και δόνηση</li>
        <li><strong>Πλεκτό καλώδιο USB-C</strong> για φόρτιση</li>
        <li><strong>Ιμάντας προέκτασης</strong> για μεγαλύτερες περιφέρειες ποδιού</li>
        <li><strong>2 χρόνια εγγύηση αντικατάστασης</strong></li>
      </ul>
    </div>
    <div class="nkh-media nkh-graf"><?php echo $kh_img( 'kh-07-unboxing-h.jpg', 'Περιεχόμενο συσκευασίας NORIKS KneeHeat' ); ?></div>
  </div>
</section>


<!-- 7) Liječnik — slika desno -->
<section class="nkh-sec nkh-white">
  <div class="nkh-wrap nkh-row">
    <div class="nkh-media nkh-graf"><?php echo $kh_img( 'kh-02-lijecnik.jpg', 'Σύσταση ορθοπεδικού' ); ?></div>
    <div class="nkh-copy">
      <h2 class="nkh-h2">Σχεδιασμένο για καθημερινή άνεση και κίνηση</h2>
      <p class="nkh-quote">«Στα χρόνια προβλήματα γονάτου μετά τα 45, αξίζει περισσότερο ό,τι μπορεί κανείς να κάνει κάθε μέρα στο σπίτι. Η θερμότητα, η συμπίεση και η δόνηση μαζί επαναφέρουν τη ροή στον ιστό — και αυτή είναι η βάση πάνω στην οποία λειτουργούν όλα τα υπόλοιπα.»</p>
      <p class="nkh-sign">Δρ. Μάρκος Παπαδόπουλος, ορθοπεδικός</p>
    </div>
  </div>
</section>

<!-- 8) Dodaci i jamstvo — slika lijevo -->
<!-- 9) Jamstvo — slika desno -->
<style>
.nkh-sec { padding: 46px 0; }
.nkh-light { background: #f3f0ea; color: #1f2a37; }
.nkh-white { background: #fff;    color: #1f2a37; }
.nkh-dark  { background: #12233b; color: #eef3f9; }
.nkh-dark h2, .nkh-dark h3, .nkh-dark p, .nkh-dark li, .nkh-dark strong { color: #eef3f9; }
.nkh-wrap { max-width: 1440px; margin: 0 auto; padding: 0 22px; }
.nkh-row { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
.nkh-media img { width: 100%; height: auto; display: block; border-radius: 14px; }
.nkh-eyebrow { text-transform: uppercase; letter-spacing: .14em; font-size: 12px; font-weight: 700; color: #c1601f; margin: 0 0 8px; }
.nkh-h2 { font-size: 27px; line-height: 1.22; margin: 0 0 12px; font-weight: 700; }
.nkh-sec p { font-size: 15.5px; line-height: 1.62; margin: 0 0 12px; }
.nkh-strong { font-weight: 600; }
.nkh-note { font-size: 14.5px; opacity: .85; margin: 4px 0 0; }
.nkh-quote { font-style: italic; font-size: 16.5px; }
.nkh-sign { font-size: 14px; opacity: .75; margin: 0; }
.nkh-ticks, .nkh-tri, .nkh-pack { list-style: none; padding: 0; margin: 14px 0 0; }
.nkh-ticks li { position: relative; padding-left: 24px; margin-bottom: 7px; font-size: 15px; }
.nkh-ticks li:before { content: ""; position: absolute; left: 0; top: 6px; width: 12px; height: 12px; border-radius: 50%; background: #c1601f; }
.nkh-tri li { border-left: 3px solid #c1601f; padding: 2px 0 2px 14px; margin-bottom: 12px; font-size: 15px; line-height: 1.55; }
.nkh-pack li { position: relative; padding-left: 22px; margin-bottom: 8px; font-size: 15px; line-height: 1.5; }
.nkh-pack li:before { content: "✓"; position: absolute; left: 0; top: 0; color: #1e8f4e; font-weight: 800; }
.nkh-steps { list-style: none; padding: 0; margin: 14px 0 0; }
.nkh-steps li { display: flex; gap: 12px; margin-bottom: 12px; font-size: 15px; line-height: 1.55; }
.nkh-steps span { flex: 0 0 auto; width: 28px; height: 28px; border-radius: 50%; background: #c1601f; color: #fff;
                  font-weight: 800; display: flex; align-items: center; justify-content: center; font-size: 14px; }

.nkh-three { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; align-items: start; }
.nkh-three figure { margin: 0; }
.nkh-three img { width: 100%; height: auto; display: block; border-radius: 10px; }
.nkh-three figcaption { text-align: center; font-size: 13px; margin-top: 7px; opacity: .72; }
.nkh-mini { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-top: 14px; }
.nkh-mini figure { margin: 0; }
.nkh-mini img { width: 100%; height: auto; display: block; border-radius: 10px; }
.nkh-ph { display: flex; align-items: center; justify-content: center; min-height: 200px; background: #e3ded4; border-radius: 12px; color: #7a6a55; font-size: 14px; text-align: center; padding: 12px; }
@media (max-width: 820px) {
  .nkh-sec { padding: 22px 0; }
  .nkh-wrap { padding-left: 0; padding-right: 0; }
  .nkh-h2 { font-size: 22px; }
  .nkh-row { grid-template-columns: 1fr; gap: 18px; }
  .nkh-steps3 { grid-template-columns: 1fr; gap: 18px; }
  .nkh-three { grid-template-columns: 1fr; gap: 14px; }
  .nkh-row .nkh-media { order: -1; }
}

/* kratek opis izdelka: kljukice namesto pikic (kot pri udlagi proti hrkanju) */
.woocommerce-product-details__short-description ul,
.woocommerce div.product .woocommerce-product-details__short-description ul {
  list-style: none !important; margin: 8px 0 14px !important; padding-left: 0 !important; }
.woocommerce-product-details__short-description ul li,
.woocommerce div.product .woocommerce-product-details__short-description ul li {
  list-style: none !important; list-style-type: none !important; padding-left: 24px !important;
  text-indent: -24px !important; margin-left: 0 !important; line-height: 1.55 !important; margin-bottom: 8px !important; }
.woocommerce-product-details__short-description ul li::marker { content: "" !important; }
.woocommerce-product-details__short-description ul li::before { content: none !important; }
.woocommerce-product-details__short-description .nkh-tick {
  display: inline-block !important; width: 24px !important; text-indent: 0 !important;
  color: #c1601f !important; font-weight: 800 !important; }
/* slika naj bo poravnana na rob kontejnerja, ne na sredino stolpca */
.nkh-center { text-align: center; }

.nkh-steps3 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
.nkh-step3 { background: #fff; border-radius: 16px; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,.07); }
.nkh-step3 .nkh-video { width: 100%; height: auto; display: block; }
.nkh-step3-txt { padding: 16px 18px 20px; }
.nkh-step3-h { display: flex; align-items: center; gap: 10px; font-size: 17px; font-weight: 700; margin: 0 0 6px !important; }
.nkh-step3-h span { flex: 0 0 auto; width: 27px; height: 27px; border-radius: 50%; background: #c1601f; color: #fff;
                    font-size: 13px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nkh-step3-txt p:last-child { font-size: 14.5px; margin: 0 !important; }
.nkh-media .nkh-video { width: 100%; height: auto; display: block; border-radius: 14px; }
.nkh-sec p.nkh-lead { max-width: 720px; margin: 0 auto 22px !important; opacity: .85; text-align: center; }
.nkh-sec .nkh-center { text-align: center; }
.nkh-sec .nkh-lead-copy { max-width: 820px; margin: 0 auto 22px !important; text-align: center; }
.nkh-sec .nkh-lead-copy p { margin-left: auto !important; margin-right: auto !important; }
.nkh-sec .nkh-lead-copy h2 { text-align: center; }
</style>
