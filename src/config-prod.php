<?php
// database configuration parameters
$conn = array(
    'dbname' => 'id19646179_poker',
    'user' => 'id19646179_pokerdb',
    'password' => 'C#+1s/J8ilJ]Bt]M',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);

// This is used to create the join link
$host = "https://localhost";

$cardSets = [
    // T-shirt Size
    ['S', 'M', '(M/L)', 'L', 'XL', '?'],
    // SWAT
    ['1','2','3','4','5','6','?','&#9749;']
];


// Src tree for documentation linking from page
$src = "https://github.com/Toxantron/scrumonline/tree/master";

// Active ticketing plugins of the page
$plugins = [
    // Plugin to load issues from github
    'GitHub',
    // Plugin to load issues from JIRA
    'JIRA',
    // Plugin to load issues from Gitlab
    'Gitlab'
];

// Configuration for the server side JIRA controller
$jiraConfiguration = [
    'base_url' => '',
    'username' => '',
    'password' => '',
    'project' => '',
    'jql' => '',
];

//Configuration for Enable/Disable style elements
$layout_switch = [
    'enable_fork_banner' => false
];
