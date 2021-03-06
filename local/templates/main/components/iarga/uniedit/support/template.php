<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
</div>
</section>
<section class="section-personal bg-white">
	<div class="container container--min">
		<div class="personal-data">
            <form method="post" action="/local/inc/ajax/support.php" class="form uniform">
                <div class="form-row">
                    <div class="form-col form-col--6">
                        <label class="label">
                            <input type="text" class="input input--required" name="name" placeholder="Ваше имя" >
                        </label>
                    </div>
                    <div class="form-col form-col--6">
                        <label class="label">
                            <input type="text" class="input input--required" name="phone" data-inputmask placeholder="Телефон" >
                        </label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-col form-col--12">
                        <label class="label">
                            <input type="text" class="input" name="text" placeholder="Текст сообщения">
                        </label>
                    </div>
                </div>
                <div class="form-btns">
                    <div class="modal__checkbox">
                        <div class="checkbox">
                            <label class="checkbox__label">
                                <input class="checkbox__input" type="checkbox" data-input-required="checkbox">
                                <div class="checkbox__emulator">
                                    <svg class="i-icon">
                                        <use xlink:href="#icon-checked"></use>
                                    </svg>
                                </div>
                                <div class="checkbox__text">
                                    <span>
                                        Нажимая кнопку “Отправить” я соглашаюсь на обработку моих персональных данных в соответствии с
                                    </span>
                                    <a href="/privacy/" target="_blank">Условиями</a>
                                </div>
                            </label>
                        </div>
                    </div>                
                    <input type="submit" class="btn" value="Отправить">
                </div>
                <p class="error"></p>
            </form>
		</div>