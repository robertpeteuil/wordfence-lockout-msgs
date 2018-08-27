# Custom Lockout Messages for WordPress Wordfence plugin (ARCHIVED)
## This repo is archived due to changes in file location and function

[![platform](https://img.shields.io/badge/platform-WordPress-21759b.svg?style=flat-square)]()
[![plugin](https://img.shields.io/badge/plugin-Wordfence-21759b.svg?style=flat-square)]()
[![lang](https://img.shields.io/badge/language-PHP-4F5D95.svg?style=flat-square)]()
[![license](https://img.shields.io/github/license/robertpeteuil/wordfence-lockout-msgs.svg?colorB=2067b8)](https://github.com/robertpeteuil/wordfence-lockout-msgs)

These files replace the standard **locked out** and **blocked** messages with the intent of providing minimal information to an attacker.  The default messages break many security best practices in the interest of user friendliness, which is immeterial for websites that only have a handful of people logging in.

### New "Locked Out" Message 
![](https://cloud.githubusercontent.com/assets/1554603/24621152/6053830e-1855-11e7-8811-6c20cfaf8f1d.png)

### New "Blocked" Message 
![](https://cloud.githubusercontent.com/assets/1554603/24621160/68eacba8-1855-11e7-8765-aaa83ba58ea2.png)

### Warnings:

- The new lockout and blocked messages included in this repo are **not user friendly**  
- These files must be re-copied after each Wordfence update, as the update will re-install the default files
- They are not recommended for use on sites that:
  - Have many users logging in with username/password combinations 
  - Have users who frequently forget their passwords

### Manual Installation:

- connect to your server via SFTP
- cd to `/wp-content/plugins/wordfence/lib`
- backup the original files: `wf503.php` and `wfLockedOut.php`
- copy the files in this repo to `/wp-content/plugins/wordfence/lib`, and overwrite the existing files
- NOTE: these files must be re-copied after each Wordfence update, as the update will re-install the default files

### Reference: the default Wordfence Login-Lockout Message:
![](https://cloud.githubusercontent.com/assets/1554603/24621170/6f309272-1855-11e7-80b2-d5e3d4588497.png)

### Reference: the default Wordfence Blocked Message:
![](https://cloud.githubusercontent.com/assets/1554603/24621176/73cad162-1855-11e7-955a-4ab94b416989.png)
