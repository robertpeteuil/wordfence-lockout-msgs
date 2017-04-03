# Custom Lockout Messages for the WordPress Wordfence plugin
### Lockout and Block messages designed to maximize security by providing minimal information to attackers

[![GitHub issues](https://img.shields.io/github/issues/robertpeteuil/wordfence-lockout-msgs.svg)](https://github.com/robertpeteuil/wordfence-lockout-msgs)
[![GitHub release](https://img.shields.io/github/release/robertpeteuil/wordfence-lockout-msgs.svg?colorB=2067b8)](https://github.com/robertpeteuil/wordfence-lockout-msgs)
[![platform](https://img.shields.io/badge/platform-WordPress-21759b.svg?style=flat-square)]()
[![plugin](https://img.shields.io/badge/plugin-Wordfence-21759b.svg?style=flat-square)]()
[![lang](https://img.shields.io/badge/language-PHP-4F5D95.svg?style=flat-square)]()
[![license](https://img.shields.io/github/license/robertpeteuil/wordfence-lockout-msgs.svg?colorB=2067b8)](https://github.com/robertpeteuil/wordfence-lockout-msgs)

These files replace the standard **locked out** and **blocked** messages with the intent of providing minimal information to an attacker.  The default messages break many security best practices in the interest of user friendliness, which is immeterial for websites that only have a handful of people logging in.

A detailed list of the security issues with the default messages, and screenshots of the default messages are included at the bottom of this README.

### New "Locked Out" Message 
![](https://cloud.githubusercontent.com/assets/1554603/24621152/6053830e-1855-11e7-8811-6c20cfaf8f1d.png)

### New "Blocked" Message 
![](https://cloud.githubusercontent.com/assets/1554603/24621160/68eacba8-1855-11e7-8765-aaa83ba58ea2.png)

### Warnings:

- The new lockout and blocked messages included in this repo are **not user friendly**  
- These files must be re-copied after each Wordfence update, as the update will re-install the default files
- They are not recommended for use on sites that:
  - Have many users logging in with username/password combinations 
  - Users frequently forget their passwords to your website

### Manual Installation:

- connect to your server via SFTP
- cd to `/wp-content/plugins/wordfence/lib`
- backup the original files: `wf503.php` and `wfLockedOut.php`
- copy the files included in this repo into `/wp-content/plugins/wordfence/lib`, overwriting the existing files
- these files must be re-copied after each Wordfence update, as the update will re-install the default files

---

### Security Issues with Default Messages (screenshots below):
- Both messages state tell an attacker that they've be blocked by a security product called "Wordfence"
  - **issue:**  provides a hacker with an explanation as to why they cannot connect
  - **issue:**  provides a hacker with the exact name of the security product in use
- Both messages state that the block/lock is temporary (even if it isn't)
  - The messages even encourage an attacker to "try back in a short while" or "try again in a few minutes"
    - **issue:**  tells a hacker that their block or lockout is not permanent (even though it may be)
    - **issue2:** encourages a hacker to come back and try to hack again 
    - if they are a know bad IP - we want them to think the website is down, or that they are "perma-banned"
- The Lockout Message (which blocks access to the login page) has these additional issues:
  - Specifies the specific reason they are locked out (it's even colored so they can find it easily)
    - **issue:**  provides a hacker with information on what they need to try to avoid
  - Extensive text describing wordfence functionality which even mentions "advanced blocking"
    - **issue:**  provides a hacker with information on how the security product works
  - Text encouraging those having trouble (hackers) to "simply disable the Wordfence advanced blocking"
    - **issue:**  provides a hacker with knowledge that the security system can be disabled
  - It includes a URL to the FAQ on the Wordfence website 
    - **issue:**  provides a hacker with detailed specific product information on the wordfence website 
    - **issue2:** the wordfence website contains complete product documentation and the support forums
    - **issue3:** the support forums are a treasure trove of information on problems & issues users are having

### Reference: the default Wordfence Login-Lockout Message:
![](https://cloud.githubusercontent.com/assets/1554603/24621170/6f309272-1855-11e7-80b2-d5e3d4588497.png)

### Reference: the default Wordfence Blocked Message:
![](https://cloud.githubusercontent.com/assets/1554603/24621176/73cad162-1855-11e7-955a-4ab94b416989.png)
