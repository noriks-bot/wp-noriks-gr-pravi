<?php
/**
 * product-bottom: NORIKS Slim — oblikujuce gacice visokog struka (orto-slim).
 * Original: saybeam.com/products/saybeam-sculpt-brief. Slike: img/slim/ (s namizja NORIKS-SLIMY/SPLETNA STRAN).
 * Pravilo: svaka sekcija ima TOCNO JEDNU sliku, naizmjenicno lijevo/desno, nikoli na sredini;
 * slike su omejene na max-height 430px.
 *   1) BEZ / S NORIKS SLIM — slika lijevo
 *   2) ONE GOVORE SAME — videi
 *   3) LIJEPO I SAMOUVJERENO — slika desno
 *   4) TEHNOLOGIJA PLETIVA — slika lijevo
 *   5) VISOKOELASTIČNO OBLIKOVANJE — slika desno
 *   6) NAKON PORODA — slika lijevo
 *   7) ŠEST BOJA — slika desno
 *   8) TABLICA VELIČINA — slika lijevo
 *   9) USPOREDBA — tablica
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$sl      = get_template_directory_uri() . '/img/slim/';
$sl_path = get_template_directory() . '/img/slim/';
$sl_img  = function( $file, $alt ) use ( $sl, $sl_path ) {
  if ( ! file_exists( $sl_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $sl . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager">';
};
?>

<!-- 1) BEZ / S NORIKS SLIM — slika lijevo -->
<section class="nsl-sec nsl-tint">
  <div class="nsl-wrap nsl-row2">
    <div class="nsl-media"><?php echo $sl_img( 'slm-05-usporedba.jpg', 'Χωρίς και με το σλιπ σμίλευσης NORIKS Slim' ); ?></div>
    <div class="nsl-copy">
      <p class="nsl-kicker">Η διαφορά φαίνεται αμέσως</p>
      <h2 class="nsl-h2">Εσώρουχο σμίλευσης με το οποίο <em>τα ρούχα πέφτουν πολύ καλύτερα</em></h2>
      <p>Τα συνηθισμένα εσώρουχα δεν συγκρατούν τίποτα, ενώ οι κλασικοί κορσέδες σφίγγουν σε μία γραμμή — έτσι πάνω από το τελείωμα δημιουργείται εξόγκωμα και το ίδιο το τελείωμα φαίνεται κάτω από τα ρούχα.</p>
      <ul class="nsl-vs">
        <li class="is-yes">Ορατά πιο λεία σιλουέτα</li>
        <li class="is-yes">Η κοιλιά συγκρατείται όλη μέρα</li>
        <li class="is-yes">Τα ρούχα πέφτουν πιο ίσια</li>
        <li class="is-no">Πτυχές κάτω από στενή μπλούζα</li>
        <li class="is-no">Τελείωμα που τυλίγεται και κόβει όταν κάθεστε</li>
        <li class="is-no">Κρύψιμο κάτω από φαρδιές μπλούζες</li>
      </ul>
      <a class="nsl-cta" href="#bundle-selector">Επιλέξτε χρώμα και μέγεθος</a>
    </div>
  </div>
</section>

<!-- 2) ONE GOVORE SAME — videi -->
<section class="nsl-sec nsl-vids">
  <div class="nsl-wrap">
    <h2 class="nsl-h2" style="text-align:center">Μιλούν <em>από μόνα τους</em></h2>
    <div class="nsl-vids__strip">
      <figure class="nsl-vids__card">
        <video src="<?php echo esc_url( $sl . 'slm-vid-1.mp4' ); ?>" poster="<?php echo esc_url( $sl . 'slm-vid-1.jpg' ); ?>"
               muted autoplay loop playsinline preload="none" aria-label="Πελάτισσα δείχνει το σλιπ NORIKS Slim"></video>
      </figure>
      <figure class="nsl-vids__card">
        <video src="<?php echo esc_url( $sl . 'slm-vid-2.mp4' ); ?>" poster="<?php echo esc_url( $sl . 'slm-vid-2.jpg' ); ?>"
               muted autoplay loop playsinline preload="none" aria-label="Πελάτισσα δείχνει πώς το NORIKS Slim σμιλεύει τη μέση"></video>
      </figure>
    </div>
  </div>
</section>

<!-- 3) LIJEPO I SAMOUVJERENO — slika desno -->
<section class="nsl-sec nsl-tint">
  <div class="nsl-wrap nsl-row2 nsl-row2--rev">
    <div class="nsl-copy">
      <p class="nsl-kicker">Από το πρωί ως το βράδυ</p>
      <h2 class="nsl-h2">Νιώστε όμορφη <em>και σίγουρη για τον εαυτό σας</em></h2>
      <div class="nsl-points">
        <div class="nsl-point"><h3>Χωρίς πτυχές</h3><p>Η χιαστί ζώνη λειαίνει την κοιλιά και δεν μετακινείται όταν κάθεστε, σηκώνεστε ή σκύβετε.</p></div>
        <div class="nsl-point"><h3>Σμιλεμένη μέση και γλουτοί</h3><p>Η ανατομική γραμμή ακολουθεί το σώμα — η μέση δείχνει πιο λεπτή και οι γλουτοί πιο ανασηκωμένοι.</p></div>
        <div class="nsl-point"><h3>Άνεση όλη μέρα</h3><p>Απαλό ύφασμα χωρίς ραφές, που το ξεχνάτε μόλις το φορέσετε.</p></div>
      </div>
    </div>
    <div class="nsl-media"><?php echo $sl_img( 'slm-06-samouvjereno.jpg', 'Γυναίκα με το σλιπ NORIKS Slim' ); ?></div>
  </div>
</section>

<!-- 4) TEHNOLOGIJA PLETIVA — slika lijevo -->
<section class="nsl-sec">
  <div class="nsl-wrap nsl-row2">
    <div class="nsl-media"><?php echo $sl_img( 'slm-07-pletivo.jpg', 'Χιαστί ζώνη και πλέξη του σλιπ NORIKS Slim' ); ?></div>
    <div class="nsl-copy">
      <p class="nsl-kicker">Έξυπνη πλέξη</p>
      <h2 class="nsl-h2">Λειαίνει και στηρίζει, <em>χωρίς αίσθηση σφιξίματος</em></h2>
      <p>Η ζώνη περνά χιαστί πάνω από την κοιλιά και συνεχίζει στους γοφούς και στην πλάτη. Έτσι η πίεση κατανέμεται γύρω από όλη τη μέση — 360° — αντί να σφίγγει σε ένα σημείο.</p>
      <div class="nsl-facts">
        <div><h3>Χιαστί ζώνη 360°</h3><p>Μπροστά, στο πλάι και πίσω — συγκρατεί την κοιλιά ομοιόμορφα.</p></div>
        <div><h3>Ψηλόμεσο</h3><p>Το πάνω τελείωμα φτάνει πάνω από τον αφαλό και δεν τυλίγεται προς τα κάτω.</p></div>
        <div><h3>Διχτυωτά ένθετα</h3><p>Αφήνουν τον αέρα να περνά, έτσι δεν ζεσταίνεστε ούτε το καλοκαίρι.</p></div>
        <div><h3>Βαμβακερή επένδυση</h3><p>Απαλή και υγιεινή — φοριέται και στη θέση του κανονικού εσώρουχου.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- 5) VISOKOELASTIČNO OBLIKOVANJE — slika desno -->
<section class="nsl-sec nsl-tint">
  <div class="nsl-wrap nsl-row2 nsl-row2--rev">
    <div class="nsl-copy">
      <p class="nsl-kicker">Ελαστική συμπίεση</p>
      <h2 class="nsl-h2">Σμίλευση <em>υψηλής ελαστικότητας</em></h2>
      <p>Το ύφασμα τεντώνει προς όλες τις κατευθύνσεις και επανέρχεται στο σχήμα του — συγκρατεί σταθερά, αλλά κινείται μαζί σας όταν κάθεστε, περπατάτε ή σηκώνετε το παιδί.</p>
      <ul class="nsl-check">
        <li><strong>Έλεγχος κοιλιάς</strong> — η κοιλιά συγκρατείται όλη μέρα</li>
        <li><strong>Λεία μέση</strong> — χωρίς εξόγκωμα πάνω από το παντελόνι ή τη φούστα</li>
        <li><strong>Δεν γλιστράει</strong> — μένει στη θέση του και όταν κάθεστε</li>
        <li><strong>Αόρατο</strong> — κάτω από εφαρμοστό φόρεμα, τζιν και κολάν</li>
      </ul>
    </div>
    <div class="nsl-media"><?php echo $sl_img( 'slm-09-oblikovanje.jpg', 'Σμίλευση της μέσης υψηλής ελαστικότητας' ); ?></div>
  </div>
</section>

<!-- 6) NAKON PORODA — slika lijevo -->
<section class="nsl-sec">
  <div class="nsl-wrap nsl-row2">
    <div class="nsl-media"><?php echo $sl_img( 'slm-11-oblikovanje-nakon-poroda.jpg', 'Μαμάδες με το σλιπ NORIKS Slim' ); ?></div>
    <div class="nsl-copy">
      <p class="nsl-kicker">Και μετά την εγκυμοσύνη</p>
      <h2 class="nsl-h2">Σμίλευση που δουλεύει <em>με το σώμα σας</em>, όχι εναντίον του</h2>
      <p>Μετά την εγκυμοσύνη η κοιλιά και η μέση συχνά δεν επιστρέφουν αμέσως στην παλιά τους γραμμή. Το NORIKS Slim τις συγκρατεί απαλά, κι έτσι τα ρούχα πέφτουν ξανά όμορφα — χωρίς σφίξιμο και χωρίς τύλιγμα.</p>
      <ul class="nsl-check">
        <li><strong>Απαλό ύφασμα που αναπνέει</strong> πάνω στο ευαίσθητο δέρμα</li>
        <li><strong>Πάνω τελείωμα πάνω από τον αφαλό</strong> — δεν κόβει στο κάτω μέρος της κοιλιάς</li>
        <li><strong>Μεγέθη έως 5XL</strong> — επιλέγετε με βάση την περιφέρεια της μέσης</li>
      </ul>
      <p class="nsl-note">Μετά από καισαρική ή αν δεν είστε σίγουρη, συμβουλευτείτε τον γιατρό σας πριν το φορέσετε.</p>
    </div>
  </div>
</section>

<!-- 7) ŠEST BOJA — slika desno -->
<section class="nsl-sec nsl-tint">
  <div class="nsl-wrap nsl-row2 nsl-row2--rev">
    <div class="nsl-copy">
      <p class="nsl-kicker">Έξι χρώματα</p>
      <h2 class="nsl-h2">Για κάθε μέρα <em>και κάθε ντύσιμο</em></h2>
      <p>Χρώμα δέρματος και μαύρο κάτω από όλα, σκούρο μπλε για κάθε μέρα, και λιλά, φούξια και δαμασκηνί όταν θέλετε κάτι δικό σας. Όλα τα χρώματα έχουν την ίδια πλέξη και την ίδια γραμμή.</p>
      <ul class="nsl-colors">
        <li><span style="background:#17161a"></span>Μαύρο</li>
        <li><span style="background:#ecd9bd"></span>Χρώμα δέρματος</li>
        <li><span style="background:#232b52"></span>Σκούρο μπλε</li>
        <li><span style="background:#d8c1ee"></span>Λιλά</li>
        <li><span style="background:#d81b72"></span>Φούξια</li>
        <li><span style="background:#5b2147"></span>Δαμασκηνί</li>
      </ul>
      <a class="nsl-cta" href="#bundle-selector">Επιλέξτε χρώμα και μέγεθος</a>
    </div>
    <div class="nsl-media"><?php echo $sl_img( 'slm-12-boje-v2.jpg', 'NORIKS Slim σε έξι χρώματα' ); ?></div>
  </div>
</section>

<!-- 8) TABLICA VELIČINA — slika lijevo -->
<section class="nsl-sec">
  <div class="nsl-wrap nsl-row2">
    <div class="nsl-media"><?php echo $sl_img( 'slm-15-tablica-velicina.jpg', 'Πίνακας μεγεθών NORIKS Slim' ); ?></div>
    <div class="nsl-copy">
      <p class="nsl-kicker">Το σωστό μέγεθος με την πρώτη</p>
      <h2 class="nsl-h2">Επιλέξτε μέγεθος <em>με βάση την περιφέρεια της μέσης</em></h2>
      <p>Όχι με βάση το συνηθισμένο σας νούμερο ρούχων — μετά από εγκυμοσύνη ή αλλαγή βάρους τα δύο συχνά δεν συμπίπτουν.</p>
      <ol class="nsl-steps">
        <li>Βρείτε το πιο στενό σημείο του κορμού, λίγο πάνω από τον αφαλό.</li>
        <li>Τυλίξτε τη μεζούρα οριζόντια, εφαρμοστά αλλά όχι σφιχτά.</li>
        <li>Βρείτε την περιφέρειά σας στον πίνακα. Ανάμεσα σε δύο μεγέθη; Πάρτε το <strong>μεγαλύτερο</strong>.</li>
      </ol>
      <a class="nsl-cta nsl-cta--line js-open-size-chart" href="#">Ανοίξτε τον πίνακα μεγεθών</a>
    </div>
  </div>
</section>

<!-- 9) USPOREDBA — tablica -->
<section class="nsl-sec nsl-tint nsl-cmp">
  <div class="nsl-wrap">
    <h2 class="nsl-h2" style="text-align:center">Γιατί το σλιπ NORIKS Slim <em>είναι διαφορετικό</em></h2>
    <div class="nsl-cmp__box">
      <table class="nsl-cmp__table">
        <thead><tr><td>&nbsp;</td><th scope="col">Γυμναστική</th><th scope="col">Δίαιτα</th><th scope="col">Κλασικός κορσές</th><th scope="col">Επέμβαση</th><th scope="col" class="is-us">NORIKS Slim</th></tr></thead>
        <tbody>
          <tr><th scope="row">Δρα στην πραγματική αιτία</th><td class="nsl-cmp__ne">✕</td><td class="nsl-cmp__ne">✕</td><td class="nsl-cmp__ne">✕</td><td class="nsl-cmp__pol">–</td><td class="nsl-cmp__da is-us">✓</td></tr>
          <tr><th scope="row">Φοριέται σε λίγα δευτερόλεπτα</th><td class="nsl-cmp__ne">✕</td><td class="nsl-cmp__pol">–</td><td class="nsl-cmp__da">✓</td><td class="nsl-cmp__ne">✕</td><td class="nsl-cmp__da is-us">✓</td></tr>
          <tr><th scope="row">Φθηνότερο από επέμβαση</th><td class="nsl-cmp__da">✓</td><td class="nsl-cmp__da">✓</td><td class="nsl-cmp__da">✓</td><td class="nsl-cmp__ne">✕</td><td class="nsl-cmp__da is-us">✓</td></tr>
          <tr><th scope="row">Άνετο όλη μέρα</th><td class="nsl-cmp__pol">–</td><td class="nsl-cmp__da">✓</td><td class="nsl-cmp__ne">✕</td><td class="nsl-cmp__ne">✕</td><td class="nsl-cmp__da is-us">✓</td></tr>
          <tr><th scope="row">Αποτέλεσμα από την πρώτη μέρα</th><td class="nsl-cmp__ne">✕</td><td class="nsl-cmp__ne">✕</td><td class="nsl-cmp__pol">–</td><td class="nsl-cmp__ne">✕</td><td class="nsl-cmp__da is-us">✓</td></tr>
          <tr><th scope="row">Στηρίζει την κοιλιά στις 360°</th><td class="nsl-cmp__ne">✕</td><td class="nsl-cmp__ne">✕</td><td class="nsl-cmp__ne">✕</td><td class="nsl-cmp__pol">–</td><td class="nsl-cmp__da is-us">✓</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<style>
.nsl-sec { padding: 60px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #2b1622; }
.nsl-sec * { box-sizing: border-box; }
.nsl-tint { background: #fbf1f6; }
.nsl-wrap { width: 100%; max-width: 1440px; margin: 0 auto; padding: 0 24px; }
.nsl-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #a3336b; margin: 0 0 10px; }
.nsl-h2 { font-size: clamp(25px, 3.1vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #2b1622; }
.nsl-h2 em { font-style: italic; font-weight: 800; color: #a3336b; }
.nsl-copy p { font-size: 16px; line-height: 1.7; color: #5a4550; margin: 0 0 14px; }
.nsl-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nsl-media { text-align: left; }
.nsl-media img { display: block; width: 100%; max-width: 100%; max-height: none; height: auto; object-fit: cover;
  border-radius: 14px; box-shadow: 0 2px 4px rgba(40,20,35,.05), 0 14px 40px rgba(40,20,35,.10); }
.nsl-check { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 11px; }
.nsl-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; color: #3f2a35; }
.nsl-check li::before { content: "\2713"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%; background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nsl-vs { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 10px; }
.nsl-vs li { position: relative; padding-left: 28px; font-size: 15px; line-height: 1.5; color: #3f2a35; }
.nsl-vs li::before { position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nsl-vs .is-yes::before { content: "\2713"; background: #2f9e5f; color: #fff; }
.nsl-vs .is-no { color: #8e7883; }
.nsl-vs .is-no::before { content: "\2715"; background: #f0dfe7; color: #b0909f; }
.nsl-points { display: flex; flex-direction: column; gap: 20px; }
.nsl-point h3 { font-size: 17.5px; font-weight: 800; margin: 0 0 6px; color: #a3336b; }
.nsl-point p { font-size: 15.5px; color: #5a4550; line-height: 1.6; margin: 0; }
.nsl-facts { display: grid; grid-template-columns: 1fr 1fr; gap: 22px 26px; margin-top: 6px; }
.nsl-facts h3 { font-size: 16px; font-weight: 800; margin: 0 0 6px; color: #2b1622; }
.nsl-facts p { font-size: 14.5px; color: #6d5863; line-height: 1.6; margin: 0; }
.nsl-colors { list-style: none; padding: 0; margin: 14px 0 26px; display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 10px; }
.nsl-colors li { display: flex; align-items: center; gap: 11px; font-size: 14.5px; font-weight: 700; color: #3f2a35;
  background: #fff; border: 1px solid #f1dfe9; border-radius: 12px; padding: 10px 14px;
  box-shadow: 0 1px 2px rgba(40,20,35,.04), 0 6px 16px rgba(40,20,35,.05); }
.nsl-colors span { flex: 0 0 24px; width: 24px; height: 24px; border-radius: 50%;
  box-shadow: inset 0 0 0 1px rgba(0,0,0,.14), 0 0 0 3px #fff, 0 0 0 4px rgba(164,85,127,.22); }
.nsl-steps { margin: 4px 0 22px; padding-left: 22px; }
.nsl-steps li { font-size: 15.5px; line-height: 1.6; color: #3f2a35; margin-bottom: 8px; }
.nsl-note { font-size: 13.5px !important; color: #8e7883 !important; font-style: italic; margin: 6px 0 0 !important; }
.nsl-guarantee { font-size: 14.5px !important; background: #fff; border: 1px solid #f0dfe7; border-radius: 10px; padding: 12px 16px; }
.nsl-cta { display: inline-block; background: #a3336b; color: #fff !important; font-size: 15px; font-weight: 700; padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.nsl-cta:hover { background: #82254f; color: #fff !important; }
.nsl-cta--line { background: #fff; color: #a3336b !important; border: 2px solid #a3336b; padding: 13px 28px; }
.nsl-cta--line:hover { background: #a3336b; color: #fff !important; }

.nsl-vids__strip { display: grid; grid-template-columns: repeat(2, minmax(0,1fr)); gap: 20px; max-width: 760px; margin: 22px auto 0; }
.nsl-vids__card { margin: 0; border-radius: 14px; overflow: hidden; background: #000;
  box-shadow: 0 2px 4px rgba(40,20,35,.06), 0 14px 34px rgba(40,20,35,.12); }
.nsl-vids__card video { display: block; width: 100%; height: 100%; aspect-ratio: 9 / 16; object-fit: cover; }
.nsl-cmp__box { background: #fff; border-radius: 16px; overflow-x: auto; margin-top: 22px;
  box-shadow: 0 2px 4px rgba(40,20,35,.05), 0 16px 40px rgba(40,20,35,.10); }
.nsl-cmp__table { width: 100%; min-width: 620px; border-collapse: collapse; border-spacing: 0; margin: 0 !important; border: 0 !important; }
.nsl-cmp__table tr, .nsl-cmp__table thead, .nsl-cmp__table tbody { background: transparent !important; border: 0 !important; }
.nsl-cmp__table thead th { font-size: 12.5px; font-weight: 800; letter-spacing: .06em; text-transform: uppercase;
  color: #6b5566; text-align: center; padding: 16px 10px; border-bottom: 1px solid #f0e2ea; }
.nsl-cmp__table thead th.is-us { color: #a4557f; background: #fdf4f8; }
.nsl-cmp__table th[scope="row"] { background: #fbf1f6; color: #3a2030; font-size: 14.5px; font-weight: 800;
  text-align: left; padding: 14px 16px; border-bottom: 1px solid #fff; width: 27%; }
.nsl-cmp__table td { text-align: center; font-size: 19px; font-weight: 800; padding: 14px 10px; border-bottom: 1px solid #f6ecf1; }
.nsl-cmp__table tbody tr:last-child td, .nsl-cmp__table tbody tr:last-child th[scope="row"] { border-bottom: 0; }
.nsl-cmp__table td.is-us { background: #fdf4f8; }
.nsl-cmp__table td.nsl-cmp__da { color: #2f9e5f; }
.nsl-cmp__table td.nsl-cmp__ne { color: #d05353; }
.nsl-cmp__table td.nsl-cmp__pol { color: #b3a3ad; }

@media (max-width: 980px) {
  .nsl-row2 { grid-template-columns: 1fr; gap: 28px; }
  .nsl-row2--rev .nsl-media { order: -1; }
}
@media (max-width: 560px) {
  .nsl-vids__strip { gap: 12px; }
  .nsl-cmp__table th[scope="row"] { font-size: 13.5px; padding: 12px 12px; }
  .nsl-sec { padding: 42px 0; }
  .nsl-wrap { padding: 0 16px; }
  .nsl-facts { grid-template-columns: 1fr; gap: 16px; }
  .nsl-colors { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .nsl-cta { width: 100%; text-align: center; }
}

/* ── kratek opis izdelka: kljukice namesto pik (REST pobrise inline slog) ── */
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
.woocommerce-product-details__short-description .nsl-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #a3336b !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
