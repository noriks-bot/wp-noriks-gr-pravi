<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     9.7.0
 */

use Automattic\WooCommerce\Enums\ProductType;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>

<style>

      .features2 {
    margin-top: 12px;
    margin-bottom: 12px;
      }

      .features__row {
        display: flex;
        justify-content: space-between;
        gap: 28px;
      }

      .feature {
        flex: 1 1 0;
        text-align: center;
      }

      .feature__icon {
 
        margin: 0 auto 0px;
        display: block;
        margin-bottom: 0 !important;
      }

      .feature__text {
        margin: 0;
        line-height: 1.1;
    font-size: 14px;
    margin: 0;
        font-family: 'Barlow', sans-serif;
      }

      /* Responsive: stack nicely on small screens */
      @media (max-width: 640px) {
        .features__row {
     
        }
      }
    </style>


 <section class=" features2" aria-label="Prednosti">
      <div class="features__row">
        <!-- 1) Truck -->
        
        
          <div class="feature">
          
  <img src="<?php echo get_template_directory_uri(); ?>/img/cod_icon_.png" alt="Customer Support Icon" class="feature__icon info-icon">
          <p class="feature__text">Αντικαταβολή</p>
        </div>
        
        
        <div class="feature">
      <img src="https://noriks.com/hr/wp-content/uploads/2025/07/footer_icon1-1.png" alt="Shirt Icon" class="feature__icon info-icon">
          <p class="feature__text">Δοκιμάστε 30 ημέρες, χωρίς ρίσκο</p>
        </div>
        
        

        <!-- 2) Smiley -->
        <div class="feature">
     
       
        <img src="https://noriks.com/hr/wp-content/uploads/2025/07/footer_icon3-1.png" alt="Shipping Icon" class="feature__icon info-icon">
          <p class="feature__text">Δωρεάν αποστολή για παραγγελίες άνω των 70 €</p>
        </div>

    
    
      </div>
    </section>




<?php if ( noriks_is_type( 'ortopas' ) ) : ?>
<!-- Ortopas: kartica "preverjeno s strani zdravnika" (slika) -->
<div class="ortopas-doctor-card" style="margin:14px 0;">
  <img src="<?php echo esc_url( get_template_directory_uri() . '/img/ortopas/ortopas-zdravnik.png' ); ?>"
       alt="Ελεγμένο από γιατρό — ζώνη NORIKS"
       style="width:100%; height:auto; display:block; border-radius:10px;"
       loading="lazy" decoding="async">
</div>
<?php endif; ?>

<!-- date and countdown section -->

<div class="shipping-box">
  <h2 id="shipping-window" class="shipping-title"></h2>
  <p class="shipping-sub">
    Παραγγείλτε εντός <span id="midnight-countdown" class="countdown"></span>
  </p>
</div>

<style>
  .shipping-box { font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif; color:#222; margin-top: 13px;
    margin-bottom: 13px; 
      
    background: #f4f4f4;
    padding: 8px 6px 8px 12px;
    border-radius: 5px;
          text-align: center;
      
      
      
  }
  .shipping-title { font-family: 'Roboto', sans-serif;
    font-size: 14px !important;
    font-weight: 700 !important;
    line-height: 1.4 !important; margin-bottom: 0px;
    color: #222 !important; }
  .shipping-sub { font-size: 14px; margin: 0; }
  .countdown { color: #22a155; font-weight: 700; }
</style>

<script>
  (function () {
    const weekdays = ['Κυριακή','Δευτέρα','Τρίτη','Τετάρτη','Πέμπτη','Παρασκευή','Σάββατο'];

    // Helper to add business days (skip Saturday/Sunday)
    function addBusinessDays(date, days) {
      let result = new Date(date);
      let added = 0;
      while (added < days) {
        result.setDate(result.getDate() + 1);
        const day = result.getDay();
        if (day !== 0 && day !== 6) { // skip Sunday(0) + Saturday(6)
          added++;
        }
      }
      return result;
    }

    // Get shipping days: today +2 business days, today +3 business days
    const today = new Date();
    const first  = addBusinessDays(today, 4);
    const second = addBusinessDays(today, 8);

    function formatDayMonth(d) {
      return `${d.getDate()}.${d.getMonth()+1}.`; // e.g. 21.8.
    }

    const windowEl = document.getElementById('shipping-window');
    windowEl.textContent = `Παράδοση από ${weekdays[first.getDay()]}  ${formatDayMonth(first)} έως ${weekdays[second.getDay()]}, ${formatDayMonth(second)}`;

    // Countdown to midnight
    const cdEl = document.getElementById('midnight-countdown');

    function nextMidnight(now) {
      const n = new Date(now);
      n.setHours(24, 0, 0, 0);
      return n;
    }

    function updateCountdown() {
      const now = new Date();
      const end = nextMidnight(now);
      let diff = Math.max(0, end - now);

      const h = Math.floor(diff / 3_600_000); diff -= h * 3_600_000;
      const m = Math.floor(diff / 60_000);    diff -= m * 60_000;
      const s = Math.floor(diff / 1000);

      cdEl.textContent = `${h}h ${m}min ${s}s`;
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);
  })();
</script>


<!-- date and countdown section -->





<?php 

$is_singles_boxers = has_term( 'singles-boxers', 'product_cat', $current_product_id );

$is_boxers = has_term( array( 'mpoxer','mpoxer-1-tem','orto-bokserice','mpoxer-paketo-3-tem','mpoxer-paketo-5-tem','mpoxer-paketo-7-tem','mpoxer-paketo-10-tem','mpoxer-paketo-15-tem' ), 'product_cat', $current_product_id ) && ! has_term( array( 'black-friday', 'majice-i-bokserice-paketi' ), 'product_cat', $current_product_id );

$is_carape = has_term( array( 'kaltses','kaltses-lefko','kaltses-mavro' ), 'product_cat', $current_product_id );

$is_mixed_bundle = has_term( array( 'set','orto-starter','orto-majica-bokserica','paketo-ekkinisis' ), 'product_cat', $current_product_id );

?>



<?php if( !$is_boxers && !$is_carape ): ?>


<!-- my thre icons content -->


<div class="features">
    <div class="feature-card">
      <img src="<?php echo get_field("singlepp_icon_img1","option"); ?>" alt="Perfect Fit">
      <p><?php echo get_field("singlepp_icon_t1","option"); ?></p>
    </div>
    <div class="feature-card">
      <img src="<?php echo get_field("singlepp_icon_img2","option"); ?>" alt="Hides Dad Bod">
      <p><?php echo get_field("singlepp_icon_t2","option"); ?></p>
    </div>
    <div class="feature-card">
      <img src="<?php echo get_field("singlepp_icon_img3","option"); ?>" alt="Breathes">
       <p><?php echo get_field("singlepp_icon_t3","option"); ?></p>
    </div>
  </div>


<style>


    .features {
      display: flex;
    justify-content: space-between;
    gap: 16px;
    margin-top: 15px;
    margin-bottom: 15px;
    }

    .feature-card {
    display: flex
;
    flex-direction: column;
    align-items: center;
    flex: 1;
    gap: 8px;
    border-radius: 5px;
    background: #F4F4F4;
    padding: 16px;
    font-size: 14px;
    font-weight: 400;
    color: #111213;
    line-height: 1.2;
    text-align: center;
    }

    .feature-card img {
      width: 32px;
      height: 32px;
      margin-bottom: 0px;
    }

    .feature-card p {
      margin: 0;
      font-weight: 500;
      font-size: 14px;
      color: #222;
       letter-spacing: -0.5px !important;
    }
  </style>
  
 <?php endif; ?>


<!--
<div style="margin-bottom: 15px;" class="woocommerce-product-details__short-description">
    
    
	<?php echo apply_filters( 'the_content', $product->get_description() );  ?>
	
	
</div>
-->



 <!-- icons -->
 
 <!--
 <div class="info-section">

    <div class="info-box">
     
     
     
      

     <img src="<?php echo get_field("singlepp_bottomicons_img1","options"); ?>" alt="" width="25" height="25">
     <?php echo get_field("singlepp_bottomicons_t1","options"); ?>

    
     
     
    </div>
    
    
    
     <div class="info-box">
    
         <a href="tel:+38517776471" style="
    color: #7b8a9b;
    font-weight: 500;
    font-size: 14px;
    font-family: 'Roboto', sans-serif; display: flex; align-items: center; text-decoration: none; ">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 6px;    width: 17px;
    height: 17px;" viewBox="0 0 16 16">
    <path d="M3.654 1.328a.678.678 0 0 1 .737-.07l2.547 1.272a.678.678 0 0 1 .291.901L6.29 5.72a.678.678 0 0 0 .145.776l2.457 2.457a.678.678 0 0 0 .776.145l2.29-1.24a.678.678 0 0 1 .901.291l1.272 2.547a.678.678 0 0 1-.07.737l-1.175 1.769c-.46.692-1.232 1.043-2.036.964-2.322-.238-4.96-2.223-6.856-4.12C1.77 7.667-.214 5.03.024 2.707c.079-.804.272-1.577.964-2.036L3.654 1.33z"/>
  </svg>
  01 777 64 71
</a>

<a href="mailto:info@noriks.com" style="
    color: #7b8a9b;
    font-weight: 500;
    font-size: 14px;
    font-family: 'Roboto', sans-serif; display: flex; align-items: center; text-decoration: none;">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 6px;    width: 17px;
    height: 17px;" viewBox="0 0 16 16">
    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v.217L8 8.083 0 4.217V4zm0 1.383v6.234l5.803-3.122L0 5.383zM6.761 8.83 0 12.383V12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-.383l-6.761-3.553L8 9.917l-1.239-.653zM16 5.383l-5.803 3.112L16 11.617V5.383z"/>
  </svg>
  info@noriks.com
</a>
         
   
     </div>
     

    <div class="info-grid">
      
      
      
      
      <div class="info-box">
       <img src="<?php echo get_field("singlepp_bottomicons_img2","options"); ?>" alt=""  width="25" height="25">
        <?php echo get_field("singlepp_bottomicons_t2","options"); ?>
      </div>
      <div class="info-box">
  
<img src="<?php echo get_field("singlepp_bottomicons_img3","options"); ?>" alt=""  width="25" height="25">
<?php echo get_field("singlepp_bottomicons_t3","options"); ?>
      </div>
    </div>

  </div>
  -->
  
  <style>


    .info-section {
      display: flex;
      flex-direction: column;
      gap: 7px;
      max-width: 800px;
      margin: auto;
      margin-bottom: 25px;
    }
    
    .info-section img {
      width: 25px;
    }


    .info-box {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      background-color: #f5f6f8;
      border-radius: 3px;
      padding: 16px;
      color: #7b8a9b;
      font-weight: 500;
      font-size: 14px;
          font-family: 'Roboto', sans-serif; 
      text-align: center;
    }

    .info-grid {
      display: flex;
      gap: 7px;
    }

    .info-grid .info-box {
      flex: 1;
    }

    .info-box svg {
      width: 24px;
      height: 24px;
      fill: #7b8a9b;
    }
  </style>









 <!-- icons -->


 <div class="accordion">


    <!-- KidsNest: πρώτες δύο θέσεις accordion (μακρύ περιεχόμενο από το summary) -->
    <?php if ( function_exists('noriks_is_type') && noriks_is_type( 'kidsnest', $current_product_id ) ) : ?>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Το πρόσωπο του παιδιού σας διαμορφώνεται τώρα — και έχετε χρόνο έως τα 9 του χρόνια</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <p>Οι ερευνητές των αεραγωγών και οι παιδιατρικοί οδοντίατροι προειδοποιούν εδώ και χρόνια για το ίδιο μοτίβο — για το οποίο οι περισσότεροι γονείς δεν έχουν ακούσει ποτέ. Ονομάζεται <strong>σύνδρομο επιμήκους προσώπου</strong> (αδενοειδές πρόσωπο).</p>
        <p>Κάθε νύχτα που το παιδί κοιμάται με ανοιχτό στόμα σε λάθος μαξιλάρι, συμβαίνουν τέσσερα πράγματα ταυτόχρονα: η γλώσσα πέφτει προς τα πίσω, η γνάθος τραβιέται, ο ουρανίσκος στενεύει σε ψηλή αψίδα και το πρόσωπο αρχίζει να μεγαλώνει κάθετα αντί οριζόντια. Μετά από χιλιάδες τέτοιες νύχτες μεταξύ 3 και 9 ετών, οι αλλαγές παγιώνονται.</p>
        <p>Γι' αυτό τα 9χρονα εμφανίζονται σήμερα στον ορθοδοντικό με τραβηγμένο πιγούνι, μαύρους κύκλους, στριμωγμένα δόντια — και έναν ακριβό λογαριασμό για σιδεράκια. Ο τρόπος που αναπνέει το παιδί μεταξύ 3 και 9 ετών επηρεάζει έντονα το πρόσωπο που θα έχει για όλη του τη ζωή.</p>
        <p>Το NORIKS <strong>KidsNest</strong> σχεδιάστηκε για να δρα στη βαθύτερη αιτία — τη λανθασμένη θέση κεφαλιού και γνάθου κατά τις 9 ώρες ύπνου — με <strong>εργονομική δομή 3 ζωνών</strong> που κρατά το κεφάλι, τον αυχένα και τη γνάθο σε σωστή ευθυγράμμιση από την πρώτη νύχτα.</p>
        <p><strong>Τι θα δείτε στο παιδί σας:</strong></p>
        <ul style="margin:6px 0 12px;padding-left:18px;">
          <li style="margin:0 0 7px;"><strong>Λιγότερη αναπνοή από το στόμα:</strong> χείλη κλειστά τη νύχτα, επιστροφή της αναπνοής από τη μύτη, τέλος το στεγνό στόμα το πρωί.</li>
          <li style="margin:0 0 7px;"><strong>Πιο ήσυχες νύχτες:</strong> το ροχαλητό στα περισσότερα παιδιά ηρεμεί μέσα σε 1–2 εβδομάδες.</li>
          <li style="margin:0 0 7px;"><strong>Στήριξη της γνάθου που αναπτύσσεται:</strong> σωστή θέση νύχτα με τη νύχτα, στα χρόνια που μετρούν περισσότερο.</li>
          <li style="margin:0 0 7px;"><strong>Έξυπνη πρόληψη:</strong> ένα μαξιλάρι σήμερα — αντί για ακριβές διορθώσεις αύριο.</li>
        </ul>
        <p><strong>Ένα μαξιλάρι απόψε. Ή χιλιάδες αργότερα.</strong></p>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Μεγαλύτερο από 9; Το παράθυρο στενεύει. Η ζημιά δεν σταματά.</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <p>Η συμβουλή που ακούσατε είναι μόνο κατά το ήμισυ σωστή. Ναι, ο ουρανίσκος σταθεροποιείται γύρω στα 9. Αλλά το πρόσωπο αναπτύσσεται έως τα 20, η κάτω γνάθος μεγαλώνει έως τα 17 και οι αεραγωγοί προσαρμόζονται διαρκώς.</p>
        <p>Γι' αυτό κάθε νύχτα αναπνοής από το στόμα μετά τα 9 προσθέτει νέα ζημιά στην παλιά: τρίξιμο δοντιών, πονοκέφαλοι, ύπνος που δεν ξεκουράζει, πτώση συγκέντρωσης — και κούραση που όλοι μπερδεύουν με τεμπελιά. Ο έφηβός σας δεν είναι τεμπέλης. Μετά βίας αναπνέει έξι ώρες κάθε νύχτα.</p>
        <p>Το KidsNest στο μέγεθος <strong>9–18 ετών</strong> είναι φτιαγμένο για μεγαλύτερο κεφάλι, αυχένα και ώμους. Διαφορετικό περίγραμμα, άλλο ύψος, άλλη στήριξη. Ίδιος βασικός μηχανισμός: σωστή ευθυγράμμιση κεφαλιού, αυχένα και γνάθου, όλη τη νύχτα, σε ένα σώμα που ακόμη μεγαλώνει.</p>
        <p>Τι παρατηρούν οι γονείς: το ροχαλητό ηρεμεί σε 7 έως 14 νύχτες, επιστρέφει η πραγματική πρωινή ενέργεια, οι πονοκέφαλοι ξεθωριάζουν, η συγκέντρωση επανέρχεται.</p>
        <p>Το καλύτερο παράθυρο παραμένει από τα 3 έως τα 9. Ένα ισχυρό παράθυρο είναι από τα 8 έως τα 18. Κανένα δεν είναι εντελώς κλειστό — αλλά κάθε νύχτα αναμονής προσθέτει πίεση σε ένα σώμα που προσπαθεί να ανακάμψει.</p>
        <p><strong>Το χθες πέρασε. Το απόψε είναι ακόμη δικό σας.</strong></p>
      </div>
    </div>
    <?php endif; ?>


    <!-- ErgoSit ortopedski jastuk: prva dva accordion mjesta (kopija originala, GR) -->
    <?php if ( function_exists('noriks_is_type') && noriks_is_type( 'ortopedski-jastuk', $current_product_id ) ) : ?>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Προδιαγραφές προϊόντος</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <ul style="margin:8px 0 12px; padding-left:18px;">
          <li style="margin:0 0 8px;"><strong>Εξωτερική θήκη:</strong> Διαπνέον πλεκτό ύφασμα, αφαιρείται και πλένεται στο πλυντήριο, υποαλλεργική</li>
          <li style="margin:0 0 8px;"><strong>Πυρήνας:</strong> Προσαρμοστικός αφρός OrthoFlex™ | Μη τοξικός, με πιστοποίηση OEKO-TEX® | Σχεδιασμένος για αποφόρτιση της πίεσης + ευθυγράμμιση της στάσης</li>
        </ul>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Τι το κάνει τόσο ξεχωριστό;</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <ul style="margin:8px 0 12px; padding-left:18px;">
          <li style="margin:0 0 10px;"><strong>Αφρός μνήμης OrthoFlex™:</strong> Αφρός υψηλής πυκνότητας που αποφορτίζει την πίεση και προσαρμόζεται χωρίς να ξεφουσκώνει — στηρίζει κόκκυγα, γοφούς και σπονδυλική στήλη για άνεση όλη την ημέρα.</li>
          <li style="margin:0 0 10px;"><strong>Θήκη BreatheEase™:</strong> Απαλή, διαπνέουσα και φιλική προς το δέρμα. Αφαιρείται και πλένεται στο πλυντήριο, ώστε το μαξιλάρι να μένει πάντα φρέσκο.</li>
          <li style="margin:0 0 10px;"><strong>Ισορροπημένη στήριξη:</strong> Ούτε πολύ μαλακό, ούτε πολύ σκληρό. Σχεδιασμένο να ευθυγραμμίζει τη στάση και να ανακουφίζει τα επώδυνα σημεία από τις πολλές ώρες καθίσματος.</li>
        </ul>
      </div>
    </div>
    <?php endif; ?>


    <!-- 1 - detajli --> <!-- κρυμμένο στο norikshers + ortopedski jastuk -->
    <?php if ( ! ( function_exists('noriks_is_type') && ( noriks_is_type('norikshers', $current_product_id) || noriks_is_type('ortopedski-jastuk', $current_product_id) ) ) ) : ?>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3><?php echo get_field("singlepp_acc_h_1","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">

         <?php if( function_exists('noriks_is_type') && noriks_is_type( 'kidsnest', $current_product_id ) ): ?>

                Το NORIKS KidsNest είναι κατασκευασμένο από υποαλλεργικό αφρό μνήμης με πιστοποίηση OEKO-TEX® — χωρίς φορμαλδεΰδη, βαρέα μέταλλα και BPA — με διαπνέουσα, πλενόμενη θήκη που αφαιρείται εύκολα.<br><br>Η εργονομική δομή 3 ζωνών αγκαλιάζει απαλά το κεφάλι, στηρίζει τον αυχένα και βοηθά να διατηρείται η σπονδυλική στήλη σε φυσική ευθυγράμμιση — ακόμη κι όταν το παιδί στριφογυρίζει πολύ τη νύχτα. Έτσι ενθαρρύνει την αναπνοή από τη μύτη και πιο ήρεμο, βαθύτερο ύπνο.<br><br>Διαθέσιμο σε τρία μεγέθη (1–3, 3–9 και 9–18 ετών), μεγαλώνει μαζί με το παιδί σας και προσφέρει το σωστό ύψος στήριξης σε κάθε στάδιο ανάπτυξης.

         <?php elseif( function_exists('noriks_is_type') && noriks_is_type('kneefix', $current_product_id) ): ?>

                Το NORIKS KneeFix είναι ένας εύκαμπτος νάρθηκας γόνατος που συνδυάζει τέσσερις λειτουργίες σε ένα σύστημα στήριξης: ρυθμιζόμενη συμπίεση μέσω ενός ακριβούς τροχού, διπλούς πλαϊνούς σταθεροποιητές, μαξιλαράκι γέλης που ανακουφίζει την επιγονατίδα και σιλικονούχο αντιολισθητικό περίγραμμα που κρατά τον νάρθηκα στη θέση του.<br><br>Σε αντίθεση με τους άκαμπτους νάρθηκες, το KneeFix δεν ακινητοποιεί το γόνατο — το στηρίζει κατά τη φυσική κίνηση. Τη συμπίεση τη ρυθμίζετε σε ένα δευτερόλεπτο: το πρωί πιο σφιχτά, το απόγευμα πιο χαλαρά, ανάλογα με το πόσο είστε όρθιοι. Έτσι το γόνατο αποκτά σταθερότητα όταν σηκώνεστε, στις σκάλες, στο περπάτημα και στην παρατεταμένη ορθοστασία.<br><br>Το ύφασμα είναι ελαφρύ, αναπνέει και απομακρύνει την υγρασία, οπότε ο νάρθηκας φοριέται για ώρες χωρίς εφίδρωση και χωρίς να χαράζει. Είναι λεπτός και διακριτικός — κάτω από το παντελόνι σχεδόν δεν φαίνεται.<br><br>Διατίθεται σε μεγέθη από S έως 2XL ανάλογα με το σωματικό βάρος και σε έκδοση για αριστερό και δεξί γόνατο, ώστε η εφαρμογή να παραμένει ακριβής.

         <?php elseif( function_exists('noriks_is_type') && noriks_is_type( 'leakboxers', $current_product_id ) ): ?>

                Τα μποξεράκια ακράτειας NORIKS είναι κατασκευασμένα από απαλή αντιβακτηριδιακή ίνα μπαμπού με αδιάβροχο εξωτερικό στρώμα. Στο κέντρο βρίσκεται ο πυρήνας PureDry™ 7 στρωμάτων που απορροφά στιγμιαία και κλειδώνει έως 300 ml υγρού, ώστε το δέρμα να μένει στεγνό και η διαρροή να μένει μέσα.<br><br>Η γραμμή είναι λεπτή και διακριτική — μοιάζουν και νιώθουν σαν κανονικό εσώρουχο, χωρίς όγκο και χωρίς αίσθηση «πάνας». Η προστασία στα πόδια αποτρέπει τις πλευρικές διαρροές, ενώ ο έλεγχος οσμών διατηρεί τη φρεσκάδα όλη την ημέρα.<br><br>Πλένονται και επαναχρησιμοποιούνται — διατηρούν την απορροφητικότητά τους για εκατοντάδες πλυσίματα, ως οικολογική και οικονομική εναλλακτική στις σερβιέτες μίας χρήσης και στις πάνες.

         <?php elseif( function_exists('noriks_is_type') && noriks_is_type( 'kompresijske-majice', $current_product_id ) ): ?>

                Το NORIKS FIT είναι κατασκευασμένο από προηγμένο ιοντικό ύφασμα συμπίεσης που προσφέρει εφαρμοστή, υποστηρικτική γραμμή. Η στοχευμένη συμπίεση σφίγγει ομοιόμορφα την κοιλιά και τα πλευρά, εξομαλύνει τη σιλουέτα και στηρίζει την όρθια στάση — χωρίς σφίξιμο που εμποδίζει την αναπνοή ή την κίνηση.<br><br>Οι μικρο-υφασμένες ίνες ενισχύουν την κυκλοφορία και σας βοηθούν να στέκεστε πιο όρθια και να νιώθετε πιο σίγουροι στη διάρκεια της ημέρας. Το ύφασμα είναι ελαφρύ, διαπνέον και απομακρύνει την υγρασία, ώστε να μένετε στεγνοί και άνετοι.<br><br>Η λεπτή και διακριτική γραμμή το κάνει αόρατο κάτω από οποιοδήποτε πουκάμισο, ενώ μπορεί να χρησιμοποιηθεί και ως αθλητικό φανελάκι. Το αποτέλεσμα: πιο κομψή εμφάνιση, καλύτερη στάση και αυτοπεποίθηση — μόλις το φορέσετε.

         <?php elseif( !$is_boxers &&  !$is_carape &&   !$is_mixed_bundle ): ?>



        <?php echo get_field("singlepp_acc_t_1","options"); ?>
        
        
        <?php elseif(  has_term( array( 'orto-starter', 'orto-majica-bokserica' ), 'product_cat', $current_product_id )  ): ?>
        
        
        
              Τα premium μπλουζάκια μας είναι κατασκευασμένα από πρωτοκλασάτο μείγμα 60% βαμβακιού ring-spun και 40% πολυεστέρα, που εξασφαλίζει εξαιρετικά απαλό ύφασμα ανθεκτικό στις τσαλάκωσες.
<br><br>
Τα μποξεράκια NORIKS είναι κατασκευασμένα από πρωτοκλασάτο μείγμα 95% modal και 5% ελαστάνης, που εξασφαλίζει εξαιρετικά απαλό και ελαστικό ύφασμα που προσαρμόζεται τέλεια στο σώμα. Το ελαστικό λάστιχο είναι σχεδιασμένο για βέλτιστη εφαρμογή, παρέχοντας άνεση χωρίς σφίξιμο και τέλεια εμφάνιση κάτω από τα ρούχα.
<br>


        <?php elseif( function_exists('noriks_is_type') && noriks_is_type('fisiorest', $current_product_id) ): ?>

                Το NORIKS FisioRest είναι ένα θεραπευτικό μαξιλάρι αυχένα που συνδυάζει έλξη, θερμότητα και μασάζ με δόνηση σε εργονομικό σχεδιασμό από αφρό μνήμης. Τεντώνει απαλά τον αυχένα στη σωστή γωνία, αποφορτίζει την αυχενική μοίρα και χαλαρώνει τη μυϊκή ένταση με θερμότητα και μασάζ. Ασύρματο, επαναφορτιζόμενο και τυλιγμένο σε απαλό δροσερό μετάξι – ασφαλές ακόμη και για τον ύπνο.

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type('bunion', $current_product_id) ): ?>

                Ο διορθωτής κότσι NORIKS, με προηγμένη θεραπεία ευθυγράμμισης και πατενταρισμένο αρθρωτό μηχανισμό, επαναφέρει απαλά το μεγάλο δάχτυλο στη φυσική του θέση, ανακουφίζει τη δυσφορία και αποτρέπει την περαιτέρω ανάπτυξη της προεξοχής. Ο ευέλικτος σχεδιασμός επιτρέπει να περπατάτε με αυτό. Εφαρμόζει σε όλα τα μεγέθη ποδιών, χωρίς αριστερή ή δεξιά πλευρά. Για χρήση σε ξεκούραση – ενώ αναπαύεστε, βλέπετε τηλεόραση, διαβάζετε ή κοιμάστε.

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type('ortopas', $current_product_id) ): ?>

                Η ορθοπεδική ζώνη NORIKS σταθεροποιεί στοχευμένα τη μέση μέσω στοχευμένης συμπίεσης, ευθυγραμμίζει σωστά τη λεκάνη και αποφορτίζει το ισχιακό νεύρο. Λεπτή και διακριτική κάτω από τα ρούχα, με ρυθμιζόμενο βαθμό στήριξης. Κατάλληλη για πόνους στη μέση, ισχιαλγία, μυϊκή ένταση και προβλήματα της ιερολαγόνιας άρθρωσης.

        <?php else: ?>



            <?php echo get_field("__overwrite_sekcije_bellow_1"); ?>


        <?php endif; ?>
        
        
        
      </div>
    </div>
    
    
    
     
     <?php endif; // /κρυμμένες λεπτομέρειες στο norikshers ?>

     <!-- 2 - slika tablica velicina  -->
     <?php if ( ! ( function_exists('noriks_is_type') && ( noriks_is_type('bunion', $current_product_id) || noriks_is_type('fisiorest', $current_product_id) || noriks_is_type('norikshers', $current_product_id) || noriks_is_type('ortopedski-jastuk', $current_product_id) ) )  && ! ( function_exists('noriks_is_type') && noriks_is_type('kneefix', $current_product_id) )) : // δεν υπάρχει πίνακας μεγεθών για bunion + fisiorest + norikshers + ortopedski jastuk ?>
     <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Πίνακας μεγεθών</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">

           <?php if( function_exists('noriks_is_type') && noriks_is_type( 'kidsnest', $current_product_id ) ): ?>

          <div class="kn-size">
            <img src="<?php echo get_template_directory_uri(); ?>/img/kidsnest/tablica-velicine-gr.webp" alt="Μεγέθη KidsNest ανά ηλικία" style="width:100%;height:auto;border-radius:10px;display:block;margin:0 0 12px;" loading="lazy">
            <p style="margin:0;line-height:1.6;"><strong>Το παιδί είναι ανάμεσα σε δύο μεγέθη;</strong> Επιλέξτε πάντα το μεγαλύτερο. Το μαξιλάρι είναι σχεδιασμένο να στηρίζει την υγιή ευθυγράμμιση όσο το παιδί μεγαλώνει — το μεγαλύτερο μέγεθος δίνει περισσότερο χώρο και μεγαλύτερη διάρκεια χρήσης.</p>
          </div>

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type( 'leakboxers', $current_product_id ) ): ?>

          <div class="lbx-size">
            <p style="margin:0 0 6px;font-weight:700;">Πώς να μετρήσετε τους γοφούς</p>
            <p style="margin:0 0 14px;line-height:1.6;">Τυλίξτε τη μεζούρα γύρω από το φαρδύτερο σημείο των γοφών (πάνω από τους γλουτούς), χωρίς να σφίγγετε. Σταθείτε χαλαρά και όρθια και σημειώστε τη μέτρηση σε εκατοστά.</p>
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#12233b;color:#fff;">
                  <th style="padding:8px 10px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Μέγεθος</th>
                  <th style="padding:8px 10px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Γοφοί (cm)</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $lbx_sizes = array(
                  array('S','έως 76 cm','έως 30"'),
                  array('M','77 – 85 cm','30 – 33"'),
                  array('L','86 – 94 cm','34 – 37"'),
                  array('XL','95 – 102 cm','37 – 40"'),
                  array('2XL','103 – 114 cm','41 – 45"'),
                  array('3XL','115 – 121 cm','45 – 48"'),
                  array('4XL','122 – 129 cm','48 – 51"'),
                  array('5XL','130 – 137 cm','51 – 54"'),
                  array('6XL','138 – 145 cm','54 – 57"'),
                  array('7XL','146 – 153 cm','57 – 60"'),
                  array('8XL','154 cm και άνω','61" και άνω'),
                );
                foreach ( $lbx_sizes as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f7fafb' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:8px 10px;font-weight:700;"><?php echo esc_html($r[0]); ?></td>
                    <td style="padding:8px 10px;"><?php echo esc_html($r[1]); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <p style="margin:14px 0 0;line-height:1.6;"><strong>Ανάμεσα σε δύο μεγέθη;</strong> Συνιστούμε πάντα το μεγαλύτερο για βέλτιστη άνεση και μέγιστη απορρόφηση.</p>
          </div>

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type( 'kompresijske-majice', $current_product_id ) ): ?>

          <div class="kmf-size">
            <table style="width:100%;border-collapse:collapse;font-size:15px;">
              <thead>
                <tr style="background:#111;color:#fff;">
                  <th style="padding:9px 12px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Μέγεθος</th>
                  <th style="padding:9px 12px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Αντίστοιχο βάρος</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $kmf_sizes = array(
                  array('S','50 – 70 kg'), array('M','70 – 90 kg'), array('L','90 – 110 kg'), array('XL','110 – 130 kg'),
                  array('2XL','130 – 150 kg'), array('3XL','150 – 170 kg'), array('4XL','170 – 190 kg'), array('5XL','190 – 210 kg'),
                );
                foreach ( $kmf_sizes as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f4f4f4' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eaeaea;">
                    <td style="padding:9px 12px;font-weight:800;"><?php echo esc_html($r[0]); ?></td>
                    <td style="padding:9px 12px;font-weight:700;"><?php echo esc_html($r[1]); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <p style="margin:12px 0 0;line-height:1.6;">Επιλέξτε μέγεθος με βάση το βάρος σας. Ανάμεσα σε δύο μεγέθη; Για ισχυρότερη συμπίεση επιλέξτε το μικρότερο.</p>
          </div>

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type('ortopas', $current_product_id) ): ?>

          <div style="line-height:1.9;">
            <strong>S/M</strong> : περιφέρεια ισχίων 75–110 cm<br>
            <strong>L/XL</strong> : περιφέρεια ισχίων 110–140 cm<br><br>
            Παρακαλούμε μετρήστε την περιφέρεια των ισχίων σας για να βρείτε το μέγεθός σας.
          </div>

        <?php elseif( $is_boxers ): ?>


            <img src="https://noriks.com/gr/wp-content/uploads/2026/02/boxers_size_gr.png">




        <?php elseif( noriks_is_type( 'kompresijske-nogavice', $current_product_id ) ): ?>

          <div style="line-height:1.9;">
            <strong>S/M</strong> : νούμερο παπουτσιού 36–40 / περιφέρεια γάμπας : 23–36 εκ.<br>
            <strong>L/XL</strong> : νούμερο παπουτσιού 40–44 / περιφέρεια γάμπας : 36–45 εκ.<br>
            <strong>2XL</strong> : νούμερο παπουτσιού 44–48 / περιφέρεια γάμπας : 45–56 εκ.<br><br>
            Μετρήστε την περιφέρεια της γάμπας στο πιο φαρδύ σημείο για να βρείτε το μέγεθός σας.<br><br>
            Συνιστούμε να επιλέξετε μέγεθος με βάση την περιφέρεια της γάμπας και όχι το συνηθισμένο νούμερο παπουτσιού.
          </div>

        <?php elseif(  $is_carape ): ?>


                  <img src="https://noriks.com/hr/wp-content/uploads/2026/02/Nogavice_tabela_velikosti_Gr.png">

    <?php elseif(  $is_mixed_bundle ): ?>

     <img src="<?php echo get_template_directory_uri(); ?>/img/tabela-velikosti-majice.jpg">

         <img src="https://noriks.com/gr/wp-content/uploads/2026/02/boxers_size_gr.png">

          <?php else: ?>


     <img src="<?php echo get_template_directory_uri(); ?>/img/tabela-velikosti-majice.jpg">



        <?php endif; ?>
      </div>
    </div>
    <?php endif; // /δεν υπάρχει πίνακας μεγεθών για bunion + fisiorest ?>


    <!-- 3 - savjeti za pranje--> <!-- κρυμμένο και στο kidsnest -->
    <?php if ( ! ( function_exists('noriks_is_type') && ( noriks_is_type('ortopas', $current_product_id) || noriks_is_type('bunion', $current_product_id) || noriks_is_type('fisiorest', $current_product_id) || noriks_is_type('norikshers', $current_product_id) || noriks_is_type('ortopedski-jastuk', $current_product_id) || noriks_is_type('kidsnest', $current_product_id) ) )  && ! ( function_exists('noriks_is_type') && noriks_is_type('kneefix', $current_product_id) )) : // δεν υπάρχουν οδηγίες πλυσίματος για ζώνη/bunion/fisiorest + norikshers + ortopedski jastuk + kidsnest ?>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3><?php echo get_field("singlepp_acc_h_2","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
             <?php if( function_exists('noriks_is_type') && noriks_is_type( 'leakboxers', $current_product_id ) ): ?>

                Πλένετε στους 30–40 °C, σε πρόγραμμα για ευαίσθητα. Χωρίς μαλακτικό και χλωρίνη. Στεγνώνετε στον αέρα. Διατηρούν την απορροφητικότητά τους για εκατοντάδες πλυσίματα.

             <?php elseif( function_exists('noriks_is_type') && noriks_is_type( 'kompresijske-majice', $current_product_id ) ): ?>

                Πλύσιμο στο πλυντήριο σε κρύο, απαλό πρόγραμμα. Χωρίς χλωρίνη και μαλακτικό. Όχι στεγνωτήριο — στεγνώνετε στον αέρα για να διατηρηθεί η συμπίεση και το σχήμα.

             <?php elseif( !$is_boxers &&  !$is_carape &&   !$is_mixed_bundle ): ?>
        <?php echo get_field("singlepp_acc_t_2","options"); ?>


        <?php elseif(  has_term( array( 'orto-starter', 'orto-majica-bokserica' ), 'product_cat', $current_product_id )  ): ?>



                         Perite boje s bojama.  Program za nježno pranje na hladnoj vodi.  Sušite ravno položeno ili u sušilici na niskoj temperaturi.  Ne izbjeljivati


          <?php else: ?>
            <?php echo get_field("__overwrite_sekcije_bellow_3"); ?>
        <?php endif; ?>
      </div>
    </div>
    <?php endif; // /δεν υπάρχουν οδηγίες πλυσίματος για ζώνη/bunion/fisiorest ?>



    <!-- 4 povrati in menjave -->
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3><?php echo get_field("singlepp_acc_h_3","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
    <div class="accordion-content">
  <p></p>
  Πιστεύουμε τόσο πολύ ότι θα σας αρέσει το NORIKS, που έχετε <b data-stringify-type="bold">30 ημέρες</b> για επιστροφή ή δωρεάν ανταλλαγή.
  Χωρίς γραφειοκρατία, χωρίς άγχος – το λύνουμε με λίγα κλικ.
  </p>

  <p>
    <a href="mailto:info@noriks.com" style="display: flex; align-items: center; text-decoration: none; color: #333;">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#333" style="margin-right: 6px;" viewBox="0 0 16 16">
        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v.217L8 8.083 0 4.217V4zm0 1.383v6.234l5.803-3.122L0 5.383zM6.761 8.83 0 12.383V12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-.383l-6.761-3.553L8 9.917l-1.239-.653zM16 5.383l-5.803 3.112L16 11.617V5.383z"/>
      </svg>
      info@noriks.com
    </a>
  </p>

  <p>
    Απλώς στείλτε μας email ότι θέλετε ανταλλαγή και <b data-stringify-type="bold">τα κανονίζουμε αμέσως.</b>
  </p>
</div>

    </div>



    <!-- 5 - infomraicje o dostavi -->
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3><?php echo get_field("singlepp_acc_h_4","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <?php echo get_field("singlepp_acc_t_4","options"); ?>
      </div>
    </div>
    
    
    <!-- konec 5 acrodinov -->

  </div>

  <script>
    function toggleAccordion(header) {
      const item = header.parentElement;
      const isOpen = item.classList.contains('open');
      document.querySelectorAll('.accordion-item').forEach(el => el.classList.remove('open'));
      if (!isOpen) item.classList.add('open');
    }
  </script>
  
  
  <style>
      
       .accordion {
      border-top: 1px solid #ddd;
    }

    .accordion-item {
      border-bottom: 1px solid #ddd;
    }

    .accordion-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 16px 5px 5px 0px;
      cursor: pointer;
    }

    .accordion-header h3 {
      display: flex;
      align-items: center;
      font-weight: 500;
      font-size: 16px;
      margin: 0;
      gap: 2px;
      font-family: 'Roboto', sans-serif;  
    }

    .accordion-content {
      padding: 0 0 0 0;
      display: none;
      font-size: 14px;
      font-family: 'Roboto', sans-serif;  
      line-height: 1.6;
      color: black;
    }

    .accordion-item.open .accordion-content {
      display: block;
    }

    .icon {
      width: 24px;
      height: 24px;
      display: inline-block;
      background-size: contain;
      background-repeat: no-repeat;

    }
    
    .icon-details {
   
      margin: 0 0px 0 10px !important;
    }
    
    .icon-size {
   
      margin: 0 0px 0 10px !important;
    }

    /* Placeholder icons using emojis 
    
    .icon.details::before { content: "📝"; }
     .icon.size::before { content: "👕"; }
    .icon.laundry::before { content: "🧺"; }
    .icon.returns::before { content: "↩️"; }
    .icon.shipping::before { content: "📦"; }
*/
    .toggle {
      font-size: 24px;
      transition: transform 0.3s ease;
    }

    .accordion-item.open .toggle {
      transform: rotate(45deg);
    }
  </style>








<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( ProductType::VARIABLE ) ) ) : ?>

		<span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></span>

	<?php endif; ?>

	<?php echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

	<?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>
