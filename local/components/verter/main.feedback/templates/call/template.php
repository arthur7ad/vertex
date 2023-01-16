<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<div>
                        <div class="mes">
                        <?if(!empty($arResult["ERROR_MESSAGE"]))
                        {
                            foreach($arResult["ERROR_MESSAGE"] as $v)
                                ShowError($v);
                        }
                        if($arResult["OK_MESSAGE"] <> '')
                        {
                            ?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
                        }
                        ?>
                        </div>
                        <form action="<?=POST_FORM_ACTION_URI?>" method="POST">
                            <?=bitrix_sessid_post()?>
                            <input class="mb-3" type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>" placeholder="Имя" required>

                            <input class="mb-3" type="tel" name="user_phone" value="<?=$arResult["AUTHOR_PHONE"]?>" placeholder="Номер телефона +7" required>

                                <div class="chat-mess-text">
                                    <?=GetMessage("MFT_MESSAGE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
                                </div>
                                <textarea name="MESSAGE" placeholder="Опишите ваш вопрос"><?=$arResult["MESSAGE"]?></textarea>

                             <?if($arParams["USE_CAPTCHA"] == "Y"):?>
                                <div class="mf-captcha">
                                    <div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
                                    <input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
                                    <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
                                    <div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
                                    <input type="text" name="captcha_word" size="30" maxlength="50" value="">
                                </div>
                            <?endif;?>
                            <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
                            <div class="orchat"><a href="javascript:void(0)" onclick="b24Chat();">или напишите нам в чат</a></div>

                            <input type="submit" name="submit" class="btn-2 d-block mx-auto" value="Заказать звонок">
                            <p class="call-mes text-center mt-4">Или позвоните нам <span class="color-numb">+7 495 018 41 05</span></p>
                            <p class="ok-mes text-center mt-4">Я согласен на обработку персональных данных и получение информационных сообщений</p>

                        </form>
                    </div>


