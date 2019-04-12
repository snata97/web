	<FORM name="guest_book" method="post" action="save_comment">
			<fieldset class="contact">
				<legend>Контактная информация</legend>
				<p><label>ФИО</label><input name="fio_guest_book" id="fio_quest_book" type="text" size="50" onBlur="Check_FIO(this),Check()" onclick="this.select()"></p>
				<p><label>E-mail</label><input name="email_guest_book" id="email_quest_book" type="email" size="50" onBlur="Check_Email(this),Check()" onclick="this.select()"></p>
			</fieldset>
			<fieldset class="message">
				<legend>Поле ввода отзыва</legend>
					<textarea name="comment_guest_book" id="comment_guest_book" rows="5" cols="50" onBlur="Check_Text(this),Check()" onclick="this.select()" ></textarea>
			</fieldset>
		<p>
			<input type="submit" id="submit" value="Отправить">
			<input type="button" class="js-button-campaign" value="Очистить">
		</p>
	</FORM>
    <?php
        $f=file_get_contents("messages.inc");
        $comments = explode(";",$f);
        $comments_reverse = array_reverse($comments);
        echo "<div class='tables'>";
        echo "<table>";
            echo "<TR>";
                echo "<TD>";
                    echo "дата";
                echo "</TD>";
                echo "<TD>";
                    echo "ФИО";
                echo "</TD>";
                echo "<TD>";
                    echo "email";
                echo "</TD>";
                echo "<TD>";
                    echo "отзыв";
                echo "</TD>";
            echo "</TR>";
        foreach($comments_reverse as $value){
            $comment=explode(",",$value);
            if(count($comment)!=4)
            {
                continue;
            }
            else{
                echo "<TR>";
                    echo "<TD>";
                        echo "$comment[0]";
				    echo "</TD>";
                    echo "<TD>";
                        echo "$comment[1]";
                    echo "</TD>";
                    echo "<TD>";
                        echo "$comment[2]";
                    echo "</TD>";
                    echo "<TD>";
                        echo "$comment[3]";
                    echo "</TD>";
			    echo "</TR>";
            }

        }
        echo "</table></div>"
    ?>