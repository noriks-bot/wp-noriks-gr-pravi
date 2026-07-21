<?php
/**
 * product-bottom: KOREKTOR HALUKSA (bunion / halux valgus)
 *
 * Dedicated bottom-nicer for the NORIKS bunion corrector.
 * Shown via single-product-bottom-nicer.php when noriks_is_type('bunion').
 *
 * Mediji so v temi (git), relativno preko get_template_directory_uri():
 *   img/bunion-videos/section-1.mp4, funkcionira.mp4, step-1..3.mp4
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$bun_vid_dir = get_template_directory_uri() . '/img/bunion-videos/';
$bun_video_1 = $bun_vid_dir . 'section-1.mp4'; // 1) One foot away
$bun_video_2 = $bun_vid_dir . 'funkcionira.mp4'; // 2) Kako deluje

$bun_img_features = get_template_directory_uri() . '/img/bunion/why.png';

// Pravi rezultati — odstotki
$bun_results = array(
    array( 'pct' => 91, 'text' => 'των χρηστών ανέφεραν μείωση του πόνου από το κότσι ήδη από τη 2η συνεδρία' ),
    array( 'pct' => 90, 'text' => 'των χρηστών εξάλειψαν πλήρως τον πόνο από το κότσι μετά από 14 ημέρες συνεπούς χρήσης (30 λεπτά/ημέρα)' ),
    array( 'pct' => 88, 'text' => 'των χρηστών παρατήρησαν ορατή βελτίωση στην ευθυγράμμιση των δαχτύλων μετά από 30 ημέρες συνεπούς χρήσης (30 λεπτά/ημέρα)' ),
);

// Zakaj izbrati nas — primerjava (isti stil kot knc-table na nogavicah z zadrgo)
$bun_cmp = array(
    'Εγγύηση επιστροφής χρημάτων 90 ημερών',
    'Ανακουφίζει τη δυσφορία',
    'Αποτρέπει την ανάπτυξη του κότσι',
    'Βελτιώνει με τον καιρό την κατάσταση του κότσι',
    'Ευέλικτος σχεδιασμός — μπορείτε να περπατάτε με αυτό',
    'Ανθεκτικό και μακράς διαρκείας',
);

// Kako se uporablja — 3 koraki (video + opis)
$bun_steps = array(
    array( 'video' => $bun_vid_dir . 'step-1.mp4', 'caption' => 'Στερεώστε τον διορθωτή NORIKS στο μεγάλο δάχτυλο και το πέλμα' ),
    array( 'video' => $bun_vid_dir . 'step-2.mp4', 'caption' => 'Ρυθμίστε την ένταση της διάτασης όπως επιθυμείτε' ),
    array( 'video' => $bun_vid_dir . 'step-3.mp4', 'caption' => 'Χαλαρώστε και αφήστε τον διορθωτή NORIKS να κάνει τη δουλειά του' ),
);
?>

<!-- ============ 1) Le korak ste oddaljeni… ============ -->
<section class="bun-why bun-intro">
  <div class="bun-wrap bun-row">
    <div class="bun-col bun-media">
      <video src="<?php echo esc_url( $bun_video_1 ); ?>" muted autoplay loop playsinline preload="metadata"></video>
    </div>
    <div class="bun-col bun-copy">
      <h2 class="bun-title">Είστε μόνο ένα βήμα μακριά από το να απαλλαγείτε από <span class="bun-hl">τη δυσφορία του κότσι</span>, τα πρησμένα δάχτυλα και τους πόνους στα πόδια…</h2>
      <p>Αν το διαβάζετε αυτό, υπάρχει μεγάλη πιθανότητα να υποφέρετε από επίμονη <strong class="bun-red">δυσφορία λόγω κότσι</strong>.</p>
      <p>Το αποτέλεσμα; Ο πόνος και η δυσφορία επηρεάζουν τις καθημερινές σας δραστηριότητες.</p>
      <p>Αν δεν αντιμετωπιστεί, μπορεί να επιδεινωθεί. Τα δάχτυλα διασταυρώνονται, μπορεί να αναπτυχθούν σφυροδακτυλία και οστικές προεξοχές.</p>
      <p>Το κότσι είναι ένα <strong class="bun-red">προοδευτικό πρόβλημα</strong> και δεν θα εξαφανιστεί από μόνο του.</p>
      <p>Με τον καιρό μπορεί να οδηγήσει σε σοβαρότερα προβλήματα, όπως <u>επεμβατική εγχείρηση, προβλήματα στα ισχία, τα γόνατα και τη μέση, ακόμη και ακινησία</u>.</p>
      <p>Με τη βοήθεια κλινικά αποδεδειγμένης προηγμένης θεραπείας ευθυγράμμισης και πατενταρισμένου αρθρωτού μηχανισμού, ο <strong>διορθωτής κότσι NORIKS</strong> ανακουφίζει αποτελεσματικά τη δυσφορία στο πάσχον σημείο του πέλματος και αποκαθιστά την υγεία του ποδιού σας με μόλις 30 λεπτά καθημερινής χρήσης.</p>
      <p class="bun-stat"><span class="bun-check" aria-hidden="true">✔</span> <em>Το 91 % των χρηστών ανέφεραν <strong>μείωση του πόνου στα πόδια</strong> ήδη από την πρώτη εβδομάδα</em></p>
    </div>
  </div>
</section>

<!-- ============ 2) Kako deluje? ============ -->
<section class="bun-why">
  <div class="bun-wrap bun-row bun-reverse">
    <div class="bun-col bun-media">
      <video src="<?php echo esc_url( $bun_video_2 ); ?>" muted autoplay loop playsinline preload="metadata"></video>
    </div>
    <div class="bun-col bun-copy">
      <h2 class="bun-title">Πώς λειτουργεί;</h2>
      <p>Ο <strong>διορθωτής κότσι NORIKS</strong> χρησιμοποιεί προηγμένη θεραπεία ευθυγράμμισης. Είναι σχεδιασμένος ώστε να <strong class="bun-red">υποστηρίζει την επανευθυγράμμιση</strong> του μεγάλου δαχτύλου και να ανακουφίζει σταδιακά τη φλεγμονή μέσω ενός ισχυρού πατενταρισμένου αρθρωτού μηχανισμού.</p>
      <p>Βοηθά να απελευθερωθεί η μυϊκή ένταση επαναφέροντας απαλά το μεγάλο δάχτυλο στη φυσική του θέση, οδηγώντας με τον καιρό σε ανώδυνη φυσική ευθυγράμμιση της άρθρωσης του δαχτύλου.</p>
      <p>Έτσι απελευθερώνεται η ένταση χρόνων, η προεξοχή διορθώνεται και μειώνεται, ο πόνος ανακουφίζεται και αποτρέπεται η περαιτέρω ανάπτυξη — για να σταθείτε ξανά στα πόδια σας, ίσια και με αυτοπεποίθηση.</p>
      <p>Ορισμένοι χρήστες ίσως χρειαστούν μία ή δύο συνεδρίες για να προσαρμοστούν, καθώς η <strong class="bun-red">αίσθηση μπορεί να είναι πιο έντονη</strong> σε σύγκριση με άλλες μεθόδους.</p>
      <p>Είναι ένας φυσικός και μη επεμβατικός τρόπος για να επαναφέρετε τη φυσική θέση του δαχτύλου και του πέλματος και να διορθώσετε τη ζημιά που προκαλείται από ακατάλληλα υποδήματα ή γενετική.</p>
      <p>Είτε πρόκειται για μικρό παιδικό πέλμα είτε για μεγάλο πέλμα ενήλικα, ο <u>διορθωτής είναι φτιαγμένος ώστε να εφαρμόζει άνετα σε όλα τα μεγέθη ποδιών</u>.</p>
      <p class="bun-stat"><span class="bun-check" aria-hidden="true">✔</span> <em>Το 87 % των χρηστών ανέφεραν <strong>ορατές βελτιώσεις</strong> ήδη από τον πρώτο μήνα</em></p>
    </div>
  </div>
</section>

<!-- ============ 3) Kako se uporablja (sivo, 3 koraki) ============ -->
<section class="bun-why bun-howto">
  <div class="bun-wrap">
    <h2 class="bun-howto-title">Πώς χρησιμοποιείται</h2>
    <div class="bun-howto-intro">
      <p>Συνιστούμε να ξεκινήσετε με 30 λεπτά την ημέρα και να αυξάνετε σταδιακά έως και συνεδρία 1 έως 3 ωρών.</p>
      <p>Μόλις νιώσετε άνετα, μπορείτε να αρχίσετε να το φοράτε ακόμη και στον ύπνο, κάθε βράδυ.</p>
      <p>Είναι ιδανικό για ξεκούραση — όταν ξαπλώνετε στον καναπέ, βλέπετε τηλεόραση, διαβάζετε ή κοιμάστε.</p>
      <p>Όμως, σε αντίθεση με άλλα προϊόντα της αγοράς, μπορείτε και να κινείστε χωρίς ο διορθωτής NORIKS να σας περιορίζει, χάρη στον ευέλικτο σχεδιασμό του.</p>
    </div>
    <div class="bun-steps-grid">
      <?php $bun_n = 0; foreach ( $bun_steps as $bun_step ) : $bun_n++; ?>
        <div class="bun-step">
          <div class="bun-step-media">
            <video src="<?php echo esc_url( $bun_step['video'] ); ?>" muted autoplay loop playsinline preload="metadata"></video>
          </div>
          <div class="bun-step-num"><?php echo (int) $bun_n; ?></div>
          <p class="bun-step-caption"><?php echo esc_html( $bun_step['caption'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 4) 8 razlogov, zakaj ga boste vzljubili ============ -->
<section class="bun-why">
  <div class="bun-wrap bun-row">
    <div class="bun-col bun-copy">
      <h2 class="bun-title">8 λόγοι για να το αγαπήσετε</h2>
      <ul class="bun-reasons">
        <li><strong>Ανακούφιση της δυσφορίας</strong> στο περπάτημα, την άσκηση, το στάσιμο και τον ύπνο</li>
        <li><strong>Αποτρέπει</strong> την περαιτέρω ανάπτυξη του κότσι</li>
        <li><strong>Μη χειρουργική επιλογή</strong> για ανακούφιση</li>
        <li>Σταθερή ευθυγράμμιση της άρθρωσης που <strong>βελτιώνει πραγματικά την κατάστασή σας</strong></li>
        <li><strong>Ρυθμιζόμενη</strong> ένταση διάτασης</li>
        <li>Σχεδιασμένο και προτεινόμενο από <strong>ιατρικούς ειδικούς</strong></li>
        <li><strong>Εύκολο στη χρήση</strong> και φορητό</li>
        <li><strong>Εγγύηση επιστροφής χρημάτων 90 ημερών</strong> («αποτελέσματα ή πλήρης επιστροφή»), γιατί είμαστε τόσο σίγουροι για το προϊόν μας και ξέρουμε ότι θα σας βοηθήσει</li>
      </ul>
    </div>
    <div class="bun-col bun-media">
      <img loading="lazy" decoding="async" src="<?php echo esc_url( $bun_img_features ); ?>" alt="Γιατί ο διορθωτής κότσι NORIKS είναι διαφορετικός" />
    </div>
  </div>
</section>

<!-- ============ 5) Pravi rezultati, pravi ljudje ============ -->
<section class="bun-why bun-results-sec">
  <div class="bun-wrap bun-row">
    <div class="bun-col bun-copy">
      <h2 class="bun-title">Πραγματικά <span class="bun-hl">αποτελέσματα</span>, πραγματικοί άνθρωποι</h2>
      <p>Διεξαγάγαμε καταναλωτική δοκιμή, στην οποία στείλαμε τον διορθωτή κότσι NORIKS σε πάνω από <strong>37 ποδιατρικά ιατρεία</strong>. Συνολικά τον δοκίμασαν <strong>432 ασθενείς</strong> με κότσι. Ιδού τα αποτελέσματα.</p>
    </div>
    <div class="bun-col">
      <div class="bun-results">
        <?php foreach ( $bun_results as $bun_r ) : $bun_dash = round( $bun_r['pct'] * 1.6336, 1 ); ?>
          <div class="bun-result">
            <svg class="bun-ring" viewBox="0 0 60 60" aria-hidden="true">
              <circle cx="30" cy="30" r="26" fill="none" stroke="#dfe6ee" stroke-width="5"/>
              <circle cx="30" cy="30" r="26" fill="none" stroke="#1a86d0" stroke-width="5" stroke-linecap="round"
                      stroke-dasharray="<?php echo esc_attr( $bun_dash ); ?> 163.4" transform="rotate(-90 30 30)"/>
              <text x="30" y="34" text-anchor="middle" class="bun-ring-txt"><?php echo (int) $bun_r['pct']; ?>%</text>
            </svg>
            <p class="bun-result-text"><?php echo esc_html( $bun_r['text'] ); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ============ 6) Zakaj izbrati nas? (primerjalna tabela, knc stil) ============ -->
<section class="bun-cmp-section">
  <div class="bun-cmp-wrap">
    <h2 class="bun-cmp-title">Γιατί να επιλέξετε εμάς;</h2>
    <p class="bun-cmp-lead">Μην πέφτετε θύματα <span class="bun-hl">ΦΘΗΝΩΝ απομιμήσεων</span></p>
    <p class="bun-cmp-sub">Πώς συγκρίνεται ο <strong>διορθωτής κότσι NORIKS</strong> με τους υπόλοιπους:</p>
    <div class="bun-cmp-scroll">
      <table class="bun-cmp-table">
        <thead>
          <tr>
            <th></th>
            <th class="bun-us">NORIKS</th>
            <th class="bun-comp">Άλλοι διορθωτές</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ( $bun_cmp as $bun_row ) : ?>
            <tr>
              <td><?php echo esc_html( $bun_row ); ?></td>
              <td class="us ok">✓</td>
              <td class="no">✕</td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<style>
  /* Ni "Tabela velikosti" povezave na korektorju haluksa (ne plugin ne globalni). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis (short description): skrij standardne pike (•), ostane samo ✅;
     razmik nad "Prednosti:" in več prostora pod seznamom.
     (Ta predloga se naloži samo na orto-bunion straneh.) */
  .woocommerce-product-details__short-description ul {
      list-style: none;
      margin: 8px 0 26px;
      padding-left: 0;
  }
  .woocommerce-product-details__short-description ul li {
      list-style: none;
      padding-left: 0;
      margin-left: 0;
  }
  .woocommerce-product-details__short-description p:has(+ ul) {
      margin-top: 20px;
      margin-bottom: 4px;
  }

  .bun-why { padding: 44px 0; }
  .bun-why.bun-intro { background: #fbf9f4; }
  .bun-wrap { max-width: 1180px; margin: 0 auto; padding: 0 16px; }
  .bun-row { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .bun-media video { width: 100%; height: auto; border-radius: 12px; display: block; }
  .bun-title { font-size: clamp(24px,2.9vw,34px); font-weight: 800; color: #1c1c1c; line-height: 1.2; margin: 0 0 18px; }
  .bun-hl { color: #1a86d0; }
  .bun-red { color: #e0563f; }
  .bun-copy p { font-size: 16px; line-height: 1.7; color: #333; margin: 0 0 12px; }
  .bun-stat { display: flex; align-items: flex-start; gap: 8px; margin-top: 6px !important; }
  .bun-check { color: #1a86d0; font-weight: 800; }
  .bun-stat em { font-style: italic; color: #333; }

  /* section 2: media on the right */
  .bun-reverse .bun-media { order: 2; }
  .bun-reverse .bun-copy { order: 1; }

  /* 3) Kako se uporablja (sivo ozadje) */
  .bun-why.bun-howto { background: #f0f2f5; }
  .bun-howto-title { text-align: center; font-size: clamp(24px,2.9vw,34px); font-weight: 800; color: #1c1c1c; margin: 0 0 18px; }
  .bun-howto-intro { max-width: 820px; margin: 0 auto 34px; text-align: center; }
  .bun-howto-intro p { font-size: 16px; line-height: 1.6; color: #333; margin: 0 0 12px; }
  .bun-steps-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 26px; }
  .bun-step { text-align: center; }
  .bun-step-media { width: 100%; aspect-ratio: 1 / 1; border-radius: 14px; overflow: hidden; background: #e6e9ee; }
  .bun-step-media video { width: 100%; height: 100%; object-fit: cover; display: block; }
  .bun-step-num { font-size: 22px; font-weight: 800; color: #1c1c1c; margin: 14px 0 6px; }
  .bun-step-caption { font-size: 15px; line-height: 1.5; color: #333; margin: 0 8px; }

  /* 4) 8 razlogov */
  .bun-media img { width: 100%; height: auto; border-radius: 12px; display: block; }
  .bun-reasons { list-style: none; margin: 0; padding: 0; }
  .bun-reasons li { position: relative; padding: 0 0 16px 34px; font-size: 15.5px; line-height: 1.5; color: #333; }
  .bun-reasons li:before {
      content: ""; position: absolute; left: 0; top: 1px; width: 22px; height: 22px; border-radius: 50%;
      background: #1a86d0 url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M6 12.5l4 4 8-8' fill='none' stroke='white' stroke-width='2.6' stroke-linecap='round' stroke-linejoin='round'/></svg>") center/15px no-repeat;
  }

  /* 5) Pravi rezultati */
  .bun-results { display: flex; flex-direction: column; gap: 18px; }
  .bun-result { display: flex; align-items: center; gap: 16px; border-bottom: 1px solid #e6e6e6; padding-bottom: 16px; }
  .bun-result:last-child { border-bottom: 0; padding-bottom: 0; }
  .bun-ring { width: 70px; height: 70px; flex: 0 0 70px; }
  .bun-ring-txt { font-size: 16px; font-weight: 800; fill: #1a86d0; }
  .bun-result-text { font-size: 14.5px; line-height: 1.5; color: #333; margin: 0; }

  /* 6) Zakaj izbrati nas — primerjalna tabela (isti stil kot knc-table) */
  .bun-cmp-section { background:#fff; padding:44px 0; }
  .bun-cmp-wrap { max-width:940px; margin:0 auto; padding:0 16px; }
  .bun-cmp-title { text-align:center; font-size:clamp(24px,3vw,34px); font-weight:800; color:#111; margin:0 0 8px; }
  .bun-cmp-lead { text-align:center; font-size:18px; font-weight:800; color:#111; margin:0 0 6px; }
  .bun-cmp-sub { text-align:center; font-size:14px; color:#444; margin:0 0 24px; }
  .bun-cmp-scroll { border-radius:16px; overflow:hidden; box-shadow:0 12px 34px rgba(18,48,90,.12); border:1px solid #edf0f4; }
  .bun-cmp-table { width:100%; border-collapse:collapse; table-layout:fixed; margin:0 !important; }
  .bun-cmp-table th, .bun-cmp-table td { padding:15px 12px; text-align:center; font-size:15px; }
  .bun-cmp-table thead th { color:#fff; font-weight:700; vertical-align:middle; font-size:14px; }
  .bun-cmp-table thead th:first-child { width:52%; background:#fff; }
  .bun-cmp-table .bun-comp { background:#767676; }
  .bun-cmp-table .bun-us { background:#111; }
  .bun-cmp-table tbody td:first-child { text-align:left; font-weight:600; color:#111; font-size:14px; line-height:1.3; padding-left:18px; }
  .bun-cmp-table tbody tr { border-bottom:1px solid #eef0f4; }
  .bun-cmp-table tbody tr:nth-child(even) { background:#fafbfc; }
  .bun-cmp-table td.ok { color:#1a9e5f; font-size:19px; font-weight:700; }
  .bun-cmp-table td.no { color:#d64545; font-size:18px; font-weight:700; }
  .bun-cmp-table td.us { background:#f3f3f3 !important; }
  .bun-cmp-table td.us.ok { color:#1a9e5f; }
  @media (max-width:600px) {
    .bun-cmp-table th, .bun-cmp-table td { padding:12px 6px; font-size:13px; }
    .bun-cmp-table thead th { font-size:12px; }
    .bun-cmp-table tbody td:first-child { font-size:12px; padding-left:10px; }
  }

  @media (max-width: 820px) {
    .bun-row { grid-template-columns: 1fr; gap: 22px; }
    .bun-reverse .bun-media { order: 0; }
    .bun-reverse .bun-copy { order: 0; }
    .bun-steps-grid { grid-template-columns: 1fr; gap: 18px; }
  }
</style>
