<?php
/**
 * ============================================================================
 * ��Ȩ���� (C) 2010-2099 WWW.SONGDEWEI.COM All Rights Reserved��
 * ��վ��ַ: http://www.songdewei.com
 * ============================================================================
 * @author:     David Song<songdewei@163.com>
 * @version:    v1.0
 * ---------------------------------------------
 * $Date: 2011-10-18
 * $Id: config.php
 **/
$config = array();
$config['db']['dbhost']   = 'localhost';
$config['db']['dbuser']   = 'root';
$config['db']['dbpwd']    = '123123';
$config['db']['dbname']   = 'pxunion';
$config['db']['pconnect'] = 0;
$config['db']['tablepre'] = 'sdw_';
$config['db']['charset']  = 'GBK';
// COOKIE ����
$config['cookie']['cookiepre'] 	   = 'xcms_'; 	// COOKIEǰ׺
$config['cookie']['cookiedomain']  = ''; 		// COOKIE������
$config['cookie']['cookiepath']    = '/'; 		// COOKIE����·��
// ��̨����
$config['admincp']['founders']	   = '1';		// վ�㴴ʼ�ˣ�ӵ��վ������̨�����Ȩ�ޣ�ÿ��վ��������� 1���������ʼ��
												// ����ʹ��uid��Ҳ����ʹ���û����������ʼ��֮����ʹ�ö��š�,���ֿ�;
$config['admincp']['runquery']	   = 1;		// �Ƿ������̨���� SQL ��� 1=�� 0=��[��ȫ]
$config['admincp']['edittemplate'] = 1;     // �Ƿ������̨�༭ģ�� 1=�� 0=��[��ȫ]
// ҳ���������
$config['output']['charset'] 	   = 'gbk';	// ҳ���ַ���
$config['output']['forceheader']   = 1;		// ǿ�����ҳ���ַ��������ڱ���ĳЩ��������
$config['output']['gzip'] 		   = 0;		// �Ƿ���� Gzip ѹ�����
$config['output']['tplrefresh']    = 1;		// ģ���Զ�ˢ�¿��� 0=�ر�, 1=��
$config['output']['staticurl'] 	   = 'static/';	// վ�㾲̬�ļ�·������/����β
$config['output']['ajaxvalidate']  = 0;		// �Ƿ��ϸ���֤ Ajax ҳ�����ʵ�� 0=�رգ�1=��
// վ�㰲ȫ����
$config['language']  = 'zh_cn';	// ҳ������ zh_cn/zh_tw
$config['authkey']	 = 'asdfasfas';	// վ�������Կ
?>