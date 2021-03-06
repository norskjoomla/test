<?php
/**
* @version 1.1.x
* @package nBill
* @copyright (C) 2006-2007 Netshine Software Limited
* @copyright Translation 2009 Joomla! i Norge
* @license Commercial
* 
* PLEASE NOTE: This is NOT free software. You must purchase a license in order to use this component.
* For more information, see www.nbill.co.uk
*
* All Rights Reserved. You may make amendments to any unencrypted files for your own use only or
* for the use of your customers if you are a website developer. HOWEVER, you are not permitted to
* re-distribute or re-sell this software in any form without the express permission of the copyright 
* holder. This software is NOT open source.
*
* This component was developed by Netshine Software Limited (www.netshinesoftware.com). Use of this
* software is entirely at your own risk.
*/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

//Vendors
define("INV_VENDOR_INTRO", "Typisk, du vil bare ha dine egne firmadetaljer listet her. Dersom du har mer enn et firma, eller en tilbyder for flere firmaer, kan du legge til ytter�igere firmadetaljer. Alle fakturaer, inkludert oppf�ringer, blir lagret separat for hver leverand�r.");
define("INV_VENDOR_DETAILS", "Leverand�r detaljer");
define("INV_NEW_VENDOR", "Ny leverand�r");
define("INV_EDIT_VENDOR", "Rediger leverand�r detaljer");
define("INV_VENDORS_TITLE", "Leverand�rer");
define("INV_VENDOR_COUNTRY", "Leverand�r land");
define("INV_VENDOR_CURRENCY", "Leverand�r valuta");
define("INV_VENDOR_OTHER_CURRENCIES", "Andre tillatte valutaer");
define("INV_NEXT_INV_NO", "Neste fakturanummer");
define("INV_NEXT_ORDER_NO", "Neste ordrenummer");
define("INV_NEXT_RECEIPT_NO", "Neste kvitteringsnummer");
define("INV_NEXT_PAYMENT_NO", "Neste betalingsnummer");
define("INV_NEXT_CREDIT_NO", "Neste kredittnotanummer");
define("INV_DEFAULT_PAYMENT_INSTR", "Standard betalingsbetingelser");
define("INV_DEFAULT_SMALL_PRINT", "Standard liten utskrift");
define("INV_ADMIN_EMAIL", "Administrator e-post");
define("INV_PAPER_SIZE", "Papirst�rrelse");
define("INV_CLIENT_ORDERING", "Tillat klienter � plassere ordrer?");
define("INV_PUBLIC_ORDERING", "Tillat offentlige � plassere ordrer?");
define("INV_SHOW_EMPTY_CATS", "Vis tomme kategorier?");
define("INV_INSTR_VENDOR_NAME", "Skriv inn navnet som du �nsker p� fakturaer.");
define("INV_INSTR_VENDOR_ADDRESS", "Skriv inn adressen som du �nsker p� fakturaer.");
define("INV_INSTR_VENDOR_COUNTRY", "Dette vil kun vises p� automatisk genererte fakturarer n�r fakturadresse er i et annet land.");
define("INV_INSTR_VENDOR_CURRENCY", "Velg valuta for denne leverand�ren.");
define("INV_INSTR_VENDOR_OTHER_CURRENCIES", "Spesifiser annen valuta som kunder av denne leverand�ren kan bestille og bli fakturert i (press Ctrl for flere valg, eller for � ta bort allerede markerte valg).");
define("INV_INSTR_NEXT_INVOICE_NO", "Legg inn neste fakturanummer som skal genereres (du kan velg alpha-numeriske karakterer i starten, men siste karakter m� v�re numerisk, da denne �kes automatisk).");
define("INV_INSTR_NEXT_ORDER_NO", "Legg inn neste ordrenummer som skal genereres (du kan velg alpha-numeriske karakterer i starten, men siste karakter m� v�re numerisk, da denne �kes automatisk).");
define("INV_INSTR_NEXT_RECEIPT_NO", "Legg inn neste kvitteringsnummer som skal genereres (du kan velg alpha-numeriske karakterer i starten, men siste karakter m� v�re numerisk, da denne �kes automatisk).");
define("INV_INSTR_NEXT_PAYMENT_NO", "Legg inn neste betalingsnummer som skal genereres (du kan velg alpha-numeriske karakterer i starten, men siste karakter m� v�re numerisk, da denne �kes automatisk).");
define("INV_INSTR_NEXT_CREDIT_NO", "Legg inn neste kredittnotanummer som skal genereres (du kan velg alpha-numeriske karakterer i starten, men siste karakter m� v�re numerisk, da denne �kes automatisk).");
define("INV_INSTR_DEFAULT_PAYMENT_INSTR", "Legg inn standard betalingsbetingelser som skal vises p� fakturaer (dette kan endres for forskjellige land p� skattesiden)");
define("INV_INSTR_DEFAULT_SMALL_PRINT", "Legg inn standard liten utskrift som skal vises p� fakturane (dette kan endres for forskjellige land p� skattesiden)");
define("INV_INSTR_ADMIN_EMAIL", "E-post sendt til kunder vil se ut som om de blir sendt fra denne adressen.");
define("INV_INSTR_PAPER_SIZE", "Format som skal brukes ved konvertering til PDF-faktura (tillatte str. er: A4, A5, Letter og Legal)");
define("INV_INSTR_CLIENT_ORDERING", "Om komponentens 'front end' skal gi innloggede brukere rett eller ikke rett til � legge inn ordre ");
define("INV_INSTR_PUBLIC_ORDERING", "Om komponentens 'front end' skal gi ikke innloggede brukere rett eller ikke rett til � legge inn ordre ");
define("INV_INSTR_SHOW_EMPTY_CATS", "Hvis brukere kan legge inn ordre i komponentens 'front end', avgj�r dette valget om det skal vises eller ikke vises kategorier som ikke inneholder produkter eller underkategorier");
define("INV_VENDOR_NAME_REQUIRED", "Du m� spesifisere p� leverand�ren.");
define("INV_VENDOR_ADDRESS_REQUIRED", "Du m� spesifisere leverand�rens addresse");
define("INV_VENDOR_COUNTRY_REQUIRED", "Du m� spesifisere hvilket land leverand�ren er i.");
define("INV_VENDOR_CURRENCY_REQUIRED", "Du m� spesifisere hvilken valuta leverand�ren benytter.");
define("INV_VENDOR_EMAIL_REQUIRED", "Du m� spesifisere leverand�rens e-post adresse.");
define("INV_ERR_CANNOT_DELETE_LAST_VENDOR", "Du kan ikke slette siste leverand�r!");
define("INV_INVOICE_NO_LOCKED", "Neste fakturanummer for leverand�ren er i �yeblikket l�st. Dette skal kun skje midlertidig mens fakturaer blir generert. Hvis fakturagenerering feiler og dette feltet fortsatt er l�st, kan du l�se opp ved � trykke p� denne knappen:");
define("INV_ORDER_NO_LOCKED", "Neste ordrenummer for leverand�ren er i �yeblikket l�st. Dette skal kun skje midlertidig mens fakturaer blir generert. Hvis fakturagenerering feiler og dette feltet fortsatt er l�st, kan du l�se opp ved � trykke p� denne knappen:");
define("INV_RECEIPT_NO_LOCKED", "Neste kvitteringsnummer for leverand�ren er i �yeblikket l�st. Dette skal kun skje midlertidig mens fakturaer blir generert. Hvis fakturagenerering feiler og dette feltet fortsatt er l�st, kan du l�se opp ved � trykke p� denne knappen:");
define("INV_PAYMENT_NO_LOCKED", "Neste betalingsnummer for leverand�ren er i �yeblikket l�st. Dette skal kun skje midlertidig mens fakturaer blir generert. Hvis fakturagenerering feiler og dette feltet fortsatt er l�st, kan du l�se opp ved � trykke p� denne knappen:");
define("INV_UNLOCK", "L�s opp");
define("INV_INVOICE_TEMPLATE", "Fakturamal");
define("INV_INSTR_INVOICE_TEMPLATE", "Navn p� mal som skal brukes p� fakturaer fra denne leverand�ren.");
define("INV_INSTR_EMAIL_INVOICE_OPTIONS", "Angi standard fakturavarsel n�r nye fakturaer er generert. Disse verdiene kan overstyres for individuelle kunder. Hvis standard er satt til � sende en e-post til kunden (enten et varsel eller den faktiske faktureringen), gj�r komponent-grensesnittet at klienten m� melde deg p� dette. Hvis begge standardinnstillingene mot leverand�ren posten OG den altoverskyggende verdien holdes mot klienten posten b�de stiller krav om at ingen e-post skal sendes, vil brukeren ikke bli gitt muligheten til � melde seg. <strong>Merk:</strong> Hvis du sender automatisk e-post, er det sterkt anbefalt � sikre at alle klient-postene har en tilknytting til brukerens post slik at de kan logge seg p� nettsiden � angi sine innstillinger og vise sine fakturaer. <strong>Merk ogs�:</strong> � generere PDF'er tar mye systemressurser - er det anbefalt � unng� dette som standard, og bare for de klienter som virkelig �nsker det.");
define("INV_DEFAULT_GATEWAY", "Standard betalingsm�te");
define("INV_INSTR_DEFAULT_GATEWAY", "Standard betalingsm�te som brukes for nye ordrer, og for � tillate betaling av fakturaer p� nett (hvis det er aktuelt).");
define("INV_AUTO_CREATE_INCOME", "Autogenerer inntekt?");
define("INV_INSTR_AUTO_CREATE_INCOME", "Om betalingsm�ten skal instrueres til � automatisk opprette en inntektspost for fakturaer som er betalt p� nettet. MERK: Dette p�virker ikke bestillinger gjort p� et bestillingsskjema (du kan sette det p� det aktuelle bestillingsskjemaet), bare frittst�ende fakturaer som er betalt p� nett .");
define("INV_SUPPRESS_RECEIPT_NOS", "Generer kvitteringsnummer manuelt?");
define("INV_INSTR_SUPPRESS_RECEIPT_NOS", "Om man skal eller ikke skal fjerne generering av kvitteringstall n�r inntektselementer er lagt til, og tilbyr en verkt�ylinjeknapp for � generere kvittering for alle inntekter eks. opp til en gitt dato i stedet. Dette er slik at du kan ha alle kvitteringstall i dato rekkef�lge, selv om du har en blanding av automatisk genererte inntekter fra elektroniske betalinger og manuelt innlagte inntekter eks. (eg. for sjekker ets. som overf�res direkte til bankkontoen din). Ved � sette denne til \"Ja\", vil en ekstra verkt�ylinjeknapp vises p� inntektslist-siden slik at du kan fylle ut kvitteringstallene opp til en gitt dato, n�r du er klar. ");
define("INV_VENDOR_LOGO", "Leverand�r logo");
define("INV_INSTR_VENDOR_LOGO", "Last opp en .gif fil som vises p� leverand�rens faktura (hvis dette st�ttes av fakturamal). M� v�re .gif og mindre enn 30 kb. OBS: Det er mulig du m� oppdatere nettleservinduet, etter du har lastet opp et nytt bilde, siden noen nettlesere lagrer bildet i bufferet.");
define("INV_VENDOR_GIF_ONLY", "Beklager, filen som du lastet opp (%s) er ikke gyldig.  Kun GIF-filer kan brukes som leverand�r-logo");
define("INV_VENDOR_GIF_TOO_BIG", "Beklager, filen du lastet opp er for stor. Maks st�rrelse er 30 kb");
define("INV_DELETE_LOGO", "Slett");
define("INV_VENDOR_DELETE_LOGO_FAILED", INV_BRANDING_NAME . " kunne ikke slette filen. Det kan v�re fordi PHP ikke har rettigheter til � slette filer p� din server.");
define("INV_SUPPRESS_PAYMENT_NOS", "Generer betalingsnummer manuelt?");
define("INV_INSTR_SUPPRESS_PAYMENT_NOS", "Som over, men for betalingsnummer p� utgiftslisten.");
define("INV_ADD_REMITTANCE", "Vis remisse r�d?");
define("INV_INSTR_ADD_REMITTANCE", "Om det skal eller ikke skal legges til en remisse r�d slip p� slutten av fakturaer.");
define("INV_CREDIT_SMALL_PRINT", "Kredittnota (liten skrift)");
define("INV_INSTR_INVOICE_SMALL_PRINT_CR", "Angi eventuell juridisk ansvarsfraskrivelser etc. som du vil skal vises p� kredittnota.");
define("INV_MASTER_DB_INTRO", "Hvis du selger produkter eller arbeid ved bruk av flere nettsider, hver og en med kopi av " . INV_BRANDING_NAME . ", men du �nsker � ha all finansinformasjon kun p� en av nettsidene, kan du gj�re dette ved � bruke en kjede av hoveddatabaser. VIKTIG! Vennligst ikke bruk denne muligheten f�r du har lest dokumentasjonen (tiljengelig p� " . INV_BRANDING_NAME . " nettsiden), ellers er mulighetene tilstede for at du �delegger dataene!");
define("INV_USE_MASTER_DB", "Bruk en prim�rdatabasen?");
define("INV_INSTR_USE_MASTER_DB", "Om man skal utsette generering av tallene for fakturaer, kreditnotaer, inntekter og utgifter til en prim�rdatabasen, eller ikke (en ny kopi av " . INV_BRANDING_NAME . ").");
define("INV_MASTER_DB_HOST", "Prim�rvert");
define("INV_INSTR_MASTER_DB_HOST", "Vertsnavn p� prim�rdatabasen (kan v�re 'localhost' om dette er en database p� samme server).");
define("INV_MASTER_USERNAME", "Brukernavn");
define("INV_INSTR_MASTER_USERNAME", "Brukernavn som beh�ves for � f� adgang til prim�rdatabasen.");
define("INV_MASTER_PASSWORD", "Passord");
define("INV_INSTR_MASTER_PASSWORD", "Passord som beh�ves for � f� adgang til prim�rdatabasen.");
define("INV_MASTER_DB_NAME", "Navn p� prim�rdatabasen");
define("INV_INSTR_MASTER_DB_NAME", "Navn p� prim�rdatabasen.");
define("INV_MASTER_TABLE_PREFIX", "Tabell prefiks for prim�rdatabasen");
define("INV_INSTR_MASTER_TABLE_PREFIX", "Tabell prefiks for prim�rdatabasen (typisk 'jos_').");
define("INV_MASTER_DB_CANNOT_CONNECT", "Kunne ikke koble til prim�rdatabasen.");
define("INV_MASTER_DB_TEST", "Test oppkobling");
define("INV_MASTER_VENDOR", "Hovedleverand�r");
define("INV_INSTR_MASTER_VENDOR", "Korresponderende leverand�roppf�ring i prim�rdatabasen med synkronisering");
define("INV_SYNCHRONISE", "Last opp til prim�rdatabase");
define("INV_INSTR_SYNCHRONISE", "Send faktura-, kredittnota-, inntekts- og utgiftsdata fra denne databasen til prim�rdatabasen. Dette vil overskrive eksisterende data i hoveddatabasen med samme faktura-, kredittnota-, inntekts- og utgiftstall .");
define("INV_SYNC_ARE_YOU_SURE", "ADVARSEL! Dette vil overskrive data p� prim�rdatabasen (r). Klikk 'OK' for � laste opp data, eller 'Avbryt' for � avbryte.");
define("INV_MASTER_DB_TEST_SUCCESS", "Koblet til prim�rdatabase");
define("INV_MASTER_DB_NOT_IN_USE", "Kan ikke oppdatere prim�rdatabasen - du m� sette 'Bruk prim�rdatabase' til 'Ja' f�r du fors�ker � laste opp.");
define("INV_SYNCHRONISATION_ERROR", "Det oppstod en feil mens du pr�vde � laste opp til prim�rdatabasen. Opplasting avbrutt! Feilmeldingen som returneres av databasen var: %s");
define("INV_SYNCHRONISE_RECORD_COUNT", "%s oppf�ring(er) lagt til, og %s oppf�ring(er) oppdatert i prim�rdatabasen");
define("INV_SYNCHRONISE_NEED_GEN", "KAN IKKE FORTSETTE! En eller flere inntekter eller utgiftsposter (enten p� denne databasen, eller p� en prim�rdatabasen) har enn� ikke f�tt tildelt et nummer. Du m� generere betaling og/eller kvitteringstall f�r synkronisering (generering av kvitterings- eller betalingstall p� denne databasen vil ogs� generere eventuelle utest�ende p� prim�rdatabasen).");
define("INV_SYNC_UP_TO", "Synkroniser poster til og med (����/mm/dd)");
define("INV_SUPPRESS_GENERATION_BUTTONS", "Fjern genererings-knapper?");
define("INV_INSTR_SUPPRESS_GENERATION_BUTTONS", "Om � fjerne eller ikke fjerne visning av verkt�ylinjeknappene for � tillate generering av betalings- og kvitteringsnummer. Du b�r bare sette dette til \"Ja\" hvis dette er en prim�rdatabase som har en underdatabase som nummergenerering b�r utf�res (se hoeveddatabase avsnittet nedenfor). Hvis du angir en underdatabase til � bruke dette eksemplaret av " . INV_BRANDING_NAME . " som en master, vil verdien bli satt til \"Ja\" automatisk. DU GJ�R DERFOR VANLIGVIS IKKE NOE MED INNSTILLINGENE med mindre du pleide � ha en underdatabase som peker til denne, men som ikke lenger finnes (da m� du endre den fra \"Ja\" til \"Nei\" ).");
define("INV_ADD_PAYLINK", "Vis lenke til betaling p� fakturaer?");
define("INV_INSTR_ADD_PAYLINK", "Om du vil legge til en kobling til ubetalte fakturaer generert for denne leverand�ren som tillater kunden � betale fakturaen p� nett.");
define("INV_MASTER_DB_SECTION", "Prim�rdatabase");

//Version 1.2.1 - Note to translators:
//Line 74 of original English language file amended (INV_INSTR_EMAIL_INVOICE_OPTIONS) - additional note added

//Version 1.2.7
define("INV_EMAIL_PDF_AVAILABILITY", " (PDF-alternativet er kun tilgjengelig om <a href=\"http://www.nbill.co.uk/html2ps.html\" target=\"_blank\">HTML2PS/PDF-skriptet</a> er lastet opp)");
?>
