<?
if($INCLUDE_FROM_CACHE!='Y')return false;
$datecreate = '001671992910';
$dateexpire = '001707992910';
$ser_content = 'a:2:{s:7:"CONTENT";s:3824:"<div class="news-list">
		<p class="news-item" id="bx_651765591_36">
									<a href="/verter/detail.php?ID=36"><img
						class="preview_picture"
						border="0"
						src="/upload/iblock/14d/3n20d0s7wtzdk3k0logtubhf50lxa4dx/box_1.png"
						width="223"
						height="146"
						alt="Маркировка остатков, ивентаризация"
						title="Маркировка остатков, ивентаризация"
						style="float:left"
						/></a>
																<a href="/verter/detail.php?ID=36"><b>Маркировка остатков, ивентаризация</b></a><br />
										Перед получением кодов маркировки datamatrix, необходимо провести инвентаризацию на складе							<div style="clear:both"></div>
									<small>
			Эффект карточки:&nbsp;
							Градиент						</small><br />
			</p>
		<p class="news-item" id="bx_651765591_37">
									<a href="/verter/detail.php?ID=37"><img
						class="preview_picture"
						border="0"
						src="/upload/iblock/8ad/wkkd49z5nsog6b4f8fw32ahfjnnuw1vc/sticker.png"
						width="148"
						height="113"
						alt="Маркировка остатков, получение кодов маркировки"
						title="Маркировка остатков, получение кодов маркировки"
						style="float:left"
						/></a>
																<a href="/verter/detail.php?ID=37"><b>Маркировка остатков, получение кодов маркировки</b></a><br />
										Остатки на скаладе посчитаны, можно формировать запрос в систему честный знак для получения кодов маркировки datamatrix							<div style="clear:both"></div>
									<small>
			Эффект карточки:&nbsp;
							Нет						</small><br />
			</p>


        <div class="pages-container">
                    <a href="javascript:void(0)" class="more_goods">еще 2</a>
                <br/>
<font class="text">Новости 


	1 - 2 из 6<br /></font>

	<font class="text">

			Начало&nbsp;|&nbsp;Пред.&nbsp;|
	
	
					<b>1</b>
					
					<a href="/base/?PAGEN_1=3&amp;PAGEN_2=2">2</a>
					
					<a href="/base/?PAGEN_1=3&amp;PAGEN_2=3">3</a>
						|

			<a href="/base/?PAGEN_1=3&amp;PAGEN_2=2">След.</a>&nbsp;|
		<a href="/base/?PAGEN_1=3&amp;PAGEN_2=3">Конец</a>
	



</font>    </div>

</div>

<script>
    $(document).ready(function(){
        var PagenationContainer = $(\'#pagination-container\');
            $(\'.more_goods\').click(function () {
            alert();
            var ajaxurl = PagenationContainer.find(\'div.bx-pagination  ul li.bx-pag-next a\').attr(\'href\');
            var thatTxt = $(this).html();
            var that = this;
            $(this).html(\'...\');
            if(ajaxurl!==undefined){
                $.ajax({
                    type: "POST",
                    url: ajaxurl,
                    data: {\'ajax_get_page\': \'y\'},
                    dataType: "html",
                    success: function (data) {
                        var AppendLi = $(data).find(\'.pagination-items .paginator-item\');
                        var Pagination = $(data).filter(\'.pagination_wrap\').html();
                        PagenationContainer.find(\'.pagination-items\').append(AppendLi);
                        PagenationContainer.find(\'.pagination_wrap\').html(Pagination);
                        history.pushState(\'\', \'\', ajaxurl);
                        $(that).html(thatTxt);
                    }
                });
            }
            return false;
        });
    });
</script>";s:4:"VARS";a:2:{s:8:"arResult";a:7:{s:2:"ID";s:1:"7";s:14:"IBLOCK_TYPE_ID";s:6:"verter";s:13:"LIST_PAGE_URL";s:42:"#SITE_DIR#/verter/index.php?ID=#IBLOCK_ID#";s:15:"NAV_CACHED_DATA";N;s:4:"NAME";s:34:"База знаний/Статьи";s:7:"SECTION";b:0;s:8:"ELEMENTS";a:2:{i:0;i:36;i:1;i:37;}}s:18:"templateCachedData";a:5:{s:13:"additionalCSS";s:69:"/local/templates/verter/components/bitrix/news.list/default/style.css";s:9:"frameMode";b:1;s:8:"__NavNum";i:1;s:17:"__currentCounters";a:1:{s:28:"bitrix:system.pagenavigation";i:1;}s:13:"__editButtons";a:4:{i:0;a:5:{i:0;s:13:"AddEditAction";i:1;s:2:"36";i:2;s:191:"/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=7&type=verter&ID=36&lang=ru&force_catalog=&filter_section=0&bxpublic=Y&from_module=iblock&return_url=%2Fbase%2F%3FPAGEN_1%3D3%26clear_cache%3DY";i:3;s:31:"Изменить элемент";i:4;a:0:{}}i:1;a:5:{i:0;s:15:"AddDeleteAction";i:1;s:2:"36";i:2;s:142:"/bitrix/admin/iblock_list_admin.php?IBLOCK_ID=7&type=verter&lang=ru&action=delete&ID=E36&return_url=%2Fbase%2F%3FPAGEN_1%3D3%26clear_cache%3DY";i:3;s:29:"Удалить элемент";i:4;a:1:{s:7:"CONFIRM";s:123:"Будет удалена вся информация, связанная с этой записью. Продолжить?";}}i:2;a:5:{i:0;s:13:"AddEditAction";i:1;s:2:"37";i:2;s:191:"/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=7&type=verter&ID=37&lang=ru&force_catalog=&filter_section=0&bxpublic=Y&from_module=iblock&return_url=%2Fbase%2F%3FPAGEN_1%3D3%26clear_cache%3DY";i:3;s:31:"Изменить элемент";i:4;a:0:{}}i:3;a:5:{i:0;s:15:"AddDeleteAction";i:1;s:2:"37";i:2;s:142:"/bitrix/admin/iblock_list_admin.php?IBLOCK_ID=7&type=verter&lang=ru&action=delete&ID=E37&return_url=%2Fbase%2F%3FPAGEN_1%3D3%26clear_cache%3DY";i:3;s:29:"Удалить элемент";i:4;a:1:{s:7:"CONFIRM";s:123:"Будет удалена вся информация, связанная с этой записью. Продолжить?";}}}}}}';
return true;
?>