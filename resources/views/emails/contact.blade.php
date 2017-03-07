<style>
    body{font-family: Arial, Helvetica, sans-serif;}
    .container{padding: 5%}
    .back{background-color: #FFFFFF;padding: 2%;border: 1px solid #2A83C5}
    table{width: 100%;padding: 2%}
</style>
<div class="container">
    <div class="back">
        <table>
            <tr>
                <td>
                    <img src="http://allcast.pw/template/images/logo_all_cast.png" alt="" style="max-height: 50px;max-width: 100px;margin-bottom: 15px">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Name User: </strong><span> {{ $user['name'] }}</span><br>
                    <strong>Email User: </strong><span> {{ $user['email'] }}</span>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Subject: </strong><span> {{ $user['subject'] }}</span><br>
                    <strong>Message: </strong><span> {{ $user['message'] }}</span>
                </td>
            </tr>
            <tr>
                <td width="100%" height="25"></td>
            </tr>
        </table>
    </div>
</div>