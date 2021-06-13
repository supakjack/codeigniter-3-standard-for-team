<h1> <?= $title ?> </h1>
<!-- start table user -->
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">username</th>
            <th scope="col">password</th>
            <th scope="col">status</th>
        </tr>
    </thead>
    <tbody class="append_users">
        <!-- append area -->
    </tbody>
</table>
<!-- end table user -->
<script>
    $(document).ready(function() {
        var settings = {
            "url": "http://localhost/www/codeigniter-3-standard-for-team/index.php/Users/get_user",
            "method": "POST",
        };
        $.ajax(settings).done(function(response) {
            response.data.result.map(user => {
                console.log(user);
                $('.append_users').append(`
                <tr>
                    <th scope="row">${ user.user_id  }</th>
                    <td>${ user.user_username}</td>
                    <td>${ user.user_password}</td>
                    <td>${ user.user_status}</td>
                </tr>
                `);
            })
        });
    });
</script>