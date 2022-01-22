
<?php

$apiClient = new ApiClient();
$apiClient->get('http://www.boredapi.com/api/activity/');
$activityDetails = $apiClient->getResponse();
$activityDetails = json_decode($activityDetails, true);
//var_dump($activityDetails);

print 'Activity: '. $activityDetails['activity'];
print '<br>';
print 'Type: ' . $activityDetails['type'];
        
