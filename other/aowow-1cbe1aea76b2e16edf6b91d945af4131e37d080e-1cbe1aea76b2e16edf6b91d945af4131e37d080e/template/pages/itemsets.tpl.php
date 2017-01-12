<?php
$this->brick('header');
$f = $this->filter;                                         // shorthand
?>

    <div class="main" id="main">
        <div class="main-precontents" id="main-precontents"></div>
        <div class="main-contents" id="main-contents">

<?php
$this->brick('announcement');

$this->brick('pageTemplate', ['fi' => empty($f['query']) ? null : ['query' => $f['query'], 'menuItem' => 2]]);
?>

            <div id="fi" style="display: <?php echo empty($f['query']) ? 'none' : 'block' ?>;">
                <form action="?itemsets&filter" method="post" name="fi" onsubmit="return fi_submit(this)" onreset="return fi_reset(this)">
                    <div class="rightpanel">
                        <div style="float: left"><?php echo Lang::item('_quality').Lang::main('colon'); ?></div>
                        <small><a href="javascript:;" onclick="document.forms['fi'].elements['qu[]'].selectedIndex = -1; return false" onmousedown="return false"><?php echo Lang::main('clear'); ?></a></small>
                        <div class="clear"></div>
                        <select name="qu[]" size="7" multiple="multiple" class="rightselect" style="background-color: #181818">
<?php
foreach (Lang::item('quality') as $i => $str):
    echo '                            <option value="'.$i.'" class="q'.$i.'"'.(isset($f['qu']) && in_array($i, (array)$f['qu']) ? ' selected' : null).'>'.$str."</option>\n";
endforeach;
?>
                        </select>
                    </div>

                    <div class="rightpanel2">
                        <div style="float: left"><?php echo Lang::game('type').Lang::main('colon'); ?></div>
                        <small><a href="javascript:;" onclick="document.forms['fi'].elements['ty[]'].selectedIndex = -1; return false" onmousedown="return false"><?php echo Lang::main('clear'); ?></a></small>
                        <div class="clear"></div>
                        <select name="ty[]" size="7" multiple="multiple" class="rightselect">
<?php
foreach (Lang::itemset('types') as $i => $str):
    if ($str):
        echo '                            <option value="'.$i.'"'.(isset($f['ty']) && in_array($i, (array)$f['ty']) ? ' selected' : null).'>'.$str."</option>\n";
    endif;
endforeach;
?>
                        </select>
                    </div>

                    <table>
                        <tr>
                            <td><?php echo Util::ucFirst(Lang::main('name')).Lang::main('colon'); ?></td>
                            <td colspan="3">&nbsp;<input type="text" name="na" size="30" <?php echo isset($f['na']) ? 'value="'.Util::htmlEscape($f['na']).'" ' : null; ?>/></td>
                        </tr><tr>
                            <td class="padded"><?php echo Lang::game('level').Lang::main('colon'); ?></td>
                            <td class="padded">&nbsp;<input type="text" name="minle" maxlength="3" class="smalltextbox2" <?php echo isset($f['minle']) ? 'value="'.$f['minle'].'" ' : null; ?>/> - <input type="text" name="maxle" maxlength="3" class="smalltextbox2" <?php echo isset($f['maxle']) ? 'value="'.$f['maxle'].'" ' : null; ?>/></td>
                            <td class="padded" width="100%">
                                <table><tr>
                                    <td>&nbsp;&nbsp;&nbsp;<?php echo Lang::main('_reqLevel').Lang::main('colon'); ?></td>
                                    <td>&nbsp;<input type="text" name="minrl" maxlength="2" class="smalltextbox" <?php echo isset($f['minrl']) ? 'value="'.$f['minrl'].'" ' : null; ?>/> - <input type="text" name="maxrl" maxlength="2" class="smalltextbox" <?php echo isset($f['maxrl']) ? 'value="'.$f['maxrl'].'" ' : null; ?>/></td>
                                </tr></table>
                            </td>
                        </tr><tr>
                            <td class="padded"><?php echo Util::ucFirst(Lang::game('class')).Lang::main('colon'); ?></td>
                            <td class="padded">&nbsp;<select name="cl">
                                <option></option>
<?php
foreach (Lang::game('cl') as $i => $str):
    if ($str):
        echo '                            <option value="'.$i.'"'.(isset($f['cl']) && $i == $f['cl'] ? ' selected' : null).'>'.$str."</option>\n";
    endif;
endforeach;
?>
                            </select></td>
                            <td class="padded">
                                <table><tr>
                                    <td>&nbsp;&nbsp;&nbsp;<?php echo Lang::itemset('_tag').Lang::main('colon'); ?></td>
                                    <td>&nbsp;<select name="ta">
                                        <option></option>
<?php
foreach (Lang::itemset('notes') as $i => $str):
    if ($str):
        echo '                            <option value="'.$i.'"'.(isset($f['ta']) && $i == $f['ta'] ? ' selected' : null).'>'.$str."</option>\n";
    endif;
endforeach;
?>
                                    </select></td>
                                </tr></table>
                            </td>
                        </tr>
                    </table>

                    <div id="fi_criteria" class="padded criteria"><div></div></div><div><a href="javascript:;" id="fi_addcriteria" onclick="fi_addCriterion(this); return false"><?php echo Lang::main('addFilter'); ?></a></div>

                    <div class="padded2">
                        <div style="float: right"><?php echo Lang::main('refineSearch'); ?></div>
                        <?php echo Lang::main('match').Lang::main('colon'); ?><input type="radio" name="ma" value="" id="ma-0" <?php echo !isset($f['ma']) ? 'checked="checked" ' : null ?>/><label for="ma-0"><?php echo Lang::main('allFilter'); ?></label><input type="radio" name="ma" value="1" id="ma-1" <?php echo isset($f['ma']) ? 'checked="checked" ' : null ?> /><label for="ma-1"><?php echo Lang::main('oneFilter'); ?></label>
                    </div>

                    <div class="clear"></div>

                    <div class="padded">
                        <input type="submit" value="<?php echo Lang::main('applyFilter'); ?>" />
                        <input type="reset" value="<?php echo Lang::main('resetForm'); ?>" />
                    </div>

                </form>
                <div class="pad"></div>
            </div>

            <script type="text/javascript">//<![CDATA[
                fi_init('itemsets');
<?php
foreach ($f['fi'] as $str):
    echo '                '.$str."\n";
endforeach;
?>
            //]]></script>

<?php $this->brick('lvTabs'); ?>

            <div class="clear"></div>
        </div><!-- main-contents -->
    </div><!-- main -->

<?php $this->brick('footer'); ?>
