<?php

require('src/LassoLead.php');
require('src/RegistrantSubmitter.php');

/* These variables should only be attached on the server side
 * and should not be hidden fields on the registration form
 * Note that $apiKey is where the Lasso UID is placed.
 */
$clientId  = '1111';
$projectId = '1001';
$apiKey = '1x1x1';

if (empty($clientId) || empty($projectId) || empty($apiKey)){
	throw new Exception('Required parameters are not set, please
						check that your $clientId, $projectId and $apiKey are
						configured correctly');
}

/* Constructing and submitting a lead:
 * Map form fields to the lead object and submit
 */
$lead = new LassoLead(
	$_REQUEST['FirstName'],
    $_REQUEST['LastName'],
    $projectId,
    $clientId
);

$lead->addPhone($_REQUEST['Phone']);

$lead->addEmail($_REQUEST['Email']);

$lead->addAddress(
	$_REQUEST['Address'],
    $_REQUEST['City'],
    $_REQUEST['Province'],
    $_REQUEST['PostalCode'],
    $_REQUEST['Country']
);

$lead->setNameTitle($_REQUEST['NameTitle']);

$lead->setCompany($_REQUEST['Company']);

$lead->addNote($_REQUEST['Comments']);

$lead->setRating('N');

$lead->setSourceType('Online Registration');

$lead->setSecondarySourceType('Sample Registration Form');

$lead->setFollowUpProcess('30 Day Follow-up');

$lead->setRotationId(1234);

/* Questions (select answer)
 *
 * For any number of questions on the form where answers are selected
 */
foreach($_REQUEST['Questions'] as $questionId => $value){
	 $lead->answerQuestionById($questionId, $value);
}

/* Questions (text answer)
 *
 * Only for questions that require text input answers
 * $lead->answerQuestionByIdForText($questionId,$_REQUEST['Questions'][$questionId]);
 */
$lead->answerQuestionByIdForText(5555,$_REQUEST['Questions'][5555]);

/* Auto-reply Email
 *
 * Value for $templateId should be the ID of the email template in Lasso
 * $lead->sendAutoReplyThankYouEmail($templateId);
 */
$lead->sendAutoReplyThankYouEmail('1234');

/* Website Tracking
 *
 * Value for $domainAccountId can be found in the tracking code provided by Lasso
 * $lead->setWebsiteTracking ($domainAccountId, $_REQUEST['guid']);
 */
$lead->setWebsiteTracking('LAS-123456-01', $_REQUEST['guid']);

$lead->sendAssignmentNotification();

$submitter = new RegistrantSubmitter();
$curl      = $submitter->submit('https://api.lassocrm.com/registrants', $lead, $apiKey);
