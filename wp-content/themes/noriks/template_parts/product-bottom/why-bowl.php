<?php
/**
 * product-bottom: NORIKS Bowl — povisena zdjelica za pse s nagibom 15° (orto-bowl).
 * Prevod s HR (GR). Slike: img/bowl/ — lokalizirane.
 * Pravilo: svaka sekcija ima TOCNO JEDNU sliku, naizmjenicno lijevo/desno, nikoli na sredini;
 * slike su omejene na max-height 430px.
 *   1) Για πιο χαρούμενο και πιο υγιή σκύλο (lijevo)   4) Za male pasmine (desno)
 *   2) Specifikacije (desno)                     5) Nehrdajuci celik (lijevo)
 *   3) Tri prednosti (lijevo)                    6) Izjava + jamstvo (desno)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$bw      = get_template_directory_uri() . '/img/bowl/';
$bw_path = get_template_directory() . '/img/bowl/';
$bw_img  = function( $file, $alt ) use ( $bw, $bw_path ) {
  if ( ! file_exists( $bw_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $bw . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) ZA SRETNIJEG I ZDRAVIJEG PSA — slika lijevo -->
<section class="nbw-sec nbw-tint">
  <div class="nbw-wrap nbw-row2">
    <div class="nbw-media"><?php echo $bw_img( 'bwl-05-naslov-kuhinja.jpg', 'Γαλλικό μπουλντόγκ δίπλα στο μπολ NORIKS Bowl' ); ?></div>
    <div class="nbw-copy">
      <p class="nbw-kicker">Γεύμα χωρίς λύγισμα του αυχένα</p>
      <h2 class="nbw-h2">Για πιο χαρούμενο <em>και πιο υγιή σκύλο</em></h2>
      <p>Από ένα συνηθισμένο μπολ στο πάτωμα ο σκύλος τρώει σκυφτός, με τον αυχένα λυγισμένο προς τα κάτω. Η τροφή σπρώχνεται προς την άκρη και οι μικρόσωμοι σκύλοι ψαρεύουν με τη μύτη τις τελευταίες κροκέτες στις γωνίες.</p>
      <p>Το NORIKS Bowl ανυψώνει το μπολ στα 11 εκ. και το γέρνει κατά 15° προς τον σκύλο — η τροφή γλιστράει προς το μέρος του και το κεφάλι μένει σε πιο φυσική θέση.</p>
      <ul class="nbw-check">
        <li><strong>Λιγότερο λύγισμα του αυχένα</strong> την ώρα του φαγητού</li>
        <li><strong>Πιο ήρεμο γεύμα</strong> — η τροφή δεν σκορπίζεται στο πάτωμα</li>
        <li><strong>Πιο άνετο για ηλικιωμένους σκύλους</strong>, που δυσκολεύονται να σκύψουν</li>
      </ul>
      <a class="nbw-cta" href="#bundle-selector">Παράγγειλε το NORIKS Bowl</a>
    </div>
  </div>
</section>

<!-- 2) SPECIFIKACIJE — slika desno -->
<section class="nbw-sec">
  <div class="nbw-wrap nbw-row2 nbw-row2--rev">
    <div class="nbw-copy">
      <p class="nbw-kicker">Κάθε λεπτομέρεια έχει σκοπό</p>
      <h2 class="nbw-h2">Σχεδιασμένο <em>γύρω από τον τρόπο που τρώει ο σκύλος</em></h2>
      <div class="nbw-facts">
        <div><span class="nbw-num">15°</span><h3>Κλίση μπολ</h3><p>Για καλύτερη στάση κεφαλιού και αυχένα στο φαγητό.</p></div>
        <div><span class="nbw-num">11 cm</span><h3>Ύψος βάσης</h3><p>Λιγότερη ένταση στον αυχένα απ’ ό,τι με μπολ στο πάτωμα.</p></div>
        <div><span class="nbw-num">5 cm</span><h3>Ρηχό μπολ</h3><p>Τα μουστάκια δεν χτυπούν στο χείλος και η τροφή είναι εύκολα προσβάσιμη.</p></div>
        <div><span class="nbw-num">430 ml</span><h3>Χωρητικότητα</h3><p>Διάμετρος 15 εκ. — αρκεί για ένα γεύμα ή νερό μικρού σκύλου.</p></div>
      </div>
    </div>
    <div class="nbw-media"><?php echo $bw_img( 'bwl-10-specifikacije.jpg', 'Προδιαγραφές NORIKS Bowl: κλίση 15°, ύψος 11 εκ., βάθος 5 εκ.' ); ?></div>
  </div>
</section>

<!-- 3) TRI PREDNOSTI — slika lijevo -->
<section class="nbw-sec nbw-tint">
  <div class="nbw-wrap nbw-row2">
    <div class="nbw-media"><?php echo $bw_img( 'bwl-09-prednosti.jpg', 'Σναούτσερ τρώει από το μπολ NORIKS Bowl' ); ?></div>
    <div class="nbw-copy">
      <p class="nbw-kicker">Τρεις λόγοι</p>
      <h2 class="nbw-h2">Γιατί οι σκύλοι τρώνε <em>πιο άνετα</em></h2>
      <div class="nbw-points">
        <div class="nbw-point"><h3>Πιο φυσική στάση</h3><p>Η κλίση 15° ευνοεί πιο φυσική και άνετη στάση στο φαγητό — ο σκύλος δεν χρειάζεται να χώνει τη μύτη στον πάτο του μπολ.</p></div>
        <div class="nbw-point"><h3>Υγιεινό ατσάλι</h3><p>Το ανοξείδωτο ατσάλι κορυφαίας ποιότητας παραμένει υγιεινό και φρέσκο και καθαρίζεται εύκολα.</p></div>
        <div class="nbw-point"><h3>Λεία επιφάνεια</h3><p>Τα υπολείμματα τροφής δεν κολλούν, οπότε το πλύσιμο είναι πιο γρήγορο απ’ ό,τι σε πλαστικό μπολ.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- 4) ZA MALE PASMINE — slika desno -->
<section class="nbw-sec">
  <div class="nbw-wrap nbw-row2 nbw-row2--rev">
    <div class="nbw-copy">
      <p class="nbw-kicker">Μέγεθος</p>
      <h2 class="nbw-h2">Φτιαγμένο <em>για μικρόσωμες ράτσες</em></h2>
      <p>Το ύψος της βάσης και το μέγεθος του μπολ είναι προσαρμοσμένα σε σκύλους χαμηλού αναστήματος, για τους οποίους το μπολ στο πάτωμα είναι πολύ μακριά και ένα συνηθισμένο υπερυψωμένο μπολ πολύ ψηλά.</p>
      <ul class="nbw-breeds">
        <li>Ντάτσχουντ</li>
        <li>Γαλλικό μπουλντόγκ</li>
        <li>Μινιατούρα σναούτσερ</li>
        <li>Παγκ</li>
        <li>Μαλτέζ</li>
        <li>Τζακ Ράσελ τεριέ</li>
      </ul>
      <p class="nbw-note">Διαστάσεις μπολ: διάμετρος 15 εκ., βάθος 5 εκ., χωρητικότητα περίπου 430 ml.</p>
    </div>
    <div class="nbw-media"><?php echo $bw_img( 'bwl-03-francuski-buldog.jpg', 'Γαλλικό μπουλντόγκ δίπλα στο μπολ NORIKS Bowl' ); ?></div>
  </div>
</section>

<!-- 5) NEHRĐAJUĆI ČELIK — slika lijevo -->
<section class="nbw-sec nbw-tint">
  <div class="nbw-wrap nbw-row2">
    <div class="nbw-media"><?php echo $bw_img( 'bwl-06-celik.jpg', 'NORIKS Bowl από ανοξείδωτο ατσάλι' ); ?></div>
    <div class="nbw-copy">
      <p class="nbw-kicker">Υλικό</p>
      <h2 class="nbw-h2">Ατσάλι αντί για <em>πλαστικό</em></h2>
      <p>Τα πλαστικά μπολ με τον καιρό αποκτούν μικρές γρατσουνιές όπου μένουν υπολείμματα τροφής και μυρωδιά. Το ατσάλι μένει λείο για χρόνια.</p>
      <ul class="nbw-vs">
        <li class="is-yes">Ανοξείδωτο ατσάλι — μπολ και βάση</li>
        <li class="is-yes">Δεν απορροφά οσμές και δεν αλλάζει χρώμα</li>
        <li class="is-yes">Ξεπλένεται με ζεστό νερό σε λίγα δευτερόλεπτα</li>
        <li class="is-no">Πλαστικό που γρατσουνίζεται και κρατά υπολείμματα</li>
        <li class="is-no">Κεραμικό που σπάει αν πέσει</li>
      </ul>
    </div>
  </div>
</section>

<!-- 6) VOLE JE VLASNICI PASA — fotografije kupaca -->
<section class="nbw-sec nbw-rev">
  <div class="nbw-wrap">
    <h2 class="nbw-h2" style="text-align:center">Το λατρεύουν <em>οι ιδιοκτήτες σκύλων</em></h2>
    <p class="nbw-rev__lead">Καλύτερη στάση. Πιο ήρεμα γεύματα.</p>
    <p class="nbw-rev__rate"><span class="nbw-rev__stars">★★★★★</span> Βαθμολογία <strong>4,8/5</strong> με βάση <strong>1.081 κριτικές</strong></p>
    <div class="nbw-rev__strip">
        <figure class="nbw-rev__card">
          <?php echo $bw_img( 'bwl-02-jazavcar.jpg', 'Ντάτσχουντ, 6 ετών δίπλα στο μπολ NORIKS Bowl' ); ?>
          <figcaption><span class="nbw-rev__stars">★★★★★</span><strong>Ντάτσχουντ, 6 ετών</strong><span>«Δεν τρώει πια σκυφτός. Το μπολ είναι ακριβώς τόσο ψηλό ώστε το κεφάλι να μένει ίσιο.»</span></figcaption>
        </figure>
        <figure class="nbw-rev__card">
          <?php echo $bw_img( 'bwl-03-francuski-buldog.jpg', 'Γαλλικό μπουλντόγκ, 3 ετών δίπλα στο μπολ NORIKS Bowl' ); ?>
          <figcaption><span class="nbw-rev__stars">★★★★★</span><strong>Γαλλικό μπουλντόγκ, 3 ετών</strong><span>«Για σκύλο με κοντή μύτη αυτή είναι η μεγαλύτερη διαφορά — τρώει πιο ήρεμα και χωρίς να πνίγεται.»</span></figcaption>
        </figure>
        <figure class="nbw-rev__card">
          <?php echo $bw_img( 'bwl-04-snaucer.jpg', 'Σναούτσερ, 8 ετών δίπλα στο μπολ NORIKS Bowl' ); ?>
          <figcaption><span class="nbw-rev__stars">★★★★★</span><strong>Σναούτσερ, 8 ετών</strong><span>«Ηλικιωμένος σκύλος με πιασμένο αυχένα. Η κλίση 15° του διευκόλυνε εμφανώς το γεύμα.»</span></figcaption>
        </figure>
    </div>
  </div>
</section>

<!-- 7) IZJAVA + JAMSTVO — slika desno -->
<section class="nbw-sec nbw-tint">
  <div class="nbw-wrap nbw-row2 nbw-row2--rev">
    <div class="nbw-copy">
      <p class="nbw-kicker">NORIKS Bowl</p>
      <h2 class="nbw-h2">Σταθερό, κομψό <em>και πραγματικά άνετο</em></h2>
      <p>Η βάση στέκεται σταθερά ακόμη κι όταν ο σκύλος είναι αδέξιος, το ατσάλι πλένεται σε λίγα δευτερόλεπτα και στην κουζίνα μοιάζει με κομμάτι επίπλου, όχι με πλαστικό σκεύος στο πάτωμα.</p>
      <ul class="nbw-check">
        <li>Για τροφή και για νερό — πολλοί παίρνουν δύο</li>
        <li>Γρήγορη παράδοση στο σπίτι</li>
        <li><strong>30 ημέρες</strong> για επιστροφή χρημάτων</li>
      </ul>
      <a class="nbw-cta" href="#bundle-selector">Παράγγειλε το NORIKS Bowl</a>
    </div>
    <div class="nbw-media"><?php echo $bw_img( 'bwl-08-izjava.jpg', 'Ντάτσχουντ δίπλα στο μπολ NORIKS Bowl' ); ?></div>
  </div>
</section>

<style>
.nbw-sec { padding: 60px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #1c2b44; }
.nbw-sec * { box-sizing: border-box; }
.nbw-tint { background: #eef3fa; }
.nbw-wrap { width: 100%; max-width: 1440px; margin: 0 auto; padding: 0 24px; }
.nbw-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #2f5b9a; margin: 0 0 10px; }
.nbw-h2 { font-size: clamp(25px, 3.1vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #1c2b44; }
.nbw-h2 em { font-style: italic; font-weight: 800; color: #2f5b9a; }
.nbw-copy p { font-size: 16px; line-height: 1.7; color: #4b5a70; margin: 0 0 14px; }
.nbw-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nbw-media { text-align: left; }
.nbw-media img { display: block; width: 100%; max-width: 100%; max-height: none; height: auto; object-fit: cover;
  border-radius: 14px; box-shadow: 0 2px 4px rgba(20,25,40,.05), 0 14px 40px rgba(20,25,40,.10); }
.nbw-check { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 11px; }
.nbw-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; color: #2c3b52; }
.nbw-check li::before { content: "\2713"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%; background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nbw-vs { list-style: none; padding: 0; margin: 4px 0 0; display: flex; flex-direction: column; gap: 10px; }
.nbw-vs li { position: relative; padding-left: 28px; font-size: 15px; line-height: 1.5; color: #2c3b52; }
.nbw-vs li::before { position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nbw-vs .is-yes::before { content: "\2713"; background: #2f9e5f; color: #fff; }
.nbw-vs .is-no { color: #7d8898; }
.nbw-vs .is-no::before { content: "\2715"; background: #dfe6f0; color: #8f9bab; }
.nbw-points { display: flex; flex-direction: column; gap: 20px; }
.nbw-point h3 { font-size: 17.5px; font-weight: 800; margin: 0 0 6px; color: #2f5b9a; }
.nbw-point p { font-size: 15.5px; color: #4b5a70; line-height: 1.6; margin: 0; }
.nbw-facts { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 6px; }
.nbw-facts > div { background: #eef3fa; border-radius: 12px; padding: 16px 18px; }
.nbw-num { display: block; font-size: 26px; font-weight: 800; color: #2f5b9a; line-height: 1.1; margin-bottom: 6px; }
.nbw-facts h3 { font-size: 15.5px; font-weight: 800; margin: 0 0 4px; color: #1c2b44; }
.nbw-facts p { font-size: 14px !important; color: #5c6a7e !important; line-height: 1.5 !important; margin: 0 !important; }
.nbw-breeds { list-style: none; padding: 0; margin: 6px 0 18px; display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 10px 16px; }
.nbw-breeds li { position: relative; padding-left: 24px; font-size: 15.5px; font-weight: 600; color: #2c3b52; }
.nbw-breeds li::before { content: ""; position: absolute; left: 0; top: 6px; width: 12px; height: 12px; border-radius: 50%; background: #2f5b9a; }
.nbw-note { font-size: 13.5px !important; color: #7d8898 !important; font-style: italic; margin: 6px 0 0 !important; }
.nbw-cta { display: inline-block; background: #2f5b9a; color: #fff !important; font-size: 15px; font-weight: 700; padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.nbw-cta:hover { background: #22477c; color: #fff !important; }

.nbw-rev__lead { text-align: center; font-size: 16px; color: #5a6b85; margin: 0 0 8px; }
.nbw-rev__rate { text-align: center; font-size: 15.5px; color: #1c2b44; margin: 0 0 22px; }
.nbw-rev__stars { color: #f5a623; letter-spacing: 2px; }
.nbw-rev__strip { display: grid; grid-template-columns: repeat(3, minmax(0,1fr)); gap: 20px; }
.nbw-rev__card { margin: 0; background: #fff; border-radius: 14px; overflow: hidden;
  box-shadow: 0 2px 4px rgba(20,25,40,.05), 0 12px 30px rgba(20,25,40,.10); }
.nbw-rev__card img { width: 100%; max-width: none; max-height: none; aspect-ratio: 3 / 4; object-fit: cover;
  border-radius: 0; box-shadow: none; display: block; }
.nbw-rev__card figcaption { padding: 14px 16px 18px; }
.nbw-rev__card figcaption strong { display: block; font-size: 15.5px; font-weight: 800; color: #1c2b44; margin: 6px 0 5px; }
.nbw-rev__card figcaption span:last-child { display: block; font-size: 14.5px; line-height: 1.6; color: #4c5a71; }

@media (max-width: 980px) {
  .nbw-rev__strip { grid-template-columns: 1fr 1fr; }
  .nbw-row2 { grid-template-columns: 1fr; gap: 28px; }
  .nbw-row2--rev .nbw-media { text-align: right; }
}
@media (max-width: 560px) {
  .nbw-rev__strip { grid-auto-flow: column; grid-template-columns: none; grid-auto-columns: 78%;
    overflow-x: auto; scroll-snap-type: x mandatory; padding-bottom: 6px; }
  .nbw-rev__card { scroll-snap-align: center; }
  .nbw-sec { padding: 42px 0; }
  .nbw-wrap { padding: 0 16px; }
  .nbw-cta { width: 100%; text-align: center; }
  .nbw-num { font-size: 23px; }
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
.woocommerce-product-details__short-description .nbw-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f5b9a !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
