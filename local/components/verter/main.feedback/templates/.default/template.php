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

<section class="sec-callback mb-8">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-9 col-xxl-8 offset-lg-1">
                <div class="row row-cols-md-2 gx-4 gx-lg-5">
                    <div>
                        <h2>Возникли вопросы по агрегации товаров?</h2>
                        <p>Наш менеджер свяжется с вами, и расскажет о функционале адресный склад все или о все вариантах и возможностях и интеграции</p>
                    </div>
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
                            <input class="mb-3" type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>" placeholder="Как к вам обращаться">
                            <input class="mb-3" type="email" name="user_email" value="<?=$arResult["AUTHOR_EMAIl"]?>" placeholder="Электронная почта">
                            <input class="mb-5" type="tel" name="user_phone" value="<?=$arResult["AUTHOR_PHONE"]?>" placeholder="Телефон">
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
                            <input type="submit" name="submit" class="btn-1 mx-auto" value="<?=GetMessage("MFT_SUBMIT")?>">
                            <p class="fs-07 faded text-center mt-4">Я согласен на обработку персональных данных и получение информационных сообщений</p>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

