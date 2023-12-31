{config_load file="$conf_file"}
<html>
<head>
	{include file='head.tpl'}
	<style type="text/css">
{literal}
		.menu-buttons a { border-color: black }
		.news { position: relative; text-align: left; width: 415px; height: 191px; margin: 30px auto 0 auto; background: url(templates/wowhead/images/mainpage-bg-news-{/literal}{$language}{literal}.jpg) no-repeat }
		.news-list { padding: 26px 0 0 26px; margin: 0 }
		.news-list li { line-height: 2em }
		.news-img1 { position: absolute; left: 60px; top: 155px; width: 172px; height: 17px }
		.news-img2 { position: absolute; left: 246px; top: 48px; width: 145px; height: 127px }
		.news-talent { position: absolute; left: 240px; top: 29px; width: 152px; height: 146px }
{/literal}
	</style>
</head>
<body>
	<div id="layers"></div>
	<noscript><div id="noscript-bg"></div><div id="noscript-text"><b>{#js_err#}</div></noscript>
	<div id="home">
		<h1>{$title}</h1>
		<span id="menu-buttons-generic" class="menu-buttons"></span>
		<script type="text/javascript">
			Menu.addButtons(ge('menu-buttons-generic'), mn_path);
		</script>
		<div class="pad"></div>

		<script type="text/javascript">g_initLanguageChanger()</script>

		<div class="pad"></div>

		<form method="get" action="?" onsubmit="if(trim(this.elements[0].value) == '') return false">
			<input type="text" name="search" size="38" id="search-generic" /><input type="submit" value="{#search#}" />
		</form>

		<script type="text/javascript">
			var _ = ge('search-generic');
			LiveSearch.attach(_);
			_.focus()
		</script>

                <div id="footer">
                {foreach from=$version item=item}
                    {$item.text}.
                {/foreach}
                    <br />Based on <span style="color: #f00;">AoWoW</span>
                </div>

</body>
</html>