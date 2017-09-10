function getContent()
{
    $.ajax(
        {
            type: 'GET',
            // Type path to server.php here
            url: 'http://location/server.php',
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
