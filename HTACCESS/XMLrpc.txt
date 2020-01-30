# Block WordPress xmlrpc.php requests
<Files xmlrpc.php>

order deny,allow

deny from all

</Files>