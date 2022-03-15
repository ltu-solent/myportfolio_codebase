<?php

/**
 *
 * @package    mahara
 * @subpackage lang
 * @author     Catalyst IT Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['pluginname'] = 'Collections';

$string['about'] = 'About';
$string['access'] = 'Access';
$string['accesscantbeused'] = 'Access override not saved. The chosen pages access (Secret URL) cannot be used for multiple pages.';
$string['accessoverride'] = 'Access override';
$string['accesssaved'] = 'Collection access saved successfully.';
$string['accessignored'] = 'Some secret URL access types were ignored.';
$string['add'] = 'Add';
$string['addviews'] = 'Add pages';
$string['addviewstocollection'] = 'Add pages to collection';
$string['autocopytemplate'] = 'Current auto-copied template';
$string['autocopytemplatedesc'] = 'Set to \'Yes\' if you want this collection to be copied into every new account (and also based on a cron job if you configure such). Automatically, sharing permissions will be set to allow for the copying of the collection. You should also set \'Template\' to \'Yes\'.';
$string['back'] = 'Back';
$string['cantlistgroupcollections'] = 'You are not allowed to list group collections.';
$string['cantlistinstitutioncollections'] = 'You are not allowed to list institution collections.';
$string['canteditgroupcollections'] = 'You are not allowed to edit group collections.';
$string['canteditinstitutioncollections'] = 'You are not allowed to edit institution collections.';
$string['canteditcollection'] = 'You are not allowed to edit this collection.';
$string['cantcreatecollection'] = 'You are not allowed to create this collection.';
$string['cantdeletecollection'] = 'You cannot delete this collection.';
$string['canteditdontown'] = 'You cannot edit this collection because you do not own it.';
$string['canteditsubmitted'] = 'You cannot edit this collection because it has been submitted for assessment to %s. You will have to wait until it is released.';
$string['collection'] = 'collection';
$string['Collection'] = 'Collection';
$string['collections'] = 'collections';
$string['Collections'] = 'Collections';
$string['groupcollections'] = 'Group collections';
$string['institutioncollections'] = 'Institution collections';
$string['sitecollections'] = 'Site collections';
$string['collectionaccess'] = 'Collection access';
$string['collectionaccessrules'] = 'Collection access rules';
$string['collectionaccesseditedsuccessfully'] = 'Collection access saved successfully';
$string['collectioneditaccess'] = 'You are editing access for %d pages in this collection.';
$string['collectionconfirmdelete1'] = '<p>Do you really want to delete this collection? It will also delete all pages within this collection. If you only want to delete individual pages, abort this action and delete the pages in question themselves.</p>
<p>Please consider creating a backup by <a href="%sexport/index.php?collection=%s">exporting</a> your portfolio before you delete anything.</p>
<p><strong>Note:</strong> If you decide to delete this collection, all your files and journal entries that you linked in the pages will still be available. However, any text blocks and comments placed on the pages will be deleted along with the pages.</p>';
$string['collectioncreatedsuccessfully'] = 'Collection created successfully.';
$string['collectioncreatedsuccessfullyshare'] = 'Your collection has been created successfully. Share your collection with others using the access links below.';
$string['collectiondeleted'] = 'Collection deleted successfully.';
$string['collectiondescription'] = 'A collection is a set of pages that are linked to one another and have the same access permissions. You can create as many collections as you like, but a page cannot appear in more than one collection.';
$string['collectiontitle'] = 'Collection title';
$string['confirmcancelcreatingcollection'] = 'This collection has not been completed. Do you really want to cancel?';
$string['collectionsaved'] = 'Collection saved successfully.';
$string['copyacollection'] = 'Copy a collection';
$string['created'] = 'Created';
$string['deletecollection'] = 'Delete collection';
$string['deletespecifiedcollection'] = 'Delete collection \'%s\'';
$string['deletingcollection'] = 'Deleting collection';
$string['deleteview'] = 'Remove page from collection';
$string['description'] = 'Collection description';
$string['collectiondragupdate1'] = 'Drag page names from the \'Add pages to collection\' box or tick the check boxes and click the \'Add pages\' button to move pages to \'Pages already in collection\'.<br>
You can drag page names or use the arrow buttons to re-order pages in the \'Pages already in collection\' area.';
$string['viewsincollection'] = 'Pages already in collection';
$string['editcollection'] = 'Edit collection';
$string['editingcollection'] = 'Editing collection';
$string['edittitleanddesc'] = 'Edit title and description';
$string['editviews'] = 'Edit collection pages';
$string['editviewaccess'] = 'Edit page access';
$string['editaccess'] = 'Edit collection access';
$string['emptycollectionnoeditaccess'] = 'You cannot edit access to empty collections. Add some pages first.';
$string['emptycollection'] = 'Empty collection';
$string['manage'] = 'Manage';
$string['manageviews'] = 'Manage pages';
$string['manageviewsspecific'] = 'Manage pages in "%s"';
$string['name'] = 'Collection name';
$string['needtoselectaview'] = 'You need to select a page to add to the collection.';
$string['newcollection'] = 'New collection';
$string['nexteditaccess'] = 'Next: Edit access';
$string['nocollections'] = 'No collections yet.';
$string['nocollectionsaddone'] = 'No collections yet. %sAdd one%s.';
$string['nooverride'] = 'No override';
$string['noviewsavailable'] = 'No pages are available to add.';
$string['noviewsincollection'] = 'No pages in collection.';
$string['noviewsaddsome'] = 'No pages in collection. %sAdd some%s.';
$string['noviews'] = 'No pages.';
$string['overrideaccess'] = 'Override access';
$string['onlyactivetemplatewarning'] = 'This is the only auto-copied template in this institution. By changing this setting, there will not be a template to copy into new accounts (and based on a cron job if such is configured) automatically.';
$string['updatingautocopytemplatewarning'] = 'Only one collection can be the active automatically copied template for an institution. By setting this collection to be the auto-copied template for the institution "%s", the current auto-copied collection "%s" will be set to inactive. It will not be shared with the institution any more.';
$string['portfoliocompletion'] = 'Portfolio completion';
$string['potentialviews'] = 'Potential pages';
$string['saveapply'] = 'Apply and save';
$string['savecollection'] = 'Save collection';
$string['smartevidence'] = 'SmartEvidence';
$string['smartevidencedesc'] = 'Administer SmartEvidence frameworks';
$string['template'] = 'Template';
$string['templatedesc'] = 'Set to \'Yes\' if you want all pages within this collection to be switched to a template without needing to do that on each page. Pages added to the template will also be turned into a template page automatically. The removing of blocks is prevented automatically, but can be revoked.';
$string['update'] = 'Update';
$string['usecollectionname'] = 'Use collection name?';
$string['usecollectionnamedesc'] = 'If you wish to use the collection name instead of the block title, leave this checked.';
$string['numviewsincollection'] = array(
    '%s page in collection',
    '%s pages in collection',
);
$string['viewsaddedtocollection1'] = array(
    '%s page added to collection.',
    '%s pages added to collection.',
);
$string['viewsaddedtocollection1different'] = array(
    '%s page added to collection. The shared access has changed for all pages in the collection.',
    '%s pages added to collection. The shared access has changed for all pages in the collection.',
);
$string['viewsaddedaccesschanged'] = 'Access permissions have changed for the following pages:';
$string['viewaddedsecreturl'] = 'Available publicly via secret URL';
$string['viewcollection'] = 'View collection details';
$string['viewcount'] = 'Pages';
$string['viewremovedsuccessfully'] = 'Page removed successfully.';
$string['viewnavigation'] = 'Page navigation bar';
$string['viewnavigationdesc'] = 'Add a horizontal navigation bar to every page in this collection by default.';
$string['viewstobeadded'] = 'Pages to be added';
$string['viewconfirmremove'] = 'Are you sure you wish to remove this page from the collection?';
$string['collectioncopywouldexceedquota'] = 'Copying this collection would exceed your file quota.';

$string['copiedparticle'] = 'Copied %s';
$string['andparticle'] = 'and %s';
$string['countpages'] = array (
    0 => '%d page',
    1 => '%d pages'
);
$string['countblocks'] = array (
    0 => '%d block',
    1 => '%d blocks'
);
$string['countartefacts'] = array (
    0 => '%d artefact',
    1 => '%d artefacts'
);
$string['fromtemplate'] = 'from "%s"';

$string['copiedblogpoststonewjournal'] = 'Copied journal posts have been put into a new separate journal.';
$string['by'] = 'by';
$string['copycollection'] = 'Copy collection';
$string['youhavencollections'] = array(
    'You have 1 collection.',
    'You have %d collections.',
);
$string['youhavenocollections'] = 'You have no collections.';
$string['collectionssharedtogroup'] = 'Collections shared with this group';
$string['nosharedcollectionsyet'] = 'There are no collections shared with this group yet';
$string['nextpage'] = 'Next page';
$string['prevpage'] = 'Previous page';
$string['viewingpage'] = 'You are on page ';
$string['navtopage'] = 'Navigate to page:';
$string['pageincollectiontitle'] = 'This page is part of the collection \'%s\'.';

// progress completion page
$string['overallcompletion'] = 'Overall completion of sign-off and verification';
$string['progresscompletiondesc'] = "Add the 'Portfolio completion' page at the start of this collection.";
$string['signedoff'] = 'Signed off';
$string['needssignedoff'] = 'Needs to be signed off';
$string['verified'] = 'Verified';
$string['needsverified'] = 'Needs to be verified';
$string['verification'] = 'Verification';
$string['progresspage'] = 'Portfolio completion';
$string['progresspagedescription'] = 'Set up the default layout for the portfolio completion page for a collection.';

$string['progressportfolios'] = 'Portfolio count';
$string['progressverifiers'] = 'Reviewer percentage';

//Verification checkbox sr-only text
$string['sharedviewverifiedunchecked'] = '%s by %s is not reviewed';
$string['sharedviewverifiedchecked'] = '%s by %s has been reviewed';
// access notifications
$string['userhasremovedaccesssubject'] = '%s has removed their access to "%s"';
$string['ownerhasremovedaccesssubject'] = '%s has removed your access to "%s"';
$string['revokedbyowner'] = 'Owner has revoked access';
$string['youhavebeengivenaccess'] = "You have been given access to the following";

// Statement block reset information
$string['undoverification'] = 'Reset statement';
$string['undoverificationformtitle'] = 'Reset statement';
$string['undoverificationdescription'] = 'Select one of your statements that you want to reset. By continuing, whomever is allowed to reset your statement will be notified. The approval will be removed once they action the request, and you can approve it again.';
$string['reasonforundo'] = 'Reason for resetting the statement:';
$string['notifyappointed'] = 'Request reset';
$string['undoreportsent'] = 'Reset request sent.';
$string['undoreportnotsent'] = 'Reset request not sent. There is nobody to whom to send the request. Please contact the administrator.';
$string['verifiedbyme'] = 'My statements';
$string['verifiedbymedescription'] = 'Choose a statement to reset. Then provide in a reason for this change.';
$string['undoreportsubject'] = 'Request to reset portfolio statement';
$string['undoreportmessage'] = 'The statement "%s" in portfolio "%s" has been confirmed. However, the reviewer, %s, wishes to reset it.

They gave the following reason:

%s';

$string['accessdeniedundo'] = 'The statement has already been reset. You do not have access to the portfolio any longer.';
$string['undonesubject'] = 'Review statement reset request was actioned';
$string['undonemessage'] = '%s reset the statement "%s" in the portfolio "%s" as requested by the person who originally confirmed the statement.';
//Portfolio review primary statement checkbox sr-only text
$string['sharedviewverifiedunchecked'] = '%s by %s is not yet reviewed';
$string['sharedviewverifiedchecked'] = '%s by %s is reviewed';
// access notifications
$string['userhasremovedaccesssubject'] = '%s has removed their access to "%s"';
$string['ownerhasremovedaccesssubject'] = '%s has revoked your access to "%s"';
$string['revokedbyowner'] = 'Owner has revoked access';
$string['youhavebeengivenaccess'] = "You have been given access to the following";
$string['userhasremovedaccess'] = '%s does not have access to the portfolio "%s" any more.';
$string['userrevokereason'] = "They gave the following reason:";
$string['removemyaccess'] = "Remove my access";
$string['ownerhasremovedaccess'] = '%s revoked your access to their portfolio "%s".';
$string['completionpercentage'] = "Completion";
// Revoke my access modal
$string['revokemyaccessformtitle'] = "Remove portfolio access";
$string['revokemyaccessdescription'] = "By continuing, you will remove your access to this entire portfolio. You will not be able to view it any more or engage with it. The owner of this portfolio will receive a notification that you no longer have access.
<br>You can add an additional message.";
$string['revokemyaccessreasontextbox'] ="Message";
$string['removemyaccesssubmit'] = "Continue";
$string['revokemyaccessconfirm'] = "You will lose access to: ";
$string['revokemyaccessreason'] = "Message";
$string['revokemessagesent'] = "Access revoked";
$string['removemyaccessiconaria'] = 'Remove my access to "%s" owned by %s';

// Tool tips for the shared page
$string['progressnotavailable'] = 'Progress completion for the portfolio "%s" by %s cannot yet be displayed';
$string['verifiednotavailable'] = 'You cannot confirm the primary statement for the portfolio "%s" by %s';
$string['verifiednotavailabledate'] = 'Statement for the portfolio "%s" by %s cannot be confirmed before %s';
$string['verificationtobedone'] = 'Confirm statement for the portfolio "%s" by %s';
$string['verificationdone'] = 'Confirmed statement for the portfolio "%s" by %s';
$string['removeaccess'] = 'Remove my access from the portfolio "%s" by %s';

$string['lockedcollection'] = 'Locked until %s';
