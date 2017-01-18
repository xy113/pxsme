// JavaScript Document
function LoadData(articleid){
	$.get("comment.php?inajax=1&articleid="+articleid,function(response){
		$("#article_comment").html(response);
	})
}
function commentPage(page,para){
	$.get("comment.php?inajax=1&page="+page+"&"+para,function(response){
		$("#article_comment").html(response);
	})
}
function PostComment(articleid){
	$.post("comment.php?inajax=1&do=save&articleid="+articleid,{message:$("#message").val()},function(response){
		if(response == 'nologin'){
			alert("您还没有登录，不能发表评论。");
		}else{
			$("#article_comment").html(response);
		}
	})
}
function DropComment(articleid,id){
	if(confirm("您确定要删除此评论吗？")){
		$.get("comment.php?inajax=1&do=drop&articleid="+articleid+"&id="+id,function(response){
			if(response == 'nopriv'){
				alert("您没有此权限。");
			}else{
				$("#article_comment").html(response);	
			}
		})
	}
}