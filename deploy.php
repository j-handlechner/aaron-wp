<?php
namespace Deployer;

require 'recipe/wordpress.php';

// Config

set('repository', 'https://github.com/j-handlechner/aaron-wp.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('193.170.119.191')
    ->set('remote_user', 'admin')
    ->set('port', 5412)
    ->set('deploy_path', '~/aaron-wp');

// Hooks

after('deploy:failed', 'deploy:unlock');
