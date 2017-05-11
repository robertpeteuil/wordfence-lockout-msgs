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

**Updates from support thread** on the [WordPress Forums](https://wordpress.org/support/topic/customizing-block-locked-messages-from-wordpress/)

> **March 2017** - Wordfence Devs likened my desire to stop leaking unecessary information to "security by obscurity", and were even kind enough to send me a link to the Wikipedia article on it.  (note: I'm a paying customer too.)

> **April 2017** - I finally had time to reply to their comments & point out:
> - "Security by obscurity" is the **reliance on secrecy as the main method for security**.  Since I'm running their security product (and many others), how exactly am I relying on secrecy?
> - Explained that there’s a big difference between the **“desire for as much secrecy as possible”**, and **“using secrecy as the primary method of providing security”**.
> - I helpfully included a link to [NIST 800-123: Guide to General Server Security](https://www.nist.gov/publications/guide-general-server-security)


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

---

### Security Issues with Default Messages (screenshots below):
- Both messages are overly long and use a lot of bandwidth if displayed 1000's of time a day
- Both messages state that the block/lock is temporary (even if it isn't)
  - The messages even encourage an attacker to "try back in a short while" or "try again in a few minutes"
    - **issue:**  States that a block or lockout is temporary 
    - if it is a permanently banned IP - it is NOT temporary, and we do NOT want them to try again
    - **issue2:**  Encourages them to to come back and try again
- The Lockout Message (which blocks access to the login page) has these additional issues:
  - Specifies the specific reason they are locked out (it's even colored so they can find it easily)
    - **issue:**  provides a hacker with information on what actions to avoid
  - Extensive text describing wordfence functionality which even mentions "advanced blocking"
    - **issue:**  provides a hacker with information on how the security product works
  - Text encouraging those having trouble (hackers) to "simply disable the Wordfence advanced blocking"
    - **issue:**  provides a hacker with knowledge that the security system can be disabled
  - It includes a URL to the FAQ on the Wordfence website 
    - **issue:**  provides a hacker with detailed specific product information on the wordfence website 
    - **issue2:** the wordfence website contains complete product documentation and the support forums
    - **issue3:** the support forums are a potential treasure trove of information on problems & un-fixed issues

### Reference: the default Wordfence Login-Lockout Message:
![](https://cloud.githubusercontent.com/assets/1554603/24621170/6f309272-1855-11e7-80b2-d5e3d4588497.png)

### Reference: the default Wordfence Blocked Message:
![](https://cloud.githubusercontent.com/assets/1554603/24621176/73cad162-1855-11e7-955a-4ab94b416989.png)
