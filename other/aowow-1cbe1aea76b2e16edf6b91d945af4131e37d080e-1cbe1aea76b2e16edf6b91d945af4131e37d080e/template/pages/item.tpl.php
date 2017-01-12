<?php $this->brick('header'); ?>

    <div class="main" id="main">
        <div class="main-precontents" id="main-precontents"></div>
        <div class="main-contents" id="main-contents">

<?php
    $this->brick('announcement');

    $this->brick('pageTemplate');

    $this->brick('infobox');
?>

            <div class="text">
<?php $this->brick('redButtons'); ?>

                <h1><?php echo $this->name; ?></h1>

<?php
    $this->brick('tooltip');

    $this->brick('article');

if ($this->disabled):
?>
	<div class="pad"></div>
    <b style="color: red"><?php echo Lang::item('_unavailable'); ?></b>
<?php
endif;

if (!empty($this->transfer)):
    echo "    <div class=\"pad\"></div>\n    ".$this->transfer."\n";
endif;

if (!empty($this->subItems)):
?>
                <div class="clear"></div>
                <h3><?php echo Lang::item('_rndEnchants'); ?></h3>

                <div class="random-enchantments" style="margin-right: 25px">
                    <ul>
<?php
        foreach ($this->subItems['data'] as $k => $i):
            if ($k < (count($this->subItems['data']) / 2)):
                $eText = [];
                foreach ($i['enchantment'] as $eId => $txt):
                    $eText[] = '<a style="text-decoration:none; color:#CCCCCC;" href="?enchantment='.$eId.'">'.$txt.'</a>';
                endforeach;

                echo '                        <li><div><span title="ID'.Lang::main('colon').$this->subItems['randIds'][$k].'" class="tip q'.$this->subItems['quality'].'">...'.$i['name'].'</span>';
                echo '                        <small class="q0">'.sprintf(Lang::item('_chance'), $i['chance']).'</small><br />'.implode(', ', $eText).'</div></li>';
            endif;
        endforeach;
?>
                    </ul>
                </div>
<?php
    if (count($this->subItems) > 1):
?>
                <div class="random-enchantments" style="margin-right: 25px">
                    <ul>
<?php
        foreach ($this->subItems['data'] as $k => $i):
            if ($k >= (count($this->subItems['data']) / 2)):
                $eText = [];
                foreach ($i['enchantment'] as $eId => $txt):
                    $eText[] = '<a style="text-decoration:none; color:#CCCCCC;" href="?enchantment='.$eId.'">'.$txt.'</a>';
                endforeach;

                echo '                        <li><div><span title="ID'.Lang::main('colon').$this->subItems['randIds'][$k].'" class="tip q'.$this->subItems['quality'].'">...'.$i['name'].'</span>';
                echo '                        <small class="q0">'.sprintf(Lang::item('_chance'), $i['chance']).'</small><br />'.implode(', ', $eText).'</div></li>';
            endif;
        endforeach;
?>
                    </ul>
                </div>
<?php
    endif;
endif;

$this->brick('book');
?>

                <h2 class="clear"><?php echo Lang::main('related'); ?></h2>
            </div>

<?php
    $this->brick('lvTabs', ['relTabs' => true]);

    $this->brick('contribute');
?>

            <div class="clear"></div>
        </div><!-- main-contents -->
    </div><!-- main -->

<?php $this->brick('footer'); ?>
