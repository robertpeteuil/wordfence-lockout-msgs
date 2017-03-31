### Custom lockout and block messages for wordfence (high security versions)  

These replace the standard **locked out** and **blocked** messages with the intent of providing minimal information to an attacker

#### Warnings

- They are **not** user friendly (by design)  
- If you have to ask why you should use these modified scripts, they are likely **not** intended for you.
- Additionally, they should not be used in situations where:
  - Many users log into your website
  - Users frequently forget their passwords to your website


#### To use:

- Connect to your server via SFTP
- cd to `/wp-content/plugins/wordfence/lib` and backup the original files: `wf503.php` and `wfLockedOut.php`
- overwriting the existing files with the versions below ( in `/wp-content/plugins/wordfence/lib`  )
- you need to re-copy these after each Wordfence update
