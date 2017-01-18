/**
 * ============================================================================
 * ��Ȩ���� (C) 2010-2099 WWW.SONGDEWEI.COM All Rights Reserved��
 * ��վ��ַ: http://www.songdewei.com
 * ============================================================================
 * @author:     David Song<songdewei@163.com>
 * @version:    v1.0
 * ---------------------------------------------
 * $Date: 2011-06-16
 * $ID: image.js
*/ 
var rowID = 1;
function SaveFile(obj){
	var checked = true;
	var theForm = document.form1;
	var items = document.getElementsByName('imageurls[]');
	for(var i=0; i<items.length;i++){
		if(items[i].value){
			continue;
		}else{
			checked = false;
			break;
		}
	}
	if(checked){
		theForm.submit();
	}else{
		showError('��ѡ����Ҫ�ϴ���ͼƬ��');
		return false;
	}
}

function AddSignFile(){ 
	var signFrame = $$("FileFrame");
	//�����
	var newTR = signFrame.insertRow(signFrame.rows.length);
	newTR.id = "FileItem" + rowID;
  //�����:���
  var newNameTD=newTR.insertCell(0);
	newNameTD.innerHTML = NewFileInput(rowID);
	//���к��ƽ���һ��
	rowID++;
}

function AddSignURL(){ 
	var signFrame = $$("URLFrame");
	//�����
	var newTR = signFrame.insertRow(signFrame.rows.length);
	newTR.id = "URLItem" + rowID;
  //�����:���
  var newNameTD=newTR.insertCell(0);
	newNameTD.innerHTML = NewUrlInput(rowID);
	//���к��ƽ���һ��
	rowID++;
}

//ɾ��ָ����
function DropFile(RowID){
	var signFrame = $$('FileFrame');
	//��ȡ��Ҫɾ�����е�Index
	var Row = $$('FileItem'+RowID);
	var rowIndex = Row.rowIndex;
	//ɾ��ָ��Index����
	if(rowIndex){
	   signFrame.deleteRow(rowIndex);
	}
}

//ɾ��ָ����
function DropURL(RowID){
	var signFrame = $$('URLFrame');
	//��ȡ��Ҫɾ�����е�Index
	var Row = $$('URLItem'+RowID);
	var rowIndex = Row.rowIndex;
	//ɾ��ָ��Index����
	if(rowIndex){
	   signFrame.deleteRow(rowIndex);
	}
}

function ClearAll(tbl){
	var signFrame = $$(tbl);
	var rowscount = signFrame.rows.length;
	//ѭ��ɾ����,�����һ����ǰɾ��
	for(i=rowscount - 1;i >=0; i--){
	    signFrame.deleteRow(i);
	}
	rowID = 0;
}

function NewFileInput(rowid){
    var Html ='<div class="title-div"><span class="label1">ͼƬ�ļ���</span><span class="label3"><input name="imagefiles[]" type="file" class="fileinput" size="59" style="border:1px #7F9DB9 solid;" /> <span class="drop"  title="ɾ��" onclick="DropFile('+rowid+')"></span></span></div>';
         Html +='<div class="title-div"><span class="label2">ͼƬ˵����</span><span class="label3"><textarea name="description1[]" style="width:480px; height:65px;"></textarea></span></div>';
	return Html;
}

function NewUrlInput(rowid){
	var Html ='<div class="title-div"><span class="label1">ͼƬ��ַ��</span><span class="label3"><input name="imageurls[]" type="text" class="textinput" style="width:480px;" /> <span class="drop"  title="ɾ��" onclick="DropURL('+rowid+')"></span></span></div>';
		Html+='<div class="title-div"><span class="label2">ͼƬ˵����</span><span class="label3"><textarea name="description2[]" style="width:480px; height:65px;"></textarea></span></div>';
	return Html;
}