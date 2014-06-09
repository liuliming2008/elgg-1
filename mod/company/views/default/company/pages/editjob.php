<?php

global $CONFIG;

$job_guid = get_input('job_guid');
$job = get_entity($job_guid);
$company_guid = $job->company_guid;
$company = get_entity($company_guid);

$title = elgg_echo('company:editlisting');
$header = elgg_view('page_elements/title', array('title' => $title));
if ($job && $job->canEdit()) {
    $body = elgg_view('company/forms/editjob', array('entity' => $job, 'user' => elgg_get_logged_in_user_entity(),'company'=>$company));
} else if (!$job && elgg_get_logged_in_user_entity()->getGUID()==$company->owner_guid)  {
    $body = elgg_view('company/forms/editjob', array('user' => elgg_get_logged_in_user_entity(),'company'=>$company));
} else {
    $body = elgg_echo('company:noprivileges');
}
//$body = elgg_view('hypeFramework/wrappers/contentwrapper', array('body' => $body));
//$body = elgg_view_layout('two_column_left_sidebar', $area1, $header . $body, $area3);

$body = elgg_view_layout('two_column_left_sidebar', array(
	'content' => $body,
  'sidebar' => '',
	'title' => $title,
	'filter' => '',
));

echo elgg_view_page($title, $body);
?>
