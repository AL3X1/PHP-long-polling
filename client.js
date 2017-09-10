function getContent()
{
    $.ajax(
        {
            type: 'GET',
            // Your url
            url: 'http://localhost/sockets/server.php',
            success: function(data){
                // div with id "result"
                $('#result').html(data);
                getContent();
            }
        }
    );
}

$(function() {
    getContent();
});
