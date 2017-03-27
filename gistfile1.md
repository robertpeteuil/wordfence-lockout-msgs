# Custom lockout and block messages for wordfence (high security versions)  

These replace the standard **locked out** and **blocked** messages with the intent of providing minimal useful information to an attacker

### Warnings

- They **are not** user friendly (by design)  
- If you have lots of users who forget their passwords, these are **not** for you.
- If you have to ask why you would want to use these, these are **not** for you.

### To use:

- Connect to your server via SFTP
- cd to `/wp-content/plugins/wordfence/lib` and backup the original files: `wf503.php` and `wfLockedOut.php`
- overwriting the existing files with the versions below ( in `/wp-content/plugins/wordfence/lib`  )
- you need to re-copy these after each Wordfence update