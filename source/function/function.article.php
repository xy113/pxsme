<?php
function listarticles($cid=0,$num=10,$titlelen=50,$summary=140,$recommend=false,$ob='id',$sort='DESC'){
	global $db,$config;
	$articles = $where = array();
	if ($cid>0) $where[] = "(c.cid=$cid OR c.fid=$cid)";
	if ($recommend) $where[] = "a.recommend=1";
	$wheresql = $where ? 'AND '.implode(' AND ',$where) : '';
	switch ($ob){
		case 'views' : $orderby = 'a.views';
		break;
		case 'time' : $orderby = 'a.dateline';
		break;
		default:$orderby = 'a.id';
	}
	!in_array($sort,array('ASC','DESC')) && $sort = 'DESC';
	$query = $db->query("SELECT a.id,a.cid,a.title,a.image,a.summary,a.dateline,a.views FROM sdw_articles a LEFT JOIN sdw_category c ON c.cid=a.cid WHERE a.audited=1 $wheresql ORDER BY $orderby $sort LIMIT 0,$num");
	while ($result = $db->fetch_array($query)){
		$result['arcurl'] = $config['rewrite'] ? "article-$result[id].html" : "article.php?id=$result[id]";
		$result['caturl'] = $config['rewrite'] ? "arclist-$result[cid]-1.html" : "arclist.php?cid=$result[cid]";
		$result['title'] = cutstr($result['title'],$titlelen);
		$result['summary'] = cutstr($result['summary'],$summary,'...');
		$articles[] = $result;
	}
	return $articles;
}
function listimagearticles($cid=0,$num=10,$titlelen=50,$summary=140,$recommend=false,$ob='id',$sort='DESC'){
	global $db,$config;
	$articles = $where = array();
	if ($cid>0) $where[] = "(c.cid=$cid OR c.fid=$cid)";
	if ($recommend) $where[] = "a.recommend=1";
	$wheresql = $where ? 'AND '.implode(' AND ',$where) : '';
	switch ($ob){
		case 'views' : $orderby = 'a.views';
		break;
		case 'time' : $orderby = 'a.dateline';
		break;
		default:$orderby = 'a.id';
	}
	!in_array($sort,array('ASC','DESC')) && $sort = 'DESC';
	$query = $db->query("SELECT a.id,a.cid,a.title,a.image,a.summary,a.dateline,a.views FROM sdw_articles a LEFT JOIN sdw_category c ON c.cid=a.cid WHERE a.audited=1 AND a.image<>'' $wheresql ORDER BY $orderby $sort LIMIT 0,$num");
	while ($result = $db->fetch_array($query)){
		$result['arcurl'] = $config['rewrite'] ? "article-$result[id].html" : "article.php?id=$result[id]";
		$result['caturl'] = $config['rewrite'] ? "arclist-$result[cid]-1.html" : "arclist.php?cid=$result[cid]";
		$result['title'] = cutstr($result['title'],$titlelen);
		$result['summary'] = cutstr($result['summary'],$summary,'...');
		$articles[] = $result;
	}
	return $articles;
}
?>