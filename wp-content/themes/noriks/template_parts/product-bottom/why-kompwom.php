<?php
/**
 * product-bottom: NORIKS FIT Woman — oblikujuca majica s 3D linijama (orto-kompwom).
 * Pravilo: svaka sekcija ima TOCNO JEDNU sliku, naizmjenicno lijevo/desno.
 * Recenzije su preslikane s originala (leonieandco): bordo pas + vodoravni klizac.
 *   1) Zagladen trbuh (lijevo)     5) Tkanina i kroj (desno)
 *   2) Mi vs drugi (desno)         6) Kako je nositi (lijevo)
 *   3) RECENZIJE — klizac          7) Boje (desno)
 *   4) Osjecajte se sigurno (lijevo)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$kw      = get_template_directory_uri() . '/img/kompwom/';
$kw_path = get_template_directory() . '/img/kompwom/';
$kw_img  = function( $file, $alt, $cls = '' ) use ( $kw, $kw_path ) {
  if ( ! file_exists( $kw_path . $file ) ) { return ''; }
  return '<img class="' . esc_attr( $cls ) . '" src="' . esc_url( $kw . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) ZAGLAĐEN TRBUH — slika lijevo -->
<section class="nkw-sec nkw-tint">
  <div class="nkw-wrap nkw-row2">
    <div class="nkw-media"><?php echo $kw_img( 'kwm-trbuh.jpg', 'Επίπεδη κοιλιά με τη μπλούζα NORIKS FIT Woman' ); ?></div>
    <div class="nkw-copy">
      <p class="nkw-kicker">Αμέσως, από το πρώτο λεπτό</p>
      <h2 class="nkw-h2">Επίπεδη κοιλιά <em>χωρίς σφίξιμο</em></h2>
      <p>Οι 3D γραμμές μας διαμορφώνουν το σώμα έτσι ώστε να συγκρατούν απαλά την περιοχή της κοιλιάς και των γοφών και να τονώνουν την κυκλοφορία — χωρίς ζώνη που χαράζει και χωρίς την αίσθηση ότι είστε σφιγμένη.</p>
      <p>Χωρίς τη μπλούζα η κοιλιά είναι χαλαρή και οι πτυχές φαίνονται κάτω από τα ρούχα. Με αυτήν η κοιλιά είναι αμέσως επίπεδη και η στάση πιο όρθια.</p>
      <ul class="nkw-check">
        <li>Αμέσως επίπεδη κοιλιά</li>
        <li>Όρθια στάση χωρίς σκέψη</li>
        <li>Αόρατη κάτω από τα ρούχα</li>
      </ul>
      <a class="nkw-cta" href="#bundle-selector">Επιλέξτε χρώμα και μέγεθος</a>
    </div>
  </div>
</section>

<!-- 2) MI VS DRUGI — slika desno -->
<section class="nkw-sec">
  <div class="nkw-wrap nkw-row2 nkw-row2--rev">
    <div class="nkw-copy">
      <p class="nkw-kicker">Η διαφορά</p>
      <h2 class="nkw-h2">Γιατί η συνηθισμένη συμπίεση δεν δουλεύει</h2>
      <p>Οι κλασικές λαστιχένιες μπλούζες πιέζουν σε μία γραμμή. Το αποτέλεσμα είναι εξόγκωμα πάνω από το τελείωμα, πτυχές στους ώμους και τελείωμα που φαίνεται κάτω από τα ρούχα.</p>
      <p>Σε εμάς το ανάγλυφο είναι <strong>πλεγμένο μέσα στο ύφασμα</strong> και κατανεμημένο στο πλάτος, οπότε η πίεση απλώνεται αντί να μαζεύεται.</p>
      <ul class="nkw-vs">
        <li class="is-yes">Τεχνολογία 3D πλεγμένη στο πλεκτό</li>
        <li class="is-yes">Απαλή συμπίεση 360° χωρίς εξογκώματα</li>
        <li class="is-yes">Στηρίζει τη μέση</li>
        <li class="is-no">Συνηθισμένη συμπίεση που δημιουργεί εξογκώματα</li>
        <li class="is-no">Το υλικό τυλίγεται μέσα στην ημέρα</li>
        <li class="is-no">Τελείωμα που φαίνεται κάτω από τα ρούχα</li>
      </ul>
    </div>
    <div class="nkw-media"><?php echo $kw_img( 'kwm-usporedba.jpg', 'Η NORIKS FIT Woman σε σύγκριση με μια συνηθισμένη λαστιχένια μπλούζα' ); ?></div>
  </div>
</section>

<!-- 3) OSJEĆAJTE SE SIGURNO — slika lijevo -->
<section class="nkw-rev">
  <div class="nkw-rev__head">
    <span class="nkw-rev__badge">★★★★★ Εξαιρετικό · Βαθμολογία 4,9/5</span>
    <h2 class="nkw-rev__title">Κριτικές από γυναίκες σαν εσάς</h2>
  </div>
  <div class="nkw-rev__track">
    <?php
    $kw_reviews = array(
      array( 'img' => 'kwm-ugc-1.jpg', 'name' => 'Καρολίνα Β.', 'meta' => 'Μέγεθος M · 46 · Αθήνα', 'worn' => 'Τη φοράει 7 εβδομάδες',
             'text' => '«Τα πουκάμισα πέφτουν ίσια πάνω μου, μπροστά και πίσω. Όσες δοκίμασα πριν δεν άντεξαν ούτε μια ολόκληρη μέρα.»' ),
      array( 'img' => 'kwm-ugc-2.jpg', 'name' => 'Δανάη Π.', 'meta' => 'Μέγεθος 2XL · 48 · Θεσσαλονίκη', 'worn' => 'Τη φοράει 5 εβδομάδες',
             'text' => '«Η πρώτη μπλούζα σύσφιξης που δεν μου τυλίγεται προς τα πάνω. Το τελείωμα κρατά και το ύφασμα είναι αρκετά λεπτό για το καλοκαίρι.»' ),
      array( 'img' => 'kwm-ugc-3.jpg', 'name' => 'Χαρά Τ.', 'meta' => 'Μέγεθος 3XL · 51 · Πάτρα', 'worn' => 'Τη φοράει 6 εβδομάδες',
             'text' => '«Την πήρα για έναν γάμο και τώρα τη φοράω στη δουλειά. Το κάθισμα δεν αλλάζει πια τον τρόπο που πέφτει το φόρεμα.»' ),
      array( 'img' => 'kwm-ugc-4.jpg', 'name' => 'Λάρα Δ.', 'meta' => 'Μέγεθος M · 43 · Ηράκλειο', 'worn' => 'Τη φοράει 8 εβδομάδες',
             'text' => '«Τη φοράω μετά το πρωινό και ξεχνάω ότι την έχω. Μέχρι το μεσημέρι δεν την προσέχω καθόλου.»' ),
      array( 'img' => 'kwm-ugc-5.jpg', 'name' => 'Ναταλία Α.', 'meta' => 'Μέγεθος 2XL · 37 · Λάρισα', 'worn' => 'Τη φοράει 9 εβδομάδες',
             'text' => '«Ποτέ δεν μου πήγαινε όταν έβαζα τη μπλούζα μέσα στο παντελόνι. Με αυτήν από κάτω η μέση δείχνει πιο λεπτή και δεν διορθώνομαι όλη μέρα.»' ),
      array( 'img' => 'kwm-ugc-6.jpg', 'name' => 'Νικολέτα Μ.', 'meta' => 'Μέγεθος L · 48 · Βόλος', 'worn' => 'Τη φοράει 4 εβδομάδες',
             'text' => '«Την παρήγγειλα για ένα σύνολο και κατέληξε κάτω από τα περισσότερα πουλόβερ. Το πλεκτό φαίνεται λείο αντί για ζαρωμένο στη μέση.»' ),
      array( 'img' => 'kwm-ugc-7.jpg', 'name' => 'Πέτρα Ι.', 'meta' => 'Μέγεθος XL · 50 · Ιωάννινα', 'worn' => 'Τη φοράει 6 εβδομάδες',
             'text' => '«Κάθομαι στο γραφείο εννιά ώρες τη μέρα και παραμένει άνετη. Δεν έχει ραφές που να τις νιώθεις και η μπλούζα μένει λεία στην πλάτη.»' ),
      array( 'img' => 'kwm-ugc-8.jpg', 'name' => 'Σοφία Κ.', 'meta' => 'Μέγεθος M · 45 · Χανιά', 'worn' => 'Τη φοράει 10 εβδομάδες',
             'text' => '«Η πλάτη μου την ευγνωμονεί. Η μπλούζα μου θυμίζει απαλά να ισιώσω και ταυτόχρονα δεν με σφίγγει πουθενά.»' ),
    );
    foreach ( $kw_reviews as $r ) : ?>
    <article class="nkw-rev__card">
      <div class="nkw-rev__img"><?php echo $kw_img( $r['img'], 'Kupka u NORIKS FIT Woman majici' ); ?></div>
      <div class="nkw-rev__body">
        <div class="nkw-rev__top">
          <div>
            <p class="nkw-rev__name"><?php echo esc_html( $r['name'] ); ?>
              <svg width="15" height="15" viewBox="0 0 16 16" aria-hidden="true"><circle cx="8" cy="8" r="8" fill="#3aa06a"/><path d="M5 8l2 2 4-4" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </p>
            <p class="nkw-rev__meta"><?php echo esc_html( $r['meta'] ); ?></p>
          </div>
          <span class="nkw-rev__worn"><?php echo esc_html( $r['worn'] ); ?></span>
        </div>
        <p class="nkw-rev__text"><?php echo esc_html( $r['text'] ); ?></p>
      </div>
    </article>
    <?php endforeach; ?>
  </div>
  <p class="nkw-rev__hint">Σύρετε στο πλάι για περισσότερες κριτικές →</p>
</section>

<!-- 7) BOJE — slika desno -->
<section class="nkw-sec nkw-tint">
  <div class="nkw-wrap nkw-row2">
    <div class="nkw-media"><?php echo $kw_img( 'kwm-drzanje.jpg', 'Πιο λεπτή μέση και όρθια στάση' ); ?></div>
    <div class="nkw-copy">
      <p class="nkw-kicker">Τρία πράγματα μαζί</p>
      <h2 class="nkw-h2">Νιώστε <em>σίγουρη μέσα στο δέρμα σας</em></h2>
      <div class="nkw-points">
        <div class="nkw-point"><h3>Πιο λεπτή μέση</h3><p>Οι 3D γραμμές διαμορφώνουν τη μέση και λειαίνουν τα εξογκώματα πάνω από το παντελόνι ή τη φούστα.</p></div>
        <div class="nkw-point"><h3>Αμέσως επίπεδη κοιλιά</h3><p>Η απαλή συμπίεση κρατά την κοιλιά κάτω από κάθε ρούχο, χωρίς πίεση σε ένα σημείο.</p></div>
        <div class="nkw-point"><h3>Όρθια στάση</h3><p>Η στήριξη στην πλάτη βοηθά να στέκεστε ίσια και ανακουφίζει τη μέση.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- 4) TKANINA I KROJ — slika desno -->
<section class="nkw-sec">
  <div class="nkw-wrap nkw-row2 nkw-row2--rev">
    <div class="nkw-copy">
      <p class="nkw-kicker">Ύφασμα και γραμμή</p>
      <h2 class="nkw-h2">Το ανάγλυφο είναι <em>πλεγμένο</em>, όχι τυπωμένο</h2>
      <p>Η φαρδιά ζώνη περνά πάνω από την κοιλιά και τους γοφούς, η δεύτερη πάει στην πλάτη. Γι' αυτό τίποτα δεν σκάει και τίποτα δεν ξεφλουδίζει.</p>
      <div class="nkw-facts">
        <div><h3>3D γραμμές</h3><p>Δομημένες, πλεγμένες στο πλεκτό — δεν φεύγουν με τον χρόνο.</p></div>
        <div><h3>Ζώνη στην πλάτη</h3><p>Η δεύτερη ζώνη περνά στην πλάτη και στηρίζει την όρθια στάση.</p></div>
        <div><h3>Μανίκια</h3><p>Εφαρμοστή γραμμή που δεν τυλίγεται και δεν ανεβαίνει.</p></div>
        <div><h3>Υλικό</h3><p>Λεπτό, ματ και αναπνέον — εξαφανίζεται κάτω από πουκάμισο ή σακάκι.</p></div>
      </div>
    </div>
    <div class="nkw-media"><?php echo $kw_img( 'kwm-detalji.jpg', 'Λεπτομέρειες: 3D γραμμές, ζώνη, μανίκια, υλικό' ); ?></div>
  </div>
</section>

<!-- 5) KAKO JE NOSITI — slika lijevo -->
<section class="nkw-sec nkw-tint">
  <div class="nkw-wrap nkw-row2">
    <div class="nkw-media"><?php echo $kw_img( 'kwm-siva.jpg', 'NORIKS FIT Woman σκούρο γκρι' ); ?></div>
    <div class="nkw-copy">
      <p class="nkw-kicker">Πώς φοριέται</p>
      <h2 class="nkw-h2">Φορέστε την το πρωί και ξεχάστε την ως το βράδυ</h2>
      <p>Πρέπει να αναπνέετε και να τρώτε κανονικά, χωρίς να σκέφτεστε τη μπλούζα. Αν το σημάδι στο δέρμα φαίνεται είκοσι λεπτά μετά την αφαίρεση, το μέγεθος είναι πολύ μικρό.</p>
      <ul class="nkw-check">
        <li><strong>Όλη μέρα</strong> — η συμπίεση είναι κατανεμημένη, οπότε τίποτα δεν χαράζει</li>
        <li><strong>Κάτω από όλα</strong> — χωρίς γραμμή και χωρίς τελείωμα κάτω από τα ρούχα</li>
        <li><strong>Απλή φροντίδα</strong> — πλύσιμο στο πλυντήριο στους 30 °C</li>
      </ul>
      <p class="nkw-note nkw-note--left">Το μέγεθος επιλέγετε με βάση την περίμετρο στήθους. Αν είστε ανάμεσα σε δύο, πάρτε το μεγαλύτερο.</p>
    </div>
  </div>
</section>

<!-- 6) RECENZIJE (postavitev z originala — bordo pas z drsnikom) -->
<section class="nkw-sec">
  <div class="nkw-wrap nkw-row2 nkw-row2--rev">
    <div class="nkw-copy">
      <p class="nkw-kicker">Τρία χρώματα</p>
      <h2 class="nkw-h2">Μαύρο, σκούρο γκρι και <em>ροζ</em></h2>
      <p>Μαύρο κάτω από όλα, σκούρο γκρι για καθημερινή χρήση, ροζ όταν θέλετε κάτι πιο ζεστό. Και τα τρία έχουν το ίδιο πλεκτό και το ίδιο ανάγλυφο.</p>
      <p>Το χρώμα και το μέγεθος τα επιλέγετε σε αυτή τη σελίδα, πριν τα προσθέσετε στο καλάθι.</p>
      <a class="nkw-cta" href="#bundle-selector">Επιλέξτε χρώμα και μέγεθος</a>
    </div>
    <div class="nkw-media"><?php echo $kw_img( 'kwm-roza.jpg', 'NORIKS FIT Woman ροζ' ); ?></div>
  </div>
</section>

<style>
.nkw-sec { padding: 62px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #241c22; }
.nkw-sec * { box-sizing: border-box; }
.nkw-tint { background: #fbf3f4; }
.nkw-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.nkw-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #a8536b; margin: 0 0 10px; }
.nkw-h2 { font-size: clamp(25px, 3.2vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #241c22; }
.nkw-h2 em { font-style: italic; font-weight: 800; color: #a8536b; }
.nkw-copy p { font-size: 16px; line-height: 1.7; color: #56494f; margin: 0 0 14px; }
.nkw-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 52px; align-items: center; }
.nkw-media img { width: 100%; display: block; border-radius: 14px; box-shadow: 0 2px 4px rgba(36,28,34,.05), 0 14px 40px rgba(36,28,34,.10); }
.nkw-check { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 11px; }
.nkw-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; }
.nkw-check li::before { content: "\2713"; position: absolute; left: 0; top: -1px; width: 20px; height: 20px; border-radius: 50%; background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nkw-vs { list-style: none; padding: 0; margin: 4px 0 0; display: flex; flex-direction: column; gap: 10px; }
.nkw-vs li { position: relative; padding-left: 28px; font-size: 15px; line-height: 1.5; }
.nkw-vs li::before { position: absolute; left: 0; top: -1px; width: 20px; height: 20px; border-radius: 50%; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nkw-vs .is-yes::before { content: "\2713"; background: #2f9e5f; color: #fff; }
.nkw-vs .is-no { color: #8b7b83; }
.nkw-vs .is-no::before { content: "\2715"; background: #ece0e4; color: #a8949c; }
.nkw-points { display: flex; flex-direction: column; gap: 20px; }
.nkw-point h3 { font-size: 17.5px; font-weight: 800; margin: 0 0 6px; color: #a8536b; }
.nkw-point p { font-size: 15.5px; color: #56494f; line-height: 1.6; margin: 0; }
.nkw-facts { display: grid; grid-template-columns: 1fr 1fr; gap: 22px 26px; margin-top: 6px; }
.nkw-facts h3 { font-size: 16px; font-weight: 800; margin: 0 0 6px; color: #241c22; }
.nkw-facts p { font-size: 14.5px; color: #6b5f66; line-height: 1.6; margin: 0; }
.nkw-note { font-size: 13.5px; color: #8b7b83; font-style: italic; margin: 20px 0 0; }
.nkw-note--left { text-align: left; }
.nkw-cta { display: inline-block; background: #241c22; color: #fff !important; font-size: 15px; font-weight: 700; padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.nkw-cta:hover { background: #a8536b; color: #fff !important; }

/* ── recenzije: bordo pas + vodoravni klizac (kot na originalu) ────── */
.nkw-rev { background: #5c2331; padding: 62px 0 54px; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; }
.nkw-rev * { box-sizing: border-box; }
.nkw-rev__head { max-width: 1240px; margin: 0 auto 30px; padding: 0 24px; text-align: center; }
.nkw-rev__badge { display: inline-block; border: 1px solid rgba(255,255,255,.45); border-radius: 100px; padding: 8px 18px; font-size: 12.5px; font-weight: 700; letter-spacing: .04em; color: #fff; }
.nkw-rev__title { font-family: Georgia, 'Times New Roman', serif; font-size: clamp(27px, 3.4vw, 40px); font-weight: 400; color: #fff; margin: 16px 0 0; line-height: 1.2; }
.nkw-rev__track { display: flex; gap: 20px; overflow-x: auto; scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch;
  padding: 4px 24px 18px; margin: 0 auto; max-width: 1240px; scrollbar-width: thin; scrollbar-color: rgba(255,255,255,.4) transparent; }
.nkw-rev__track::-webkit-scrollbar { height: 6px; }
.nkw-rev__track::-webkit-scrollbar-track { background: rgba(255,255,255,.12); border-radius: 100px; }
.nkw-rev__track::-webkit-scrollbar-thumb { background: rgba(255,255,255,.45); border-radius: 100px; }
.nkw-rev__card { flex: 0 0 310px; width: 310px; scroll-snap-align: start; background: #fff; border-radius: 12px; overflow: hidden; display: flex; flex-direction: column; }
.nkw-rev__img img { width: 100%; aspect-ratio: 1/1; object-fit: cover; display: block; }
.nkw-rev__body { padding: 16px 18px 20px; }
.nkw-rev__top { display: flex; align-items: flex-start; justify-content: space-between; gap: 10px; }
.nkw-rev__name { display: flex; align-items: center; gap: 6px; font-size: 15px; font-weight: 800; color: #241c22; margin: 0; }
.nkw-rev__name svg { flex: 0 0 15px; }
.nkw-rev__meta { font-size: 12.5px; color: #7b6d73; margin: 3px 0 0; }
.nkw-rev__worn { flex: 0 0 auto; background: #f3eaed; color: #5c2331; font-size: 10.5px; font-weight: 800; letter-spacing: .04em; text-transform: uppercase; padding: 5px 9px; border-radius: 100px; white-space: nowrap; }
.nkw-rev__text { font-size: 14.5px; line-height: 1.6; color: #46393f; margin: 13px 0 0; }
.nkw-rev__hint { text-align: center; font-size: 12.5px; color: rgba(255,255,255,.6); margin: 8px 0 0; }

@media (max-width: 980px) {
  .nkw-row2 { grid-template-columns: 1fr; gap: 30px; }
  .nkw-row2--rev .nkw-media { order: -1; }
  .nkw-facts { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 560px) {
  .nkw-sec { padding: 44px 0; }
  .nkw-wrap { padding: 0 16px; }
  .nkw-facts { grid-template-columns: 1fr; gap: 16px; }
  .nkw-cta { width: 100%; text-align: center; }
  .nkw-rev { padding: 46px 0 40px; }
  .nkw-rev__head { padding: 0 16px; }
  .nkw-rev__track { padding: 4px 16px 16px; gap: 14px; }
  .nkw-rev__card { flex: 0 0 300px; width: 300px; }
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
