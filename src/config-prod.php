<?php
// database configuration parameters
$conn = array(
    'dbname' => 'poker',
    'user' => 'root',
    'password' => '92#M41xVQyxz',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);

// This is used to create the join link
$host = "http://kpp.tddbuddy.com";

$cardSets = [
    // SWAT
    ['1','2','3','4','5','6','?','&#9749;'],
    // T-shirt Size
    ['S', 'M', '(M/L)', 'L', 'XL', '?'],
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
