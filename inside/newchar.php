<div class="createPlayerCont">
    <h3>Welcome $namn</h3>
    <p>Name your character</p>
    <form class="createPlayerForm" action="../backlogic/createPlayer.php" method="post" autocomplete="off">
        <label for="charname">
            <i class="fas fa-user"></i>
        </label>
        <input type="text" name="charname" placeholder="Character name" id="charname" required />
        <p>Please choose your avatar:</p>
        <div class="radioMainCont">
            <div class="radioCont">
                <div class="radioImage" id="radio1"></div>
                <input type="radio" id="char_2" name="avatar" value="char_2" />
            </div>
            <div class="radioCont">
                <div class="radioImage" id="radio2"></div>
                <input type="radio" id="char_3" name="avatar" value="char_3" />
            </div>
            <div class="radioCont">
                <div class="radioImage" id="radio3"></div>
                <input type="radio" id="char_4" name="avatar" value="char_4" />
            </div>
        </div>
        <div></div>
        <div class="countryCont">
            <select name="country" id="country">
                <option value="1">north</option>
                <option value="2">east</option>
                <option value="3">west</option>
            </select>
        </div>
        <br /><br />
        <input type="submit" value="Skapa" />
    </form>
</div>