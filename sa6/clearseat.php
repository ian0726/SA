<form action="sendorder.php" method="post">
    
    <center>
    <div>
    <h5 class="chooseatnum">桌號(必選)</h5>
        <div class='form-check-table overflow-auto'>
            <select class="choosebtn" name='tablenum' required>
            <option value='' hidden selected disabled>請選擇桌號</option>
            <option value='外帶'>外帶</option>
            <option value='單人1桌'>單人1桌</option>
            <option value='單人2桌'>單人2桌</option>
            <option value='單人3桌'>單人3桌</option>
            <option value='單人4桌'>單人4桌</option>
            <option value='單人5桌'>單人5桌</option>
            <option value='單人6桌'>單人6桌</option>
            <option value='單人7桌'>單人7桌</option>
            <option value='單人8桌'>單人8桌</option>
            <option value='單人9桌'>單人9桌</option>
            <option value='單人10桌'>單人10桌</option>
            <option value='單人11桌'>單人11桌</option>
            <option value='單人12桌'>單人12桌</option>
            <option value='雙人13桌'>雙人13桌</option>
            <option value='雙人14桌'>雙人14桌</option>
            <option value='雙人15桌'>雙人15桌</option>
            <option value='雙人16桌'>雙人16桌</option>
            <option value='雙人17桌'>雙人17桌</option>
            <option value='雙人18桌'>雙人18桌</option>
            <option value='雙人19桌'>雙人19桌</option>
            <option value='雙人20桌'>雙人20桌</option>
            <option value='雙人21桌'>雙人21桌</option>
            <option value='雙人22桌'>雙人22桌</option>
            <option value='雙人23桌'>雙人23桌</option>
            <option value='雙人24桌'>雙人24桌</option>
            <option value='沙發25桌'>沙發25桌</option>
            <option value='沙發26桌'>沙發26桌</option>
            </select>
        </div>
    </div>
    <div>
        <strong>小計：$<?php echo $sum?></strong>
    </div>
    <br>
    <div>
        <a href="menu.php" ><button type="button" class="btn-orderagain"><p>繼續加點</p></button></a>
        <input type="submit" class="btn-finish" value="完成訂單">
    </div>
    </center>
    </form>