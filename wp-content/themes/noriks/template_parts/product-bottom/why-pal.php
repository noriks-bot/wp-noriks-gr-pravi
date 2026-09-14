<?php
/**
 * product-bottom: NORIKS Pal — stap s dvije rucke, svjetiljkom i alarmom (orto-pal).
 * Pravilo: svaka sekcija ima TOCNO JEDNU sliku, naizmjenicno lijevo/desno,
 * pozadine se izmjenjuju (prva tonirana). Iznimka je galerija kupaca (12).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$pl      = get_template_directory_uri() . '/img/pal/';
$pl_path = get_template_directory() . '/img/pal/';
$pl_vid  = function( $file, $poster, $alt ) use ( $pl, $pl_path ) {
  if ( ! file_exists( $pl_path . $file ) ) { return ''; }
  return '<video class="npl-video" autoplay muted loop playsinline preload="metadata" poster="'
       . esc_url( $pl . $poster ) . '" aria-label="' . esc_attr( $alt ) . '">'
       . '<source src="' . esc_url( $pl . $file ) . '" type="video/mp4"></video>';
};
$pl_img  = function( $file, $alt, $cls = '' ) use ( $pl, $pl_path ) {
  if ( ! file_exists( $pl_path . $file ) ) { return ''; }
  return '<img class="' . esc_attr( $cls ) . '" src="' . esc_url( $pl . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) USTAJANJE -->
<!-- 1) PROBLEM — slika lijevo -->
<section class="npl-sec npl-tint">
  <div class="npl-wrap npl-row2">
    <div class="npl-media"><?php echo $pl_img( 'pal-rucke.jpg', 'Ορθοπεδικές λαβές για στήριξη' ); ?></div>
    <div class="npl-copy">
      <p class="npl-kicker">Η δεύτερη λαβή</p>
      <h2 class="npl-h2">Στήριξη ακριβώς εκεί που τη χρειάζεστε</h2>
      <p>Εκτός από την πάνω λαβή, το μπαστούνι έχει και <strong>δεύτερη λαβή πιο χαμηλά</strong>. Από αυτήν πιάνεστε όταν σηκώνεστε από την πολυθρόνα, από το κρεβάτι ή από μια χαμηλή καρέκλα.</p>
      <p>Η πίεση πάει κατακόρυφα προς τα κάτω, στη σταθερή βάση — όχι μπροστά, που θα σας έβγαζε από την ισορροπία. Γι' αυτό σηκώνεστε με μία κίνηση, χωρίς να σκύβετε και χωρίς ξένη βοήθεια.</p>
      <ul class="npl-check">
        <li>Σήκωμα από πολυθρόνα, κρεβάτι ή παγκάκι</li>
        <li>Οι λαβές δεν ερεθίζουν την παλάμη ούτε μετά από μεγάλο περπάτημα</li>
        <li>Χωρίς να περιμένετε να σας βοηθήσει κάποιος</li>
      </ul>
      <a class="npl-cta" href="#bundle-selector">Δείτε την προσφορά</a>
    </div>
  </div>
</section>

<!-- 3) PREGLED ŠTAPA — slika lijevo -->
<section class="npl-sec">
  <div class="npl-wrap npl-row2 npl-row2--rev">
    <div class="npl-copy">
      <p class="npl-kicker">Σταθερότητα</p>
      <h2 class="npl-h2">Στέκεται μόνο του — δεν σκύβετε για το μπαστούνι</h2>
      <p>Τέσσερα λαστιχένια πόδια κρατούν το μπαστούνι όρθιο όταν το αφήνετε. Δεν πέφτει στο πάτωμα δίπλα στον καναπέ, στο τραπέζι ή στην αίθουσα αναμονής, οπότε δεν χρειάζεται να σκύψετε για να το σηκώσετε.</p>
      <p>Είναι η λεπτομέρεια που προσέχετε από την πρώτη κιόλας μέρα: το μπαστούνι σας περιμένει εκεί που το αφήσατε.</p>
    </div>
    <div class="npl-media"><?php echo $pl_vid( 'pal-video.mp4', 'pal-video.jpg', 'Το μπαστούνι στέκεται μόνο του στα τέσσερα πόδια' ); ?></div>
  </div>
</section>

<!-- 5) PROTUKLIZNA BAZA — slika lijevo -->
<section class="npl-sec npl-tint">
  <div class="npl-wrap npl-row2">
    <div class="npl-media"><?php echo $pl_img( 'pal-pregled.jpg', 'Επισκόπηση: δύο λαβές, φακός, συναγερμός, τέσσερα πόδια' ); ?></div>
    <div class="npl-copy">
      <p class="npl-kicker">Τι παίρνετε</p>
      <h2 class="npl-h2">Πέντε πράγματα σε ένα μπαστούνι</h2>
      <div class="npl-points">
        <div class="npl-point"><h3>Δύο λαβές</h3><p>Η πάνω για το περπάτημα, η κάτω για το σήκωμα.</p></div>
        <div class="npl-point"><h3>Τέσσερα πόδια</h3><p>Το μπαστούνι στέκεται μόνο του και δεν πέφτει.</p></div>
        <div class="npl-point"><h3>Φακός</h3><p>Φωτίζει τον δρόμο μπροστά σας στο σκοτάδι.</p></div>
        <div class="npl-point"><h3>Συναγερμός</h3><p>Δυνατό σήμα που ακούν οι δικοί σας.</p></div>
        <div class="npl-point"><h3>Πτυσσόμενη έκδοση</h3><p>Χωράει στην τσάντα και στο ντουλαπάκι του αυτοκινήτου.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- 4) STOJI SAM (video) — video desno -->
<section class="npl-sec">
  <div class="npl-wrap npl-row2 npl-row2--rev">
    <div class="npl-copy">
      <p class="npl-kicker">Η βάση</p>
      <h2 class="npl-h2">Κρατά σε πλακάκι, παρκέ και έξω</h2>
      <p>Τα λαστιχένια πόδια είναι <strong>αντιολισθητικά</strong> και δεν γλιστρούν σε λεία δάπεδα. Έξω η βάση προσαρμόζεται στο ανώμαλο έδαφος και μένει σταθερή.</p>
      <ul class="npl-check">
        <li>Δεν γλιστρά σε πλακάκι, παρκέ ή laminate</li>
        <li>Προσαρμόζεται στο ανώμαλο έδαφος</li>
        <li>Τα πόδια αντικαθίστανται όταν φθαρούν</li>
      </ul>
    </div>
    <div class="npl-media"><?php echo $pl_img( 'pal-nozice.jpg', 'Τέσσερα αντιολισθητικά λαστιχένια πόδια' ); ?></div>
  </div>
</section>

<!-- 6) SVJETILJKA — slika desno -->
<section class="npl-sec npl-tint">
  <div class="npl-wrap npl-row2">
    <div class="npl-media"><?php echo $pl_img( 'pal-sklopivo.jpg', 'Πτυσσόμενο και ρυθμιζόμενο μπαστούνι' ); ?></div>
    <div class="npl-copy">
      <p class="npl-kicker">Φορητότητα</p>
      <h2 class="npl-h2">Διπλώνει σε ένα δευτερόλεπτο και χωράει στην τσάντα</h2>
      <p>Τα μέρη συνδέονται με εσωτερικό λάστιχο, οπότε το μπαστούνι λύνεται και συναρμολογείται <strong>με μία κίνηση</strong>, χωρίς εργαλεία και χωρίς ξένη βοήθεια. Διπλωμένο χωράει στην τσάντα ή στο ντουλαπάκι του αυτοκινήτου.</p>
      <p>Το ύψος το ρυθμίζετε σε λίγα δευτερόλεπτα, οπότε το ίδιο μπαστούνι ταιριάζει και σε άτομο 155 cm και σε άτομο 190 cm.</p>
      <ul class="npl-check">
        <li>Λύσιμο και συναρμολόγηση χωρίς εργαλεία</li>
        <li>Ρυθμιζόμενο μήκος για όλα τα ύψη</li>
        <li>Τα μέρη μένουν συνδεδεμένα — τίποτα δεν χάνεται</li>
      </ul>
    </div>
  </div>
</section>

<section class="npl-sec npl-rev">
  <div class="npl-wrap">
    <p class="npl-kicker npl-center">Στους πελάτες μας</p>
    <h2 class="npl-h2 npl-center">Το μπαστούνι σε αληθινά σπίτια</h2>
    <p class="npl-sub">Φωτογραφίες και σχόλια πελατών — δίπλα στην πολυθρόνα, στον διάδρομο, στο σκοτάδι και διπλωμένο για ταξίδι.</p>
    <div class="npl-rev__grid">
      <?php
      $pl_reviews = array(
        array( 'img' => 'pal-ugc-1.jpg',    'name' => 'Μαρία Κ.',  'meta' => 'Αθήνα · αγορά πριν από 2 μήνες',
               'text' => '«Το έχω δίπλα στην πολυθρόνα. Παλιά σηκωνόμουν με τρεις προσπάθειες, τώρα πιάνομαι από την κάτω λαβή και σηκώνομαι με την πρώτη.»' ),
        array( 'img' => 'pal-ugc-3.jpg',    'name' => 'Ζήσης Π.', 'meta' => 'Θεσσαλονίκη · αγορά πριν από 3 μήνες',
               'text' => '«Στέκεται μόνο του δίπλα στο τραπέζι και δεν πέφτει. Για μένα αυτό είναι το σημαντικότερο — δεν σκύβω για το μπαστούνι κάθε πέντε λεπτά.»' ),
        array( 'img' => 'pal-noc.jpg',      'name' => 'Άννα Μ.',  'meta' => 'Πάτρα · αγορά πριν από έναν μήνα',
               'text' => '«Τον φακό τον ανάβω όταν πηγαίνω νύχτα στο μπάνιο. Δεν ξυπνάω τον άντρα μου με το μεγάλο φως και βλέπω το πάτωμα μπροστά μου.»' ),
        array( 'img' => 'pal-ugc-baza.jpg', 'name' => 'Ιωάννης Σ.',    'meta' => 'Ηράκλειο · αγορά πριν από 6 εβδομάδες',
               'text' => '«Η βάση είναι φαρδιά και δεν γλιστρά. Το δοκίμασα στα πλακάκια του μπάνιου και στη βρεγμένη βεράντα — κρατά.»' ),
        array( 'img' => 'pal-ugc-6.jpg',    'name' => 'Νάντια Β.',    'meta' => 'Λάρισα · αγορά πριν από 2 μήνες',
               'text' => '«Το αγόρασα στη μητέρα μου για τα 78α γενέθλιά της. Ρυθμίζει μόνη της το ύψος και το διπλώνει μόνη, χωρίς βοήθεια.»' ),
        array( 'img' => 'pal-ugc-5.jpg',    'name' => 'Στέφανος Λ.', 'meta' => 'Βόλος · αγορά πριν από 4 μήνες',
               'text' => '«Το έχω στο αυτοκίνητο όταν πηγαίνω στον γιατρό. Διπλώνει σε ένα δευτερόλεπτο και χωράει στην τσάντα, στην αναμονή δεν ενοχλεί.»' ),
      );
      foreach ( $pl_reviews as $r ) : ?>
      <article class="npl-rev__card">
        <div class="npl-rev__img"><?php echo $pl_img( $r['img'], 'Fotografija kupca — NORIKS Pal' ); ?></div>
        <div class="npl-rev__body">
          <div class="npl-rev__stars" aria-label="Ocjena 5 od 5">★★★★★</div>
          <p class="npl-rev__text"><?php echo esc_html( $r['text'] ); ?></p>
          <p class="npl-rev__name"><?php echo esc_html( $r['name'] ); ?>
            <svg width="15" height="15" viewBox="0 0 16 16" aria-hidden="true"><circle cx="8" cy="8" r="8" fill="#2f9e5f"/><path d="M5 8l2 2 4-4" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </p>
          <p class="npl-rev__meta"><?php echo esc_html( $r['meta'] ); ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="npl-sec npl-tint">
  <div class="npl-wrap npl-row2 npl-row2--rev">
    <div class="npl-copy">
      <p class="npl-kicker">Η διαφορά</p>
      <h2 class="npl-h2">Από το «χρειάζομαι βοήθεια» στο «πάω μόνος»</h2>
      <p>Η διαφορά δεν είναι στη δύναμη των ποδιών, αλλά στο ότι έχετε από πού να πιαστείτε. Η δεύτερη λαβή σηκώνει το βάρος αντί για τους ώμους και τους καρπούς σας.</p>
      <p class="npl-strong">Αυτόνομο σήκωμα, ακόμη και βόλτα στο πάρκο.</p>
      <a class="npl-cta" href="#bundle-selector">Παραγγείλτε χωρίς ρίσκο — 30 ημέρες</a>
    </div>
    <div class="npl-media"><?php echo $pl_img( 'pal-prije-poslije.jpg', 'Πριν και μετά — αυτόνομη κίνηση' ); ?></div>
  </div>
</section>

<!-- 14) ŠEST RAZLOGA — slika desno -->
<style>
.npl-sec { padding: 62px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #12212b; }
.npl-sec * { box-sizing: border-box; }
.npl-tint { background: #eef6f8; }
.npl-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.npl-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #2b8fa6; margin: 0 0 10px; }
.npl-h2 { font-size: clamp(25px, 3.2vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; }
.npl-center { text-align: center; }
.npl-copy p { font-size: 16px; line-height: 1.7; color: #465863; margin: 0 0 14px; }
.npl-strong { font-weight: 800; color: #12212b !important; font-size: 17px !important; }
.npl-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 52px; align-items: center; }
.npl-media img { width: 100%; display: block; border-radius: 14px; box-shadow: 0 2px 4px rgba(18,33,43,.05), 0 14px 40px rgba(18,33,43,.10); }
.npl-check { list-style: none; padding: 0; margin: 4px 0 0; display: flex; flex-direction: column; gap: 11px; }
.npl-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; }
.npl-check li::before { content: "✓"; position: absolute; left: 0; top: -1px; width: 20px; height: 20px; border-radius: 50%; background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.npl-points { display: flex; flex-direction: column; gap: 16px; margin-top: 4px; }
.npl-point h3 { font-size: 16.5px; font-weight: 800; margin: 0 0 4px; color: #2b8fa6; }
.npl-point p { font-size: 15px; color: #465863; line-height: 1.6; margin: 0; }
.npl-six { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 4px; }
.npl-reason { background: #fff; border: 1px solid #d9e8ec; border-radius: 12px; padding: 18px 16px; }
.npl-reason span { display: inline-flex; align-items: center; justify-content: center; width: 26px; height: 26px; border-radius: 50%; background: #2b8fa6; color: #fff; font-weight: 800; font-size: 13px; margin-bottom: 9px; }
.npl-reason h3 { font-size: 15.5px; font-weight: 800; margin: 0 0 5px; line-height: 1.3; }
.npl-reason p { font-size: 14px; color: #465863; line-height: 1.55; margin: 0; }
.npl-cta { display: inline-block; background: #12212b; color: #fff !important; font-size: 15px; font-weight: 700; padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.npl-cta:hover { background: #2b8fa6; color: #fff !important; }
.npl-rev__grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
.npl-rev__card { background: #fff; border: 1px solid #d9e8ec; border-radius: 14px; overflow: hidden;
  display: flex; flex-direction: column; box-shadow: 0 1px 2px rgba(18,33,43,.04), 0 8px 24px rgba(18,33,43,.06); }
.npl-rev__img img { width: 100%; aspect-ratio: 1/1; object-fit: cover; display: block; border-radius: 0; box-shadow: none; }
.npl-rev__body { padding: 16px 18px 18px; }
.npl-rev__stars { color: #f0a020; font-size: 14px; letter-spacing: 1px; margin: 0 0 8px; }
.npl-rev__text { font-size: 14.5px; line-height: 1.6; color: #46545e; margin: 0 0 12px; }
.npl-rev__name { display: flex; align-items: center; gap: 6px; font-size: 14.5px; font-weight: 800; color: #12212b; margin: 0; }
.npl-rev__name svg { flex: 0 0 15px; }
.npl-rev__meta { font-size: 12.5px; color: #7b8b94; margin: 3px 0 0; }
.npl-sub { text-align: center; font-size: 16px; color: #5b6d78; max-width: 60ch; margin: 0 auto 34px; line-height: 1.6; }
.npl-video { width: 100%; display: block; border-radius: 14px; }
@media (max-width: 980px) {
  .npl-rev__grid { grid-template-columns: 1fr 1fr; }
    .npl-row2 { grid-template-columns: 1fr; gap: 30px; }
  .npl-row2--rev .npl-media { order: -1; }
  .npl-six { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 560px) {
  .npl-rev__grid { grid-template-columns: 1fr; gap: 16px; }
  .npl-sec { padding: 44px 0; }
  .npl-wrap { padding: 0 16px; }
  .npl-six { grid-template-columns: 1fr; gap: 14px; }
  .npl-cta { width: 100%; text-align: center; }
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
