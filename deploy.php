<?php
namespace Deployer;

require 'recipe/typo3.php';

// Config

# Project name
set('application', 'Dengram Alumni');

# Define Git-Repository
set('repository', 'https://$key@github.com/anniexclusive/dengram.git');

# Set maximum releases backup
set('keep_releases', 3);

# DocumentRoot / WebRoot for the TYPO3 installation
set('typo3_webroot', 'public');

# Shared directories
set('shared_dirs', [
   '{{typo3_webroot}}/fileadmin',
   '{{typo3_webroot}}/typo3temp'
]);

# Shared files
set('shared_files', [
   '{{typo3_webroot}}/.htaccess'
]);

# Writeable directories
set('writable_dirs', [
    'config',
    'var',
    '{{typo3_webroot}}/fileadmin',
    '{{typo3_webroot}}/typo3temp',
    '{{typo3_webroot}}/typo3conf'
 ]);

// Hosts

host('104.219.248.15')
    ->set('remote_user', 'xcluzenm')
    ->set('port', 21098)
    ->set('deploy_path', '~/dengram.xclusivea.com')
    ->set('http_user', 'xcluzenm')
    ->set('writable_mode', 'chmod'); // Set writable mode to chmod;

// Hooks

after('deploy:failed', 'deploy:unlock');
