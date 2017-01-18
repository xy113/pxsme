<?php
/**
 * ============================================================================
 * 版权所有 (C) 2010-2099 WWW.SONGDEWEI.COM All Rights Reserved。
 * 网站地址: http://www.songdewei.com
 * ============================================================================
 * @author:     David Song<songdewei@163.com>
 * @version:    v1.0
 * ---------------------------------------------
 * $Date: 2012-02-14
 * $ID: admincp_job.php
*/
if(!defined('IN_XSCMS')){die('Access Denied!');}
$admin->checkadminpriv('allowadminjob');
$job = $jobs = array();
!$operation && $operation = 'list';
cpheader();
if ($operation == 'toggle_audited' && $inajax){
	$jobid = intval(MyGet('id'));
	$data = $db->GetOne("SELECT audited FROM sdw_jobs WHERE id=$jobid");
	$audited = $data['audited']==1 ? 0 : 1;
	$db->query("UPDATE sdw_jobs SET audited=$audited WHERE id=$jobid");
	dexit($audited);
}
if ($operation=='edit_salary' && $inajax){
	$jobid = intval(MyGet('id'));
	$salary = MyGet('val');
	$db->query("UPDATE sdw_jobs SET salary='$salary' WHERE id=$jobid");
	dexit($salary);
}
if ($operation=='edit_numbers' && $inajax){
	$jobid = intval(MyGet('id'));
	$numbers = MyGet('val');
	$db->query("UPDATE sdw_jobs SET numbers='$numbers' WHERE id=$jobid");
	dexit($numbers);
}
if ($operation=='audited'){
	$jobid = MyGet('val');
	!$jobid && $jobid = 0;
	$audited = intval(MyGet('value'));
	$db->query("UPDATE sdw_jobs SET audited=$audited WHERE id IN ($jobid)");
	$operation = 'list';
}
if ($operation=='move'){
	$cid = intval(MyGet('cid'));
	$jobid = MyGet('val');
	!$jobid && $jobid = 0;
	$db->query("UPDATE sdw_jobs SET cid=$cid WHERE id IN ($jobid)");
	$operation = 'list';
}
if ($operation=='save'){
	$jobid = intval(MyPost('id'));
	$job = $_POST['jobnew'];
	if ($jobid>0){
		$db->update('sdw_jobs',$job,"id=$jobid");
		$admin->cplog($LANG['job']['edit'].':'.$job['title']);
		$links[0] = array('text'=>$LANG['reedit'],'href'=>ADMINSCRIPT.'?action=job&operation=edit&id='.$jobid);
		$links[1] = array('text'=>$LANG['job_add'],'href'=>ADMINSCRIPT.'?action=job&operation=addnew&cid='.$job['cid']);
		$links[2] = array('text'=>$LANG['view'],'href'=>'job.php?id='.$jobid,'target'=>'_blank');
		$links[3] = array('text'=>$LANG['back_list'],'href'=>ADMINSCRIPT.'?action=job&cid='.$job['cid']);
		showmsg('modi_success',0,$links,false);
	}else {
		$job['author'] = $admin->admincp['admin'];
		$job['authorid'] = $admin->adminid;
		$job['dateline'] = $timestamp;
		$jobid = $db->insert('sdw_jobs',$job,true);
		$admin->cplog($LANG['job']['addnew'].':'.$job['title']);
		$links[0] = array('text'=>$LANG['continue_post'],'href'=>ADMINSCRIPT.'?action=job&operation=addnew&cid='.$job['cid']);
		$links[1] = array('text'=>$LANG['reedit'],'href'=>ADMINSCRIPT.'?action=job&operation=edit&id='.$jobid);
		$links[2] = array('text'=>$LANG['view'],'href'=>'job.php?id='.$jobid,'target'=>'_blank');
		$links[3] = array('text'=>$LANG['back_list'],'href'=>ADMINSCRIPT.'?action=job&cid='.$job['cid']);
		showmsg('save_success',0,$links,false);
	}
}
if ($operation=='addnew'){
	$cid = intval(MyGet('cid'));
	$smarty->assign('cid',$cid);
	$smarty->assign('categories',listcategries($cid,'job'));
}
if ($operation=='edit'){
	$jobid = intval(MyGet('id'));
	$job = $db->GetOne("SELECT * FROM sdw_jobs WHERE id=$jobid");
	$smarty->assign('job',$job);
	$smarty->assign('cid',$job['cid']);
	$smarty->assign('categories',listcategries($job['cid'],'job'));
}
if ($operation=='drop'){
	$jobid = MyGet('val');
	!$jobid && $jobid = 0;
	$query = $db->query("SELECT id,title FROM sdw_jobs WHERE id IN ($jobid)");
	while ($result = $db->fetch_array($query)){
		$admin->cplog($LANG['job']['drop'].':'.$job['title']);
		$db->query("DELETE FROM sdw_jobs WHERE id=$result[id]");
	}
	$operation = 'list';
}
if ($operation == 'list'){
	$where = $filter = array();
	$pagesize = 20;
	$filter['key'] = MyGet('q');
	$filter['cid'] = intval(MyGet('cid'));
	$filter['audited'] = intval(MyGet('audited'));
	$filter['authorid'] = intval(MyGet('authorid'));
	if ($filter['key']) $where[] = "a.title LIKE '%$filter[key]%'";
	if ($filter['cid']>0) $where[] = "(c.cid=$filter[cid] OR c.fid=$filter[cid])";
	if ($filter['audited']==1) $where[] = "a.audited=1";
	if ($filter['authorid']>0) $where[] = "a.authorid=$filter[authorid]";
	$wheresql = !empty($where) ? ' WHERE '.implode(' AND ',$where) : '';
	$filter['orderby'] = MyGet('orderby');
	$filter['sort']    = MyGet('sort');
    $_SESSION['joborderby'] = $filter['orderby'] ? $filter['orderby'] : null;
	switch($_SESSION['joborderby']){
		case 'views':
			$orderby = 'a.views';
		break;
		case 'time' :
			$orderby = 'a.dateline';
		break;
		default:
			$orderby = 'a.id';
		break;
	}
	$_SESSION['jobsort'] = $filter['sort'] ? strtoupper($filter['sort']) : (isset($_SESSION['jobsort']) ? $_SESSION['jobsort'] : 'DESC');
	if (MyGet('do')=='sort') $_SESSION['jobsort'] = $_SESSION['jobsort'] == 'ASC' ? 'DESC' : 'ASC';
	$sort = in_array($_SESSION['jobsort'],array('ASC','DESC')) ? $_SESSION['jobsort'] : 'DESC';	
	$data = $db->GetOne("SELECT COUNT(*) FROM sdw_jobs a LEFT JOIN sdw_category c ON c.cid=a.cid $wheresql");
	$totalrecords = $data['COUNT(*)'];
	$pagecount = $totalrecords<$pagesize ? 1 : ceil($totalrecords/$pagesize);
	$page = min(array($page,$pagecount));
	$limit = ($page-1) * $pagesize;
	$query = $db->query("SELECT a.id,a.cid,a.title,a.numbers,a.salary,a.dateline,a.views,a.audited,c.name FROM sdw_jobs a 
	LEFT JOIN sdw_category c ON c.cid=a.cid $wheresql ORDER BY $orderby $sort LIMIT $limit,$pagesize");
	while ($result = $db->fetch_array($query)){
		$result['joburl'] = 'job.php?id='.$result['id'];
		$jobs[] = $result;
	}
	$smarty->assign('jobs',$jobs);
	$smarty->assign('cid',$filter['cid']);
	$smarty->assign('filter',$filter);
	$smarty->assign('totalrecords',$totalrecords);
	$querystring = "cid=$filter[cid]&audited=$filter[audited]&authorid=$filter[authorid]&q=$key&sort=$filter[sort]&orderby=$filter[orderby]";
	$smarty->assign('pagelink',adminpage($page,$pagecount,$querystring));
	$smarty->assign('querystring',$querystring."&page=$page");	
	$smarty->assign('categories',listcategries($filter['cid'],'job'));
	if ($filter['cid']>0) $smarty->assign('category',$db->GetOne("SELECT name FROM sdw_category WHERE cid=$filter[cid]"));
	unset($job,$jobs,$where,$wheresql,$filter,$query,$result,$querystring,$orderby,$sort);
}
$smarty->display('admin_job.htm');
cpfooter();
?>