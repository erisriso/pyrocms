<?php defined('BASEPATH') OR exit('No direct script access allowed');

// inline help html. Only 'help_body' is used.
$lang['help_body'] = "
<h4>Γενικά</h4>
<p>Το πρόσθετο Σελίδες δίνει την δυνατότητα να διαχειριστείτε το στατικό περιεχόμενο του ιστότοπού σας με έναν απλό και ευέλικτο τρόπο.
Μπορείτε να διαχειριστείτε τις Διατάξεις Σελίδων και να ενσωματώσετε widgets χωρίς να απαιτείται επεξεργασία των αρχείων θεμάτων εμφάνισης</p>

<h4>Διαχερίση Σελίδων</h4><hr>
<h6>Περιεχόμενο Σελίδας</h6>
<p>Όταν επιλέγετε τον τίτλο της Σελίδας να θυμάστε ότι στην εξορισμού Διάταξη Σελίδας ο τίτλος εμφανίζεται πάνω από το περιεχόμενο της σελίδας.
Στην συνέχεια δημιουργήστε το περιεχόμενο της σελίδας με την βοήθεια του επεξεργαστή WYSIWYG.
Όταν είσαστε έτοιμοι να δημοσιεύσετε την σελίδα και να είναι ορατή από τους επισκέπτες σας, ορίστε την Κατάσταση σε Δημοσιευμένο και θα είναι προσβάσιμη στην διεύθυνση URL που φαίνεται.
Επίσης πρέπει να πάτε στο Σχεδιασμός -> Πλοήγηση και να δημιουργήσετε έναν νέο σύνδεσμο πλοήγησης αν θέλετε να εμφανίζεται στο μενού.
Διαφορετικά μπορείτε να επιλέξετε μια Περιοχή Πλοήγησης από το αναδυόμενο μενού.</p>

<h6>Meta data</h6>
<p>Ο meta title χρησιμοποιείται γενικά ως ο τίτλος στα αποτελέσματα αναζήτησης και υπάρχει η πεποίθηση ότι έχει ειδική σημασία στα αποτελέσματα των μηχανών αναζήτησης.<br />
Τα Meta keywords είναι λέξεις που περιγράφουν τον ιστότοπό σας και το περιεχόμενό του και υπάρχουν μόνο προς όφελος των μηχανών αναζήτησης.<br />
Η meta description είναι μια πολύ σύντομη περιγραφή της εν λόγω σελίδας και μπορεί να χρησιμοποιηθεί ως το σύντομο κείμενο που εμφανίζεται κάτω από το αποτέλεσματα των μηχανών αναζήτησης αν η εν λόγω μηχανή πιστεύει ότι είναι σχετικό με την εν λόγω αναζήτηση.</p>

<h6>Σχεδιασμός</h6>
<p>Η καρτέλα Σχεδιασμός σας επιτρέπει να επιλέξετε μια Διαταξη Σελίδας και προαιρετικά να εφαρμόσετε διαφορετικά CSS styles μόνο για αυτήν.
Ανατρέξτε στο τμήμα Διάταξη Σελίδας παρακάτω για βρείτε οδηγίες που θα σας βοηθήσουν να κάνετε την βέλτιστη χρήση των Διάταξεων Σελίδων.</p>

<h6>Script</h6>
<p>Μπορείτε να τοποθετήσετε κώδικα javascript εδώ ο οποίος θα προστεθεί στο τμήμα &lt;head&gt; της σελίδας.</p>

<h6>Επιλογές</h6>
<p>Σας επιτρέπει να ενεργοποιήσετε τα σχόλια και να παράγετε τροφοδοσία RSS για αυτήν την σελίδα. Μπορείτε επίσης να ποιες ομάδες χρηστών θα έχουν πρόσβαση στην σελίδα στο πεδίο Πρόσβαση.
Αν η τροφοδοσία RSS είναι ενεργοποιημένη, ένας επισκέπτης μπορεί να εγγραφεί σε αυτήν την σελίδα και θα λαμβάνουν ενημερώσεις για τις υπο-σελίδες στο πρόγραμμα για RSS που χρησιμοποιούν.</p>
<p>Η επιλογή \"Να απαιτείται το ακριβές URI\" είναι ένα έξυπνο μικρό εργαλείο που σας επιτρέπει να δίνεται παραμέτρους στην URL. Εξ'ορισμού το PyroCMS κοιτάει για μια σελίδα με
το σύντομο όνομα (πχ \"acme-widgets\" που είναι υποσελίδα του \"products\" όταν επισκέπτεστε το ".site_url('products/acme-widgets').". Ενεργοποιώντας την επιλογή αυτή στην σελίδα Products
λέτε στο PyroCMS ότι δεν υπάρχει πρόβλημα όταν δεν υπάρχει μια σελίδα με το όνομα Acme Widgtes. Θα φορτώσει την σελίδα Products και το 'acme-widgets' θα είναι απλώς μια παράμετρος.
Αυτό κάνει πιο εύκολο να περνάνε παραμέτροι σε ενσωματωμένα tags. Για παράδειγμα κάνοντας χρήση του πρόσθετου Streams για να προβάλλετε ένα stream με όνομα 'acme-widgets' στην σελίδα των Produsts:
<pre><code>{{ streams:cycle stream={url:segments segment=\"2\"} }}
    {{ entries }}
        {{ company_intro }}
        {{ owner_name }}
        {{ owner_phone }}
    {{ /entries }}
{{ /streams:cycle }}</code></pre></p>

<h4>Διάταξη Σελίδας</h4><hr>
<p>Οι διατάξεις σελίδων σας επιτρέπουν να ελέγχετε την διάταξη κάποιας σελίδας χωρίς να τροποιήσετε αρχεία.
Μπορείτε να ενσωματώσετε tags στην διάταξη σελίδας αντί να τα τοποθετείτε σε κάθε μια σελίδα ξεχωριστά.
Για παράδειγμα: Αν έχετε ένα widget τροφοδοσίας twitter που θέλετε να προβάλλετε στο τέλος κάθε σελίδας μπορέιτε απλώς να τοποθετήσετε το tag του widget στην διάταξη σελίδας:
<pre><code>
{{ page:title }}
{{ page:body }}

&lt;div class=\"my-twitter-widget\"&gt;
    {{ widgets:instance id=\"1\" }}
&lt;/div&gt;
</code></pre>
<p>Πλέον μπορείτε να εφαρμόσετε κανόνες CSS στο class \"my-twitter-widget\" στην καρτέλα CSS.</p>";
