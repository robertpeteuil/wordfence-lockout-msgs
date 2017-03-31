# Custom Lockout Messages for the WordPress Wordfence plugin
### Lockout and Block messages designed to maximize security by providing minimal information to attackers

[![GitHub issues](https://img.shields.io/github/issues/robertpeteuil/wordfence-lockout-msgs.svg)](https://github.com/robertpeteuil/wordfence-lockout-msgs)
[![GitHub release](https://img.shields.io/github/release/robertpeteuil/wordfence-lockout-msgs.svg?colorB=2067b8)](https://github.com/robertpeteuil/wordfence-lockout-msgs)
[![platform](https://img.shields.io/badge/platform-wordpress-21759b.svg?style=flat-square)]()
[![lang](https://img.shields.io/badge/language-PHP-4F5D95.svg?style=flat-square)]()
[![license](https://img.shields.io/github/license/robertpeteuil/wordfence-lockout-msgs?colorB=2067b8)](https://github.com/robertpeteuil/wordfence-lockout-msgs)

These files replace the standard **locked out** and **blocked** messages with the intent of providing minimal information to an attacker

#### Warnings

- The lockout and blocked messages displayed by these file are **not** user friendly (by design)  
- If you have to ask why you should use these modified scripts, they are likely **not** intended for you.
- Additionally, they should not be used in situations where:
  - Large numbers of users frequently log into your website
  - Users frequently forget their passwords to your website


#### Manual Installation:

- connect to your server via SFTP
- cd to `/wp-content/plugins/wordfence/lib` 
- backup the original files: `wf503.php` and `wfLockedOut.php`
- copy the files included in this repo into `/wp-content/plugins/wordfence/lib`, overwriting the existing files
- these files must be re-copied after each Wordfence update, as the update will re-install the default files
