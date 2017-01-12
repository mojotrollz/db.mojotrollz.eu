<?php
$this->brick('header');
$f = $this->filter;                                         // shorthand
?>

    <div class="main" id="main">
        <div class="main-precontents" id="main-precontents"></div>
        <div class="main-contents" id="main-contents">

<?php
$this->brick('announcement');

$this->brick('pageTemplate', ['fi' => empty($f['query']) ? null : ['query' => $f['query'], 'menuItem' => 3]]);
?>

            <div id="fi" style="display: <?php echo empty($f['query']) ? 'none' : 'block' ?>;">
                <form action="?quests<?php echo $this->subCat; ?>&filter" method="post" name="fi" onsubmit="return fi_submit(this)" onreset="return fi_reset(this)">
                    <div class="rightpanel">
                        <div style="float: left"><?php echo Lang::game('type').Lang::main('colon'); ?></div><small><a href="javascript:;" onclick="document.forms['fi'].elements['ty[]'].selectedIndex = -1; return false" onmousedown="return false"><?php echo Lang::main('clear'); ?></a></small>
                        <div class="clear"></div>
                        <select name="ty[]" size="6" multiple="multiple" class="rightselect">
<?php
foreach (Lang::quest('questInfo') as $i => $str):
    echo '                                <option value="'.$i.'"'.(isset($f['ty']) && in_array($i, (array)$f['ty']) ? ' selected' : null).'>'.$str."</option>\n";
endforeach;
?>
                        </select>
                    </div>

                    <table>
                        <tr>
                            <td><?php echo Util::ucFirst(Lang::main('name')).Lang::main('colon'); ?></td>
                            <td colspan="3">
                                <table><tr>
                                    <td>&nbsp;<input type="text" name="na" size="30" <?php echo isset($f['na']) ? 'value="'.Util::htmlEscape($f['na']).'" ' : null; ?>/></td>
                                    <td>&nbsp; <input type="checkbox" name="ex" value="on" id="quest-ex" <?php echo isset($f['ex']) ? 'checked ' : null; ?>/></td>
                                    <td><label for="quest-ex"><span class="tip" onmouseover="$WH.Tooltip.showAtCursor(event, LANG.tooltip_extendedquestsearch, 0, 0, 'q')" onmousemove="$WH.Tooltip.cursorUpdate(event)" onmouseout="$WH.Tooltip.hide()"><?php echo Lang::main('extSearch'); ?></span></label></td>
                                </tr></table>
                            </td>
                        </tr>
                        <tr>
                            <td class="padded"><?php echo Lang::game('level').Lang::main('colon'); ?></td>
                            <td class="padded">&nbsp;<input type="text" name="minle" maxlength="2" class="smalltextbox" <?php echo isset($f['minle']) ? 'value="'.$f['minle'].'" ' : null; ?>/> - <input type="text" name="maxle" maxlength="2" class="smalltextbox" <?php echo isset($f['maxle']) ? 'value="'.$f['maxle'].'" ' : null; ?>/></td>
                            <td class="padded" width="100%">
                                <table><tr>
                                    <td>&nbsp;&nbsp;&nbsp;<?php echo Lang::main('_reqLevel').Lang::main('colon'); ?></td>
                                    <td>&nbsp;<input type="text" name="minrl" maxlength="2" class="smalltextbox" <?php echo isset($f['minrl']) ? 'value="'.$f['minrl'].'" ' : null; ?>/> - <input type="text" name="maxrl" maxlength="2" class="smalltextbox" <?php echo isset($f['maxrl']) ? 'value="'.$f['maxrl'].'" ' : null; ?>/></td>
                                </tr></table>
                            </td>
                        </tr>
                        <tr>
                            <td class="padded"><?php echo Lang::main('side').Lang::main('colon'); ?></td>
                            <td class="padded" colspan="3">&nbsp;<select name="si">
                                <option></option>
<?php
foreach (Lang::game('si') as $i => $str):
    echo '                                <option value="'.$i.'"'.(isset($f['si']) && $i == $f['si'] ? ' selected' : null).'>'.$str."</option>\n";
endforeach;
?>
                            </select></td>
                        </tr>
                    </table>
                    <div id="fi_criteria" class="padded criteria"><div></div></div><div><a href="javascript:;" id="fi_addcriteria" onclick="fi_addCriterion(this); return false"><?php echo Lang::main('addFilter'); ?></a></div>

                    <div class="padded2 clear">
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
                fi_init('quests');
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
