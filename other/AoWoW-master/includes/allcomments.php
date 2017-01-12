<?php

require_once('includes/game.php');

function getcomments($type, $typeid)
{
	global $DB;
	global $rDB;

	$rows = $DB->select('
		SELECT id, userid, post_date, commentbody, replyto
		FROM ?_comments
		WHERE type=? AND typeid=?
		ORDER BY replyto, post_date
		',
		$type, $typeid
	);

	$comments = array();

	foreach($rows as $i=>$row)
	{
		$comments[$i] = array();
		$comments[$i] = $rDB->selectRow('SELECT a.username as user, ac.gmlevel as roles FROM account a LEFT JOIN account_access ac USING(id) WHERE id = ?d LIMIT 1', $row['userid']);
		if (!(IsSet($comments[$i]['user'])))
			$comments[$i]['user'] = "Anonymous";
		$comments[$i]['number'] = $i;
		$comments[$i]['id'] = $row['id'];
		$comments[$i]['body'] = $row['commentbody'];
		$comments[$i]['date'] = $row['post_date'];
		$comments[$i]['replyto'] = $row['replyto'];
		if ($comments[$i]['replyto'] != $comments[$i]['id'])
			$comments[$i]['indent'] = 1;

		$comments[$i]['raters'] = array();
		$comments[$i]['raters'] = $DB->select('SELECT userid, rate FROM ?_comments_rates WHERE commentid=?d', $comments[$i]['id']);
		$comments[$i]['rating'] = sum_subarrays_by_key($comments[$i]['raters'], 'rate');
		$comments[$i]['purged'] = ($comments[$i]['rating'] <= -50)? 1: 0;
		$comments[$i]['deleted'] = 0;
	}

	return $comments;
}

?>