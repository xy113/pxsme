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
			alert("����û�е�¼�����ܷ������ۡ�");
		}else{
			$("#article_comment").html(response);
		}
	})
}
function DropComment(articleid,id){
	if(confirm("��ȷ��Ҫɾ����������")){
		$.get("comment.php?inajax=1&do=drop&articleid="+articleid+"&id="+id,function(response){
			if(response == 'nopriv'){
				alert("��û�д�Ȩ�ޡ�");
			}else{
				$("#article_comment").html(response);	
			}
		})
	}
}