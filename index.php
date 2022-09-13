<?php 

# Require the autoload classes
require('vendor/autoload.php');

# Initialize the Smarty
$smarty = new Smarty();

# Dump data
$dump = [
    [
        'title' => 'James',
        'age' => 25,
    ],
    [
        'title' => 'Paul',
        'age' => 15,
    ],
    [
        'title' => 'Trevor',
        'age' => 32,
    ]
];

# Settings for the smarty template
$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');
$smarty->setCacheDir('cache/');
$smarty->setConfigDir('config/');

# Assign the variables
$smarty->assign('title', 'Jussinet');
$smarty->assign('content', 'Hello, this is the Smarty page');
$smarty->assign('collection', $dump);

# Display the page
$smarty->display('home.tpl');